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

    <title>Sites Web stylés pour stylistes - Ubiweb</title>

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
  <a href="index.php<?php if($lang == "en") echo '?lang=fr' ?>"><h1>Ubiweb</h1></a>
  <ul>
    <li<?php if($page == "contact") echo ' class="active"'; ?>><a href="#contact">Contact</a></li>
    <li><a href="http://ubiweb.ca/salon.php">EN</a></li>
  </ul>
</nav>
<main class="clearfix">
  <div style="margin:0px; padding: 100px 0px; background:url(assets/images/andresr38960.jpg) no-repeat fixed 0% 0% #000;">
        <h1 style="color:#fff; text-shadow: 2px 2px #333333; text-align:right; padding-right:50px;">Sites Web stylés pour stylistes</h1>
        <h2 class="large" style="color:#fff; text-shadow: 2px 1px #333333; text-align:right; padding-right:50px;">Simple - Élégant - Utile<br>
sites Web par Ubiweb</h2></div>
        <div class="container" style="margin-top:-60px;">
      <div class="g--third"><p class="theme--multi-device-layouts">
                <span class="icon-circle--large themed--background" style="padding:1.5em; font-size:2.5em;"><i class="icons icon-calendar" style="font-size:1em;"></i></span>
      <p>Permets à tes clients de réserver leur prochain rendez-vous directement sur votre site.</p>
      </p>
      <p class="theme--introduction-to-media">
      <span class="icon-circle--large themed--background" style="padding:1.5em; font-size:2.5em;"><i class="icons icon-camera" style="font-size:1em;"></i></span>
      <p>Pas de photo? Pas de problème! Choisissez des photos de notre banque d’image.</p>
      </p>
      </div>
      <div class="g--third"> 
      <h2 style="margin:1.85em 0px 20px 0px;">Contactez-nous aujourd'hui</h2>
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
    <p>Mettez à jour votre site en utilisant vos réseaux sociaux. Vos créations les plus récentes seront toujours soulignées.</p>
    </p>
    <p class="theme--performance">
    <span class="icon-circle--large themed--background" style="padding:1.5em; font-size:2.5em;"><i class="icons icon-cloud-upload" style="font-size:1em;"></i></span>
    <p>Le concept d’ubiweb est de permettre à vous de focaliser sur votre business. Si vous avez des changements ou des questions, nous sommes disponibles pour vous, sans frais additionnels!</p>
    </p>
    	</div>
      </div>

  <div class="clearfix"></div>
 <section class="styleguide__feature-spotlight">
        <div class="featured-spotlight">
          <div class="container-medium">
            <div class="featured-spotlight__container g--pull-half">
              <div class="featured-spotlight__img">
                <img src="assets/images/safari+mobile_1024_800.png" alt="wide image placeholder example">
              </div>

              <div class="container-small">
                <h3 class="xxlarge">Sample Sites</h3>
                <blockquote><em>&laquo; Ubiweb m'a permis d'obtenir un site Web beuatiful fonctionnant tout de suite sans avoir à dépenser des milliers de dollars juste après l'ouverture de mon salon de beauté. Ils mettent à jour le site chaque fois que j'ai des changements et la fonction de réservation en ligne est un économiseur de temps énorme. Je ne pourrais pas être plus heureux! &raquo;</em>
<div style="text-align:right;">- Stéphanie</div></blockquote>
               <h3>Des exemples de sites de nos clients</h3>
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
									<h3 class="npt-title" style="margin-top:45px; padding-top:31px;">Le forfait inclut</h3>
								</div><!-- /.plan-top -->
								<div class="npt-plan-details">
									<ul>
										<li>
											<p>Pages</p>
										</li>
										<li>
											<p>Mises à jour/mois</p>
										</li>
<!--										<li>
											<p>SEO</p>
										</li>
-->										<li>
											<p>Soutien technique</p>
										</li>
										<li>
											<p>Configuration de Google Maps</p>
										</li>
										<li>
											<p>l'intégration des médias sociaux​</p>
										</li>
										<li>
											<p>Site Web bilingue</p>
										</li>
										<li>
											<p>Réservation de rendez-vous</p>
										</li>
										<li>
											<p>Adapté pour mobile</p>
										</li>
										<li>
											<p>Rapport de visibilité</p>
										</li>
										<li>
											<p>Nom de domaine</p>
										</li>
										<li>
											<p>Hébergement</p>
										</li>
										<li>
											<p>Formulaire de contact</p>
										</li>
										<li>
											<p>Séance photo optionelle</p>
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
									<h3 class="npt-plan-name">Une Langue<br>
