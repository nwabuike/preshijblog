@extends('layouts.master')


@php
$post = $data['post'];

@endphp

@push('meta')
<meta name="keywords" content="{{  $post['tags'] ?? implode(',', $post['tags']) }}">
<meta name="description" content="{{ $data['meta']['meta_description'] }}">
<meta property="og:type" content="article">
<meta name="og:title" content="{{ $data['meta']['opengraph_title'] }}">
<meta name="og:description" content="{{ $data['meta']['opengraph_description'] }}">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{ $data['meta']['opengraph_title'] }}">
<meta name="twitter:description" content="{{ $data['meta']['opengraph_description'] }}">

@isset($data['post']->featured_image)
<meta name="og:image" content="{{ url($data['post']->featured_image) }}">
<meta name="twitter:image" content="{{ url($data['post']->featured_image) }}">
@endisset
@endpush


@section('body')
<!--************************************
			Header End
 	*************************************-->
	<!--************************************
			Inner Banner Start
	 *************************************-->
     <div class="tg-banner tg-haslayout parallax-window" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="img/bg-parallax/parallax-01.jpg">
		<div class="tg-displaytable">
			<div class="tg-displaytablecell">
				<div class="container">
					<h3>blog list</h3>
					<ol class="tg-breadcrumb">
						<li><a href="{{ url(' /')}}">Home</a></li>
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
					<img src="{{ asset('img/new-alert-batch.png')}}" alt="new-alert-batch">
				</span>
				<div class="clip tg-haslayout">
					<div class="today">
						<ul>
							<li>“Human &amp; Rights” has been helping the and surviving family Rights” know when  has been .  ( Preshblog )</li>
							<li>“Human &amp; Rights” has been helping the and surviving family Rights” know when  has been .  ( Preshblog )</li>
							<li>“Human &amp; Rights” has been helping the and surviving family Rights” know when  has been .  ( Preshblog )</li>
							<li>“Human &amp; Rights” has been helping the and surviving family Rights” know when  has been .  ( Preshblog )</li>
						</ul>
					</div>
				</div>
				<div class="live-weather">
					<strong class="weather-digree">+ 18C</strong>
					<div class="weather-loaction">
						<img src="{{ asset('img/weather-icon.png')}}" alt="weather-icon">
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
									<h2>post Deatails</h2>
								</div>
								<div id="tg-slider-post" class="tg-slider-post">
									<div class="item">
										<figure class="tg-smallpost">
											<a href="#">
                                                 @if ($post->featured_image)
                                                <img src="{{ $post->featured_image}}" alt="{{ $post->title }} cover image" class="mb-2">
                                                @endif
                                                
											<span class="post-batch entertainment">post details</span>
										</figure>
										<div class="tg-post tg-haslayout">
											<h3>{{ $post->title }}</h3>
											<ul class="tg-postmata">
												<li>
													<a href="#">
														<i class="fa fa-user"></i>
														<em>Presh Blog</em>
													</a>
												</li>
												<li>
													<time datetime="2016-04-13">
														<a href="#">
															<i class="fa fa-clock-o"></i>
															<em>Published {{ format_date($post->publish_date) }}</em>
														</a>
													</time>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-thumbs-o-up"></i>
														<em>{{ read_time($data['post']->body) }}</em>
													</a>
												</li>
											</ul>
											<div class="tg-description">
                                                {!! $post->body !!}
                                            </div>
											<div class="tg-tags-socials tg-haslayout">
												<div class="tg-tags pull-left">
													<span><i class="fa fa-tags"></i>bring you the best news</span>
												</div>
												<div class="tg-socialicons pull-right">
													<ul class="tg-socialicons">
														<li><a href="{{config('services.social.facebook')}}"><i class="fa fa-facebook-f"></i></a></li>
                                                        <li><a href="{{config('services.social.twitter')}}"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="{{config('services.social.email')}}"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="{{config('services.social.instagram')}}"><i class="fa fa-instagram"></i></a></li><li><a href="{{config('services.social.facebook')}}"><i class="fa fa-facebook-f"></i></a></li>
                                                       
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
                                                 @if ($post->featured_image)
                                                <img src="{{ $post->featured_image}}" alt="{{ $post->title }} cover image" class="mb-2">
                                                @endif
                                                
											<span class="post-batch entertainment">post details</span>
										</figure>
										<div class="tg-post tg-haslayout">
											<h3>{{ $post->title }}</h3>
											<ul class="tg-postmata">
												<li>
													<a href="#">
														<i class="fa fa-user"></i>
														<em>Presh Blog</em>
													</a>
												</li>
												<li>
													<time datetime="2016-04-13">
														<a href="#">
															<i class="fa fa-clock-o"></i>
															<em>Published {{ format_date($post->publish_date) }}</em>
														</a>
													</time>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-thumbs-o-up"></i>
														<em>{{ read_time($data['post']->body) }}</em>
													</a>
												</li>
											</ul>
											<div class="tg-description">
                                                {!! $post->body !!}
                                            </div>
											<div class="tg-tags-socials tg-haslayout">
												<div class="tg-tags pull-left">
													<span><i class="fa fa-tags"></i>bring you the best news</span>
												</div>
												<div class="tg-socialicons pull-right">
													<ul class="tg-socialicons">
														<li><a href="{{config('services.social.facebook')}}"><i class="fa fa-facebook-f"></i></a></li>
                                                        <li><a href="{{config('services.social.twitter')}}"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="{{config('services.social.email')}}"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="{{config('services.social.instagram')}}"><i class="fa fa-instagram"></i></a></li><li><a href="{{config('services.social.facebook')}}"><i class="fa fa-facebook-f"></i></a></li>
                                                        <li><a href="{{config('services.social.twitter')}}"><i class="fa fa-twitter"></i></a></li>
                                                         <li><a href="{{config('services.social.email')}}"><i class="fa fa-google-plus"></i></a></li>
                                                          <li><a href="{{config('services.social.instagram')}}"><i class="fa fa-instagram"></i></a></li>
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
                                                 @if ($post->featured_image)
                                                <img src="{{ $post->featured_image}}" alt="{{ $post->title }} cover image" class="mb-2">
                                                @endif
                                                
											<span class="post-batch entertainment">post details</span>
										</figure>
										<div class="tg-post tg-haslayout">
											<h3>{{ $post->title }}</h3>
											<ul class="tg-postmata">
												<li>
													<a href="#">
														<i class="fa fa-user"></i>
														<em>Presh Blog</em>
													</a>
												</li>
												<li>
													<time datetime="2016-04-13">
														<a href="#">
															<i class="fa fa-clock-o"></i>
															<em>Published {{ format_date($post->publish_date) }}</em>
														</a>
													</time>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-thumbs-o-up"></i>
														<em>{{ read_time($data['post']->body) }}</em>
													</a>
												</li>
											</ul>
											<div class="tg-description">
                                                {!! $post->body !!}
                                            </div>
											<div class="tg-tags-socials tg-haslayout">
												<div class="tg-tags pull-left">
													<span><i class="fa fa-tags"></i>bring you the best news</span>
												</div>
												<div class="tg-socialicons pull-right">
													<ul class="tg-socialicons">
														<li><a href="{{config('services.social.facebook')}}"><i class="fa fa-facebook-f"></i></a></li>
                                                        <li><a href="{{config('services.social.twitter')}}"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="{{config('services.social.email')}}"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="{{config('services.social.instagram')}}"><i class="fa fa-instagram"></i></a></li><li><a href="{{config('services.social.facebook')}}"><i class="fa fa-facebook-f"></i></a></li>
                                                        <li><a href="{{config('services.social.twitter')}}"><i class="fa fa-twitter"></i></a></li>
                                                         <li><a href="{{config('services.social.email')}}"><i class="fa fa-google-plus"></i></a></li>
                                                          <li><a href="{{config('services.social.instagram')}}"><i class="fa fa-instagram"></i></a></li>
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
												<a href="#"><img src="img/post-of-day/img-01.jpg" alt="img-01"></a>
												<span class="post-batch entertainment">entertainment</span>
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
									Related Post End
							*************************************-->
							<!--************************************
									Next Previous Post Start
							*************************************-->
							<div class="tg-nextpre-posts tg-haslayout">
								<div class="tg-previouspost pull-left">
									{{-- <figure class="tg-preimage"> --}}
                                        @if ($previous = $data['prev'])
                                        <a style="color:black; href="{{ post_url($previous->slug) }}" title="Newer Post: {{ $previous->title }}">
                                            <img src="{{ asset('img/img-pre.jpg')}}" alt="image description">
                                            &LeftArrow; {{ $previous->title }}
                                        </a>
                                        @endif
										{{-- <a href="#">
											<img src="{{ asset('img/img-pre.jpg')}}" alt="image description">
										</a> --}}
										{{-- <span>Previous post<i class="fa fa-long-arrow-left"></i></span> --}}
									{{-- </figure> --}}
								</div>
								<div class="tg-nextpost pull-right">
									{{-- <figure class="tg-nextimage"> --}}
                                        @if ($next = $data['next'])
                                        <a style="color:black;" href="{{post_url($next->slug) }}" title="Older Post: {{ $next->title }}">
                                            <img src="{{ asset('img/img-next.jpg')}}" alt="image description">
                                            {{ $next->title }} &RightArrow;
                                        </a>
                                        @endif
										{{-- <span>Next post<i class="fa fa-long-arrow-right"></i></span> --}}
									{{-- </figure> --}}
								</div>
							</div>
							<!--************************************
									Next Previous Post End
							*************************************-->
							<!--************************************
									Skip Add Post Start
							*************************************-->
							 <div class="tg-contentadd">
								<figure>
									<a href="#"><img src="{{ asset('img/img-01.jpg')}}" alt="skip add"></a>
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
								{{-- <form class="tg-form-comment tg-haslayout">
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
                                </form> --}}
                                <div id="disqus_thread"></div>
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
												<a href="{{config('services.social.twitter')}}">
													<i class="fa fa-twitter"></i>
													<span>FOLLOWERS</span>
													<strong>100</strong>
												</a>
											</li>
											<li class="facebook">
												<a href="{{config('services.social.facebook')}}">
													<i class="fa fa-facebook"></i>
													<span>FOLLOWERS</span>
													<strong>728</strong>
												</a>
											</li>
											<li class="pinterest">
												<a href="{{config('services.social.instagram')}}">
													<i class="fa fa-instagram"></i>
													<span>FOLLOWERS</span>
													<strong>551</strong>
												</a>
											</li>
										</ul>
									</div>
									<div class="tg-widget tg-addwidget">
										<div class="tg-add">
											<a href="#"><img src="{{ asset('img/aside-add-img1.jpg')}}" alt="image description"></a>
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
											{{-- <div class="tab-content">
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
											</div> --}}
										</div>
									</div>
									<div class="tg-widget tg-sliderwidget">
										<div id="tg-widget-slider" class="tg-widget-slider">
											<div class="item">
												<figure>
													<img src="{{ asset('img/img-02.jpg')}}" alt="image description">
												</figure>
												<h3><a href="#">Girl yoyo entertainment listing with dj. butt.</a></h3>
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
													<p>Android Wear watches feature always-on display the cool entertainment messages ...</p>
												</div>
											</div>
											<div class="item">
												<figure>
													<img src="{{ asset('img/img-02.jpg')}}" alt="image description">
												</figure>
												<h3><a href="#">Girl yoyo entertainment listing with dj. butt.</a></h3>
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
													<p>Android Wear watches feature always-on display the cool entertainment messages ...</p>
												</div>
											</div>
											<div class="item">
												<figure>
													<img src="img/img-02.jpg" alt="image description">
												</figure>
												<h3><a href="#">Girl yoyo entertainment listing with dj. butt.</a></h3>
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
													<p>Android Wear watches feature always-on display the cool entertainment messages ...</p>
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
											{{-- <div class="tab-content">
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
											</div> --}}
										</div>
									</div>
									
									<div class="tg-widget tg-catagorieswidget">
										<div class="tg-sectionheading">
											<h2>catagories</h2>
										</div>
										<ul>
                                            <li><a href="{{route('fashion')}}"><em>fashion</em><i>389</i></a></li>
                                            <li><a href="{{route('entertainment')}}"><em>entertainment</em><i>389</i></a></li>
											<li><a href="{{route('technology')}}"><em>technology</em><i>256</i></a></li>
                                            <li><a href="{{route('food')}}"><em>food</em><i>43</i></a></li>
                                            <li><a href="{{route('sport')}}"><em>sports</em><i>43</i></a></li>
											<li><a href="{{route('travel')}}"><em>ftravel</em><i>43</i></a></li>
                                            <li><a href="{{route('music')}}"><em>music</em><i>38</i></a></li>
                                            <li><a href="{{route('politics')}}"><em>politics</em><i>38</i></a></li>
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
<br>
<script>
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://preshblog-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


<script id="dsq-count-scr" src="//preshblog-1.disqus.com/count.js" async></script>
@endsection


