<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>
    {{ $title ?? 'home'}}
    </title>
    <style>
      .font_set{
        font-size: large;
      }
      .search-form {
          display: flex; /* Use flexbox to align items */
          align-items: center; /* Center items vertically */
          border-radius: 25px; /* Rounded corners */
          overflow: hidden; /* Prevent content overflow */
          background-color: #ffffff; /* White background for the search bar */
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
      }

      .search-form .form-control {
          border: none; /* Remove default border */
          border-radius: 25px 0 0 25px; /* Rounded corners on the left */
          padding: 10px 15px; /* Add padding */
          font-size: 16px; /* Increase font size */
      }

      .search-form .btn {
          border: none; /* Remove default border */
          border-radius: 0 25px 25px 0; /* Rounded corners on the right */
          background-color: #28a745; /* Bootstrap success color */
          color: white; /* Text color */
          padding: 10px 20px; /* Add padding */
          font-size: 16px; /* Increase font size */
          transition: background-color 0.3s, transform 0.3s; /* Smooth transition */
      }

      .search-form .btn:hover {
          background-color: #218838; /* Darker green on hover */
          transform: scale(1.05); /* Slightly enlarge on hover */
      }

      .search-form .form-control:focus {
          outline: none; /* Remove outline on focus */
          box-shadow: 0 0 5px rgba(40, 167, 69, 0.5); /* Shadow effect on focus */
      }
    </style>
  </head>
  <body class="goto-here">
		<div class="py-1 bg-black" style="height:45px">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex" style="margin-top:10px">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
@include('layouts.navbar')
	{{ $slot }}
@include('layouts.footer')
  <!-- loader -->
   
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('assets/js/google-map.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
    
  </body>
</html>