<?php
$data = file_get_contents('../data/mhs.json');
$mahasiswa = json_decode($data, true);

$mahasiswa = $mahasiswa["mahasiswa"];
echo $mahasiswa [0] ["nama"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include('head.php')
    ?>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h1>The Reporters</h1>
            </div>
        </div>

        <div class="row">
        <?php foreach ($mahasiswa as $row): ?>
            <div class="col-md-3">
                <!-- profil card  -->
                <div class="card mb-3 h-100">
                    <img src="../image/profil/profileEmpty.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$row["nama"]; ?></h5>
                        <h6 class="card-title"><?=$row["nim"]; ?></h6>
                        <p class="card-text"><?=$row["deskripsi"]; ?></p>
                    </div>
                    <div class="card-footer">
                        <small><a href="#" class="link-primary">link ke laman berita</a></small>
                    </div>
                </div>
            </div>
        <?php endforeach ?>    
        </div>


    </div>

    <!-- Script JS Bootstrap 5 -->
    <?php 
    include('script.php')
    ?>
    <!-- End of script js bootstrap 5 -->
</body>
</html>