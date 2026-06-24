/**
 * Interactive Galaxy Starfield – Stars follow mouse
 * Faizan Ali Portfolio
 */
document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('hero-stars');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let width, height, stars = [];
    let mouseX = -1000, mouseY = -1000; // far away initially
    let targetMouseX = -1000, targetMouseY = -1000; // for smooth interpolation
    const MAX_DIST = 400;     // attraction radius
    const ATTRACTION = 0.03;  // how strong stars pull toward mouse

    // ── Resize & init ──────────────────────────────────
    function initCanvas() {
        width = canvas.width = canvas.offsetWidth;
        height = canvas.height = canvas.offsetHeight;
    }
    window.addEventListener('resize', () => {
        initCanvas();
        createStars();
    });

    class Star {
        constructor() {
            this.reset();
            // initial random position
            this.x = Math.random() * width;
            this.y = Math.random() * height;
            this.vx = 0;
            this.vy = 0;
        }
        reset() {
            this.radius = Math.random() * 2.2 + 0.8;
            this.baseAlpha = Math.random() * 0.9 + 0.1;
            this.twinkleSpeed = Math.random() * 0.02 + 0.005;
            this.twinkleOffset = Math.random() * Math.PI * 2;
        }

        update(mx, my) {
            // Compute attraction force towards mouse
            const dx = mx - this.x;
            const dy = my - this.y;
            const dist = Math.sqrt(dx * dx + dy * dy);
            if (dist < MAX_DIST && dist > 1) {
                const force = ATTRACTION * (1 - dist / MAX_DIST); // stronger when closer
                this.vx += (dx / dist) * force;
                this.vy += (dy / dist) * force;
            }

            // Apply velocity
            this.x += this.vx;
            this.y += this.vy;

            // Damping
            this.vx *= 0.96;
            this.vy *= 0.96;

            // Wrap around edges
            if (this.x < -10) this.x = width + 10;
            if (this.x > width + 10) this.x = -10;
            if (this.y < -10) this.y = height + 10;
            if (this.y > height + 10) this.y = -10;

            // Twinkling phase
            this.twinkleOffset += this.twinkleSpeed;
        }

        draw(ctx) {
            const alpha = this.baseAlpha + Math.sin(this.twinkleOffset) * 0.15;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(255,255,255,${Math.min(1, Math.max(0, alpha))})`;
            ctx.fill();
        }
    }

    function createStars() {
        const density = 1800; // stars per 1M pixels²
        const count = Math.floor((width * height) / density);
        stars = [];
        for (let i = 0; i < count; i++) {
            stars.push(new Star());
        }
    }

    // Smooth mouse interpolation
    function updateMouse(e) {
        const rect = canvas.getBoundingClientRect();
        targetMouseX = e.clientX - rect.left;
        targetMouseY = e.clientY - rect.top;
    }

    document.addEventListener('mousemove', updateMouse);
    document.addEventListener('touchmove', (e) => {
        const touch = e.touches[0];
        if (touch) {
            const rect = canvas.getBoundingClientRect();
            targetMouseX = touch.clientX - rect.left;
            targetMouseY = touch.clientY - rect.top;
        }
    }, { passive: true });

    function animate() {
        ctx.clearRect(0, 0, width, height);

        // Smoothly move mouse towards target (lerp)
        mouseX += (targetMouseX - mouseX) * 0.1;
        mouseY += (targetMouseY - mouseY) * 0.1;

        stars.forEach(star => {
            star.update(mouseX, mouseY);
            star.draw(ctx);
        });

        requestAnimationFrame(animate);
    }

    initCanvas();
    createStars();
    animate();
});