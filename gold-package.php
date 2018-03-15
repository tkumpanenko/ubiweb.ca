<?php require_once("app/init.php"); ?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Barebones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="<?= asset('styles/main.css') ?>">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body class="simple-page">


<header class="site-header">
    <div class="mobile-menu-wrapper">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <div class="logo-wrapper">
                    <a href="/"> <img src="<?= asset('images/logo.png') ?>" alt="logo" class="logo"></a>
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
                        <li><a href="index.php/#about">About</a></li>
                        <li><a href="index.php/#packages">Packages</a></li>
                        <li><a href="index.php/#addons">Add-Ons</a></li>
                        <li><a href="index.php/#portfolio">Portfolio</a></li>
                        <li><a href="index.php/#feedback">Testimonials</a></li>
                        <li><a href="index.php/#faq">FAQ</a></li>
                        <li><a href="index.php/#about">Contact</a></li>
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
                        <a href="/"> <img src="<?= asset('images/logo.png') ?>" alt="logo" class="logo"></a>
                    </div>
                </div>
                <div class="col-auto">
                    <ul class="menu">
                        <li><a href="index.php/#about">About</a></li>
                        <li><a href="index.php/#packages">Packages</a></li>
                        <li><a href="index.php/#addons">Add-Ons</a></li>
                        <li><a href="index.php/#portfolio">Portfolio</a></li>
                        <li><a href="index.php/#feedback">Testimonials</a></li>
                        <li><a href="index.php/#faq">FAQ</a></li>
                        <li><a href="index.php/#about" class="btn custom-btn red-btn menu-button">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>


<main>
    <!----------------------------Describe simple packages section---------------------------------->

    <section class="describe-package-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 order-1">
                    <h2 class="package-title red-title">Gold Package</h2>

                    <h3 class="package-price dark-title">
                        $358/Month
                    </h3>

                    <div class="package-price-description">
                        <p>
                            On a 12-month renewable term. Plan includes:
                        </p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 align-self-end order-3 order-lg-2">
                    <div class="package-button-wrapper d-flex justify-content-center">
                        <a class="btn custom-btn blue-bg" href="bronze-package.php">Bronze Package</a>
                        <a class="btn custom-btn blue-bg" href="silver-package.php">Silver Package</a>
                    </div>
                </div>
                <div class="col-12 order-2 order-lg-3">
                    <div class="icons-list-main-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="icons-list-wrapper">
                                            <ul class="icons-list">
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Up to 8 pages on your
                                                    site
                                                </li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Optimization for 1
                                                    keyword/location/phrase
                                                </li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Creation and
                                                    optimization of your business' Google Business Page
                                                </li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Creation and
                                                    optimization of your business' Facebook Business Page
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="icons-list-wrapper">
                                            <ul class="icons-list">
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Responsive Design</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>All graphics and
                                                    design
                                                </li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Up to 3 hours of
                                                    changes and updates per year
                                                </li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Includes bilingual
                                                    replication
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="icons-list-wrapper">
                                            <ul class="icons-list">
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Domain name purchase
                                                    and renewal
                                                </li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Web hosting</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Maintenance of site
                                                </li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Guaranteed to show up
                                                    on Google's first page for your business name within 90 days or your
                                                    money back
                                                </li>
                                            </ul>
                                        </div>
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
                        <a href="email:test@gmail.com" class="btn custom-btn">
                            E-MAIL US
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!----------------------------------Guarantee add-ons section-------------------------------------------->

    <section class="guarantee-addons-section">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 blue-bg">
                    <div class="guarantee-column-wrapper">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div class="guarantee-text-block">
                                    <h2 class="big-title white-title">90 Day</h2>

                                    <h3 class="middle-title dark-title">Guarantee to find your name</h3>

                                    <div class="promise-description">
                                        <h3 class="small-title white-title">Our promise</h3>

                                        <p>
                                            All Ubiweb packages guarantee that you'll find your website on Google's
                                            first
                                            search page within 90 days of its creation or your money back.
                                            This successfully results in higher traffic on your website,
                                            connecting your business with consumers online.
                                        </p>

                                        <p class="small-promise-text">
                                            * Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                                            Maecenas sed massa fermentum, efficitur mi ac, vulputate velit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-6">
                    <div class="addons-column-wrapper">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div class="addons-description-container">
                                    <h3 class="middle-title red-title">Add-ons</h3>

                                    <p>Our versatile add-ons are suited to<br> promote your unique enterprise.</p>
                                </div>
                                <div class="addons-icon-container">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4">
                                            <div class="icon-text-block">
                                                <div
                                                    class="icon-container d-flex justify-content-center align-items-end">
                                                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                                                    <svg version="1.0"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                                         x="0px" y="0px" width="31.9px" height="67.5px"
                                                         viewBox="0 0 31.9 67.5"
                                                         style="enable-background:new 0 0 31.9 67.5;"
                                                         xml:space="preserve">
