<?php 
require_once "../phpinc/config.php"; 
require_once "../phpinc/functions.php"; 
//set cookie promo code

$form_thin = false;

if (isset($_GET['f'])) { 
	$fname = $_GET['f'];
	$form_thin = true;
	setcookie('fname', $fname, time() + (86400 * 7), "/"); // 86400 = 1 day
	
	} else if (isset($_COOKIE['fname'])) {
		$fname = $_COOKIE['fname'];
	} 
	
if (isset($_GET['l'])) { 
	$lname = $_GET['l'];
	setcookie('lname', $lname, time() + (86400 * 7), "/"); // 86400 = 1 day
	} else if (isset($_COOKIE['lname'])) {
		$lname = $_COOKIE['lname'];
	}

if (isset($fname) && ($lname)) {
		$full_name = ($fname.' '.$lname);
	} else { 
		$full_name = $fname;
	}
	
if (isset($_GET['e'])) { 
	$email = $_GET['e'];
	$form_thin = true;
	setcookie('email', $email, time() + (86400 * 7), "/"); // 86400 = 1 day	
	
	} else if (isset($_COOKIE['email'])) {
		$email = $_COOKIE['email'];
	} 
	
if (isset($_GET['p3'])) { 
	$phone = $_GET['p3'];
	setcookie('phone', $phone, time() + (86400 * 7), "/"); // 86400 = 1 day
	} else if (isset($_COOKIE['phone'])) {
		$phone = $_COOKIE['phone'];
	} 
			
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">
<title>CENTRAL EQUITY - 3 Bedroom  Skyhomes</title>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/glyphicons.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- Custom styles for this template -->
<link href="css/luxury.css" rel="stylesheet" type="text/css">
<link href="css/animation.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
<section id="stage">
  <nav class="navbar navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
      <img src="images/skyhomes.png" alt="Skyhomes" class="logo"/> 
    <a href="#contact" class="btn btn-solid-enq btn-rounded go_enquire">ENQUIRE</a> </div></div>
  </nav>
  <div id="heroslides" class="heroslides cycle-slideshow" 
  	data-cycle-fx="fadeout" 
    data-cycle-speed="1000" 
    data-cycle-timeout="6000" 
    data-cycle-slides="> div" 
    data-cycle-prev="#heroslides_prev" 
    data-cycle-next="#heroslides_next">
    <div class="hero">
      <div class="words active-words">
        <div class="container">
          <h1>experience</h1>
          <h2>the finer things</h2>
        </div>
      </div>
      <div class="heroslides motion" style="background-image:url(images/slider/m1p.jpg)"></div>
    </div>
    <div class="hero">
      <div class="words">
        <div class="container">
          <h1>Live</h1>
          <h2>on top of the world</h2>
        </div>
      </div>
      <div class="heroslides " style="background-image:url(images/slider/view.jpg)"></div>
    </div>
    <div class="hero">
      <div class="words">
        <div class="container">
          <h1>inner-city </h1>
          <h2>living at its finest</h2>
        </div>
      </div>
      <div class="heroslides " style="background-image:url(images/slider/bed.jpg)"></div>
    </div>
  </div>
  <div id="heroslides_controlls" class="heroslides_controlls">
    <div id="heroslides_next"><span class="glyphicons glyphicons-chevron-right"></span></div>
    <div id="heroslides_prev"><span class="glyphicons glyphicons-chevron-left"></span></div>
  </div>
