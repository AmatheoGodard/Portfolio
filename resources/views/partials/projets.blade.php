<section id="projets" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                Mes Projets
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Une sélection de projets réalisés durant ma formation et mes stages
            </p>
        </div>

        @php
        $projects = [
        [
        'title' => 'Nuit de l\'Informatique 2025',
        'description' => 'Conception et développement d\'une base de données relationnelle complexe avec procédures stockées et optimisation des requêtes.',
        'image' => 'https://images.unsplash.com/photo-1555949963-aa79dcee981c?auto=format&fit=crop&w=1080&q=80',
        'tags' => ['PHP', 'Travail en équipe', 'Gestion de projet'],
        'github' => 'https://github.com/AmatheoGodard/Nuit-info2025',
        'demo' => 'https://a.futaie.org:1337/',
        ],
        [
        'title' => 'Concours Robot',
        'description' => 'Le Concours Robot est un concours inter-collèges organisé dans le département des Deux-Sèvres, visant à promouvoir la robotique et les compétences numériques auprès des élèves.',
        'image' => 'https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=1080&q=80',
        'tags' => ['Laravel', 'Travail en équipe'],
        'github' => '#',
        'demo' => '#',
        ],
        [
        'title' => 'KiCéTikTé',
        'description' => 'Lors d’une semaine de projet du 31 mars au 4 avril 2025, nous avons réalisé un projet intitulé « KiCéTikTé », mené en groupe de trois au sein de l’équipe RGA – Entreprises.',
        'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1080&q=80',
        'tags' => ['PHP', 'MySQL'],
        'github' => '#',
        'demo' => '#',
        ],
        [
        'title' => 'EvenMoov',
        'description' => 'EvenMoov est une application web dédiée à la gestion d’événements automobiles, permettant aux utilisateurs d’inscrire leurs véhicules à divers rassemblements.',
        'image' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1080&q=80',
        'tags' => ['PHP', 'MySQL'],
        'github' => '#',
        'demo' => '#',
        ],
        [
        'title' => 'Portfolio',
        'description' => 'Portfolio personnel développé avec Laravel pour présenter mes compétences, projets et expériences professionnelles de manière interactive et moderne.',
        'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1080&q=80',
        'tags' => ['Laravel'],
        'github' => '#',
        'demo' => '#hero',
        ],
        ];

        @endphp

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="project-card group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                <!-- Image -->
                <div class="relative h-48 overflow-hidden">
                    <img
                        src="{{ $project['image'] }}"
                        alt="{{ $project['title'] }}"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <!-- Overlay on hover -->
                    <div class="absolute inset-0 bg-gradient-to-t from-indigo-500/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-6 gap-4">
                        @if(isset($project['github']))
                        <a
                            href="{{ $project['github'] }}"
                            class="p-3 bg-white rounded-full hover:bg-gray-100 transition-colors">
                            <i data-lucide="github" class="w-5 h-5 text-gray-900"></i>
                        </a>
                        @endif
                        @if(isset($project['demo']))
                        <a
                            href="{{ $project['demo'] }}"
                            class="p-3 bg-white rounded-full hover:bg-gray-100 transition-colors">
                            <i data-lucide="external-link" class="w-5 h-5 text-gray-900"></i>
                        </a>
                        @endif
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6 space-y-4">
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-indigo-500 transition-colors">
                        {{ $project['title'] }}
                    </h3>
                    <p class="text-gray-600 line-clamp-3">
                        {{ $project['description'] }}
                    </p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($project['tags'] as $tag)
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-500 rounded-full text-sm font-medium hover:bg-indigo-500 hover:text-white transition-colors cursor-default">
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