<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $meta['description'] ?? config('services.meta.mantra') }}">

    <title>{{ $meta['title'] ?? config('services.meta.site_name') }} ― {{ $meta['description'] ?? config('services.meta.mantra') }}</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{ asset('css/greedynav.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/css/sliderkit-core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/css/sliderkit-demos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset(css/transition.css)}}"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('css/color.css')}}">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <link rel="home" href="{{ url('/') }}">
    <link rel="icon" href="{{asset('img/favicon.ico')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    @stack('meta')

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    {{-- <link href="{{ asset('css/main.css') }}" rel="stylesheet"> --}}
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148883965-1"></script>
<script data-ad-client="ca-pub-6983526255410997" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-148883965-1');
</script>

</head>

<body id="home">

    	<!--************************************
						Preloadeer Start
		 *************************************-->
		<!--<div class="preloader-outer">
			<div class="preloader"></div>
		</div>-->
		<!--************************************
						Preloadeer End
		 *************************************-->
		<!--************************************
						Wrapper Start
		 *************************************-->
		<div id="wrapper" class="tg-haslayout">
			<!--************************************
					Top Bar Start
			*************************************-->
			<div class="top-bar tg-haslayout">
				<div class="container">
					<div class="top-left-side pull-left">
						<ul>
							<li>
                                <a href="{{ url(' /')}}">home</a>
                            </li>
                            <li>
                                <a href="{{ url(' /')}}">pages</a>
                           
                            </li>
                            <li>
                                <a href="{{route('about')}}">About us</a>
                                
                            </li>
                        
                            <li><a href="{{route('contact')}}">contact us</a></li>
						</ul>
					</div>
					{{-- <div class="top-right-side pull-right">
						<a class="fa fa-shopping-cart cart-icon" href="#">
							<i class="cart-no-batch">2</i>
						</a>
						<ul class="register-popup">
							<li>
								<i class="fa fa-key"></i>
								<a href="#">lOGIN</a>
							</li>
							<li>
								<i class="fa fa-user"></i>
								<a href="#">REGISTER</a>
							</li>
						</ul>
					</div> --}}
				</div>
			</div>
			<!--************************************
					Top Bar End
			*************************************-->
			<!--************************************
					Header Start
			*************************************-->
			<header id="header" class="main-header tg-haslayout">
				<div class="container">
					<div class="logo-holder">
                        <strong>
                            <a href="{{url('/')}}">
                            {{-- {{ config('services.meta.site_name') }} --}}
                            <img src="{{ asset('/img/logo.jpg')}}" width="30px" height="30px" title="{{ config('services.meta.site_name') }}" alt="logo">
                        </a>
                    </strong>
					</div>
					<nav class="tg-navigation greedy theme-shadow">
						<ul class="links">
							<li class="active">
								<a href="{{ url(' /')}}">home</a>
                            </li>
                            <li>
                                <a href="{{ url(' /')}}">pages</a>
                                <ul class="tg-dropdown">
									<li><a href="{{route('fashion')}}">fashion</a></li>
                                    <li><a href="{{route('entertainment')}}">entertainment</a></li>
                                    <li><a href="{{route('technology')}}">technology</a></li>
                                    <li><a href="{{route('food')}}">food</a></li>
                                    <li><a href="{{route('sport')}}">sport</a></li>
                                    <li><a href="{{route('travel')}}">travel</a></li>
                                    <li><a href="{{route('music')}}">music</a></li>
									<li><a href="{{route('politics')}}">politics</a></li>
								</ul>
                            </li>
                            <li>
                                <a href="{{route('about')}}">About us</a>
                                
                            </li>
                        
                            <li><a href="{{route('contact')}}">contact us</a></li>
						
						</ul>
						<button><i class="fa fa-navicon"></i></button>
						<ul class="hidden-links hidden"></ul>
						<a href="#tg-search" class="search-bar-button"><i class="fa fa-search"></i></a>
					</nav>
				</div>
			</header>
        @yield('body')
    

    <footer id="footer" class="tg-haslayout">
        <div class="tg-threecolumns">
            <div class="container">
                <div class="row">
                    <div class="tg-cols tg-haslayout">
                        <a class="tg-scroltop" href="#"><i class="fa fa-angle-up"></i></a>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="tg-col tg-haslayout">
                                <div class="tg-postheading">
                                    <h2><span>presh</span>blog post slider</h2>
                                </div>
                                <div id="tg-footerpostslider" class="tg-footerpostslider tg-haslayout">
                                    <div class="item">
                                        <figure>
                                            <img src="{{ asset('img/footer-slider/img-01.jpg')}}" alt="image description">
                                        </figure>
                                        <h3>Awesome street mix song have some  song with DJ</h3>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="{{ asset('img/footer-slider/img-05.jpg')}}" alt="image description">
                                        </figure>
                                        <h3>Awesome street mix song have some  song with DJ</h3>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="{{ asset('img/footer-slider/img-06.jpg')}}" alt="image description">
                                        </figure>
                                        <h3>Awesome street mix song have some  song with DJ</h3>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="{{ asset('img/footer-slider/img-07.jpg')}}" alt="image description">
                                        </figure>
                                        <h3>Awesome street mix song have some  song with DJ</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="tg-col tg-haslayout">
                                <div class="tg-postheading">
                                    <h2>today Comments</h2>
                                </div>
                                <div class="tg-todaycomment">
                                    <ul class="tg-todaycomments">
                                        <li>
                                            <figure>
                                                <a href="#"><img src="{{ asset('img/footer-slider/img-02.jpg')}}" alt="image description"></a>
                                            </figure>
                                            <div class="tg-postbottomcontent">
                                                <h3>smartwatch technology in the world</h3>
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
                                                <a href="#"><img src="{{ asset('img/footer-slider/img-03.jpg')}}" alt="image description"></a>
                                            </figure>
                                            <div class="tg-postbottomcontent">
                                                <h3>smartwatch technology in the world</h3>
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
                                                <a href="#"><img src="{{ asset('img/footer-slider/img-04.jpg')}}" alt="image description"></a>
                                            </figure>
                                            <div class="tg-postbottomcontent">
                                                <h3>smartwatch technology in the world</h3>
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
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="tg-col tg-haslayout">
                                <div class="tg-postheading">
                                    <h2>newsletter &amp; follow us</h2>
                                </div><script src="https://f.convertkit.com/ckjs/ck.5.js"></script>
                                <form
    action="https://app.convertkit.com/forms/1484293/subscriptions"
    class="seva-form formkit-form"
    method="post"
    data-sv-form="1484293"
    data-uid="a738e18dfd"
    data-format="inline"
    data-version="5"
    data-options='{"settings":{"after_subscribe":{"action":"message","success_message":"Success! Now check your email to confirm your subscription.","redirect_url":""},"analytics":{"google":null,"facebook":null,"segment":null,"pinterest":null},"modal":{"trigger":"timer","scroll_percentage":null,"timer":5,"devices":"all","show_once_every":15},"powered_by":{"show":true,"url":"https://convertkit.com?utm_source=dynamic&amp;utm_medium=referral&amp;utm_campaign=poweredby&amp;utm_content=form"},"recaptcha":{"enabled":false},"return_visitor":{"action":"show","custom_content":""},"slide_in":{"display_in":"bottom_right","trigger":"timer","scroll_percentage":null,"timer":5,"devices":"all","show_once_every":15},"sticky_bar":{"display_in":"top","trigger":"timer","scroll_percentage":null,"timer":5,"devices":"all","show_once_every":15}},"version":"5"}'
    min-width="400 500 600 700 800"
    style="background-color: rgb(2, 0, 0); border-radius: 8px;"
>
    <div
        class="formkit-background"
        style="
            background-image: url('//pages.convertkit.com/assets/powell/bg.jpg');
            opacity: 0.2;
        "
    ></div>
    <div data-style="minimal">
        <div
            class="formkit-header"
            data-element="header"
            style="
                color: rgb(219, 217, 238);
                font-size: 22px;
                font-weight: 700;
            "
        >
            <h1>Join the newsletter</h1>
        </div>
        <div
            class="formkit-subheader"
            data-element="subheader"
            style="color: rgb(232, 223, 223); font-size: 16px;"
        >
            <p>Subscribe to get our latest content by email.</p>
        </div>
        <ul
            class="formkit-alert formkit-alert-error"
            data-element="errors"
            data-group="alert"
        ></ul>
        <div
            data-element="fields"
            data-stacked="false"
            class="seva-fields formkit-fields"
        >
            <div class="formkit-field">
                <input
                    class="formkit-input"
                    name="email_address"
                    placeholder="Your email address"
                    required=""
                    type="email"
                    style="
                        color: rgb(14, 1, 1);
                        border-color: rgb(227, 227, 227);
                        border-radius: 4px;
                        font-weight: 400;
                    "
                />
            </div>
            <button
                data-element="submit"
                class="formkit-submit formkit-submit"
                style="
                    color: rgb(255, 255, 255);
                    background-color: rgb(93, 65, 235);
                    border-radius: 24px;
                    font-weight: 700;
                "
            >
                <div class="formkit-spinner">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <span>Subscribe</span>
            </button>
        </div>
        <div
            class="formkit-guarantee"
            data-element="guarantee"
            style="
                color: rgb(245, 237, 237);
                font-size: 13px;
                font-weight: 400;
            "
        >
            <p>We won't send you spam. Unsubscribe at any time.</p>
        </div>
        <a
            href="https://convertkit.com?utm_source=dynamic&amp;utm_medium=referral&amp;utm_campaign=poweredby&amp;utm_content=form"
            class="formkit-powered-by"
            data-element="powered-by"
            target="_blank"
            rel="noopener noreferrer"
            >Powered By Emerald</a
        >
    </div>
    <style>
        .formkit-form[data-uid="a738e18dfd"] * {
            box-sizing: border-box;
        }
        .formkit-form[data-uid="a738e18dfd"] {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .formkit-form[data-uid="a738e18dfd"] legend {
            border: none;
            font-size: inherit;
            margin-bottom: 10px;
            padding: 0;
            position: relative;
            display: table;
        }
        .formkit-form[data-uid="a738e18dfd"] fieldset {
            border: 0;
            padding: 0.01em 0 0 0;
            margin: 0;
            min-width: 0;
        }
        .formkit-form[data-uid="a738e18dfd"]
            body:not(:-moz-handler-blocked)
            fieldset {
            display: table-cell;
        }
        .formkit-form[data-uid="a738e18dfd"] h1,
        .formkit-form[data-uid="a738e18dfd"] h2,
        .formkit-form[data-uid="a738e18dfd"] h3,
        .formkit-form[data-uid="a738e18dfd"] h4,
        .formkit-form[data-uid="a738e18dfd"] h5,
        .formkit-form[data-uid="a738e18dfd"] h6 {
            color: inherit;
            font-size: inherit;
            font-weight: inherit;
        }
        .formkit-form[data-uid="a738e18dfd"] p {
            color: inherit;
            font-size: inherit;
            font-weight: inherit;
        }
        .formkit-form[data-uid="a738e18dfd"] ol:not([template-default]),
        .formkit-form[data-uid="a738e18dfd"] ul:not([template-default]),
        .formkit-form[data-uid="a738e18dfd"]
            blockquote:not([template-default]) {
            text-align: left;
        }
        .formkit-form[data-uid="a738e18dfd"] p:not([template-default]),
        .formkit-form[data-uid="a738e18dfd"] hr:not([template-default]),
        .formkit-form[data-uid="a738e18dfd"] blockquote:not([template-default]),
        .formkit-form[data-uid="a738e18dfd"] ol:not([template-default]),
        .formkit-form[data-uid="a738e18dfd"] ul:not([template-default]) {
            color: inherit;
            font-style: initial;
        }
        .formkit-form[data-uid="a738e18dfd"][data-format="modal"] {
            display: none;
        }
        .formkit-form[data-uid="a738e18dfd"][data-format="slide in"] {
            display: none;
        }
        .formkit-form[data-uid="a738e18dfd"][data-format="sticky bar"] {
            display: none;
        }
        .formkit-sticky-bar
            .formkit-form[data-uid="a738e18dfd"][data-format="sticky bar"] {
            display: block;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-input,
        .formkit-form[data-uid="a738e18dfd"] .formkit-select,
        .formkit-form[data-uid="a738e18dfd"] .formkit-checkboxes {
            width: 100%;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-button,
        .formkit-form[data-uid="a738e18dfd"] .formkit-submit {
            border: 0;
            border-radius: 5px;
            color: #ffffff;
            cursor: pointer;
            display: inline-block;
            text-align: center;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            margin-bottom: 15px;
            overflow: hidden;
            padding: 0;
            position: relative;
            vertical-align: middle;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-button:hover,
        .formkit-form[data-uid="a738e18dfd"] .formkit-submit:hover,
        .formkit-form[data-uid="a738e18dfd"] .formkit-button:focus,
        .formkit-form[data-uid="a738e18dfd"] .formkit-submit:focus {
            outline: none;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-button:hover > span,
        .formkit-form[data-uid="a738e18dfd"] .formkit-submit:hover > span,
        .formkit-form[data-uid="a738e18dfd"] .formkit-button:focus > span,
        .formkit-form[data-uid="a738e18dfd"] .formkit-submit:focus > span {
            background-color: rgba(0, 0, 0, 0.1);
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-button > span,
        .formkit-form[data-uid="a738e18dfd"] .formkit-submit > span {
            display: block;
            -webkit-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            padding: 12px 24px;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-input {
            background: #ffffff;
            font-size: 15px;
            padding: 12px;
            border: 1px solid #e3e3e3;
            -webkit-flex: 1 0 auto;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
            line-height: 1.4;
            margin: 0;
            -webkit-transition: border-color ease-out 300ms;
            transition: border-color ease-out 300ms;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-input:focus {
            outline: none;
            border-color: #1677be;
            -webkit-transition: border-color ease 300ms;
            transition: border-color ease 300ms;
        }
        .formkit-form[data-uid="a738e18dfd"]
            .formkit-input::-webkit-input-placeholder {
            color: inherit;
            opacity: 0.8;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-input::-moz-placeholder {
            color: inherit;
            opacity: 0.8;
        }
        .formkit-form[data-uid="a738e18dfd"]
            .formkit-input:-ms-input-placeholder {
            color: inherit;
            opacity: 0.8;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-input::placeholder {
            color: inherit;
            opacity: 0.8;
        }
        .formkit-form[data-uid="a738e18dfd"] [data-group="dropdown"] {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        .formkit-form[data-uid="a738e18dfd"] [data-group="dropdown"]::before {
            content: "";
            top: calc(50% - 2.5px);
            right: 10px;
            position: absolute;
            pointer-events: none;
            border-color: #4f4f4f transparent transparent transparent;
            border-style: solid;
            border-width: 6px 6px 0 6px;
            height: 0;
            width: 0;
            z-index: 999;
        }
        .formkit-form[data-uid="a738e18dfd"] [data-group="dropdown"] select {
            height: auto;
            width: 100%;
            cursor: pointer;
            color: #333333;
            line-height: 1.4;
            margin-bottom: 0;
            padding: 0 6px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            font-size: 15px;
            padding: 12px;
            padding-right: 25px;
            border: 1px solid #e3e3e3;
            background: #ffffff;
        }
        .formkit-form[data-uid="a738e18dfd"]
            [data-group="dropdown"]
            select:focus {
            outline: none;
        }
        .formkit-form[data-uid="a738e18dfd"] [data-group="checkboxes"] {
            text-align: left;
            margin: 0;
        }
        .formkit-form[data-uid="a738e18dfd"]
            [data-group="checkboxes"]
            [data-group="checkbox"] {
            margin-bottom: 10px;
        }
        .formkit-form[data-uid="a738e18dfd"]
            [data-group="checkboxes"]
            [data-group="checkbox"]
            * {
            cursor: pointer;
        }
        .formkit-form[data-uid="a738e18dfd"]
            [data-group="checkboxes"]
            [data-group="checkbox"]:last-of-type {
            margin-bottom: 0;
        }
        .formkit-form[data-uid="a738e18dfd"]
            [data-group="checkboxes"]
            [data-group="checkbox"]
            input[type="checkbox"] {
            display: none;
        }
        .formkit-form[data-uid="a738e18dfd"]
            [data-group="checkboxes"]
            [data-group="checkbox"]
            input[type="checkbox"]
            + label::after {
            content: none;
        }
        .formkit-form[data-uid="a738e18dfd"]
            [data-group="checkboxes"]
            [data-group="checkbox"]
            input[type="checkbox"]:checked
            + label::after {
            border-color: #ffffff;
            content: "";
        }
        .formkit-form[data-uid="a738e18dfd"]
            [data-group="checkboxes"]
            [data-group="checkbox"]
            input[type="checkbox"]:checked
            + label::before {
            background: #10bf7a;
            border-color: #10bf7a;
        }
        .formkit-form[data-uid="a738e18dfd"]
            [data-group="checkboxes"]
            [data-group="checkbox"]
            label {
            position: relative;
            display: inline-block;
            padding-left: 28px;
        }
        .formkit-form[data-uid="a738e18dfd"]
            [data-group="checkboxes"]
            [data-group="checkbox"]
            label::before,
        .formkit-form[data-uid="a738e18dfd"]
            [data-group="checkboxes"]
            [data-group="checkbox"]
            label::after {
            position: absolute;
            content: "";
            display: inline-block;
        }
        .formkit-form[data-uid="a738e18dfd"]
            [data-group="checkboxes"]
            [data-group="checkbox"]
            label::before {
            height: 16px;
            width: 16px;
            border: 1px solid #e3e3e3;
            background: #ffffff;
            left: 0px;
            top: 3px;
        }
        .formkit-form[data-uid="a738e18dfd"]
            [data-group="checkboxes"]
            [data-group="checkbox"]
            label::after {
            height: 4px;
            width: 8px;
            border-left: 2px solid #4d4d4d;
            border-bottom: 2px solid #4d4d4d;
            -webkit-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
            left: 4px;
            top: 8px;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-alert {
            background: #f9fafb;
            border: 1px solid #e3e3e3;
            border-radius: 5px;
            -webkit-flex: 1 0 auto;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
            list-style: none;
            margin: 25px auto;
            padding: 12px;
            text-align: center;
            width: 100%;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-alert:empty {
            display: none;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-alert-success {
            background: #d3fbeb;
            border-color: #10bf7a;
            color: #0c905c;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-alert-error {
            background: #fde8e2;
            border-color: #f2643b;
            color: #ea4110;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-spinner {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 0px;
            width: 0px;
            margin: 0 auto;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            width: 0px;
            overflow: hidden;
            text-align: center;
            -webkit-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-spinner > div {
            margin: auto;
            width: 12px;
            height: 12px;
            background-color: #fff;
            opacity: 0.3;
            border-radius: 100%;
            display: inline-block;
            -webkit-animation: formkit-bouncedelay-formkit-form-data-uid-a738e18dfd-
                1.4s infinite ease-in-out both;
            animation: formkit-bouncedelay-formkit-form-data-uid-a738e18dfd-
                1.4s infinite ease-in-out both;
        }
        .formkit-form[data-uid="a738e18dfd"]
            .formkit-spinner
            > div:nth-child(1) {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }
        .formkit-form[data-uid="a738e18dfd"]
            .formkit-spinner
            > div:nth-child(2) {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }
        .formkit-form[data-uid="a738e18dfd"]
            .formkit-submit[data-active]
            .formkit-spinner {
            opacity: 1;
            height: 100%;
            width: 50px;
        }
        .formkit-form[data-uid="a738e18dfd"]
            .formkit-submit[data-active]
            .formkit-spinner
            ~ span {
            opacity: 0;
        }
        .formkit-form[data-uid="a738e18dfd"]
            .formkit-powered-by[data-active="false"] {
            opacity: 0.35;
        }
        @-webkit-keyframes formkit-bouncedelay-formkit-form-data-uid-a738e18dfd- {
            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
                -ms-transform: scale(0);
                transform: scale(0);
            }
            40% {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }
        }
        @keyframes formkit-bouncedelay-formkit-form-data-uid-a738e18dfd- {
            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
                -ms-transform: scale(0);
                transform: scale(0);
            }
            40% {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }
        }
        .formkit-form[data-uid="a738e18dfd"] blockquote {
            padding: 10px 20px;
            margin: 0 0 20px;
            border-left: 5px solid #e1e1e1;
        }
        .formkit-form[data-uid="a738e18dfd"] {
            border: 1px solid #e3e3e3;
            max-width: 700px;
            position: relative;
            overflow: hidden;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-background {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background-size: cover;
            background-position: center;
            opacity: 0.3;
        }
        .formkit-form[data-uid="a738e18dfd"] [data-style="minimal"] {
            padding: 20px;
            width: 100%;
            position: relative;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-header {
            margin: 0 0 27px 0;
            text-align: center;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-subheader {
            margin: 18px 0;
            text-align: center;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-guarantee {
            font-size: 13px;
            margin: 10px 0 15px 0;
            text-align: center;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-guarantee > p {
            margin: 0;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-powered-by {
            color: #7d7d7d;
            display: block;
            font-size: 12px;
            margin: 10px 0 0 0;
            text-align: center;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-fields {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 25px auto 0 auto;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-field {
            min-width: 220px;
        }
        .formkit-form[data-uid="a738e18dfd"] .formkit-field,
        .formkit-form[data-uid="a738e18dfd"] .formkit-submit {
            margin: 0 0 15px 0;
            -webkit-flex: 1 0 100%;
            -ms-flex: 1 0 100%;
            flex: 1 0 100%;
        }
        .formkit-form[data-uid="a738e18dfd"][min-width~="600"]
            [data-style="minimal"] {
            padding: 40px;
        }
        .formkit-form[data-uid="a738e18dfd"][min-width~="600"]
            .formkit-fields[data-stacked="false"] {
            margin-left: -5px;
            margin-right: -5px;
        }
        .formkit-form[data-uid="a738e18dfd"][min-width~="600"]
            .formkit-fields[data-stacked="false"]
            .formkit-field,
        .formkit-form[data-uid="a738e18dfd"][min-width~="600"]
            .formkit-fields[data-stacked="false"]
            .formkit-submit {
            margin: 0 5px 15px 5px;
        }
        .formkit-form[data-uid="a738e18dfd"][min-width~="600"]
            .formkit-fields[data-stacked="false"]
            .formkit-field {
            -webkit-flex: 100 1 auto;
            -ms-flex: 100 1 auto;
            flex: 100 1 auto;
        }
        .formkit-form[data-uid="a738e18dfd"][min-width~="600"]
            .formkit-fields[data-stacked="false"]
            .formkit-submit {
            -webkit-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        }
    </style>
</form>
                                {{-- <form class="tg-subscribe tg-haslayout">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="text" placeholder="Your Name" class="form-control">
                                            </div>
                                            <div class="col-sm-12">
                                                <input type="email" placeholder="Email Address" class="form-control">
                                            </div>
                                            <div class="col-sm-12">
                                                <button class="tg-btn" type="submit"><span>Subscribe now</span></button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form> --}}
                                <div class="tg-followus">
                                    <h2>follow us</h2>
                                </div>
                                <ul class="tg-socialicons">
                                    <li><a href="{{config('services.social.facebook')}}"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="{{config('services.social.twitter')}}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{config('services.social.email')}}"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="{{config('services.social.instagram')}}"><i class="fa fa-instagram"></i></a></li>
                                    {{-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tg-footerbar tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tg-footer-nav pull-right">
                            <ul>
                                <li>
                                    <a href="{{ url(' /')}}">home</a>
                                </li>
                                <li>
                                    <a href="{{ url(' /')}}">pages</a>
                               
                                </li>
                                <li>
                                    <a href="{{route('about')}}">About us</a>
                                    
                                </li>
                            
                                <li><a href="{{route('contact')}}">contact us</a></li>
                            </ul>
                        </div>
                        <p class="tg-copyrights pull-left"> &copy; <a href="#" title="{{config('services.meta.site_name')}}">{{config('services.meta.site_name')}}</a> {{ date('Y') }}.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{ asset('js/vendor/jquery.js')}}"></script>
		<script src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyDlh_AGFXk44DuUVd6BDFas5XgqevprVms&amp;language=en"></script>
		<script src="{{ asset('js/gmap3.min.js')}}"></script>
		<script src="{{ asset('js/jquery-ui.js')}}"></script>
		<script src="{{ asset('js/parallax.js')}}"></script>
		<script src="{{ asset('js/greedynav.js')}}"></script>
		<script src="{{ asset('js/countdown.js')}}"></script>
		<script src="{{ asset('js/owl.carousel.js')}}"></script>
		<script src="{{ asset('js/datepicker.js')}}"></script>
		<script src="{{ asset('js/classie.js')}}"></script>
		<script src="{{ asset('js/bootstrap-select.js')}}"></script>
		<script src="{{ asset('js/appear.js')}}"></script>
		<script src="{{ asset('js/prettyPhoto.js')}}"></script>
		<script src="{{ asset('js/slideshow/sliderkit/jquery.sliderkit.1.9.2.pack.js')}}"></script>
		<script src="{{ asset('js/slideshow/sliderkit/addons/sliderkit.delaycaptions.1.1.pack.js')}}"></script>
		<script src="{{ asset('js/main2.js')}}"></script>
    @stack('scripts')
</body>

</html>