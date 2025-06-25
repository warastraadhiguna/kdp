<div id="startModal" class="start-modal">
    <div class="modal-box">
      <!-- tombol close jika nanti mau ditambahkan lagi -->
      {{-- <span class="close-btn">&times;</span> --}}
      <div class="profile-btn-container">
        <a href="#" class="profile-btn">Profile</a>
      </div>
      <!-- tambahkan gambar di sini -->
      <div class="modal-content">
        <img
          src="{{  asset('storage/' . $company->modal_image) }}"
          alt="{{ $company->name }}"
          class="modal-image-full"
        >
        <!-- konten lain… -->
      </div>
    </div>
  </div>
  
  

<script>
    window.addEventListener('load', () => {
      const modal    = document.getElementById('startModal');
      const closer   = modal.querySelector('.profile-btn');
  
      // buka modal dengan force inline style
      modal.style.display = 'flex';        // atau 'block' tergantung layout overlay-mu
      modal.style.justifyContent = 'center';
      modal.style.alignItems = 'center';
  
    //   pasang event untuk tutup
      closer.addEventListener('click', () => {
        modal.style.display = 'none';
      });
    });
</script>

  