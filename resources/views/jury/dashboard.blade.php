<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle ?? 'Espace Jury' }}</title>
    
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-indigo-500 rounded-lg flex items-center justify-center">
                        <i data-lucide="shield-check" class="w-6 h-6 text-white"></i>
                    </div>
                    <div>
                        <h1 class="text-lg font-bold text-gray-900">Espace Jury</h1>
                        <p class="text-xs text-gray-600">Amathéo Godard - BTS SIO SLAM</p>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex items-center gap-4">
                    <a 
                        href="{{ route('home') }}" 
                        class="text-gray-600 hover:text-indigo-500 transition-colors hidden sm:flex items-center gap-2"
                    >
                        <i data-lucide="home" class="w-4 h-4"></i>
                        <span>Portfolio public</span>
                    </a>
                    
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button 
                            type="submit"
                            class="flex items-center gap-2 px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition-colors"
                        >
                            <i data-lucide="log-out" class="w-4 h-4"></i>
                            <span>Déconnexion</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Messages -->
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg flex items-center gap-3">
                <i data-lucide="check-circle" class="w-5 h-5"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if(session('error'))
            <div class="mb-6 p-4 bg-red-100 text-red-700 rounded-lg flex items-center gap-3">
                <i data-lucide="alert-circle" class="w-5 h-5"></i>
                <span>{{ session('error') }}</span>
            </div>
        @endif

        <!-- Welcome Section -->
        <div class="bg-gradient-to-r from-indigo-500 to-cyan-400 rounded-2xl p-8 mb-8 text-white">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Bienvenue, Membre du Jury 👋</h2>
                    <p class="text-white/90">
                        Accédez à tous les documents nécessaires pour l'évaluation du dossier BTS SIO de Amathéo Godard
                    </p>
                </div>
                <a 
                    href="{{ route('jury.downloadAll') }}"
                    class="flex items-center gap-2 px-6 py-3 bg-white text-indigo-500 font-medium rounded-lg hover:bg-gray-50 transition-colors whitespace-nowrap"
                >
                    <i data-lucide="download" class="w-5 h-5"></i>
                    Tout télécharger (ZIP)
                </a>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-indigo-100 rounded-lg">
                        <i data-lucide="file-text" class="w-6 h-6 text-indigo-500"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Documents disponibles</p>
                        <p class="text-2xl font-bold text-gray-900">{{ count($documents) }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-cyan-100 rounded-lg">
                        <i data-lucide="folder" class="w-6 h-6 text-cyan-500"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Catégories</p>
                        <p class="text-2xl font-bold text-gray-900">4</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-green-100 rounded-lg">
                        <i data-lucide="calendar" class="w-6 h-6 text-green-500"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Dernière mise à jour</p>
                        <p class="text-lg font-bold text-gray-900">{{ date('d/m/Y') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Documents Section -->
        <div class="mb-8">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Documents du Dossier BTS</h3>

            @php
                $categories = collect($documents)->groupBy('category');
            @endphp

            @foreach($categories as $category => $categoryDocuments)
                <div class="mb-8">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <i data-lucide="folder" class="w-5 h-5 text-indigo-500"></i>
                        {{ $category }}
                    </h4>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($categoryDocuments as $document)
                            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-md hover:border-indigo-200 transition-all duration-300 group">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="p-3 bg-indigo-100 group-hover:bg-indigo-500 rounded-lg transition-colors">
                                        <i data-lucide="{{ $document['icon'] }}" class="w-6 h-6 text-indigo-500 group-hover:text-white transition-colors"></i>
                                    </div>
                                    <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded-full">
                                        {{ $document['size'] }}
                                    </span>
                                </div>

                                <h5 class="font-bold text-gray-900 mb-2">{{ $document['title'] }}</h5>
                                <p class="text-sm text-gray-600 mb-4 line-clamp-2">{{ $document['description'] }}</p>

                                <a 
                                    href="{{ route('jury.download', $document['filename']) }}"
                                    class="flex items-center justify-center gap-2 w-full py-2 px-4 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg transition-colors"
                                >
                                    <i data-lucide="download" class="w-4 h-4"></i>
                                    <span>Télécharger</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Information Panel -->
        <div class="bg-blue-50 border border-blue-200 rounded-xl p-6">
            <div class="flex items-start gap-4">
                <div class="p-2 bg-blue-100 rounded-lg">
                    <i data-lucide="info" class="w-5 h-5 text-blue-500"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">Informations importantes</h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center gap-2">
                            <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
                            Tous les documents sont au format PDF ou ZIP
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
                            Vous pouvez télécharger les fichiers individuellement ou en archive complète
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
                            Pour toute question, contactez : amatheo.godard@email.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="text-center text-sm text-gray-600">
                <p>© {{ date('Y') }} Amathéo Godard - BTS SIO Option SLAM</p>
                <p class="mt-1">Espace réservé aux membres du jury</p>
            </div>
        </div>
    </footer>

    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>

    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</body>
</html>
