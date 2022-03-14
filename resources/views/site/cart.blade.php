@extends('layouts.site')
@section('content')
<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Cart</h2>
				<ul>
					<li><a href="{{route('home')}}">Home</a></li>
					<li><a href="">Cart</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="cart_page">
<!-- cart -->
	<div id="cart" class="cart_section">
		<div class="container-fluid">
			<div class="row">
				<div class="table-custom-responsive wow fadeInDown animated">
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
									<td><a class="table-cart-figure" href="checkout.html"><img src="{{asset('site/image/products/product-7.jpg')}}" alt="" width="146" height="132"></a><a class="table-cart-link" href="#">Natural Mineral Stone</a></td>
									<td>$125.00</td>
									<td>
										<div class="table-cart-stepper">
											<div class="stepper "><input class="form-input stepper-input" type="number" data-zeros="true" value="1" min="1" max="1000"><span class="stepper-arrow up"></span><span class="stepper-arrow down"></span></div>
										</div>
									</td>
									<td>$125</td>
								</tr>
								<tr>
									<td><a class="table-cart-figure" href="checkout.html"><img src="{{asset('site/image/products/product-1.jpg')}}" alt="" width="146" height="132"></a><a class="table-cart-link" href="#">Natural Agate</a></td>
									<td>$50.00</td>
									<td>
										<div class="table-cart-stepper">
											<div class="stepper "><input class="form-input stepper-input" type="number" data-zeros="true" value="1" min="1" max="1000"><span class="stepper-arrow up"></span><span class="stepper-arrow down"></span></div>
										</div>
									</td>
								<td>$50</td>
								</tr>
								
								<tr>
									<td><a class="table-cart-figure" href="checkout.html"><img src="{{asset('site/image/products/product-2.jpg')}}" alt="" width="146" height="132"></a><a class="table-cart-link" href="#">Natural Mineral Stone</a></td>
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

				<div class="group-xl group-justify  wow fadeInDown animated">
					<div>
						<form class="eb-form eb-mailform eb-form-inline eb-form-coupon" novalidate="novalidate">
							<div class="form-wrap">
							  <input class="form-input form-input-inverse" id="coupon-code" type="text" name="text" placeholder="Coupon code">
							</div>
							<div class="form-button">
							  <button class="btn" type="submit">Apply</button>
							</div>
						</form>
					</div>
					<div>
						<div class="group-xl group-middle">
							<div>
							  <div class="group-md group-middle">
								<div class="heading-5 font-weight-medium text-gray-500">Total</div>
								<div class="heading-3 font-weight-normal">$175</div>
							  </div>
							</div><a class="btn" href="{{route('checkout')}}">Proceed to checkout</a>
						</div>
					</div>
				</div>
			</div>	
		</div>	
	</div>	
<!-- cart end-->	
</div>

<!-- script files -->
	<script src="{{asset('site/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('site/js/custom.js')}}"></script>
<!-- script files -->

@endsection