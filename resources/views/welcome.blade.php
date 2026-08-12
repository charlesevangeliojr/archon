<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta --}}
    <title>Archon - Moving Life Forward</title>
    <meta name="description" content="Archon is the leading provider and top distributor of Sinotruk Howo heavy equipment in the Philippines. Free delivery, on-site repair, 1-year warranty, and 24-hour service.">
    <meta name="keywords" content="Sinotruk, Howo, heavy duty truck, dump truck, prime mover, Philippines, Archon, truck distributor">
    <meta name="author" content="Archon Special Machineries Inc.">
    <meta property="og:title" content="Archon Special Machineries Inc. — Heavy Duty Truck Provider">
    <meta property="og:description" content="Your reliable heavy duty truck provider in the Philippines. Top distributor of Sinotruk Howo.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/logo/Archon Logo.png') }}">
    <link rel="canonical" href="{{ url('/') }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/logo/footer-logo.png') }}">

    {{-- Styles --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    {{-- Dynamic Background Images (Solves local dev / production path issues with Vite) --}}
    <style>
        :root {
            --bg-banner: url('{{ asset('assets/images/bg-banner.png') }}');
            --bg-service: url('{{ asset('assets/shapes/bg-service.png') }}');
            --bg-rqst-quote: url('{{ asset('assets/shapes/bg-rqst quote.png') }}');
            --bg-download: url('{{ asset('assets/images/download brochure.png') }}');
            --bg-truck-shape: url('{{ asset('assets/shapes/bg-truck-shape.png') }}');
            --bg-partners-line: url('{{ asset('assets/shapes/partners line stroke.png') }}');
            --bg-article: url('{{ asset('assets/images/bg-article.png') }}');
            --bg-world-map: url('{{ asset('assets/images/world map 2.png') }}');
        }
    </style>
</head>
<body>

    {{-- Navbar (sticky) --}}
    @include('partials.navbar')

    {{-- Main content --}}
    <main id="main-content">

        {{-- 1. Hero / Banner --}}
        @include('partials.hero')

        {{-- 2. About + Features --}}
        @include('partials.about')

        {{-- 3. Request a Quote --}}
        @include('partials.quote-form')

        {{-- 4. Partners --}}
        @include('partials.partners')

        {{-- 5. Featured Products --}}
        @include('partials.products')

        {{-- 6. After Sales Services --}}
        @include('partials.services')

        {{-- 7. Articles / News --}}
        @include('partials.articles')

    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Scroll to Top Button --}}
    <button class="scroll-top" id="scrollTopBtn" aria-label="Scroll to top" title="Back to top">↑</button>

    {{-- Quick View Modal --}}
    <div class="quick-view-modal" id="quickViewModal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
        <div class="modal-overlay" id="modalOverlay"></div>
        <div class="modal-content">
            <button class="modal-close" id="modalClose" aria-label="Close modal">&times;</button>
            <img src="" alt="Product Image" id="modalImg">
            <h3 id="modalTitle"></h3>
        </div>
    </div>

    {{-- Inline JavaScript ──────────────────────────────────── --}}
    <script>
    document.addEventListener('DOMContentLoaded', function () {

        /* ── Hero Slider ────────────────────────────────── */
        const slides = document.querySelectorAll('.hero-slide');
        const dots   = document.querySelectorAll('.slider-dot');
        let current  = 0;
        let autoplay;

        function showSlide(index) {
            slides.forEach((s, i) => {
                s.classList.toggle('active', i === index);
            });
            dots.forEach((d, i) => {
                d.classList.toggle('active', i === index);
                d.setAttribute('aria-selected', i === index ? 'true' : 'false');
            });
            current = index;
        }

        function nextSlide() {
            showSlide((current + 1) % slides.length);
        }
        function prevSlide() {
            showSlide((current - 1 + slides.length) % slides.length);
        }

        document.getElementById('sliderNext').addEventListener('click', () => { nextSlide(); resetAutoplay(); });
        document.getElementById('sliderPrev').addEventListener('click', () => { prevSlide(); resetAutoplay(); });

        dots.forEach(dot => {
            dot.addEventListener('click', () => { showSlide(+dot.dataset.index); resetAutoplay(); });
        });

        function startAutoplay() { autoplay = setInterval(nextSlide, 4500); }
        function resetAutoplay() { clearInterval(autoplay); startAutoplay(); }
        startAutoplay();

        /* ── Mobile Hamburger ───────────────────────────── */
        const hamburger  = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');

        function openMobileMenu() {
            mobileMenu.classList.add('active');
            hamburger.setAttribute('aria-expanded', 'true');
            document.body.style.overflow = 'hidden';
            const bars = hamburger.querySelectorAll('span');
            bars[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
            bars[1].style.opacity   = '0';
            bars[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
        }

        function closeMobileMenu() {
            mobileMenu.classList.remove('active');
            hamburger.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
            hamburger.querySelectorAll('span').forEach(b => { b.style.transform = ''; b.style.opacity = ''; });
        }

        hamburger.addEventListener('click', function () {
            if (mobileMenu.classList.contains('active')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });

        // Close mobile menu on nav link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                closeMobileMenu();
            });
        });

        // Close on resize to desktop width
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768 && mobileMenu.classList.contains('active')) {
                closeMobileMenu();
            }
        });

        /* ── Scroll to Top ──────────────────────────────── */
        const scrollBtn = document.getElementById('scrollTopBtn');
        window.addEventListener('scroll', () => {
            scrollBtn.classList.toggle('visible', window.scrollY > 400);
        });
        scrollBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        /* ── Navbar scroll shadow ───────────────────────── */
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            navbar.style.boxShadow = window.scrollY > 10
                ? '0 4px 24px rgba(0,0,0,0.4)'
                : 'none';
        });

        /* ── Feature Card Hover toggle ──────────────────── */
        document.querySelectorAll('.feature-card').forEach(card => {
            card.addEventListener('mouseenter', function () {
                document.querySelectorAll('.feature-card').forEach(c => c.classList.remove('active'));
                this.classList.add('active');
            });
        });

        /* ── Product Card — tap support on mobile ───────── */
        if ('ontouchstart' in window) {
            document.querySelectorAll('.product-card').forEach(card => {
                card.addEventListener('click', function (e) {
                    if (e.target.closest('.btn')) return;
                    document.querySelectorAll('.product-card').forEach(c => c.classList.remove('touch-active'));
                    this.classList.toggle('touch-active');
                });
            });
        }


        /* ── Color Swatch Picker ────────────────────────── */
        document.querySelectorAll('.product-colors').forEach(group => {
            group.querySelectorAll('.color-swatch').forEach(swatch => {
                swatch.addEventListener('click', function () {
                    group.querySelectorAll('.color-swatch').forEach(s => s.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });

        /* ── Scroll Reveal ──────────────────────────────── */
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        const revealEls = document.querySelectorAll(
            '.feature-card, .product-card, .article-card, .service-item, .about-story > div'
        );
        revealEls.forEach(el => {
            el.style.opacity    = '0';
            el.style.transform  = 'translateY(24px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            revealObserver.observe(el);
        });

        /* ── Quote form privacy validation ─────────────── */
        const quoteForm = document.getElementById('quoteForm');
        if (quoteForm) {
            quoteForm.addEventListener('submit', function (e) {
                const privacy = document.getElementById('privacy');
                if (!privacy.checked) {
                    e.preventDefault();
                    privacy.focus();
                    privacy.parentElement.style.color = '#fca5a5';
                    setTimeout(() => { privacy.parentElement.style.color = ''; }, 2000);
                }
            });
        }

        /* ── Watch Video keyboard support ───────────────── */
        const watchBtn = document.getElementById('watchVideoBtn');
        if (watchBtn) {
            watchBtn.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    watchBtn.click();
                }
            });
        }

        /* ── Auto-dismiss flash messages ────────────────── */
        const flash = document.querySelector('.flash-message');
        if (flash) {
            setTimeout(() => {
                flash.style.transition = 'opacity 0.5s';
                flash.style.opacity    = '0';
                setTimeout(() => flash.remove(), 500);
            }, 6000);
        }

        /* ── Navbar ScrollSpy ───────────────────────────── */
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.navbar-links a, .mobile-menu a');
        
        const scrollSpyObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + entry.target.id) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }, {
            rootMargin: '-20% 0px -70% 0px' // Trigger when section is around top of the screen
        });

        sections.forEach(sec => {
            scrollSpyObserver.observe(sec);
        });

        /* ── Quick View Modal Logic ─────────────────────── */
        const modal = document.getElementById('quickViewModal');
        const modalOverlay = document.getElementById('modalOverlay');
        const modalCloseBtn = document.getElementById('modalClose');
        const modalImg = document.getElementById('modalImg');
        const modalTitle = document.getElementById('modalTitle');

        const openModal = (imgSrc, titleText) => {
            modalImg.src = imgSrc;
            modalTitle.textContent = titleText;
            modal.classList.add('active');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        };

        const closeModal = () => {
            modal.classList.remove('active');
            modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            setTimeout(() => { 
                modalImg.src = ''; 
                modalImg.classList.remove('zoomed');
                modalImg.style.transformOrigin = 'center center';
            }, 300); // clear img after transition
        };

        // Attach click to all Quick View buttons
        document.querySelectorAll('.quick-view-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const card = this.closest('.product-card');
                const imgSrc = card.querySelector('.product-img img').src;
                const titleText = this.getAttribute('data-title');
                openModal(imgSrc, titleText);
            });
        });

        // Close bindings
        if (modalCloseBtn) modalCloseBtn.addEventListener('click', closeModal);
        if (modalOverlay) modalOverlay.addEventListener('click', closeModal);
        
        if (modalImg) {
            modalImg.addEventListener('click', function(e) {
                e.stopPropagation();
                this.classList.toggle('zoomed');
            });
            modalImg.addEventListener('mousemove', function(e) {
                if (this.classList.contains('zoomed')) {
                    const x = (e.offsetX / this.offsetWidth) * 100;
                    const y = (e.offsetY / this.offsetHeight) * 100;
                    this.style.transformOrigin = `${x}% ${y}%`;
                }
            });
            modalImg.addEventListener('mouseleave', function() {
                this.style.transformOrigin = 'center center';
            });
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && modal.classList.contains('active')) {
                closeModal();
            }
        });

    });
    </script>

</body>
</html>
