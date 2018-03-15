<?php require_once("app/init.php"); ?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ubi Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

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
                        <li><a href="#about">About</a></li>
                        <li><a href="#packages">Packages</a></li>
                        <li><a href="#addons">Add-Ons</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#feedback">Testimonials</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#about">Contact</a></li>
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
                        <li><a href="#about">About</a></li>
                        <li><a href="#packages">Packages</a></li>
                        <li><a href="#addons">Add-Ons</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#feedback">Testimonials</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#about" class="btn custom-btn red-btn menu-button">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="hero-banner-wrapper" style="background-image: url(<?= asset('images/hero.jpg') ?>);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="banner-content-wrapper">
                    <div class="banner-text-block">
                        <h2 class="banner-subtitle">we are ubiweb</h2>

                        <h1 class="banner-title">Your Online Partner</h1>

                        <div class="row justify-content-center banner-description">
                            <div class="col-md-5">
                                <p>We are a marketing firm specializing in website creation and getting your
                                    business
                                    noticed</p>
                            </div>
                        </div>
                        <div class="banner-button-container">
                            <button class="btn custom-btn red-btn">Get Started</button>
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

<main>

    <!-------------------Specialize section------------------------------>

    <section class="specialize-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="simple-text-block">
                        <h3 class="section-subtitle black-subtitle">We specialize in</h3>

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
                                <svg version="1.0"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                     x="0px" y="0px" width="64px" height="42px" viewBox="0 0 206 135.5"
                                     style="enable-background:new 0 0 206 135.5;"
                                     xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #24BFCE;
    }
</style>
                                    <defs>
                                    </defs>
                                    <g>
                                        <path class="st0" d="M25.5,75.5h32.9c1.9,0,3.5-1.6,3.5-3.5V48.5c0-1.9-1.6-3.5-3.5-3.5H25.5c-1.9,0-3.5,1.6-3.5,3.5V72
        C22,73.9,23.5,75.5,25.5,75.5z M29,52h25.9v16.4H29V52z"/>
                                        <path class="st0"
                                              d="M118.9,90.4H25.5c-1.9,0-3.5,1.6-3.5,3.5s1.6,3.5,3.5,3.5h93.4c1.9,0,3.5-1.6,3.5-3.5S120.8,90.4,118.9,90.4z"
                                            />
                                        <path class="st0"
                                              d="M66.9,105.1H25.5c-1.9,0-3.5,1.6-3.5,3.5s1.6,3.5,3.5,3.5h41.4c1.9,0,3.5-1.6,3.5-3.5S68.8,105.1,66.9,105.1z"
                                            />
                                        <path class="st0" d="M138.8,44.6c-3.5,0-6.9,1.2-9.6,3.3c-2.7-2.1-6-3.3-9.6-3.3c-8.6,0-15.6,7-15.6,15.6c0,8.6,7,15.6,15.6,15.6
        c3.5,0,6.9-1.2,9.6-3.3c2.7,2.1,6,3.3,9.6,3.3c8.6,0,15.6-7,15.6-15.6C154.4,51.6,147.4,44.6,138.8,44.6z M138.8,68.8
        c-2.7,0-5.2-1.2-6.8-3.3c-0.7-0.9-1.7-1.4-2.8-1.4s-2.1,0.5-2.8,1.4c-1.6,2.1-4.1,3.3-6.8,3.3c-4.7,0-8.6-3.9-8.6-8.6
        c0-4.7,3.9-8.6,8.6-8.6c2.7,0,5.2,1.2,6.8,3.3c0.7,0.9,1.7,1.4,2.8,1.4s2.1-0.5,2.8-1.4c1.6-2.1,4.1-3.3,6.8-3.3
        c4.7,0,8.6,3.9,8.6,8.6C147.4,65,143.5,68.8,138.8,68.8z"/>
                                        <path class="st0" d="M188.5,0H46.1c-9.6,0-17.5,7.8-17.5,17.5v4.3H17.5C7.8,21.7,0,29.6,0,39.2v78.9c0,9.6,7.8,17.5,17.5,17.5
        h142.4c9.6,0,17.5-7.8,17.5-17.5v-4.3h11.2c9.6,0,17.5-7.8,17.5-17.5V17.5C206,7.8,198.1,0,188.5,0z M168.3,118.1
        c0,4.7-3.8,8.5-8.5,8.5H17.5c-4.7,0-8.5-3.8-8.5-8.5V39.2c0-4.7,3.8-8.5,8.5-8.5h142.4c4.7,0,8.5,3.8,8.5,8.5V118.1z M197,96.3
        c0,4.7-3.8,8.5-8.5,8.5h-11.2V59.1H197V96.3z M197,52.1h-19.7V39.2c0-1.2-0.1-2.4-0.4-3.5h20V52.1z M197,28.7h-23.2
        c-3.2-4.2-8.2-7-13.9-7H37.7v-4.3c0-4.7,3.8-8.5,8.5-8.5h142.4c4.7,0,8.5,3.8,8.5,8.5V28.7z"/>
                                    </g>
