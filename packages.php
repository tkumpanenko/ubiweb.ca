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

    <title><?php _e('Ubiweb Packages') ?></title>

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
<main>
  <div class="pricing-tables clearfix">
		<div class="container">
			<div class="row">

				<!-- Pricing Table Format-3 -->
				<div class="planning-area">
					<div class="npt-format-3">
						<div class="col-sm-3 col-xs-12 npt-plan-includes">
							<div class="npt-item npt-item-1 text-left">
								<div class="npt-plan-top">
									<h3 class="npt-plan-name"></h3>
									<h3 class="npt-title"><?php _e('Plan Includes') ?></h3>
								</div><!-- /.plan-top -->
								<div class="npt-plan-details">
									<ul>
										<li>
											<p><?php _e('Pages') ?></p>
										</li>
										<li>
											<p><?php _e('Updates/month') ?></p>
										</li>
<!--										<li>
											<p><?php _e('SEO') ?></p>
										</li>
-->										<li>
											<p><?php _e('Support') ?></p>
										</li>
										<li>
											<p><?php _e('Google+ Optimization') ?></p>
										</li>
										<li>
											<p><?php _e('Citation Building') ?></p>
										</li>
										<li>
											<p><?php _e('Social Media Setup') ?></p>
										</li>
										<li>
											<p><?php _e('Email Marketing') ?></p>
										</li>
										<li>
											<p><?php _e('Business Reviews') ?></p>
										</li>
										<li>
											<p><?php _e('ALL Mobile/Device Adaptable') ?></p>
										</li>
										<li>
											<p><?php _e('Visibility report') ?></p>
										</li>
										<li>
											<p><?php _e('Domain Name') ?></p>
										</li>
										<li>
											<p><?php _e('Hosting') ?></p>
										</li>
										<li>
											<p><?php _e('Contact Form') ?></p>
										</li>
									</ul>
								</div><!-- /.plan-details -->
								<!-- <div class="npt-plan-bottom">
								</div> -->
							</div><!-- /.item -->
						</div>

						<div class="col-sm-3 col-xs-12">
							<div class="npt-item npt-item-2 text-center">
								<div class="npt-plan-top">
									<h3 class="npt-plan-name"><?php _e('Bronze Plan') ?></h3>
									<div class="npt-plan-cost" style="height:77px;">
										<!--<span class="npt-currency">$</span>
										<span class="npt-cost">65</span>
										<span class="npt-duration"><?php _e('Monthly') ?></span>-->
									</div><!-- /.npt-plan-cost -->
								</div><!-- /.npt-plan-top -->
								<div class="npt-plan-details">
									<ul>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display"><?php _e('Pages') ?></p> <span class="npt-ability-icon">3</span>
                    </li>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display"><?php _e('Updates/month') ?></p> <span class="npt-ability-icon">1</span>
                    </li>
<!--                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display"><?php _e('SEO') ?></p> <span class="npt-ability-icon"><?php _e('Brand') ?></span>
                    </li>
