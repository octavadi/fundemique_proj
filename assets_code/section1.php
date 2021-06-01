<!-- Section 1 : newsPrimary -->
<section id="newsPrimary">

  <div id="opening">
    <h1>Introduction section - covid 19</h1>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quas
      beatae perspiciatis magnam ratione libero quaerat ipsa rerum nisi dolorem.
    </p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quas
      beatae perspiciatis magnam ratione libero quaerat ipsa rerum nisi dolorem.
    </p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quas
      beatae perspiciatis magnam ratione libero quaerat ipsa rerum nisi dolorem.
    </p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quas
      beatae perspiciatis magnam ratione libero quaerat ipsa rerum nisi dolorem.
    </p>
        
  </div>

  <!-- Looping if else untuk memeriksa seluruh array dalam file json -->
  <?php
  include_once('assets_code/newsDistributionApp.php')
  ?>
  <!-- End of looping code -->

  <div id="newsP1">
    <!-- news primary 1 -->
      <div class="card text-white bg-dark mb-3 h-100">
        <div class="card-header"><?=$namaP1;?></div>
        <img src="<?=$fotoUtamaP1;?>" class="card-img-top" alt="Foto Cover">
        <div class="card-body">
          <h5 class="card-title"><?=$judulP1;?></h5>
          <p class="card-text"><?=$leadP1;?></p>
          <a href="content_page.php?url=<?=$urlP1; ?>" class="btn btn-primary">Berita lengkap</a>
        </div>
      </div>
    <!-- End of news primary 1 -->
  </div>
 

  <div id="newsP2">
    <!-- news primary 2 -->
    <div class="card text-white bg-dark mb-3 h-100">
        <div class="card-header"><?=$namaP2;?></div>
        <img src="<?=$fotoUtamaP2;?>" class="card-img-top" alt="Foto Cover">
        <div class="card-body">
          <h5 class="card-title"><?=$judulP2 ;?></h5>
          <p class="card-text"><?=$leadP2;?></p>
          <a href="content_page.php?url=<?=$urlP2; ?>" class="btn btn-primary">Berita lengkap</a>
        </div>
      </div>
    <!-- End of news primary 2 -->
  </div>
  <div id="newsP3">
    <!-- news primary 3 -->
    <div class="card text-white bg-dark mb-3 h-100">
        <div class="card-header"><?=$namaP3;?></div>
        <img src="<?=$fotoUtamaP3;?>" class="card-img-top" alt="Foto Cover">
        <div class="card-body">
          <h5 class="card-title"><?=$judulP3 ;?></h5>
          <p class="card-text"><?=$leadP3;?></p>
          <a href="content_page.php?url=<?=$urlP3; ?>" class="btn btn-primary">Berita lengkap</a>
        </div>
      </div>
    <!-- End of news primary 3 -->
  </div>
  
  <div id="newsP4">
    <!-- news primary 4 -->
    <div class="card text-white bg-dark mb-3 h-100">
        <div class="card-header"><?=$namaP4;?></div>
        <img src="<?=$fotoUtamaP4;?>" class="card-img-top" alt="Foto Cover">
        <div class="card-body">
          <h5 class="card-title"><?=$judulP4 ;?></h5>
          <p class="card-text"><?=$leadP4;?></p>
          <a href="content_page.php?url=<?=$urlP4; ?>" class="btn btn-primary">Berita lengkap</a>
        </div>
      </div>
    <!-- End of news primary 4 -->
  </div>
  <div id="newsP5">
    <!-- news primary 5 -->
    <div class="card text-white bg-dark mb-3 h-100">
        <div class="card-header"><?=$namaP5;?></div>
        <img src="<?=$fotoUtamaP5;?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?=$judulP5 ;?></h5>
          <p class="card-text"><?=$leadP5;?></p>
          <a href="content_page.php?url=<?=$urlP5; ?>" class="btn btn-primary">Berita lengkap</a>
        </div>
      </div>
    <!-- End of news primary 5 -->
  </div>

</section>
<!-- End of newsPrimary -->