<style type="text/css">
    .st1 {
        fill: #E84038;
    }
</style>
                                                        <defs>
                                                        </defs>
                                                        <g>
                                                            <g>
                                                                <path class="st1" d="M0.5,51.9c-0.1,0-0.2,0-0.2-0.1C0.1,51.8,0,51.6,0,51.4c0-6.3,0-13.4,6.3-18.9c0.2-0.2,0.5-0.2,0.7,0
			c0.2,0.2,0.2,0.5,0,0.7c-5.7,5-6,11.4-6,17.2l5.4-3.4C6.6,47,7,47.1,7.1,47.3c0.1,0.2,0.1,0.5-0.2,0.7l-6.2,3.9
			C0.7,51.9,0.6,51.9,0.5,51.9z"/>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path class="st1" d="M25.2,48.1H6.6c-0.3,0-0.5-0.2-0.5-0.5V19.8c0-9.5,7.2-17.4,9.4-19.7c0.2-0.2,0.5-0.2,0.7,0
				c2.2,2.2,9.4,10.1,9.4,19.7v27.8C25.7,47.9,25.5,48.1,25.2,48.1z M7.1,47.1h17.5V19.8c0-8.7-6.3-16-8.8-18.6
				c-2.5,2.5-8.8,9.9-8.8,18.6V47.1z"/>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <path class="st1" d="M31.4,51.9c-0.1,0-0.2,0-0.3-0.1L24.9,48c-0.2-0.1-0.3-0.5-0.2-0.7c0.1-0.2,0.5-0.3,0.7-0.2l5.4,3.4
			c-0.1-5.5-0.9-12.9-6-17.2c-0.2-0.2-0.2-0.5-0.1-0.7c0.2-0.2,0.5-0.2,0.7-0.1c5.7,4.9,6.4,13.1,6.4,18.9c0,0.2-0.1,0.3-0.3,0.4
			C31.5,51.9,31.5,51.9,31.4,51.9z"/>
                                                            </g>
                                                            <g>
                                                                <path class="st1" d="M22.5,51.9H9.4c-0.3,0-0.5-0.2-0.5-0.5v-3.9c0-0.3,0.2-0.5,0.5-0.5h13.1c0.3,0,0.5,0.2,0.5,0.5v3.9
			C23,51.7,22.8,51.9,22.5,51.9z M9.9,50.9H22v-2.9H9.9V50.9z"/>
                                                            </g>
                                                            <g>
                                                                <path class="st1" d="M15.9,24.2c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C19.9,22.4,18.1,24.2,15.9,24.2z M15.9,17.2
			c-1.6,0-3,1.3-3,3c0,1.6,1.3,3,3,3s3-1.3,3-3C18.9,18.5,17.6,17.2,15.9,17.2z"/>
                                                            </g>
                                                            <g>
                                                                <path class="st1" d="M15.7,11c-2.2,0-4.3-0.8-6-2.2C9.5,8.7,9.4,8.5,9.6,8.3c2.2-4,5-7,6.1-8.1c0.2-0.2,0.5-0.2,0.7,0
			c1.3,1.3,3.7,4,5.9,7.6c0.1,0.2,0.1,0.5-0.1,0.6C20.4,10.1,18.1,11,15.7,11z M10.6,8.4c1.4,1.1,3.2,1.7,5,1.7c2,0,4-0.7,5.5-2.1
			c-1.9-3.2-4-5.6-5.1-6.7C14.9,2.4,12.6,5,10.6,8.4z"/>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path class="st1" d="M12.7,63.2c-0.3,0-0.5-0.2-0.5-0.5v-7.5c0-0.3,0.2-0.5,0.5-0.5s0.5,0.2,0.5,0.5v7.5
				C13.2,63,13,63.2,12.7,63.2z"/>
                                                                </g>
                                                                <g>
                                                                    <path class="st1" d="M19.1,62.1c-0.3,0-0.5-0.2-0.5-0.5v-6.4c0-0.3,0.2-0.5,0.5-0.5s0.5,0.2,0.5,0.5v6.4
				C19.6,61.9,19.4,62.1,19.1,62.1z"/>
                                                                </g>
                                                                <g>
                                                                    <path class="st1" d="M15.9,67.5c-0.3,0-0.5-0.2-0.5-0.5V55.2c0-0.3,0.2-0.5,0.5-0.5s0.5,0.2,0.5,0.5V67
				C16.4,67.3,16.2,67.5,15.9,67.5z"/>
                                                                </g>
                                                            </g>
                                                        </g>
