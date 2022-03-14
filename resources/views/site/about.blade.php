@extends('layouts.site')
@section('content')
<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>About Us</h2>
				<ul>
					<li><a href="{{route('home')}}">Home</a></li>
					<li><a href="">About Us</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="about_page">
<!-- about Us -->
	<div id="about_us" class="about_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="about_text wow slideInLeft">
						<h2>Welcome to Fashion Shop</h2>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. or randomised words which don't look even slightly believable.</p>
						
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						
						<h3>Contact Us</h3>
						<h2 class="about_contact"><i class="fa fa-volume-control-phone"></i> +91-123-456-7890</h2>
						<a href="#" class="btn">Read More</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="about_images wow slideInRight">
						<img src="{{asset('site/image/about_img-2.jpg')}}" width="100%" alt="silder images" title="silder images">
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- about Us end-->
<!-- Our Astrologers Work for You -->
<div id="website_visitors" class="astrologers-work">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<div class="astrologers_title">
					<h2 class="wow fadeInDown animated">Our Fashion Shop Work for You</h2>
					<p class="wow fadeInDown animated">Our Fashion Shop team delivers daily and monthly Fashion Shop for all readers of our website visitors.</p>
					<p class="wow fadeInDown animated">Recognized as the best esoteric and fashion online in the USA. Every day we publish fresh Fashion Shop, articles by and for professional Fashion Shop, personalized predictions, tarot readings, numerology and Chinese fashion Fashion Shop and much more.</p>
					<p class="wow fadeInDown animated">Our Fashion Shop can help you find a proper approach to solving all daily problems and achieving happiness in your life.</p>
				</div>
			</div>
			
			<div class="col-sm-6">
				<div class="astrologers_visitors">
					<div class="col-sm-6">
						<div class="astrologers_experience">
							<h3 class="wow fadeInDown animated number-counter" data-count-from="0" data-count-to="25" data-count-speed="30"></h3>
							<h5 class="wow fadeInDown animated">Years of experience</h5>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="astrologers_experience">
							<h3 class="wow fadeInDown animated number-counter" data-count-from="0" data-count-to="15" data-count-speed="30"></h3>
							<h5 class="wow fadeInDown animated">Types of best brands</h5>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="astrologers_experience">
							<h3 class="wow fadeInDown animated number-counter" data-count-from="0" data-count-to="17" data-count-speed="30"></h3>
							<h5 class="wow fadeInDown animated">Best Quality</h5>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="astrologers_experience">
							<h3 class="wow fadeInDown animated number-counter" data-count-from="0" data-count-to="1000" data-count-speed="30"></h3>
							<h5 class="wow fadeInDown animated">Hourly Fashion</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Our Services -->
	<div id="services" class="services_section">
		<div class="container-fluid">
			<div class="heading_wrapper wow fadeInDown animated">
				<h2 class="wow fadeInDown animated">Our Services</h2>
				<p class="wow fadeInDown animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="services_matter">
						<img class="wow fadeInDown animated" src="{{asset('site/image/services/services3.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%">
						<h4 class="wow fadeInDown animated"><a href="full_services_page.html">Kundli Dosha</a></h4>
						<p class="wow fadeInDown animated">Contrary to popular belief, Lorem Ipsum is not simply random text</p>
						<a href="full_services_page.html" class="btn wow fadeInDown animated">Read More</a>
					</div>
				</div>
				
				<div class="col-sm-4">
					<div class="services_matter">
						<img class="wow fadeInDown animated" src="{{asset('site/image/services/services2.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%">
						<h4 class="wow fadeInDown animated" ><a href="full_services_page.html">Personal Consultation</a></h4>
						<p class="wow fadeInDown animated" >Contrary to popular belief, Lorem Ipsum is not simply random text</p>
						<a href="full_services_page.html" class="btn wow fadeInDown animated">Read More</a>
					</div>
				</div>
				
				<div class="col-sm-4">
					<div class="services_matter">
						<img class="wow fadeInDown animated" src="{{asset('site/image/services/services1.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%">
						<h4 class="wow fadeInDown animated"><a href="full_services_page.html">Face Reading</a></h4>
						<p class="wow fadeInDown animated">Contrary to popular belief, Lorem Ipsum is not simply random text</p>
						<a href="full_services_page.html" class="btn wow fadeInDown animated">Read More</a>
					</div>
				</div>
				
				<div class="col-sm-4">
					<div class="services_matter">
						<img class="wow fadeInDown animated" src="{{asset('site/image/services/services1.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%">
						<h4 class="wow fadeInDown animated"><a href="full_services_page.html">Face Reading</a></h4>
						<p class="wow fadeInDown animated" >Contrary to popular belief, Lorem Ipsum is not simply random text</p>
						<a href="full_services_page.html" class="btn wow fadeInDown animated">Read More</a>
					</div>
				</div>
				
				<div class="col-sm-4">
					<div class="services_matter">
						<img class="wow fadeInDown animated" src="{{asset('site/image/services/services3.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%">
						<h4 class="wow fadeInDown animated"><a href="full_services_page.html">Kundli Dosha</a></h4>
						<p class="wow fadeInDown animated">Contrary to popular belief, Lorem Ipsum is not simply random text</p>
						<a href="full_services_page.html" class="btn wow fadeInDown animated">Read More</a>
					</div>
				</div>
				
				<div class="col-sm-4">
					<div class="services_matter">
						<img class="wow fadeInDown animated" src="{{asset('site/image/services/services2.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%">
						<h4 class="wow fadeInDown animated" ><a href="full_services_page.html">Personal Consultation</a></h4>
						<p class="wow fadeInDown animated">Contrary to popular belief, Lorem Ipsum is not simply random text</p>
						<a href="full_services_page.html" class="btn wow fadeInDown animated">Read More</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>
