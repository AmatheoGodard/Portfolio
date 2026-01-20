<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class JuryController extends Controller
{
    /**
     * Affiche le tableau de bord du jury avec les fichiers disponibles
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        // Liste des documents disponibles pour le jury
        $documents = [
            [
                'title' => 'Curriculum Vitae',
                'description' => 'CV détaillé de Amathéo Godard',
                'filename' => 'CV_Amatheo_Godard.pdf',
                'icon' => 'file-text',
                'category' => 'Profil',
                'size' => $this->getFileSize('CV_Amatheo_Godard.pdf'),
            ],
            [
                'title' => 'Certifications',
                'description' => 'Certificats et formations complémentaires',
                'filename' => 'Certifications.pdf',
                'icon' => 'shield-check',
                'category' => 'Profil',
                'size' => $this->getFileSize('Certifications.pdf'),
            ],
            [
                'title' => 'Tableau de Synthèse',
                'description' => 'Tableau récapitulatif des compétences et réalisations',
                'filename' => 'Tableau_Synthese_BTS_SIO.pdf',
                'icon' => 'table',
                'category' => 'Documents BTS',
                'size' => $this->getFileSize('Tableau_Synthese_BTS_SIO.pdf'),
            ],
            [
                'title' => 'Dossier de preuve',
                'description' => 'Dossier de preuve complet pour l\'épreuve E5',
                'filename' => 'Dossier_de_preuve_E5.pdf',
                'icon' => 'file-text',
                'category' => 'Documents BTS',
                'size' => $this->getFileSize('Dossier_de_preuve_E5.pdf'),
            ],
            [
                'title' => 'Documents Annexe',
                'description' => 'Documents annexes du dossier',
                'filename' => 'Documents_Annexe.tar.gz',
                'icon' => 'file-text',
                'category' => 'Documents BTS',
                'size' => $this->getFileSize('Documents_Annexe.tar.gz'),
            ],
            [
                'title' => 'Projet E4 - Documentation',
                'description' => 'Documentation complète du projet E4',
                'filename' => 'Projet_E4_Documentation.pdf',
                'icon' => 'book-open',
                'category' => 'Projets',
                'size' => $this->getFileSize('Projet_E4_Documentation.pdf'),
            ],
            [
                'title' => 'Projet E4 - Code Source',
                'description' => 'Archive du code source du projet E4',
                'filename' => 'Projet_E4_Code_Source.zip',
                'icon' => 'code',
                'category' => 'Projets',
                'size' => $this->getFileSize('Projet_E4_Code_Source.zip'),
            ],
            [
                'title' => 'Attestations de Stage',
                'description' => 'Attestations et conventions de stage',
                'filename' => 'Attestation_de_stage_Sevremoine.pdf',
                'icon' => 'award',
                'category' => 'Stages',
                'size' => $this->getFileSize('Attestation_de_stage_Sevremoine.pdf'),
            ],
        ];

        $data = [
            'pageTitle' => 'Espace Jury - Amathéo Godard',
            'documents' => $documents,
        ];

        return view('jury.dashboard', $data);
    }

    /**
     * Télécharge un fichier spécifique
     *
     * @param string $filename
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function downloadFile($filename)
    {
        // Sécurité : autoriser uniquement certains fichiers
        $allowedFiles = [
            'CV_Amatheo_Godard.pdf',
            'Tableau_Synthese_BTS_SIO.pdf',
            'Projet_E4_Documentation.pdf',
            'Projet_E4_Code_Source.zip',
            'Attestation_de_stage_Sevremoine.pdf',
            'Veille_Technologique.pdf',
            'Certifications.pdf',
            'Portfolio_Projets.pdf',
        ];

        if (!in_array($filename, $allowedFiles)) {
            abort(403, 'Accès non autorisé à ce fichier.');
        }

        $filePath = public_path('documents/jury/' . $filename);

        if (!file_exists($filePath)) {
            return redirect()->back()->with('error', 'Le fichier demandé n\'existe pas.');
        }

        return response()->download($filePath, $filename);
    }

    /**
     * Télécharge tous les fichiers en archive ZIP
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function downloadAll()
    {
        $zip = new \ZipArchive();
        $zipFileName = 'Documents_BTS_Amatheo_Godard_' . date('Y-m-d') . '.zip';
        $zipFilePath = storage_path('app/' . $zipFileName);

        if ($zip->open($zipFilePath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === TRUE) {
            $documentsPath = public_path('documents/jury/');
            $files = File::files($documentsPath);

            foreach ($files as $file) {
                $zip->addFile($file->getRealPath(), $file->getFilename());
            }

            $zip->close();

            return response()->download($zipFilePath, $zipFileName)->deleteFileAfterSend(true);
        }

        return redirect()->back()->with('error', 'Impossible de créer l\'archive.');
    }

    /**
     * Obtient la taille d'un fichier de manière lisible
     *
     * @param string $filename
     * @return string
     */
    private function getFileSize($filename)
    {
        $filePath = public_path('documents/jury/' . $filename);

        if (!file_exists($filePath)) {
            return 'N/A';
        }

        $bytes = filesize($filePath);
        $units = ['o', 'Ko', 'Mo', 'Go'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }
}
