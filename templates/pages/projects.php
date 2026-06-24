<!-- ====== Projects Hero ====== -->
<section class="prj-hero">
  <div class="prj-hero-container">
    <div class="prj-hero-glass">
      <span class="prj-badge"><i class="ph ph-folder-open"></i> Real Work, Real Impact</span>
      <h1 class="prj-hero-title">
        My <span class="prj-gradient">Projects</span>
      </h1>
      <p class="prj-hero-desc">
        Every website you see below is live, production‑ready, and built for a real business. 
        I focus on performance, scalability, and user experience – not just code.
      </p>
    </div>
  </div>
</section>

<!-- ====== Project Showcases ====== -->
<?php foreach ($projects as $project): ?>
<section class="prj-showcase-section">
  <div class="prj-container">
    <div class="prj-showcase-card glass">
      <div class="prj-image">
        <?php if (!empty($project['image'])): ?>
          <img src="/assets/images/<?= esc($project['image']) ?>" 
               alt="<?= esc($project['title']) ?>" />
        <?php else: ?>
          <div class="prj-image-placeholder">
            <i class="ph ph-browser"></i>
          </div>
        <?php endif; ?>
      </div>
      <div class="prj-content">
        <div class="prj-header">
          <h2><?= esc($project['title']) ?></h2>
          <span class="prj-category"><?= esc($project['category']) ?></span>
        </div>
        <p class="prj-desc"><?= esc($project['short_desc']) ?></p>
        
        <div class="prj-tech-stack">
          <?php foreach ($project['tech_stack'] as $tech): ?>
            <span class="prj-tech-pill"><?= esc($tech) ?></span>
          <?php endforeach; ?>
        </div>

        <ul class="prj-features">
          <?php foreach ($project['features'] as $feat): ?>
            <li><i class="ph ph-check-circle"></i> <?= esc($feat) ?></li>
          <?php endforeach; ?>
        </ul>

        <a href="<?= esc($project['url']) ?>" target="_blank" class="prj-btn">
          <i class="ph ph-arrow-square-out"></i> View Live Project
        </a>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>