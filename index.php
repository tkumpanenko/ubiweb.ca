<?php
$page = basename(__FILE__, '.php');
include "inc/start.php" ?><!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php _e('page_desc') ?>">
    <meta property="og:title" content="<?php _e('page_title') ?>">
    <meta property="og:description" content="<?php _e('page_desc') ?>">
    <meta name="google-site-verification" content="K6MGCXTu8MUATawdtPXirAr2ngviC_a125byJfhYrWU" />
    <title><?php _e('page_title') ?></title>

    <link rel="stylesheet" href="assets/styles/ubiweb.css?v=1">

    <!--<script src="assets/vendor/modernizr/modernizr.js"></script>
    <script src="assets/vendor/lazysizes/lazysizes.min.js" async></script>-->

<body class="splash">

<header class="app-bar promote-layer">
  <video autoplay loop muted id="featureVideo" poster="assets/videos/background.jpg">
    <source src="assets/videos/background.mp4" type="video/mp4">
  </video>
  <div class="app-bar-container">
    <button class="menu"><img src="assets/images/hamburger.svg" alt="Menu"></button>
    <div class="tagline">
      <h2 class="xxlarge" id="siteTitle"><?php _e('Your Online Partner') ?></h2>
      <div class="typed-headline"><span id="headline" data-text='<?php echo json_encode(array(__('typed_1'),  __('typed_3'), __('typed_4'))) ?>'></span></div>
      <p class="medium" id="subHeadline"><span><?php _e('website') ?></span> / <span><?php _e('reports') ?></span> / <span><?php _e('personal care') ?>.</span></p>
    </div>
    <section class="app-bar-actions">
    <!-- Put App Bar Buttons Here -->
    <!-- e.g <button><i class="icon icon-star"></i></button> -->
    </section>
  </div>
</header>

<?php include "inc/nav.php" ?>

<main>

  <section class="section section--red section--what">
    <div class="section__wrap">
      <h1><?php _e('What is Ubiweb?') ?></h1>
      <p><?php _e('what_p1') ?>
      <p><?php _e('what_p2') ?>
    </div>
  </section>

  <section class="section section--features">
    <div class="section__wrap">
      <img src="assets/images/ubiweb-templates.png" alt="Ubiweb Templates">
      <h1><?php _e('Features' ) ?></h1>
      <h2><?php _e('features_h2' ) ?></h2>

      <table>
        <thead>
          <tr>
            <th><?php _e('Problems') ?></th>
            <th><?php _e('Ubiweb Members') ?></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-th="<?php _e('Problem') ?>"><q><?php _e('problem_1') ?></q></td>
            <td data-th="<?php _e('Member') ?>"><?php _e('member_1') ?></td>
          </tr>
          <tr>
            <td data-th="<?php _e('Problem') ?>"><q><?php _e('problem_2') ?></q></td>
            <td data-th="<?php _e('Member') ?>"><?php _e('member_2') ?></td>
          </tr>
<!--          <tr>
            <td data-th="<?php _e('Problem') ?>"><q><?php _e('problem_3') ?></q></td>
            <td data-th="<?php _e('Member') ?>"><?php _e('member_3') ?></td>
          </tr>-->
          <tr>
            <td data-th="<?php _e('Problem') ?>"><q><?php _e('problem_4') ?></q></td>
            <td data-th="<?php _e('Member') ?>"><?php _e('member_4') ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section class="section section--cyan section--costs">
    <div class="section__wrap">
      <h1><?php _e('Control Costs') ?></h1>
      <p class="large"><?php _e('costs_p1') ?></p>
      <p><?php _e('costs_p2') ?><br><strong><?php _e('costs_p2_strong') ?></strong></p>
    </div>
  </section>

  <section class="section section--benefits">
    <div class="section__wrap">
      <img src="assets/images/ubiweb-reporting.png" alt="Ubiweb Reporting">
      <h1><?php _e('Return Benefits') ?></h1>
      <h2 class="large"><?php _e('benefits_h2') ?></h2>
      <p><?php _e('benefits_p1') ?></p>
      <p><?php _e('benefits_p2') ?></p>
    </div>
  </section>

  <section class="section section--red section--support">
    <div class="section__wrap">
      <h1><?php _e('Support') ?></h1>
      <h2><?php _e('We know what we are doing.') ?></h2>
      <p><?php _e('support_p1') ?></p>
      <p><strong><?php _e('support_p2_l1') ?></strong><br> <?php _e('support_p2_l2') ?></p>
    </div>
  </section>

</main>
<?php include "inc/footer.php"; ?>
