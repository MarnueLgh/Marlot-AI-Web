/* =============================================
   MARLOT AI - Blog JavaScript
   Zoom Parallax & Interactions
   ============================================= */

document.addEventListener('DOMContentLoaded', function() {
    
    // =============================================
    // Zoom Parallax Effect (Inverted - starts zoomed out, ends zoomed in)
    // =============================================
    const parallaxContainer = document.getElementById('zoomParallax');
    
    if (parallaxContainer) {
        const parallaxWrappers = parallaxContainer.querySelectorAll('.parallax-image-wrapper');
        
        // Get the scroll progress within the parallax section
        function getScrollProgress() {
            const rect = parallaxContainer.getBoundingClientRect();
            const containerHeight = parallaxContainer.offsetHeight;
            const viewportHeight = window.innerHeight;
            
            // Calculate progress (0 to 1) based on scroll position
            const scrollStart = rect.top + viewportHeight;
            const scrollEnd = rect.bottom;
            const scrollRange = scrollEnd - scrollStart + viewportHeight;
            const scrolled = viewportHeight - rect.top;
            
            return Math.max(0, Math.min(1, scrolled / scrollRange));
        }
        
        // Apply scale transforms based on scroll progress (INVERTED)
        function updateParallax() {
            const progress = getScrollProgress();
            
            parallaxWrappers.forEach((wrapper) => {
                const maxScale = parseFloat(wrapper.dataset.scale) || 4;
                // INVERTED: Start at maxScale (zoomed out showing all), end at 1 (zoomed in)
                // Using easeInOut curve for smoother transition
                const easedProgress = progress < 0.5 
                    ? 2 * progress * progress 
                    : 1 - Math.pow(-2 * progress + 2, 2) / 2;
                
                const currentScale = maxScale - (maxScale - 1) * easedProgress;
                
                wrapper.style.transform = `scale(${currentScale})`;
            });
        }
        
        // Throttled scroll handler
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    updateParallax();
                    ticking = false;
                });
                ticking = true;
            }
        });
        
        // Initial update
        updateParallax();
    }
    
    // =============================================
    // Blog Filter Functionality
    // =============================================
    const filterButtons = document.querySelectorAll('.filter-btn');
    const blogCards = document.querySelectorAll('.blog-card');
    
    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            // Update active state
            filterButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.dataset.filter;
            
            // Filter cards with animation
            blogCards.forEach(card => {
                const category = card.dataset.category;
                
                if (filter === 'all' || category === filter) {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    card.style.display = 'block';
                    
                    setTimeout(() => {
                        card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.transition = 'opacity 0.3s ease';
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
    
    // =============================================
    // Smooth Scroll for Blog CTA
    // =============================================
    const blogCta = document.querySelector('.blog-hero-cta');
    
    if (blogCta) {
        blogCta.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    }
    
    // =============================================
    // Blog Cards Fade-in Animation
    // =============================================
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };
    
    const cardObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
                cardObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    blogCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        cardObserver.observe(card);
    });
    
    // =============================================
    // Load More Button (Placeholder)
    // =============================================
    const loadMoreBtn = document.querySelector('.load-more-btn');
    
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            // Placeholder - would load more articles via API
            this.textContent = 'Cargando...';
            
            setTimeout(() => {
                this.textContent = 'No hay más artículos';
                this.disabled = true;
                this.style.opacity = '0.5';
            }, 1500);
        });
    }
    
    // =============================================
    // Navbar Scroll Behavior for Blog
    // =============================================
    const navbar = document.getElementById('navbar');
    
    if (navbar && navbar.classList.contains('navbar-blog')) {
        // Blog page always has solid navbar
        navbar.classList.add('scrolled');
    }
    
});
