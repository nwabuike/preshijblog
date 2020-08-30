@extends('layouts.master')

@push('meta')
<meta property="og:title" content="{{ $meta['title'] ?? config('services.meta.site_name') }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->full() }}" />
<meta property="og:description" content="{{ $meta['description'] ?? config('services.meta.mantra') }}" />
@endpush

@section('body')
<script async data-uid="cdac0c3fbd" src="https://cheerful-artist-4726.ck.page/cdac0c3fbd/index.js"></script>
			<!--************************************
							Banner Start
			 *************************************-->
			<div id="tg-banner-3" class="tg-banner-3 owl-carousel owl-theme tg-haslayout">
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="{{ asset('img/banner/img-09.jpg')}}" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>entertainment all time best</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="enter"><a href="{{route('entertainment')}}">entertainment</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="{{ asset('img/banner/img-10.jpg')}}" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>fashion goes wild</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="fashion"><a href="{{route('fashion')}}">fashion</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="{{ asset('img/banner/img-11.jpg')}}" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>eat healthy food</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="food"><a href="{{route('food')}}">food</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="{{ asset('img/banner/img-12.jpg')}}" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>where is technology</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="technology"><a href="{{route('technology')}}">technology</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="{{ asset('img/banner/img-13.jpg')}}" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>hard rock music goes wild</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="music"><a href="{{route('music')}}">music</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="{{ asset('img/banner/img-14.jpg')}}" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>world is great</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="travel"><a href="{{route('travel')}}">travel</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="{{ asset('img/banner/img-15.jpg')}}" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>children playing football</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="sport"><a href="{{route('sport')}}">sports</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="img/banner/img-16.jpg" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>petrol price high</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="politics"><a href="{{route('politics')}}">politics</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="img/banner/img-09.jpg" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>entertainment all time best</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="enter"><a href="{{route('entertainment')}}">entertainment</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="img/banner/img-10.jpg" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>fashion goes wild</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="fashion"><a href="{{route('fashion')}}">fashion</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="img/banner/img-11.jpg" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>eat healthy food</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="food"><a href="{{route('food')}}">food</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="img/banner/img-12.jpg" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>where is technology</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="technology"><a href="{{route('technology')}}">technology</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="img/banner/img-13.jpg" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>music goes wild</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="music"><a href="{{route('music')}}">music</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="img/banner/img-14.jpg" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>world is great</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="travel"><a href="{{route('travel')}}">travel</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="img/banner/img-15.jpg" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>children playing football</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="sport"><a href="{{route('sport')}}">sports</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="img/banner/img-16.jpg" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>petrol price high</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="politics"><a href="{{route('politics')}}">politics</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="img/banner/img-09.jpg" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>entertainment all time best</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="enter"><a href="{{route('entertainment')}}">entertainment</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="img/banner/img-10.jpg" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>fashion goes wild</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="fashion"><a href="{{route('fashion')}}">fashion</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="img/banner/img-11.jpg" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>eat healthy food</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="food"><a href="{{route('food')}}">food</a></h2>
					</div>
				</div>
				<div class="item">
					<div class="tg-banner-content">
						<figure>
							<img src="img/banner/img-12.jpg" alt="image description">
							<figcaption class="tg-banner3-hover">
								<h3>where is technology</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">read more</a></p>
							</figcaption>
						</figure>
						<h2 class="technology"><a href="{{route('technology')}}">technology</a></h2>
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
							<img src="img/new-alert-batch.png" alt="new-alert-batch">
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
							<strong class="weather-digree">+ 18C<sup>0</sup></strong>
							<div class="weather-loaction">
								<img src="img/weather-icon.png" alt="weather-icon">
								<div class="loaction">
									<span>Cloudy</span>
									<span>Nigeria, Anambra</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
							News Ticker End
			 *************************************-->
			{{-- <!--************************************
						   Main Start
			*************************************-->
			<main class="main-content tg-haslayout">
				<div id="tg-two-columns" class="tg-two-columns tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-sm-8 col-xs-12 pull-right">
								<div id="content" class="content tg-haslayout">
									<!--************************************
													Post Of Day Start
									 *************************************-->
									<section class="tg-posts tg-postofday tg-haslayout">
										<div class="tg-sectionheading">
											<h2>Post of the day</h2>
										</div>
										<div class="tg-post">
											<div id="tg-postslider" class="tg-postslider tg-haslayout">
												<div class="item">
													<figure class="tg-smallpost">
														<a href="#"><img src="img/post-of-day/img-01.jpg" alt="img-01"></a>
														<span class="post-batch music">music</span>
													</figure>
													<div class="tg-postheading tg-haslayout">
														<h3><a href="#">Awesome street mix song with DJ</a></h3>
													</div>
												</div>
												<div class="item">
													<figure class="tg-smallpost">
														<a href="#"><img src="img/post-of-day/img-02.jpg" alt="img-02"></a>
														<span class="post-batch sport">sport</span>
													</figure>
													<div class="tg-postheading tg-haslayout">
														<h3><a href="#">High school football comparison</a></h3>
													</div>
												</div>
												<div class="item">
													<figure class="tg-smallpost">
														<a href="#"><img src="img/post-of-day/img-03.jpg" alt="img-03"></a>
														<span class="post-batch travel">travel</span>
													</figure>
													<div class="tg-postheading tg-haslayout">
														<h3><a href="#">Govt. Announced the tour in usa</a></h3>
													</div>
												</div>
												<div class="item">
													<figure class="tg-smallpost">
														<a href="#"><img src="img/post-of-day/img-04.jpg" alt="img-03"></a>
														<span class="post-batch enter">entertainment</span>
													</figure>
													<div class="tg-postheading tg-haslayout">
														<h3><a href="#">Govt. Announced the tour in usa</a></h3>
													</div>
												</div>
												<div class="item">
													<figure class="tg-smallpost">
														<a href="#"><img src="img/post-of-day/img-05.jpg" alt="img-03"></a>
														<span class="post-batch food">food</span>
													</figure>
													<div class="tg-postheading tg-haslayout">
														<h3><a href="#">Govt. Announced the tour in usa</a></h3>
													</div>
												</div>
												<div class="item">
													<figure class="tg-smallpost">
														<a href="#"><img src="img/post-of-day/img-06.jpg" alt="img-03"></a>
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
												Post Of Day End
									 *************************************-->
									<!--************************************
												Technology Tab Post Start
									*************************************-->
									<section class="tg-technologypost tg-haslayout">
										<div class="tg-sectionheading">
											<h2>technology</h2>
										</div>
										<div class="tg-post tg-haslayout">
											<div class="row">
												<div class="col-md-6 col-sm-12 pull-left">
													<div class="tg-tab-content tab-content">
														<div role="tabpanel" class="tab-pane active" id="house">
															<figure class="tg-smallpost">
																<a href="#"><img alt="image description" src="img/technology-post/img-01.jpg"></a>
																<span class="post-batch technology">technology</span>
															</figure>
															<div class="tg-postheading">
																<h3><a href="#">technology function</a></h3>
															</div>
															<ul class="tg-postmata">
																<li>
																	<i class="fa fa-user"></i>
																	<em>Jessica Alex</em>
																</li>
																<li>
																	<time datetime="2016-04-13">
																		<i class="fa fa-clock-o"></i>
																		<em>02 dec, 2015</em>
																	</time>
																</li>
																<li>
																	<i class="fa fa-thumbs-o-up"></i>
																	<em>40</em>
																</li>
																<li>
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</li>
															</ul>
															<div class="tg-description">
																<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone isn’t with you ...</p>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="profile">
															<figure class="tg-smallpost">
																<a href="#"><img alt="image description" src="img/technology-post/img-02.jpg"></a>
																<span class="post-batch fashion">fashion</span>
															</figure>
															<div class="tg-postheading">
																<h3><a href="#">technology function</a></h3>
															</div>
															<ul class="tg-postmata">
																<li>
																	<i class="fa fa-user"></i>
																	<em>Jessica Alex</em>
																</li>
																<li>
																	<time datetime="2016-04-13">
																		<i class="fa fa-clock-o"></i>
																		<em>02 dec, 2015</em>
																	</time>
																</li>
																<li>
																	<i class="fa fa-thumbs-o-up"></i>
																	<em>40</em>
																</li>
																<li>
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</li>
															</ul>
															<div class="tg-description">
																<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone isn’t with you ...</p>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="messages">
															<figure class="tg-smallpost">
																<a href="#"><img alt="image description" src="img/technology-post/img-03.jpg"></a>
																<span class="post-batch technology">technology</span>
															</figure>
															<div class="tg-postheading">
																<h3><a href="#">technology function</a></h3>
															</div>
															<ul class="tg-postmata">
																<li>
																	<i class="fa fa-user"></i>
																	<em>Jessica Alex</em>
																</li>
																<li>
																	<time datetime="2016-04-13">
																		<i class="fa fa-clock-o"></i>
																		<em>02 dec, 2015</em>
																	</time>
																</li>
																<li>
																	<i class="fa fa-thumbs-o-up"></i>
																	<em>40</em>
																</li>
																<li>
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</li>
															</ul>
															<div class="tg-description">
																<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone isn’t with you ...</p>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="settings">
															<figure class="tg-smallpost">
																<a href="#"><img alt="image description" src="img/technology-post/img-04.jpg"></a>
																<span class="post-batch travel">travel</span>
															</figure>
															<div class="tg-postheading">
																<h3><a href="#">technology function</a></h3>
															</div>
															<ul class="tg-postmata">
																<li>
																	<i class="fa fa-user"></i>
																	<em>Jessica Alex</em>
																</li>
																<li>
																	<time datetime="2016-04-13">
																		<i class="fa fa-clock-o"></i>
																		<em>02 dec, 2015</em>
																	</time>
																</li>
																<li>
																	<i class="fa fa-thumbs-o-up"></i>
																	<em>40</em>
																</li>
																<li>
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</li>
															</ul>
															<div class="tg-description">
																<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone isn’t with you ...</p>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="check">
															<figure class="tg-smallpost">
																<a href="#"><img alt="image description" src="img/technology-post/img-03.jpg"></a>
																<span class="post-batch technology">technology</span>
															</figure>
															<div class="tg-postheading">
																<h3><a href="#">technology function</a></h3>
															</div>
															<ul class="tg-postmata">
																<li>
																	<i class="fa fa-user"></i>
																	<em>Jessica Alex</em>
																</li>
																<li>
																	<time datetime="2016-04-13">
																		<i class="fa fa-clock-o"></i>
																		<em>02 dec, 2015</em>
																	</time>
																</li>
																<li>
																	<i class="fa fa-thumbs-o-up"></i>
																	<em>40</em>
																</li>
																<li>
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</li>
															</ul>
															<div class="tg-description">
																<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone isn’t with you ...</p>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="check1">
															<figure class="tg-smallpost">
																<a href="#"><img alt="image description" src="img/technology-post/img-01.jpg"></a>
																<span class="post-batch technology">technology</span>
															</figure>
															<div class="tg-postheading">
																<h3><a href="#">technology function</a></h3>
															</div>
															<ul class="tg-postmata">
																<li>
																		<i class="fa fa-user"></i>
																		<em>Jessica Alex</em>
																</li>
																<li>
																	<time datetime="2016-04-13">
																			<i class="fa fa-clock-o"></i>
																			<em>02 dec, 2015</em>
																	</time>
																</li>
																<li>
																	<i class="fa fa-thumbs-o-up"></i>
																	<em>40</em>
																</li>
																<li>
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</li>
															</ul>
															<div class="tg-description">
																<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone isn’t with you ...</p>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-6 col-sm-12 col-xs-12 pull-right">
													<div class="tg-nav-carasoul tg-haslayout">
														<ul id="tg-technologypost" class="tg-nav-tabs nav-tabs tg-haslayout" role="tablist">
															<li role="presentation" class="active">
																<div class="item">
																	<a href="#house" aria-controls="house" role="tab" data-toggle="tab">
																		<figure>
																			<img src="img/technology-post/thumbnail/img-01.jpg" alt="image description">
																		</figure>
																		<div class="tg-postcontent">
																			<div class="tg-postdetail">
																				<div class="tg-postheading">
																					<h3>smartwatch technology in the world</h3>
																				</div>
																			</div>
																			<ul class="tg-postmata">
																				<li>
																					<time datetime="2016-04-13">
																						<i class="fa fa-clock-o"></i>
																						<em>02 dec, 2015</em>
																					</time>
																				</li>
																				<li>
																					<i class="fa fa-comments-o"></i>
																					<em>0</em>
																				</li>
																			</ul>
																		</div>
																	</a>
																</div>
															</li>
															<li role="presentation">
																<div class="item">
																	<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
																		<figure>
																			<img src="img/technology-post/thumbnail/img-02.jpg" alt="image description">
																		</figure>
																		<div class="tg-postcontent">
																			<div class="tg-postdetail">
																				<div class="tg-postheading">
																					<h3>smartwatch technology in the world</h3>
																				</div>
																			</div>
																			<ul class="tg-postmata">
																				<li>
																					<time datetime="2016-04-13">
																						<i class="fa fa-clock-o"></i>
																						<em>02 dec, 2015</em>
																					</time>
																				</li>
																				<li>
																					<i class="fa fa-comments-o"></i>
																					<em>0</em>
																				</li>
																			</ul>
																		</div>
																	</a>
																</div>
															</li>
															<li role="presentation">
																<div class="item">
																	<a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
																		<figure>
																			<img src="img/technology-post/thumbnail/img-03.jpg" alt="image description">
																		</figure>
																		<div class="tg-postcontent">
																			<div class="tg-postdetail">
																				<div class="tg-postheading">
																					<h3>smartwatch technology in the world</h3>
																				</div>
																			</div>
																			<ul class="tg-postmata">
																				<li>
																					<time datetime="2016-04-13">
																						<i class="fa fa-clock-o"></i>
																						<em>02 dec, 2015</em>
																					</time>
																				</li>
																				<li>
																					<i class="fa fa-comments-o"></i>
																					<em>0</em>
																				</li>
																			</ul>
																		</div>
																	</a>
																</div>
															</li>
															<li role="presentation">
																<div class="item">
																	<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
																		<figure>
																			<img src="img/technology-post/thumbnail/img-04.jpg" alt="image description">
																		</figure>
																		<div class="tg-postcontent">
																			<div class="tg-postdetail">
																				<div class="tg-postheading">
																					<h3>smartwatch technology in the world</h3>
																				</div>
																			</div>
																			<ul class="tg-postmata">
																				<li>
																					<time datetime="2016-04-13">
																						<i class="fa fa-clock-o"></i>
																						<em>02 dec, 2015</em>
																					</time>
																				</li>
																				<li>
																					<i class="fa fa-comments-o"></i>
																					<em>0</em>
																				</li>
																			</ul>
																		</div>
																	</a>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</section>
									<!--************************************
													Technology Tab Post End
									 *************************************-->
									<!--************************************
												Skip Add Post Start
									 *************************************-->
									<div class="tg-contentadd">
										<figure>
											<a href="#"><img src="img/img-01.jpg" alt="skip add"></a>
										</figure>
									</div>
									<!--************************************
												Skip Add Post End
									*************************************-->
									<!--************************************
												Fahion Tab Post Start
									*************************************-->
									<section class="tg-technologypost tg-fashion-post tg-haslayout">
										<div class="tg-sectionheading">
											<h2>fashion</h2>
										</div>
										<div class="tg-post tg-haslayout">
											<div class="row">
												<div class="col-md-6 col-sm-12 pull-right">
													<div class="tg-tab-content tab-content">
														<div role="tabpanel" class="tab-pane active" id="post">
															<figure class="tg-smallpost">
																<a href="#"><img alt="image description" src="img/technology-post/img-01.jpg"></a>
																<span class="post-batch technology">technology</span>
															</figure>
															<div class="tg-postheading">
																<h3><a href="#">technology function</a></h3>
															</div>
															<ul class="tg-postmata">
																<li>
																	<i class="fa fa-user"></i>
																	<em>Jessica Alex</em>
																</li>
																<li>
																	<time datetime="2016-04-13">
																		<i class="fa fa-clock-o"></i>
																		<em>02 dec, 2015</em>
																	</time>
																</li>
																<li>
																	<i class="fa fa-thumbs-o-up"></i>
																	<em>40</em>
																</li>
																<li>
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</li>
															</ul>
															<div class="tg-description">
																<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone isn’t with you ...</p>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="post1">
															<figure class="tg-smallpost">
																<a href="#"><img alt="image description" src="img/technology-post/img-02.jpg"></a>
																<span class="post-batch fashion">fashion</span>
															</figure>
															<div class="tg-postheading">
																<h3><a href="#">technology function</a></h3>
															</div>
															<ul class="tg-postmata">
																<li>
																	<i class="fa fa-user"></i>
																	<em>Jessica Alex</em>
																</li>
																<li>
																	<time datetime="2016-04-13">
																		<i class="fa fa-clock-o"></i>
																		<em>02 dec, 2015</em>
																	</time>
																</li>
																<li>
																	<i class="fa fa-thumbs-o-up"></i>
																	<em>40</em>
																</li>
																<li>
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</li>
															</ul>
															<div class="tg-description">
																<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone isn’t with you ...</p>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="post2">
															<figure class="tg-smallpost">
																<a href="#"><img alt="image description" src="img/technology-post/img-03.jpg"></a>
																<span class="post-batch technology">technology</span>
															</figure>
															<div class="tg-postheading">
																<h3><a href="#">technology function</a></h3>
															</div>
															<ul class="tg-postmata">
																<li>
																	<i class="fa fa-user"></i>
																	<em>Jessica Alex</em>
																</li>
																<li>
																	<time datetime="2016-04-13">
																		<i class="fa fa-clock-o"></i>
																		<em>02 dec, 2015</em>
																	</time>
																</li>
																<li>
																	<i class="fa fa-thumbs-o-up"></i>
																	<em>40</em>
																</li>
																<li>
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</li>
															</ul>
															<div class="tg-description">
																<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone isn’t with you ...</p>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="post3">
															<figure class="tg-smallpost">
																<a href="#"><img alt="image description" src="img/technology-post/img-04.jpg"></a>
																<span class="post-batch travel">travel</span>
															</figure>
															<div class="tg-postheading">
																<h3><a href="#">technology function</a></h3>
															</div>
															<ul class="tg-postmata">
																<li>
																	<i class="fa fa-user"></i>
																	<em>Jessica Alex</em>
																</li>
																<li>
																	<time datetime="2016-04-13">
																		<i class="fa fa-clock-o"></i>
																		<em>02 dec, 2015</em>
																	</time>
																</li>
																<li>
																	<i class="fa fa-thumbs-o-up"></i>
																	<em>40</em>
																</li>
																<li>
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</li>
															</ul>
															<div class="tg-description">
																<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone isn’t with you ...</p>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="post4">
															<figure class="tg-smallpost">
																<a href="#"><img alt="image description" src="img/technology-post/img-03.jpg"></a>
																<span class="post-batch technology">technology</span>
															</figure>
															<div class="tg-postheading">
																<h3><a href="#">technology function</a></h3>
															</div>
															<ul class="tg-postmata">
																<li>
																	<i class="fa fa-user"></i>
																	<em>Jessica Alex</em>
																</li>
																<li>
																	<time datetime="2016-04-13">
																		<i class="fa fa-clock-o"></i>
																		<em>02 dec, 2015</em>
																	</time>
																</li>
																<li>
																	<i class="fa fa-thumbs-o-up"></i>
																	<em>40</em>
																</li>
																<li>
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</li>
															</ul>
															<div class="tg-description">
																<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone isn’t with you ...</p>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="post5">
															<figure class="tg-smallpost">
																<a href="#"><img alt="image description" src="img/technology-post/img-01.jpg"></a>
																<span class="post-batch technology">technology</span>
															</figure>
															<div class="tg-postheading">
																<h3><a href="#">technology function</a></h3>
															</div>
															<ul class="tg-postmata">
																<li>
																	<i class="fa fa-user"></i>
																	<em>Jessica Alex</em>
																</li>
																<li>
																	<time datetime="2016-04-13">
																		<i class="fa fa-clock-o"></i>
																		<em>02 dec, 2015</em>
																	</time>
																</li>
																<li>
																	<i class="fa fa-thumbs-o-up"></i>
																	<em>40</em>
																</li>
																<li>
																	<i class="fa fa-comments-o"></i>
																	<em>0</em>
																</li>
															</ul>
															<div class="tg-description">
																<p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert. Respond to messages right from phone isn’t with you ...</p>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-6 col-sm-12 col-xs-12 pull-left">
													<div class="tg-nav-carasoul tg-haslayout">
														<ul id="tg-fashionpost" class="tg-nav-tabs nav-tabs tg-haslayout" role="tablist">
															<li role="presentation" class="active">
																<div class="item">
																<a href="#post" aria-controls="post" role="tab" data-toggle="tab">
																	<figure>
																		<img src="img/technology-post/thumbnail/img-01.jpg" alt="image description">
																	</figure>
																	<div class="tg-postcontent">
																		<div class="tg-postdetail">
																			<div class="tg-postheading">
																				<h3>smartwatch technology in the world</h3>
																			</div>
																		</div>
																		<ul class="tg-postmata">
																			<li>
																				<time datetime="2016-04-13">
																					<i class="fa fa-clock-o"></i>
																					<em>02 dec, 2015</em>
																				</time>
																			</li>
																			<li>
																				<i class="fa fa-comments-o"></i>
																				<em>0</em>
																			</li>
																		</ul>
																	</div>
																</a>
																</div>
															</li>
															<li role="presentation">
																<div class="item">
																<a href="#post1" aria-controls="post1" role="tab" data-toggle="tab">
																	<figure>
																		<img src="img/technology-post/thumbnail/img-02.jpg" alt="image description">
																	</figure>
																	<div class="tg-postcontent">
																		<div class="tg-postdetail">
																			<div class="tg-postheading">
																				<h3>smartwatch technology in the world</h3>
																			</div>
																		</div>
																		<ul class="tg-postmata">
																			<li>
																				<time datetime="2016-04-13">
																					<i class="fa fa-clock-o"></i>
																					<em>02 dec, 2015</em>
																				</time>
																			</li>
																			<li>
																				<i class="fa fa-comments-o"></i>
																				<em>0</em>
																			</li>
																		</ul>
																	</div>
																</a>
																</div>
															</li>
															<li role="presentation">
																<div class="item">
																<a href="#post2" aria-controls="post2" role="tab" data-toggle="tab">
																	<figure>
																		<img src="img/technology-post/thumbnail/img-03.jpg" alt="image description">
																	</figure>
																	<div class="tg-postcontent">
																		<div class="tg-postdetail">
																			<div class="tg-postheading">
																				<h3>smartwatch technology in the world</h3>
																			</div>
																		</div>
																		<ul class="tg-postmata">
																			<li>
																				<time datetime="2016-04-13">
																					<i class="fa fa-clock-o"></i>
																					<em>02 dec, 2015</em>
																				</time>
																			</li>
																			<li>
																				<i class="fa fa-comments-o"></i>
																				<em>0</em>
																			</li>
																		</ul>
																	</div>
																</a>
																</div>
															</li>
															<li role="presentation">
																<div class="item">
																<a href="#post3" aria-controls="post3" role="tab" data-toggle="tab">
																	<figure>
																		<img src="img/technology-post/thumbnail/img-04.jpg" alt="image description">
																	</figure>
																	<div class="tg-postcontent">
																		<div class="tg-postdetail">
																			<div class="tg-postheading">
																				<h3>smartwatch technology in the world</h3>
																			</div>
																		</div>
																		<ul class="tg-postmata">
																			<li>
																				<time datetime="2016-04-13">
																					<i class="fa fa-clock-o"></i>
																					<em>02 dec, 2015</em>
																				</time>
																			</li>
																			<li>
																				<i class="fa fa-comments-o"></i>
																				<em>0</em>
																			</li>
																		</ul>
																	</div>
																</a>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</section>
									<!--************************************
												Fahion Tab Post End
									 *************************************-->
									<!--************************************
												Video Post Start
									*************************************-->
									<section class="tg-posts tg-videopost tg-haslayout">
										<div class="tg-sectionheading">
											<h2>Video Feature</h2>
										</div>
										<div class="row no-gutters">
											<div class="col-md-8 col-sm-12 col-xs-12">
												<div class="row no-gutters">
													<div class="tg-videocontent tab-content">
														<div role="tabpanel" class="tab-pane active" id="vid1">
															<iframe width="560" height="315" src="https://www.youtube.com/embed/rKegRnTimFs?rel=0&amp;showinfo=0"></iframe>
														</div>
														<div role="tabpanel" class="tab-pane" id="vid2">
															<iframe width="560" height="315" src="https://www.youtube.com/embed/DVahZ5NaxCo?rel=0&amp;showinfo=0"></iframe>
														</div>
														<div role="tabpanel" class="tab-pane" id="vid3">
															<iframe width="560" height="315" src="https://www.youtube.com/embed/g08-_NExOX0?rel=0&amp;showinfo=0"></iframe>
														</div>
														<div role="tabpanel" class="tab-pane" id="vid4">
															<iframe width="560" height="315" src="https://www.youtube.com/embed/rKegRnTimFs?rel=0&amp;showinfo=0"></iframe>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-12 col-xs-12">
												<div class="row no-gutters">
													<ul class="tg-videotabs tg-haslayout" role="tablist">
														<li role="presentation" class="active">
															<a href="#vid1" aria-controls="vid1" role="tab" data-toggle="tab">
																<figure>
																	<img src="img/video-post/thumbs/img-01.jpg" alt="image description">
																	<figcaption class="tg-imghover">
																		<h3>People Dancing On the floor</h3>
																	</figcaption>
																</figure>
															</a>
														</li>
														<li role="presentation">
															<a href="#vid2" aria-controls="img2" role="tab" data-toggle="tab">
																<figure>
																	<img src="img/video-post/thumbs/img-02.jpg" alt="image description">
																	<figcaption class="tg-imghover">
																		<h3>Fashion show in united state</h3>
																	</figcaption>
																</figure>
															</a>
														</li>
														<li role="presentation">
															<a href="#vid3" aria-controls="img3" role="tab" data-toggle="tab">
																<figure>
																	<img src="img/video-post/thumbs/img-03.jpg" alt="image description">
																	<figcaption class="tg-imghover">
																		<h3>Donation for blood cancer</h3>
																	</figcaption>
																</figure>
															</a>
														</li>
														<li role="presentation">
															<a href="#vid4" aria-controls="img4" role="tab" data-toggle="tab">
																<figure>
																	<img src="img/video-post/thumbs/img-04.jpg" alt="image description">
																	<figcaption class="tg-imghover">
																		<h3>dance battle</h3>
																	</figcaption>
																</figure>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</section>
									<!--************************************
												Video Post End
									 *************************************-->
									<!--************************************
												  Two Post Start
									*************************************-->
									<section class="tg-posts tg-politicspost tg-haslayout">
										<div class="row">
											<div class="col-md-6 col-sm-12 col-xs-6 tg-postwidth">
												<div class="tg-sectionheading">
													<h2>world News</h2>
												</div>
												<figure class="tg-smallpost">
													<a href="#"><img src="img/politics/img-01.jpg" alt="image description"></a>
													<span class="post-batch politics">politics</span>
												</figure>
												<div class="tg-post tg-haslayout">
													<div class="tg-twopostcontent tg-haslayout">
														<div class="tg-postheading">
															<h3><a href="#">When the inteligence community is exposed in USA words speacial</a></h3>
														</div>
														<ul>
															<li>
																<a href="#">
																	<span>CJ asks: Will we keep by begging?</span>
																</a>
															</li>
															<li>
																<a href="#">
																	<span>CJ asks: Will we keep by begging?</span>
																</a>
															</li>
															<li>
																<a href="#">
																	<span>CJ asks: Will we keep by begging?</span>
																</a>
															</li>
															<li>
																<a href="#">
																	<span>CJ asks: Will we keep by begging?</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-12 col-xs-6 tg-postwidth">
												<div class="tg-entairnment tg-haslayout">
													<div class="tg-sectionheading">
														<h2>food news</h2>
													</div>
													<figure class="tg-smallpost">
														<a href="#"><img src="img/politics/img-02.jpg" alt="image description"></a>
														<span class="post-batch food">food</span>
													</figure>
													<div class="tg-post tg-haslayout">
														<div class="tg-twopostcontent tg-haslayout">
															<div class="tg-postheading">
																<h3><a href="#">When the inteligence community is exposed in USA words speacial</a></h3>
															</div>
															<ul>
																<li>
																	<a href="#">
																		<span>CJ asks: Will we keep by begging?</span>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<span>CJ asks: Will we keep by begging?</span>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<span>CJ asks: Will we keep by begging?</span>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<span>CJ asks: Will we keep by begging?</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<!--************************************
													Two Post End
									 *************************************-->
									<!--************************************
												   Two Post Start
									*************************************-->
									<section class="tg-posts tg-politicspost tg-haslayout">
										<div class="row">
											<div class="col-md-6 col-sm-12 col-xs-6 tg-postwidth">
												<div class="tg-sectionheading">
													<h2>sports News</h2>
												</div>
												<figure class="tg-smallpost">
													<a href="#"><img src="img/politics/img-03.jpg" alt="image description"></a>
													<span class="post-batch sport">sport</span>
												</figure>
												<div class="tg-post tg-mainsection tg-haslayout">
													<div class="tg-twopostcontent tg-haslayout">
														<div class="tg-postheading">
															<h3><a href="#">When the inteligence community is exposed in USA words speacial</a></h3>
														</div>
														<ul>
															<li>
																<a href="#">
																	<span>CJ asks: Will we keep by begging?</span>
																</a>
															</li>
															<li>
																<a href="#">
																	<span>CJ asks: Will we keep by begging?</span>
																</a>
															</li>
															<li>
																<a href="#">
																	<span>CJ asks: Will we keep by begging?</span>
																</a>
															</li>
															<li>
																<a href="#">
																	<span>CJ asks: Will we keep by begging?</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-12 col-xs-6 tg-postwidth">
												<div class="tg-food tg-haslayout">
													<div class="tg-sectionheading">
														<h2>fashion news</h2>
													</div>
													<figure class="tg-smallpost">
														<a href="#"><img src="img/politics/img-04.jpg" alt="image description"></a>
														<span class="post-batch fashion">fashion</span>
													</figure>
													<div class="tg-post tg-haslayout">
														<div class="tg-twopostcontent tg-haslayout">
															<div class="tg-postheading">
																<h3><a href="#">When the inteligence community is exposed in USA words speacial</a></h3>
															</div>
															<ul>
																<li>
																	<a href="#">
																		<span>CJ asks: Will we keep by begging?</span>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<span>CJ asks: Will we keep by begging?</span>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<span>CJ asks: Will we keep by begging?</span>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<span>CJ asks: Will we keep by begging?</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<!--************************************
													Two Post End
									 *************************************-->
									
									<!--************************************
												   Load More Start
									*************************************-->
									<div class="tg-loadmore theme-shadow">
										<a href="#">load more</a>
									</div>
									<!--************************************
												   Load More End
									*************************************-->
								</div>
							</div>
							<!--************************************
											Sidebar Start
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
											<a href="#"><img src="img/aside-add-img1.jpg" alt="image description"></a>
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
																<a href="#"><img src="img/top-news-img/img-01.jpg" alt="img-01"></a>
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
																<a href="#"><img src="img/top-news-img/img-02.jpg" alt="img-02"></a>
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
																<a href="#"><img src="img/top-news-img/img-03.jpg" alt="img-03"></a>
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
																<a href="#"><img src="img/top-news-img/img-04.jpg" alt="img-04"></a>
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
																<a href="#"><img src="img/top-news-img/img-05.jpg" alt="img-05"></a>
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
																<a href="#"><img src="img/top-news-img/img-06.jpg" alt="img-06"></a>
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
																<a href="#"><img src="img/top-news-img/img-01.jpg" alt="img-01"></a>
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
																<a href="#"><img src="img/top-news-img/img-02.jpg" alt="img-02"></a>
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
																<a href="#"><img src="img/top-news-img/img-01.jpg" alt="img-01"></a>
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
																<a href="#"><img src="img/top-news-img/img-02.jpg" alt="img-02"></a>
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
																<a href="#"><img src="img/top-news-img/img-03.jpg" alt="img-03"></a>
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
																<a href="#"><img src="img/top-news-img/img-04.jpg" alt="img-04"></a>
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
													<img src="img/img-02.jpg" alt="image description">
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
													<img src="img/img-02.jpg" alt="image description">
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
													<img src="img/img-02.jpg" alt="image description">
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
																<a href="#"><img src="img/top-news-img/img-05.jpg" alt="img-01"></a>
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
																<a href="#"><img src="img/top-news-img/img-06.jpg" alt="img-06"></a>
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
																<a href="#"><img src="img/top-news-img/img-07.jpg" alt="img-07"></a>
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
																<a href="#"><img src="img/top-news-img/img-07.jpg" alt="img-07"></a>
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
																<a href="#"><img src="img/top-news-img/img-08.jpg" alt="img-08"></a>
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
																<a href="#"><img src="img/top-news-img/img-05.jpg" alt="img-05"></a>
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
																<a href="#"><img src="img/top-news-img/img-06.jpg" alt="img-06"></a>
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
																<a href="#"><img src="img/top-news-img/img-07.jpg" alt="img-07"></a>
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
																<a href="#"><img src="img/top-news-img/img-08.jpg" alt="img-08"></a>
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
																<a href="#"><img src="img/top-news-img/img-09.jpg" alt="img-09"></a>
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
											Sidebar End
							*************************************-->
						</div>
					</div>
				</div>
				<!--************************************
										Most Viewed Start
				*************************************-->
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<section class="tg-posts tg-mostviewd tg-haslayout">
								<div class="tg-sectionheading">
									<h2>Most viewed Catagories</h2>
								</div>
								<div class="tg-post">
									<div id="tg-mostviewdslider" class="tg-mostviewdslider tg-haslayout">
										<div class="item">
											<figure class="tg-smallpost">
												<a href="#"><img src="img/most-viwed/img-01.jpg" alt="img-01"></a>
											</figure>
											<div class="tg-postheading">
												<h3><a href="#">Health &amp; Wealth cames is together in October.</a></h3>
											</div>
										</div>
										<div class="item">
											<figure class="tg-smallpost">
												<a href="#"><img src="img/most-viwed/img-02.jpg" alt="img-02"></a>
											</figure>
											<div class="tg-postheading">
												<h3><a href="#">girl fashion style is the popular in the world</a></h3>
											</div>
										</div>
										<div class="item">
											<figure class="tg-smallpost">
												<a href="#"><img src="img/most-viwed/img-03.jpg" alt="img-03"></a>
											</figure>
											<div class="tg-postheading">
												<h3><a href="#">Get thelatest BBC Technology News</a></h3>
											</div>
										</div>
										<div class="item">
											<figure class="tg-smallpost">
												<a href="#"><img src="img/most-viwed/img-04.jpg" alt="img-03"></a>
											</figure>
											<div class="tg-postheading">
												<h3><a href="#">Get information about regarding usa Tariff 2015-16</a></h3>
											</div>
										</div>
										<div class="item">
											<figure class="tg-smallpost">
												<a href="#"><img src="img/most-viwed/img-01.jpg" alt="img-03"></a>
											</figure>
											<div class="tg-postheading">
												<h3><a href="#">Get information about regarding usa Tariff 2015-16</a></h3>
											</div>
										</div>
										<div class="item">
											<figure class="tg-smallpost">
												<a href="#"><img src="img/most-viwed/img-04.jpg" alt="img-03"></a>
											</figure>
											<div class="tg-postheading">
												<h3><a href="#">Govt. Announced the tour in usa</a></h3>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<!--************************************
										Most Viewed End
				*************************************-->
			</main>
			<!--************************************
							Main End
			*************************************-->
			<!--************************************--> --}}
				 <!--************************************
			Main Start
	 *************************************-->
	 <!--************************************
			Main Start
	 *************************************-->
	 <main class="main-content tg-haslayout">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="tg-fullwidth-post tg-haslayout">
						<!--************************************
								Full Width Post Start
						*************************************-->
						<section class="tg-haslayout">
							<div class="tg-sectionheading">
								<h2>Trending | Articles</h2>
							</div>
							<figure class="tg-smallpost">
								<a href="#"><img alt="image description" src="img/img-05.jpg"></a>
								<span class="post-batch politics">Latest news</span>
							</figure>
							@foreach ($data['posts'] as $post)
							<div class="tg-post tg-haslayout">
								<h3><a href="{{ post_url($post->slug) }}" title="Read more - {{ $post->title }}">{{ $post->title }}</a></h3>
								<ul class="tg-postmata">
									<li>
										<a href="{{ post_url($post->slug) }}">
											<i class="fa fa-user"></i>
											<em>Presh Blog</em>
										</a>
									</li>
									<li>
										<time datetime="2016-04-04">
											<a href="{{ post_url($post->slug) }}">
												<i class="fa fa-clock-o"></i>
												<em>Published{{ format_date($post->publish_date) }} </em>
											</a>
										</time>
									</li>
									<li>
										<a href="{{ post_url($post->slug) }}">
											<i class="fa fa-thumbs-o-up"></i>
											<em> {{ read_time($post->body) }}</em>
										</a>
									</li>
								</ul>
								<div class="tg-description">
									{{-- @include('components.post-preview-inline') --}}
									{!! $post->excerpt ? '<p class="text-xl mb-4 mt-0">'. $post->excerpt.'</p>':'' !!}
									 @if ($post != $data['posts']->last())
									 @endif
								</div>
								<div class="tg-tags-socials tg-haslayout">
									<div class="tg-tags pull-left">
										<span><i class="fa fa-tags"></i>Bring you the latest news</span>
									</div>
									<div class="tg-socialicons pull-right">
										<ul class="tg-socialicons">
											<li><a href="{{config('services.social.facebook')}}"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="{{config('services.social.twitter')}}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{config('services.social.email')}}"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="{{config('services.social.instagram')}}"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="tg-star-ranking tg-haslayout">
									<div class="tg-rating pull-left">
										<span>Average :<i> 90%</i></span>
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
							@endforeach
						</section>
						<!--************************************
								Full Width Post End
						*************************************-->
						
						<!--************************************
								Related Post Start
						 *************************************-->
						<section class="tg-posts tg-postofday tg-haslayout">
							<div class="tg-sectionheading">
								<h2>related posts</h2>
							</div>
							<div class="tg-post">
								<div id="tg-postslider" class="tg-postslider tg-haslayout">
									<div class="item">
										<figure class="tg-smallpost">
											<a href="#"><img src="img/post-of-day/img-01.jpg" alt="img-01"></a>
											<span class="post-batch music">music</span>
										</figure>
										<div class="tg-postheading">
											<h3><a href="#">Awesome street mix song with DJ</a></h3>
										</div>
									</div>
									<div class="item">
										<figure class="tg-smallpost">
											<a href="#"><img src="img/post-of-day/img-02.jpg" alt="img-02"></a>
											<span class="post-batch sport">sport</span>
										</figure>
										<div class="tg-postheading">
											<h3><a href="#">High school football comparison</a></h3>
										</div>
									</div>
									<div class="item">
										<figure class="tg-smallpost">
											<a href="#"><img src="img/post-of-day/img-03.jpg" alt="img-03"></a>
											<span class="post-batch travel">travel</span>
										</figure>
										<div class="tg-postheading">
											<h3><a href="#">Govt. Announced the tour in usa</a></h3>
										</div>
									</div>
									<div class="item">
										<figure class="tg-smallpost">
											<a href="#"><img src="img/post-of-day/img-04.jpg" alt="img-03"></a>
											<span class="post-batch enter">entertainment</span>
										</figure>
										<div class="tg-postheading">
											<h3><a href="#">Govt. Announced the tour in usa</a></h3>
										</div>
									</div>
									<div class="item">
										<figure class="tg-smallpost">
											<a href="#"><img src="img/post-of-day/img-05.jpg" alt="img-03"></a>
											<span class="post-batch food">food</span>
										</figure>
										<div class="tg-postheading">
											<h3><a href="#">Govt. Announced the tour in usa</a></h3>
										</div>
									</div>
									<div class="item">
										<figure class="tg-smallpost">
											<a href="#"><img src="img/post-of-day/img-06.jpg" alt="img-03"></a>
											<span class="post-batch fashion">fashion</span>
										</figure>
										<div class="tg-postheading">
											<h3><a href="#">Govt. Announced the tour in usa</a></h3>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!--************************************
								Related Post End
						*************************************-->
						
					</div>
				</div>
			</div>
		</div>
	</main>
	<!--************************************
			Main End
	*************************************-->
	<!--************************************
									Next Previous Post Start
							*************************************-->
							@if ($data['posts']->count())
							<div class="tg-nextpre-posts tg-haslayout">
								<div class="tg-previouspost pull-left">
									{{-- <figure class="tg-preimage"> --}}
                                        {{-- @if ($previous = $data['prev'])
                                        <a style="color:black; href="{{ post_url($previous->slug) }}" title="Newer Post: {{ $previous->title }}">
                                            <img src="{{ asset('img/img-pre.jpg')}}" alt="image description">
                                            &LeftArrow; {{ $previous->title }}
                                        </a>
										@endif --}}
										@if ($previous = $data['posts']->previousPageUrl())
										<a href="{{ $previous }}" title="Previous Page" >&LeftArrow;</a>
										@endif
										{{-- <a href="#">
											<img src="{{ asset('img/img-pre.jpg')}}" alt="image description">
										</a> --}}
										{{-- <span>Previous post<i class="fa fa-long-arrow-left"></i></span> --}}
									{{-- </figure> --}}
								</div>
								<div class="tg-nextpost pull-right">
									{{-- <figure class="tg-nextimage"> --}}
                                        {{-- @if ($next = $data['next'])
                                        <a style="color:black;" href="{{post_url($next->slug) }}" title="Older Post: {{ $next->title }}">
                                            <img src="{{ asset('img/img-next.jpg')}}" alt="image description">
                                            {{ $next->title }} &RightArrow;
                                        </a>
										@endif --}}
										@if ($next = $data['posts']->nextPageUrl())
    <a href="{{ $next }}" title="Next Page">&RightArrow;</a>
    @endif
										{{-- <span>Next post<i class="fa fa-long-arrow-right"></i></span> --}}
									{{-- </figure> --}}
								</div>
							</div>
							@endif
							<!--************************************
									Next Previous Post End
							*************************************-->

{{-- @if ($data['posts']->count())
<nav class="flex text-base my-8">
    @if ($previous = $data['posts']->previousPageUrl())
    <a href="{{ $previous }}" title="Previous Page" class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3">&LeftArrow;</a>
    @endif


    @if ($next = $data['posts']->nextPageUrl())
    <a href="{{ $next }}" title="Next Page" class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3">&RightArrow;</a>
    @endif
</nav>
@endif --}}
@stop

@section('newsletter')
<section role="main" class="flex-auto w-full container max-w-4xl mx-auto px-6">
    @include('components.newsletter-signup')
</section>
@endsection