</svg>

                                                </div>
                                                <h3 class="small-title dark-title">NEW-BIZ STARTER PACK</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="icon-text-block">
                                                <div
                                                    class="icon-container d-flex justify-content-center align-items-end">
                                                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                                                    <svg version="1.0"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                                         x="0px" y="0px" width="46.4px" height="30px"
                                                         viewBox="0 0 46.4 30"
                                                         style="enable-background:new 0 0 46.4 30;"
                                                         xml:space="preserve">
<style type="text/css">
    .st1 {
        fill: #E84038;
    }
</style>
                                                        <defs>
                                                        </defs>
                                                        <path class="st1" d="M46.3,0.3C46.3,0.3,46.3,0.3,46.3,0.3C46.3,0.3,46.3,0.3,46.3,0.3c0-0.1-0.1-0.2-0.2-0.2c0,0,0,0,0,0
	C46,0,46,0,45.9,0H0.5C0.4,0,0.3,0,0.2,0.1c0,0,0,0,0,0C0.1,0.2,0.1,0.2,0,0.3c0,0,0,0,0,0c0,0,0,0,0,0c0,0.1,0,0.1,0,0.2v29
	C0,29.8,0.2,30,0.5,30h45.4c0.3,0,0.5-0.2,0.5-0.5v-29C46.4,0.4,46.4,0.4,46.3,0.3z M44.5,1L22.8,19.8l-5-4.5c0,0,0,0,0,0L1.8,1
	H44.5z M1,29V1.6l15.8,14.1L5.4,25.6c-0.2,0.2-0.2,0.5,0,0.7c0.1,0.1,0.2,0.2,0.4,0.2c0.1,0,0.2,0,0.3-0.1l11.4-9.9l5,4.5
	c0,0,0.1,0.1,0.2,0.1c0,0,0,0,0,0c0.2,0.1,0.4,0,0.5-0.1l5.6-4.9l11.3,10.3c0.2,0.2,0.5,0.2,0.7,0c0.2-0.2,0.2-0.5,0-0.7L29.6,15.3
	L45.4,1.6V29H1z"/>
