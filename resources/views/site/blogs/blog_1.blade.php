@extends('layouts.site')
@section('content')
<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Blog_1</h2>
				<ul>
					<li><a href="{{route('home')}}">Home</a></li>
					<li><a href="{{route('blogs')}}">Blogs</a></li>
					<li><a href="">Blog_1</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="blog_page blog_details">
<!-- Our Services -->
	<div id="blogs" class="blog_section">
		<div class="container-fluid">
			<div class="row">		
				<div class="col-sm-9">
					<div class="eb_left">
						<div class="col-sm-12">
							<div class="blog_inner_matter">
								<div class="image">
									<a href=""><img src="{{asset('site/image/bg-banner.jpg')}}" class="wow fadeInDown animated"></a>
								</div>
								<div class="admin_and_comments wow fadeInDown animated">
									<span class="blog_admin"><span><i class="fa fa-user-o"></i> Post By</span> <span><a href="">Admin</a></span></span>
									<span class="comments_date blog_admin"><span><i class="fa fa-comments-o"></i> 10 comments</span></span>
									<span class="comments_date blog_dates"><span><i class="fa fa-clock-o"></i> 01-04-2020</span></span>
								</div>
								<h2 class="wow fadeInDown animated"><a href="">The Fashion Shop all details.</a></h2>
								<p class="wow fadeInDown animated">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
								
								<p class="wow fadeInDown animated">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
								
								<p class="wow fadeInDown animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>
								
								
							<div class="comment-content wow bounceInUp animated">
								<div class="comments-wrapper">
								<h3> Comments </h3>
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
														<span>–</span> <time>April 19, 2018</time>
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
													<strong>Stephen Smith</strong> <span>–</span> <time>June 02, 2018</time>
												</p>
												<div class="description"><p>Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												</div>
											</div>
										</div>
										</li><!-- #comment-## -->
									</ol>
								<!--commentlist--> 
								</div>
								<!--comments-wrapper-->

								<div class="comments-form-wrapper clearfix comment-respond">
									<h3>Leave A reply</h3>
									<form class="comment-form" method="post" id="postComment" action="">
										<div class="field">
											<label for="name">Name<em class="required">*</em></label>
											<input type="text" class="input-text" title="Name" value="" id="user" name="user_name">
										</div>
										<div class="field">
											<label for="email">Email<em class="required">*</em></label>
											<input type="text" class="input-text validate-email" title="Email" value="" id="email" name="user_email">
										</div>
										<div class="clear"></div>
										<div class="field aw-blog-comment-area">
											<label for="comment">Comment<em class="required">*</em></label>
											<textarea rows="5" cols="50" class="input-text" title="Comment" id="comment" name="comment"></textarea>
										</div>
										<div style="width:96%" class="button-set">
											<input type="hidden" value="1" name="blog_id">
											<button type="submit" class="btn submit"><span><span>Add Comment</span></span></button>
										</div>
									</form>
								</div>
								<!--comments-form-wrapper clearfix--> 

							</div>	

						</div>
							</div>
						</div>
					<!-- right side -->
						<div class="col-sm-3">
							<div class="eb_right">
								<!-- category -->
								<div id="category" class="category blog_margin">
									<h3 class="wow fadeInDown animated">category</h3>
										<ul class="wow fadeInDown animated">
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Book</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Candle</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Compatibility</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Magnet</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Mineral</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Natural</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Personal</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Stone</a></li>
										</ul>
								</div>
								<!-- category end-->
							<!-- sidebar_blog -->
								<div id="sidebar_blog" class="sidebar_blog blog_margin">
									<h3 class="wow fadeInDown animated">Latest Blogs </h3>
									<div class="row">
										<div class="col-sm-12">
											<div class="blog_inner_matter">
												<div class="image">
													<a href=""><img src="{{asset('site/image/blog/1.jpg')}}" class="wow fadeInDown animated"></a>
													<div class="blog_date  wow fadeInDown animated">
														<span>01-04-2020<span>
													</div>
												</div>
												<div class="blog_text_matter">
												<h3 class="wow fadeInDown animated"><a href="">Proin gravida nibh vel velit auctor..</a></h3>
													<div class="admin_and_comments wow fadeInDown animated">
														<span class="blog_admin"><span><i class="fa fa-user-o"></i> Post By</span> <span><a href="">Admin</a></span></span>
													</div>
													
													<a href="" class="btn wow fadeInDown animated" >Read More</a>
												</div>
												<div class="clear"></div>
											</div>
										</div>
										
										<div class="col-sm-12">
											<div class="blog_inner_matter">
												<div class="image">
													<a href=""><img src="{{asset('site/image/blog/1.jpg')}}" class="wow fadeInDown animated"></a>
													<div class="blog_date  wow fadeInDown animated">
														<span>01-04-2020<span>
													</div>
												</div>
												<div class="blog_text_matter">
												<h3 class="wow fadeInDown animated"><a href="">Proin gravida nibh vel velit auctor..</a></h3>
													<div class="admin_and_comments wow fadeInDown animated">
														<span class="blog_admin"><span><i class="fa fa-user-o"></i> Post By</span> <span><a href="">Admin</a></span></span>
													</div>
													
													<a href="" class="btn wow fadeInDown animated" >Read More</a>
												</div>
												<div class="clear"></div>
											</div>
										</div>
										
										<div class="col-sm-12">
											<div class="blog_inner_matter">
												<div class="image">
													<a href=""><img src="{{asset('site/image/blog/1.jpg')}}" class="wow fadeInDown animated"></a>
													<div class="blog_date  wow fadeInDown animated">
														<span>01-04-2020<span>
													</div>
												</div>
												<div class="blog_text_matter">
												<h3 class="wow fadeInDown animated"><a href="">Proin gravida nibh vel velit auctor..</a></h3>
													<div class="admin_and_comments wow fadeInDown animated">
														<span class="blog_admin"><span><i class="fa fa-user-o"></i> Post By</span> <span><a href="">Admin</a></span></span>
													</div>
													
													<a href="" class="btn wow fadeInDown animated" >Read More</a>
												</div>
												<div class="clear"></div>
											</div>
										</div>
										
									</div>
								</div>
								<!-- tags -->
								<div id="tags" class="tags blog_margin">
									<h3 class="wow fadeInDown animated">Tags</h3>
									<ul class="big_tags wow fadeInDown animated">
										<li><a class="tag btn" href="#">Kundli Dosha</a></li>
										<li><a class="tag btn" href="#">Consultation</a></li>
										<li><a class="tag btn" href="#">Face Reading</a></li>
										<li><a class="tag btn" href="#">marrige</a></li>
										<li><a class="tag btn" href="#">business</a></li>
										<li><a class="tag btn" href="#">children</a></li>
									</ul>
								</div>
								<!-- tags -->
							</div>
						</div>
			</div>
		</div>
	</div>
<!-- Our Services End-->
</div>
<!-- script files -->
	<script src="{{asset('site/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('site/js/custom.js')}}"></script>
<!-- script files -->

@endsection