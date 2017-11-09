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

    <title>Websites Styled for Stylists - Ubiweb</title>

    <link rel="stylesheet" href="assets/styles/ubiweb.css?v=1">
    <!-- Bootstrap  -->
    <link href="assets/styles/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <style>
      .container {
        max-width: none;
      }
    </style>
    <script src="assets/vendor/modernizr/modernizr.js"></script>
    <script src="assets/vendor/lazysizes/lazysizes.min.js" async></script>

<body class="interior <?php echo $page ?>">

<?php if( $page != "index" ): ?>
<header class="app-bar promote-layer">
  <div class="app-bar-container">
    <button class="menu"><img src="assets/images/hamburger.svg" alt="Menu"></button>
  </div>
</header>
<?php endif ?>

<nav id="navbar" class="navdrawer-container promote-layer">
  <a href="index.php<?php if($lang == "fr") echo '?lang=fr' ?>"><h1>Ubiweb</h1></a>
  <ul>
    <li<?php if($page == "contact") echo ' class="active"'; ?>><a href="#contact">Contact</a></li>
    <li><a href="http://ubiweb.ca/salonfr.php?lang=fr">FR</a></li>
  </ul>
</nav>
<main class="clearfix">
  <div style="margin:0px; padding: 100px 0px; background:url(assets/images/andresr38960.jpg) no-repeat fixed 0% 0% #000;">
        <h1 style="color:#fff; text-shadow: 2px 2px #333333; text-align:right; padding-right:50px;">Websites Styled for Stylists</h1>
        <h2 class="large" style="color:#fff; text-shadow: 2px 1px #333333; text-align:right; padding-right:50px;">Simple - Beautiful - Useful<br>
websites by Ubiweb</h2></div>
        <div class="container" style="margin-top:-60px;">
      <div class="g--third"><p class="theme--multi-device-layouts">
                <span class="icon-circle--large themed--background" style="padding:1.5em; font-size:2.5em;"><i class="icons icon-calendar" style="font-size:1em;"></i></span>
      <p>Simple, hassle free booking for your clients. Control your availabilities and get notified instantly.</p>
      </p>
      <p class="theme--introduction-to-media">
      <span class="icon-circle--large themed--background" style="padding:1.5em; font-size:2.5em;"><i class="icons icon-camera" style="font-size:1em;"></i></span>
      <p>No time to take pictures? No problem. Choose images that reflect your business from our wide range of options in our image library.</p>
      </p>
      </div>
      <div class="g--third"> 
      <h2 style="margin:1.85em 0px 20px 0px;">Contact Us Today</h2>
        <?php if( isset($_GET['result']) && $_GET['result'] != "success"): ?>
        <p><?php echo $_GET['result']; ?></p>
        <?php elseif( isset($_GET['result']) && $_GET['result'] == "success"): ?>
        <p><?php _e('Your message has been received. We will contact you shortly. :)') ?></p>
        <?php endif ?>
        <form class="form--vertical" method="post">
          <input id="name" type="text" name="name">
          <label for="name"><?php _e('Your Name') ?></label>
          <input id="email" type="email" name="email">
          <label for="email"><?php _e('Your Email') ?></label>
          <textarea id="message" name="message"><?php if(isset($_GET['message'])) echo $_GET['message']; ?></textarea>
          <label for="message"><?php _e('Your Message') ?></label>
          <button type="submit" class="button--primary button--block"><?php _e('Send Us a Message') ?></button>
        </form>
    
        </div>
        <div class="g--third g--last">
        <p class="theme--user-input">
        <span class="icon-circle--large themed--background" style="padding:1.5em; font-size:2.5em;"><i class="icons icon-social-facebook" style="font-size:1em;"></i></span>
    <p>Update your site by posting on social media. Your latest cuts will always be front and center.</p>
    </p>
    <p class="theme--performance">
    <span class="icon-circle--large themed--background" style="padding:1.5em; font-size:2.5em;"><i class="icons icon-cloud-upload" style="font-size:1em;"></i></span>
    <p>Ubiweb wants you to focus on what you are good at. Content changes to your site are free, just send us an email and the changes will be made for you.</p>
    </p>
    	</div>
      </div>

  <div class="clearfix"></div>
 <section class="styleguide__feature-spotlight">
        <div class="featured-spotlight">
          <div class="container-medium">
            <div class="featured-spotlight__container g--pull-half">
              <div class="featured-spotlight__img">
                <img src="assets/images/safari+mobile_1024_800.png" alt="wide image placeholder example" style="margin-top:20px;">
              </div>

              <div class="container-small">
                <h3 class="xxlarge">Sample Sites</h3>
                <blockquote><em>"Ubiweb allowed me to get a beuatiful website up and running right away without having to spend thousands of dollars right after opening my beauty salon. They update the site whenever I have changes and the online booking feature is a huge time saver. I couldn't be happier!"</em>
<div style="text-align:right;">- Stephanie</div></blockquote>
               <h3>Some client sites</h3>
               <p> <a href="http://www.coiffure-esthetique.ca/" class="cta--secondary"><i class="icons icon-link" style="font-size:1em;"></i> Coiffure Esthetique</a><br>
<a href="http://studio13coiffure.com/" class="cta--secondary"><i class="icons icon-link" style="font-size:1em;"></i> Studio 13 Coiffure</a></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
<!-- Pricing Table -->
  <!-- Pricing Table -->
  <div class="pricing-tables clearfix">
		<div class="container">
			<div class="row">
      <div class="planning-area">
					<div class="npt-format-3">
						<div class="col-sm-3 col-xs-12 npt-plan-includes">
							<div class="npt-item npt-item-1 text-left">
								<div class="npt-plan-top">
									<h3 class="npt-plan-name"></h3>
									<h3 class="npt-title" style="margin-top:45px; padding-top:31px;">Plan Includes</h3>
								</div><!-- /.plan-top -->
								<div class="npt-plan-details">
									<ul>
										<li>
											<p>Pages</p>
										</li>
										<li>
											<p>Updates/month</p>
										</li>