</svg>
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
                                <svg version="1.0"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                     x="0px" y="0px" width="70px" height="55px" viewBox="0 0 236.1 176.1"
                                     style="enable-background:new 0 0 236.1 176.1;"
                                     xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #24BFCE;
    }
</style>
                                    <defs>
                                    </defs>
                                    <g>
                                        <path class="st0" d="M134,86.6h-3.2c-1.3-4.7-3.1-9.1-5.5-13.3l2.3-2.3c5.2-5.2,5.2-13.6,0-18.7l-3.7-3.7c-5.2-5.2-13.6-5.2-18.8,0
		l-2.3,2.3c-4.2-2.4-8.6-4.2-13.3-5.5v-3.2c0-7.3-5.9-13.3-13.3-13.3H71c-7.3,0-13.3,5.9-13.3,13.3v3.2c-4.7,1.3-9.1,3.1-13.3,5.5
		l-2.3-2.3c-5.2-5.2-13.6-5.2-18.7,0l-3.7,3.7c-5.2,5.2-5.2,13.6,0,18.8l2.3,2.3c-2.4,4.2-4.2,8.6-5.5,13.3h-3.2
		C5.9,86.6,0,92.5,0,99.8v5.3c0,7.3,5.9,13.3,13.3,13.3h3.2c1.3,4.7,3.1,9.1,5.5,13.3l-2.3,2.3c-5.2,5.2-5.2,13.6,0,18.7l3.7,3.7
		c2.5,2.5,5.8,3.9,9.4,3.9c3.5,0,6.9-1.4,9.4-3.9l2.3-2.3c4.2,2.4,8.6,4.2,13.3,5.5v3.2c0,7.3,5.9,13.3,13.3,13.3h5.3
		c7.3,0,13.3-5.9,13.3-13.3v-3.2c4.7-1.3,9.1-3.1,13.3-5.5l2.3,2.3c2.5,2.5,5.8,3.9,9.4,3.9c3.5,0,6.9-1.4,9.4-3.9l3.7-3.7
		c5.2-5.2,5.2-13.6,0-18.7v0l-2.3-2.3c2.4-4.2,4.2-8.6,5.5-13.3h3.2c7.3,0,13.3-5.9,13.3-13.3v-5.3C147.3,92.5,141.3,86.6,134,86.6z
		 M138.3,105.1c0,2.3-1.9,4.3-4.3,4.3h-6.8c-2.1,0-4,1.5-4.4,3.6c-1.3,6.1-3.6,11.8-7,17c-1.2,1.8-0.9,4.1,0.6,5.6l4.8,4.8
		c1.7,1.7,1.7,4.4,0,6l-3.7,3.7c-0.8,0.8-1.9,1.2-3,1.2c-1.1,0-2.2-0.4-3-1.2l-4.8-4.8c-1.5-1.5-3.9-1.7-5.6-0.6
		c-5.2,3.4-10.9,5.7-17,7c-2.1,0.4-3.6,2.3-3.6,4.4v6.8c0,2.3-1.9,4.3-4.3,4.3H71c-2.3,0-4.3-1.9-4.3-4.3v-6.8c0-2.1-1.5-4-3.6-4.4
		c-6.1-1.3-11.8-3.6-17-7c-0.8-0.5-1.6-0.7-2.5-0.7c-1.2,0-2.3,0.4-3.2,1.3l-4.8,4.8c-0.8,0.8-1.9,1.2-3,1.2c-1.1,0-2.2-0.4-3-1.2
		l-3.7-3.7c-1.7-1.7-1.7-4.4,0-6l4.8-4.8c1.5-1.5,1.8-3.9,0.6-5.6c-3.4-5.2-5.7-10.9-7-17c-0.4-2.1-2.3-3.6-4.4-3.6h-6.8
		c-2.3,0-4.3-1.9-4.3-4.3v-5.3c0-2.3,1.9-4.3,4.3-4.3H20c2.1,0,4-1.5,4.4-3.6c1.3-6.1,3.6-11.8,7-17c1.2-1.8,0.9-4.1-0.6-5.6
		l-4.8-4.8c-1.7-1.7-1.7-4.4,0-6l3.7-3.7c1.7-1.7,4.4-1.7,6,0l4.8,4.8c1.5,1.5,3.9,1.8,5.6,0.6c4.6-3,9.6-5.2,14.9-6.5
		c3.3-0.8,5.6-3.8,5.6-7.3v-4.4c0-2.3,1.9-4.3,4.3-4.3h5.3c2.3,0,4.3,1.9,4.3,4.3v6.8c0,2.1,1.5,4,3.6,4.4c6.1,1.3,11.8,3.6,17,7
		c1.8,1.2,4.1,0.9,5.6-0.6l4.8-4.8c1.7-1.7,4.4-1.7,6,0l3.7,3.7c1.7,1.7,1.7,4.4,0,6l-4.8,4.8c-1.5,1.5-1.8,3.9-0.6,5.6
		c3.4,5.2,5.7,10.9,7,17c0.4,2.1,2.3,3.6,4.4,3.6h6.8c2.3,0,4.3,1.9,4.3,4.3V105.1z"/>
                                        <path class="st0" d="M92.9,121.8c10.6-10.6,10.6-27.9,0-38.6c-10.6-10.6-27.9-10.6-38.6,0c-10.6,10.6-10.6,27.9,0,38.6
		c5.3,5.3,12.3,8,19.3,8C80.6,129.8,87.6,127.1,92.9,121.8z M60,88.8c3.8-3.8,8.7-5.6,13.6-5.6c4.9,0,9.9,1.9,13.6,5.6
		c7.5,7.5,7.5,19.8,0,27.3c-7.5,7.5-19.8,7.5-27.3,0S52.5,96.4,60,88.8z"/>
                                        <path class="st0" d="M96.9,74.2c-1.4,1.4-1.4,3.6,0,4.9c12.8,12.8,12.8,33.7,0,46.6c-6.2,6.2-14.5,9.6-23.3,9.6
		c-1.9,0-3.5,1.6-3.5,3.5s1.6,3.5,3.5,3.5c10.7,0,20.7-4.2,28.2-11.7c15.6-15.6,15.6-40.9,0-56.5C100.5,72.9,98.3,72.9,96.9,74.2z"
                                            />
                                        <path class="st0" d="M83.7,72.7c1.3,0.5,2.5,1,3.7,1.6c0.7,0.3,1.4,0.5,2.1,0.5c1.6,0,3.2-0.9,4-2.4c1.1-2.2,0.3-4.9-1.9-6.1
		c-1.5-0.8-3.2-1.5-4.8-2.1c-2.3-0.9-4.9,0.3-5.8,2.7C80.2,69.3,81.4,71.8,83.7,72.7z"/>
                                        <path class="st0" d="M62.1,133.3c-4.4-1.7-8.4-4.2-11.7-7.6c-12.8-12.8-12.8-33.7,0-46.6c5.9-5.9,13.7-9.3,21.9-9.6
		c1.9-0.1,3.4-1.7,3.4-3.6c-0.1-1.9-1.8-3.4-3.6-3.4C62,63,52.5,67.1,45.4,74.2c-15.6,15.6-15.6,40.9,0,56.5
		c4.1,4.1,8.9,7.2,14.2,9.2c0.4,0.2,0.8,0.2,1.2,0.2c1.4,0,2.8-0.9,3.3-2.3C64.8,136,63.9,134,62.1,133.3z"/>
                                        <path class="st0" d="M234.7,56.1c-1.4-2.5-3.7-4.2-6.4-5l-1.2-0.3c-0.1-2.8-0.4-5.6-1.1-8.3l1.1-0.6c5.1-2.9,6.9-9.4,4-14.5
		l-1.8-3.2c-2.9-5.1-9.4-6.9-14.5-4l-1.1,0.6c-2-1.9-4.3-3.6-6.6-5.1l0.3-1.2c1.5-5.7-1.8-11.5-7.5-13.1l-3.6-1
		c-5.7-1.5-11.5,1.8-13.1,7.5l-0.3,1.2c-2.8,0.1-5.6,0.4-8.3,1.1L173.9,9c-2.9-5.1-9.4-6.9-14.5-4l-3.2,1.8c-2.5,1.4-4.2,3.7-5,6.4
		s-0.4,5.6,1,8.1l0.6,1.1c-1.9,2-3.6,4.2-5.1,6.6l-1.2-0.3c-2.7-0.7-5.6-0.4-8.1,1c-2.5,1.4-4.2,3.7-5,6.4l-1,3.6
		c-0.7,2.7-0.4,5.6,1,8.1c1.4,2.5,3.7,4.2,6.4,5l1.2,0.3c0.1,2.8,0.4,5.6,1.1,8.3l-1.1,0.6c-5.1,2.9-6.9,9.4-4,14.5l1.8,3.2
		c2.9,5.1,9.4,6.9,14.5,4l1.1-0.6c2,1.9,4.3,3.6,6.6,5.1l-0.3,1.2c-1.5,5.7,1.8,11.5,7.5,13.1l3.6,1c0.9,0.3,1.9,0.4,2.8,0.4
		c4.7,0,9-3.1,10.3-7.8l0.3-1.2c2.8-0.1,5.6-0.4,8.3-1.1l0.6,1.1c2.9,5.1,9.4,6.9,14.5,4l3.2-1.8c5.1-2.9,6.9-9.4,4-14.5l-0.6-1.1
		c1.9-2,3.6-4.3,5.1-6.6l1.2,0.3c2.7,0.7,5.6,0.4,8.1-1c2.5-1.4,4.2-3.7,5-6.4l1-3.6C236.5,61.4,236.1,58.5,234.7,56.1z M227,61.8
		l-1,3.6c-0.2,0.6-0.5,0.9-0.8,1s-0.7,0.3-1.2,0.2l-4.6-1.2c-2-0.6-4.2,0.4-5.2,2.3c-1.9,3.7-4.5,7-7.6,9.8c-1.6,1.4-2,3.7-0.9,5.6
		l2.4,4.1v0c0.5,0.8,0.2,1.8-0.6,2.2l-3.2,1.8c-0.8,0.5-1.8,0.2-2.2-0.6l-2.4-4.1c-1.1-1.8-3.3-2.7-5.3-2.1c-4,1.3-8.1,1.8-12.3,1.6
		c-2.1-0.1-4,1.3-4.6,3.3l-1.2,4.6c-0.2,0.9-1.1,1.4-2,1.2l-3.6-1c-0.9-0.2-1.4-1.1-1.2-2l1.2-4.6c0.6-2.1-0.4-4.2-2.3-5.2
		c-3.7-1.9-7-4.5-9.8-7.6c-0.9-1-2.1-1.5-3.4-1.5c-0.8,0-1.5,0.2-2.2,0.6l-4.1,2.4c-0.8,0.4-1.8,0.2-2.2-0.6l-1.8-3.2
		c-0.5-0.8-0.2-1.8,0.6-2.2l4.1-2.4c1.8-1.1,2.7-3.3,2.1-5.3c-1.3-4-1.8-8.1-1.6-12.3c0.1-2.1-1.3-4-3.3-4.6l-4.6-1.2
		c-0.6-0.2-0.9-0.5-1-0.8s-0.3-0.7-0.2-1.2l1-3.6c0.2-0.6,0.5-0.9,0.8-1c0.2-0.1,0.7-0.3,1.2-0.2l4.6,1.2c2,0.6,4.2-0.4,5.2-2.3
		c1.9-3.7,4.5-7,7.6-9.8c1.6-1.4,2-3.7,0.9-5.6l-2.4-4.1c-0.3-0.5-0.2-1-0.2-1.2c0.1-0.2,0.3-0.7,0.8-1l3.2-1.8
		c0.8-0.4,1.8-0.2,2.2,0.6l2.4,4.1c1.1,1.8,3.3,2.7,5.3,2.1c3.5-1.1,7.1-1.7,10.9-1.6c3,0,5.7-2,6.5-4.9l0.8-3
		c0.2-0.9,1.1-1.4,2-1.2l3.6,1c0.9,0.2,1.4,1.1,1.2,2l-1.2,4.6c-0.6,2.1,0.4,4.2,2.3,5.2c3.7,1.9,7,4.5,9.8,7.6
		c1.4,1.6,3.7,2,5.6,0.9l4.1-2.4c0.8-0.5,1.8-0.2,2.2,0.6l1.8,3.2c0.3,0.5,0.2,1,0.2,1.2c-0.1,0.2-0.3,0.7-0.8,1l-4.1,2.4
		c-1.8,1.1-2.7,3.3-2.1,5.3c1.3,4,1.8,8.1,1.6,12.3c-0.1,2.1,1.3,4,3.3,4.6l4.6,1.2c0.6,0.2,0.9,0.5,1,0.8S227.2,61.2,227,61.8z"/>
                                        <path class="st0" d="M171.8,30.5c-5.7,3.3-9.8,8.6-11.6,15c-1.7,6.4-0.9,13,2.4,18.8c4.6,8,12.9,12.5,21.5,12.5
		c4.2,0,8.4-1,12.2-3.3c5.7-3.3,9.8-8.6,11.6-15c1.7-6.4,0.9-13-2.4-18.8C198.8,27.9,183.7,23.8,171.8,30.5z M199.3,56.1
		c-1.1,4.1-3.7,7.4-7.4,9.5c-7.5,4.3-17.1,1.7-21.5-5.8c-2.1-3.6-2.6-7.9-1.5-11.9c1.1-4.1,3.7-7.4,7.4-9.5c2.5-1.4,5.1-2.1,7.8-2.1
		c5.5,0,10.8,2.8,13.7,7.9C199.8,47.8,200.4,52.1,199.3,56.1z"/>
                                    </g>
