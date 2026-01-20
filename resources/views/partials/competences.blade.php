<section id="competences" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                Compétences
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Un ensemble de technologies maîtrisées pour créer des solutions complètes
            </p>
        </div>

        @php
            $competences = [
                'Langages' => [
                    ['name' => 'HTML', 'icon' => 'code-2', 'gradient' => 'from-orange-400 to-orange-600'],
                    ['name' => 'CSS', 'icon' => 'layers', 'gradient' => 'from-blue-400 to-blue-600'],
                    ['name' => 'Java', 'icon' => 'code-2', 'gradient' => 'from-yellow-400 to-yellow-600'],
                    ['name' => 'PHP', 'icon' => 'terminal', 'gradient' => 'from-purple-400 to-purple-600'],
                    ['name' => 'SQL', 'icon' => 'database', 'gradient' => 'from-cyan-400 to-cyan-600'],
                ],
                'Outils' => [
                    ['name' => 'Git', 'icon' => 'git-branch', 'gradient' => 'from-red-400 to-red-600'],
                    ['name' => 'VS Code', 'icon' => 'code-2', 'gradient' => 'from-blue-500 to-blue-700'],
                    ['name' => 'Netbeans', 'icon' => 'code-2', 'gradient' => 'from-orange-500 to-orange-700'],
                    ['name' => 'JetBrains', 'icon' => 'code-2', 'gradient' => 'from-green-500 to-green-700'],
                    ['name' => 'Planka', 'icon' => 'layout-dashboard', 'gradient' => 'from-indigo-500 to-indigo-700'],
                    ['name' => 'OpenProject', 'icon' => 'layout-dashboard', 'gradient' => 'from-yellow-500 to-yellow-700'],
                ],
                'Frameworks' => [
                    ['name' => 'Laravel', 'icon' => 'code-2', 'gradient' => 'from-red-500 to-red-700'],
                ],
            ];
        @endphp

        <div class="space-y-12">
            @foreach($competences as $category => $skills)
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">
                        {{ $category }}
                    </h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @foreach($skills as $skill)
                            <div class="skill-card group relative bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br {{ $skill['gradient'] }} opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>

                                <div class="relative z-10 flex flex-col items-center text-center space-y-3">
                                    <div class="p-4 rounded-xl bg-gradient-to-br {{ $skill['gradient'] }} text-white shadow-lg">
                                        <i data-lucide="{{ $skill['icon'] }}" class="w-8 h-8"></i>
                                    </div>
                                    <h4 class="font-bold text-gray-900">
                                        {{ $skill['name'] }}
                                    </h4>
                                </div>

                                <div class="absolute -top-8 -right-8 w-24 h-24 bg-gradient-to-br {{ $skill['gradient'] }} opacity-0 group-hover:opacity-20 rounded-full blur-xl transition-opacity duration-300"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="certifications" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                Certifications
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Certifications attestant de mes compétences techniques
            </p>
        </div>

        @php
            $certifications = [
                [
                    'name' => 'ANSSI - Fondamentaux de la sécurité numérique',
                    'image' => 'images/certifications/ANSSI/Certification_ANSSI.png',
                ],
                [
                    'name' => 'SoloLearn - HTML',
                    'image' => 'images/certifications/Sololearn/Introduction_HTML.jpg',
                ],
                [
                    'name' => 'SoloLearn - CSS',
                    'image' => 'images/certifications/Sololearn/Introduction_CSS.png',
                ],
                [
                    'name' => 'SoloLearn - SQL',
                    'image' => 'images/certifications/Sololearn/Introduction_SQL.png',
                ],
                [
                    'name' => 'SoloLearn - Technologies pour tous',
                    'image' => 'images/certifications/Sololearn/Technologie_pour_tous.jpg',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach($certifications as $certification)
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-6 text-center group">
                    <img 
                        src="{{ asset($certification['image']) }}"
                        alt="Certification {{ $certification['name'] }}"
                        class="certification-img h-32 mx-auto object-contain mb-6 cursor-pointer group-hover:scale-105 transition-transform duration-300"
                    >
                    <h3 class="text-xl font-bold text-gray-900">
                        {{ $certification['name'] }}
                    </h3>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- LIGHTBOX -->
<div id="certification-lightbox"
     class="fixed inset-0 bg-black/80 hidden items-center justify-center z-50 px-4">
    <img id="certification-lightbox-img"
         class="max-w-full max-h-full rounded-xl shadow-2xl">
</div>

<script>
    const lightbox = document.getElementById('certification-lightbox');
    const lightboxImg = document.getElementById('certification-lightbox-img');
    const images = document.querySelectorAll('.certification-img');

    images.forEach(img => {
        img.addEventListener('click', () => {
            lightboxImg.src = img.src;
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
        });
    });

    lightbox.addEventListener('click', () => {
        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');
        lightboxImg.src = '';
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
            lightboxImg.src = '';
        }
    });
</script>
