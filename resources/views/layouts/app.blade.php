<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $metaDescription ?? 'Portfolio d\'Amathéo Godard' }}">
    <meta name="author" content="Amathéo Godard">
    <title>{{ $pageTitle ?? 'Portfolio - Amathéo Godard' }}</title>
    
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN (pour développement rapide) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    
    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    @yield('content')

    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>

    <!-- Smooth Scroll Script -->
    <script>
        // Smooth scroll pour la navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 80;
                    const elementPosition = target.getBoundingClientRect().top + window.scrollY;
                    window.scrollTo({
                        top: elementPosition - offset,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Active section highlighting
        window.addEventListener('scroll', function() {
            const sections = ['hero', 'profil', 'parcours', 'projets', 'competences', 'contact'];
            const scrollPosition = window.scrollY + 150;

            sections.forEach(sectionId => {
                const element = document.getElementById(sectionId);
                if (element) {
                    const offsetTop = element.offsetTop;
                    const offsetBottom = offsetTop + element.offsetHeight;

                    if (scrollPosition >= offsetTop && scrollPosition < offsetBottom) {
                        document.querySelectorAll('.nav-link').forEach(link => {
                            link.classList.remove('active');
                        });
                        const activeLink = document.querySelector(`[href="#${sectionId}"]`);
                        if (activeLink) {
                            activeLink.classList.add('active');
                        }
                    }
                }
            });
        });

        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobile-menu');
            const menuButton = document.getElementById('mobile-menu-button');
            
            if (!mobileMenu.contains(event.target) && !menuButton.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 10) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
