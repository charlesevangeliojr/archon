{{-- Request a Quote Section --}}
<section class="quote-section" id="quote" aria-labelledby="quoteHeading">
    <div class="container">

        <div class="quote-inner-card">

            {{-- Left: Form --}}
            <div class="quote-form-side">
                <span class="quote-form-label">Let's Get Started</span>
                <h2 class="quote-form-title" id="quoteHeading">Request a Quote</h2>
                <p class="quote-form-sub">All quotations are free of charge. Fill up the form below, and we'll reach out to you.</p>

                @if(session('quote_success'))
                    <div class="flash-message flash-success" role="alert" style="margin-bottom:20px;">
                        ✓ Thank you! Your request has been received. We'll get back to you within 24 hours.
                    </div>
                @endif

                <form method="POST" action="{{ route('quote.submit') }}" id="quoteForm" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" id="full_name" name="full_name"
                                   placeholder="Jack Benedict" required
                                   value="{{ old('full_name') }}"
                                   aria-required="true">
                            @error('full_name')
                                <span style="color:#c00;font-size:11px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email"
                                   placeholder="juan@email.com" required
                                   value="{{ old('email') }}"
                                   aria-required="true">
                            @error('email')
                                <span style="color:#c00;font-size:11px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="product">Trucks</label>
                            <select id="product" name="product">
                                <option value="">— Select a truck model —</option>
                                <option value="howo-v7x"    {{ old('product') == 'howo-v7x'    ? 'selected' : '' }}>Howo V7-X Dump Truck</option>
                                <option value="howo-e7"     {{ old('product') == 'howo-e7'     ? 'selected' : '' }}>Howo E7 Dump Truck</option>
                                <option value="howo-tx"     {{ old('product') == 'howo-tx'     ? 'selected' : '' }}>Howo TX Dump Truck</option>
                                <option value="howo-a7-pm"  {{ old('product') == 'howo-a7-pm'  ? 'selected' : '' }}>Howo A7|T7 Prime Mover</option>
                                <option value="howo-7-pt"   {{ old('product') == 'howo-7-pt'   ? 'selected' : '' }}>Howo 7 Prime Truck</option>
                                <option value="howo-a7-dt"  {{ old('product') == 'howo-a7-dt'  ? 'selected' : '' }}>Howo A7|T7 Dump Truck</option>
                                <option value="other"       {{ old('product') == 'other'       ? 'selected' : '' }}>Other / Not Sure</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone"
                                   placeholder="+63 XXX XXX XXXX"
                                   value="{{ old('phone') }}">
                            @error('phone')
                                <span style="color:#c00;font-size:11px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Additional Details</label>
                        <textarea id="message" name="message"
                                  placeholder="Tell us about your requirements...">{{ old('message') }}</textarea>
                    </div>

                    <div class="form-checkbox">
                        <input type="checkbox" id="privacy" name="privacy" required aria-required="true">
                        <label for="privacy">
                            I accept the <a href="#">privacy and terms</a>.
                        </label>
                    </div>

                    <button type="submit" class="btn btn-red btn-arrow" id="submitQuoteBtn"
                            style="width:100%;justify-content:center;">
                        Submit Quote
                    </button>
                </form>
            </div>

            {{-- Right: Industry Solutions --}}
            <div class="quote-side-panel" id="industrySolutions">
                <div>
                    <h3>Industry<br>Solutions!</h3>
                    <p>
                        Our portfolio consists of multiple clients in various industries.
                        This alone is a testament to the reliability of our products and services.
                        Check out our comprehensive brochure by clicking the button below.
                    </p>
                    <p class="quote-side-subtext">
                        Don't find what you need? Then, you may request a special truck! We'll source it for you.
                    </p>
                    <div class="quote-side-tags">
                        <span>• Construction</span>
                        <span>• Mining</span>
                        <span>• Trucking</span>
                        <span>• Hauling</span>
                        <span>• Retail</span>
                    </div>
                </div>
                <a href="{{ asset('assets/images/download brochure.png') }}"
                   class="btn btn-brochure"
                   target="_blank"
                   rel="noopener"
                   id="downloadBrochureBtn">
                    Download Brochure →
                </a>
            </div>

        </div>
    </div>
</section>