</svg>

                                                </div>
                                                <h3 class="small-title dark-title">Emails</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="icon-text-block">
                                                <div
                                                    class="icon-container d-flex justify-content-center align-items-end">
                                                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                                                    <svg version="1.0"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                                         x="0px" y="0px" width="43.6px" height="43.6px"
                                                         viewBox="0 0 43.6 43.6"
                                                         style="enable-background:new 0 0 43.6 43.6;"
                                                         xml:space="preserve">
<style type="text/css">
    .st1 {
        fill: #E84038;
    }
</style>
                                                        <defs>
                                                        </defs>
                                                        <path class="st1" d="M43.6,43L29.4,0.3c0,0,0-0.1-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0-0.1,0-0.1-0.1
	c0,0,0,0,0,0C29,0,29,0,29,0H14.7c-0.1,0-0.2,0.1-0.3,0.1c0,0-0.1,0.1-0.1,0.2L0,43c-0.1,0.1,0,0.3,0,0.4c0.1,0.1,0.2,0.2,0.4,0.2
	h10.4c1.6,0,3-0.6,4.1-1.8c0.6-0.6,1-1.3,1.3-2c0,0,0,0,0-0.1l5.5-16.6l5.5,16.6c0,0,0,0,0,0h0c0.3,0.8,0.7,1.4,1.3,2.1
	c1.1,1.1,2.6,1.8,4.1,1.8h10.4c0.1,0,0.3-0.1,0.4-0.2S43.7,43.1,43.6,43z M15.5,39.4C15.5,39.4,15.5,39.5,15.5,39.4
	C15.5,39.5,15.5,39.5,15.5,39.4c-0.2,0.7-0.6,1.3-1.1,1.8c-0.9,1-2.2,1.5-3.5,1.5H1L15,0.9h13.4l-3.6,10.7l-3.4,10.1c0,0,0,0,0,0
	L15.5,39.4z M32.8,42.7c-1.3,0-2.6-0.5-3.5-1.5c-0.5-0.5-0.9-1.1-1.1-1.7c0,0,0,0,0-0.1l-5.9-17.7l2.8-8.5L29,1.8l13.6,41H32.8z"/>
</svg>

                                                </div>
                                                <h3 class="small-title dark-title">Google adwards</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="icon-text-block">
                                                <div
                                                    class="icon-container d-flex justify-content-center align-items-end">
                                                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                                                    <svg version="1.0"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                                         x="0px" y="0px" width="44.9px" height="45.9px"
                                                         viewBox="0 0 44.9 45.9"
                                                         style="enable-background:new 0 0 44.9 45.9;"
                                                         xml:space="preserve">
<style type="text/css">
    .st1 {
        fill: #E84038;
    }