-->                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display"><?php _e('Support') ?></p> <span class="npt-ability-icon"><?php _e('Email') ?></span>
                    </li>
                    <li class="npt-has-not-ability">
                      <p class="npt-mobile-display"><?php _e('Google+ Optimization') ?></p> <span class="npt-ability-icon"><i class="icon-close icons"></i></span>
                    </li>
                    <li class="npt-has-not-ability">
                      <p class="npt-mobile-display"><?php _e('Citation Building') ?></p> <span class="npt-ability-icon"><i class="icon-close icons"></i></span>
                    </li>
                    <li class="npt-has-not-ability">
                      <p class="npt-mobile-display"><?php _e('Social Media Setup') ?></p> <span class="npt-ability-icon"><i class="icon-close icons"></i></span>
                    </li>
                    <li class="npt-has-not-ability">
                      <p class="npt-mobile-display"><?php _e('Email Marketing') ?></p> <span class="npt-ability-icon"><i class="icon-close icons"></i></span>
                    </li>
                    <li class="npt-has-not-ability">
                      <p class="npt-mobile-display"><?php _e('Business Reviews') ?></p> <span class="npt-ability-icon"><i class="icon-close icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('ALL Mobile/Device Adaptable') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Visibility report') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Domain Name') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Hosting') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Contact Form') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
									</ul>
								</div><!-- /.npt-plan-details -->
								<!-- <div class="npt-plan-bottom">
									<a class="btn npt-btn npt-pricing-btn" href="#">Select Plan</a>
								</div> -->
							</div><!-- /.npt-item -->
						</div>

						<div class="col-sm-3 col-xs-12">
							<div class="npt-item npt-item-3 text-center">
              <span class="npt-ribbon npt-ribbon-right"><?php _e('Hot!') ?></span>
								<div class="npt-plan-top">
									<h3 class="npt-plan-name"><?php _e('Silver Plan') ?></h3>
									<div class="npt-plan-cost"  style="height:77px;">
										<!--<span class="npt-currency">$</span>
										<span class="npt-cost">125</span>
										<span class="npt-duration"><?php _e('Monthly') ?></span>-->
									</div><!-- /.npt-plan-cost -->
								</div><!-- /.npt-plan-top -->
								<div class="npt-plan-details">
									<ul>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display"><?php _e('Pages') ?></p> <span class="npt-ability-icon">6</span>
                    </li>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display"><?php _e('Updates/month') ?></p> <span class="npt-ability-icon">2</span>
                    </li>
<!--                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display"><?php _e('SEO') ?></p> <span class="npt-ability-icon">1 <?php _e('Local Topic') ?></span>
                    </li>-->
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display"><?php _e('Support') ?></p> <span class="npt-ability-icon"><?php _e('Email') ?></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Google+ Optimization') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Citation Building') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Social Media Setup') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-not-ability">
                      <p class="npt-mobile-display"><?php _e('Email Marketing') ?></p> <span class="npt-ability-icon"><i class="icon-close icons"></i></span>
                    </li>
                    <li class="npt-has-not-ability">
                      <p class="npt-mobile-display"><?php _e('Business Reviews') ?></p> <span class="npt-ability-icon"><i class="icon-close icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('ALL Mobile/Device Adaptable') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Visibility report') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Domain Name') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Hosting') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Contact Form') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
									</ul>
								</div><!-- /.plan-details -->
								<!-- <div class="npt-plan-bottom">
									<a class="btn npt-btn npt-pricing-btn" href="#">Select Plan</a>
								</div> -->
							</div>
						</div>

						<div class="col-sm-3 col-xs-12">
							<div class="npt-item npt-item-4 text-center">
								<div class="npt-plan-top">
									<h3 class="npt-plan-name"><?php _e('Gold Plan') ?></h3>
									<div class="npt-plan-cost"  style="height:77px;">
										<!--<span class="npt-currency">$</span>
										<span class="npt-cost">300</span>
										<span class="npt-duration"><?php _e('Monthly') ?></span>-->
									</div><!-- /.npt-plan-cost -->
								</div><!-- /.npt-plan-top -->
								<div class="npt-plan-details">
									<ul>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display"><?php _e('Pages') ?></p> <span class="npt-ability-icon">10</span>
                    </li>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display"><?php _e('Updates/month') ?></p> <span class="npt-ability-icon">4</span>
                    </li>
<!--                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display"><?php _e('SEO') ?></p> <span class="npt-ability-icon">2 <?php _e('Local Topics') ?></span>
                    </li>
-->                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display"><?php _e('Support') ?></p> <span class="npt-ability-icon"><?php _e('Telephone & Email') ?></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Google+ Optimization') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Citation Building') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Social Media Setup') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Email Marketing') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Business Reviews') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('ALL Mobile/Device Adaptable') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Visibility report') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Domain Name') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Hosting') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display"><?php _e('Contact Form') ?></p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
									</ul>
								</div><!-- /.npt-plan-details -->
								<!-- <div class="npt-plan-bottom">
									<a class="btn npt-btn npt-pricing-btn" href="#">Select Plan</a>
								</div> -->
							</div><!-- /.npt-item -->
						</div>
					</div><!-- /.npt-format-3 -->
				</div><!-- /.planning-area -->
				<!-- Pricing Table Format-3 -->


			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /#pricing-tables -->
</main>

<?php include "inc/footer.php"; ?>
