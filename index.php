<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

  <!-- My css -->
  <link rel="stylesheet" href="css/custom.css" />
  <link rel="stylesheet" href="css/layout.css"/>
  <link rel="stylesheet" href="css/main.css" />

  <title>Fundemique</title>
</head>

<body>
  <h2 class="text-center text-danger">UNDER CONSTRUCTION</h2>

  <!-- Header area -->
  <?php
  include('assets_code/header.php')
  ?>
<!-- End of header area -->

  <!-- Main container -->
  <div class="container-md">
    <!-- 100% wide until medium breakpoint -->

   <!-- Section 1 area -->
    <?php
    include('assets_code/section1.php')
    ?>
    <!-- End of section 1 -->

    <!-- Section 2 area -->
    <?php
    include('assets_code/section2.php')
    ?>
    <!-- End of section 2 -->

    <!-- Section 3 area -->
    <?php
    include('assets_code/section3.php')
    ?>
    <!-- End of section 3 -->

    <!-- Section 4 area -->
    <?php
    include('assets_code/section4.php')
    ?>
    <!-- End of section 4 -->

  </div>
  <!-- End of Main Container -->

  <!-- Area footer -->
  <?php
    include('assets_code/footer.php')
    ?>
  <!-- End of footer -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
  <!-- End of Option 1 -->
</body>

</html>