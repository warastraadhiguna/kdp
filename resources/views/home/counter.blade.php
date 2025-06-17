  <section>
    <div class="cs-counter-wrap">
      <div class="theme-black-bg theme-dark">
        <div class="cs-height-100"></div>
        @if($company->show_counter_info === 'y')
        <div class="container">
          <div class="cs-couter-items">
            <div class="counter-item" data-aos="fade-top" data-aos-duration="400">
              <h6>{{ $company->title_counter1 }}</h6>
              <span id="count1" class="amin_auto_count cs-text-style-h2">{{ $company->total_counter1 }}</span><span class="cs-text-style-h2"></span>
              <p>{{ $company->note_counter1 }}</p>
            </div>
            <div class="counter-sep"></div>
            <div class="counter-item" data-aos="fade-top" data-aos-duration="600">
              <h6>{{ $company->title_counter2 }}</h6>
              <span id="count2" class="amin_auto_count cs-text-style-h2">{{ $company->total_counter2 }}</span><span class="cs-text-style-h2"></span>
              <p>{{ $company->note_counter2 }}</p>
            </div>
            <div class="counter-sep"></div>
            <div class="counter-item" data-aos="fade-top" data-aos-duration="800">
              <h6>{{ $company->title_counter2 }}</h6>
              <span id="count3" class="amin_auto_count cs-text-style-h2">{{ $company->total_counter3 }}</span><span class="cs-text-style-h2"></span>
              <p>{{ $company->note_counter3 }}</p>
            </div>
            {{-- <div class="counter-sep"></div>
            <div class="counter-item" data-aos="fade-top" data-aos-duration="1000">
              <h6>Awards Achievement</h6>
              <span id="count4" class="amin_auto_count cs-text-style-h2">50</span><span class="cs-text-style-h2"></span>
              <p>We believe construction is more than building structures.</p>
            </div> --}}
          </div>
        </div>
        @endif
        <div class="cs-height-100"></div>
      </div>
    </div>
  </section>