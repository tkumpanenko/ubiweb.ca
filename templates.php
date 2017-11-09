<?php


$page = basename(__FILE__, '.php');
include "inc/start.php" ?><!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $page_description ?>">
    <meta property="og:title" content="<?php echo $page_title ?>">
    <meta property="og:description" content="<?php echo $page_description ?>">

    <title><?php _e('Ubiweb Templates') ?></title>

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
  <div class="text-center">
    <h1><?php _e('Templates') ?></h1>
    <h2 class="large"><?php _e('templates_h2') ?></h2>
    <p><?php //_e('templates_p') ?></p>
    <p><?php _e('To view a sample of what we offer, please') ?> <a href="contact.php?message=<?php echo urlencode( __("Please contact me to show me some of your templates.")) ?>"><?php _e('make an appointment') ?></a> <?php _e('and we will gladly walk you through.') ?></p>
  </div>
</main>

<?php include "inc/footer.php"; ?>
