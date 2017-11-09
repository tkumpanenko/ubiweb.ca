
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ubiWeb Web site Template Gallery</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional Bootstrap theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Dynamically Sorted Portfolio Demo</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Kite+One">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="jquery.quicksand.js"></script>
  <script type="text/javascript" charset="utf-8" src="sorting.js?v=2"></script>
  
  <!--<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>-->
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!--<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<!--[if lt IE 9]-->
  <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<!--[endif]-->
<style>
body{
	font-family: 'Open Sans', sans-serif;
	margin-bottom:0;
	padding-bottom:0;
}
.title
{
  float:left;
  font-size: 40px;
  font-family: sans-serif;
 padding: 50px 30px 50px 80px;

}
.logo
{

  padding: 50px 30px 50px 80px;
  float:left;
}
.gallery
{
 padding: 50px 30px 50px 80px;
}
.right1
{
	float: right;
	
}
.left1
{
	float: left;
	
}

.main-header{
	width: 100%;
  height: auto;
  min-height:100px;
  position:relative;
  
   /*background: 
    top, transparent red 
    linear-gradient(
      rgba(0, 0, 0, 0.5), 
      rgba(0, 0, 0, 0.5)
    ),
     bottom, image 
    url(images/header-bg.jpg);*/
    background-position: bottom;
    background-repeat:no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-color:#E64138;
}
.header{
	padding:20px 0;
}
.header-caption{
	color:#fff;
	font-size:24px;
	text-transform:uppercase;
	font-weight:400;
	padding-top:3%;
}
.list-inline>li{
	margin:3px;
}
.list-inline>li>a{
	font-size:12px;
	padding:5px 10px;
}
footer{
	margin-top:5px;
	padding-top:25px;
	border-top:10px solid #E64138;
}
.copy{
	font-size:11px;
}
</style>


</head>

<body>

<section class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-4"><img src="images/ubiweb-logo-concept.png" alt="ubiWeb Web Site Template Gallery" width="100" ></div>
			
		</div>
	</div>
</section>
<section>
	<div class="container-fluid">
  		<div class="row">
			<div class="main-header text-center">
				<div class="header-caption">Web site Template Gallery</div>
			</div>
		</div>
  	</div>
</section>

<section>	
  <div class="container"> 
  	<h3>Category Selection:</h3>
    <ul id="sort" class="list-inline">
      <li><a href="#" rel="all" class="all selected btn btn-default">All</a></li>
      <li><a href="#" rel="Plumber" class="Plumber btn btn-default">Plumber</a> </li>
      <li><a href="#" rel="roofer" class="roofer btn btn-default">Roofer</a></li>
      <li><a href="#" rel="landscape" class="landscape btn btn-default">Landscaping</a></li>
      <li><a href="#" rel="CR" class="CR btn btn-default">Construction / Renovations</a> </li>
      <li><a href="#" rel="HA" class="HA btn btn-default">Heating & Air Conditioning Contractor</a></li>
      <li><a href="#" rel="HC" class="HC btn btn-default">Health Centre</a></li>
      <li><a href="#" rel="GT" class="GT btn btn-default">General Mechanic / Tire Retailer</a> </li>
      <li><a href="#" rel="LN" class="LN btn btn-default">Lawyer / Notary</a></li>
      <li><a href="#" rel="ac" class="ac btn btn-default">Accountant</a></li>
      <li><a href="#" rel="Dentist" class="Dentist btn btn-default">Dentist</a></li>
	</ul>
	</div>
</section>
<section>
	<div class=gallery>
    <ul class="portfolio clearfix">
    
	  <li data-id="id-1" class="Plumber"><a href="profile.php?link=https://www.webfulcreations.com/envato/plumber_template/&name=Plumber 1  " target="_blank"><img src="images/plumber.png" class="portimg"></a></li>
<!--https://themeforest.net/item/plumber-construction-and-plumber-html-template/20451679?s_rank=1-->

      <li data-id="id-2" class="roofer"><a href="profile.php?link=https://devitems.com/html/shield-preview/shield/index.html" target="_blank"><img src="images/roofer.png" class="portimg"></a></li>
<!-- https://themeforest.net/item/shield-roofing-service-html-template/20416243?s_rank=4 -->

      <li data-id="id-3" class="landscape"><a href="profile.php?link=http://demos.pixelatethemes.com/landscaping/Default_demo/&name=Landscape1" target="_blank"><img src="images/landscape.png" class="portimg"></a></li>
<!--  https://themeforest.net/item/lanscape-gardening-html-template/17689207?s_rank=4 -->

     <li data-id="id-4" class="Plumber"><a href="profile.php?link=http://www.flexionzone.com/plumber/&name=Plumber 2  " target="_blank"><img src="images/plomber2.png" class="portimg"></a></li>
<!--  http://preview.themeforest.net/item/plumber-company-html-template/full_screen_preview/19589531?_ga=2.88142803.955255831.1506350575-1511162095.1506350575 -->

      <li data-id="id-5" class="roofer"><a href="profile.php?link=http://takethemes.net/takethemes/solarize/version2/&name=Roofer 2 " target="_blank"><img src="images/roofer2.png" class="portimg"></a></li>
