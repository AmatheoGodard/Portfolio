<section id="profil" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Photo -->
            <div class="flex justify-center md:justify-start">
                <div class="relative">
                    <div class="w-64 h-64 sm:w-80 sm:h-80 rounded-full overflow-hidden shadow-xl border-8 border-white relative">
                        <img 
                            src="images/amatheo.png" 
                            alt="Amathéo Godard"
                            class="w-full h-full object-cover"
                        >
                    </div>
                    <!-- Decorative ring -->
                    <div class="absolute -inset-4 border-4 border-indigo-500/30 rounded-full -z-10"></div>
                </div>
            </div>

            <!-- Content -->
            <div class="space-y-6">
                <div>
                    <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                        À propos de moi
                    </h2>
                    <div class="w-20 h-1 bg-indigo-500 rounded-full"></div>
                </div>

                <div class="space-y-4 text-lg text-gray-600">
                    <p>
                        Bonjour ! Je suis étudiant en BTS SIO (Services Informatiques aux Organisations) 
                        spécialité SLAM (Solutions Logicielles et Applications Métiers).
                    </p>
                    <p>
                        Passionné par le développement web et les nouvelles technologies, je me spécialise 
                        dans la création d'applications modernes et performantes. Mon parcours m'a permis 
                        d'acquérir des compétences solides en programmation et en gestion de projets.
                    </p>
                    <p>
                        Je recherche actuellement des opportunités de stage pour 
                        continuer à développer mes compétences et contribuer à des projets innovants.
                    </p>
                </div>

                <div class="pt-4">
                    <a 
                        href="{{ route('cv.download') }}" 
                        class="btn-primary inline-flex items-center gap-2 px-6 py-3 bg-indigo-500 text-white rounded-lg hover:bg-indigo-600 transition-colors"
                    >
                        <i data-lucide="download" class="w-5 h-5"></i>
                        Télécharger mon CV
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
