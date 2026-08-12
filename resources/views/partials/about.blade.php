{{-- About Section --}}
<section class="about" id="about" aria-labelledby="aboutHeading">

    <div class="about-container" style="position:relative;z-index:1;">

        <div class="about-box">

        <div class="about-story-map" aria-hidden="true"></div>

        {{-- Label --}}
        <span class="about-label">About Us</span>

        {{-- Section Heading --}}
        <h2 class="about-header" id="aboutHeading">
            <span class="line">Archon is the leading provider of Sinotruk</span>
            <span class="line">Machineries heavy equipment in the Philippines.</span>
        </h2>

        {{-- 4 Feature Cards --}}
        <div class="features-grid">

            <div class="feature-card reveal" id="featureFreeDelivery">
                <span class="feature-number">01</span>
                <div class="feature-icon">
                    <img src="{{ asset('assets/icons/free delivery.png') }}" alt="Free Delivery Icon">
                </div>
                <h3 class="feature-title">Free Delivery</h3>
                <p class="feature-desc">
                    Getting hold of your new truck is no hassle because we deliver them to you at your doorstep!
                </p>
            </div>

            <div class="feature-card reveal" id="featureOnSite">
                <span class="feature-number">02</span>
                <div class="feature-icon">
                    <img src="{{ asset('assets/icons/on-site repair.png') }}" alt="On-site Repair Icon">
                </div>
                <h3 class="feature-title">On-site Repair</h3>
                <p class="feature-desc">
                    Have troubles with your truck? Don't worry! We'll be there wherever your site may be.
                </p>
            </div>

            <div class="feature-card reveal" id="featureWarranty">
                <span class="feature-number">03</span>
                <div class="feature-icon">
                    <img src="{{ asset('assets/icons/one year warranty.png') }}" alt="One Year Warranty Icon">
                </div>
                <h3 class="feature-title">One Year Warranty</h3>
                <p class="feature-desc">
                    We prioritize your peace of mind. Rest assured that all your units have a one-year warranty.
                </p>
            </div>

            <div class="about-story-wrap">
                <div class="feature-card reveal" id="feature24hrs">
                    <span class="feature-number">04</span>
                    <div class="feature-icon">
                        <img src="{{ asset('assets/icons/24 hours.png') }}" alt="24-Hour Service Icon">
                    </div>
                    <h3 class="feature-title">24-Hour Service</h3>
                    <p class="feature-desc">
                        We have you covered, whether at 2pm or 2am! Call our sales associates and service advisors for any concerns you have, and we'll respond!
                    </p>
                </div>

                {{-- Company Story --}}
                <div class="about-story">
                    <div class="about-story-text reveal">
                        <p>
                            Since 2014, Archon has set its eyes on continuous growth. What started as a young entrant in the industry with only three (3) surplus units on hand has now become a top player with over 1,000 employees nationwide.
                        </p>
                        <p>
                            We have partnered with China's leading brands, created multiple service stations nationwide, and established Gateway – the reliable parts provider, making us a one-stop shop for all our clients.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        </div>

    </div>
</section>