<!-- Our Services End -->
<!-- testimonial -->
	<div id="testimonials" class="testimonial_section">
		<div class="container-fluid">
			<div class="heading_wrapper wow fadeInDown animated">
				<h2 class="wow fadeInDown animated">What My Client Says</h2>
				<p class="wow fadeInDown animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
			</div>
				<div class="row">
					<div id="testimonial" class="owl-carousel owl-theme">
						<div class="item">
							<div class="col-sm-12">
								<div class="testimonial_inner_matter">
									<img src="{{asset('site/image/testimonial/1.jpg')}}" class="wow fadeInDown animated">
									<p class="wow fadeInDown animated">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
									<h5 class="wow fadeInDown animated">Shoko Mugikura</h5>
									<h6 class="wow fadeInDown animated">Design Manager</h6>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="col-sm-12">
								<div class="testimonial_inner_matter">
									<img src="{{asset('site/image/testimonial/2.jpg')}}" class="wow fadeInDown animated">
									<p class="wow fadeInDown animated">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
									<h5 class="wow fadeInDown animated">Shoko Mugikura</h5>
									<h6 class="wow fadeInDown animated">Design Manager</h6>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="col-sm-12">
								<div class="testimonial_inner_matter">
									<img src="{{asset('site/image/testimonial/3.jpg')}}" class="wow fadeInDown animated">
									<p class="wow fadeInDown animated">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
									<h5 class="wow fadeInDown animated">Shoko Mugikura</h5>
									<h6 class="wow fadeInDown animated">Design Manager</h6>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="col-sm-12">
								<div class="testimonial_inner_matter">
									<img src="{{asset('site/image/testimonial/4.jpg')}}" class="wow fadeInDown animated">
									<p class="wow fadeInDown animated">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
									<h5 class="wow fadeInDown animated">Shoko Mugikura</h5>
									<h6 class="wow fadeInDown animated">Design Manager</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
<!-- testimonial end -->
</div>
<script>

$(document).ready(function(){
	$('#testimonial').owlCarousel({	
		items: 3,
		itemsDesktop:[1199,3],
		itemsDesktopSmall:[992,3],
		itemsTablet:[768,2],
		itemsMobile:[450,1],
		autoPlay: 10000,
		pagination: true,
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
	});
});
</script>
<!-- script files -->
	<script src="{{asset('site/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('site/js/custom.js')}}"></script>
<!-- script files -->


@endsection
