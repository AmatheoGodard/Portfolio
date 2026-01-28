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


<!-- Certifications Section (inchangé) -->
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
        'name' => 'PIX',
        'image' => 'images/certifications/Pix/Certification_PIX.png',
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
            @foreach($certifications as $cert)
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-6 text-center group cursor-pointer certification-card" data-cert='@json($cert)'>
                <img
                    src="{{ asset($cert['image']) }}"
                    alt="Certification {{ $cert['name'] }}"
                    class="certification-img h-32 mx-auto object-contain mb-6 group-hover:scale-105 transition-transform duration-300">
                <h3 class="text-xl font-bold text-gray-900">
                    {{ $cert['name'] }}
                </h3>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Modal Certifications -->
<div id="certificationModal" class="hidden fixed inset-0 z-50 bg-black/70 flex items-center justify-center p-4 transition-opacity duration-300">
    <div class="bg-white rounded-2xl max-w-3xl w-full overflow-hidden shadow-xl relative animate-fadeIn">
        <!-- Close button -->
        <button type="button" class="absolute top-4 right-4 modal-close p-2 bg-white rounded-full shadow hover:bg-red-500 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-900 hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="p-6 flex flex-col items-center">
            <img class="modal-image max-w-full max-h-[60vh] rounded-xl shadow-2xl mb-4" src="" alt="">
            <h3 class="modal-title text-2xl font-bold text-gray-900 text-center"></h3>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('certificationModal');
        const modalImage = modal.querySelector('.modal-image');
        const modalTitle = modal.querySelector('.modal-title');
        const closeBtn = modal.querySelector('.modal-close');

        document.querySelectorAll('.certification-card').forEach(card => {
            card.addEventListener('click', () => {
                const cert = JSON.parse(card.getAttribute('data-cert'));
                modalImage.src = cert.image;
                modalImage.alt = cert.name;
                modalTitle.textContent = cert.name;
                modal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            });
        });

        function closeModal() {
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
            modalImage.src = '';
        }

        closeBtn.addEventListener('click', closeModal);
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeModal();
        });
    });
</script>