Sans RÉSERVATION</h3>
									<div class="npt-plan-cost">
										<span class="npt-currency">$</span>
										<span class="npt-cost">65</span>
										<span class="npt-duration">par mois</span>
									</div><!-- /.npt-plan-cost -->
								</div><!-- /.npt-plan-top -->
								<div class="npt-plan-details">
									<ul>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Pages</p> <span class="npt-ability-icon">3</span>
                    </li>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Mises à jour/mois</p> <span class="npt-ability-icon">1</span>
                    </li>
<!--                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">SEO</p> <span class="npt-ability-icon">Brand</span>
                    </li>
-->                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Soutien technique</p> <span class="npt-ability-icon">Email</span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Configuration de Google Maps</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>

                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">l'intégration des médias sociaux​</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-not-ability">
                      <p class="npt-mobile-display">Site Web bilingue</p> <span class="npt-ability-icon"><i class="icon-close icons"></i></span>
                    </li>
                    <li class="npt-has-not-ability">
                      <p class="npt-mobile-display">Réservation de rendez-vous</p> <span class="npt-ability-icon"><i class="icon-close icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Adapté pour mobile</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Rapport de visibilité</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Nom de domaine</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Hébergement</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Formulaire de contact</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
					<li class="npt-has-ability">
                      <p class="npt-mobile-display">Séance photo</p> <span class="npt-ability-icon">$350</span>
                    </li>									</ul>
								</div><!-- /.npt-plan-details -->
								<!-- <div class="npt-plan-bottom">
									<a class="btn npt-btn npt-pricing-btn" href="#">Select Plan</a>
								</div> -->
							</div><!-- /.npt-item -->
						</div>

						<div class="col-sm-3 col-xs-12">
							<div class="npt-item npt-item-3 text-center">
              <span class="npt-ribbon npt-ribbon-right">Populaire</span>
								<div class="npt-plan-top">
									<h3 class="npt-plan-name">Une langue<br>
avec réservation</h3>
									<div class="npt-plan-cost">
										<span class="npt-currency">$</span>
										<span class="npt-cost">105</span>
										<span class="npt-duration">par mois</span>
									</div><!-- /.npt-plan-cost -->
								</div><!-- /.npt-plan-top -->
								<div class="npt-plan-details">
									<ul>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Pages</p> <span class="npt-ability-icon">jusqu'à 5</span>
                    </li>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Mises à jour/mois</p> <span class="npt-ability-icon">1</span>
                    </li>
<!--                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">SEO</p> <span class="npt-ability-icon">1 Local Topic</span>
                    </li>-->
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Soutien technique</p> <span class="npt-ability-icon">Email</span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Configuration de Google Maps</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">l'intégration des médias sociaux​</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-not-ability">
                      <p class="npt-mobile-display">Site Web bilingue</p> <span class="npt-ability-icon"><i class="icon-close icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Réservation de rendez-vous</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Adapté pour mobile</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Rapport de visibilité</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Nom de domaine</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Hébergement</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Formulaire de contact</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Séance de photo</p> <span class="npt-ability-icon">$350</span>
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
									<h3 class="npt-plan-name">Bilingue<br>avec réservation</h3>
									<div class="npt-plan-cost">
										<span class="npt-currency">$</span>
										<span class="npt-cost">139</span>
										<span class="npt-duration">par mois</span>
									</div><!-- /.npt-plan-cost -->
								</div><!-- /.npt-plan-top -->
								<div class="npt-plan-details">
									<ul>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Pages</p> <span class="npt-ability-icon">jusqu'à 10</span>
                    </li>
                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Mises à jour/mois</p> <span class="npt-ability-icon">2</span>
                    </li>
<!--                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">SEO</p> <span class="npt-ability-icon">2 Local Topics</span>
                    </li>
-->                    <li class="npt-has-text-ability">
                      <p class="npt-mobile-display">Soutien technique</p> <span class="npt-ability-icon">Téléphone & Courriel</span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Configuration de Google Maps</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">l'intégration des médias sociaux​</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Site Web bilingue</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Réservation de rendez-vous</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Adapté pour mobile</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Rapport de visibilité</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Nom de domaine</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Hébergement</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
                    <li class="npt-has-ability">
                      <p class="npt-mobile-display">Formulaire de contact</p> <span class="npt-ability-icon"><i class="icon-check icons"></i></span>
                    </li>
					<li class="npt-has-ability">
                      <p class="npt-mobile-display">Séance de photo</p> <span class="npt-ability-icon">$350</span>
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
