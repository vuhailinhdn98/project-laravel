@extends('layouts.site')
@section('content')

<!-- slider -->

<section>
	<div id="slideWiz" class="slideWiz" style="width: 100%; height: 500px;">
<!-- <div class="slide-container">
    <div class="slide-holder">
        <div class="slice" style="width: 43.4057px; top: 0px;">
        <img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: 0px;">
    </div>
    <div class="slice" style="width: 43.4057px; top: 0px;">
        <img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -43.4057px;">
    </div>
    <div class="slice" style="width: 43.4057px; top: 0px;">
    <img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -86.8114px;">
</div>
<div class="slice" style="width: 43.4057px; top: 0px;">
<img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -130.217px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -173.623px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -217.029px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -260.434px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -303.84px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -347.246px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -390.651px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -434.057px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -477.463px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -520.869px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -564.274px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -607.68px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -651.086px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -694.491px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -737.897px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -781.303px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -824.709px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -868.114px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -911.52px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -954.926px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -998.331px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -1041.74px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -1085.14px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -1128.55px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -1171.95px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -1215.36px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -1258.77px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -1302.17px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -1345.58px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -1388.98px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -1432.39px;"></div><div class="slice" style="width: 43.4057px; top: 0px;"><img src="{{asset('site/image/silder/slider-6.jpg')}}" style="width: 1519.2px; margin-left: -1475.79px;"></div></div><div class="main-image-box" style="top: 50px;"><img src="{{asset('site/image/silder/slider-2.jpg')}}"></div><div class="detail-box" style="bottom: 150.719px;"><h3 class="detail-title">New Style Fashion </h3><span class="detail-desc">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of...</span><button class="detail-button btn btn-medium btn-primary">Shop Now</button></div><button class="half-circle-prev" title="Previous"><span>❮</span></button><button class="half-circle-next" title="Next"><span>❯</span></button></div> -->



</div>
</section>
<!-- slider End -->
<!-- about Us -->
	<div id="about_us" class="about_section" style="background-image: url(site/image/about_img.jpg);width: 100%;background-repeat: no-repeat; background-size: cover;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="about_text wow slideInLeft">
						<h1>Hurry Up!</h1>
						<h2>Hurry Up! Daily Deal Of The Day</h2>
						<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. or randomised words which don't look even slightly believable.</p>
						<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. or randomised words which don't look even slightly believable.</p>
						
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						
						<!--<h3>Contact Us</h3>
						<h2 class="about_contact"><i class="fa fa-volume-control-phone"></i> +91-123-456-7890</h2>-->
						<a href="about_us.html" class="btn">Shop Now</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="about_images wow slideInRight">
						<!--<img src="{{asset('site/image/about_img.jpg')}}" width="100%" alt="silder images" title="silder images">-->
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- about Us end-->

