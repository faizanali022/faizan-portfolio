<!-- ====== Skills Hero (dark glass) ====== -->
<section class="sk-hero">
    <div class="sk-hero-container">
        <div class="sk-hero-glass">
            <span class="sk-badge"><i class="ph ph-wrench"></i> Technical Arsenal</span>
            <h1 class="sk-hero-title">
                Skills & <span class="sk-gradient">Expertise</span>
            </h1>
            <p class="sk-hero-desc">
                I specialize in modern full‑stack development, secure backends, and AI‑powered integrations. Every skill is battle‑tested through real client projects.
            </p>
            <a href="/projects" class="sk-btn sk-btn-primary">
                <i class="ph ph-eye"></i> View My Work
            </a>
        </div>
    </div>
</section>

<!-- ====== Skills Categories with Progress Circles ====== -->
<section class="sk-section">
    <div class="sk-container">
        <div class="sk-categories-grid">
            <?php
            // Skills data with scores (0-100) and icons
            $skillCategories = [
                [
                    'title' => 'Frontend',
                    'icon' => 'ph-monitor',
                    'skills' => [
                        ['name' => 'HTML5 / CSS3', 'score' => 95, 'icon' => 'ph-file-html'],
                        ['name' => 'JavaScript (ES6+)', 'score' => 90, 'icon' => 'ph-file-js'],
                        ['name' => 'React.js', 'score' => 85, 'icon' => 'ph-atom'],
                        ['name' => 'Responsive Design', 'score' => 92, 'icon' => 'ph-devices'],
                    ]
                ],
                [
                    'title' => 'Backend',
                    'icon' => 'ph-hard-drives',
                    'skills' => [
                        ['name' => 'PHP / Laravel', 'score' => 95, 'icon' => 'ph-code'],
                        ['name' => 'Node.js / Express', 'score' => 88, 'icon' => 'ph-hard-drives'],
                        ['name' => 'REST APIs', 'score' => 92, 'icon' => 'ph-plugs'],
                        ['name' => 'Authentication', 'score' => 90, 'icon' => 'ph-lock'],
                    ]
                ],
                [
                    'title' => 'Databases',
                    'icon' => 'ph-database',
                    'skills' => [
                        ['name' => 'MySQL', 'score' => 90, 'icon' => 'ph-database'],
                        ['name' => 'MongoDB', 'score' => 85, 'icon' => 'ph-leaf'],
                        ['name' => 'Firebase', 'score' => 75, 'icon' => 'ph-fire'],
                    ]
                ],
                [
                    'title' => 'AI & Specialized',
                    'icon' => 'ph-robot',
                    'skills' => [
                        ['name' => 'AI Integration', 'score' => 80, 'icon' => 'ph-robot'],
                        ['name' => 'SEO Optimization', 'score' => 88, 'icon' => 'ph-magnifying-glass'],
                        ['name' => 'Web Security', 'score' => 85, 'icon' => 'ph-shield-check'],
                        ['name' => 'UI/UX Design', 'score' => 82, 'icon' => 'ph-paint-brush'],
                    ]
                ]
            ];

            foreach ($skillCategories as $category):
            ?>
            <div class="sk-category-card glass">
                <div class="sk-category-header">
                    <i class="ph <?= $category['icon'] ?>"></i>
                    <h3><?= esc($category['title']) ?></h3>
                </div>
                <div class="sk-skills-list">
                    <?php foreach ($category['skills'] as $skill): ?>
                    <div class="sk-skill-item">
                        <div class="sk-skill-info">
                            <i class="ph <?= $skill['icon'] ?>"></i>
                            <span><?= esc($skill['name']) ?></span>
                        </div>
                        <div class="sk-progress-circle" data-score="<?= $skill['score'] ?>">
                            <svg viewBox="0 0 36 36" class="sk-circle-svg">
                                <path class="sk-circle-bg"
                                      d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="sk-circle-fill" stroke-dasharray="0, 100"
                                      d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831" />
                            </svg>
                            <span class="sk-percent-text">0%</span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ====== Core Technologies (pills) ====== -->
<section class="sk-section sk-bg-light">
    <div class="sk-container">
        <h2 class="sk-section-title"><i class="ph ph-cpu"></i> Core Technologies</h2>
        <div class="sk-pills-grid">
            <?php
            $techs = ['PHP','Laravel','JavaScript','React.js','Node.js','MongoDB','MySQL','WordPress','Antigravity','Python','Git','Docker'];
            foreach ($techs as $tech): ?>
                <span class="sk-pill"><?= esc($tech) ?></span>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ====== CTA ====== -->
<section class="cta-section">
    <div class="cta-container">
        <div class="cta-glass-card">
            <h2 class="cta-title">Let’s Build Something Powerful</h2>
            <p class="cta-desc">My skills are at your disposal. Let’s discuss how I can contribute to your next project.</p>
            <div class="cta-actions">
                <a href="/contact" class="cta-btn cta-btn-primary">Start a Project</a>
                <a href="/assets/files/faizan-ali-resume.pdf" class="cta-btn cta-btn-outline" download>Download Resume</a>
            </div>
        </div>
    </div>
</section>

<!-- Skill animation JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const circles = document.querySelectorAll('.sk-circle-fill');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const circle = entry.target;
                const parent = circle.closest('.sk-progress-circle');
                const score = parseInt(parent.dataset.score);
                const percentText = parent.querySelector('.sk-percent-text');
                circle.setAttribute('stroke-dasharray', score + ', 100');
                
                let current = 0;
                const increment = score / 30;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= score) {
                        current = score;
                        clearInterval(timer);
                    }
                    percentText.textContent = Math.floor(current) + '%';
                }, 30);
                observer.unobserve(circle);
            }
        });
    }, { threshold: 0.3 });
    circles.forEach(c => observer.observe(c));
});
</script>