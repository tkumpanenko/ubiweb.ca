<?php require_once("app/init.php"); ?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ubiWeb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="shortcut icon" href="<?= asset('images/tab-logo.png') ?>">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= asset('styles/main.css') ?>">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body class="home">


<header class="site-header">
    <div class="mobile-menu-wrapper">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <div class="logo-wrapper">
                    <a href="/"> <img src="<?= asset('images/ubiweb-noText-white.png') ?>" alt="logo" class="logo"></a>
                    <a href="/"> <img src="<?= asset('images/logo.png') ?>" alt="logo" class="logo_sticky"></a>
                </div>
            </div>
            <div class="col-auto">
                <div class="mobile-menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="col-12">
                <div class="mobile-menu">
                    <ul class="menu">
                        <li><a href="#about">À propos</a></li>
                        <li><a href="#packages">Forfaits</a></li>
                        <li><a href="#addons">Ajouts</a></li>
                        <li><a href="#portfolio">Nos Réalisations</a></li>
                        <li><a href="#feedback">Témoignages</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#about">Contact</a></li>
                        <li><a href="index.php">EN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="desktop-menu-wrapper">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="logo-wrapper">
                        <a href="/"> <img src="<?= asset('images/ubiweb-noText-white.png') ?>" alt="logo" class="logo"></a>
                        <a href="/"> <img src="<?= asset('images/logo.png') ?>" alt="logo" class="logo_sticky"></a>
                    </div>
                </div>
                <div class="col-auto">
                    <ul class="menu">
                        <li><a href="#about">À propos</a></li>
                        <li><a href="#packages">Forfaits</a></li>
                        <li><a href="#addons">Ajouts</a></li>
                        <li><a href="#portfolio">Nos Réalisations</a></li>
                        <li><a href="#feedback">Témoignages</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#about" class="btn custom-btn red-btn menu-button">Contactez nous</a></li>
                        <a href="#about">438-700-0598</a>
                        <li class="ml-3"><a href="index.php">EN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Full screen banner with video -->
<div class="video-container">
    <video autoplay loop muted height="600">
        <source src="https://ubiweb.ca/assets/videos/background.mp4" type="video/mp4">
		    Your browser does not support the video tag.
	</video>
    <div class="overlay-desc">
        <div class="hero-banner-wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-text-block">
                                <h2 class="banner-subtitle">Nous sommes Ubiweb</h2>

                                <h1 class="banner-title">Votre Partenaire Numérique</h1>

                                <div class="row justify-content-center banner-description">
                                    <div class="col-md-5">
                                        <p>Notre spécialité? Vous créer un site web professionnel, sur mesure et à la hauteur de votre ambition!</p>
                                    </div>
                                </div>
                                <div class="banner-button-container">
                                    <a href="#packages" class="btn custom-btn red-btn">Commencer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-banner-triangles d-flex">
                <div class="left-triangle"></div>
                <div class="right-triangle"></div>
            </div>
        </div>
    </div>
</div>

<!-- Mobile banner with picture -->
<!-- style="background-image: url('https://ubiweb.ca/assets/videos/background.jpg');" -->
<div style="background: black;">
    <div class="hero-banner-wrapper mobile-banner">
        <img src="https://ubiweb.ca/assets/videos/background.jpg" alt=""/>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-text-block">
                            <h2 class="banner-subtitle">Nous sommes Ubiweb</h2>
    
                            <h1 class="banner-title">Votre partenaire numérique</h1>
    
                            <div class="row justify-content-center banner-description">
                                <div class="col-md-5">
                                    <p>Notre spécialité? Vous créer un site web professionnel, sur mesure et à la hauteur de votre ambition!</p>
                                </div>
                            </div>
                            <div class="banner-button-container">
                                <a href="#packages" class="btn custom-btn red-btn">Commencer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-banner-triangles d-flex">
            <div class="left-triangle"></div>
            <div class="right-triangle"></div>
        </div>
    </div>
</div>

