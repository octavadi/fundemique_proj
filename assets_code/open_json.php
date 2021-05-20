<!-- Memanggil data dari json file -->
<?php
    $data = file_get_contents('data/mhs.json');
    $mahasiswa = json_decode($data, true);

    $mahasiswa = $mahasiswa["mahasiswa"];
?>
<!-- Akhir perintah memanggil data dari file json -->