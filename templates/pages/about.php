<!-- ====== About Hero (dark glass) ====== -->
<section class="abt-hero">
  <div class="abt-hero-container">
    <div class="abt-hero-glass">
      <span class="abt-badge"><i class="ph ph-code"></i> Developer & Engineer</span>
      <h1 class="abt-hero-title">
        Hi, I'm <span class="abt-gradient">Faizan Ali</span>
      </h1>
      <p class="abt-hero-desc">
        Software Engineering student at MUST (2023‑2027) — building modern, secure, and AI‑powered web solutions that solve real‑world problems.
      </p>
      <div class="abt-hero-actions">
        <a href="/assets/files/faizan-ali-resume.pdf" class="abt-btn abt-btn-primary" download>
          <i class="ph ph-download-simple"></i> Download Resume
        </a>
        <a href="/contact" class="abt-btn abt-btn-outline">
          <i class="ph ph-paper-plane-tilt"></i> Let's Talk
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ====== Personal Snapshot (glass card) ====== -->
<section class="abt-section">
  <div class="abt-container">
    <div class="abt-snapshot-glass">
      <!-- Left: image & basics -->
      <div class="abt-snapshot-left">
        <div class="abt-avatar">
          <img src="/assets/images/faizan-ali.jpg" alt="Faizan Ali" />
        </div>
        <h2>Faizan Ali</h2>
        <p class="abt-role"><i class="ph ph-brackets-curly"></i> Full Stack Developer</p>
        <p class="abt-location"><i class="ph ph-map-pin"></i> Punjab, Pakistan</p>
        <div class="abt-contact-chips">
          <a href="tel:+923241673184" class="abt-chip"><i class="ph ph-phone"></i> +92 324 1673184</a>
          <a href="mailto:faizanali@example.com" class="abt-chip"><i class="ph ph-envelope"></i> Email</a>
        </div>
      </div>
      <!-- Right: details -->
      <div class="abt-snapshot-right">
        <h3><i class="ph ph-graduation-cap"></i> Education</h3>
        <p><strong>BS Software Engineering</strong><br>Mirpur University of Science & Technology (MUST)<br>2023 – 2027</p>

        <h3><i class="ph ph-compass"></i> Background</h3>
        <p>From Opiyan Sharif, Zafarwal, Narowal. Started with curiosity about how websites work — now building full‑stack applications with modern technologies.</p>

        <h3><i class="ph ph-check-circle"></i> Quick Facts</h3>
        <ul class="abt-facts">
          <li>8+ live websites deployed</li>
          <li>Active freelancer on Fiverr & Upwork</li>
          <li>10+ happy clients</li>
          <li>Open‑source contributor</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ====== Technical Interests (glass grid) ====== -->
<section class="abt-section abt-bg-light">
  <div class="abt-container">
    <h2 class="abt-section-title"><i class="ph ph-stack"></i> Core Technical Interests</h2>
    <div class="abt-interests-grid">
      <?php
      $interests = [
        ['icon' => 'ph-code', 'title' => 'PHP & Laravel'],
        ['icon' => 'ph-hard-drives', 'title' => 'Node.js Backend'],
        ['icon' => 'ph-stack', 'title' => 'MERN Stack'],
        ['icon' => 'ph-globe', 'title' => 'WordPress Customization'],
        ['icon' => 'ph-robot', 'title' => 'AI Agent Integration'],
        ['icon' => 'ph-database', 'title' => 'Database Design'],
        ['icon' => 'ph-shield-check', 'title' => 'Website Security'],
        ['icon' => 'ph-magnifying-glass', 'title' => 'SEO Optimization'],
        ['icon' => 'ph-paint-brush', 'title' => 'UI/UX Interfaces'],
        ['icon' => 'ph-graph', 'title' => 'Python & Data Science'],
      ];
      foreach ($interests as $item): ?>
        <div class="abt-interest-card">
          <i class="ph <?= $item['icon'] ?>"></i>
          <span><?= esc($item['title']) ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ====== What Drives Me ====== -->
<section class="abt-section">
  <div class="abt-container">
    <h2 class="abt-section-title"><i class="ph ph-lightbulb-filament"></i> What Drives Me</h2>
    <div class="abt-drive-grid">
      <div class="abt-drive-card glass">
        <i class="ph ph-robot"></i>
        <h4>AI & Security Vision</h4>
        <p>I’m deeply passionate about integrating AI agents into applications that prioritize user privacy and digital safety. My long‑term goal is to build systems that protect digital content and promote online security.</p>
      </div>
      <div class="abt-drive-card glass">
        <i class="ph ph-flame"></i>
        <h4>Inspired by Tesla</h4>
        <p>Nikola Tesla’s creative genius and commitment to innovation inspire me to pursue technology not just as a career, but as a means to create lasting impact and solve meaningful problems.</p>
      </div>
      <div class="abt-drive-card glass">
        <i class="ph ph-chart-line-up"></i>
        <h4>Continuous Learning</h4>
        <p>I learn by building. From mastering OOP principles to exploring disaster recovery and malware analysis, I constantly push my boundaries through hands‑on projects and freelancing experience.</p>
      </div>
    </div>
  </div>
</section>

<!-- ====== Real-World Experience ====== -->
<section class="abt-section abt-bg-light">
  <div class="abt-container">
    <h2 class="abt-section-title"><i class="ph ph-wrench"></i> Real‑World Experience</h2>
    <div class="abt-experience-grid">
      <div class="abt-exp-card glass">
        <i class="ph ph-globe"></i>
        <h4>Multiple Live Deployments</h4>
        <p>Deployed and managed live websites with cPanel, domain configuration, and production debugging, ensuring optimal performance and SEO.</p>
      </div>
      <div class="abt-exp-card glass">
        <i class="ph ph-users"></i>
        <h4>Freelance Success</h4>
        <p>Delivered projects for clients worldwide through Fiverr & Upwork, maintaining 5‑star ratings and 100% client satisfaction.</p>
      </div>
      <div class="abt-exp-card glass">
        <i class="ph ph-shield-check"></i>
        <h4>Security & UX Focus</h4>
        <p>I prioritize clean architecture, security, and user experience in every project — from simple business sites to complex AI‑powered apps.</p>
      </div>
    </div>
  </div>
</section>

<!-- ====== CTA ====== -->
<section class="cta-section">
  <div class="cta-container">
    <div class="cta-glass-card">
      <h2 class="cta-title">Let’s Build Something Great Together</h2>
      <p class="cta-desc">Have a project in mind? Let’s turn your idea into a modern, secure, and scalable digital product.</p>
      <div class="cta-actions">
        <a href="/contact" class="cta-btn cta-btn-primary">Start a Project</a>
        <a href="/assets/files/faizan-ali-resume.pdf" class="cta-btn cta-btn-outline" download>Download Resume</a>
      </div>
    </div>
  </div>
</section>