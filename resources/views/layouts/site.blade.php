<!DOCTYPE html>
<html lang="en">
<head>
</head>
    @include('layouts.site_head')
<body>
<header class="header-area">
	<!-- Top Header -->
        @include('layouts.site_header')
	<!-- End Top Header -->

	<!-- Start Navbar Area -->
        @include('layouts.site_navbar')
    <!-- End Navbar Area --> 
<div id="search" class="input-group header">
	<span class="close">x</span>
		<form>
			<input value="" name="search" type="search" placeholder="Search">
			 <span class="input-group-btn">
				<button type="button" class="btn"><i class="fa fa-search"></i></button>
			</span>
			<div class="clear"></div>
		</form>
</div>	
</header>
<!-- Header End -->

<!-- Main -->
    @yield('content')
<!-- Main End -->

<!-- Footer Section -->
    @include('layouts.site_footer')
<!-- Footer Section End -->
<!-- back-to-top scrtion -->
<div class="top_button">
  <a class="back-to-top" style="cursor:pointer;" id="top-scrolltop"><i class="fa fa-angle-up"></i></a>
</div>
<!-- back-to-top scrtion End-->
</body>
</html>