<!-- Zodiac Sign --
<div id="zodiac_Sign" class="rashi_wrapper">
	<div class="container-fluid">
		<div class="heading_wrapper wow fadeInDown animated">
			<h2 class="wow fadeInDown animated">Choose Your <span>Zodiac Sign</span></h2>
			<p class="wow fadeInDown animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
		</div>
		<div class="row">
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated ">
					<div class="sign_box_img">
						<img src="{{asset('site/image/rashi/icon1.png')}}" alt="icon1">
					</div>
					<div class="sign_box_cont">
						<h4>Aries</h4>
						<p>30 march 2020</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="{{asset('site/image/rashi/icon2.png')}}" alt="icon2">
					</div>
					<div class="sign_box_cont">
						<h4>Taurus</h4>
						<p>30 march 2020</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="{{asset('site/image/rashi/icon3.png')}}" alt="icon3">
					</div>
					<div class="sign_box_cont">
						<h4>Gemini</h2>
						<p>30 march 2020</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="{{asset('site/image/rashi/icon4.png')}}" alt="icon4">
					</div>
					<div class="sign_box_cont">
						<h4>Cancer</h4>
						<p>30 march 2020</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="{{asset('site/image/rashi/icon5.png')}}" alt="icon5">
					</div>
					<div class="sign_box_cont">
						<h4>leo</h4>
						<p>30 march 2020</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="{{asset('site/image/rashi/icon6.png')}}" alt="icon6">
					</div>
					<div class="sign_box_cont">
						<h4>Virgo</h4>
						<p>30 march 2020</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="{{asset('site/image/rashi/icon7.png')}}" alt="icon7">
					</div>
					<div class="sign_box_cont">
						<h4>Libra</h4>
						<p>30 march 2020</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="{{asset('site/image/rashi/icon8.png')}}" alt="icon8">
					</div>
					<div class="sign_box_cont">
						<h4>Scorpio</h4>
						<p>30 march 2020</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="{{asset('site/image/rashi/icon9.png')}}" alt="icon9">
					</div>
					<div class="sign_box_cont">
						<h4>Sagittairus</h4>
						<p>30 march 2020</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="{{asset('site/image/rashi/icon10.png')}}" alt="icon10">
					</div>
					<div class="sign_box_cont">
						<h4>Capricorn</h4>
						<p>30 march 2020</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="{{asset('site/image/rashi/icon11.png')}}" alt="icon11">
					</div>
					<div class="sign_box_cont">
						<h4>Aquarius</h4>
						<p>30 march 2020</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="{{asset('site/image/rashi/icon12.png')}}" alt="icon12">
					</div>
					<div class="sign_box_cont">
						<h4>Pisces</h4>
						<p>30 march 2020</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

-- Zodiac Sign end -->

