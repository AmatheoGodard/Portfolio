<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Jury - Portfolio Amathéo Godard</title>
    
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
        
        .gradient-bg {
            background: linear-gradient(135deg, #6366F1 0%, #22D3EE 100%);
        }
        
        .login-card {
            backdrop-filter: blur(16px);
            background: rgba(255, 255, 255, 0.95);
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in {
            animation: fadeIn 0.6s ease-out;
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md animate-fade-in">
        <!-- Logo / Header -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-lg mb-4">
                <i data-lucide="shield-check" class="w-8 h-8 text-indigo-500"></i>
            </div>
            <h1 class="text-3xl font-bold text-white mb-2">Espace Jury</h1>
            <p class="text-white/80">Portfolio BTS SIO - Amathéo Godard</p>
        </div>

        <!-- Login Card -->
        <div class="login-card rounded-2xl shadow-2xl p-8 border border-white/20">
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

            @if($errors->has('error'))
                <div class="mb-6 p-4 bg-red-100 text-red-700 rounded-lg flex items-center gap-3">
                    <i data-lucide="alert-circle" class="w-5 h-5"></i>
                    <span>{{ $errors->first('error') }}</span>
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('login.submit') }}" method="POST" class="space-y-6">
                @csrf

                <!-- name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        <i data-lucide="user" class="w-4 h-4 inline mr-2"></i>
                        Nom d'utilisateur
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="{{ old('name') }}"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all"
                        placeholder="Entrez votre nom d'utilisateur"
                        required
                        autofocus
                    >
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        <i data-lucide="lock" class="w-4 h-4 inline mr-2"></i>
                        Mot de passe
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all"
                        placeholder="Entrez votre mot de passe"
                        required
                    >
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit"
                    class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-3 px-6 rounded-lg flex items-center justify-center gap-2 transition-all duration-300 hover:shadow-lg"
                >
                    <i data-lucide="log-in" class="w-5 h-5"></i>
                    Se connecter
                </button>
            </form>

            <!-- Footer Info -->
            <div class="mt-8 pt-6 border-t border-gray-200">
                <div class="flex items-center gap-2 text-sm text-gray-600">
                    <i data-lucide="info" class="w-4 h-4"></i>
                    <span>Accès réservé aux membres du jury</span>
                </div>
            </div>
        </div>

        <!-- Back to Portfolio -->
        <div class="text-center mt-6">
            <a 
                href="{{ route('home') }}" 
                class="inline-flex items-center gap-2 text-white/90 hover:text-white transition-colors"
            >
                <i data-lucide="arrow-left" class="w-4 h-4"></i>
                Retour au portfolio public
            </a>
        </div>
    </div>

    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
