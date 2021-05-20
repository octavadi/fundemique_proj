<?php
   include('assets_code/open_json.php')
?>

<!-- <?= $mahasiswa[0]['kategori'];?> -->

<?php
foreach($mahasiswa as $rep){
   // echo '<li>'.$rep['nama']. ' NIM :'.$rep['nim'].'</li>';
   if ($rep['kategori']=='newsP1'){
      $namaP1=$rep['nama'];
      $judulP1=$rep['judul'];
      $leadP1=$rep['lead'];
      $urlP1=$rep['url'];
     // echo '<li>'.$rep['nama']. '<br>' .' NIM :'.$rep['nim']. '<br>' .' Lead :'.$rep['lead'].'</li>';
      
}
   }
?>



<div id="newsP1">
    <!-- news primary 1 -->
      <div class="card text-white bg-dark mb-3 h-100">
        <div class="card-header"><?=$namaP1;?></div>
        <img src="image/newsDummy.jpg" class="card-img-top" alt="Foto Cover Berita">
        <div class="card-body">
          <h5 class="card-title"><?=$judulP1 ;?></h5>
          <p class="card-text"><?=$leadP1;?></p>
          <a href="<?=$urlP1;?>" class="btn btn-primary">Berita lengkap</a>
        </div>
      </div>
    <!-- End of news primary 1 -->
  </div>