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

@php
$experiences = [
    [
        'title' => 'Concepteur Développeur d\'Applications - Stage',
        'company' => '85 Micro Informatique',
        'period' => 'Février 2026 - Mars 2026',
        'description' => [
            'Développement de nouvelles fonctionnalités sur une application interne en PHP.',
            'Développement d\'un site web vitrine avec un CMS WYSIWYG intégrant une base de données MySQL.',
            'Dépannages informatiques et support technique pour les clients de l\'entreprise.'
        ],
        'tags' => ['PHP', 'MySQL', 'CMS', 'Développement Web', 'Dépannage', 'Support Technique'],
        'icon' => 'code-2'
    ],
    [
        'title' => 'La nuit de l\'Informatique',
        'company' => 'Les étudiants de BTS SIO du Campus la Futaie - Les ÀFutais',
        'period' => '4 & 5 Décembre 2025',
        'description' => [
            'Participation à l\'organisation et la réalisation de projets informatiques.',
            'Développement d\'une application en PHP.',
            'Collaboration avec d\'autres étudiants pour créer des solutions innovantes.'
        ],
        'tags' => ['PHP', 'MySQL', 'Développement Web'],
        'icon' => 'terminal'
    ],
    [
        'title' => 'Technicien de Maintenance Informatique - Stage',
        'company' => 'Communauté de Communes de Sèvremoine',
        'period' => 'Mai 2025 - Juin 2025',
        'description' => [
            'Maintenance et dépannage de matériel informatique pour les clients de l\'entreprise.',
            'Installation et configuration de logiciels et systèmes d\'exploitation.',
            'Assistance technique et support aux utilisateurs.'
        ],
        'tags' => ['Maintenance Informatique', 'Dépannage', 'Support Technique'],
        'icon' => 'monitor'
    ],
    [
        'title' => 'Développeur Full-Stack - Stage',
        'company' => 'L\'Ordinateur et vous',
        'period' => 'Janvier 2024',
        'description' => [
            'Développement de nouvelles fonctionnalités sur une application interne en PHP et JavaScript.'
        ],
        'tags' => ['PHP', 'JavaScript', 'HTML', 'CSS', 'Développement Web'],
        'icon' => 'code'
    ]
];
@endphp

<section id="experiences" class="py-20 px-4 sm:px-6 lg:px-8 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto relative">
        <div class="text-center mb-12">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                Expériences Professionnelles
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Mise en pratique de mes compétences techniques au service de projets concrets.
            </p>
        </div>

        <div class="hidden md:flex absolute top-1/2 -translate-y-1/2 -left-6 -right-6 justify-between z-20 pointer-events-none">
            <button onclick="scrollGrid('left')" class="pointer-events-auto w-12 h-12 bg-white rounded-full shadow-lg border border-gray-100 flex items-center justify-center text-indigo-600 hover:bg-indigo-600 hover:text-white transition-all duration-300">
                <i data-lucide="chevron-left" class="w-6 h-6"></i>
            </button>
            <button onclick="scrollGrid('right')" class="pointer-events-auto w-12 h-12 bg-white rounded-full shadow-lg border border-gray-100 flex items-center justify-center text-indigo-600 hover:bg-indigo-600 hover:text-white transition-all duration-300">
                <i data-lucide="chevron-right" class="w-6 h-6"></i>
            </button>
        </div>

        <div id="experienceGrid" class="flex overflow-x-auto gap-6 pb-12 snap-x snap-mandatory scrollbar-hide scroll-smooth" style="scrollbar-width: none; -ms-overflow-style: none;">
            @foreach($experiences as $exp)
            <div class="min-w-[85%] md:min-w-[450px] flex-shrink-0 snap-center">
                <div class="h-full bg-gray-50 rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex flex-col mb-6">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-300">
                                    <i data-lucide="{{ $exp['icon'] }}" class="w-6 h-6"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 leading-tight">{{ $exp['title'] }}</h3>
                            </div>
                            <div class="flex flex-wrap items-center justify-between gap-2">
                                <p class="text-lg font-medium text-indigo-500">{{ $exp['company'] }}</p>
                                <span class="px-3 py-1 bg-white text-gray-500 rounded-full text-xs font-semibold border border-gray-100 shadow-sm">
                                    {{ $exp['period'] }}
                                </span>
                            </div>
                        </div>
                        
                        <ul class="space-y-4 mb-8">
                            @foreach($exp['description'] as $item)
                            <li class="flex items-start">
                                <i data-lucide="chevron-right" class="w-5 h-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span class="text-gray-600 text-sm">{{ $item }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="pt-6 border-t border-gray-200 flex flex-wrap gap-2">
                        @foreach($exp['tags'] as $tag)
                        <span class="px-3 py-1 bg-white text-indigo-600 rounded-lg text-[10px] font-bold uppercase tracking-wider border border-indigo-50">
                            {{ $tag }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    function scrollGrid(direction) {
        const grid = document.getElementById('experienceGrid');
        const scrollAmount = 480; // Correspond environ à la largeur d'une carte + gap
        
        if (direction === 'left') {
            grid.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        } else {
            grid.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    }
</script>

<style>
    .scrollbar-hide::-webkit-scrollbar { display: none; }
</style>