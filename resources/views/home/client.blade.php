    <div class="cs-heading-with-animation text-center max-width-800 m-auto d-flex">
      <h2 class="cs-heading">Our Clients</h2>
    </div>
    <div class="cs-height-50"></div>
    <div class="container client-wrap">
        <div class="swiper clients-slider">
          <div class="swiper-wrapper">
            @foreach($clients as $client)
            <div class="swiper-slide">
              <a class="client-item" href="#"><img src="{{ asset('storage/' . $client->image)}}" alt="{{ $client->name }}"></a>
            </div>
            @endforeach
          </div>         
          <div class="cs-height-50"></div>
          <div class="swiper-hint">
              <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
              Swipe
              <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
          </div>
        </div>
    </div>