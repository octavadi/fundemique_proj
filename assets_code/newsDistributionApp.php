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
    } elseif ($rep['kategori']=='newsB1_2') {
      $namaB1_2=$rep['nama'];
      $judulB1_2=$rep['judul'];
      $leadB1_2=$rep['lead'];
      $fotoUtamaB1_2=$rep['fotoUtama'];
      $urlB1_2=$rep['url'];
    } elseif ($rep['kategori']=='newsB1_3') {
      $namaB1_3=$rep['nama'];
      $judulB1_3=$rep['judul'];
      $leadB1_3=$rep['lead'];
      $fotoUtamaB1_3=$rep['fotoUtama'];
      $urlB1_3=$rep['url'];
    } elseif ($rep['kategori']=='newsB2_1') {
      $namaB2_1=$rep['nama'];
      $judulB2_1=$rep['judul'];
      $leadB2_1=$rep['lead'];
      $fotoUtamaB2_1=$rep['fotoUtama'];
      $urlB2_1=$rep['url'];
    } elseif ($rep['kategori']=='newsB2_2') {
      $namaB2_2=$rep['nama'];
      $judulB2_2=$rep['judul'];
      $leadB2_2=$rep['lead'];
      $fotoUtamaB2_2=$rep['fotoUtama'];
      $urlB2_2=$rep['url'];
    } elseif ($rep['kategori']=='newsB2_3') {
      $namaB2_3=$rep['nama'];
      $judulB2_3=$rep['judul'];
      $leadB2_3=$rep['lead'];
      $fotoUtamaB2_3=$rep['fotoUtama'];
      $urlB2_3=$rep['url'];
    } elseif ($rep['kategori']=='newsB2_4') {
      $namaB2_4=$rep['nama'];
      $judulB2_4=$rep['judul'];
      $leadB2_4=$rep['lead'];
      $fotoUtamaB2_4=$rep['fotoUtama'];
      $urlB2_4=$rep['url'];
    }else {
      $nama_=$rep['nama'];
      $judul_="Judul Berita";
      $lead_="Lead berita : Some quick example text to build on the card title and make up the bulk of the card's content.";
      $fotoUtama_="image/newsDummy.jpg";
      $url_= "https://journalism.umn.ac.id/B/archive/Fany@student.umn.ac.id/index2.html";
    }
  }
  ?>
<!-- End of looping code -->