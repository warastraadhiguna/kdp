  <section>
    <div class="team-wrap">
      <div class="container">
        <div class="cs-heading-with-animation max-width-700">
          <h2 class="cs-heading">Our Team</h2>
          <span class="cs-text-style-h1 cs-animated-text">TEAM</span>
          <div class="cs-height-50"></div>
        </div>
        <div class="row">
          @foreach($teamMembers as $teamMember)
          <div class="team-member">
            <div class="member-img">
              <a href="{{ url("team-member/" . $teamMember->slug )}}">
                <img class="animated-img" src="{{ asset('storage/' . $teamMember->image)}}" alt="">
              </a>
            </div>
            <div class="member-in">
              <div class="content">
                <a href="{{ url("team-member/" . $teamMember->slug )}}">
                  <h6>{{ $teamMember->name }}</h6>
                </a>
                <p>{{ $teamMember->position }}</p>
              </div>
              <div class="theme-social">
                <ul>
                  @if( $teamMember->linkedin)
                  <li>
                    <a href="{{ $teamMember->linkedin }}" target="_blank">
                      <i class="flaticon-linkedin-big-logo"></i>
                    </a>
                  </li>                    
                  @endif
                  @if($teamMember->instagram)
                  <li>
                    <a href="{{ $teamMember->instagram }}" target="_blank">
                      <i class="flaticon-instagram"></i>
                    </a>
                  </li>                    
                  @endif

                </ul>
              </div>
            </div>
          </div>            
          @endforeach


        </div>
      </div>
    </div>
  </section>