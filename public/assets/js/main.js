/**
 * Faizan Ali Portfolio - Main Site Scripts
 * Handles navigation, smooth scrolling, and basic UI enhancements.
 */
document.addEventListener('DOMContentLoaded', function() {
    // ---------- Navbar Toggler (Mobile Menu) ----------
    const toggler = document.querySelector('.ag-navbar-toggler');
    const collapse = document.querySelector('.ag-navbar-collapse');
    
    if (toggler && collapse) {
        toggler.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            collapse.classList.toggle('ag-show');
        });
        
        // Close menu when a nav link is clicked (mobile)
        const navLinks = collapse.querySelectorAll('.ag-nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                collapse.classList.remove('ag-show');
            });
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.ag-navbar')) {
                collapse.classList.remove('ag-show');
            }
        });
    }

    // ---------- Smooth Scroll for Anchor Links ----------
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href').substring(1);
            if (!targetId) return;
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // ---------- Add Active Class to Current Page Nav Link ----------
    const currentPath = window.location.pathname;
    document.querySelectorAll('.ag-nav-link').forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });

    // ---------- Optional: Lazy Loading for Images (if not already using native loading) ----------
    // Not strictly necessary if using loading="lazy" in HTML, kept here as fallback.
    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
            img.src = img.dataset.src || img.src;
        });
    } else {
        // Fallback for older browsers (could be extended with Intersection Observer)
        console.log('Lazy loading not natively supported, consider a polyfill.');
    }
});

// In main.js
const animateElements = document.querySelectorAll('.ag-animate');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('ag-fadeInUp');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.2 });
animateElements.forEach(el => observer.observe(el));

// ---------- Skill Progress Animation ----------
const skillObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const skillCard = entry.target;
            const progressDiv = skillCard.querySelector('.skill-progress');
            const ringFill = skillCard.querySelector('.ring-fill');
            const skillPercent = skillCard.querySelector('.skill-percent');
            const score = parseInt(progressDiv.getAttribute('data-score')) || 0;

            // Animate the progress ring and percentage
            if (ringFill && skillPercent) {
                // SVG circle circumference (approx 100 for easier calculation)
                const circumference = 100;
                const offset = circumference - (score / 100) * circumference;

                // Animate from 0 to score
                let currentPercent = 0;
                const increment = score / 50; // Animate over ~50 iterations
                const percentInterval = setInterval(() => {
                    if (currentPercent < score) {
                        currentPercent += increment;
                        if (currentPercent > score) currentPercent = score;
                        skillPercent.textContent = Math.round(currentPercent) + '%';
                        ringFill.setAttribute('stroke-dasharray', `${(currentPercent / 100) * circumference}, ${circumference}`);
                    } else {
                        clearInterval(percentInterval);
                    }
                }, 20);
            }

            skillObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.3 });

// Observe all skill cards
document.querySelectorAll('.skill-card').forEach(card => {
    skillObserver.observe(card);
});

