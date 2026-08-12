{{-- Hero / Banner Section --}}
<section class="hero" id="home" aria-label="Hero Banner">
    {{-- Full background image --}}
    <div class="hero-bg-image" aria-hidden="true"></div>

    <div class="hero-inner">
        {{-- Left Column --}}
        <div class="hero-content">
            <h1 class="hero-title">
                YOUR <span class="line-red">RELIABLE</span><br>
                HEAVY DUTY TRUCK<br>
                <span class="line-gold">PROVIDER</span>
            </h1>

            {{-- Slider navigation arrows - outside image, on the left --}}
            <div class="hero-slider-nav" aria-label="Slide controls">
                <button class="hero-nav-arrow" id="sliderNext" aria-label="Next slide">→</button>
                <button class="hero-nav-arrow hero-nav-arrow--back" id="sliderPrev" aria-label="Previous slide">←</button>
            </div>

            <p class="hero-desc">
                Archon is the premier distributor of China's renowned brands, specializing in HOWO trucks and heavy equipment.
            </p>

            <div class="hero-watch" id="watchVideoBtn" role="button" tabindex="0" aria-label="Watch Video">
                <span class="hero-watch-icon">
                    <img src="{{ asset('assets/icons/Play.png') }}" alt="Play">
                </span>
                Watch Video
            </div>
        </div>

        {{-- Right Column --}}
        <div class="hero-right">
            {{-- Top: description + CTA --}}
            <div class="hero-right-top">
                <p>Archon is the top distributor of China's famous brands - HOWO trucks heavy equipment</p>
                <a href="#quote" class="btn btn-red btn-arrow" id="heroRequestBtn">Request Quote</a>
            </div>

            {{-- Bottom: Truck image (the big rounded card) --}}
            <div class="hero-slider" id="heroSlider" aria-label="Truck Image Slider">
                <div class="hero-slide active" role="img" aria-label="Howo Cargo/Service Truck">
                    <img src="{{ asset('assets/images/img-banner.png') }}" alt="Howo Heavy Duty Truck" loading="eager">
                </div>
                <div class="hero-slide" role="img" aria-label="Howo Dump Truck">
                    <img src="{{ asset('assets/images/truck1.png') }}" alt="Howo Dump Truck" loading="lazy">
                </div>
                <div class="hero-slide" role="img" aria-label="Howo Prime Mover">
                    <img src="{{ asset('assets/images/truck2.png') }}" alt="Howo Prime Mover" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>
