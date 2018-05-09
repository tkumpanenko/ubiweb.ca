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
                        <li><a href="#about">About</a></li>
                        <li><a href="#packages">Packages</a></li>
                        <li><a href="#addons">Add-Ons</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#feedback">Testimonials</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#about">Contact</a></li>
                        <li><a href="/fr">FR</a></li>
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
                        <li><a href="#about">About</a></li>
                        <li><a href="#packages">Packages</a></li>
                        <li><a href="#addons">Add-Ons</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#feedback">Testimonials</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#about" class="btn custom-btn red-btn menu-button">Contact Us</a></li>
                        <a href="#about">438-700-0598</a>
                        <li class="ml-3"><a href="/fr">FR</a></li>
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
                                <h2 class="banner-subtitle">we are ubiweb</h2>

                                <h1 class="banner-title">Your Online Partner</h1>

                                <div class="row justify-content-center banner-description">
                                    <div class="col-md-5">
                                        <p>A Marketing firm specializing in website creation and getting your business noticed</p>
                                    </div>
                                </div>
                                <div class="banner-button-container">
                                    <a href="#packages" class="btn custom-btn red-btn">Get Started</a>
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
                            <h2 class="banner-subtitle">we are ubiweb</h2>

                            <h1 class="banner-title">Your Online Partner</h1>

                            <div class="row justify-content-center banner-description">
                                <div class="col-md-5">
                                    <p>A Marketing firm specializing in website creation and getting your business noticed</p>
                                </div>
                            </div>
                            <div class="banner-button-container">
                                <a href="#packages" class="btn custom-btn red-btn">Get Started</a>
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

                        <h2 class="section-title red-title">Website Creation & Standardizing <br>Your Online Image</h2>

                        <div class="simple-text">
                            <p>Our comprehensive services include professional small business web building and
                                everything encompassing your online vision and online marketing strategy. We ensure that
                                our experienced team will design you a functional, engaging webpage at a competitive
                                rate. Ubiweb's strategic methods are user-friendly and deliver the results that you need
                                as a small business.
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
                                <h3 class="small-title dark-title">Affordable Pricing</h3>
                                <p>
                                    Avoid breaking the bank with our affordable monthly payment plans
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
                                <h3 class="small-title dark-title">Customization</h3>

                                <p>
                                    Consultations and optional add-ons allow us to get the best results for your business
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
                                <h3 class="small-title dark-title">getting noticed</h3>

                                <p>
                                    Beautiful and responsive designs and local SEO optimization
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
                                <h3 class="small-title dark-title">Excellent support</h3>

                                <p>
                                    Get peace of mind with our quick turn around times and high-end support
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
             style="background-image:url(<?= asset('images/packages-bg-1.jpg') ?>);">
        <div class="packages-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="simple-text-block">
                            <h2 class="section-title white-title">Packages</h2>

                            <div class="simple-text white-text">
                                <p>As a Ubiweb member, you'll benefit from our affordable monthly payment plans, 1st-page
                                    guarantee for your name in search engine results and customizable add-ons catering to
                                    your specific needs. Our packages are each equipped with features that accelerate the
                                    growth and performance of your business.
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

                                <p class="card-period">per month</p>
                                <ul class="card-list">
                                    <li>8 Pages</li>
                                    <li>Web &amp; Graphic Design</li>
                                    <li>Mobile Responsive</li>
                                    <li>Hosting</li>
                                    <li>Domain Name</li>
                                </ul>
                                <div class="card-button-container">
                                    <button class="btn custom-btn red-btn btn-contact">Get Started</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="packages-card">
                                <h3 class="small-title dark-title underline-title">Silver</h3>
                                <span class="card-price"><sup>$</sup>228</span>

                                <p class="card-period">per month</p>
                                <ul class="card-list">
                                    <li>8 Pages</li>
                                    <li>1 Keyword Phrase</li>
                                    <li>Search Engine Optimization</li>
                                    <li>Web &amp; Graphic Design</li>
                                    <li>Mobile Responsive</li>
                                    <li>Domain Name</li>
                                    <li>Hosting</li>
                                    <li>Emails</li>
                                </ul>
                                <div class="card-button-container">
                                    <button  class="btn custom-btn red-btn btn-contact">Get Started</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="packages-card">
                                <h3 class="small-title dark-title underline-title">Gold</h3>
                                <span class="card-price"><sup>$</sup>358</span>

                                <p class="card-period">per month</p>
                                <ul class="card-list">
                                    <li>10 Pages</li>
                                    <li>3 Keyword Phrase</li>
                                    <li>Search Engine Optimization</li>
                                    <li>Web &amp; Graphic Design</li>
                                    <li>Mobile Responsive</li>
                                    <li>Domain Name</li>
                                    <li>Hosting</li>
                                    <li>Emails</li>
                                </ul>
                                <div class="card-button-container">
                                    <button class="btn custom-btn red-btn btn-contact">Get Started</button>
                                </div>
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
                            <input type="text" name="_name" id="name" required placeholder="Name *">
                        </div>
                        <div class="form-field">
                            <input type="text" name="_company" id="email" required placeholder="E-mail *">
                        </div>
                        <div class="form-field">
                            <input type="text" name="_phone" id="phone" required placeholder="Phone Number *">
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
	                            Send
                            </button>
	                        <div data-form-response="success" class="alert alert-success" style="display:none; margin-top: 50px;">Your message was sent successfully</div>
	                        <div data-form-response="error" class="alert alert-danger" style="display:none; margin-top: 50px;">There was an error trying to send the form. Please contact: <a   href="mailto:<?php echo $admin_email;?>"><?php echo $admin_email;?></a></div>
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
                                    <h2 class="guarantee-title">90 <br>day</h2>

                                    <h3 class="guarantee-subtitle">guarantee to <br> find your name</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="promise-text-block">
                        <div class="row">
                            <div class="col-xl-6">
                                <h3 class="small-title dark-title">our promise</h3>

                                <div class="promise-description">
                                    <p>
                                        All Ubiweb packages guarantee that you'll find your website on Google's
                                        first search page within 90 days of its creation or your money back.
                                        This successfully results in higher traffic on your website,
                                        connecting your business with consumers online.
                                    </p>
                                </div>
                                <div class="small-description">
                                    <p>
                                        * Ubiweb's 90 day guarantee is only applicable to certain website packages (consult your Ubiweb Web consultant for more details). The 1st page guarantee refers to Google's SERP for your company name, appearing anywhere within the 1st page and/or map results.
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
                        <h2 class="section-title red-title">Add-ons</h2>

                        <div class="simple-text text-center">
                            <p>
                                Our versatile add-ons are designed to customize our websites to your business's unique needs. Options like the New-Biz Starter Pack, Bilingual Sites, Google Adwords, Logo Refresh, Translation, Copywriting, Emails and Content Creation focus on generating qualified leads for your business.
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
                        <h3 class="small-title dark-title">NEW-BIZ STARTER PACK</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <?= file_get_contents(__DIR__ . '/dist/images/translation.svg') ?>
                        </div>
                        <h3 class="small-title dark-title">Translation &amp; Bilingual Site</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <?= file_get_contents(__DIR__ . '/dist/images/adwords.svg') ?>
                        </div>
                        <h3 class="small-title dark-title">GOOGLE ADWORDS</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <?= file_get_contents(__DIR__ . '/dist/images/copywriting.svg') ?>
                        </div>
                        <h3 class="small-title dark-title">Copywriting &amp; Content Creation</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <?= file_get_contents(__DIR__ . '/dist/images/logo.svg') ?>
                        </div>
                        <h3 class="small-title dark-title">Logo Refresh</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <?= file_get_contents(__DIR__ . '/dist/images/emails.svg') ?>
                        </div>
                        <h3 class="small-title dark-title">Emails</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--------------------------Feedback section------------------------------------------>

    <section class="feedback-section" id="feedback"
             style="background-image:url(<?= asset('images/hero.jpg') ?>); ">
        <div class="feedback-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="simple-text-block">
                            <h2 class="section-title white-title">Our feedback has been outstanding</h2>

                            <div class="simple-text text-center white-text">
                                <p>
                                    Here are just a few responses from our receptive associates:
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
        </div>
    </section>


    <!-----------------------Portfolio section-------------------------------->

    <section class="portfolio-section" id="portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="simple-text-block">
                        <h2 class="section-title red-title">Portfolio</h2>

                        <div class="simple-text text-center">
                            <p>Distinction is essential to standing out online.<br>
                                Here are examples of websites from our happy customers:
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
                        <h2 class="section-title dark-title">Frequently Asked Questions</h2>
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
                                        Why do I need a website?
                                    </button>
                                </div>

                                <div id="JS--collapse-one" class="collapse show" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        We live in a world where people heavily use Google,
                                        Facebook and other social media platforms to stay connected.
                                        81% of customers research businesses online before they decide who to do
                                        business with.
                                        94% of B2B customers do their research online beforehand too.
                                        Not having a personalized website to exemplify the quality
                                        of your business means losing potential clients in 2018.
                                        Your business will lose opportunities when people who have
                                        heard of you or did business with you years ago seek you out
                                        and come up empty-handed. This situation could lead to them assuming
                                        that the business has closed down, likely leaving them to be solicited
                                        for their business by your more appealing competitors with websites.
                                    </div>
                                </div>
                            </div>
                            <div class="card questions-card">
                                <div class="question-header" id="heading-two">
                                    <button class="btn btn-link btn-custom-link collapsed faq-btn" data-toggle="collapse"
                                            data-target="#JS--collapse-two" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            <?= file_get_contents(__DIR__ . '/dist/images/faq-arrow.svg') ?>
                                        All of my business is word of mouth, and I am already very busy. Do I need a
                                        website?
                                    </button>
                                </div>

                                <div id="JS--collapse-two" class="collapse" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        The essential function of a website is to protect your word of mouth. Referrals and previous customers are accountable for 85% or more of clientele for 99% of businesses. Protecting those numbers is crucial. For example, would you show up to a site with no lettering on your vehicles, or carry no business cards with you? Having no website in 2018 is the equivalent of that.
                                    </div>
                                </div>
                            </div>
                            <div class="card questions-card">
                                <div class="question-header" id="heading-three">
                                    <button class="btn btn-link btn-custom-link collapsed faq-btn" data-toggle="collapse"
                                            data-target="#JS--collapse-three" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            <?= file_get_contents(__DIR__ . '/dist/images/faq-arrow.svg') ?>
                                        Why should I redo my website?
                                    </button>
                                </div>

                                <div id="JS--collapse-three" class="collapse" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        Your website is a reflection of your business, having a dated or lousy website is worse than not having a website at all. It can make your business look unprofessional and obsolete. Your website represents your business and the quality of your product, or service, online.
                                    </div>
                                </div>
                            </div>
                            <div class="card questions-card">
                                <div class="question-header" id="heading-four">
                                    <button class="btn btn-link btn-custom-link collapsed faq-btn" data-toggle="collapse"
                                            data-target="#JS--collapse-four" aria-expanded="true"
                                            aria-controls="collapseFour">
                                            <?= file_get_contents(__DIR__ . '/dist/images/faq-arrow.svg') ?>
                                        Why should I subscribe to a monthly plan if I can just pay for my website all at
                                        once and never pay again?
                                    </button>
                                </div>

                                <div id="JS--collapse-four" class="collapse" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        In a long-term analysis, monthly packages are almost always cheaper.  In addition, Ubiweb’s services give your business insurance against imponderables. For example, a similar site compared to our bronze package will range in price from $4000-$6000, not including yearly hosting or domain fees ($500/yr). Most websites must be revamped after 3-4 years to stay relevant. After three years with other agencies, on the low end of the spectrum, you'll have spent around $5500. In addition, if a major change to Google's algorithm occurs (every 2 years on average), you'd need to spend more on updates to your site. With a Ubiweb monthly package, you can rest assured that in most cases the long-term costs are equivalent, with the bonus insurance that extra changes are covered, your costs are fixed, and you can keep cash in your company instead of paying unexpected fees to maintain your site
                                    </div>
                                </div>
                            </div>
                            <div class="card questions-card">
                                <div class="question-header" id="heading-five">
                                    <button class="btn btn-link btn-custom-link collapsed faq-btn" data-toggle="collapse"
                                            data-target="#JS--collapse-five" aria-expanded="true"
                                            aria-controls="collapseFive">
                                            <?= file_get_contents(__DIR__ . '/dist/images/faq-arrow.svg') ?>
                                        Why should I get a website if I am already paying for sponsored placements on
                                        other sites?
                                    </button>
                                </div>

                                <div id="JS--collapse-five" class="collapse" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        While a decent sponsored placement on a decent site can be a worthwhile investment when done properly, they are insufficient at representing your brand and protecting your references. With your own website, you are in control of your company's image.
                                    </div>
                                </div>
                            </div>
                            <div class="card questions-card">
                                <div class="question-header" id="heading-six">
                                    <button class="btn btn-link btn-custom-link collapsed faq-btn" data-toggle="collapse"
                                            data-target="#JS--collapse-six" aria-expanded="true"
                                            aria-controls="collapseSix">
                                            <?= file_get_contents(__DIR__ . '/dist/images/faq-arrow.svg') ?>
                                        What other fees can I expect from a Ubiweb package?
                                    </button>
                                </div>

                                <div id="JS--collapse-six" class="collapse" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        All Ubiweb packages come complete. There are absolutely no additional fees. All packages include hosting, domain names, etc.
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
                    <h2 class="section-title white-title">Get Started Today</h2>
                </div>
                <div class="col-12">
                    <div class="buttons-wrapper d-flex justify-content-center">
                        <a href="tel:(438)700-0598" class="btn custom-btn">
                            (438) 700-0598
                        </a>
                        <a class="btn custom-btn btn-contact">
                            E-MAIL US
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
                    <h3 class="small-title red-title">About us</h3>

                    <div class="about-us-text">
                        <p>
                            Ubiweb operates under the parent company "Code Comment" since 2015.
                            Code Comment recognized a scarcity of custom web solutions for small business owners.
                            Code Comment conceived Ubiweb to meet these business demands. With an archive of over
                            200
                            customers who trust our skilled workmanship, we boast a 94% renewal rate with our
                            clients.
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
                        <li><a href="javascript:void(0);">Privacy</a></li>
                        <li><a href="javascript:void(0);">Policy</a></li>
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