<!-- https://themeforest.net/item/solarize-multipurpose-small-business-html-template/13318550?s_rank=5  -->
      <li data-id="id-6" class="roofer"><a href="profile.php?link=https://www.multipurposethemes.com/html-templates/auragroup/&name=Roofer 3  " target="_blank"><img src="images/roofer3.jpg" class="portimg"></a></li>
<!-- http://preview.themeforest.net/item/aura-construction-contractor-renovation-responsive-html-template/full_screen_preview/20255555?_ga=2.87171024.955255831.1506350575-1511162095.1506350575  -->
      
	  <li data-id="id-7" class="landscape"><a href="profile.php?link=http://demos.pixelatethemes.com/landscaping/Demo_3/index.html&name=Landscape 2  " target="_blank"><img src="images/landscape2.jpg" class="portimg"></a></li>
<!--  https://themeforest.net/item/plumber-construction-and-plumber-html-template/20451679?s_rank=1  -->

      <li data-id="id-9" class="Plumber"><a href="profile.php?link=http://wp1.themexlab.com/html/plumberX/plumberx/header-v1.html&name=Plumber 3  " target="_blank"><img src="images/plumber3.png" class="portimg"></a></li>
<!--  https://themeforest.net/item/plumberx-plumber-and-construction-html-template/12165154?s_rank=4 -->


      <li data-id="id-8" class="landscape"><a href="profile.php?link=http://kodesolution.com/demo/corporate/landscaping/v3.0/demo/index-mp-layout2.html&name=Landscape 3  " target="_blank"><img src="images/landscape3.png" class="portimg"></a></li>
<!--  http://preview.themeforest.net/item/landscaping-gardening-lawn-landscape-html5-template/full_screen_preview/16073476?_ga=2.188824803.955255831.1506350575-1511162095.1506350575  -->

     <li data-id="id-10" class="CR"><a href="profile.php?link=http://quanticalabs.com/Renovate/Template/&name=Construction / Renovations 1  " target="_blank"><img src="images/CR.png" class="portimg"></a></li>
<!--  https://themeforest.net/item/renovate-construction-renovation-template/11313006?s_rank=1  -->

     <li data-id="id-11" class="HA"><a href="profile.php?link=https://wporganic.com/theme/ac-repair/&name=Heating and Air Conditioning Contractor 1  " target="_blank"><img src="images/air.png" class="portimg"></a></li>
<!--  http://preview.themeforest.net/item/air-conditioner-hvac-repair-wordpress-theme/full_screen_preview/19329221?_ga=2.180982255.955255831.1506350575-1511162095.1506350575 -->


     <li data-id="id-10" class="CR"><a href="profile.php?link=http://themexriver.com/royal-construction/one-page/style-2/royal-construction/&name=Construction / Renovations 2  " target="_blank"><img src="images/CR2.png" class="portimg"></a></li>
<!--  http://preview.themeforest.net/item/construction-construction-building-construction-renovation-template/full_screen_preview/19936741?_ga=2.144635773.955255831.1506350575-1511162095.1506350575 -->

      <li data-id="id-12" class="HA"><a href="profile.php?link=http://webdesign-finder.com/html/aircool/&name=Heating and Air Conditioning Contractor 2  " target="_blank"><img src="images/air2.png" class="portimg"></a></li>
<!-- https://themeforest.net/item/aircool-conditioning-and-heating-html-template-with-visual-builder/20177588?s_rank=1  -->


      <li data-id="id-10" class="CR"><a href="profile.php?link=http://growscales.com/html/builder/home-v7.html&name=Construction / Renovations 3  " target="_blank"><img src="images/CR3.png" class="portimg"></a></li>
<!--  http://preview.themeforest.net/item/builder-construction-renovation-templates/full_screen_preview/19912176?_ga=2.185441377.955255831.1506350575-1511162095.1506350575  -->


      <li data-id="id-13" class="HA"><a href="profile.php?link=http://steelthemes.com/demo/html/Aircare/&name=Heating and Air Conditioning Contractor 3  " target="_blank"><img src="images/air3.png" class="portimg"></a></li>
<!--  https://themeforest.net/item/air-care-html-template-for-heating-and-air-conditioning-maintenance-services/20011905?s_rank=3 -->
      
	  <li data-id="id-14" class="HC"><a href="profile.php?link=http://themesfoundry.net/demo/html/columba/&name=Health Centre 1  " target="_blank"><img src="images/HC.png" class="portimg"></a></li>
      <!-- http://preview.themeforest.net/item/columba-medical-html-template-for-doctors-dentists-medical-store/full_screen_preview/20599521?_ga=2.188757219.955255831.1506350575-1511162095.1506350575  -->
	  
	  <li data-id="id-14" class="HC"><a href="profile.php?link=http://zocksolutions.com/health/&name=Health Centre 2  " target="_blank"><img src="images/hc2.png" class="portimg"></a></li>
      <!--  https://themeforest.net/item/health-health-and-medical-care/19890481?s_rank=1 -->
	  
	  <li data-id="id-14" class="HC"><a href="profile.php?link=http://eyecix.com/html/careplus/index.html&name=Health Centre 3  " target="_blank"><img src="images/hc3.png" class="portimg"></a></li>
