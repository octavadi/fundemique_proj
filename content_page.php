<?php
// Cek apakah ada data di $_GET 
if(!isset($_GET["url"])) {
  // redirect
  header("Location: empty_page.php");
  exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Head code  -->
  <?php
  include('assets_code/head.php')
  ?>
  <!-- End of head code -->
  </head>

  <body>

  <!-- header and nav -->
  <?php
    include('assets_code/header.php')
    ?>
  <!-- end of header and nav -->

  
  <!-- Embed content -->
   
    <iframe src="<?=$_GET["url"]; ?>" frameborder="0" height="100%" width="100%"></iframe>
  <!-- end of embed content  -->
  
  <!-- footer area -->
  <?php
    include('assets_code/footer.php')
  ?>
  <!-- End of footer area -->


  <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <!-- End of option 1 -->
    
  </body>
</html>