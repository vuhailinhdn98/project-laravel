<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fashion Shop | 404 page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('site/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('site/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('site/css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('site/vendor/owl.carousel/assets/owl.carousel.css')}}"> 
	<link rel="stylesheet" href="{{asset('site/vendor/wow/animate.css')}}"> 

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="{{asset('site/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('site/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('site/vendor/wow/wow.min.js')}}"></script>
	<script>
	new WOW().init();
	  wow = new WOW(
		{
		  boxClass:     'wow',      // default
		  animateClass: 'animated', // default
		  offset:       0,          // default
		  mobile:       true,       // default
		  live:         true        // default
		}
		)
		wow.init();
	</script>
	
</head>
<body>
	<div id="content" class="404page">
		<div class="container-fluid">
			<div class="row">
				<div class="not_found">
						<a href="index.html">
							<img src="{{asset('site/image/logo/logo.png')}}" alt="logo">
						</a>
						
					  <h2>page not found</h2>
					  <h1 class="font-accent">4<span>0</span>4</h1>
					  <p>The page requested couldn't be found - this could be due to a spelling error in the URL or a removed page.</p>
					  <div class=""><a class="btn " href="index.html">back to home page</a></div>
				</div>
			</div>
		</div>
    </div>
	
	<div class="footer_copyright">
		<div class="container-fluid">
			<p class="wow fadeInDown animated">© Copyright 2020 by Horoscope. All right Reserved - Design By <a href="https://www.templatebazaar.in/" target="_blank">Template bazaar</a></p>
		</div>
	</div>

<!-- Footer Section End -->

<!-- script files -->
	<script src="{{asset('site/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('site/js/custom.js')}}"></script>
<!-- script files -->
</body>
</html>
