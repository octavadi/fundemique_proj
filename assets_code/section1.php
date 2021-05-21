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
  foreach($mahasiswa as $rep){
      if ($rep['kategori']=='newsP1') {
      $namaP1=$rep['nama'];
      $judulP1=$rep['judul'];
      $leadP1=$rep['lead'];
      $fotoUtamaP1=$rep['fotoUtama'];
      $urlP1=$rep['url'];   
    } elseif ($rep['kategori']=='newsP2') {
      $namaP2=$rep['nama'];
      $judulP2=$rep['judul'];
      $leadP2=$rep['lead'];
      $fotoUtamaP2=$rep['fotoUtama'];
      $urlP2=$rep['url'];  
    } elseif ($rep['kategori']=='newsP3') {
      $namaP3=$rep['nama'];
      $judulP3=$rep['judul'];
      $leadP3=$rep['lead'];
      $fotoUtamaP3=$rep['fotoUtama'];
      $urlP3=$rep['url']; 
    } elseif ($rep['kategori']=='newsP4') {
      $namaP4=$rep['nama'];
      $judulP4=$rep['judul'];
      $leadP4=$rep['lead'];
      $fotoUtamaP4=$rep['fotoUtama'];
      $urlP4=$rep['url'];
    } elseif ($rep['kategori']=='newsP5') {
      $namaP5=$rep['nama'];
      $judulP5=$rep['judul'];
      $leadP5=$rep['lead'];
      $fotoUtamaP5=$rep['fotoUtama'];
      $urlP5=$rep['url'];
    } elseif ($rep['kategori']=='newsB1_1') {
      $namaB1_1=$rep['nama'];
      $judulB1_1=$rep['judul'];
      $leadB1_1=$rep['lead'];
      $fotoUtamaB1_1=$rep['fotoUtama'];
      $urlB1_1=$rep['url'];
    } else {
      $nama_=$rep['nama'];
      $judul_="Judul Berita";
      $lead_="Lead berita : Some quick example text to build on the card title and make up the bulk of the card's content.";
      $fotoUtama_="image/newsDummy.jpg";
      $url_= "https://journalism.umn.ac.id/B/archive/Fany@student.umn.ac.id/index2.html";
    }
  }
  ?>
<!-- End of looping code -->

  <div id="newsP1">
    <!-- news primary 1 -->
      <div class="card text-white bg-dark mb-3 h-100">
        <div class="card-header"><?=$namaP1;?></div>
        <img src="<?=$fotoUtamaP1;?>" class="card-img-top" alt="Foto Cover">
        <div class="card-body">
          <h5 class="card-title"><?=$judulP1 ;?></h5>
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
