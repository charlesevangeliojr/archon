{{-- Footer --}}
<footer class="footer" id="footer" aria-label="Site Footer">
    <div class="footer-inner">
        <div class="footer-box">

        {{-- Left Column: Quick Contact --}}
        <div class="footer-contact-col">
            <h4 class="footer-col-title">Quick Contact</h4>
            <p class="footer-contact-intro">If you have any questions or need assistance, don't hesitate to reach out to our team.</p>

            <div class="footer-divider"></div>

            <p class="footer-contact-label">Where we located:</p>
            <a class="footer-contact-item" href="https://maps.google.com" target="_blank" rel="noopener">
                <img src="{{ asset('assets/icons/location.png') }}" alt="Location">
                <span>Door 14-18 Asiaprime Center, G. Del Pilar St. Corner Dacudao Avenue, Brgy. Agdao Proper, Agdao District, Davao City</span>
            </a>

            <div class="footer-divider"></div>

            <p class="footer-contact-label">Send us email:</p>
            <a class="footer-contact-item" href="mailto:archon.salesdivision@gmail.com">
                <img src="{{ asset('assets/icons/email.png') }}" alt="Email">
                <span>archon.salesdivision@gmail.com</span>
            </a>

            <div class="footer-divider"></div>

            <p class="footer-contact-label">Dial us today:</p>
            <a class="footer-contact-item" href="tel:+639171330643">
                <img src="{{ asset('assets/icons/call.png') }}" alt="Phone">
                <span>(63) 917 133 0643</span>
            </a>

            <p class="footer-social-label">Follow us on</p>
            <div class="footer-social" aria-label="Social media links">
                <a href="#" aria-label="Facebook"><img src="{{ asset('assets/icons/fb.png') }}" alt="Facebook"></a>
                <a href="#" aria-label="LinkedIn"><img src="{{ asset('assets/icons/LinkedIn.png') }}" alt="LinkedIn"></a>
                <a href="#" aria-label="TikTok"><img src="{{ asset('assets/icons/tiktok.png') }}" alt="TikTok"></a>
                <a href="#" aria-label="YouTube"><img src="{{ asset('assets/icons/yt.png') }}" alt="YouTube"></a>
            </div>
        </div>

        {{-- Middle Column: Quick Links --}}
        <div class="footer-links-col">
            <h4 class="footer-col-title">Quick Links</h4>
            <div class="footer-links-grid">
                <a href="#about">About us</a>
                <a href="#services">Services</a>
                <a href="#products">Products</a>
                <a href="#articles">News</a>
                <a href="#products">Brand New</a>
                <a href="#quote">Contact Us</a>
                <a href="#products">Parts</a>
            </div>
        </div>

        {{-- Right Column: Brand + Newsletter --}}
        <div class="footer-brand-col">
            <a href="/" aria-label="Archon Home" class="footer-brand-logo">
                <img src="{{ asset('assets/logo/footer-logo.png') }}" alt="Archon Special Machineries Inc.">
            </a>
            <h5 class="footer-brand-name">ARCHON SPECIAL MACHINERIES INC.</h5>
            <p class="footer-brand-desc">
                is the leading distributor of trucks & heavy equipment nationwide. We are a certified partner and dealer of SINOTRUK, the largest and number one manufacturer of trucks and heavy equipment in China.
            </p>
        </div>

        {{-- Newsletter --}}
        <div class="newsletter-wrap">
            <form class="newsletter-form" id="newsletterForm" action="#" method="POST" novalidate>
                @csrf
                <input type="email" name="newsletter_email" placeholder="Enter your email to receive curated content, including industry alerts, news, and insights..." aria-label="Newsletter email address" required>
                <button type="submit" id="newsletterSubmit">Subscribe</button>
            </form>
        </div>

        {{-- Footer Bottom --}}
        <div class="footer-bottom-box">
            <p>Copyright Archon Special Machineries Inc 2026, Designed and Developed by R Web Solutions</p>
            <div class="footer-bottom-links">
                <a href="#">Terms and Conditions</a>
                <span>|</span>
                <a href="#">Privacy Policy</a>
            </div>
        </div>

        </div>
    </div>
</footer>
