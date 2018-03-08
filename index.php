<?php require_once("app/init.php"); ?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Barebones</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="<?= asset('styles/main.css') ?>">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

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
                                <p>We are a marketing firm specializing in website creation and getting your business
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
                                <img src="" alt="">
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
                                <img src="" alt="">
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
                                <img src="" alt="">
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
                                <img src="" alt="">
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

    <section class="packages-section" style="background-image:url(<?= asset('images/packages-bg.jpg') ?>);">
        <div class="packages-overlay"></div>
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
            <div class="packages-slider-container">
                <div class="row">
                    <div class="col-12">
                        <div class="JS--packages-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
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
                                            <button class="btn custom-btn red-btn">Get Started</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
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
                                            <button class="btn custom-btn red-btn">Get Started</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
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
                                            <button class="btn custom-btn red-btn">Get Started</button>
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


    <!------------------------Guarantee section------------------------------------>

    <section class="guarantee-section">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-guarantee-text">
                        <div class="row justify-content-end">
                            <div class="col-lg-6">
                                <div class="guarantee-title-wrapper">
                                    <h2 class="guarantee-title">90<br>day</h2>

                                    <h3 class="guarantee-subtitle">guarantee to <br> find your name</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="promise-text-block">
                        <div class="row">
                            <div class="col-lg-6">
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
    <section class="addons">
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
                        <div class="icon-container">
                            <img src="" alt="">
                        </div>
                        <h3 class="small-title dark-title">NEW-BIZ STARTER PACK</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container">
                            <img src="" alt="">
                        </div>
                        <h3 class="small-title dark-title">Translation &amp; Bilingual Site</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container">
                            <img src="" alt="">
                        </div>
                        <h3 class="small-title dark-title">GOOGLE ADWORDS</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container">
                            <img src="" alt="">
                        </div>
                        <h3 class="small-title dark-title">Copywriting &amp; Content Creation</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container">
                            <img src="" alt="">
                        </div>
                        <h3 class="small-title dark-title">Logo Refresh</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-text-block">
                        <div class="icon-container">
                            <img src="" alt="">
                        </div>
                        <h3 class="small-title dark-title">Emails</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--------------------------Feedback section------------------------------------------>

    <section class="feedback-section" style="background-image:url(<?= asset('images/feedback-bg-min.jpg') ?>); ">
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
                                                    Fusce a hendrerit metus. Praesent porta ultricies elit, sit amet convallis
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
                        <div class="JS--feedback-next swiper-button-next"></div>
                        <div class="JS--feedback-prev swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-----------------------Portfolio section-------------------------------->

    <section class="portfolio-section">
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
                                            <img src="<?= asset('images/RoboCup.png') ?>" alt="test">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-slide-block">
                                        <a href="javascript:void(0);">
                                            <img src="<?= asset('images/OTD.png') ?>" alt="test">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-slide-block">
                                        <a href="javascript:void(0);">
                                            <img src="<?= asset('images/Yves-Hebert.png') ?>" alt="test">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->

                            <div class="JS--portfolio-pagination swiper-pagination"></div>
                        </div>
                        <div class="JS--portfolio-next swiper-button-next"></div>
                        <div class="JS--portfolio-prev swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!----------------------Questions section--------------------------------->
    <section class="questions-section">
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
                                <div class="question-header" id="headingOne">
                                    <button class="btn btn-link btn-custom-link collapsed" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Why do I need a website?
                                    </button>
                                </div>

                                <div id="collapseOne" class="collapse" data-parent="#question-accordion">
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
                                <div class="question-header" id="headingTwo">
                                    <button class="btn btn-link btn-custom-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        All of my business is word of mouth, and I am already very busy. Do I need a
                                        website?
                                    </button>
                                </div>

                                <div id="collapseTwo" class="collapse" data-parent="#question-accordion">
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
                                <div class="question-header" id="headingThree">
                                    <button class="btn btn-link btn-custom-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                        Why should I redo my website?
                                    </button>
                                </div>

                                <div id="collapseThree" class="collapse" data-parent="#question-accordion">
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
                                <div class="question-header" id="headingFour">
                                    <button class="btn btn-link btn-custom-link collapsed" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="true"
                                            aria-controls="collapseFour">
                                        Why should I subscribe to a monthly plan if I can just pay for my website all at
                                        once and never pay again?
                                    </button>
                                </div>

                                <div id="collapseFour" class="collapse" data-parent="#question-accordion">
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
                                <div class="question-header" id="headingFive">
                                    <button class="btn btn-link btn-custom-link collapsed" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="true"
                                            aria-controls="collapseFive">
                                        Why should I get a website if I am already paying for sponsored placements on
                                        other sites?
                                    </button>
                                </div>

                                <div id="collapseFive" class="collapse" data-parent="#question-accordion">
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
                                <div class="question-header" id="headingSix">
                                    <button class="btn btn-link btn-custom-link collapsed" data-toggle="collapse"
                                            data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        What other fees can I expect from a Ubiweb package?
                                    </button>
                                </div>

                                <div id="collapseSix" class="collapse" data-parent="#question-accordion">
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

</main>


<!-------------------------Footer------------------------------------>
<footer>
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
<script src="/src/scripts/swiper.min.js"></script>
<script src="<?= asset('scripts/main.js') ?>"></script>
</body>
</html>