</svg>

                            </div>
                            <div class="description-block">
                                <h3 class="small-title dark-title">Customization</h3>

                                <p>
                                    Consultations and optional add-ons allowus to get the best results for your business
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="icon-text-block">
                            <div class="icon-container">
                                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                                <svg version="1.0"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                     x="0px" y="0px" width="53px" height="52px" viewBox="0 0 199.8 196.1"
                                     style="enable-background:new 0 0 199.8 196.1;"
                                     xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #24BFCE;
    }
</style>
                                    <defs>
                                    </defs>
                                    <g>
                                        <path class="st0" d="M154.1,98.2h-12.7c-1.9,0-3.5,1.6-3.5,3.5s1.6,3.5,3.5,3.5h12.7c1.9,0,3.5-1.6,3.5-3.5S156.1,98.2,154.1,98.2z
		"/>
                                        <circle class="st0" cx="147.5" cy="178.6" r="3.6"/>
                                        <circle class="st0" cx="99.9" cy="131" r="3.6"/>
                                        <path class="st0" d="M179.3,0H20.5C9.2,0,0,9.2,0,20.5v109.5c0,11.3,9.2,20.5,20.5,20.5h47.6l-10,29.6c-0.5,1.4-0.2,2.9,0.6,4.1
		c0.8,1.2,2.2,1.9,3.7,1.9h45.5c2.5,0,4.5-2,4.5-4.5s-2-4.5-4.5-4.5H68.7l9-26.6h37V184c0,6.7,5.4,12.1,12.1,12.1h42
		c6.7,0,12.1-5.4,12.1-12.1v-33.5c10.6-0.8,18.9-9.7,18.9-20.4V20.5C199.8,9.2,190.6,0,179.3,0z M171.9,163.7h-48.3V92
		c0-1.7,1.4-3.1,3.1-3.1h42c1.7,0,3.1,1.4,3.1,3.1V163.7z M168.7,187.1h-42c-1.7,0-3.1-1.4-3.1-3.1v-13.3h48.3V184
		C171.9,185.7,170.5,187.1,168.7,187.1z M190.8,130.1c0,5.8-4.3,10.6-9.9,11.4V92c0-6.7-5.4-12.1-12.1-12.1h-42
		c-6.7,0-12.1,5.4-12.1,12.1v49.7H20.5c-6.4,0-11.5-5.2-11.5-11.5v-9.2h98.9c1.9,0,3.5-1.6,3.5-3.5s-1.6-3.5-3.5-3.5H9V20.5
		C9,14.2,14.2,9,20.5,9h158.7c6.4,0,11.5,5.2,11.5,11.5V130.1z"/>
                                    </g>
