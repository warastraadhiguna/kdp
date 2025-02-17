    <section>
        
          <div class="cs-height-100"></div>
        <div class="cs-contact-map-and-form">
            <div class="container-fluid">
                <div class="row cs_center" data-src="assets/img/pattern-bg-for-light.png">

                    <div class="col-xl-7 col-lg-6 col-md-12">
                        <iframe src="{{ $company->google_map_embed }}" width="600" height="450" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-xl-5 col-lg-6 col-md-12">
                        @if (isset($status ) && $status)
                        <div class="cs-contact-form-wrap">
                            <div class="position-relative" data-aos="fade-up" data-aos-duration="500">
                                <h5 class="cs-heading">The message successfully send</h5>
                            </div>
                            <div class="cs-height-35"></div>
                        </div>
                        @else
                        <div class="cs-contact-form-wrap">
                            <div class="position-relative" data-aos="fade-up" data-aos-duration="500">
                                <h2 class="cs-heading">Send Us a Message <br />to Get in Touch</h2>
                                <span class="cs-text-style-h1 cs-animated-text">CONTACT US</span>
                            </div>

                            <div class="cs-height-35"></div>
                            <form action="{{ route('contact.store') }}" method="POST" autocomplete="off">
                                @csrf

                                <div class="input-col-two">
                                    <div class="input-group">
                                        <input type="text" name="first_name" placeholder="First Name*"
                                            value="{{ old('first_name') }}" required>
                                        @error('first_name')
                                        <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="input-group">
                                        <input type="text" name="last_name" placeholder="Last Name"
                                            value="{{ old('last_name') }}">
                                        @error('last_name')
                                        <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="input-col-two">
                                    <div class="input-group">
                                        <input type="tel" name="phone" placeholder="Phone*" value="{{ old('phone') }}"
                                            required>
                                        @error('phone')
                                        <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="input-group">
                                        <input type="email" name="email" placeholder="Email Address*"
                                            value="{{ old('email') }}" required>
                                        @error('email')
                                        <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="input-group">
                                    <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}"
                                        required>
                                    @error('subject')
                                    <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="input-group">
                                    <textarea id="message" name="message" rows="4" placeholder="Write your message..."
                                        required>{{ old('message') }}</textarea>
                                    @error('message')
                                    <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit"
                                    class="cs-primary-btn secondary-btn cs-color-white themecolor-bg cs-height-60 cs-width-220">
                                    <span>Send Message</span>
                                </button>
                            </form>
                        </div>
                        @endif
                    </div>
                    <div class="cs-height-35"></div>
                </div>
            </div>
        </div>
    </section>