</section>
<div id="page">
  <section id="statement">
    <div class="container">
      <div class="row ">
        <div class="col-lg-7">
          <h1 class="col-smoke"> <strong>
            <?php 
            if (isset($fname)){ echo $fname.', welcome'; } 
			else { echo 'Welcome'; }
            ?>
            </strong> to the peak of inner-city living. </h1>
          <p>We’re pleased to introduce these spectacular 3 bedroom residences featuring sky-high views and stunning interior design. Priced from $1.49M for the ultimate inner-city lifestyle.</p>
        </div>
        <div class="col-sm-3 col-lg-4 col-lg-offset-1"> <img src="images/skyhome-by-ce.png"  class="img-responsive hidden-xs" alt=""/> </div>
      </div>
    </div>
  </section>
  <section id="listings" class="col-flat-bg col-flat-bg-30">
    <div class="container listing">
      <?php 
	  $lotid = "aus_4503p3"; 
	  include_once('listings/aus_4503p3/index.php'); ?>
    </div>
    <div class="container listing">
      <?php
	  $lotid = "aus_4502p2";
	  include('listings/aus_4502p2/index.php'); ?>
    </div>
    <div class="container listing">
      <?php
	  $lotid = "m1_4503ph3";
	  include('listings/m1_4503ph3/index.php'); ?>
    </div>
    <div class="container listing">
      <?php
	  $lotid = "m1_4501ph1";
	  include('listings/m1_4501ph1/index.php'); ?>
    </div>
    <div class="container listing">
      <?php
	  $lotid = "sbc_4703z"; 
	  include('listings/sbc_4703z/index.php'); ?>
    </div>
  </section>
  <section id="contact" class="formsection dark_bg white paddit">
    <div class="container">
      <div class="row formsection-m">
        <div class="col-md-5 col-smoke-bg phone-box"> <img src="images/skyhomes.png" class="img-responsive hidden-xs" alt="" style="max-width:200px; "/>
          <h1 class="col-enq" >Private inspections.</h1>
          <p>Choose a day that suits you. Simply contact one of our experienced consultants for more info or complete the form shown.</p>
          <div class="row">
            <div class="col-xs-6">
              <h2 class="">Ray</h2>
              <p class="lead text-nowrap white center-block"><span class="glyphicons glyphicons-iphone"></span> 0422 113 738</p>
            </div>
            <div class="col-xs-6">
              <h2 class="">Jen</h2>
              <p class="lead text-nowrap white center-block"><span class="glyphicons glyphicons-iphone"></span> 0414 554 992</p>
            </div>
          </div>
          <hr class="" style="padding-top:0em; padding-bottom:1.6em; opacity:0.1">
          <h3 class="">Display Centres Open 7 Days</h3>
          <p>&bull; <strong>560 Lonsdale St</strong>, Melbourne - <small><a class="" href="https://goo.gl/maps/GEFJWBEUZFK2" target="_blank" style="padding-right:1em;">Google Map<span class="glyphicons glyphicons-google-maps"></span></a></small></p>
          <p>&bull; <strong>171 City Rd</strong>, Southbank - <small><a href="https://goo.gl/maps/Jx3cMskaeYv">Google Map<span class="glyphicons glyphicons-google-maps"></span></a></small></p>
          <p ></p>
          <p class=""><span class="text-nowrap">Mon to Fri: 10am-5pm</span> &bull; <span class="text-nowrap">Weekends: 11am-5pm</span></p>
        </div>
        <div id="sky_form" class="sky_form col-md-6 col-md-offset-1 ">
          <div class="form_styling kaff_bg" data-sr='enter top'>
            <?php	
				if ($form_thin === true){
					include_once('form_thin.php');
				} else {				
					include_once('form_full.php');
				}		
			?>
            <div id="sky_form_message" class="">
              <div id="no_appoint">
                <h1 class="white"><span class="">Thank you</span> for contacting us.</h1>
                <p >A Central Equity consultant will reply shortly. Visit our <a style="text-decoration:underline;" href="http://www.centralequity.com.au<?php if (isset($_GET["id"])) { echo '/?id='.$_GET['id']; }?>" target="_blank" class="white">home page</a> for more info on<strong> Central Equity</strong>.</p>
                <p class="lead">Our on-site display is open 7 days. <br>
                  Visit us today at <strong>560 Lonsdale Street, Melbourne</strong></p>
                <p>If you requested further information we will send it to you shortly.</p>
              </div>
              <div class="response"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <?php include_once( "footer.php")?>
  </footer>
