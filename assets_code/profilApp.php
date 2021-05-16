<!-- Memanggil data dari json file -->
<?php
$data = file_get_contents('data/mhs.json');
$mahasiswa = json_decode($data, true);

$mahasiswa = $mahasiswa["mahasiswa"];

?>
<!-- Akhir perintah memanggi data dari file json -->

<!-- Card profil reporter  -->
    <div class="container-md">
        

        <div class="row row-cols-1 row-cols-md-4 g-2">
        <?php foreach ($mahasiswa as $row): ?>
            <div class="col-md-3">
                <!-- profil card  -->
                <div class="card mb-3 h-100">
                    <img src="<?=$row["fotoDiri"]; ?>" class="card-img-top img-fluid img-thumbnail" alt="foto profil belum tersedia">
                    <div class="card-body">
                        <h5 class="card-title"><?=$row["nama"]; ?></h5>
                        <h6 class="card-title">NIM: <?=$row["nim"]; ?></h6>
                        <p class="card-text"><?=$row["deskripsi"]; ?></p>
                    </div>
                    <div class="card-footer">
                        <small><a href="<?=$row["url"]; ?>" class="link-primary">link ke laman berita</a></small>
                    </div>
                </div>
            </div>
        <?php endforeach ?>    
        </div>


    </div>
<!-- Akhir card profil reporter -->