@extends('layouts.master')

<!--@push('meta')-->

<meta property="og:url" content="{{ url()->full() }}" />

<meta property="og:type" content="article">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
 
<meta name="twitter:card" content="summary_large_image">
<!--@endpush-->

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
							<li>“Human &amp; Rights” has been helping the and surviving family Rights” know when  has been .  ( Preshblog )</li>
							<li>“Human &amp; Rights” has been helping the and surviving family Rights” know when  has been .  ( Preshblog )</li>
							<li>“Human &amp; Rights” has been helping the and surviving family Rights” know when  has been .  ( Preshblog )</li>
							<li>“Human &amp; Rights” has been helping the and surviving family Rights” know when  has been .  ( Preshblog )</li>
						</ul>
					</div>
				</div>
				<!-- <div class="live-weather">
					<strong class="weather-digree">+ 18C</strong>
					<div class="weather-loaction">
						<img src="img/weather-icon.png" alt="weather-icon">
						<div class="loaction">
							<span>Cloudy</span>
							<span></span>
						</div>
					</div>
				</div> -->
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
								<h2>entertainment</h2>
							</div>
						
						<div style="margin-bottom: 30px;">
							<!-- <figure class="tg-smallpost"> -->
							<img src="{{ asset('img/Dj grenium.jpeg')}}" width="1000px" height="450px" class="">
							<br/>
							<!-- <iframe src="./music/Fireboy DML Nigeria - Eli.mp3" style="width:700px; height: 100px;"></iframe> -->
						 <audio controls>
						 
							<source src="music/Dj Grenin Good vibes" type="audio/mpeg" width="700px"> 
							
							<!-- <iframe src="./music/Fireboy DML Nigeria - Eli.mp3" style="width: 500p; height: 500px;"></iframe> -->
						</audio> 
								<h4>Dj Grenin Good Vibes</h4>
							<!-- </figure> -->
							<br>
						</div>
							<div class="class="container" style="margin-bottom: 30px, important!;">
							<!-- <figure class="tg-smallpost"> -->
						<img src="{{ asset('img/pull_over.jpg')}}" width="1000px" height="450px" class="mb-2">
						<br>
						 <audio controls>
							<source src="music/pull_over.mp3" type="audio/mpeg" width="700px"> 
							
							<!-- <iframe src="./music/Fireboy DML Nigeria - Eli.mp3" style="width: 500p; height: 500px;"></iframe> -->
						</audio>
						
								<h4>Pull Over</h4>
							<!-- </figure> -->
							</div>
							<div style="margin-bottom: 30px;">
							<!-- <figure class="tg-smallpost"> -->
						<img src="{{ asset('img/highway.jpeg')}}" width="1000px" height="450px" class="mb-2">
						<br>
						 <audio controls>
							<source src="music/presh_music.mp3" type="audio/mpeg" width="700px"> 
							
							<!-- <iframe src="./music/Fireboy DML Nigeria - Eli.mp3" style="width: 500p; height: 500px;"></iframe> -->
						</audio>
								<h4>Highway</h4>
							<!-- </figure> -->
							</div>
					
						
					
						</section>
						<!--************************************
								Full Width Post End
						*************************************-->
						
						<!--************************************
								Related Post Start
						 *************************************-->
						<!-- <section class="tg-posts tg-postofday tg-haslayout">
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
											<span class="post-batch travel">General News</span>
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
						</section> -->
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