</svg>

                            </div>
                            <div class="description-block">
                                <h3 class="small-title dark-title">getting noticed</h3>

                                <p>
                                    With beautiful and responsive designs and local SEO optimization
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="icon-text-block">
                            <div class="icon-container">
                                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                                <svg version="1.0"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                     x="0px" y="0px" width="53px" height="57px" viewBox="0 0 206.7 221.3"
                                     style="enable-background:new 0 0 206.7 221.3;"
                                     xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #24BFCE;
    }
</style>
                                    <defs>
                                    </defs>
                                    <path class="st0" d="M196.4,182.5c-5.2-21.3-13.5-40.4-24.2-55.2c-8.4-11.6-18.2-20.6-29.3-26.8c0.7-1.1,1.4-2.2,2.1-3.3
	c2.1-3.6,3.9-7.6,5.4-11.9h9.5c9.9,0,18-8.1,18-18v-5.6c0-9.9-8.1-18-18-18h-4.8C150.9,18.9,129.3,0,103.4,0S55.8,18.9,51.6,43.7
	h-4.8c-9.9,0-18,8.1-18,18v5.6c0,9.9,8.1,18,18,18h10c1.6,4.3,3.5,8.3,5.7,12c0.5,0.8,0.9,1.5,1.4,2.2C52,105.7,41.6,115,32.8,127.3
	c-12.4,17.4-19.4,37.9-23.3,55.8C3.7,188,0,195.3,0,203.5c0,2.5,2,4.5,4.5,4.5h6.2h29.9l1.2,9.4c0.3,2.3,2.2,3.9,4.5,3.9h114.4
	c2.3,0,4.2-1.7,4.5-3.9l1.2-9.4h29.7h6.4c2.5,0,4.5-2,4.5-4.5C206.7,195,202.7,187.4,196.4,182.5z M59.9,55.4
	c7.8,2.1,22.1,3,41.5-7.9v6.3c0,1.3,0.6,2.5,1.5,3.4c0.8,0.7,1.9,1.1,3,1.1c0.2,0,0.4,0,0.6,0c0.6-0.1,14.3-1.9,28.2-10.9
	c2.1-1.4,2.7-4.1,1.3-6.2c-1.4-2.1-4.1-2.7-6.2-1.3c-2.8,1.8-5.6,3.3-8.2,4.5l-11.1,0.8v-5.6c0-1.7-0.9-3.2-2.4-4
	c-1.5-0.8-3.2-0.7-4.6,0.2C90.9,44.1,80.8,47,73.3,47.6l-0.2,0c-6,0.4-10.3-0.6-12.8-1.5c3.1-21,21.2-37.1,43-37.1
	c24,0,43.5,19.5,43.5,43.5c0,7.3-1,16.3-3.5,25l-0.3-0.2c-0.2,0.3-3.1,4.4-10.7,7.8l-8.7,2.9c-2.7,0.6-5.8,1.2-9.3,1.4
	c-1.3-1.8-3.4-3-5.8-3h-5.3c-3.9,0-7.1,3.2-7.1,7.1V96c0,3.9,3.2,7.1,7.1,7.1h5.3c2.6,0,4.8-1.4,6.1-3.4c8.9-0.7,15.9-2.7,21.3-5
	c-6.7,10.6-17.1,18.3-32.6,18.3c-14,0-25.1-6.8-33.1-20.4C64.2,82.4,60.4,68.7,59.9,55.4z M40.2,132.6c8.3-11.6,18.1-20.2,29.3-25.8
	c9,10,20.5,15.2,33.9,15.2c13.6,0,25.1-4.9,34-14.3c24.5,13.2,40.2,40.4,48.5,69.9c-1.8-0.4-3.7-0.6-5.6-0.6
	c-3.7,0-7.3,0.8-10.5,2.2l3.1-25.1c0.2-1.3-0.2-2.6-1.1-3.5c-0.9-1-2.1-1.5-3.4-1.5H38.3c-1.3,0-2.5,0.6-3.4,1.5
	c-0.9,1-1.3,2.3-1.1,3.5l3.1,25.1c-3.2-1.4-6.8-2.2-10.5-2.2c-2.2,0-4.4,0.3-6.4,0.8C24,162.7,30.2,146.6,40.2,132.6z M15.8,199H9.6
	c0.1-0.5,0.3-1,0.5-1.5c0.1-0.1,0.1-0.3,0.2-0.4c0.1-0.4,0.3-0.7,0.5-1.1c0.1-0.2,0.1-0.3,0.2-0.5c0.2-0.3,0.4-0.7,0.6-1
	c0.1-0.1,0.1-0.2,0.2-0.4c0.3-0.4,0.5-0.8,0.8-1.2c0,0,0.1-0.1,0.1-0.1c1-1.3,2.2-2.5,3.6-3.5c0,0,0,0,0,0c0.5-0.3,0.9-0.6,1.4-0.9
	l0,0c2.6-1.5,5.6-2.4,8.8-2.4c4.6,0,8.8,1.8,11.9,4.7l1,8.3H15.8z M50.2,212.3l-0.6-4.5l0,0L47,186.7l0,0L43.4,158h119.9l-3.6,28.7
	l0,0l-2.6,21.2l0,0l-0.6,4.5H50.2z M190.6,199h-23.3l1-8.3c3.1-2.9,7.3-4.7,11.9-4.7c3,0,5.8,0.8,8.3,2.1l0,0c0.5,0.3,1,0.6,1.5,0.9
	c0,0,0.1,0.1,0.1,0.1c0.4,0.3,0.8,0.6,1.2,0.9c0.1,0.1,0.2,0.2,0.3,0.3c0.3,0.3,0.7,0.6,1,0.9c0.1,0.1,0.2,0.2,0.3,0.3
	c0.4,0.4,0.7,0.8,1.1,1.2c0,0,0,0,0,0c0.3,0.4,0.7,0.9,1,1.4c0.1,0.1,0.1,0.2,0.2,0.3c0.2,0.3,0.4,0.7,0.6,1.1
	c0.1,0.2,0.2,0.3,0.2,0.5c0.2,0.4,0.3,0.7,0.5,1.1c0.1,0.2,0.1,0.3,0.2,0.5c0.2,0.5,0.4,1,0.5,1.6H190.6z"/>
