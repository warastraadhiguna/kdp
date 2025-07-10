<?php 
  $aoses = ['flip-left','fade-down-left','fade-down','fade-up-right','flip-down','zoom-in-down'];
  $randomNumber = rand(0, 5);
?>
<section class="projects-list">
  <div class="container lg-gutter-control">
      <div class="max-width-1120 m-auto">
          <h4>
              {{ $projectCategory->title }}
          </h4>
          <div class="cs-height-30"></div>                
          {!! $projectCategory->introduction !!}
          <div class="cs-height-40"></div>         

          <div class="cs-container-border"></div>
          <div class="cs-height-40"></div>
      </div>

      <!-- Menggunakan CSS Grid untuk proyek -->
      <div class="projects-grid">
          @foreach($projects as $project)
              <div class="project-item" data-aos="{{ $aoses[$randomNumber] }}" data-aos-duration="1000">
                  <div class="project-item-in">
                      <a href="#">
                          <img src="{{ asset('storage/' . $project->image) }}" alt="">
                      </a>
                  </div>
                  <div class="project-item-text">
                      <div class="tag-item">
                          <a href="#"><span>{{ $project->owner->name }}</span></a>
                      </div>
                      <a href="#" class="open-modal" 
                            data-name="{{ $project->name }}"
                            data-scope="{{ $project->scope }}"
                            data-location="{{ $project->location }}"
                            data-owner="{{ $project->owner? $project->owner->name : '' }}"                  
                            data-schedule="{{ $project->schedule }}"
                            {{-- data-image="{{ asset('storage/' . ($project->orderedProjectDetails->count() > 0? $project->orderedProjectDetails[0]->image : $project->image)) }}" --}}
                            data-images = "{{ $project->orderedProjectDetails->pluck('image')->map(fn($img) => asset('storage/' . $img))->toJson() }}"
                            >
                          <h5>{{ $project->name }}</h5>
                      </a>

                      <a href="#" class="open-modal" 
                          data-name="{{ $project->name }}"
                          data-scope="{{ $project->scope }}"
                          data-location="{{ $project->location }}"
                          data-owner="{{ $project->owner? $project->owner->name : '' }}"                  
                          data-schedule="{{ $project->schedule }}" data-images = "{{ $project->orderedProjectDetails->pluck('image')->map(fn($img) => asset('storage/' . $img))->toJson() }}"
                          class="cs-text_b_line">
                          <span>{{ $project->location }}</span>
                          <i class="flaticon-right-arrow"></i>
                      </a>
                  </div>
              </div>
          @endforeach
      </div>
  </div>
</section>

<!-- Custom Modal -->
<div id="customModal" class="modal-overlay">
  <div class="modal-box">
    <span class="close-btn">&times;</span>
    <div class="modal-content">
        <div class="modal-left">
            <h3 id="customModalTitle" class="modal-title"></h3>
            <table class="modal-table">
                <tr>
                    <td><strong>Scope:</strong></td>
                    <td id="customModalScope"></td>
                </tr>
                <tr>
                    <td><strong>Location:</strong></td>
                    <td id="customModalLocation"></td>
                </tr>
                <tr id='ownerRow'>
                    <td><strong>Owner:</strong></td>
                    <td id="customModalOwner"></td>
                </tr>         
                <tr>
                    <td><strong>Schedule:</strong></td>
                    <td id="customModalSchedule"></td>
                </tr>
            </table>
        </div>
        <div class="modal-right">
            <div id="carouselProjectImages" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" id="carouselProjectImagesInner">
                  <!-- Akan diisi via JS -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselProjectImages" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselProjectImages" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
    {{-- <button class="close-btn-modal">Close</button> --}}
  </div>
</div>


<script>
document.querySelectorAll(".open-modal").forEach(el => {
    el.addEventListener("click", function (event) {
        event.preventDefault();

        // Ambil data
        let name = this.getAttribute("data-name");
        let scope = this.getAttribute("data-scope");
        let location = this.getAttribute("data-location");
        let owner = this.getAttribute("data-owner");
        let schedule = this.getAttribute("data-schedule");
        let images = JSON.parse(this.getAttribute("data-images"));

        // Isi data text
        document.getElementById("customModalTitle").innerText = name;
        document.getElementById("customModalScope").innerText = scope;
        document.getElementById("customModalLocation").innerText = location;
        document.getElementById("customModalOwner").innerText = owner;
        document.getElementById("customModalSchedule").innerText = schedule;

        // Isi gambar carousel
        const inner = document.getElementById("carouselProjectImagesInner");
        inner.innerHTML = ''; // kosongkan

        images.forEach((src, index) => {
            const item = document.createElement("div");
            item.classList.add("carousel-item");
            if (index === 0) item.classList.add("active");
            item.innerHTML = `<img src="${src}" class="d-block w-100 modal-image" alt="Slide ${index}">`;
            inner.appendChild(item);
        });

        // Tampilkan modal
        document.getElementById("customModal").style.display = "flex";
    });
});


// Tutup modal saat tombol close diklik
document.querySelector(".close-btn").addEventListener("click", function() {
    document.getElementById("customModal").style.display = "none";
});
// document.querySelector(".close-btn-modal").addEventListener("click", function() {
//     document.getElementById("customModal").style.display = "none";
// });


</script>




  </section>