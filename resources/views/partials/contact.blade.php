<section id="contact" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                Me Contacter
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Un projet ou une opportunité ? N'hésitez pas à me contacter
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="space-y-8">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">
                        Restons en contact
                    </h3>
                    <p class="text-lg text-gray-600 mb-8">
                        Je suis actuellement à la recherche d'opportunités de stage. N'hésitez pas à me contacter pour discuter de vos besoins.
                    </p>
                </div>

                <!-- Contact Details -->
                <div class="space-y-4">
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                        <div class="p-3 bg-indigo-500 text-white rounded-lg">
                            <i data-lucide="mail" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Email</p>
                            <p class="font-medium text-gray-900">amatheo.godard18.04@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                        <div class="p-3 bg-cyan-400 text-white rounded-lg">
                            <i data-lucide="phone" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Téléphone</p>
                            <p class="font-medium text-gray-900">+33 6 85 92 12 29</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                        <div class="p-3 bg-indigo-500 text-white rounded-lg">
                            <i data-lucide="map-pin" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Localisation</p>
                            <p class="font-medium text-gray-900">France</p>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div>
                    <p class="text-sm text-gray-600 mb-4">Retrouvez-moi sur :</p>
                    <div class="flex gap-4">
                        <a 
                            href="https://github.com/AmatheoGodard"" 
                            target="_blank" 
                            rel="noopener noreferrer"
                            class="p-4 bg-gray-50 rounded-xl hover:bg-indigo-500 hover:text-white transition-colors group"
                        >
                            <i data-lucide="github" class="w-6 h-6 text-gray-600 group-hover:text-white"></i>
                        </a>
                        <a 
                            href="https://linkedin.com/in/amathéo-godard-4ba422244" 
                            target="_blank" 
                            rel="noopener noreferrer"
                            class="p-4 bg-gray-50 rounded-xl hover:bg-indigo-500 hover:text-white transition-colors group"
                        >
                            <i data-lucide="linkedin" class="w-6 h-6 text-gray-600 group-hover:text-white"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-6 p-4 bg-red-100 text-red-700 rounded-lg">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-900 mb-2">
                            Nom complet
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}"
                            class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                            placeholder="Votre nom"
                            required
                        >
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-900 mb-2">
                            Email
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                            placeholder="votre@email.com"
                            required
                        >
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-900 mb-2">
                            Sujet
                        </label>
                        <input 
                            type="text" 
                            id="subject" 
                            name="subject" 
                            value="{{ old('subject') }}"
                            class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                            placeholder="Sujet de votre message"
                            required
                        >
                        @error('subject')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-900 mb-2">
                            Message
                        </label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="5"
                            class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent resize-none"
                            placeholder="Votre message..."
                            required
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button 
                        type="submit"
                        class="w-full bg-indigo-500 hover:bg-indigo-600 text-white py-3 rounded-lg flex items-center justify-center gap-2 transition-colors"
                    >
                        <i data-lucide="send" class="w-5 h-5"></i>
                        Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