<!-- Our products  -->
	<div id="products" class="products_section">
		<div class="container-fluid">
			<div class="heading_wrapper wow fadeInDown animated">
				<h2 class="wow fadeInDown animated">Our Products</h2>
				<p class="wow fadeInDown animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
			</div>
			<div class="row">
				<div id="product" class="owl-carousel owl-theme">
			<!--1 -->
				<div class="item">
					<div class="col-sm-12">
						<div class="product-thumb">
							<div class="image wow fadeInDown animated">
								<a href="single-products.html"><img class="wow fadeInDown animated" src="{{asset('site/image/category/product-1.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
								
								<div class="sale"><span class="">Sale</span></div>
								<div class="button-group">
									<div class="inner">
										<button type="button" title="Quick View" class="button-quickview"><span>Quick View</span></button>
										<button type="button" title="Add to Wish List" class="button-wishlist"><span>Add to Wish List</span></button>
										<button type="button" title="Compare this Product" class="button-compare"><span>Compare this Product</span></button>
									</div>
								</div>
							</div>
							<div class="caption">
								
								<div class="rate-and-title">
									<h4 class="wow fadeInDown animated"><a href="single-products.html">Natural Mineral Stone</a></h4>
									<div class="rating wow fadeInDown animated">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<div class="clear"></div>
									</div>
									<p class="price wow fadeInDown animated">
										<span class="price-old">$123.20</span> <span class="price-new">$110.00</span>  
									</p>
									<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
								</div>
							</div>
						</div>
					</div>				
				</div>				
				<!-- 2-->
				<div class="item">
					<div class="col-sm-12">
						<div class="product-thumb">
							<div class="image wow fadeInDown animated">
								<a href="single-products.html"><img class="wow fadeInDown animated" src="{{asset('site/image/category/product-2.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
								
								<div class="sale"><span class="">Sale</span></div>
								<div class="button-group">
									<div class="inner">
										<button type="button" title="Quick View" class="button-quickview"><span>Quick View</span></button>
										<button type="button" title="Add to Wish List" class="button-wishlist"><span>Add to Wish List</span></button>
										<button type="button" title="Compare this Product" class="button-compare"><span>Compare this Product</span></button>
									</div>
								</div>
							</div>
							<div class="caption">
								
								<div class="rate-and-title">
									<h4 class="wow fadeInDown animated"><a href="single-products.html">Natural Agate</a></h4>
									<div class="rating wow fadeInDown animated">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<div class="clear"></div>
									</div>
									<p class="price wow fadeInDown animated">
										<span class="price-old">$123.20</span> <span class="price-new">$110.00</span>  
									</p>
									<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
								</div>
							</div>
						</div>
					</div>				
				</div>				
				<!-- 3-->
				<div class="item">
					<div class="col-sm-12">
						<div class="product-thumb">
							<div class="image wow fadeInDown animated">
								<a href="single-products.html"><img class="wow fadeInDown animated" src="{{asset('site/image/category/product-3.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
								<div class="button-group">
									<div class="inner">
										<button type="button" title="Quick View" class="button-quickview"><span>Quick View</span></button>
										<button type="button" title="Add to Wish List" class="button-wishlist"><span>Add to Wish List</span></button>
										<button type="button" title="Compare this Product" class="button-compare"><span>Compare this Product</span></button>
									</div>
								</div>
							</div>
							<div class="caption">
								
								<div class="rate-and-title">
									<h4 class="wow fadeInDown animated"><a href="single-products.html">Rose Quartz</a></h4>
									<div class="rating wow fadeInDown animated">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<div class="clear"></div>
									</div>
									<p class="price wow fadeInDown animated">
										<span class="price-new">$50.00</span>  
									</p>
									<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
								</div>
							</div>
						</div>
					</div>				
				</div>				
				<!--4 -->
				<div class="item">
					<div class="col-sm-12">
						<div class="product-thumb">
							<div class="image wow fadeInDown animated">
								<a href="single-products.html"><img class="wow fadeInDown animated" src="{{asset('site/image/category/product-4.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
								<div class="button-group">
									<div class="inner">
										<button type="button" title="Quick View" class="button-quickview"><span>Quick View</span></button>
										<button type="button" title="Add to Wish List" class="button-wishlist"><span>Add to Wish List</span></button>
										<button type="button" title="Compare this Product" class="button-compare"><span>Compare this Product</span></button>
									</div>
								</div>
							</div>
							<div class="caption">
								
								<div class="rate-and-title">
									<h4 class="wow fadeInDown animated"><a href="single-products.html">Titanium Quartz</a></h4>
									<div class="rating wow fadeInDown animated">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<div class="clear"></div>
									</div>
									<p class="price wow fadeInDown animated">
										<span class="price-old">$123.20</span> <span class="price-new">$110.00</span>  
									</p>
									<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
								</div>
							</div>
						</div>
					</div>	
				</div>	
				<!--5 -->	
					<div class="item">
						<div class="col-sm-12">
							<div class="product-thumb">
								<div class="image wow fadeInDown animated">
									<a href="single-products.html"><img class="wow fadeInDown animated" src="{{asset('site/image/category/product-5.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
									
									<div class="sale"><span class="">Sale</span></div>
									<div class="button-group">
										<div class="inner">
											<button type="button" title="Quick View" class="button-quickview"><span>Quick View</span></button>
											<button type="button" title="Add to Wish List" class="button-wishlist"><span>Add to Wish List</span></button>
											<button type="button" title="Compare this Product" class="button-compare"><span>Compare this Product</span></button>
										</div>
									</div>
								</div>
								<div class="caption">
									
									<div class="rate-and-title">
										<h4 class="wow fadeInDown animated"><a href="single-products.html">Natural Mineral Stone</a></h4>
										<div class="rating wow fadeInDown animated">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<div class="clear"></div>
										</div>
										<p class="price wow fadeInDown animated">
											<span class="price-old">$123.20</span> <span class="price-new">$110.00</span>  
										</p>
										<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
									</div>
								</div>
							</div>
						</div>				
					</div>			
				<!-- products end -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Products End-->


