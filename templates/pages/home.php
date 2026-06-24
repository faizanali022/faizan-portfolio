<!-- Hero Section -->
<section class="ag-hero" id="hero">
    <!-- Animated star canvas behind -->
    <canvas id="hero-stars"></canvas>
    <div class="ag-container hero-container">
        <!-- Left: Text Content inside glassy container -->
        <div class="hero-content-glass">
            <span class="hero-badge">🚀 Available for Freelance</span>
            <h1 class="hero-title">
                Turning Ideas Into<br><span class="text-gradient">Powerful Web Experiences</span>
            </h1>
            <p class="hero-subtitle">
                I’m <strong>Faizan Ali</strong> — Full Stack Developer & Software Engineering student at 
                <strong>MUST (2023‑2027)</strong>. I build high‑performance web apps with PHP/Laravel, 
                MERN, Node.js, AI integrations, SEO & bulletproof security.
            </p>
            <div class="hero-actions">
                <a href="/contact" class="ag-btn ag-btn-primary ag-btn-lg">Hire Me</a>
                <a href="/projects" class="ag-btn ag-btn-outline-primary ag-btn-lg">View Projects</a>
                <a href="/assets/files/faizan-ali-resume.pdf" class="ag-btn ag-btn-light ag-btn-lg" download>Download Resume</a>
            </div>
        </div>

        <!-- Right: Profile Image (outside glass container, with rings) -->
        <div class="hero-profile">
            <div class="profile-ring ring-1"></div>
            <div class="profile-ring ring-2"></div>
            <div class="profile-ring ring-3"></div>
            <div class="profile-image">
                <img src="/assets/images/faizan-ali.jpg" alt="Faizan Ali">
            </div>
            <div class="corner-overlay top-left"><i class="fas fa-code"></i></div>
            <div class="corner-overlay top-right"><i class="fas fa-database"></i></div>
            <div class="corner-overlay bottom-left"><i class="fas fa-terminal"></i></div>
            <div class="corner-overlay bottom-right"><i class="fas fa-rocket"></i></div>
        </div>
    </div>
</section>


<!-- Quick Stats -->
<!-- Stats / Achievements Section -->
<section class="ag-section ag-stats-section">
    <div class="ag-container">
        <h2 class="ag-text-center ag-mb-4">Why Work With Me</h2>
        <div class="ag-grid ag-grid-4 stats-grid">
            <!-- Card 1 -->
            <div class="ag-card stats-card ag-animate ag-fadeInUp" style="animation-delay: 0.1s;">
                <div class="stats-icon-circle">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 class="stats-number">8+</h3>
                <p>Live Websites Delivered</p>
            </div>
            <!-- Card 2 -->
            <div class="ag-card stats-card ag-animate ag-fadeInUp" style="animation-delay: 0.2s;">
                <div class="stats-icon-circle">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3 class="stats-number">Fiverr & Upwork</h3>
                <p>Active Freelancer</p>
            </div>
            <!-- Card 3 -->
            <div class="ag-card stats-card ag-animate ag-fadeInUp" style="animation-delay: 0.3s;">
                <div class="stats-icon-circle">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 class="stats-number">MUST '27</h3>
                <p>Software Engineering</p>
            </div>
            <!-- Card 4 -->
            <div class="ag-card stats-card ag-animate ag-fadeInUp" style="animation-delay: 0.4s;">
                <div class="stats-icon-circle">
                    <i class="fas fa-face-smile"></i>
                </div>
                <h3 class="stats-number">10+</h3>
                <p>Happy Clients</p>
            </div>
        </div>
    </div>
</section>


<!-- Why Work With Me Section -->
<section class="ag-section ag-why-section">
    <div class="ag-container">
        <h2 class="ag-text-center ag-mb-4"> Why Clients Choose Me</h2>
        <div class="ag-grid ag-grid-3 why-grid">
            <!-- Card 1 -->
            <div class="ag-card why-card ag-animate ag-fadeInUp" style="animation-delay: 0.1s;">
                <div class="why-icon"><i class="fas fa-wand-magic-sparkles"></i></div>
                <h4>Modern & Professional Solutions</h4>
                <p>Sleek, future‑ready designs that build instant trust.</p>
            </div>
            <!-- Card 2 -->
            <div class="ag-card why-card ag-animate ag-fadeInUp" style="animation-delay: 0.2s;">
                <div class="why-icon"><i class="fas fa-code"></i></div>
                <h4>Clean & Scalable Code</h4>
                <p>Well‑structured code that grows with your business.</p>
            </div>
            <!-- Card 3 -->
            <div class="ag-card why-card ag-animate ag-fadeInUp" style="animation-delay: 0.3s;">
                <div class="why-icon"><i class="fas fa-magnifying-glass"></i></div>
                <h4>SEO‑Focused Development</h4>
                <p>Built to rank on Google from day one.</p>
            </div>
            <!-- Card 4 -->
            <div class="ag-card why-card ag-animate ag-fadeInUp" style="animation-delay: 0.4s;">
                <div class="why-icon"><i class="fas fa-database"></i></div>
                <h4>Strong Backend Expertise</h4>
                <p>APIs, databases & servers that handle real traffic.</p>
            </div>
            <!-- Card 5 -->
            <div class="ag-card why-card ag-animate ag-fadeInUp" style="animation-delay: 0.5s;">
                <div class="why-icon"><i class="fas fa-shield"></i></div>
                <h4>Secure Architecture</h4>
                <p>OWASP‑standard security, SSL, and vulnerability protection.</p>
            </div>
            <!-- Card 6 -->
            <div class="ag-card why-card ag-animate ag-fadeInUp" style="animation-delay: 0.6s;">
                <div class="why-icon"><i class="fas fa-comments"></i></div>
                <h4>Fast Communication</h4>
                <p>Regular updates, quick replies, and complete transparency.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<!-- Skills Showcase Section -->
