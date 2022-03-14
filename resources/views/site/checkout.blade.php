@extends('layouts.site')
@section('content')
<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Checkout</h2>
				<ul>
					<li><a href="{{route('home')}}">Home</a></li>
					<li><a href="">Checkout</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="cart_page checkout_page">
<!-- cart -->
	<div id="cart" class="cart_section checkout_section">
		<div class="container-fluid" id="checkout">
			
			<div class="row billing_and_payment_option wow fadeInDown   animated">
				<!-- Billing Address -->
				<div class="col-sm-6 col-lg-6">
					<h3>Billing Address</h3>
						<form class="eb-form eb-mailform form-checkout" novalidate="novalidate">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-wrap has-error">
										<input class="form-input form-control" id="checkout-first-name-1" type="text" name="name" data-constraints="@Required" placeholder="First Name">
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="form-wrap has-error">
										<input class="form-input form-control" id="checkout-last-name-1" type="text" name="name" data-constraints="@Required" placeholder="Last Name">
									</div>
								</div>
								
								<div class="col-sm-12">
									<div class="form-wrap has-error">
										<input class="form-input form-control" id="checkout-company-1" type="text" name="name" data-constraints="@Required" placeholder="Company">
									</div>
								</div>
								
								<div class="col-sm-12">
									<div class="form-wrap has-error">
										<input class="form-input form-control" id="checkout-address-1" type="text" name="name" data-constraints="@Required" placeholder="Address">
									</div>
								</div>
								
								<div class="col-sm-12">
									<div class="form-wrap">
										<input class="form-input form-control" id="checkout-city-1" type="text" name="name" data-constraints="@Required" placeholder="City/Town">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-wrap">
										<input class="form-input form-control" id="checkout-email-1" type="email" name="email" data-constraints="@Email @Required" placeholder="E-Mail">
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="form-wrap">
										<input class="form-input form-control" id="checkout-phone-1" type="text" name="phone" data-constraints="@Numeric" placeholder="Phone">
									</div>
								</div>
							</div>
							<label class="checkbox-inline text-transform-capitalize">
								<input name="input-checkbox-1" value="checkbox-1" type="checkbox" class="checkbox-custom"><span class="checkbox-custom-dummy"></span>My Billing Address and Shipping Address are the same
							</label>
					</form>
				</div>
				<!-- Delivery Address  -->
				<div class="col-sm-6 col-lg-6 wow fadeInDown   animated">
					<h3>Delivery Address</h3>
					  <form class="eb-form eb-mailform form-checkout" novalidate="novalidate">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-wrap">
									<input class="form-input form-control" id="checkout-first-name-2" type="text" name="name" data-constraints="@Required" placeholder="First Name">
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="form-wrap">
									<input class="form-input form-control" id="checkout-last-name-2" type="text" name="name" data-constraints="@Required" placeholder="Last Name">
								</div>
							</div>
							
							<div class="col-sm-12">
								<div class="form-wrap">
									<input class="form-input form-control" id="checkout-company-2" type="text" name="name" data-constraints="@Required" placeholder="Company">
								</div>
							</div>
							
							<div class="col-sm-12">
								<div class="form-wrap">
									<input class="form-input form-control-has-validation" id="checkout-address-2" type="text" name="name" data-constraints="@Required" placeholder="Address">
								</div>
							</div>
							
							<div class="col-sm-12">
								<div class="form-wrap">
								  <input class="form-input form-control-has-validation" id="checkout-city-2" type="text" name="name" data-constraints="@Required" placeholder="City/Town">
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="form-wrap has-error">
									<input class="form-input form-control-has-validation" id="checkout-email-2" type="email" name="email" data-constraints="@Email @Required" placeholder="E-Mail">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-wrap has-error">
									<input class="form-input form-control-has-validation" id="checkout-phone-2" type="text" name="phone" data-constraints="@Numeric" placeholder="Phone">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- your shopping cart -->
			<div class="row your_cart wow fadeInDown   animated">
				<h2>your shopping cart</h2>
				<div class="table-custom-responsive">
					<table class="table-custom table-cart table-responsive">
						<thead>
							<tr>
								<th>Product name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
							</tr>
						</thead>
							<tbody>
								<tr>
									<td><a class="table-cart-figure" href="#"><img src="{{asset('site/image/products/product-2.jpg')}}" alt="" width="146" height="132"></a><a class="table-cart-link" href="#">Brand Shoes</a></td>
									<td>$125.00</td>
									<td>
										<div class="table-cart-stepper">
											<div class="stepper "><input class="form-input stepper-input" type="number" data-zeros="true" value="1" min="1" max="1000"><span class="stepper-arrow up"></span><span class="stepper-arrow down"></span></div>
										</div>
									</td>
									<td>$125</td>
								</tr>
								<tr>
									<td><a class="table-cart-figure" href="#"><img src="{{asset('site/image/products/product-5.jpg')}}" alt="" width="146" height="132"></a><a class="table-cart-link" href="#">Look Glass</a></td>
									<td>$50.00</td>
									<td>
										<div class="table-cart-stepper">
											<div class="stepper "><input class="form-input stepper-input" type="number" data-zeros="true" value="1" min="1" max="1000"><span class="stepper-arrow up"></span><span class="stepper-arrow down"></span></div>
										</div>
									</td>
								<td>$50</td>
								</tr>
								
								<tr>
									<td><a class="table-cart-figure" href="#"><img src="{{asset('site/image/products/product-3.jpg')}}" alt="" width="146" height="132"></a><a class="table-cart-link" href="#">C Design Bag</a></td>
									<td>$125.00</td>
									<td>
										<div class="table-cart-stepper">
											<div class="stepper "><input class="form-input stepper-input" type="number" data-zeros="true" value="1" min="1" max="1000"><span class="stepper-arrow up"></span><span class="stepper-arrow down"></span></div>
										</div>
									</td>
									<td>$125</td>
								</tr>
								
							</tbody>
					</table>
				</div>
			</div>	
			
			<!-- payment method -->
				<div class="row payment_method wow fadeInDown   animated">
					<div class="col-sm-6 col-lg-6">
						<h3>Payment methods</h3>
						<div class="inner_payment_method">
							<div class="box-radio">
								<div class="radio-panel">
									<label class="radio-inline">
										<input name="input-group-radio" value="checkbox-1" type="radio" checked="" class="radio-custom"><span class="radio-custom-dummy"></span>Direct Bank Transfer
									</label>
									
								</div>
								
								<div class="radio-panel">
									<label class="radio-inline">
										<input name="input-group-radio" value="checkbox-1" type="radio" class="radio-custom"><span class="radio-custom-dummy"></span>PayPal
									</label>
								
								</div>
								<div class="radio-panel">
									<label class="radio-inline">
										<input name="input-group-radio" value="checkbox-1" type="radio" class="radio-custom"><span class="radio-custom-dummy"></span>Cheque Payment
									</label>
									
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!--Cart total -->
					<div class="col-sm-6 col-lg-6 wow fadeInDown   animated">
					  <h3>Cart total</h3>
						  <div class="table-custom-responsive">
							<table class="table-custom table-responsive">
								  <tbody>
									<tr>
									  <td>Cart Subtotal</td>
									  <td>$175</td>
									</tr>
									<tr>
									  <td>Shipping</td>
									  <td>Free</td>
									</tr>
									<tr>
									  <td>Total</td>
									  <td>$175</td>
									</tr>
								  </tbody>
							</table>
							
							<a href="#" class="btn">Confirm Order</a>
						</div>
					</div>
				</div>
			<!-- payment method -->
		</div>	
	</div>	
<!-- cart end-->	
</div>
<!-- script files -->
	<script src="{{asset('site/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('site/js/custom.js')}}"></script>
<!-- script files -->

@endsection