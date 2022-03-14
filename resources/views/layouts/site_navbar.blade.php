	<div class="navbar-area">
		<div class="fashion-responsive-nav">
			<div class="container-fluid">
				<div class="row">
					<div class="fashion-responsive-menu">
						<div class="logo">
							<a href="{{route('home')}}">
								<img src="{{asset('site/image/logo/logo.png')}}" alt="logo">
							</a>
						</div>
						
						
						<div class="others-option align-items-center">
									<div class="option-item">
										<div class="cart-btn">
											<a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i><span>1</span></a>
										</div>
									</div>

									<div class="option-item">
										<div class="search-btn-box">
											<a href="#search"><i class="search-btn fa fa-search"></i></a>
										</div>
									</div>

									<!-- <div class="option-item">
										<a href="contact_us.html" class="btn"> Appointment</a>
									</div> -->
								</div>
					<!--mobile Menu  -->

					<div id="mySidenav" class="sidenav">
						<div class="menu_slid_bg">
							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
							
								<div class="col-sm-12" style="padding:0px;">
									<!-- <h3>Categories</h3> -->
									
									<ul class="accordion" id="accordion-category">
										<li class="panel mobile_menu_li">
											<a href="{{route('home')}}" class=""></i> Home</a>
										</li>										
										
								<!--	<li class="panel mobile_menu_li">
											<a href="#" class="">Accessories</a>
												<span class="head"><a style="" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category83" aria-expanded="false">
												<span class="plus">+</span><span class="minus">-</span></a></span>
												<div id="category83" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
													<ul>
														<li>
															 <a href="services.html">Services</a>
														</li>
														<li>
															 <a href="full_services_page.html">Services Full Page</a>
														</li>
													</ul>
												</div>
										</li>
										-->
										
										<li class="panel mobile_menu_li">
											<a href="{{route('products')}}" class="">Shop</a>
												<span class="head"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category84" aria-expanded="false">
												<span class="plus">+</span><span class="minus">-</span></a></span>
												<div id="category84" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
													<ul>
														<li>
															 <a href="products.html">Coats</a>
														</li>
														<li>
															 <a href="products.html">Outwear</a>
														</li>
														<li>
															 <a href="products.html">T-shirt</a>
														</li>
														<li>
															 <a href="products.html">Caps</a>
														</li>
														<li>
															 <a href="products.html">Shoes</a>
														</li>
														<li>
															 <a href="products.html">Innerwear</a>
														</li>
														<li>
															 <a href="products.html">Suits</a>
														</li>
														<li>
															 <a href="products.html">Shirt</a>
														</li>
														<li>
															 <a href="products.html">Bags</a>
														</li>
														<li>
															 <a href="products.html">Dresses</a>
														</li>
														<li>
															 <a href="products.html">Swimwear</a>
														</li>
														<li>
															 <a href="products.html">Sweatshirts & Hoodies</a>
														</li>
													</ul>
												</div>
										</li>
										
										<!-- <li class="panel mobile_menu_li">
											<a href="#" class="">Shop</a>
												<span class="head"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category85" aria-expanded="false">
												<span class="plus">+</span><span class="minus">-</span></a></span>
												<div id="category85" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
													<ul>
														<li>
															 <a href="services.html">Products List</a>
														</li>
														<li>
															 <a href="cart.html">Cart</a>
														</li>
														<li>
															 <a href="checkout.html">Checkout</a>
														</li>
														<li>
															 <a href="single-products.html">Products Details</a>
														</li>
														<li>
															 <a href="404.html">404</a>
														</li>
													</ul>
												</div>
										</li> -->
										
										<li class="panel mobile_menu_li">
											<a href="{{route('blogs')}}" class="">Blogs</a>
												<!-- <span class="head"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category86" aria-expanded="false">
												<span class="plus">+</span><span class="minus">-</span></a></span>
												<div id="category86" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
													<ul>
														<li>
															 <a href="blog.html">Blog Grid</a>
														</li>
														<li>
															 <a href="blog-left.html">Blog Grid View Left</a>
														</li>
														<li>
															 <a href="blog-right.html">Blog Grid View right</a>
														</li>
														<li>
															 <a href="blog-details.html">Blog Details</a>
														</li>
													</ul>
												</div> -->

										<li class="panel mobile_menu_li">
											<a href="{{route('about')}}" class=""></i> About Us</a>
										</li>

										</li>
										<li class="panel mobile_menu_li">
											<a href="{{route('contact')}}" class=""> Contact</a>
										</li>

										<li class="panel mobile_menu_li">
											<a href="#" class="">My Account</a>
												<span class="head"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category87" aria-expanded="false">
												<span class="plus">+</span><span class="minus">-</span></a></span>
												<div id="category87" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
													<ul>
														<li>
															 <a href="{{route('login')}}"> Login </a>
														</li>
														<li>
															 <a href="{{route('register')}}"> Register</a>
														</li>
													</ul>
												</div>
										</li>
									</ul>
							<div class="clear"></div>
							</div>
							 
						</div>
					</div>

					<span class="menu_open" onclick="openNav()">&#9776; Menu</span>
					<!-- mobile Menu  end-->
					</div>
				</div>
			</div>
		</div>

		<div class="fashion-nav">
			<div class="container-fluid">
				<div class="row">
					<div class="header_menu_wrapper">
						<nav class="navbar navbar-expand-md navbar-light">
							<a class="navbar-brand" href="{{route('home')}}">
								<img src="{{asset('site/image/logo/logo.png')}}" alt="logo">
							</a>

							<div class="collapse navbar-collapse mean-menu" style="display: block;">
								<ul class="navbar-nav">
									<li class="nav-item"><a href="{{route('home')}}" class="nav-link active">Home</a></li>

									<li class="nav-item"><a href="{{route('products')}}" class="nav-link">Shop<i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu">
											<li class="nav-item"><a href="products.html" class="nav-link">Coats</a></li>

											<li class="nav-item"><a href="products.html" class="nav-link">Outwear</a></li>

											<li class="nav-item"><a href="products.html" class="nav-link">T-shirt</a></li>

											<li class="nav-item"><a href="products.html" class="nav-link">Caps</a></li>
											<li class="nav-item"><a href="products.html" class="nav-link">Shoes</a></li>
											<li class="nav-item"><a href="products.html" class="nav-link">Innerwear</a></li>
											<li class="nav-item"><a href="products.html" class="nav-link">Suits</a></li>
											<li class="nav-item"><a href="products.html" class="nav-link">Shirt</a></li>
											<li class="nav-item"><a href="products.html" class="nav-link">Bags</a></li>
											<li class="nav-item"><a href="products.html" class="nav-link">Dresses</a></li>
											<li class="nav-item"><a href="products.html" class="nav-link">Swimwear</a></li>
											<li class="nav-item"><a href="products.html" class="nav-link">Sweatshirts & Hoodies</a></li>

										</ul>
									</li> 

									<li class="nav-item"><a href="{{route('blogs')}}" class="nav-link">Blogs </a>
										<!-- <ul class="dropdown-menu">
											<li class="nav-item"><a href="blog.html" class="nav-link">Blog Grid</a></li>
											
											<li class="nav-item"><a href="blog-left.html" class="nav-link">Blog Grid View Left</a></li>
											
											<li class="nav-item"><a href="blog-right.html" class="nav-link">Blog Grid View right</a></li>

											<li class="nav-item"><a href="blog-details.html" class="nav-link">Blog Details</a></li>
										</ul> -->
									</li>
									<li class="nav-item"><a href="{{route('about')}}" class="nav-link">About Us</a></li>

									<!--<li class="nav-item"><a href="" class="nav-link">Our Services <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu">
											<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
											<li class="nav-item"><a href="full_services_page.html" class="nav-link">Services Full Page</a></li>

										</ul>
									</li>-->
									
									<!-- <li class="nav-item"><a href="#" class="nav-link">Pages <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu">

											<li class="nav-item"><a href="#" class="nav-link">Shop <i class="fa fa-angle-right"></i></a>
												<ul class="dropdown-menu">
													<li class="nav-item"><a href="products.html" class="nav-link">Products List</a></li>

													<li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>

													<li class="nav-item"><a href="checkout.html" class="nav-link">Checkout</a></li>

													<li class="nav-item"><a href="single-products.html" class="nav-link">Products Details</a></li>
												</ul>
											</li>

											<li class="nav-item"><a href="404.html" class="nav-link">404</a></li>
										</ul>
									</li> -->

									<li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
								</ul>

								<div class="others-option align-items-center">
									<div class="option-item">
										<div class="cart-btn">
											<a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i><span>1</span></a>
										</div>
									</div>

									<div class="option-item">
										<div class="search-btn-box">
											<a href="#search"><i class="search-btn fa fa-search"></i></a>
										</div>
									</div>

									<!--<div class="option-item">
										<a href="contact_us.html" class="btn"> Appointment</a>
									</div>-->
								</div>
							</div>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