</svg>

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
             style="background-image:url(<?= asset('images/packages-bg-min.png') ?>);">
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
                                <li>Emails</li>
                            </ul>
                            <div class="card-button-container">
                                <a href="bronze-package.php" class="btn custom-btn red-btn">Get Started</a>
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
                                <a href="silver-package.php" class="btn custom-btn red-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="packages-card">
                            <h3 class="small-title dark-title underline-title">Gold</h3>
                            <span class="card-price"><sup>$</sup>358</span>

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
                                <a href="gold-package.php" class="btn custom-btn red-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
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
                                        * Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Maecenas sed massa fermentum, efficitur mi ac, vulputate velit.
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
                        <h2 class="section-title red-title">Add-ons</h2>

                        <div class="simple-text text-center">
                            <p>Our versatile add-ons are suited to promote your unique enterprise.
                                Options like the New-Biz Starter Pack (Google Business page/Facebook Business Page),
                                Bilingual Site, Google Adwords, Logo Refresh, Translation, Copywriting,
                                Emails and Content Creation focus on reliable publicity to prospective clients.
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
                            <svg version="1.0"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                 x="0px" y="0px" width="31.9px" height="67.5px" viewBox="0 0 31.9 67.5"
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
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <svg version="1.0"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                 x="0px" y="0px" width="44.9px" height="45.9px" viewBox="0 0 44.9 45.9"
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
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <svg version="1.0"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                 x="0px" y="0px" width="43.6px" height="43.6px" viewBox="0 0 43.6 43.6"
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
                        <h3 class="small-title dark-title">GOOGLE ADWORDS</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <svg version="1.0"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                 x="0px" y="0px" width="44px" height="42.9px" viewBox="0 0 44 42.9"
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
                        <h3 class="small-title dark-title">Copywriting &amp; Content Creation</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <svg version="1.0"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                 x="0px" y="0px" width="49.9px" height="35.8px" viewBox="0 0 49.9 35.8"
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
                        <h3 class="small-title dark-title">Logo Refresh</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container d-flex justify-content-center align-items-end">
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                            <svg version="1.0"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                 x="0px" y="0px" width="46.4px" height="30px" viewBox="0 0 46.4 30"
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
                                                <h3 class="small-title">"Fusce a hendrerit metus"</h3>
                                            </div>
                                            <div class="feedback-description">
                                                <p>
                                                    Vivamus sit amet lacinia enim, non tincidunt sem.
                                                    Suspendisse vitae nulla at mauris venenatis pellentesque.
                                                    Sed magna mi, fermentum eget nunc eget,
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-author-block">
                                            <span class="client-name">Client Name</span>
                                            <span class="company-name">Company</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-block">
                                        <div class="feedback-content white-bg">
                                            <div class="feedback-title-block">
                                                <h3 class="small-title">"Fusce a hendrerit metus"</h3>
                                            </div>
                                            <div class="feedback-description">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Duis aliquet, diam in lobortis egestas, nisi enim sagittis quam,
                                                    quis dign issim mauris erat ut massa. Duis quis elit.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-author-block">
                                            <span class="client-name">Client Name</span>
                                            <span class="company-name">Company</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-block">
                                        <div class="feedback-content red-bg">
                                            <div class="feedback-title-block">
                                                <h3 class="small-title">"Fusce a hendrerit metus"</h3>
                                            </div>
                                            <div class="feedback-description">
                                                <p>
                                                    Praesent luctus, mi sit amet tincidunt sollicitudin,
                                                    augue neque facilisis enim, ut semper velit elit non ante.
                                                    Donec felis elit, malesuada non augue at, facilisis porttitor dolor.
                                                    Fusce a hendrerit metus. Praesent porta ultricies elit, sit amet
                                                    convallis
                                                    urna accumsan lobortis. Pellentesque sed efficit.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-author-block">
                                            <span class="client-name">Client Name</span>
                                            <span class="company-name">Company</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="JS--feedback-pagination swiper-pagination"></div>
                        </div>
                        <div class="JS--feedback-next swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.49 31.49"
                                 style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">