</style>
                                                        <defs>
                                                        </defs>
                                                        <g>
                                                            <path class="st1" d="M31.9,24.7l-3.6,9.6c-0.1,0.1,0,0.3,0.1,0.4c0.1,0.1,0.2,0.2,0.4,0.2h7.2c0.1,0,0.3-0.1,0.4-0.2
		c0.1-0.1,0.1-0.3,0.1-0.4l-3.6-9.6C32.6,24.4,32,24.4,31.9,24.7z M29.4,34l2.9-7.8l2.9,7.8H29.4z"/>
                                                            <path class="st1" d="M44.9,45.3L35,18.8c-0.1-0.2-0.2-0.3-0.4-0.3h-4.4c-0.2,0-0.4,0.1-0.4,0.3l-3.5,9.4l-4.5-4.5
		c3.6-4.1,6.3-8.8,8-14h6.1c0.2,0,0.5-0.2,0.5-0.5V4.9c0-0.2-0.2-0.5-0.5-0.5h-15v-4c0-0.2-0.2-0.5-0.5-0.5h-4.4
		c-0.2,0-0.5,0.2-0.5,0.5v4h-15C0.2,4.4,0,4.6,0,4.9v4.4c0,0.2,0.2,0.5,0.5,0.5h24c-1.5,3.9-3.6,7.5-6.3,10.7
		c-1.8-2.1-3.4-4.4-4.7-6.9c-0.1-0.2-0.2-0.2-0.4-0.2H8.6c-0.2,0-0.3,0.1-0.4,0.2c-0.1,0.1-0.1,0.3,0,0.4c1.6,3.5,3.7,6.9,6.4,9.9
		L3.6,34.5c-0.1,0.1-0.1,0.2-0.1,0.3c0,0.1,0,0.2,0.1,0.3l3.1,3.1c0.1,0.1,0.2,0.1,0.3,0.1s0.2,0,0.3-0.1l10.7-10.7l6.1,6.1
		l-4.4,11.7c-0.1,0.1,0,0.3,0.1,0.4c0.1,0.1,0.2,0.2,0.4,0.2h4.4c0.2,0,0.4-0.1,0.4-0.3l2.4-6.3h9.8l2.4,6.3
		c0.1,0.2,0.2,0.3,0.4,0.3h4.4c0.1,0,0.3-0.1,0.4-0.2C44.9,45.6,44.9,45.4,44.9,45.3z M18.4,26.6c-0.2-0.2-0.5-0.2-0.6,0L7.1,37.3
		l-2.5-2.5l10.9-10.8c0.2-0.2,0.2-0.4,0-0.6c-2.5-2.8-4.6-6-6.2-9.3h3.4c1.4,2.6,3,5,5,7.2c0.1,0.1,0.2,0.1,0.3,0.1
		c0.1,0,0.2-0.1,0.3-0.1c3.1-3.5,5.5-7.5,7.1-12c0-0.1,0-0.3-0.1-0.4c-0.1-0.1-0.2-0.2-0.4-0.2H0.9V5.3h15c0.2,0,0.5-0.2,0.5-0.5v-4
		h3.5v4c0,0.2,0.2,0.5,0.5,0.5h15v3.5h-6c-0.2,0-0.4,0.1-0.4,0.3c-1.6,5.3-4.4,10.1-8.1,14.3c-0.1,0.1-0.1,0.2-0.1,0.3
		c0,0.1,0,0.2,0.1,0.3l5.1,5.1l-1.3,3.6L18.4,26.6z M40.4,45L38,38.7c-0.1-0.2-0.2-0.3-0.4-0.3H27.1c-0.2,0-0.4,0.1-0.4,0.3L24.3,45
		h-3.4l4.3-11.3c0,0,0,0,0,0l1.7-4.5c0,0,0,0,0,0l3.7-9.7h3.8L43.8,45H40.4z"/>
                                                        </g>
</svg>

                                                </div>
                                                <h3 class="small-title dark-title">Translation &amp; Bilingual Site</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="icon-text-block">
                                                <div
                                                    class="icon-container d-flex justify-content-center align-items-end">
                                                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                                                    <svg version="1.0"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                                         x="0px" y="0px" width="49.9px" height="35.8px"
                                                         viewBox="0 0 49.9 35.8"
                                                         style="enable-background:new 0 0 49.9 35.8;"
                                                         xml:space="preserve">
<style type="text/css">
    .st1 {
        fill: #E84038;
    }