</div>
<!-- /container --> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/jquery.cycle2.min.js"></script> 
<script src="js/jquery.ba-resize.min.js"></script> 
<script src="js/jquery.scrollTo.min.js"></script> 
<script src="js/jquery.cycle2.swipe.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK5ULkii2bbjQklG2aiyNr4lDfoY5aocQ"></script> 
<script src="js/common2.js" type="text/javascript"></script> 
<script>
$(document).ready(function(){ 

	$('#submit_enq').on('click', function () {
    if ($("#sky_enqform").valid()) {

    $("#submit_enq").attr("disabled", true);
    $("#submit_enq span.glyphicons").addClass("glyphicons-pause");

    $.ajax({ // create an AJAX call...
      data: $('#sky_enqform').serialize(), // get the form data
      type: 'POST', // GET or POST
      url: $('#sky_enqform').attr('action'), // the file to call
      success: function (response) {		  
		dataLayer.push({'event': 'formSuccess'}); //the gtm push event
		console.log({'event': 'formSuccess'});
        $('#sky_form_message').show(); // on success..
        $("#sky_enqform").hide();        
        $('#sky_form_message .response').html(response); // update the DIV        
        }
      });
      return false; // cancel original event to prevent form submitting
    }
  });

  });

  $('#sky_enqform').validate({
    rules: {
      Full_Name_101: {
        minlength: 6,
        maxlength: 55,
        required: true
      },
      Email: {
        required: true,
        email: true
      },
      Mobile_Phone_104: {
        minlength: 3,
        maxlength: 25,
        required: true
      },
      How_Did_You_Hear: {
        required: true
      },
      Country_204: {
        required: true
      }
    },
    ignore: [],
    highlight: function (element) {
      $(element).closest('.form-group').addClass('has-error');
	},
    unhighlight: function (element) {
      $(element).closest('.form-group').removeClass('has-error');
	},
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function (error, element) {
      if (element.parent('.input-group').length) {
        error.insertAfter(element.parent());} else {
        error.insertAfter(element);}
    }
    
  });
  
  
$('.mapcanvas').each(function() {

    var geoCode = new google.maps.Geocoder(), 
    container = this;

    geoCode.geocode({'address': $(container).data('address')}, function(results, status) {
    var start_options = 0;

    if (status == google.maps.GeocoderStatus.OK) {
         var mapOptions = {
             zoom: 16,
             center: new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()),
             zoomControl: true,
             scaleControl: false,
             scrollwheel: false,
             disableDefaultUI: true,
             mapTypeId: google.maps.MapTypeId.ROADMAP,

         }

         if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android|Blackberry|Windows Phone|Nokia|HTC|webOS)/)) {
                 mapOptions.draggable=false;
        }

        var map = new google.maps.Map(container, mapOptions);

        var center = map.getCenter();

        $(window).resize(function() {
            // (the 'map' here is the result of the created 'var map = ...' above)
           google.maps.event.trigger(map, "resize");
        });

        $('.cycle-slideshow').resize(function(e){
          $(window).resize();
          map.setCenter(center);

        });

        var marker = new google.maps.Marker({
            position: results[0].geometry.location,
            animation: google.maps.Animation.DROP,
            map: map,
            title: $(this).data('itemTitle')
        });

        google.maps.event.addListener(marker, 'click', toggleBounce);

        function toggleBounce() {
              if (marker.getAnimation() != null) {
                marker.setAnimation(null);
              } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
              }
        }

        var center;
        function calculateCenter() {
            center = map.getCenter();
        }

        google.maps.event.addDomListener(map, 'idle', function() {
            calculateCenter();
        });

        google.maps.event.addDomListener(window, 'resize', function() {
            map.setCenter(center);
        });
		 
    } else {
        $(this).parent().hide();
    }
	
	});
		  
}); 
</script> 
<script>
	dataLayer = [];
</script> 
<!-- Google Tag Manager -->
<noscript>
<iframe src="//www.googletagmanager.com/ns.html?id=GTM-TVGGP5"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TVGGP5');</script> 
<!-- End Google Tag Manager -->
</body>
</html>
