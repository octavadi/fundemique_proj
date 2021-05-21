<?php include('assets_code/open_json.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('assets_code/head.php')?>
</head>
<body>

<?= include('assets_code/header.php');?>

<div class="container-md">
    <div class="row row-cols-1 row-cols-md-4 g-2">
<?php foreach ($mahasiswa as $rep): ?>
<?php if($rep['kategori']=='newsP1') : ?>
        <div class="col-md-4">
    <!-- news section 4 app -->
            <div class="card text-dark bg-light mb-1 h-100">
                <div class="card-header"><?=$rep['nama'];?></div>
                <img src="<?=$rep['fotoUtama'];?>" class="card-img-top" alt="Foto Cover Berita">
                <div class="card-body">
                    <h5 class="card-title"><?=$rep['judul'];?></h5>
                    <p class="card-text"><?=$rep['lead'];?></p>
                    <a href="<?=$rep['url'];?>" class="btn btn-primary">Berita lengkap</a>
                </div>
            </div>
        </div>
    

    
<?php endif; ?>
<?php endforeach; ?>

    </div>
</div>

  <?php include('assets_code/footer.php')?>
  </body>

</html>