<!-- Our Astrologers Work for You -->
<div id="website_visitors" class="astrologers-work">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 condition-set">
				<div class="astrologers_title">
					<h2 class="wow fadeInDown animated">Our Fashion Shop Work for You</h2>
					<p class="wow fadeInDown animated">Our Fashion Shop delivers daily and monthly Shop for all readers of our website visitors.</p>
					<p class="wow fadeInDown animated">Recognized as the best esoteric and fashion online in the USA. Every day we publish fresh products, shop by and for professional products, personalized predictions, shop readings, shose and Chinese fashion Brands and much more.</p>
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
<!-- Our products  -->
	<div id="products" class="products_section">
		<div class="container-fluid">
			<div class="heading_wrapper wow fadeInDown animated">
				<h2 class="wow fadeInDown animated">New Category</h2>
				<p class="wow fadeInDown animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
			</div>
			<div class="row">
				<div id="new_category" class="owl-carousel owl-theme">
			<!--1 -->
				<div class="item">
					<div class="col-sm-12">
						<div class="product-thumb">
							<div class="image wow fadeInDown animated">
								<a href="single-products.html"><img class="wow fadeInDown animated" src="{{asset('site/image/category/product-5.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
								
								<div class="sale"><span class="">Sale</span></div>
								<div class="button-group">
									<div class="inner">
										<button type="button" title="Quick View" class="button-quickview"><span>Quick View</span></button>
										<button type="button" title="Add to Wish List" class="button-wishlist"><span>Add to Wish List</span></button>
										<button type="button" title="Compare this Product" class="button-compare"><span>Compare this Product</span></button>
									</div>
								</div>
							</div>
							<div class="caption">
								
								<div class="rate-and-title">
									<h4 class="wow fadeInDown animated"><a href="single-products.html">Natural Mineral Stone</a></h4>
									<div class="rating wow fadeInDown animated">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<div class="clear"></div>
									</div>
									<p class="price wow fadeInDown animated">
										<span class="price-old">$123.20</span> <span class="price-new">$110.00</span>  
									</p>
									<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
								</div>
							</div>
						</div>
					</div>				
				</div>				
				<!-- 2-->
				<div class="item">
					<div class="col-sm-12">
						<div class="product-thumb">
							<div class="image wow fadeInDown animated">
								<a href="single-products.html"><img class="wow fadeInDown animated" src="{{asset('site/image/category/product-6.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
								
								<div class="sale"><span class="">Sale</span></div>
								<div class="button-group">
									<div class="inner">
										<button type="button" title="Quick View" class="button-quickview"><span>Quick View</span></button>
										<button type="button" title="Add to Wish List" class="button-wishlist"><span>Add to Wish List</span></button>
										<button type="button" title="Compare this Product" class="button-compare"><span>Compare this Product</span></button>
									</div>
								</div>
							</div>
							<div class="caption">
								
								<div class="rate-and-title">
									<h4 class="wow fadeInDown animated"><a href="single-products.html">Natural Agate</a></h4>
									<div class="rating wow fadeInDown animated">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<div class="clear"></div>
									</div>
									<p class="price wow fadeInDown animated">
										<span class="price-old">$123.20</span> <span class="price-new">$110.00</span>  
									</p>
									<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
								</div>
							</div>
						</div>
					</div>				
				</div>				
				<!-- 3-->
				<div class="item">
					<div class="col-sm-12">
						<div class="product-thumb">
							<div class="image wow fadeInDown animated">
								<a href="single-products.html"><img class="wow fadeInDown animated" src="{{asset('site/image/category/product-8.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
								<div class="button-group">
									<div class="inner">
										<button type="button" title="Quick View" class="button-quickview"><span>Quick View</span></button>
										<button type="button" title="Add to Wish List" class="button-wishlist"><span>Add to Wish List</span></button>
										<button type="button" title="Compare this Product" class="button-compare"><span>Compare this Product</span></button>
									</div>
								</div>
							</div>
							<div class="caption">
								
								<div class="rate-and-title">
									<h4 class="wow fadeInDown animated"><a href="single-products.html">Rose Quartz</a></h4>
									<div class="rating wow fadeInDown animated">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<div class="clear"></div>
									</div>
									<p class="price wow fadeInDown animated">
										<span class="price-new">$50.00</span>  
									</p>
									<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
								</div>
							</div>
						</div>
					</div>				
				</div>				
				<!--4 -->
				<div class="item">
					<div class="col-sm-12">
						<div class="product-thumb">
							<div class="image wow fadeInDown animated">
								<a href="single-products.html"><img class="wow fadeInDown animated" src="{{asset('site/image/category/product-11.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
								<div class="button-group">
									<div class="inner">
										<button type="button" title="Quick View" class="button-quickview"><span>Quick View</span></button>
										<button type="button" title="Add to Wish List" class="button-wishlist"><span>Add to Wish List</span></button>
										<button type="button" title="Compare this Product" class="button-compare"><span>Compare this Product</span></button>
									</div>
								</div>
							</div>
							<div class="caption">
								
								<div class="rate-and-title">
									<h4 class="wow fadeInDown animated"><a href="single-products.html">Titanium Quartz</a></h4>
									<div class="rating wow fadeInDown animated">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<div class="clear"></div>
									</div>
									<p class="price wow fadeInDown animated">
										<span class="price-old">$123.20</span> <span class="price-new">$110.00</span>  
									</p>
									<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
								</div>
							</div>
						</div>
					</div>	
				</div>	
				<!--5 -->	
					<div class="item">
						<div class="col-sm-12">
							<div class="product-thumb">
								<div class="image wow fadeInDown animated">
									<a href="single-products.html"><img class="wow fadeInDown animated" src="{{asset('site/image/category/product-10.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
									
									<div class="sale"><span class="">Sale</span></div>
									<div class="button-group">
										<div class="inner">
											<button type="button" title="Quick View" class="button-quickview"><span>Quick View</span></button>
											<button type="button" title="Add to Wish List" class="button-wishlist"><span>Add to Wish List</span></button>
											<button type="button" title="Compare this Product" class="button-compare"><span>Compare this Product</span></button>
										</div>
									</div>
								</div>
								<div class="caption">
									
									<div class="rate-and-title">
										<h4 class="wow fadeInDown animated"><a href="single-products.html">Natural Mineral Stone</a></h4>
										<div class="rating wow fadeInDown animated">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<div class="clear"></div>
										</div>
										<p class="price wow fadeInDown animated">
											<span class="price-old">$123.20</span> <span class="price-new">$110.00</span>  
										</p>
										<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
									</div>
								</div>
							</div>
						</div>				
					</div>			
				<!-- products end -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Products End-->
