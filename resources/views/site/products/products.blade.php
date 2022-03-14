@extends('layouts.site')
@section('content')
<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>products</h2>
				<ul>
					<li><a href="{{route('home')}}">Home</a></li>
					<li><a href="">Products</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="products_page">
<!-- products -->
	<div id="products" class="products_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<div class="eb_right">
						<!-- category -->
						<div id="category" class="category">
							<h3 class="wow fadeInDown animated">category</h3>
								<ul class="wow fadeInDown animated">
									<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Bags</a></li>
									<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Swimwear</a></li>
									<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Shirts</a></li>
									<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Shoes</a></li>
									<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Outerwear</a></li>
									<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Jeans</a></li>
									<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Coats</a></li>
									<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Dress</a></li>
								</ul>
						</div>
						<!-- category end-->
						
						<!-- category product -->
						<div id="category_product" class="category_product">
							<h3 class="wow fadeInDown animated">Latest Products </h3>
								<div class="">
									<div class="product-thumb">
									<div class="image wow fadeInDown animated">
										<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-1.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
										<div class="sale"><span class="">Sale</span></div>
									</div>
									<div class="caption ">
										
										<div class="rate-and-title">
											<h4 class="wow fadeInDown animated"><a href="">Natural Mineral Stone</a></h4>
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
							<div class="clear"></div>
							<!-- products category end-->
							<div class="">
								<div class="product-thumb">
									<div class="image wow fadeInDown animated">
										<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-1.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
										<div class="sale"><span class="">Sale</span></div>
									</div>
									<div class="caption ">
										
										<div class="rate-and-title">
											<h4 class="wow fadeInDown animated"><a href="">Titanium Quartz</a></h4>
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
							<div class="clear"></div>
							<!-- products category end-->
							<div class="">
								<div class="product-thumb">
									<div class="image wow fadeInDown animated">
										<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-1.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
										<div class="sale"><span class="">Sale</span></div>
									</div>
									<div class="caption ">
										
										<div class="rate-and-title">
											<h4 class="wow fadeInDown animated"><a href="">Titanium Quartz</a></h4>
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
							<div class="clear"></div>
							<!-- products category end-->
						</div>
						<!-- products category end-->
						
					</div>
				</div>
				
				<div class="col-sm-9">
					<div class="eb_left">
					<!-- product-list-top -->
						<div class="product-list-top">
							<div class="sort-by-wrapper">
								  <div class="col-md-6 col-xs-6 sort">
										<div class="form-group input-group input-group-sm wow fadeInDown pull-left">
											<label class="input-group-addon" for="input-sort">Sort By:</label>
											<div class="select-wrapper">
												<select id="input-sort" class="form-control">
													<option value="" selected="selected">Default</option>
													<option value="">Name (A - Z)</option>	
													<option value="">Name (Z - A)</option>
													<option value="">Price (Low &gt; High)</option>
													<option value="">Price (High &gt; Low)</option>
													<option value="">Rating (Highest)</option>
													<option value="">Rating (Lowest)</option>
													<option value="">Model (A - Z)</option>
													<option value="">Model (Z - A)</option>
												</select>
											</div>
										</div>
								  </div>
							</div>

							<div class="show-wrapper">
								<div class="col-md-6 col-xs-6">
									<div class="form-group input-group input-group-sm wow fadeInDown pull-right">
										<label class="input-group-addon" for="input-limit">Show:</label>
										<div class="select-wrapper">
											<select id="input-limit" class="form-control" onchange="location = this.value;">
												<option value="" selected="selected">15</option>
												<option value="">25</option>
												<option value="">50</option>
												<option value="">75</option>
												<option value="">100</option>									  
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					<!-- product-list-top -->
			<!--1 -->
						<div class="col-sm-4">
							<div class="product-thumb">
								<div class="image wow fadeInDown animated">
									<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-3.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
									
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
										<h4 class="wow fadeInDown animated"><a href="">Natural Mineral Stone</a></h4>
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
					<!-- 2-->
						<div class="col-sm-4">
							<div class="product-thumb">
								<div class="image wow fadeInDown animated">
									<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-4.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
									
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
										<h4 class="wow fadeInDown animated"><a href="">Natural Agate</a></h4>
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
					<!-- 3-->
						<div class="col-sm-4">
							<div class="product-thumb">
								<div class="image wow fadeInDown animated">
									<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-5.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
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
										<h4 class="wow fadeInDown animated"><a href="">Innerwear</a></h4>
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
					<!--4 -->
						<div class="col-sm-4">
							<div class="product-thumb">
								<div class="image wow fadeInDown animated">
									<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-6.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
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
										<h4 class="wow fadeInDown animated"><a href="">Swimwear</a></h4>
										<div class="rating wow fadeInDown animated">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<div class="clear"></div>
										</div>
										<p class="price wow fadeInDown animated">
											<span class="price-old">$40.20</span>  
										</p>
										<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
									</div>
								</div>
							</div>
						</div>	
					<!--5 -->	
							<div class="col-sm-4">
								<div class="product-thumb">
									<div class="image wow fadeInDown animated">
										<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-7.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
										
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
											<h4 class="wow fadeInDown animated"><a href="">Sweatshirts & Hoodies</a></h4>
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
							<!--6 -->	
							<div class="col-sm-4">
								<div class="product-thumb">
									<div class="image wow fadeInDown animated">
										<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-8.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
										
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
											<h4 class="wow fadeInDown animated"><a href="">Sweatshirts & Hoodies</a></h4>
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
							<!--7 -->	
							<div class="col-sm-4">
								<div class="product-thumb">
									<div class="image wow fadeInDown animated">
										<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-9.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
										
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
											<h4 class="wow fadeInDown animated"><a href="">Natural Mineral Stone</a></h4>
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
							<!--8 -->	
							<div class="col-sm-4">
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
											<h4 class="wow fadeInDown animated"><a href="">Natural Mineral Stone</a></h4>
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
							<!--9 -->	
							<div class="col-sm-4">
								<div class="product-thumb">
									<div class="image wow fadeInDown animated">
										<a href=""><img class="wow fadeInDown animated" src="{{asset('site/image/products/product-10.jpg')}}" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
										
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
											<h4 class="wow fadeInDown animated"><a href="">Natural Mineral Stone</a></h4>
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
					<!-- products end -->
					<!-- Pagination -->
						<div class="clear"></div>
								<div class="pagination-section text-center wow fadeInDown animated">
									<a href="#" class="prev page-numbers"><i class="fa fa-angle-left"></i></a>
									<span class="page-numbers current" aria-current="page">1</span>
									<a href="#" class="page-numbers">2</a>
									<a href="#" class="page-numbers">3</a>
									<a href="#" class="page-numbers">4</a>
									<a href="#" class="page-numbers">5</a>
									<a href="#" class="next page-numbers"><i class="fa fa-angle-right"></i></a>
								</div>
						<!-- Pagination End-->
					</div>	
				</div>
				
			</div>	
		</div>	
	</div>	
</div>
<!-- script files -->
	<script src="{{asset('site/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('site/js/custom.js')}}"></script>
<!-- script files -->

@endsection