<!--										<li>
											<p>SEO</p>
										</li>
-->										<li>
											<p>Support</p>
										</li>
										<li>
											<p>Google Maps Setup</p>
										</li>
										<li>
											<p>Social Media Integration</p>
										</li>
										<li>
											<p>Bilingual Website</p>
										</li>
										<li>
											<p>Appointment Scheduling Integration</p>
										</li>
										<li>
											<p>Mobile/Device Adaptable</p>
										</li>
										<li>
											<p>Visibility report</p>
										</li>
										<li>
											<p>Domain Name</p>
										</li>
										<li>
											<p>Hosting</p>
										</li>
										<li>
											<p>Contact Form</p>
										</li>
										<li>
											<p>Optional Photo Shoot</p>
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
									<h3 class="npt-plan-name">One Language<br>
No Scheduling</h3>
									<div class="npt-plan-cost">
										<span class="npt-currency">$</span>
										<span class="npt-cost">65</span>
										<span class="npt-duration">Monthly</span>
									</div><!-- /.npt-plan-cost -->
								</div><!-- /.npt-plan-top -->
								<div class="npt-plan-details">
									<ul>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Pages</p> <span class="npt-ability-icon">3</span>
                    </li>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Updates/month</p> <span class="npt-ability-icon">1</span>
                    </li>
<!--                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">SEO</p> <span class="npt-ability-icon">Brand</span>
                    </li>
-->                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Support</p> <span class="npt-ability-icon">Email</span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Google Maps Setup</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>

                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Social Media Integration</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-not-ability">
                      <p class="npt-mobile-display">Bilingual Website</p> <span class="npt-ability-icon"><i class="icon-close icons"></i></span>
                    </li>
                    <li class="npt-has-not-ability">
                      <p class="npt-mobile-display">Appointment Scheduling Integration</p> <span class="npt-ability-icon"><i class="icon-close icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Mobile/Device Adaptable</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Visibility report</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Domain Name</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Hosting</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Contact Form</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
					<li class="npt-has-ability">
                      <p class="npt-mobile-display">Photo Shoot</p> <span class="npt-ability-icon">$350</span>
                    </li>									</ul>
								</div><!-- /.npt-plan-details -->
								<!-- <div class="npt-plan-bottom">
									<a class="btn npt-btn npt-pricing-btn" href="#">Select Plan</a>
								</div> -->
							</div><!-- /.npt-item -->
						</div>

						<div class="col-sm-3 col-xs-12">
							<div class="npt-item npt-item-3 text-center">
              <span class="npt-ribbon npt-ribbon-right">Hot!</span>
								<div class="npt-plan-top">
									<h3 class="npt-plan-name">One Language<br>
with Scheduling</h3>
									<div class="npt-plan-cost">
										<span class="npt-currency">$</span>
										<span class="npt-cost">105</span>
										<span class="npt-duration">Monthly</span>
									</div><!-- /.npt-plan-cost -->
								</div><!-- /.npt-plan-top -->
								<div class="npt-plan-details">
									<ul>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Pages</p> <span class="npt-ability-icon">up to 5</span>
                    </li>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Updates/month</p> <span class="npt-ability-icon">1</span>
                    </li>
<!--                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">SEO</p> <span class="npt-ability-icon">1 Local Topic</span>
                    </li>-->
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Support</p> <span class="npt-ability-icon">Email</span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Google Maps Setup</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Social Media Integration</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-not-ability">
                      <p class="npt-mobile-display">Bilingual Website</p> <span class="npt-ability-icon"><i class="icon-close icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Appointment Scheduling Integration</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Mobile/Device Adaptable</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Visibility report</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Domain Name</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Hosting</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Contact Form</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Photo Shoot</p> <span class="npt-ability-icon">$350</span>
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
									<h3 class="npt-plan-name">Bilingual<br>with Scheduling</h3>
									<div class="npt-plan-cost">
										<span class="npt-currency">$</span>
										<span class="npt-cost">139</span>
										<span class="npt-duration">Monthly</span>
									</div><!-- /.npt-plan-cost -->
								</div><!-- /.npt-plan-top -->
								<div class="npt-plan-details">
									<ul>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Pages</p> <span class="npt-ability-icon">up to 10</span>
                    </li>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Updates/month</p> <span class="npt-ability-icon">2</span>
                    </li>
<!--                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">SEO</p> <span class="npt-ability-icon">2 Local Topics</span>
                    </li>
-->                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Support</p> <span class="npt-ability-icon">Telephone & Email</span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Google Maps Setup</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Social Media Integration</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Bilingual Website</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Appointment Scheduling Integration</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Mobile/Device Adaptable</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Visibility report</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Domain Name</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Hosting</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Contact Form</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
					<li class="npt-has-ability">
                      <p class="npt-mobile-display">Photo Shoot</p> <span class="npt-ability-icon">$350</span>
                    </li>
									</ul>
								</div><!-- /.npt-plan-details -->
								<!-- <div class="npt-plan-bottom">
									<a class="btn npt-btn npt-pricing-btn" href="#">Select Plan</a>
								</div> -->
							</div><!-- /.npt-item -->
						</div>
					</div><!-- /.npt-format-3 -->
				</div>
		</div>
	</div>
</div>
<a name="contact"></a>
  </main>

<?php include "inc/footer.php"; ?>