<path style="fill:#ffffff;"
      d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
</svg>
                        </div>
                        <div class="JS--feedback-prev swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.494 31.494"
                                 style="enable-background:new 0 0 31.494 31.494;" xml:space="preserve">
<path style="fill:#ffffff;"
      d="M10.273,5.009c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571l-8.047,8.047h26.554  c0.619,0,1.127,0.492,1.127,1.111c0,0.619-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587  c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,5.009z"/>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
</svg>
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
                                        <a href="javascript:void(0);">
                                            <img src="<?= asset('images/robo-cup-slide.png') ?>" alt="test">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-slide-block">
                                        <a href="javascript:void(0);">
                                            <img src="<?= asset('images/otd-slide.png') ?>" alt="test">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-slide-block">
                                        <a href="javascript:void(0);">
                                            <img src="<?= asset('images/yves-hebert-slide.png') ?>" alt="test">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->

                            <div class="JS--portfolio-pagination swiper-pagination"></div>
                        </div>
                        <div class="JS--portfolio-next swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.49 31.49"
                                 style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">
<path style="fill:#7B7B7B;"
      d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
</svg>
                        </div>
                        <div class="JS--portfolio-prev swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.494 31.494"
                                 style="enable-background:new 0 0 31.494 31.494;" xml:space="preserve">