</style>
                                                        <defs>
                                                        </defs>
                                                        <g>
                                                            <path class="st1" d="M20.6,11.7c1.7,0,3.1-1.4,3.1-3.1s-1.4-3.1-3.1-3.1s-3.1,1.4-3.1,3.1S18.9,11.7,20.6,11.7z M20.6,6.3
		c1.2,0,2.2,1,2.2,2.2s-1,2.2-2.2,2.2s-2.2-1-2.2-2.2S19.4,6.3,20.6,6.3z"/>
                                                            <path class="st1" d="M10.8,9.9C9,9.9,7.6,11.3,7.6,13s1.4,3.1,3.1,3.1s3.1-1.4,3.1-3.1S12.5,9.9,10.8,9.9z M10.8,15.3
		c-1.2,0-2.2-1-2.2-2.2s1-2.2,2.2-2.2s2.2,1,2.2,2.2S12,15.3,10.8,15.3z"/>
                                                            <path class="st1" d="M9,19.8c-1.7,0-3.1,1.4-3.1,3.1S7.2,26,9,26c1.7,0,3.1-1.4,3.1-3.1S10.7,19.8,9,19.8z M9,25.1
		c-1.2,0-2.2-1-2.2-2.2s1-2.2,2.2-2.2c1.2,0,2.2,1,2.2,2.2S10.2,25.1,9,25.1z"/>
                                                            <path class="st1" d="M44.8,5.1l3.1-3.4c0.2-0.2,0.2-0.5,0-0.6L47,0.1c-0.2-0.2-0.4-0.2-0.6,0l-4.2,3.8c-1.6-0.6-3.3-1.1-5-1.3
		C10-2,2.6,9.5,0.6,16.9c-1.6,5.8,0.1,11,4.7,14.6c3.7,2.9,8.8,4.4,13.8,4.4c3.8,0,7.6-0.9,10.7-2.6c5.7-3.3,7.1-6.4,8.3-9.1
		c1.2-2.7,2.2-5,6.9-7.3c4-1.9,4.9-4.1,4.9-5.5C49.9,9,48,6.8,44.8,5.1z M39.2,11.1l1.6-1.8c1.6,0.4,2.7,1.2,2.7,1.9
		c0,1.1-2.4,2.2-5.8,2.2c-0.2,0-0.4,0-0.6,0L39.2,11.1z M25.9,24.8c0,1.2-0.6,2.4-1.8,3.3c-2,1.6-5.1,2.4-7.3,2.3
		c0.8-0.9,2.2-2.8,2.7-5.5c0.5-2.4,2.3-3.3,3.8-3.2c0.1,0,0.2,0,0.3,0.1c0.1,0,0.2,0,0.3,0.1c0.1,0,0.1,0,0.2,0.1
		c0.1,0,0.1,0.1,0.2,0.1c0.1,0,0.2,0.1,0.2,0.1c0.1,0,0.1,0.1,0.2,0.1c0.1,0,0.1,0.1,0.2,0.1c0.1,0.1,0.2,0.2,0.2,0.2c0,0,0,0,0,0.1
		c0.4,0.5,0.6,1.1,0.7,1.8c0,0,0,0,0,0C25.9,24.6,25.9,24.7,25.9,24.8z M46.7,1.1l0.3,0.3l-6.6,7.2c0,0,0,0,0,0l-1.9,2.1L26.6,23.5
		c-0.2-0.6-0.4-1-0.8-1.4c0,0,0,0,0,0c-0.2-0.2-0.3-0.4-0.5-0.5c0,0,0,0,0,0c-0.2-0.1-0.4-0.3-0.6-0.4c0,0,0,0,0,0L42.6,4.7
		c0,0,0,0,0,0L46.7,1.1z M44.6,16c-5,2.4-6.1,5-7.3,7.7c-1.2,2.7-2.5,5.6-7.9,8.7c-6.8,3.9-17.3,3.1-23.5-1.6
		C1.5,27.4,0,22.5,1.5,17.1C4.7,5.4,15.8,2.4,26,2.4c4,0,7.9,0.4,11.1,1c1.5,0.3,3,0.6,4.4,1.1l-3.9,3.5c-3.8,0-6.6,1.4-6.6,3.1
		c0,0.5,0.2,1.2,1.2,1.8l-8.6,7.8c0,0-0.1,0-0.1,0c-1.9-0.2-4.1,1-4.7,3.9c-0.7,3.7-3.1,5.6-3.1,5.7c-0.1,0.1-0.2,0.3-0.2,0.5
		c0,0.2,0.2,0.3,0.3,0.3c0.4,0.1,0.9,0.1,1.5,0.1c2.4,0,5.5-0.9,7.5-2.5c1.4-1.1,2.1-2.5,2.1-4c0-0.1,0-0.1,0-0.2l9.5-10.4
		c0.5,0,0.9,0.1,1.4,0.1c3.8,0,6.7-1.4,6.7-3.1c0-1.1-1.1-2-2.9-2.6l2.7-2.9c3,1.6,4.8,3.6,4.8,5.5C49,13,47.4,14.6,44.6,16z
		 M32.8,12.4c-0.6-0.4-1-0.8-1-1.2c0-0.9,1.9-2,4.7-2.2L32.8,12.4z"/>
                                                        </g>
