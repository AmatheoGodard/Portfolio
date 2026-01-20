<section id="parcours" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                Mon Parcours
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Une trajectoire marquée par l'apprentissage continu et la passion pour le développement
            </p>
        </div>

        <!-- Timeline Desktop -->
        <div class="hidden md:block relative">
            <!-- Horizontal line -->
            <div class="absolute top-20 left-0 right-0 h-1 bg-gradient-to-r from-indigo-500 via-cyan-400 to-indigo-500"></div>

            <div class="grid grid-cols-3 gap-8">
                <!-- Item 1 -->
                <div class="relative">
                    <div class="flex justify-center mb-6">
                        <div class="relative z-10 w-16 h-16 bg-indigo-500 text-white rounded-full flex items-center justify-center shadow-lg">
                            <i data-lucide="graduation-cap" class="w-6 h-6"></i>
                        </div>
                    </div>
                    <div class="timeline-card bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                        <div class="mb-3">
                            <span class="inline-block px-3 py-1 bg-indigo-100 text-indigo-500 rounded-full text-sm font-medium">
                                2024 - 2026
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">
                            BTS SIO Option SLAM
                        </h3>
                        <p class="text-indigo-500 mb-3">
                            Campus la Futaie
                        </p>
                        <p class="text-gray-600">
                            Formation en développement d'applications et solutions logicielles. Spécialisation en développement web, bases de données et programmation orientée objet.
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="relative">
                    <div class="flex justify-center mb-6">
                        <div class="relative z-10 w-16 h-16 bg-indigo-500 text-white rounded-full flex items-center justify-center shadow-lg">
                            <i data-lucide="award" class="w-6 h-6"></i>
                        </div>
                    </div>
                    <div class="timeline-card bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                        <div class="mb-3">
                            <span class="inline-block px-3 py-1 bg-indigo-100 text-indigo-500 rounded-full text-sm font-medium">
                                2022 - 2023
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">
                            Baccalauréat Professionnel
                        </h3>
                        <p class="text-indigo-500 mb-3">
                            Lycée Jean Monnet
                        </p>
                        <p class="text-gray-600">
                            Obtention du baccalauréat. Option Réseaux Informatiques et Systèmes Communicants.
                        </p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="relative">
                    <div class="flex justify-center mb-6">
                        <div class="relative z-10 w-16 h-16 bg-indigo-500 text-white rounded-full flex items-center justify-center shadow-lg">
                            <i data-lucide="book-open" class="w-6 h-6"></i>
                        </div>
                    </div>
                    <div class="timeline-card bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                        <div class="mb-3">
                            <span class="inline-block px-3 py-1 bg-indigo-100 text-indigo-500 rounded-full text-sm font-medium">
                                2018 - 2021
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">
                            Brevet Professionnel
                        </h3>
                        <p class="text-indigo-500 mb-3">
                            MFR Le Vallon
                        </p>
                        <p class="text-gray-600">
                            Obtention du brevet.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Timeline Mobile -->
        <div class="md:hidden space-y-8">
            @php
            $timelineItems = [
            [
            'icon' => 'graduation-cap',
            'year' => '2024 - 2026',
            'title' => 'BTS SIO Option SLAM',
            'subtitle' => 'Campus la Futaie',
            'description' => 'Formation en développement d\'applications et solutions logicielles. Spécialisation en développement web, bases de données et programmation orientée objet.'
            ],

            [
            'icon' => 'award',
            'year' => '2022 - 2023',
            'title' => 'Baccalauréat Professionnel',
            'subtitle' => 'Lycée Jean Monnet',
            'description' => 'Obtention du baccalauréat. Option Réseaux Informatiques et Systèmes Communicants'
            ],
            [
            'icon' => 'book-open',
            'year' => '2018 - 2021',
            'title' => 'Brevet Professionnel',
            'subtitle' => 'MFR Le Vallon',
            'description' => 'Obtention du brevet.'
            ]
            ];
            @endphp

            @foreach($timelineItems as $index => $item)
            <div class="relative pl-12">
                @if($index < count($timelineItems) - 1)
                    <div class="absolute left-6 top-16 bottom-0 w-0.5 bg-gradient-to-b from-indigo-500 to-cyan-400 -mb-8">
            </div>
            @endif

            <div class="absolute left-0 top-0 z-10 w-12 h-12 bg-indigo-500 text-white rounded-full flex items-center justify-center shadow-lg">
                <i data-lucide="{{ $item['icon'] }}" class="w-6 h-6"></i>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                <div class="mb-3">
                    <span class="inline-block px-3 py-1 bg-indigo-100 text-indigo-500 rounded-full text-sm font-medium">
                        {{ $item['year'] }}
                    </span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">
                    {{ $item['title'] }}
                </h3>
                <p class="text-indigo-500 mb-3">
                    {{ $item['subtitle'] }}
                </p>
                <p class="text-gray-600">
                    {{ $item['description'] }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</section>