<path style="fill:#7B7B7B;"
      d="M10.273,5.009c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571l-8.047,8.047h26.554  c0.619,0,1.127,0.492,1.127,1.111c0,0.619-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587  c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,5.009z"/>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
</svg>
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
                                    <button class="btn btn-link btn-custom-link collapsed" data-toggle="collapse"
                                            data-target="#JS--collapse-one" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                             x="0px" y="0px" viewBox="0 0 31.49 31.49"
                                             style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">
<path style="fill:#E74138;"
      d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
</svg>
                                        Why do I need a website?
                                    </button>
                                </div>

                                <div id="JS--collapse-one" class="collapse" data-parent="#question-accordion">
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
                                    <button class="btn btn-link btn-custom-link collapsed" data-toggle="collapse"
                                            data-target="#JS--collapse-two" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                             x="0px" y="0px" viewBox="0 0 31.49 31.49"
                                             style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">
<path style="fill:#E74138;"
      d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
</svg>
                                        All of my business is word of mouth, and I am already very busy. Do I need a
                                        website?
                                    </button>
                                </div>

                                <div id="JS--collapse-two" class="collapse" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Accusantium at explicabo modi nulla odio, tenetur voluptates?
                                        A aliquid aspernatur assumenda aut corporis dicta dolorum esse
                                        est eum explicabo iusto magni maxime modi nam nesciunt numquam
                                        pariatur porro quaerat quos, rem sequi suscipit tempora temporibus
                                        voluptates voluptatibus. Dolorem iure placeat qui.
                                    </div>
                                </div>
                            </div>
                            <div class="card questions-card">
                                <div class="question-header" id="heading-three">
                                    <button class="btn btn-link btn-custom-link collapsed" data-toggle="collapse"
                                            data-target="#JS--collapse-three" aria-expanded="true"
                                            aria-controls="collapseThree">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                             x="0px" y="0px" viewBox="0 0 31.49 31.49"
                                             style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">
<path style="fill:#E74138;"
      d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
</svg>
                                        Why should I redo my website?
                                    </button>
                                </div>

                                <div id="JS--collapse-three" class="collapse" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Accusantium at explicabo modi nulla odio, tenetur voluptates?
                                        A aliquid aspernatur assumenda aut corporis dicta dolorum esse
                                        est eum explicabo iusto magni maxime modi nam nesciunt numquam
                                        pariatur porro quaerat quos, rem sequi suscipit tempora temporibus
                                        voluptates voluptatibus. Dolorem iure placeat qui.
                                    </div>
                                </div>
                            </div>
                            <div class="card questions-card">
                                <div class="question-header" id="heading-four">
                                    <button class="btn btn-link btn-custom-link collapsed" data-toggle="collapse"
                                            data-target="#JS--collapse-four" aria-expanded="true"
                                            aria-controls="collapseFour">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                             x="0px" y="0px" viewBox="0 0 31.49 31.49"
                                             style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">
