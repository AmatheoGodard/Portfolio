<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class PortfolioController extends Controller
{
    /**
     * Affiche la page d'accueil du portfolio
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'pageTitle' => 'Amathéo Godard - Portfolio',
            'metaDescription' => 'Portfolio d\'Amathéo Godard, étudiant en BTS SIO option SLAM. Développeur web passionné.',
        ];

        return view('home', $data);
    }

    /**
     * Traite l'envoi du formulaire de contact
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendContact(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ], [
            'name.required' => 'Le nom est obligatoire',
            'email.required' => 'L\'email est obligatoire',
            'email.email' => 'L\'email doit être valide',
            'subject.required' => 'Le sujet est obligatoire',
            'message.required' => 'Le message est obligatoire',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->only(['name', 'email', 'subject', 'message']);

        // TODO: Configurer l'envoi d'email
        Mail::to('contact@agodard.fr')->send(new ContactMail($data));

        // Pour l'instant, on simule l'envoi
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès ! Je vous répondrai dans les plus brefs délais.');
    }

    /**
     * Télécharge le CV
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function downloadCV()
    {
        $filePath = public_path('documents/CV_Amatheo_Godard.pdf');
        
        if (!file_exists($filePath)) {
            return redirect()->back()->with('error', 'Le CV n\'est pas disponible pour le moment.');
        }

        return response()->download($filePath, 'CV_Amatheo_Godard.pdf');
    }
}