<section class="ag-section ag-skills-section">
    <div class="ag-container">
        <h2 class="ag-text-center ag-mb-4"> My Skills & Proficiency</h2>
        <div class="ag-grid ag-grid-3 skills-pro-grid">
            <?php
            // Static skills data (replace with dynamic if needed)
            $skillsData = [
                ['name' => 'HTML5 / CSS3', 'icon' => 'fa-code', 'score' => 95],
                ['name' => 'JavaScript', 'icon' => 'fa-terminal', 'score' => 90],
                ['name' => 'React.js', 'icon' => 'fa-atom', 'score' => 85],
                ['name' => 'PHP / Laravel', 'icon' => 'fa-file-code', 'score' => 95],
                ['name' => 'Node.js', 'icon' => 'fa-server', 'score' => 88],
                ['name' => 'MySQL / MongoDB', 'icon' => 'fa-database', 'score' => 90],
                ['name' => 'SEO Optimization', 'icon' => 'fa-magnifying-glass', 'score' => 88],
                ['name' => 'AI Integration', 'icon' => 'fa-robot', 'score' => 80],
                ['name' => 'Website Security', 'icon' => 'fa-shield', 'score' => 85],
            ];
            $delay = 0;
            foreach ($skillsData as $skill):
                $delay += 0.1;
            ?>
            <div class="ag-card skill-card glass ag-animate ag-fadeInUp" style="animation-delay: <?= $delay ?>s;">
                <div class="skill-icon"><i class="fas <?= $skill['icon'] ?>"></i></div>
                <h4 class="skill-name"><?= esc($skill['name']) ?></h4>
                <div class="skill-progress" data-score="<?= $skill['score'] ?>">
                    <svg viewBox="0 0 36 36" class="progress-ring">
                        <path class="ring-bg"
                              d="M18 2.0845
                                 a 15.9155 15.9155 0 0 1 0 31.831
                                 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        <path class="ring-fill" stroke-dasharray="0, 100"
                              d="M18 2.0845
                                 a 15.9155 15.9155 0 0 1 0 31.831
                                 a 15.9155 15.9155 0 0 1 0 -31.831" />
                    </svg>
                    <span class="skill-percent">0%</span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Testimonials -->
<!-- Testimonials Section -->
<section class="ag-section ag-testimonials-section">
    <div class="ag-container">
        <h2 class="ag-text-center ag-mb-4"> What Clients Say</h2>
        <div class="ag-grid ag-grid-3 testimonials-grid">
            <?php
            // Static testimonials – replace with $testimonials loop if using data file
            $testimonials = [
                [
                    'text' => 'Faizan delivered a professional, high-speed website that perfectly matched our brand. His backend skills are outstanding.',
                    'author' => 'valor mediation',
                    'role' => '',
                    'rating' => 5,
                    'initials' => 'VM'
                ],
                [
                    'text' => 'Very responsive and skilled. The SEO improvements alone brought us more traffic. Highly recommended!',
                    'author' => ' Jt&Sons',
                    'role' => '',
                    'rating' => 5,
                    'initials' => 'JT'
                ],
                [
                    'text' => 'Excellent Laravel and Node.js expertise. The project was delivered on time with zero bugs. Will hire again.',
                    'author' => 'Alnoor agency owner',
                    'role' => 'Agency Owner',
                    'rating' => 5,
                    'initials' => 'AA'
                ]
            ];

            $delay = 0;
            foreach ($testimonials as $t):
                $delay += 0.1;
            ?>
            <div class="glass testimonial-card ag-animate ag-fadeInUp" style="animation-delay: <?= $delay ?>s;">
                <!-- Stars -->
                <div class="testimonial-stars">
                    <?php for ($i = 0; $i < $t['rating']; $i++): ?>
                        <i class="fas fa-star"></i>
                    <?php endfor; ?>
                </div>
                <!-- Quote -->
                <p class="testimonial-text">“<?= esc($t['text']) ?>”</p>
                <!-- Author -->
                <div class="testimonial-author">
                    <div class="author-avatar"><?= esc($t['initials']) ?></div>
                    <div>
                        <strong><?= esc($t['author']) ?></strong>
                        <span><?= esc($t['role']) ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="cta-container">
        <div class="cta-glass-card">
            <h2 class="cta-title">Ready to Build Your Next Project?</h2>
            <p class="cta-desc">Let's create modern, scalable, and secure digital solutions together.</p>
            <div class="cta-actions">
                <a href="/contact" class="cta-btn cta-btn-primary">Start a Project</a>
                <a href="/contact" class="cta-btn cta-btn-outline">Contact Me</a>
            </div>
        </div>
    </div>
</section>