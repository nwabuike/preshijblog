@extends('layouts.master')

@push('meta')
<meta property="og:title" content="{{ $data['series_title'] }}" />
<meta property="og:url" content="{{ url()->full() }}" />
<meta property="og:description" content="{{ $data['series_description'] }}" />

<meta name="description" content="{{ $data['series_description'] }}">
<meta property="og:type" content="article">
<meta name="og:title" content="{{$data['series_title'] }}">
<meta name="og:description" content="{{ $data['series_description'] }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
{{-- 
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{$data['series_title'] }}">
<meta name="twitter:description" content="{{ $data['series_description'] }}">
<meta name="og:image" content="{{ $data['series_banner'] }}">
<meta name="twitter:image" content="{{ $data['series_banner'] }}"> --}}
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
					<strong class="weather-digree">+ 18C</strong>
					<div class="weather-loaction">
						<img src="img/weather-icon.png" alt="weather-icon">
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
								<h2>music</h2>
							</div>
							<figure class="tg-smallpost">
								<a href="#"><img alt="image description" src="img/img-05.jpg"></a>
								<span class="post-batch politics">{{$data['series_title']}}</span>
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
												<em>Published {{ format_date($post->publish_date) }} </em>
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
									{!! $post->excerpt ? '<p class="text-xl mb-4 mt-0">'. $post->excerpt.'</p>':'' !!}
									 @if ($post != $data['posts']->last())
									 @endif
									<h4>Long term investment</h4>
									{{-- <p>Science funding of £4.7 billion will be protected in real terms over the Parliament. This will include a £1.5 billion new Global Challenges Fund. The government is also taking steps to ensure these resources are used strategically and effectively through the Nurse Review recommendations and the HE green paper consultation.The government commits to funding aerospace and automotive technologies for 10 years.This will provide over £1 billion additional funding for innovation in these sectors.</p>
							<p>By 2019 to 2020, government spending on apprenticeships will have doubled in cash terms compared to 2010 to 2011 including income from the new apprenticeship levy. Funding for the core adult skills participation budgets such as digital and high speed rail.</p>
							<div class="row">
								<div id="tg-relatedimage-slider" class="tg-relatedimage-slider tg-haslayout">
									<div class="item">
										<figure>
											<img src="img/full-width-post/img-01.jpg" alt="image description">
										</figure>
									</div>
									<div class="item">
										<figure>
											<img src="img/full-width-post/img-02.jpg" alt="image description">
										</figure>
									</div>
									<div class="item">
										<figure>
											<img src="img/full-width-post/img-03.jpg" alt="image description">
										</figure>
									</div>
									<div class="item">
										<figure>
											<img src="img/full-width-post/img-04.jpg" alt="image description">
										</figure>
									</div>
									<div class="item">
										<figure>
											<img src="img/full-width-post/img-01.jpg" alt="image description">
										</figure>
									</div>
									<div class="item">
										<figure>
											<img src="img/full-width-post/img-02.jpg" alt="image description">
										</figure>
									</div>
								</div>
							</div>
							<p>The government has lifted the cap on student numbers to allow more young people, particularly from disadvanta backgrounds, to go to university than ever before. Universities forecast income growth of £2.3 billion by 2020 from the planned expansion of places for home, EU and international students.</p>
							<p>In this context, the government will reduce the teaching grant by £120 million in cash terms by 2019 to 2020, but allows befunding for high cost subjects to be protected in real terms. The government will work with the Director of Fair Access to ensure universities take more responsibility for wideninosng access and social mobility, and ask the Higher The government will also make savings in other areas of the teaching grant.</p>
							<p>eque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.</p>
							<p>Maecenas tempus, tellus eget condimentum loremipsu rhoncus, sem quam semper libero, sit amet ipsum lore adipiscing sem neque sed ipsum. Nam quam nuncttlie, blandit vel, luctus pulvinar, hendrerit id, lorem.Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et..</p> --}}
								</div>
								<div class="tg-tags-socials tg-haslayout">
									<div class="tg-tags pull-left">
										<span><i class="fa fa-tags"></i>technology, powerfull, mobile, watch</span>
									</div>
									<div class="tg-socialicons pull-right">
										<ul class="tg-socialicons">
											<li><a href="#"><i class="fa fa-f<li><a href="{{config('services.social.facebook')}}"><i class="fa fa-facebook-f"></i></a></li>
                                            <li><a href="{{config('services.social.twitter')}}"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="{{config('services.social.email')}}"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="{{config('services.social.instagram')}}"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="tg-star-ranking tg-haslayout">
									<div class="tg-rating pull-left">
										<span>Average :<i> 95%</i></span>
										<ul class="rankig-star">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<div class="tg-userrating pull-right">
										<span>User rating :<i> 6.6 (89 votes)</i></span>
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
											<span class="post-batch enter">music</span>
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
	{{-- <h1>Series: {{$data['series_title']}}</h1>

    <hr class="border-b my-6">

    @foreach ($data['posts'] as $post)
        @include('components.post-preview-inline')

        @if ($post != $data['posts']->last())
        <hr class="border-b my-3">
        @endif
    @endforeach --}}
@endsection