<path style="fill:#E74138;"
      d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
</svg>
                                        Why should I subscribe to a monthly plan if I can just pay for my website all at
                                        once and never pay again?
                                    </button>
                                </div>

                                <div id="JS--collapse-four" class="collapse" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Accusantium at explicabo modi nulla odio, tenetur voluptates?
                                        A aliquid aspernatur assumenda aut corporis dicta dolorum esse
                                        est eum explicabo iusto magni maxime modi nam nesciunt numquam
                                        pariatur porro quaerat quos, rem sequi suscipit tempora temporibus
                                        voluptates voluptatibus. Dolorem iure placeat qui.
                                    </div>
                                </div>
                            </div>
                            <div class="card questions-card">
                                <div class="question-header" id="heading-five">
                                    <button class="btn btn-link btn-custom-link collapsed" data-toggle="collapse"
                                            data-target="#JS--collapse-five" aria-expanded="true"
                                            aria-controls="collapseFive">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                             x="0px" y="0px" viewBox="0 0 31.49 31.49"
                                             style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">
<path style="fill:#E74138;"
      d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
</svg>
                                        Why should I get a website if I am already paying for sponsored placements on
                                        other sites?
                                    </button>
                                </div>

                                <div id="JS--collapse-five" class="collapse" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Accusantium at explicabo modi nulla odio, tenetur voluptates?
                                        A aliquid aspernatur assumenda aut corporis dicta dolorum esse
                                        est eum explicabo iusto magni maxime modi nam nesciunt numquam
                                        pariatur porro quaerat quos, rem sequi suscipit tempora temporibus
                                        voluptates voluptatibus. Dolorem iure placeat qui.
                                    </div>
                                </div>
                            </div>
                            <div class="card questions-card">
                                <div class="question-header" id="heading-six">
                                    <button class="btn btn-link btn-custom-link collapsed" data-toggle="collapse"
                                            data-target="#JS--collapse-six" aria-expanded="true"
                                            aria-controls="collapseSix">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                             x="0px" y="0px" viewBox="0 0 31.49 31.49"
                                             style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">
<path style="fill:#E74138;"
      d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
</svg>
                                        What other fees can I expect from a Ubiweb package?
                                    </button>
                                </div>

                                <div id="JS--collapse-six" class="collapse" data-parent="#question-accordion">
                                    <div class="card-body questions-card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Accusantium at explicabo modi nulla odio, tenetur voluptates?
                                        A aliquid aspernatur assumenda aut corporis dicta dolorum esse
                                        est eum explicabo iusto magni maxime modi nam nesciunt numquam
                                        pariatur porro quaerat quos, rem sequi suscipit tempora temporibus
                                        voluptates voluptatibus. Dolorem iure placeat qui.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--------------------------Contact section--------------------------------------->

    <section class="contact-us" id="about">

        <div class="row align-items-justify no-gutters">
            <div class="col-md-6 col-lg-4 order-1 order-md-1 order-lg-1 red-bg">
                <div class="contact-form-wrapper">
                    <h3 class="small-title white-title">Contact</h3>

                    <p class="form-quote-text">Get your quote today by calling 514-XXX-XXXX <br> or filling in the
                        form below</p>

                    <form action="">
                        <div class="form-field">
                            <input type="text" name="name" id="name" required placeholder="Name *">
                        </div>
                        <div class="form-field">
                            <input type="email" name="email" id="email" required placeholder="E-mail *">
                        </div>
                        <div class="form-field">
                            <input type="text" name="phone" id="phone" required placeholder="Phone Number *">
                        </div>
                        <div class="form-field">
                            <textarea name="message" id="messag" rows="4" placeholder="Message"></textarea>
                        </div>
                        <div class="form-button-container">
                            <input type="submit" class="btn custom-btn white-btn" value="Send">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12 order-md-3 order-3 order-lg-2 col-lg-4">
                <div class="map-wrapper">
                    <div class="map-container">
                        <iframe width="100%" height="450"
                                src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Montreal+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 order-2 order-md-2 order-lg-3 align-self-center">
                <div class="about-us-text-wrapper">
                    <h3 class="small-title red-title">About us</h3>

                    <div class="about-us-text">
                        <p>
                            Ubiweb operates under the parent company "Code Comment" since xxxx.
                            Code Comment recognized a scarcity of custom web solutions for small business owners.
                            Code Comment conceived Ubiweb to meet these business demands. With an archive of over
                            200
                            customers who trust our skilled workmanship, we boast a 94% renewal rate with our
                            clients.
                        </p>

                        <p>
                            We have expanded into 2 locations (Montreal and the South Shore) to offer you
                            flexibility and convenience.
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
</body>
</html>
