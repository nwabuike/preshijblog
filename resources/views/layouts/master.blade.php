<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $meta['description'] ?? config('services.meta.mantra') }}">

    <title>{{ $meta['title'] ?? config('services.meta.site_name') }} ― {{ $meta['description'] ?? config('services.meta.mantra') }}</title>

    <link rel="home" href="{{ url('/') }}">
    <link rel="icon" href="{{asset('img/favicon.ico')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    @stack('meta')

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>

<body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
    <header class="flex items-center shadow bg-white border-b h-24 py-4" role="banner">
        <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
            <div class="flex items-center">
                <a href="{{url('/')}}" title="{{ config('services.meta.site_name') }} home" class="inline-flex items-center">
                    <img class="rounded-full h-8 md:h-10 mr-3" src="{{ asset('/img/logo.jpg')}}" alt="{{ config('services.meta.site_name') }} logo" />

                    <h1 class="text-lg md:text-2xl text-blue-800 font-semibold hover:text-blue-600 my-0">{{ config('services.meta.site_name') }} <br>
                        <span class="text-sm text-gray-600">{{ config('services.meta.mantra') }}</span></h1>
                </a>
            </div>

            <div id="vue-search" class="flex flex-1 justify-end items-center">
                <search></search>

                @include('components.menu')

                @include('components.menu-toggle')
            </div>
        </div>
    </header>

    @include('components.menu-responsive')

    <main role="main" class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
        @yield('body')
    </main>

    @yield('newsletter')

    <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">

        <ul class="list-reset inline-block text-center">
            <li class="inline-block">
                <a href="{{config('services.social.twitter')}}" target="_blank" title="Twitter">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </li>
            <li class="inline-block">
                <a href="{{config('services.social.medium')}}" target="_blank" title="Medium">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-medium fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </li>
            <li class="inline-block">
                <a href="{{config('services.social.email')}}" target="_blank" title="Email">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </li>

        </ul>
        <ul class="flex flex-col md:flex-row justify-center list-reset">
            <li class="md:mr-2">
                &copy; <a href="#" title="{{config('services.meta.site_name')}}">{{config('services.meta.site_name')}}</a> {{ date('Y') }}.
            </li>
        </ul>
    </footer>
    <script src="{{asset('js/main.js')}}"></script>
    @stack('scripts')
</body>

</html>