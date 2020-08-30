@extends('layouts.master')

@section('body')
    <!--************************************
			Inner Banner Start
	 *************************************-->
	<div class="tg-banner tg-haslayout parallax-window" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{asset('img/bg-parallax/parallax-01.jpg')}}">
        <div class="tg-displaytable">
            <div class="tg-displaytablecell">
                <div class="container">
                    <h3>404 error</h3>
                    <ol class="tg-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">pages</a></li>
                        <li>404 page</li>
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
    <main id="main" class="tg-404error2 tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="tg-404content tg-haslayout">
                        <h2>4<span></span>4</h2>
                        <p>This page is nowhere to be found<a href="{{route('articles')}}">Articles</a>.</p>
                        <em>Thanks for noticing-we are hoinh to fix it us ansd</em>
                        <em>have thinhs back to normal soon.</em>
                        <div class="tg-404search tg-haslayout">
                            <div class="tg-search404 tg-haslayout">
                                <fieldset>
                                    <div class="col-md-8 col-md-offset-1 col-sm-7 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                                        <div class="row">
                                            <input type="text" placeholder="TYPE ANY KEYWORD" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <div class="row">
                                            <button type="submit" class="tg-btn"><span>search</span></button>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
@endsection
