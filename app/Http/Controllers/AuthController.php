<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Affiche la page de connexion
     */
    public function showLogin()
    {
        if (Session::has('jury_authenticated')) {
            return redirect()->route('jury.dashboard');
        }

        return view('auth.login', [
            'pageTitle' => 'Connexion Jury'
        ]);
    }

    /**
     * Traite la connexion via le champ name
     */
    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ], [
            'name.required' => 'Le nom est obligatoire',
            'password.required' => 'Le mot de passe est obligatoire',
        ]);

        // Recherche l'utilisateur par name
        $user = User::where('name', $request->name)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Authentification réussie
            Session::put('jury_authenticated', true);
            Session::put('jury_id', $user->id);
            Session::put('jury_name', $user->name);
            Session::put('jury_login_time', now());

            return redirect()->route('jury.dashboard')
                ->with('success', 'Connexion réussie ! Bienvenue ' . $user->name);
        }

        // Échec de la connexion
        return redirect()->back()
            ->withInput($request->only('name'))
            ->withErrors(['error' => 'Identifiants incorrects.']);
    }

    /**
     * Déconnexion
     */
    public function logout()
    {
        Session::forget('jury_authenticated');
        Session::forget('jury_id');
        Session::forget('jury_name');
        Session::forget('jury_login_time');
        Session::flush();

        return redirect()->route('login')->with('success', 'Déconnexion réussie.');
    }
}
