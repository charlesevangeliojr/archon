{{-- Navbar --}}
<nav class="navbar" id="navbar">
    <div class="container">
        <a href="/" class="navbar-logo" aria-label="Archon Home">
            <img src="{{ asset('assets/logo/Archon Logo.png') }}" alt="Archon Special Machineries">
        </a>

        <div class="navbar-actions">
            <div class="navbar-links" id="navLinks">
                <a href="#about">About Us</a>
                <a href="#products">Products</a>
                <a href="#services">Services</a>
                <a href="#articles">Articles</a>
            </div>

            <div class="navbar-cta">
                <a href="#quote" class="btn btn-red" id="getInTouchBtn">Get in Touch</a>
            </div>
        </div>

        <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    {{-- Mobile Menu (full-screen overlay) --}}
    <div class="mobile-menu" id="mobileMenu" role="dialog" aria-modal="true" aria-label="Navigation Menu">
        <a href="#about">About Us</a>
        <a href="#products">Products</a>
        <a href="#services">Services</a>
        <a href="#articles">Articles</a>
        <a href="#quote" class="btn btn-red">Get in Touch</a>
    </div>
</nav>
