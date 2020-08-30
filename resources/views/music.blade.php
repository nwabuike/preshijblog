@extends('layouts.master')

@push('meta')
<meta property="og:title" content="{{ $meta['title'] ?? config('services.meta.site_name') }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->full() }}" />
<meta property="og:description" content="{{ $meta['description'] ?? config('services.meta.mantra') }}" />
@endpush

@section('body')
<!--************************************
			Header End
 	*************************************-->
	<!--************************************
			Inner Banner Start
	 *************************************-->
     <div class="tg-banner tg-haslayout parallax-window" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="images/bg-parallax/parallax-01.jpg">
		<div class="tg-displaytable">
			<div class="tg-displaytablecell">
				<div class="container">
					<h3>blog list</h3>
					<ol class="tg-breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">pages</a></li>
						<li>detail page</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
			Banner End
	 *************************************-->
	<!--************************************
			News Ticker Start
	 *************************************-->
	<div class="news-ticker theme-shadow tg-haslayout">
		<div class="container">
			<div id="ticker">
				<span class="latest-news-lable">
					<img src="images/new-alert-batch.png" alt="new-alert-batch">
				</span>
				<div class="clip tg-haslayout">
					<div class="today">
						<ul>
							<li>“Human &amp; Rights” has been helping the and surviving family Rights” know when  has been .  ( Maxblog )</li>
							<li>“Human &amp; Rights” has been helping the and surviving family Rights” know when  has been .  ( Maxblog )</li>
							<li>“Human &amp; Rights” has been helping the and surviving family Rights” know when  has been .  ( Maxblog )</li>
							<li>“Human &amp; Rights” has been helping the and surviving family Rights” know when  has been .  ( Maxblog )</li>
						</ul>
					</div>
				</div>
				<div class="live-weather">
					<strong class="weather-digree">+ 18C</strong>
					<div class="weather-loaction">
						<img src="images/weather-icon.png" alt="weather-icon">
						<div class="loaction">
							<span>Cloudy</span>
							<span>USA, Natha</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
			News Ticker End
	 *************************************-->
	 <!--************************************
			Main Start
	 *************************************-->
	<main class="main-content tg-haslayout">
		<div id="tg-two-columns" class="tg-two-columns tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-8 col-xs-12 pull-left">
						<div id="content" class="content tg-haslayout">
							<!--************************************
									Slider Post Start
							*************************************-->
							<section class="tg-sliderpost tg-haslayout">
								<div class="tg-sectionheading">
									<h2>music post</h2>
								</div>
								<div id="tg-slider-post" class="tg-slider-post">
									<div class="item">
										<figure class="tg-smallpost">
											<a href="#">
												<img alt="image description" src="images/slider-post/img-01.jpg"></a>
											<span class="post-batch music">music</span>
										</figure>
										<div class="tg-post tg-haslayout">
											<h3>Floating points you’re a melody # 1</h3>
											<ul class="tg-postmata">
												<li>
													<a href="#">
														<i class="fa fa-user"></i>
														<em>Jessica Alex</em>
													</a>
												</li>
												<li>
													<time datetime="2016-04-13">
														<a href="#">
															<i class="fa fa-clock-o"></i>
															<em>02 dec, 2015</em>
														</a>
													</time>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-thumbs-o-up"></i>
														<em>40</em>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-comments-o"></i>
														<em>0</em>
													</a>
												</li>
											</ul>
											<div class="tg-description">
												<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone. Digital devices that we buy or use increasingly have compute and communicate wirelessly with the Internet. Technology that makes personal computers and smartphones so useful in our lives is improving rapidly and is making its way into all of things that were never “smart” before. It’s also unleashing new needs and desires that will been defined in the coming decade.</p>
												<p>This was evident in Barcelona this week, where thousands of leading tech innovators get i gathered for Mobile World Congress (MWC). The annual event foretells the future of our wireless technology.
			</p>
										<p>This year, the promise of 5G wireless networks, expected to become now available in 2020, became clear. In the next five years, many parts of the world will have smarter mobile networks built for high speed and efficiency.

			</p>
										<p>In addition to futuristic technologies, MWC is where new, cutting edge and more affordable smartphones were first introduced to the world. In addition, new tablets and wearable technologies with cameras or voice control leverage wireless connections to the Internet.</p>
											</div>
											<div class="tg-tags-socials tg-haslayout">
												<div class="tg-tags pull-left">
													<span><i class="fa fa-tags"></i>technology, powerfull, mobile, watch</span>
												</div>
												<div class="tg-socialicons pull-right">
													<ul class="tg-socialicons">
														<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
														<li><a href="#"><i class="fa fa-twitter"></i></a></li>
														<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
														<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
														<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="tg-star-ranking tg-haslayout">
												<div class="tg-rating pull-left">
													<span>Average :<i> 5%</i></span>
													<ul class="rankig-star">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
												<div class="tg-userrating pull-right">
													<span>User rating :<i> 6.6 (29 votes)</i></span>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<figure class="tg-smallpost">
											<a href="#">
												<img alt="image description" src="images/slider-post/img-02.jpg"></a>
											<span class="post-batch music">music</span>
										</figure>
										<div class="tg-post tg-haslayout">
											<h3>Floating points you’re a melody # 1</h3>
											<ul class="tg-postmata">
												<li>
													<a href="#">
														<i class="fa fa-user"></i>
														<em>Jessica Alex</em>
													</a>
												</li>
												<li>
													<time datetime="2016-04-13">
														<a href="#">
															<i class="fa fa-clock-o"></i>
															<em>02 dec, 2015</em>
														</a>
													</time>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-thumbs-o-up"></i>
														<em>40</em>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-comments-o"></i>
														<em>0</em>
													</a>
												</li>
											</ul>
											<div class="tg-description">
												<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone. Digital devices that we buy or use increasingly have compute and communicate wirelessly with the Internet. Technology that makes personal computers and smartphones so useful in our lives is improving rapidly and is making its way into all of things that were never “smart” before. It’s also unleashing new needs and desires that will been defined in the coming decade.</p>
												<p>This was evident in Barcelona this week, where thousands of leading tech innovators get i gathered for Mobile World Congress (MWC). The annual event foretells the future of our wireless technology.
			</p>
										<p>This year, the promise of 5G wireless networks, expected to become now available in 2020, became clear. In the next five years, many parts of the world will have smarter mobile networks built for high speed and efficiency.

			</p>
										<p>In addition to futuristic technologies, MWC is where new, cutting edge and more affordable smartphones were first introduced to the world. In addition, new tablets and wearable technologies with cameras or voice control leverage wireless connections to the Internet.</p>
											</div>
											<div class="tg-tags-socials tg-haslayout">
												<div class="tg-tags pull-left">
													<span><i class="fa fa-tags"></i>technology, powerfull, mobile, watch</span>
												</div>
												<div class="tg-socialicons pull-right">
													<ul class="tg-socialicons">
														<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
														<li><a href="#"><i class="fa fa-twitter"></i></a></li>
														<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
														<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
														<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="tg-star-ranking tg-haslayout">
												<div class="tg-rating pull-left">
													<span>Average :<i> 5%</i></span>
													<ul class="rankig-star">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
												<div class="tg-userrating pull-right">
													<span>User rating :<i> 6.6 (29 votes)</i></span>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<figure class="tg-smallpost">
											<a href="#">
												<img alt="image description" src="images/slider-post/img-03.jpg"></a>
											<span class="post-batch music">music</span>
										</figure>
										<div class="tg-post tg-haslayout">
											<h3>Floating points you’re a melody # 1</h3>
											<ul class="tg-postmata">
												<li>
													<a href="#">
														<i class="fa fa-user"></i>
														<em>Jessica Alex</em>
													</a>
												</li>
												<li>
													<time datetime="2016-04-13">
														<a href="#">
															<i class="fa fa-clock-o"></i>
															<em>02 dec, 2015</em>
														</a>
													</time>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-thumbs-o-up"></i>
														<em>40</em>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-comments-o"></i>
														<em>0</em>
													</a>
												</li>
											</ul>
											<div class="tg-description">
												<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone. Digital devices that we buy or use increasingly have compute and communicate wirelessly with the Internet. Technology that makes personal computers and smartphones so useful in our lives is improving rapidly and is making its way into all of things that were never “smart” before. It’s also unleashing new needs and desires that will been defined in the coming decade.</p>
												<p>This was evident in Barcelona this week, where thousands of leading tech innovators get i gathered for Mobile World Congress (MWC). The annual event foretells the future of our wireless technology.
			</p>
										<p>This year, the promise of 5G wireless networks, expected to become now available in 2020, became clear. In the next five years, many parts of the world will have smarter mobile networks built for high speed and efficiency.

			</p>
										<p>In addition to futuristic technologies, MWC is where new, cutting edge and more affordable smartphones were first introduced to the world. In addition, new tablets and wearable technologies with cameras or voice control leverage wireless connections to the Internet.</p>
											</div>
											<div class="tg-tags-socials tg-haslayout">
												<div class="tg-tags pull-left">
													<span><i class="fa fa-tags"></i>technology, powerfull, mobile, watch</span>
												</div>
												<div class="tg-socialicons pull-right">
													<ul class="tg-socialicons">
														<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
														<li><a href="#"><i class="fa fa-twitter"></i></a></li>
														<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
														<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
														<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="tg-star-ranking tg-haslayout">
												<div class="tg-rating pull-left">
													<span>Average :<i> 5%</i></span>
													<ul class="rankig-star">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
												<div class="tg-userrating pull-right">
													<span>User rating :<i> 6.6 (29 votes)</i></span>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<figure class="tg-smallpost">
											<a href="#">
												<img alt="image description" src="images/slider-post/img-04.jpg"></a>
											<span class="post-batch music">music</span>
										</figure>
										<div class="tg-post tg-haslayout">
											<h3>Floating points you’re a melody # 1</h3>
											<ul class="tg-postmata">
												<li>
													<a href="#">
														<i class="fa fa-user"></i>
														<em>Jessica Alex</em>
													</a>
												</li>
												<li>
													<time datetime="2016-04-13">
														<a href="#">
															<i class="fa fa-clock-o"></i>
															<em>02 dec, 2015</em>
														</a>
													</time>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-thumbs-o-up"></i>
														<em>40</em>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-comments-o"></i>
														<em>0</em>
													</a>
												</li>
											</ul>
											<div class="tg-description">
												<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone. Digital devices that we buy or use increasingly have compute and communicate wirelessly with the Internet. Technology that makes personal computers and smartphones so useful in our lives is improving rapidly and is making its way into all of things that were never “smart” before. It’s also unleashing new needs and desires that will been defined in the coming decade.</p>
												<p>This was evident in Barcelona this week, where thousands of leading tech innovators get i gathered for Mobile World Congress (MWC). The annual event foretells the future of our wireless technology.
			</p>
										<p>This year, the promise of 5G wireless networks, expected to become now available in 2020, became clear. In the next five years, many parts of the world will have smarter mobile networks built for high speed and efficiency.

			</p>
										<p>In addition to futuristic technologies, MWC is where new, cutting edge and more affordable smartphones were first introduced to the world. In addition, new tablets and wearable technologies with cameras or voice control leverage wireless connections to the Internet.</p>
											</div>
											<div class="tg-tags-socials tg-haslayout">
												<div class="tg-tags pull-left">
													<span><i class="fa fa-tags"></i>technology, powerfull, mobile, watch</span>
												</div>
												<div class="tg-socialicons pull-right">
													<ul class="tg-socialicons">
														<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
														<li><a href="#"><i class="fa fa-twitter"></i></a></li>
														<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
														<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
														<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="tg-star-ranking tg-haslayout">
												<div class="tg-rating pull-left">
													<span>Average :<i> 5%</i></span>
													<ul class="rankig-star">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
												<div class="tg-userrating pull-right">
													<span>User rating :<i> 6.6 (29 votes)</i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!--************************************
									Slider Post End
							*************************************-->
							<!--************************************
									Related Post Start
							 *************************************-->
							<section class="tg-posts tg-relatedpost tg-postofday tg-haslayout">
								<div class="tg-sectionheading">
									<h2>related posts</h2>
								</div>
								<div class="tg-post">
									<div id="tg-postslider" class="tg-postslider tg-haslayout">
										<div class="item">
											<figure class="tg-smallpost">
												<a href="#"><img src="images/post-of-day/img-01.jpg" alt="img-01"></a>
												<span class="post-batch music">music</span>
											</figure>
											<div class="tg-postheading tg-haslayout">
												<h3><a href="#">Awesome street mix song with DJ</a></h3>
											</div>
										</div>
										<div class="item">
											<figure class="tg-smallpost">
												<a href="#"><img src="images/post-of-day/img-02.jpg" alt="img-02"></a>
												<span class="post-batch sport">sport</span>
											</figure>
											<div class="tg-postheading tg-haslayout">
												<h3><a href="#">High school football comparison</a></h3>
											</div>
										</div>
										<div class="item">
											<figure class="tg-smallpost">
												<a href="#"><img src="images/post-of-day/img-03.jpg" alt="img-03"></a>
												<span class="post-batch travel">travel</span>
											</figure>
											<div class="tg-postheading tg-haslayout">
												<h3><a href="#">Govt. Announced the tour in usa</a></h3>
											</div>
										</div>
										<div class="item">
											<figure class="tg-smallpost">
												<a href="#"><img src="images/post-of-day/img-04.jpg" alt="img-03"></a>
												<span class="post-batch enter">entertainment</span>
											</figure>
											<div class="tg-postheading tg-haslayout">
												<h3><a href="#">Govt. Announced the tour in usa</a></h3>
											</div>
										</div>
										<div class="item">
											<figure class="tg-smallpost">
												<a href="#"><img src="images/post-of-day/img-05.jpg" alt="img-03"></a>
												<span class="post-batch food">food</span>
											</figure>
											<div class="tg-postheading tg-haslayout">
												<h3><a href="#">Govt. Announced the tour in usa</a></h3>
											</div>
										</div>
										<div class="item">
											<figure class="tg-smallpost">
												<a href="#"><img src="images/post-of-day/img-06.jpg" alt="img-03"></a>
												<span class="post-batch fashion">fashion</span>
											</figure>
											<div class="tg-postheading tg-haslayout">
												<h3><a href="#">Govt. Announced the tour in usa</a></h3>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!--************************************
									Related Post End
							*************************************-->
							<!--************************************
									Next Previous Post Start
							*************************************-->
							<div class="tg-nextpre-posts tg-haslayout">
								<div class="tg-previouspost pull-left">
									<figure class="tg-preimage">
										<a href="#">
											<img src="images/img-pre.jpg" alt="image description">
										</a>
										<span>Previous post<i class="fa fa-long-arrow-left"></i></span>
									</figure>
								</div>
								<div class="tg-nextpost pull-right">
									<figure class="tg-nextimage">
										<a href="#">
											<img src="images/img-next.jpg" alt="image description">
										</a>
										<span>Previous post<i class="fa fa-long-arrow-right"></i></span>
									</figure>
								</div>
							</div>
							<!--************************************
									Next Previous Post End
							*************************************-->
							<!--************************************
									Comment Start
							*************************************-->
							<div id="tg-comments" class="tg-comments tg-haslayout">
								<div class="tg-sectionheading">
									<h2>3 comments</h2>
								</div>
								<ul class="tg-comment tg-haslayout">
									<li class="tg-commenter">
										<figure class="tg-commenter-img">
											<img src="images/comment-img/commenter-img-01.jpg" alt="image description">
										</figure>
										<div class="tg-commenter-info">
											<div class="tg-comment-head tg-haslayout">
												<div class="tg-comment-head-left pull-left">
													<h4>Zakara Smithson</h4>
													<time datetime="2016-03-15 12:25">
														<i class="fa fa-clock-o"></i>
														02 dec, 2015
													</time>
												</div>
												<div class="tg-comment-head-right pull-right">
													<i class="fa fa-reply"></i>
													<a href="#">reply</a>
												</div>
											</div>
											<div class="tg-description">
												<p>Digital Ocean currently has the cheapest unmanaged cloud VPS out there with word is one click installs security updaates can also be easily done.</p>
											</div>
										</div>
										<ul class="tg-child-comment">
											<li class="tg-commenter">
												<figure class="tg-commenter-img">
													<img src="images/comment-img/commenter-img-02.jpg" alt="image description">
												</figure>
												<div class="tg-commenter-info">
													<div class="tg-comment-head tg-haslayout">
														<div class="tg-comment-head-left pull-left">
															<h4>Zakara Smithson</h4>
															<time datetime="2016-03-15 12:25">
																<i class="fa fa-clock-o"></i>
																02 dec, 2015
															</time>
														</div>
														<div class="tg-comment-head-right pull-right">
															<i class="fa fa-reply"></i>
															<a href="#">reply</a>
														</div>
													</div>
													<div class="tg-description">
														<p>Digital Ocean currently has the cheapest unmanaged cloud VPS out there with word is one click installs security updaates can also be easily done.</p>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li class="tg-commenter">
										<figure class="tg-commenter-img">
											<img src="images/comment-img/commenter-img-03.jpg" alt="image description">
										</figure>
										<div class="tg-commenter-info">
											<div class="tg-comment-head tg-haslayout">
												<div class="tg-comment-head-left pull-left">
													<h4>Zakara Smithson</h4>
													<time datetime="2016-03-15 12:25">
														<i class="fa fa-clock-o"></i>
														02 dec, 2015
													</time>
												</div>
												<div class="tg-comment-head-right pull-right">
													<i class="fa fa-reply"></i>
													<a href="#">reply</a>
												</div>
											</div>
											<div class="tg-description">
												<p>Digital Ocean currently has the cheapest unmanaged cloud VPS out there with word is one click installs security updaates can also be easily done.</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<!--************************************
									Comment End
							*************************************-->
							<!--************************************
									Skip Add Post Start
							*************************************-->
							 <div class="tg-contentadd">
								<figure>
									<a href="#"><img src="images/img-01.jpg" alt="skip add"></a>
								</figure>
							 </div>
							<!--************************************
									Skip Add Post End
							*************************************-->
							<!--************************************
									Leave Comment Start
							*************************************-->
							<div class="tg-post-comment-form tg-haslayout">
								<h3>Leave your comments</h3>
								<form class="tg-form-comment tg-haslayout">
									<fieldset>
										<div class="row">
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="YOUR FIRST NAME">
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="YOUR LAST NAME">
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<input type="email" class="form-control" placeholder="EMAIL ADDRESS">
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<input type="url" class="form-control" placeholder="WEBSITE NAME">
												</div>
											</div>
											<div class="col-sm-12">
												<div class="form-group">
													<textarea placeholder="PLEASE WRITE YOUR MESSAGE ..." class="form-control"></textarea>
												</div>
											</div>
											<div class="col-sm-12">
												<button class="tg-btn" type="submit"><span>Submit</span></button>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
							<!--************************************
									Leave Comment End
							*************************************-->
						</div>
					</div>
					<!--************************************
							Side Bar Start
					*************************************-->
					<aside id="tg-sidebar" class="tg-sidebar">
								<div class="col-md-3 col-sm-4 col-xs-12">
									<div class="tg-widget tg-searchwidget">
										<div class="input-group tg-saerch-bar">
											<input type="text" class="form-control"  placeholder="Search" >
											<span class="input-group-addon">
												<button type="submit">
													<span class="glyphicon glyphicon-search"></span>
												</button>  
											</span>
										</div>
									</div>
									<div class="tg-widget tg-social-widget">
										<ul class="tg-social-progress">
											<li class="twiiter">
												<a href="#">
													<i class="fa fa-twitter"></i>
													<span>FOLLOWERS</span>
													<strong>100</strong>
												</a>
											</li>
											<li class="facebook">
												<a href="#">
													<i class="fa fa-facebook"></i>
													<span>FOLLOWERS</span>
													<strong>728</strong>
												</a>
											</li>
											<li class="pinterest">
												<a href="#">
													<i class="fa fa-pinterest"></i>
													<span>FOLLOWERS</span>
													<strong>551</strong>
												</a>
											</li>
										</ul>
									</div>
									<div class="tg-widget tg-addwidget">
										<div class="tg-add">
											<a href="#"><img src="images/aside-add-img1.jpg" alt="image description"></a>
										</div>
									</div>
									<div class="tg-widget tg-topnews-widget">
										<div class="tg-sectionheading">
											<h2>Top News</h2>
										</div>
										<div class="top-related-post">
											<ul class="top-news-tabs" role="tablist">
												<li class="active in">
													<a href="#week" role="tab" data-toggle="tab">Week</a>
												</li>
												<li>
													<a href="#month" role="tab" data-toggle="tab">Month</a>
												</li>
												<li>
													<a href="#all" role="tab" data-toggle="tab">All</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade active in" id="week">
													<ul class="top-news-detail">
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-01.jpg" alt="img-01"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">Claritas etiam is a proce </a></h3>
																<ul class="tg-postmata">
																	<li>
																		<time datetime="2016-04-13">
																			<a href="#">
																				<i class="fa fa-clock-o"></i>
																				<em>02 dec, 2015</em>
																			</a>
																		</time>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>0</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-02.jpg" alt="img-02"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">Claritas etiam is a proce </a></h3>
																<ul class="tg-postmata">
																	<li>
																		<time datetime="2016-04-13">
																			<a href="#">
																				<i class="fa fa-clock-o"></i>
																				<em>02 dec, 2015</em>
																			</a>
																		</time>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>0</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-03.jpg" alt="img-03"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">Claritas etiam is a proce </a></h3>
																<ul class="tg-postmata">
																	<li>
																		<time datetime="2016-04-13">
																			<a href="#">
																				<i class="fa fa-clock-o"></i>
																				<em>02 dec, 2015</em>
																			</a>
																		</time>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>0</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-04.jpg" alt="img-04"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">Claritas etiam is a proce </a></h3>
																<ul class="tg-postmata">
																	<li>
																		<time datetime="2016-04-13">
																			<a href="#">
																				<i class="fa fa-clock-o"></i>
																				<em>02 dec, 2015</em>
																			</a>
																		</time>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>0</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
												<div class="tab-pane fade" id="month">
													<ul class="top-news-detail">
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-05.jpg" alt="img-05"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">Claritas etiam is a proce </a></h3>
																<ul class="tg-postmata">
																	<li>
																		<time datetime="2016-04-13">
																			<a href="#">
																				<i class="fa fa-clock-o"></i>
																				<em>02 dec, 2015</em>
																			</a>
																		</time>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>0</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-06.jpg" alt="img-06"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">Claritas etiam is a proce </a></h3>
																<ul class="tg-postmata">
																	<li>
																		<time datetime="2016-04-13">
																			<a href="#">
																				<i class="fa fa-clock-o"></i>
																				<em>02 dec, 2015</em>
																			</a>
																		</time>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>0</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-01.jpg" alt="img-01"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">Claritas etiam is a proce </a></h3>
																<ul class="tg-postmata">
																	<li>
																		<time datetime="2016-04-13">
																			<a href="#">
																				<i class="fa fa-clock-o"></i>
																				<em>02 dec, 2015</em>
																			</a>
																		</time>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>0</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-02.jpg" alt="img-02"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">Claritas etiam is a proce </a></h3>
																<ul class="tg-postmata">
																	<li>
																		<time datetime="2016-04-13">
																			<a href="#">
																				<i class="fa fa-clock-o"></i>
																				<em>02 dec, 2015</em>
																			</a>
																		</time>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>0</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
												<div class="tab-pane fade" id="all">
													<ul class="top-news-detail">
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-01.jpg" alt="img-01"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">Claritas etiam is a proce </a></h3>
																<ul class="tg-postmata">
																	<li>
																		<time datetime="2016-04-13">
																			<a href="#">
																				<i class="fa fa-clock-o"></i>
																				<em>02 dec, 2015</em>
																			</a>
																		</time>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>0</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-02.jpg" alt="img-02"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">Claritas etiam is a proce </a></h3>
																<ul class="tg-postmata">
																	<li>
																		<time datetime="2016-04-13">
																			<a href="#">
																				<i class="fa fa-clock-o"></i>
																				<em>02 dec, 2015</em>
																			</a>
																		</time>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>0</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-03.jpg" alt="img-03"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">Claritas etiam is a proce </a></h3>
																<ul class="tg-postmata">
																	<li>
																		<time datetime="2016-04-13">
																			<a href="#">
																				<i class="fa fa-clock-o"></i>
																				<em>02 dec, 2015</em>
																			</a>
																		</time>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>0</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-04.jpg" alt="img-04"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">Claritas etiam is a proce </a></h3>
																<ul class="tg-postmata">
																	<li>
																		<time datetime="2016-04-13">
																			<a href="#">
																				<i class="fa fa-clock-o"></i>
																				<em>02 dec, 2015</em>
																			</a>
																		</time>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>0</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="tg-widget tg-sliderwidget">
										<div id="tg-widget-slider" class="tg-widget-slider">
											<div class="item">
												<figure>
													<img src="images/img-02.jpg" alt="image description">
												</figure>
												<h3><a href="#">Girl yoyo Music listing with dj. butt.</a></h3>
												<ul class="tg-postmata">
													<li>
														<time datetime="2016-04-13">
															<a href="#">
																<i class="fa fa-clock-o"></i>
																<em>02 dec, 2015</em>
															</a>
														</time>
													</li>
													<li>
														<a href="#">
															<i class="fa fa-comments-o"></i>
															<em>22</em>
														</a>
													</li>
												</ul>
												<div class="tg-description">
													<p>Android Wear watches feature always-on display the cool music messages ...</p>
												</div>
											</div>
											<div class="item">
												<figure>
													<img src="images/img-02.jpg" alt="image description">
												</figure>
												<h3><a href="#">Girl yoyo Music listing with dj. butt.</a></h3>
												<ul class="tg-postmata">
													<li>
														<time datetime="2016-04-13">
															<a href="#">
																<i class="fa fa-clock-o"></i>
																<em>02 dec, 2015</em>
															</a>
														</time>
													</li>
													<li>
														<a href="#">
															<i class="fa fa-comments-o"></i>
															<em>22</em>
														</a>
													</li>
												</ul>
												<div class="tg-description">
													<p>Android Wear watches feature always-on display the cool music messages ...</p>
												</div>
											</div>
											<div class="item">
												<figure>
													<img src="images/img-02.jpg" alt="image description">
												</figure>
												<h3><a href="#">Girl yoyo Music listing with dj. butt.</a></h3>
												<ul class="tg-postmata">
													<li>
														<time datetime="2016-04-13">
															<a href="#">
																<i class="fa fa-clock-o"></i>
																<em>02 dec, 2015</em>
															</a>
														</time>
													</li>
													<li>
														<a href="#">
															<i class="fa fa-comments-o"></i>
															<em>22</em>
														</a>
													</li>
												</ul>
												<div class="tg-description">
													<p>Android Wear watches feature always-on display the cool music messages ...</p>
												</div>
											</div>
										</div>
									</div>
									<div class="tg-widget tg-popularpost">
										<div class="tg-sectionheading">
											<h2>popular post</h2>
										</div>
										<div class="top-related-post">
											<ul class="top-news-tabs popular-post-tabs" role="tablist">
												<li class="active in">
													<a href="#commented" role="tab" data-toggle="tab">Commented</a>
												</li>
												<li>
													<a href="#emailed" role="tab" data-toggle="tab">Emailed</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade active in" id="commented">
													<ul class="top-news-detail">
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-05.jpg" alt="img-01"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">Five Posts You very nice</a></h3>
																<ul class="tg-postmata">
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>22 comments</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-06.jpg" alt="img-06"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">27 Secrets the Top Model</a></h3>
																<ul class="tg-postmata">
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>30 comments</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-07.jpg" alt="img-07"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">the best food in the usa </a></h3>
																<ul class="tg-postmata">
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>20 comments</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-07.jpg" alt="img-07"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">the Paris Fashion Week</a></h3>
																<ul class="tg-postmata">
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>05 comments</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-08.jpg" alt="img-08"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">10 techonology secrets</a></h3>
																<ul class="tg-postmata">
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>0 comment</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
												<div class="tab-pane fade" id="emailed">
													<ul class="top-news-detail">
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-05.jpg" alt="img-05"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">Five Posts You very nice</a></h3>
																<ul class="tg-postmata">
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>22 comments</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-06.jpg" alt="img-06"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">27 Secrets the Top Model</a></h3>
																<ul class="tg-postmata">
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>30 comments</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-07.jpg" alt="img-07"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">the best food in the usa </a></h3>
																<ul class="tg-postmata">
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>20 comments</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-08.jpg" alt="img-08"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">the Paris Fashion Week</a></h3>
																<ul class="tg-postmata">
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>05 comments</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<figure>
																<a href="#"><img src="images/top-news-img/img-09.jpg" alt="img-09"></a>
															</figure>
															<div class="tg-widgetcontent">
																<h3><a href="#">10 techonology secrets</a></h3>
																<ul class="tg-postmata">
																	<li>
																		<a href="#">
																			<i class="fa fa-comments-o"></i>
																			<em>0 comment</em>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="tg-widget tg-accordianwidget">
										<div class="tg-sectionheading">
											<h2>Accordion </h2>
										</div>
										<div class="tg-panel-group panel-group" id="accordion" role="tablist" aria-multiselectable="true">
											<div class="tg-panel panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne">
													<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Pintrest Accordion</a>
													</h4>
												</div>
												<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
													<div class="panel-body">
														<div id="tg-pintrest-slider" class="tg-pintrest-slider tg-haslayout">
															<div class="item">
																<div class="tg-widgetcontent">
																	<span><i class="fa fa-pinterest-p"></i><em>@</em> <a href="#">Joey deVilla</a></span>
																	<em><i class="fa fa-retweet"></i></em>
																	<p>Could @bodletech's screen tery life to new have lengths ? <a href="#">http://www.telegraph.co.uk/</a></p>
																	<time datetime="2016-04-27">16 hours ago</time>
																</div>
															</div>
															<div class="item">
																<div class="tg-widgetcontent">
																	<span><i class="fa fa-pinterest-p"></i><em>@</em> <a href="#">Joey deVilla</a></span>
																	<em><i class="fa fa-retweet"></i></em>
																	<p>Could @bodletech's screen tery life to new have lengths ? <a href="#">http://www.telegraph.co.uk/</a></p>
																	<time datetime="2016-04-27">16 hours ago</time>
																</div>
															</div>
															<div class="item">
																<div class="tg-widgetcontent">
																	<span><i class="fa fa-pinterest-p"></i><em>@</em> <a href="#">Joey deVilla</a></span>
																	<em><i class="fa fa-retweet"></i></em>
																	<p>Could @bodletech's screen tery life to new have lengths ? <a href="#">http://www.telegraph.co.uk/</a></p>
																	<time datetime="2016-04-27">16 hours ago</time>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tg-panel panel panel-default">
												<div class="panel-heading" role="tab" id="headingTwo">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">tweeter Accordion</a>
													</h4>
												</div>
												<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
													<div class="panel-body">
														<div id="tg-tweeter-slider" class="tg-pintrest-slider tg-haslayout">
															<div class="item">
																<div class="tg-widgetcontent">
																	<span><i class="fa fa-pinterest-p"></i><em>@</em> <a href="#">Joey deVilla</a></span>
																	<em><i class="fa fa-retweet"></i></em>
																	<p>Could @bodletech's screen tery life to new have lengths ? <a href="#">http://www.telegraph.co.uk/</a></p>
																	<time datetime="2016-04-27">16 hours ago</time>
																</div>
															</div>
															<div class="item">
																<div class="tg-widgetcontent">
																	<span><i class="fa fa-pinterest-p"></i><em>@</em> <a href="#">Joey deVilla</a></span>
																	<em><i class="fa fa-retweet"></i></em>
																	<p>Could @bodletech's screen tery life to new have lengths ? <a href="#">http://www.telegraph.co.uk/</a></p>
																	<time datetime="2016-04-27">16 hours ago</time>
																</div>
															</div>
															<div class="item">
																<div class="tg-widgetcontent">
																	<span><i class="fa fa-pinterest-p"></i><em>@</em> <a href="#">Joey deVilla</a></span>
																	<em><i class="fa fa-retweet"></i></em>
																	<p>Could @bodletech's screen tery life to new have lengths ? <a href="#">http://www.telegraph.co.uk/</a></p>
																	<time datetime="2016-04-27">16 hours ago</time>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tg-panel panel panel-default">
												<div class="panel-heading" role="tab" id="headingThree">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">facebook Accordion</a>
													</h4>
												</div>
												<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
													<div class="panel-body">
														<div id="tg-facebook-slider" class="tg-pintrest-slider tg-haslayout">
															<div class="item">
																<div class="tg-widgetcontent">
																	<span><i class="fa fa-pinterest-p"></i><em>@</em> <a href="#">Joey deVilla</a></span>
																	<em><i class="fa fa-retweet"></i></em>
																	<p>Could @bodletech's screen tery life to new have lengths ? <a href="#">http://www.telegraph.co.uk/</a></p>
																	<time datetime="2016-04-27">16 hours ago</time>
																</div>
															</div>
															<div class="item">
																<div class="tg-widgetcontent">
																	<span><i class="fa fa-pinterest-p"></i><em>@</em> <a href="#">Joey deVilla</a></span>
																	<em><i class="fa fa-retweet"></i></em>
																	<p>Could @bodletech's screen tery life to new have lengths ? <a href="#">http://www.telegraph.co.uk/</a></p>
																	<time datetime="2016-04-27">16 hours ago</time>
																</div>
															</div>
															<div class="item">
																<div class="tg-widgetcontent">
																	<span><i class="fa fa-pinterest-p"></i><em>@</em> <a href="#">Joey deVilla</a></span>
																	<em><i class="fa fa-retweet"></i></em>
																	<p>Could @bodletech's screen tery life to new have lengths ? <a href="#">http://www.telegraph.co.uk/</a></p>
																	<time datetime="2016-04-27">16 hours ago</time>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tg-widget tg-latestwidget">
										<div class="tg-sectionheading">
											<h2>Latest Reviews</h2>
										</div>
										<ul class="latest-reviews">
											<li>
												<div class="related-post-detail">
													<div class="tg-widgetcontent">
														<h3><a href="#">Claritas etiam is a proved is process </a></h3>
														<ul class="tg-postmata">
															<li>
																<time datetime="2016-04-13">
																	<a href="#">
																		<i class="fa fa-clock-o"></i>
																		<em>02 dec, 2015</em>
																	</a>
																</time>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</a>
															</li>
														</ul>
													</div>
													<ul class="rankig-star">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</li>
											<li>
												<div class="related-post-detail">
													<div class="tg-widgetcontent">
														<h3><a href="#">Claritas etiam is a proved is process </a></h3>
														<ul class="tg-postmata">
															<li>
																<time datetime="2016-04-13">
																	<a href="#">
																		<i class="fa fa-clock-o"></i>
																		<em>02 dec, 2015</em>
																	</a>
																</time>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</a>
															</li>
														</ul>
													</div>
													<ul class="rankig-star">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</li>
											<li>
												<div class="related-post-detail">
													<div class="tg-widgetcontent">
														<h3><a href="#">Claritas etiam is a proved is process </a></h3>
														<ul class="tg-postmata">
															<li>
																<time datetime="2016-04-13">
																	<a href="#">
																		<i class="fa fa-clock-o"></i>
																		<em>02 dec, 2015</em>
																	</a>
																</time>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</a>
															</li>
														</ul>
													</div>
													<ul class="rankig-star">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</li>
											<li>
												<div class="related-post-detail">
													<div class="tg-widgetcontent">
														<h3><a href="#">Claritas etiam is a proved is process </a></h3>
														<ul class="tg-postmata">
															<li>
																<time datetime="2016-04-13">
																	<a href="#">
																		<i class="fa fa-clock-o"></i>
																		<em>02 dec, 2015</em>
																	</a>
																</time>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</a>
															</li>
														</ul>
													</div>
													<ul class="rankig-star">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
									<div class="tg-widget tg-videowidget">
										<div class="tg-sectionheading">
											<h2>video widget</h2>
										</div>
										<div class="tg-video-widget">
											<iframe src="https://www.youtube.com/embed/4ZBN4x_YiQ0"></iframe>
										</div>
									</div>
									<div class="tg-widget tg-catagorieswidget">
										<div class="tg-sectionheading">
											<h2>catagories</h2>
										</div>
										<ul>
											<li><a href="#"><em>fashion</em><i>389</i></a></li>
											<li><a href="#"><em>technology</em><i>256</i></a></li>
											<li><a href="#"><em>latest news</em><i>56</i></a></li>
											<li><a href="#"><em>food</em><i>43</i></a></li>
											<li><a href="#"><em>sports</em><i>38</i></a></li>
										</ul>
									</div>
								</div>
							</aside>
					<!--************************************
							Side Bar End
					*************************************-->
				</div>
			</div>
		</div>
	</main>
@endsection