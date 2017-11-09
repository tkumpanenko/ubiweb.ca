<?php





  $page = basename(__FILE__, '.php');
  include "inc/start.php";

?><!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $page_description ?>">
    <meta property="og:title" content="<?php echo $page_title ?>">
    <meta property="og:description" content="<?php echo $page_description ?>">

    <title><?php _e('Contact Ubiweb') ?></title>

    <link rel="stylesheet" href="assets/styles/ubiweb.css?v=1">
    <!-- Bootstrap  -->
    <link href="assets/styles/css/simple-line-icons.css" rel="stylesheet">
    <style>
      .container {
        max-width: none;
      }
    </style>
    <script src="assets/vendor/modernizr/modernizr.js"></script>
    <script src="assets/vendor/lazysizes/lazysizes.min.js" async></script>

<body class="interior <?php echo $page ?>">

<?php include "inc/nav.php" ?>
<main class="clearfix">
  <h1 class="text-center"><?php _e('Contact Us Today') ?></h1>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.793107275196!2d-73.59473428444218!3d45.47397147910113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9109921d44241%3A0x9550a25e2d79423!2s642+Rue+de+Courcelle+%23405%2C+Montr%C3%A9al%2C+QC+H4C+3C7!5e0!3m2!1sen!2sca!4v1508940627172" height="450" frameborder="0" style="border:0;width:100%;" allowfullscreen></iframe>
      </div>
      <div class="col-sm-6">
        <div style="padding-left:50px;">
          <p>
          <span class="icon-map"></span> 642 Rue de Courcelle #405<br/>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Montréal, QC, H4C 3C7
        </p>
        <p>
          <span class="icon-microphone"></span> <a href="tel:438-700-0598">438-700-0598</a>
        </p>
        <p>

          <span class="icon-envelope"></span> <a href="mailto:info@ubiweb.ca">info@ubiweb.ca</a>
        </p>
      </div>
      </div>
    </div><!--.row-->
  </div><!--.container-->
</main>

<?php include "inc/footer.php"; ?>