</svg>

                                                </div>
                                                <h3 class="small-title dark-title">Logo refresh</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="icon-text-block">
                                                <div
                                                    class="icon-container d-flex justify-content-center align-items-end">
                                                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                                                    <svg version="1.0"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                                         x="0px" y="0px" width="44px" height="42.9px"
                                                         viewBox="0 0 44 42.9"
                                                         style="enable-background:new 0 0 44 42.9;"
                                                         xml:space="preserve">
<style type="text/css">
    .st1 {
        fill: #E84038;
    }
</style>
                                                        <defs>
                                                        </defs>
                                                        <g>
                                                            <path class="st1" d="M43.9,10.7l-3.3-3.3c-0.2-0.2-0.5-0.2-0.7,0l-3.3,3.3l-6.4,6.4V0.5C30.2,0.2,30,0,29.7,0H0.5
		C0.2,0,0,0.2,0,0.5v41.9c0,0.3,0.2,0.5,0.5,0.5h29.2c0.3,0,0.5-0.2,0.5-0.5V25.1l10.4-10.4l3.3-3.3C44.1,11.2,44.1,10.9,43.9,10.7z
		 M29.2,41.9H1V1h28.2v17.1l-9.6,9.6c-0.1,0-0.1,0-0.2,0H8.2c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h10.5L18.4,29
		c0,0-0.1,0.1-0.1,0.2l-2.2,5.3c-0.1-0.1-0.2-0.1-0.3-0.1H8.2c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h7.6c0.1,0,0.2,0,0.3-0.1
		c0,0,0,0,0,0c0.1,0.1,0.2,0.1,0.4,0.1c0.1,0,0.1,0,0.2,0l5.6-2.3c0.1,0,0.1-0.1,0.2-0.1l6.9-6.9V41.9z M29.4,24.5
		C29.4,24.5,29.4,24.5,29.4,24.5l-7.7,7.7L17.4,34l1.8-4.3L37,11.7l2.6,2.6L29.4,24.5z M40.3,13.6L37.7,11l2.6-2.6l2.6,2.6
		L40.3,13.6z"/>
                                                            <path class="st1"
                                                                  d="M8.2,8.6H22c0.3,0,0.5-0.2,0.5-0.5S22.3,7.6,22,7.6H8.2c-0.3,0-0.5,0.2-0.5,0.5S7.9,8.6,8.2,8.6z"/>
                                                            <path class="st1"
                                                                  d="M8.2,15.3H22c0.3,0,0.5-0.2,0.5-0.5s-0.2-0.5-0.5-0.5H8.2c-0.3,0-0.5,0.2-0.5,0.5S7.9,15.3,8.2,15.3z"/>
                                                            <path class="st1"
                                                                  d="M8.2,22H22c0.3,0,0.5-0.2,0.5-0.5S22.3,21,22,21H8.2c-0.3,0-0.5,0.2-0.5,0.5S7.9,22,8.2,22z"/>
                                                        </g>
</svg>

                                                </div>
                                                <h3 class="small-title dark-title">Copywriting &amp; Content
                                                    Creation</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
</body>
</html>