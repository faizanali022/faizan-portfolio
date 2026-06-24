<!-- ====== SERVICES HERO (Dark Galaxy) ====== -->
<section class="svc-hero" id="svcHero">
    <canvas id="svcStars"></canvas>
    <div class="svc-hero-container">
        <div class="svc-hero-glass">
            <span class="svc-badge">🛠️ What I Offer</span>
            <h1 class="svc-hero-title">
                Professional Web<br><span class="svc-gradient">Development Services</span>
            </h1>
            <p class="svc-hero-desc">
                Modern, scalable, and secure solutions built with PHP/Laravel, MERN, Node.js, AI, SEO, and bulletproof security. Let’s create something impactful together.
            </p>
            <a href="/contact" class="svc-btn svc-btn-primary">Start a Project</a>
        </div>
    </div>
</section>

<!-- ====== SERVICES GRID (Marble Glass Cards) ====== -->
<section class="svc-grid-section">
    <div class="svc-container">
        <h2 class="svc-section-title">💎 Explore My Services</h2>
        <div class="svc-grid">
            <?php
            // --- Icons mapping ---
            $icons = [
                'PHP / Laravel Development' => 'ph-code',
                'MERN Stack Development'    => 'ph-stack',
                'Node.js Backend Development'=> 'ph-hard-drives',
                'AI Agent Integration'      => 'ph-robot',
                'SEO Optimization'          => 'ph-magnifying-glass',
                'UI/UX Design'              => 'ph-paint-brush',
                'Website Security'          => 'ph-shield-check',
                'WordPress Solutions'       => 'ph-globe',
            ];

            $delay = 0;
            foreach ($services as $svc):
                $icon = $icons[$svc['title']] ?? 'ph-sparkle';
                $delay += 0.08;
            ?>
            <div class="svc-card animate-fadeUp" style="animation-delay: <?= $delay ?>s;">
                <div class="svc-card-inner">
                    <div class="svc-card-icon"><i class="ph <?= esc($icon) ?>"></i></div>
                    <h3 class="svc-card-title"><?= esc($svc['title']) ?></h3>
                    <p class="svc-card-desc"><?= esc($svc['description']) ?></p>
                </div>
                <div class="svc-card-hover-shine"></div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="svc-bottom-cta">
            <a href="/contact" class="svc-btn svc-btn-outline">Discuss Your Project</a>
        </div>
    </div>
</section>

<!-- ====== Stars Script (same as before, but for #svcStars) ====== -->
<script>
(function() {
    const canvas = document.getElementById('svcStars');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let width, height, stars = [];
    let mouseX = -1000, mouseY = -1000, targetMouseX = -1000, targetMouseY = -1000;

    function initCanvas() {
        width = canvas.width = canvas.offsetWidth;
        height = canvas.height = canvas.offsetHeight;
    }
    window.addEventListener('resize', () => { initCanvas(); createStars(); });

    class Star {
        constructor() { this.reset(); this.x = Math.random()*width; this.y = Math.random()*height; this.vx=0; this.vy=0; }
        reset() {
            this.radius = Math.random()*2.2+0.8;
            this.baseAlpha = Math.random()*0.9+0.1;
            this.twinkleSpeed = Math.random()*0.02+0.005;
            this.twinkleOffset = Math.random()*Math.PI*2;
        }
        update(mx, my) {
            const dx = mx - this.x, dy = my - this.y;
            const dist = Math.sqrt(dx*dx+dy*dy);
            if (dist < 400 && dist > 1) {
                const force = 0.03 * (1 - dist/400);
                this.vx += (dx/dist)*force; this.vy += (dy/dist)*force;
            }
            this.x += this.vx; this.y += this.vy;
            this.vx *= 0.96; this.vy *= 0.96;
            if (this.x<-10) this.x=width+10; if (this.x>width+10) this.x=-10;
            if (this.y<-10) this.y=height+10; if (this.y>height+10) this.y=-10;
            this.twinkleOffset += this.twinkleSpeed;
        }
        draw(ctx) {
            const alpha = this.baseAlpha + Math.sin(this.twinkleOffset)*0.15;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI*2);
            ctx.fillStyle = `rgba(255,255,255,${Math.min(1,Math.max(0,alpha))})`;
            ctx.fill();
        }
    }
    function createStars() {
        const count = Math.floor((width*height)/1800);
        stars = [];
        for (let i=0; i<count; i++) stars.push(new Star());
    }
    function updateMouse(e) {
        const rect = canvas.getBoundingClientRect();
        targetMouseX = e.clientX - rect.left; targetMouseY = e.clientY - rect.top;
    }
    document.addEventListener('mousemove', updateMouse);
    document.addEventListener('touchmove', (e) => {
        const t = e.touches[0];
        if (t) { const rect = canvas.getBoundingClientRect(); targetMouseX = t.clientX-rect.left; targetMouseY = t.clientY-rect.top; }
    }, {passive: true});

    function animate() {
        ctx.clearRect(0,0,width,height);
        mouseX += (targetMouseX - mouseX)*0.1;
        mouseY += (targetMouseY - mouseY)*0.1;
        stars.forEach(s => { s.update(mouseX, mouseY); s.draw(ctx); });
        requestAnimationFrame(animate);
    }
    initCanvas(); createStars(); animate();
})();
</script>