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
        'title' => 'Carte Débit Temporaire',
        'description' => 'Carte Débit Temporaire est un projet Java permettant de créer et gérer des cartes de débit temporaires. Il facilite la gestion des cartes à durée limitée et le suivi des transactions associées.',
        'image' => '/images/projets/projet_carteDébit.png',
        'tags' => ['Java'],
        'github' => 'https://github.com/AmatheoGodard/Carte_Debit',
        ],
        [
        'title' => 'Nuit de l\'Informatique 2025',
        'description' => 'Participation à la Nuit de l’Info 2025 : un défi informatique intense combinant créativité, travail d’équipe et développement de solutions innovantes.',
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
        'github' => 'https://github.com/AmatheoGodard/cr26',
        ],
        [
        'title' => 'KiCéTikTé',
        'description' => 'Lors d’une semaine de projet du 31 mars au 4 avril 2025, nous avons réalisé un projet intitulé « KiCéTikTé », mené en groupe de trois au sein de l’équipe RGA – Entreprises.',
        'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1080&q=80',
        'tags' => ['PHP', 'MySQL'],
        ],
        [
        'title' => 'EvenMoov',
        'description' => 'EvenMoov est une application web dédiée à la gestion d’événements automobiles, permettant aux utilisateurs d’inscrire leurs véhicules à divers rassemblements.',
        'image' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1080&q=80',
        'tags' => ['PHP', 'MySQL'],
        ],
        [
        'title' => 'Portfolio',
        'description' => 'Portfolio personnel développé avec Laravel pour présenter mes compétences, projets et expériences professionnelles de manière interactive et moderne.',
        'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1080&q=80',
        'tags' => ['Laravel'],
        'github' => 'https://github.com/AmatheoGodard/Portfolio',
        'demo' => '#hero',
        ],
        ];
        @endphp

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div
                class="project-card group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 cursor-pointer"
                role="button" tabindex="0" data-project='@json($project)'>
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
                            class="p-3 bg-white rounded-full hover:bg-gray-100 transition-colors"
                            target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 .5C5.7.5.5 5.7.5 12c0 5.1 3.3 9.5 7.8 11c.6.1.8-.3.8-.6v-2.2c-3.1.7-3.7-1.5-3.7-1.5-.5-1.3-1.2-1.6-1.2-1.6-1-.7.1-.7.1-.7 1.1.1 1.7 1.1 1.7 1.1 1 .1.6 1.8.6 1.8 1.4 2.5 3.8 1.8 4.7 1.4.1-1.1.5-1.8.9-2.2-2.5-.3-5.2-1.2-5.2-5.5 0-1.2.4-2.2 1-3-.1-.3-.4-1.5.1-3.2 0 0 .8-.3 2.8 1c.8-.2 1.6-.3 2.4-.3s1.6.1 2.4.3c2-1.3 2.8-1 2.8-1 .5 1.7.2 2.9.1 3.2.6.8 1 1.8 1 3 0 4.3-2.7 5.2-5.2 5.5.5.4 1 1.1 1 2.2v3.2c0 .3.2.7.8.6C20.7 21.5 24 17.1 24 12c0-6.3-5.2-11.5-12-11.5z" />
                            </svg>
                        </a>
                        @endif
                        @if(isset($project['demo']))
                        <a
                            href="{{ $project['demo'] }}"
                            class="p-3 bg-white rounded-full hover:bg-gray-100 transition-colors"
                            target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 13v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3" />
                            </svg>
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

    <!-- Modal -->
    <div id="projectModal" class="hidden fixed inset-0 z-50 bg-black/50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-3xl w-full overflow-hidden shadow-xl">
            <div class="relative">
                <img class="w-full h-64 object-cover modal-image" src="" alt="">
                <button type="button" class="absolute top-4 right-4 modal-close p-2 bg-white rounded-full shadow hover:bg-red-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-900 hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-bold modal-title"></h3>
                <p class="text-gray-600 mt-3 modal-desc"></p>
                <div class="mt-4 modal-tags flex flex-wrap gap-2"></div>
                <div class="mt-6 flex gap-3">
                    <!-- Boutons stylés -->
                    <a target="_blank" rel="noopener" class="modal-github inline-flex items-center gap-2 px-5 py-2 bg-gray-900 text-white rounded-full font-semibold hover:bg-gray-700 transition hidden" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 .5C5.7.5.5 5.7.5 12c0 5.1 3.3 9.5 7.8 11c.6.1.8-.3.8-.6v-2.2c-3.1.7-3.7-1.5-3.7-1.5-.5-1.3-1.2-1.6-1.2-1.6-1-.7.1-.7.1-.7 1.1.1 1.7 1.1 1.7 1.1 1 .1.6 1.8.6 1.8 1.4 2.5 3.8 1.8 4.7 1.4.1-1.1.5-1.8.9-2.2-2.5-.3-5.2-1.2-5.2-5.5 0-1.2.4-2.2 1-3-.1-.3-.4-1.5.1-3.2 0 0 .8-.3 2.8 1c.8-.2 1.6-.3 2.4-.3s1.6.1 2.4.3c2-1.3 2.8-1 2.8-1 .5 1.7.2 2.9.1 3.2.6.8 1 1.8 1 3 0 4.3-2.7 5.2-5.2 5.5.5.4 1 1.1 1 2.2v3.2c0 .3.2.7.8.6C20.7 21.5 24 17.1 24 12c0-6.3-5.2-11.5-12-11.5z" />
                        </svg>
                        GitHub
                    </a>

                    <a target="_blank" rel="noopener" class="modal-demo inline-flex items-center gap-2 px-5 py-2 bg-indigo-500 text-white rounded-full font-semibold hover:bg-indigo-600 transition hidden" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 13v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3" />
                        </svg>
                        Page du projet
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Modal -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('projectModal');
            const modalImage = modal.querySelector('.modal-image');
            const modalTitle = modal.querySelector('.modal-title');
            const modalDesc = modal.querySelector('.modal-desc');
            const modalTags = modal.querySelector('.modal-tags');
            const modalGithub = modal.querySelector('.modal-github');
            const modalDemo = modal.querySelector('.modal-demo');
            const closeBtn = modal.querySelector('.modal-close');

            function openModal(proj) {
                modalImage.src = proj.image || '';
                modalImage.alt = proj.title || '';
                modalTitle.textContent = proj.title || '';
                modalDesc.textContent = proj.description || '';
                modalTags.innerHTML = (proj.tags || []).map(t => `<span class="px-3 py-1 bg-indigo-100 text-indigo-500 rounded-full text-sm font-medium">${t}</span>`).join(' ');
                if (proj.github) {
                    modalGithub.href = proj.github;
                    modalGithub.classList.remove('hidden');
                } else {
                    modalGithub.classList.add('hidden');
                }
                if (proj.demo) {
                    modalDemo.href = proj.demo;
                    modalDemo.classList.remove('hidden');
                } else {
                    modalDemo.classList.add('hidden');
                }
                modal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }

            function closeModal() {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }

            document.querySelectorAll('[data-project]').forEach(card => {
                card.addEventListener('click', () => {
                    const proj = JSON.parse(card.getAttribute('data-project'));
                    openModal(proj);
                });

                card.addEventListener('keypress', (e) => {
                    if (e.key === 'Enter') card.click();
                });

                // ⚡ Stop propagation sur les boutons overlay pour ne pas ouvrir le modal
                card.querySelectorAll('a').forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        e.stopPropagation();
                    });
                });
            });

            closeBtn.addEventListener('click', closeModal);
            modal.addEventListener('click', (e) => {
                if (e.target === modal) closeModal();
            });
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeModal();
            });
        });
    </script>
</section>