/* =============================================
   MARLOT AI - JavaScript
   ============================================= */

document.addEventListener('DOMContentLoaded', function() {
    
    // =============================================
    // Scroll-up Reveal Navigation (Simple)
    // =============================================
    const navbar = document.getElementById('navbar');
    let lastScrollY = window.scrollY;
    
    window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;
        
        // Cambiar estilo cuando pasamos el hero
        if (currentScrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
        
        // Solo aplicar hide/show después de pasar el hero
        if (currentScrollY > 150) {
            if (currentScrollY > lastScrollY) {
                // Bajando: Escondemos
                navbar.classList.add('hidden');
            } else {
                // Subiendo: Mostramos
                navbar.classList.remove('hidden');
            }
        } else {
            // Cerca del top, siempre visible
            navbar.classList.remove('hidden');
        }
        
        lastScrollY = currentScrollY;
    });
    
    // =============================================
    // Smooth Scroll for Navigation Links
    // =============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // =============================================
    // Fade-in Animation on Scroll
    // =============================================
    const fadeElements = document.querySelectorAll('.service-card, .value-content, .value-image-placeholder, .stat-item');
    
    fadeElements.forEach(element => {
        element.classList.add('fade-in');
    });
    
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };
    
    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                fadeObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    fadeElements.forEach(element => {
        fadeObserver.observe(element);
    });
    
    // =============================================
    // Newsletter Form Handling
    // =============================================
    const newsletterForm = document.querySelector('.newsletter-form');
    
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const emailInput = this.querySelector('.newsletter-input');
            const email = emailInput.value.trim();
            
            if (validateEmail(email)) {
                // Success feedback
                const btn = this.querySelector('.newsletter-btn');
                const originalText = btn.textContent;
                
                btn.textContent = '¡SUSCRITO!';
                btn.style.backgroundColor = 'var(--color-primary)';
                btn.style.borderColor = 'var(--color-primary)';
                btn.style.color = 'white';
                
                emailInput.value = '';
                
                setTimeout(() => {
                    btn.textContent = originalText;
                    btn.style.backgroundColor = '';
                    btn.style.borderColor = '';
                    btn.style.color = '';
                }, 3000);
                
            } else {
                // Error feedback
                emailInput.style.borderColor = '#e74c3c';
                
                setTimeout(() => {
                    emailInput.style.borderColor = '';
                }, 2000);
            }
        });
    }
    
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
    
    // =============================================
    // Service Cards Hover Effect
    // =============================================
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // =============================================
    // Parallax Effect for Hero (subtle)
    // =============================================
    const hero = document.querySelector('.hero');
    
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const rate = scrolled * 0.3;
        
        if (hero && scrolled < window.innerHeight) {
            hero.style.backgroundPosition = `center ${rate}px`;
        }
    });
    
    // =============================================
    // Animate Stats Numbers
    // =============================================
    const statNumbers = document.querySelectorAll('.stat-number');
    let statsAnimated = false;
    
    function animateStats() {
        if (statsAnimated) return;
        
        statNumbers.forEach(stat => {
            const text = stat.textContent;
            const hasPlus = text.includes('+');
            const hasPercent = text.includes('%');
            const number = parseInt(text.replace(/[^0-9]/g, ''));
            
            if (isNaN(number)) return;
            
            let current = 0;
            const increment = number / 50;
            const duration = 1500;
            const stepTime = duration / 50;
            
            const counter = setInterval(() => {
                current += increment;
                
                if (current >= number) {
                    current = number;
                    clearInterval(counter);
                }
                
                let displayValue = Math.floor(current);
                if (hasPlus) displayValue = displayValue + '+';
                if (hasPercent) displayValue = displayValue + '%';
                
                stat.textContent = displayValue;
            }, stepTime);
        });
        
        statsAnimated = true;
    }
    
    // Observe stats section
    const statsSection = document.querySelector('.stats-section');
    
    if (statsSection) {
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateStats();
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        statsObserver.observe(statsSection);
    }
    
    // =============================================
    // Neural Network Animation Enhancement
    // =============================================
    const nodes = document.querySelectorAll('.node');
    
    nodes.forEach((node, index) => {
        node.style.animationDelay = `${index * 0.3}s`;
    });
    
    // =============================================
    // Mobile Menu (if needed in future)
    // =============================================
    // Placeholder for mobile menu toggle functionality
    // Can be expanded based on requirements
    
    // =============================================
    // Dark Mode Toggle
    // =============================================
    const themeToggle = document.getElementById('themeToggle');
    const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
    
    // Check for saved theme preference or use system preference
    function getThemePreference() {
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            return savedTheme;
        }
        return prefersDarkScheme.matches ? 'dark' : 'light';
    }
    
    // Apply theme
    function setTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
    }
    
    // Initialize theme
    setTheme(getThemePreference());
    
    // Toggle theme on button click
    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            setTheme(newTheme);
        });
    }
    
    // Listen for system theme changes
    prefersDarkScheme.addEventListener('change', (e) => {
        if (!localStorage.getItem('theme')) {
            setTheme(e.matches ? 'dark' : 'light');
        }
    });
    
    // =============================================
    // Chatbot Button (placeholder for future)
    // =============================================
    const chatbotBtn = document.getElementById('chatbotBtn');
    
    if (chatbotBtn) {
        chatbotBtn.addEventListener('click', () => {
            // Aquí puedes agregar la lógica para abrir el chatbot
            // Por ejemplo: document.getElementById('chatbot-container').classList.toggle('active');
            console.log('Chatbot button clicked - Add your chatbot logic here');
        });
    }
    
});

// =============================================
// Utility Functions
// =============================================

// Debounce function for performance
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Throttle function for scroll events
function throttle(func, limit) {
    let inThrottle;
    return function(...args) {
        if (!inThrottle) {
            func.apply(this, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}