<main>

    <!-------------------Specialize section------------------------------>

    <section class="specialize-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="simple-text-block">

                        <h2 class="section-title red-title">Création de Sites Web et Optimisation <br>de Votre Image en Ligne</h2>

                        <div class="simple-text">
                            <p>
                                Êtes-vous à la recherche d’une équipe ayant le pouvoir de rehausser votre positionnement d’entreprise avec une image et un positionnement à la hauteur de votre vision ? Nos pages web sont stylisées, fonctionnelles et vous offre le retour sur investissement dont votre entreprise a besoin.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="icon-texts-blocks">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="icon-text-block">
                            <div class="icon-container">
                            <?= file_get_contents(__DIR__ . '/dist/images/affordable-pricing.svg') ?>
                            </div>
                            <div class="description-block">
                                <h3 class="small-title dark-title">Un prix abordable</h3>
                                <p>
                                    Évitez de faire un gros paiement coûteux avec nos forfaits mensuels abordables
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="icon-text-block">
                            <div class="icon-container">
                                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                                <?= file_get_contents(__DIR__ . '/dist/images/customization.svg') ?>
                            </div>
                            <div class="description-block">
                                <h3 class="small-title dark-title">Personnalisation</h3>
                                <p>
                                    Nos différents programmes sont tous disponibles avec des ajouts personnalisés afin de répondre à vos besoins spécifiques.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="icon-text-block">
                            <div class="icon-container">
                                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                                <?= file_get_contents(__DIR__ . '/dist/images/getting-noticed.svg') ?>
                            </div>
                            <div class="description-block">
                                <h3 class="small-title dark-title">Soyez vu par votre clientèle</h3>
                                <p>
                                    Des designs épatant, réactifs, et une optimisation pour moteur de recherche
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="icon-text-block">
                            <div class="icon-container">
                                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                                <?= file_get_contents(__DIR__ . '/dist/images/excellent-support.svg') ?>
                            </div>
                            <div class="description-block">
                                <h3 class="small-title dark-title">Service client</h3>
                                <p>
                                    Obtenez la tranquillité d'esprit avec nos délais d'exécution rapides et un soutien inégalé
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---------------Packages section----------------------------->

    <section class="packages-section" id="packages"
             style="background-image:url(<?= asset('images/packages-bg-min.png') ?>);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="simple-text-block">
                        <h2 class="section-title white-title">Forfaits</h2>

                        <div class="simple-text white-text">
                            <p>
                                Tous nos programmes sont équipés d’éléments conçus pour alimenter la croissance ainsi que la performance de votre entreprise. Notre mandat est de vous sauver le maximum de temps afin que vous puissiez consacrer celui-ci là où il est vraiment utile. Vous êtes l’expert dans votre domaine, nous le sommes dans le nôtre. Laissez-nous le soin de vous bâtir une page web à la fois attrayante et facile d’utilisation. Votre succès est notre succès.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="packages-slider-container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="packages-card">
                            <h3 class="small-title dark-title underline-title">Bronze</h3>
                            <span class="card-price"><sup>$</sup>148</span>

                            <p class="card-period">par mois</p>
                            <ul class="card-list">
                                <li>8 Pages</li>
                                <li>Conceptions designs et graphiques</li>
                                <li>Adaptatif pour les téléphones intelligents</li>
                                <li>Hébergement</li>
                                <li>Nom de domaine</li>
                            </ul>
                            <div class="card-button-container">
                                <button class="btn custom-btn red-btn btn-contact">Commencer</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="packages-card">
                            <h3 class="small-title dark-title underline-title">Argent</h3>
                            <span class="card-price"><sup>$</sup>228</span>

                            <p class="card-period">par mois</p>
                            <ul class="card-list">
                                <li>8 Pages</li>
                                <li>1 phrase (mots-clés) optimisée pour les moteurs de recherche</li>
                                <li>Conceptions designs et graphiques</li>
                                <li>adaptatif pour les téléphones intelligents</li>
                                <li>Hébergement</li>
                                <li>nom de domaine</li>
                                <li>adresses courriels</li>
                            </ul>
                            <div class="card-button-container">
                                <button  class="btn custom-btn red-btn btn-contact">Commencer</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="packages-card">
                            <h3 class="small-title dark-title underline-title">Or</h3>
                            <span class="card-price"><sup>$</sup>358</span>

                            <p class="card-period">par mois</p>
                            <ul class="card-list">
                                <li>10 Pages</li>
                                <li>3 phrases (mots-clés) optimisées pour les moteurs de recherche</li>
                                <li>Conception designs et graphiques</li>
                                <li>adaptatif pour les téléphones intelligents</li>
                                <li>Hébergement</li>
                                <li>nom de domaine</li>
                                <li>adresses courriels</li>
                            </ul>
                            <div class="card-button-container">
                                <button class="btn custom-btn red-btn btn-contact">Commencer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-popup">
            <div class="close close-popup"><i class="fa fa-times"></i></div>
            <div class="red-bg">
                <div class="contact-form-wrapper">
                    <h3 class="small-title white-title">Contact</h3>

                    <p class="form-quote-text">Get your quote today by calling 438-700-0598 <br> or filling in the
                    <form id="recaptcha" action="https://contact.ubiweb.ca/mail-captcha" action="post">
                        <input type="hidden" name="autobody" value="true" />
                        <input type="hidden" name="to" value="<?php echo $admin_email;?>" />
	                    <input type="hidden" name="subject" value="Ubiweb Contact" />
                        <div class="form-field">
                            <input type="text" name="_name" id="name" required placeholder="Nom *">
                        </div>
                        <div class="form-field">
                            <input type="text" name="_company" id="email" required placeholder="Adresse E-mail * *">
                        </div>
                        <div class="form-field">
                            <input type="text" name="_phone" id="phone" required placeholder="Numéro de Téléphone *">
                        </div>
                        <div class="form-field">
                            <textarea name="_message" id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-button-container">
                            <button 
                                type="submit"
                                style="color: black;"
	                            class="g-recaptcha btn custom-btn white-btn"
                                data-sitekey= "<?php echo $site_key;?>"
                                data-callback="<?php echo $data_callback;?>">
	                            Envoyer
                            </button>
	                        <div data-form-response="success" class="alert alert-success" style="display:none; margin-top: 50px;">Votre message a bien été envoyé</div>
	                        <div data-form-response="error" class="alert alert-danger" style="display:none; margin-top: 50px;">Il y avait une erreur. S'il vous plaît contactez: <a href="mailto:<?php echo $admin_email;?>"><?php echo $admin_email;?></a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!------------------------Guarantee section------------------------------------>

    <section class="guarantee-section">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-guarantee-text">
                        <div class="row justify-content-lg-end">
                            <div class="col-xl-6">
                                <div class="guarantee-title-wrapper">
                                    <h2 class="guarantee-title">90 <br>jours</h2>

                                    <h3 class="guarantee-subtitle">garantie pour<br>vous trouver</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="promise-text-block">
                        <div class="row">
                            <div class="col-xl-6">
                                <h3 class="small-title dark-title">Notre promesse</h3>

                                <div class="promise-description">
                                    <p>
                                        L’objectif ultime avec un site web est d’être vu. Ceci vous paraît simple et ça l’est pour nous également. Votre but principal est d’être connecté avec les acheteurs potentiels au moment même où ceux-ci effectuent des recherches pour vos produits et/ou services. Quasiment tous les programmes offerts par Ubiweb sont équipés d’une garantie qui nous engage à vous faire apparaître sur la première page de Google à l’intérieur de vos premiers 90 jours de contrat. Si toutefois nous ne parvenons pas à respecter notre engagement nous vous remettrons votre argent.
                                    </p>
                                </div>
                                <div class="small-description">
                                    <p>
                                        * La garantie de 90 jours s'applique à certains forfaits de site web seulement (contactez votre représentant web Ubiweb pour plus de détails). La garantie 1re page fait référence au SERP de Google pour votre nom d'entreprise, et ce n'importe où sur la première page des résultats de recherche et/ou Google Maps.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------Add-ons section------------------------------>
    <section class="addons" id="addons">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="simple-text-block">
                        <div class="divider"></div>
                        <h2 class="section-title red-title">Options Ajouts Sur Mesure</h2>

                        <div class="simple-text text-center">
                            <p>
                                Nos différentes options pour sites web sont personnalisées et adaptées à l’image de votre entreprise. Différentes options s’offrent à vous telles que:
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <?= file_get_contents(__DIR__ . '/dist/images/new-biz.svg') ?>
                        </div>
                        <h3 class="small-title dark-title">La trousse entreprise départ qui comprend</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <?= file_get_contents(__DIR__ . '/dist/images/translation.svg') ?>
                        </div>
                        <h3 class="small-title dark-title">La traduction de votre site: Anglais & Français</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <?= file_get_contents(__DIR__ . '/dist/images/adwords.svg') ?>
                        </div>
                        <h3 class="small-title dark-title">Campagne Google Adwords (MMR)</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <?= file_get_contents(__DIR__ . '/dist/images/copywriting.svg') ?>
                        </div>
                        <h3 class="small-title dark-title">Création de contenu unique</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <?= file_get_contents(__DIR__ . '/dist/images/logo.svg') ?>
                        </div>
                        <h3 class="small-title dark-title">Rafraîchissement de votre image d’entreprise</h3>

                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <?= file_get_contents(__DIR__ . '/dist/images/emails.svg') ?>
                        </div>
                        <h3 class="small-title dark-title">Ajout d’adresses emails</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--------------------------Feedback section------------------------------------------>

    <section class="feedback-section" id="feedback"
             style="background-image:url(<?= asset('images/feedback-bg-min.png') ?>); ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="simple-text-block">
                        <h2 class="section-title white-title">Témoignages</h2>

                        <div class="simple-text text-center white-text">
                            <p>
                                Votre opinion compte! Voici ce que nos partenaires avaient à dire au sujet de Ubiweb.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="feedback-slider-wrapper">
                        <div class="JS--feedback-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="feedback-block">
                                        <div class="feedback-content red-bg">
                                            <div class="feedback-title-block">
                                                <h3 class="small-title">"Je n'hésiterais pas à recommander vos services"</h3>
                                            </div>
                                            <div class="feedback-description">
                                                <p>
                                                "Merci Patrick et Thomas pour votre aide  avec mon Site Web. Cela a fait en sorte que mon chiffre d’affaire a augmenté de façon significative! Je n'hésiterais pas à recommander vos services, et encore merci à toute l’équipe Ubiweb."
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-author-block">
                                            <span class="client-name">Réal Ladouceur - Propriétaire</span>
                                            <span class="company-name">Gestion Parasitaire 2 Rives</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-block">
                                        <div class="feedback-content white-bg">
                                            <div class="feedback-title-block">
                                                <h3 class="small-title">"We could not conduct our business without you! Many Thanks"</h3>
                                            </div>
                                            <div class="feedback-description">
                                                <p>
                                                "We would like to take a moment and thank you for the quality of service provided by your company. We sincerely appreciate your efficient efforts, customer service, the level of detail and accountability on building our website and improving our social media presence. I am specifically grateful that you guys have made the process simple. We could not conduct our business without you! Many Thanks"
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-author-block">
                                            <span class="client-name">Maria</span>
                                            <span class="company-name">The Stone Company Inc</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-block">
                                        <div class="feedback-content red-bg">
                                            <div class="feedback-title-block">
                                                <h3 class="small-title">"Let you guys know that you're very good at what you do"</h3>
                                            </div>
                                            <div class="feedback-description">
                                                <p>
                                                "Before going with your company we had already spent thousands of dollars with other companies to have 2 websites created. The end result was never what was originally promised. Our experience with Ubiweb over the past year has been completely different and I just wanted to reach out to you and let you guys know that you're very good at what you do, and we REALLY appreciate it! Thanks again!"
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-author-block">
                                            <span class="client-name">Alain - President</span>
                                            <span class="company-name">Hydraulique Rives Sud</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="JS--feedback-pagination swiper-pagination"></div>
                        </div>
                        <div class="JS--feedback-next swiper-button-next">
                        <?= file_get_contents(__DIR__ . '/dist/images/next-arrow.svg') ?>
                        </div>
                        <div class="JS--feedback-prev swiper-button-prev">
                        <?= file_get_contents(__DIR__ . '/dist/images/prev-arrow.svg') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-----------------------Portfolio section-------------------------------->

    <section class="portfolio-section" id="portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="simple-text-block">
                        <h2 class="section-title red-title">Nos Réalisations</h2>

                        <div class="simple-text text-center">
                            <p>
                                La satisfaction de nos clients est constamment au cœur de notre travail.<br>
                                C’est pour cette même raison que nous nous assurons que nos efforts sont maximisé à leurs pleins potentiel. Avoir un site web unique fera la différence sur votre retour sur investissement. Voici quelques exemples de clients satisfaits:
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-slider-wrapper">
                        <div class="JS--portfolio-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="portfolio-slide-block">
                                        <a href="https://mastroelectrique.ca/" target="_blank">
                                            <img src="<?= asset('images/mastroelectrique.jpg') ?>" alt="test">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-slide-block">
                                        <a href="https://bocadogrill.ca/" target="_blank">
                                            <img src="<?= asset('images/bocadogrill.jpg') ?>" alt="test">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-slide-block">
                                        <a href="https://mdr-comptables.ca/en">
                                            <img src="<?= asset('images/mdr-comptables.jpg') ?>" alt="test">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-slide-block">
                                        <a href="https://thestonecompanyinc.com/" target="_blank">
                                            <img src="<?= asset('images/thestonecompanyinc.jpg') ?>" alt="test">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-slide-block">
                                        <a href="https://patisserielasalle.ca/?lang=en" target="_blank">
                                            <img src="<?= asset('images/patisserielasalle.jpg') ?>" alt="test">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->

                            <div class="JS--portfolio-pagination swiper-pagination"></div>
                        </div>
                        <div class="JS--portfolio-next swiper-button-next">
                        <?= file_get_contents(__DIR__ . '/dist/images/next-arrow-sites.svg') ?>
                        </div>
                        <div class="JS--portfolio-prev swiper-button-prev">
                        <?= file_get_contents(__DIR__ . '/dist/images/prev-arrow-sites.svg') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!----------------------Questions section--------------------------------->
    <section class="questions-section" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="simple-text-block">
                        <h2 class="section-title dark-title">FAQ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="questions-accordion-wrapper">
                        <div id="question-accordion">
                            <div class="card questions-card">
                                <div class="question-header" id="heading-one">
                                    <button class="btn btn-link btn-custom-link faq-btn faq-btn--active" data-toggle="collapse"
                                            data-target="#JS--collapse-one" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <?= file_get_contents(__DIR__ . '/dist/images/faq-arrow.svg') ?>
                                        Pourquoi est-ce que je devrais investir dans la conception d’un site web?
                                    </button>
                                </div>

                                <div id="JS--collapse-one" class="collapse show" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        Les sites web sont, depuis quelques années, la façon la plus ‘’moderne’’ de faire de la publicité. Il s’agit du nouveau bouche -à-oreille. Leurs côtés pratiques et riches d’informations attirent de plus en plus les gens comme source crédible d’informations et de partages. Statistiquement parlant, 81% des clients potentiels, recherchent une entreprise en ligne avant de passer en mode action. Les compétiteurs redoutables, sont souvent ceux qui possède un site web fiable, de qualité, qui reflète leur côté professionnel, ce à quoi le client potentiel s’identifie. Sans site web, les clients qui vous recherchent peuvent même aller jusqu’à assumer que votre entreprise à fermer ses portes.
                                    </div>
                                </div>
                            </div>
                            <div class="card questions-card">
                                <div class="question-header" id="heading-two">
                                    <button class="btn btn-link btn-custom-link collapsed faq-btn" data-toggle="collapse"
                                            data-target="#JS--collapse-two" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            <?= file_get_contents(__DIR__ . '/dist/images/faq-arrow.svg') ?>
                                            Ai-je besoin d’un site web considérant que mon entreprise opère déjà à pleine capacité?
                                    </button>
                                </div>

                                <div id="JS--collapse-two" class="collapse" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        La fonction première de votre site web est de protéger votre bouche à oreille. Souvent, vos références ainsi que les clients existants occupent plus de 85% de votre temps en y ajoutant la nouvelle cliente et la rétention de celle-ci on arrive tout au plus à 99% de votre clientèle potentielle. Protéger vos chiffres s’avère crucial dans le monde compétitif que nous travaillons. De nos jours, les petites, moyennes entreprises sont constamment en compétition contre de grands joueurs et ressortir dans les résultats de recherches avec votre site web est nécessaire.
                                    </div>
                                </div>
                            </div>
                            <div class="card questions-card">
                                <div class="question-header" id="heading-three">
                                    <button class="btn btn-link btn-custom-link collapsed faq-btn" data-toggle="collapse"
                                            data-target="#JS--collapse-three" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            <?= file_get_contents(__DIR__ . '/dist/images/faq-arrow.svg') ?>
                                        Je possède déjà un site web. Pourquoi est-il important de moderniser celui-ci?
                                    </button>
                                </div>

                                <div id="JS--collapse-three" class="collapse" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        Avoir un vieux qui n'est pas à jour donne une mauvaise perception sur votre entreprise. On la jugera dépassée et sans intérêt. Votre site web reflète votre image.  Les gens associeront cette même image à vos produits, vos services et la qualité de votre implication. Avoir un site web désuet est pire que de ne pas en avoir du tout. Vous envoyez une image de laisser-aller, de manque de rigueur et un manque flagrant de considération pour l’expérience client.
                                    </div>
                                </div>
                            </div>
                            <div class="card questions-card">
                                <div class="question-header" id="heading-four">
                                    <button class="btn btn-link btn-custom-link collapsed faq-btn" data-toggle="collapse"
                                            data-target="#JS--collapse-four" aria-expanded="true"
                                            aria-controls="collapseFour">
                                            <?= file_get_contents(__DIR__ . '/dist/images/faq-arrow.svg') ?>
                                        Quels sont les avantages aux paiements mensuels vs le paiement unique?
                                    </button>
                                </div>

                                <div id="JS--collapse-four" class="collapse" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        À long terme, les forfaits mensuels sont presque toujours plus avantageux. De plus, nos services mettent votre entreprise à l'abri des imprévus. Par exemple, un site similaire à notre forfait bronze vous coûtera de 4000$ à 6000$ et ce, sans compter les frais d'hébergement et de domaine (500$ par année). Il est recommandé de rafraîchir votre site web aux 3-4 ans pour rester actuel. Après 3 ans, vous aurez déjà dépensé un minimum de 5500$ avec une autre entreprise et vous devrez dépenser encore plus pour tenir votre site à jour si Google effectue des changements importants à son algorithme (ce qui arrive habituellement aux 2 ans).

                                        Avec un forfait mensuel Ubiweb, le coût long terme s'équivaut. Vous avez la tranquillité d'esprit en sachant que vous n'aurez pas de surprises coûteuses avec votre site web et que vous pourrez garder vos liquidités là où elles comptent, dans votre entreprise!

                                        on parle de long-terme, les forfaits mensuels en résultent pratiquement toujours à être plus économique. De plus, la gamme de services offerts par Ubiweb 
                                    </div>
                                </div>
                            </div>
                            <div class="card questions-card">
                                <div class="question-header" id="heading-five">
                                    <button class="btn btn-link btn-custom-link collapsed faq-btn" data-toggle="collapse"
                                            data-target="#JS--collapse-five" aria-expanded="true"
                                            aria-controls="collapseFive">
                                            <?= file_get_contents(__DIR__ . '/dist/images/faq-arrow.svg') ?>
                                        Je paye déjà pour différents placements commandités sur différentes plates-forme, pourquoi est-ce que je devrais posséder mon propre site?
                                    </button>
                                </div>

                                <div id="JS--collapse-five" class="collapse" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        En possédant votre propre site web, vous êtes en plein contrôle de l’image que vous décidez de véhiculer. Les placements commandités sont souvent vus comme une solution temporaire avant la mise en place d’un système efficace. Ils sont utiles afin d’augmenter l’exposition d’une entreprise en ligne, toutefois très peu concluant quand vient le temps de protéger vos références et l’éducation du client quant à vos différentes offres de produits et/ou services. Dans un monde idéal, vous voulez propulsez votre contenu et avoir des fondations solides (site web) avant de débourser pour faire la promotion de votre entreprise. Une expérience client enrichie ferra la différence. 
                                    </div>
                                </div>
                            </div>
                            <div class="card questions-card">
                                <div class="question-header" id="heading-six">
                                    <button class="btn btn-link btn-custom-link collapsed faq-btn" data-toggle="collapse"
                                            data-target="#JS--collapse-six" aria-expanded="true"
                                            aria-controls="collapseSix">
                                            <?= file_get_contents(__DIR__ . '/dist/images/faq-arrow.svg') ?>
                                        Quels sont les frais supplémentaires auxquels je dois m’attendre de la part de Ubiweb?
                                    </button>
                                </div>

                                <div id="JS--collapse-six" class="collapse" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        Aucun frais caché ! Ubiweb est fière d’agir à titre de partenaire dans la concrétisation de vos différents besoins multimédias et ce, en toute transparence. Nos solutions n’ont aucun frais additionnel et la plupart de nos forfaits incluent ; l’hébergement, le nom de domaine, la garantie de la première page sur Google et les adresses courriels. Nos solutions ont été bâties afin de vous aider dans votre cheminement web, la propulsion de votre image, le tout sans les mauvaises surprises.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------Get start today------------------------------------>
    <section class="get-start-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title white-title">Contactez-nous maintenant pour une soumission personnalisée!</h2>
                </div>
                <div class="col-12">
                    <div class="buttons-wrapper d-flex justify-content-center">
                        <a href="tel:(438)700-0598" class="btn custom-btn">
                            (438) 700-0598
                        </a>
                        <a class="btn custom-btn btn-contact">
                            Envoyez-nous un email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--------------------------Contact section--------------------------------------->

    <section class="contact-us" id="about">

        <div class="row align-items-justify no-gutters">
            <div class="col-md-6 order-md-1 order-1 order-lg-1 col-lg-6">
                <div class="map-wrapper">
                    <div class="map-container">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 order-2 order-md-2 order-lg-2 align-self-center">
                <div class="about-us-text-wrapper">
                    <h3 class="small-title red-title">À propos de nous </h3>

                    <div class="about-us-text">
                        <p>
                            Depuis les dernière années, nous avons su bénéficier de l’expertise de Code Comment à titre de maison mère de Ubiweb. C’est à travers des années d’expérience que nous en sommes venus à la conclusion qu’il y a une énorme rareté pour les clients en termes de solutions web pour Entrepreneurs. Ubiweb s’est vu naître dans le but de combler ce besoin dans le marcher. 
                        </p>

                        <p>
                            Avec plus de 200 clients qui nous font confiance pour leurs solutions numériques et un taux de renouvellement de plus de 94%, nous avons récemment pris la décision d’agrandir nos ressources et nous comptons maintenant parmi nous 2 succursales (Montréal & Rive-Sud) afin d’être flexible pour nos clients.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>


<!-------------------------Footer------------------------------------>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="copyright-block">
                    Copyright &copy; <span>Ubiweb</span> 2018
                </div>
            </div>
            <div class="col-sm-6">
                <div class="footer-menu">
                    <ul>
                        <li><a href="javascript:void(0);">Politique de</a></li>
                        <li><a href="javascript:void(0);">Confidentialité</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?= asset('scripts/main.js') ?>"></script>
<script>
      function initMap() {
        var ubiweb = {lat: 45.474122, lng: -73.592063};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: ubiweb
        });
        var marker = new google.maps.Marker({
          position: ubiweb,
          map: map
        });
      }
    </script>
        <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnI-F4YeWDWUqRtiNZgIiffe9XRtvUQes&callback=initMap">
    </script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://contact.ubiweb.ca/js/submit.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-34323695-3', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
