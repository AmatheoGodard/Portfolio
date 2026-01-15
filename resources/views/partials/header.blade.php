<header class="header-nav fixed top-0 left-0 right-0 z-50 bg-white transition-all duration-300">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="#hero" class="text-xl font-bold text-gray-900 hover:text-indigo-500 transition-colors">
                Amathéo Godard
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center gap-8">
                <a href="#hero" class="nav-link text-gray-600 hover:text-indigo-500 transition-colors">Accueil</a>
                <a href="#profil" class="nav-link text-gray-600 hover:text-indigo-500 transition-colors">Profil</a>
                <a href="#parcours" class="nav-link text-gray-600 hover:text-indigo-500 transition-colors">Parcours</a>
                <a href="#competences" class="nav-link text-gray-600 hover:text-indigo-500 transition-colors">Compétences</a>
                <a href="#projets" class="nav-link text-gray-600 hover:text-indigo-500 transition-colors">Projets</a>
                <a href="#contact" class="nav-link text-gray-600 hover:text-indigo-500 transition-colors">Contact</a>
                <!-- NOUVEAU : Bouton Espace Jury -->
                <a
                    href="{{ route('login') }}"
                    class="flex items-center gap-2 px-4 py-2 bg-indigo-500 text-white rounded-lg hover:bg-indigo-600 transition-colors">
                    <i data-lucide="shield-check" class="w-4 h-4"></i>
                    <span>Espace Jury</span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button
                id="mobile-menu-button"
                onclick="toggleMobileMenu()"
                class="md:hidden p-2 text-gray-900">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg border-t border-gray-100">
        <div class="px-4 py-6 space-y-4">
            <a href="#hero" class="block py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors">Accueil</a>
            <a href="#profil" class="block py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors">Profil</a>
            <a href="#parcours" class="block py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors">Parcours</a>
            <a href="#competences" class="block py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors">Compétences</a>
            <a href="#projets" class="block py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors">Projets</a>
            <a href="#contact" class="block py-2 px-4 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors">Contact</a>
        </div>
    </div>
</header>