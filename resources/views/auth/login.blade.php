<form action="{{ route('login.submit') }}" method="POST" class="space-y-6">
    @csrf

    <!-- Name -->
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
        <input 
            type="text" 
            id="name" 
            name="name" 
            value="{{ old('name') }}"
            class="w-full px-4 py-3 border rounded-lg"
            placeholder="Entrez votre nom"
            required
            autofocus
        >
        @error('name')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Password -->
    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
        <input 
            type="password" 
            id="password" 
            name="password" 
            class="w-full px-4 py-3 border rounded-lg"
            placeholder="Entrez votre mot de passe"
            required
        >
        @error('password')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Messages d'erreur -->
    @if($errors->has('error'))
        <p class="text-red-600 text-sm">{{ $errors->first('error') }}</p>
    @endif

    <!-- Submit -->
    <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white py-3 rounded-lg">
        Se connecter
    </button>
</form>