<!-- Our Services - -->
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
<!-- - Our Services End -->

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

<!-- Blog -->
	<div id="blogs" class="blog_section">
		<div class="container-fluid">
			<div class="heading_wrapper wow fadeInDown animated">
				<h2 class="wow fadeInDown animated">latest fashion</h2>
				<p class="wow fadeInDown animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
			</div>
				<div class="row">
					<div id="blog" class="owl-carousel owl-theme">
					
						<div class="item">
							<div class="col-sm-12">
								<div class="blog_inner_matter">
									<div class="image">
										<a href=""><img src="{{asset('site/image/blog/1.jpg')}}" class="wow fadeInDown animated"></a>
										<div class="blog_date  wow fadeInDown animated">
											<span>01-04-2020<span>
										</div>
									</div>
									<div class="admin_and_comments wow fadeInDown animated">
										<span class="blog_admin"><span><i class="fa fa-user-o"></i> Post By</span> <span><a href="">Admin</a></span></span>
										<span class="comments_date"><span><i class="fa fa-comments-o"></i> 10 comments</span></span>
									</div>
									<h3 class="wow fadeInDown animated"><a href="">Proin gravida nibh vel velit auctor aliquet.</a></h3>
									<p class="wow fadeInDown animated">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
									<a href="" class="btn wow fadeInDown animated" >Read More</a>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="col-sm-12">
								<div class="blog_inner_matter">
									<div class="image">
										<a href=""><img src="{{asset('site/image/blog/3.jpg')}}" class="wow fadeInDown animated"></a>
										<div class="blog_date  wow fadeInDown animated">
											<span>01-04-2020<span>
										</div>
									</div>
									<div class="admin_and_comments wow fadeInDown animated">
										<span class="blog_admin"><span><i class="fa fa-user-o"></i> Post By</span> <span><a href="">Admin</a></span></span>
										<span class="comments_date"><span><i class="fa fa-comments-o"></i> 10 comments</span></span>
									</div>
									<h3 class="wow fadeInDown animated"><a href="">Proin gravida nibh vel velit auctor aliquet.</a></h3>
									<p class="wow fadeInDown animated">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
									<a href="" class="btn wow fadeInDown animated" >Read More</a>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="col-sm-12">
								<div class="blog_inner_matter">
									<div class="image">
										<a href=""><img src="{{asset('site/image/blog/2.jpg')}}" class="wow fadeInDown animated"></a>
										<div class="blog_date  wow fadeInDown animated">
											<span>01-04-2020<span>
										</div>
									</div>
									<div class="admin_and_comments wow fadeInDown animated">
										<span class="blog_admin"><span><i class="fa fa-user-o"></i> Post By</span> <span><a href="">Admin</a></span></span>
										<span class="comments_date"><span><i class="fa fa-comments-o"></i> 10 comments</span></span>
									</div>
									<h3 class="wow fadeInDown animated"><a href="">Proin gravida nibh vel velit auctor aliquet.</a></h3>
									<p class="wow fadeInDown animated">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
									<a href="" class="btn wow fadeInDown animated" >Read More</a>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="col-sm-12">
								<div class="blog_inner_matter">
									<div class="image">
										<a href=""><img src="{{asset('site/image/blog/1.jpg')}}" class="wow fadeInDown animated"></a>
										<div class="blog_date  wow fadeInDown animated">
											<span>01-04-2020<span>
										</div>
									</div>
									<div class="admin_and_comments wow fadeInDown animated">
										<span class="blog_admin"><span><i class="fa fa-user-o"></i> Post By</span> <span><a href="">Admin</a></span></span>
										<span class="comments_date"><span><i class="fa fa-comments-o"></i> 10 comments</span></span>
									</div>
									<h3 class="wow fadeInDown animated"><a href="">Proin gravida nibh vel velit auctor aliquet.</a></h3>
									<p class="wow fadeInDown animated">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
									<a href="" class="btn wow fadeInDown animated" >Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>

