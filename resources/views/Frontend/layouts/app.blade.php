<!DOCTYPE html>
<html lang="en">
<head>
    <title>Burj Arab Food Stuff Trading</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/style.css') }}">
</head>

<body class="goto-here">
  
    <div style="position: fixed; bottom: 20px; left: 30px;">
        <a href="https://wa.me/1234567890" target="_blank">
            <img src="{{ asset('frontend-assets/assets/img/123.png') }}" alt="WhatsApp Icon" style="width: 50px; height: 50px;">
        </a>
    </div>
    
    

    @include('Frontend.layouts.topbar')
    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('{{ asset('frontend-assets/assets/images/hero.jpg') }}');">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">Welcome To Burj Arab Food Stuff Trading Company</h1>
	              <h2 class="subheading mb-4">Indulge your taste buds with Burj Arab Food Stuff Trading

                </h2>
	              <p><a href="#" class="btn btn-primary">Click here</a></p>
	            </div>

	          </div>
	        </div>
	      </div>

        <div class="slider-item" style="background-image: url('{{ asset('frontend-assets/assets/images/bg_2.jpg') }}');">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
	              <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
        
	    </div>
      <div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over $100</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Always Fresh</h3>
                <span>Product well package</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
    </section>
    @yield('content')
    @include('Frontend.layouts.footer')

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <script src="{{ asset('frontend-assets/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/aos.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('frontend-assets/assets/js/google-map.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/main.js') }}"></script>
</body>

</html>
