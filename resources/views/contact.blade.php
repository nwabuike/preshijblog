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
     <div class="tg-banner tg-haslayout parallax-window" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{ asset('img/bg-parallax/parallax-01.jpg')}}">
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
							<span></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
                                Contact Us Start
                        *************************************-->
                        <div class="tg-contact-us tg-haslayout">
                            <div class="tg-sectionheading">
                                <h2>Contact us</h2>
                            </div>
                            <div class="tg-post tg-haslayout">
                                <div class="col-md-6">
                                    <a style="color:rgba(37, 35, 35, 0.808);" href="mailto:preshblogger@gmail.com">
                                    <i class="fa fa-envelope"></i>
                                    Preshblogger@gmail.com</a>
                                    
                                </div>
                                <div class="col-md-6 ">
                                    <a style="color:rgba(37, 35, 35, 0.808);" href="tel:09048109227"> <i class="fa fa-phone"></i>

                                 +(234) 9048109227</a>
                                </div>
                            </div>
                            {{-- <div id="tg-map" class="tg-map tg-haslayout"></div> --}}
                        </div>
                        @if ( session('success'))
    {{ session('success') }}
@endif
                        <!--************************************
                                Contact Us End
                        *************************************-->
                        <!--************************************
                                Leave Comment Start
                        *************************************-->
                        <div class="tg-contact-us-form tg-haslayout">
                        <form class="tg-form-contact tg-haslayout" method="POST" action="{{ url('contact-us')}}">
                            @csrf
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="YOUR FULL NAME">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="mobile" class="form-control" placeholder="YOUR PHONE NUMBER">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="EMAIL ADDRESS">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="subject" class="form-control" placeholder="SUBJECT">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea name="bodyMessage" placeholder="PLEASE WRITE YOUR MESSAGE ..." class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button class="tg-btn" type="submit"><span>Send Message</span></button>
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
                    <div class="col-md-3 col-sm-4 col-xs-12 pull-right">
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
                       
                    </div>
                </aside>
                <!--************************************
                        Side Bar End
                *************************************-->
            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->
@endsection