<!-- Blog End -->
<!-- home slider -->
<script>
$(document).ready(function(){
	$('#home-silder').owlCarousel({	
		items: 1,
		itemsDesktop:[1199,1],
		itemsDesktopSmall:[992,1],
		itemsTablet:[768,1],
		itemsMobile:[450,1],
		autoPlay: 10000,
		pagination: true,
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
	});
});

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

$(document).ready(function(){
	$('#blog').owlCarousel({	
		items: 3,
		itemsDesktop:[1199,3],
		itemsDesktopSmall:[992,3],
		itemsTablet:[768,2],
		itemsMobile:[450,1],
		autoPlay: 10000,
		pagination: false,
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
	});
});

$(document).ready(function(){
	$('#product').owlCarousel({	
		items: 4,
		itemsDesktop:[1199,3],
		itemsDesktopSmall:[992,3],
		itemsTablet:[768,2],
		itemsMobile:[450,1],
		autoPlay: 10000,
		pagination: false,
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
	});
});

$(document).ready(function(){
	$('#new_category').owlCarousel({	
		items: 4,
		itemsDesktop:[1199,3],
		itemsDesktopSmall:[992,3],
		itemsTablet:[768,2],
		itemsMobile:[450,1],
		autoPlay: 10000,
		pagination: false,
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