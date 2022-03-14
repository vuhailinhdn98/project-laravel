@extends('layouts.site')
@section('content')
<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Product_1</h2>
				<ul>
					<li><a href="{{route('home')}}">Home</a></li>
					<li><a href="{{route('products')}}">Products</a></li>
					<li><a href="">Product_1</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="single_products_page">
<!-- single products page -->
	<div id="products_products" class="single_products_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="eb_right single_products_right_side">
						<div class="single_products_images">
							<div class="single_product_image">
								<div class="sp-loading">
									<img src="{{asset('site/image/products/product-1.jpg')}}" alt="" width="100%">
								</div>
								<div class="sale"><span class="">Sale</span></div>
							</div>
							
							<div class="sp-wrap">
								<div id="additional_silder_products_images" class="owl-carousel">
									<div class="item">
										<a href="{{asset('site/image/products/product-1.jpg')}}">
											<img src="{{asset('site/image/products/product-2.jpg')}}" alt="">
										</a>
									</div>	
									<div class="item">
										<a href="{{asset('site/image/products/product-3.jpg')}}">
											<img src="{{asset('site/image/products/product-4.jpg')}}" alt="">
										</a>
									</div>
									<div class="item">
										<a href="{{asset('site/image/products/product-5.jpg')}}">
											<img src="{{asset('site/image/products/product-6.jpg')}}" alt="">
										</a>
									</div>
									<div class="item">
										<a href="{{asset('site/image/products/product-7.jpg')}}">
											<img src="{{asset('site/image/products/product-8.jpg')}}" alt="">
										</a>
									</div>	
									<div class="item">
										<a href="{{asset('site/image/products/product-9.jpg')}}">
											<img src="{{asset('site/image/products/product-10.jpg')}}" alt="">
										</a>
									</div>	
									<div class="item">
										<a href="{{asset('site/image/products/product-11.jpg')}}">
											<img src="{{asset('site/image/products/product-12.jpg')}}" alt="">
										</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-sm-6">
					<div class="eb_left single_products_left_side">
						<h2>Natural Mineral Stone</h2>
						<div class="rating">
							<p>			
								<span><i class="fa fa-star"></i></span>				  				  
								<span><i class="fa fa-star"></i></span>				  				  
								<span><i class="fa fa-star-o"></i></span>				  				 
								<span><i class="fa fa-star-o"></i></span>				  				  
								<span><i class="fa fa-star-o"></i></span>				  					
								<span class="border"> | </span> 
								<a href="" onclick="">0 reviews</a> <span class="border"> | </span> 	  
								<a href="" onclick="" class="text_write_icon"><i class="fa fa-pencil-square-o"></i> Write a review</a>		  
							</p>
						</div>
						<hr>
						<div class="price-block">
							<div class="price-box">
								<p class="in-stock"><i class="fa fa-check"></i> In Stock</p>
								<p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price"> $150.99 </span> </p>
								<p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $125.99 </span> </p>
							</div>
						</div>
						
						<div class="add-to-box">
							<div class="add-to-cart">
								<div class="pull-left">
									<div class="custom pull-left">
										<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 )  result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
										<input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
										<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
									</div>
								</div>
								<button onclick="productAddToCartForm.submit(this)" class="btn btn-cart" title="Add to Cart" type="button">Add to Cart</button>
							</div>
						</div>
						
						<div class="short-description">
							<h3>overview</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. </p>
						</div>
						
						<div class="email-addto-box">
							<ul class="add-to-links">
								<li> <a class="link-wishlist" href="#"><span>Add to Wishlist</span></a></li>
								<li><span class="separator">|</span> <a class="link-compare" href="#"><span>Add to Compare</span></a></li>
							</ul>
							<p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>
                      </div>
						<ul class="shipping-pro">
							<li>Free Worldwide Shipping</li>
							<li>30 Days Return</li>
							<li>Member Discount</li>
                        </ul>
						
					</div>	
				</div>
			</div>		
			
			<!---- ---------------------->
			<div class="row">
				<div class="product-collateral">
					<div class="add_info">
							<ul id="product-detail-tab" class="nav nav-tabs product-tabs">
								<li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
								<li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li>
								<li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
							</ul>


						  <div id="productTabContent" class="tab-content">
								<div class="tab-pane fade in active" id="product_tabs_description">
									<div class="std">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
									<p>Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
									<p> Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis.</p>
								  </div>
								</div>
								<!-- product tabs description End-->
								<div class="tab-pane fade" id="product_tabs_tags">
									<div class="box-collateral box-tags">
										<div class="tags">
											  <form id="addTagForm" action="#" method="get">
													<div class="form-add-tags">
														<label for="productTagName">Add Tags:</label>
														<div class="input-box">
															<input class="input-text" name="productTagName" id="productTagName" type="text">
															<button type="button" title="Add Tags" class=" btn btn-add" onclick="submitTagForm()"> <span>Add Tags</span> </button>
														</div>
													  <!--input-box--> 
													</div>
											  </form>
										</div>
									<!--tags-->
									<p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
									</div>
								</div>
								<!-- Add Tags End-->
								<div class="tab-pane fade" id="reviews_tabs">
									<div class="eb-Reviews">
										<div>
											<h4 class="eb-Reviews-title">2 reviews for <span>Bacca Bucci Men's Running Shoes</span></h4>
											<ol class="commentlist">
												<li class="comment">
												<div>
													<img alt="" src="{{asset('site/image/member/member.png')}}" class="avatar avatar-60 photo">
													<div class="comment-text">
													<div class="ratings">
														<div class="rating-box">
															<div style="width:100%" class="rating"></div>
														</div>
														</div>
														<p class="meta">
														<strong>John Doe</strong> 
														<span>–</span> April 19, 2018
														</p>
														<div class="description"><p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
														<p>Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
														</div>
													</div>
												</div>
												</li><!-- #comment-## -->
												<li class="comment">
													<div>
														<img alt="" src="{{asset('site/image/member/member2.png')}}" class="avatar avatar-60 photo">
														<div class="comment-text">
														<div class="ratings">
															  <div class="rating-box">
																<div style="width:100%" class="rating"></div>
															  </div>
															  
															</div>
														<p class="meta">
														<strong>Stephen Smith</strong> <span>–</span> June 02, 2018
														</p>
														<div class="description"><p>Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
														</div>
													</div>
												</div>
												</li><!-- #comment-## -->
											</ol>
										</div>
									<div>
								<div>
								<div class="comment-respond">
									<span class="comment-reply-title">Add a review </span>			
									<form action="#" method="post" class="comment-form" novalidate="">
										<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
										<div class="comment-form-rating">
											<label id="rating">Your rating</label>
											<p class="stars">
											<span>
											<a class="star-1" href="#">1</a>
											<a class="star-2" href="#">2</a>
											<a class="star-3" href="#">3</a>
											<a class="star-4" href="#">4</a>
											<a class="star-5" href="#">5</a>
											</span>
											</p>
										</div>
										<p class="comment-form-comment">
											<label>Your review <span class="required">*</span></label>
											<textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
										</p>
										<p class="comment-form-author">
										<label for="author">Name <span class="required">*</span></label> 
										<input id="author" name="author" type="text" value="" size="30" required=""></p>
										<p class="comment-form-email">
										<label for="email">Email <span class="required">*</span></label> 
										<input id="email" name="email" type="email" value="" size="30" required=""></p>
										<p class="form-submit">
										<input name="submit" type="submit" id="submit" class="btn submit" value="Submit"> 
										</p>
									</form>
								</div><!-- #respond -->
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
						  </div>
					</div>
				</div>
			</div>
				
			<!---- ---------------------->
			
			<!-- relative products -->
			
			<!-- Our products  -->
				<div id="products" class="products_section related_product">
						<div class="heading_wrapper wow fadeInDown animated">
							<h2 class="wow fadeInDown animated">Related Products</h2>
						</div>
						<div class="row">
							<div id="related_product" class="owl-carousel owl-theme">
						<!--1 -->
							<div class="item">
								<div class="col-sm-12">
									<div class="product-thumb">
										<div class="image wow fadeInDown animated">
											<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-2.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
											
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
												<h4 class="wow fadeInDown animated"><a href="">Style Shoes</a></h4>
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
											<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-6.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
											
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
												<h4 class="wow fadeInDown animated"><a href="">Best Bag</a></h4>
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
											<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-8.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
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
												<h4 class="wow fadeInDown animated"><a href="">Look Bag</a></h4>
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
											<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-9.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
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
												<h4 class="wow fadeInDown animated"><a href="">Best look Shoes</a></h4>
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
							<!--5 -->	
								<div class="item">
									<div class="col-sm-12">
										<div class="product-thumb">
											<div class="image wow fadeInDown animated">
												<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-11.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
												
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
													<h4 class="wow fadeInDown animated"><a href="">Best Sleeper</a></h4>
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
			<!-- Products End-->
			<!-- relative products  end-->
			
		</div>	
	</div>
</div>
<script>

$(document).ready(function(){
	$('#additional_silder_products_images').owlCarousel({	
		items:5,
		itemsDesktop:[1199,3],
		itemsDesktopSmall:[992,2],
		itemsTablet:[768,3],
		itemsMobile:[600,2],
		autoPlay: 6000,
		pagination: false,
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left fa-5x"></i>', '<i class="fa fa-angle-right fa-5x"></i>']
	});
});

$(document).ready(function(){
	$('#related_product').owlCarousel({	
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

$(window).load(function() {
	$('.sp-wrap').smoothproducts();
});

</script>
<!-- script files -->
	<script src="{{asset('site/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('site/js/custom.js')}}"></script>
	<script src="{{asset('site/vendor/smoothproducts/smoothproducts.min.js')}}"></script>
<!-- script files -->
@endsection