<!-- https://themeforest.net/item/health-careplus-medical-and-health-template/20353108?s_rank=2  -->


      <li data-id="id-14" class="GT"><a href="profile.php?link=http://quanticalabs.com/Carservice/Template/&name=General Mechanic / Tire Retailer 1  " target="_blank"><img src="images/gt.png" class="portimg"></a></li>
      <!--  https://themeforest.net/item/car-service-mechanic-auto-shop-template/12332985?s_rank=1 -->
	  
	  
	  <li data-id="id-14" class="GT"><a href="profile.php?link=http://wp.hostlin.com/Canggang-car/&name=General Mechanic / Tire Retailer 2  " target="_blank"><img src="images/gt2.png" class="portimg"></a></li>
      <!--  https://themeforest.net/item/canggang-auto-mechanic-car-repair-template/20268892?s_rank=2  -->
	  
	  
	  <li data-id="id-14" class="GT"><a href="profile.php?link=http://wp1.themexlab.com/html/carshire/&name=General Mechanic / Tire Retailer 3  " target="_blank"><img src="images/gt3.png" class="portimg"></a></li>
<!-- https://themeforest.net/item/car-shire-auto-mechanic-car-repair-template/12315477?ref=template_path  -->
      
	  <li data-id="id-14" class="ac"><a href="profile.php?link=http://themes.audemedia.com/html/goodgrowth/&name=Accountant 1  " target="_blank"><img src="images/ac.png" class="portimg"></a></li>
      <!-- https://themeforest.net/item/goodgrowth-finance-accounting-html-template/15406296?s_rank=2  -->
	  
	  
	  <li data-id="id-14" class="ac"><a href="profile.php?link=http://corpthemes.com/html/finance/&name=Accountant 2  " target="_blank"><img src="images/ac2.png" class="portimg"></a></li>
      <!--  https://themeforest.net/item/finance-consulting-accounting-html-template/20195576?s_rank=1  -->
	  
	  <li data-id="id-14" class="ac"><a href="profile.php?link=http://adviser-html.axiomthemes.com/&name=Accountant 3  " target="_blank"><img src="images/ac3.png" class="portimg"></a></li>
        <!-- https://themeforest.net/item/adviser-finance-accounting-html-theme/13851017?s_rank=3  -->

      <li data-id="id-14" class="LN"><a href="profile.php?link=http://thewebdeals.com/html/Lawyer/Home2.html&name=Lawyer 1  " target="_blank"><img src="images/lawyer.png" class="portimg"></a></li>
      <!-- https://themeforest.net/item/a-lawyer-lawyers-html-template/14204520?s_rank=1  -->
	  <li data-id="id-14" class="LN"><a href="profile.php?link=http://html.crunchpress.com/lawyer-pro/&name=Lawyer 2  " target="_blank"><img src="images/ln2.png" class="portimg"></a></li>
     <!--  https://themeforest.net/item/lawyer-pro-responsive-site-template-for-lawyers/13003065?s_rank=2 -->
	 
	 <li data-id="id-14" class="LN"><a href="profile.php?link=http://techlinqs.com/html/lawyer-0.1/&name=Lawyer 3  " target="_blank"><img src="images/ln3.png" class="portimg"></a></li>
      <!--  https://themeforest.net/item/lawyer-law-law-firm-lawyer-html-template/19830372?s_rank=3 -->
      
	  <li data-id="id-8" class="Dentist"><a href="profile.php?link=http://fvdthemes.com/html/dentalclinic/&name=Dentist 1 " target="_blank"><img src="images/dentist2.png" class="portimg"></a></li>
      <!--  https://themeforest.net/item/dentalclinic-responsive-clinic-html-template/17390217?s_rank=4 -->
	  
	  
	  <li data-id="id-8" class="Dentist"><a href="profile.php?link=http://themesflat.com/html/medicare/&name=Dentist 2  " target="_blank"><img src="images/dentist.png" class="portimg"></a></li>
     <!-- https://themeforest.net/item/medicare-dentist-medical-html5-template/15254028?s_rank=2  -->
	 
	 <li data-id="id-8" class="Dentist"><a href="profile.php?link=http://themes.a3devs.com/tf/html/dentalhome/&name=Dentist 3  " target="_blank"><img src="images/dentist3.png" class="portimg"></a></li>
	  <!--  https://themeforest.net/item/dentalhome-health-medical-and-dentist-html5-template/19857822?s_rank=1  -->

</div>
</section>
<footer>
	<div class="container-fluid text-center">
		<p class="copy"><a href="http://www.ubiweb.ca">ubiWeb.ca</a> Website Template Gallery</p>
	</div>
</footer>
</body>
</html>
