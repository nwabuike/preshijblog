@extends('layouts.master')

@push('meta')
<meta property="og:title" content="About {{ $meta['title'] ?? config('services.meta.site_name') }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->full() }}" />
<meta property="og:description" content="A little bit about {{ $meta['description'] ?? config('services.meta.mantra') }}" />
@endpush

@section('body')

<h1>About Me</h1>

<img src="{{ asset('/img/presh_pics.jpg')}}" alt="About image" class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

<p class="mb-6">Hello, I am Nwafor Precious Ijeoma</p>

<p class="mb-6">
    I am from Ndiown in orumba North L.G.A, Anambra state. I am an undergraduate of library and information science in university of Nigeria Nsukka.  
</p>
<p>
    I love making friends, socializing, singing, dancing, acting, excercising, researching, reading, writing and traveling.I am an aspiring humanitarian,a lover and believer of God.

</p>

<p>
    I created this blog as a platform in which i can bring gist of what is happening around the world, closer to my readers and also a best place where people can share their opinions, advertise their products, we can also help you promote your business.
</p>

<p class="mb-6">
    I love blogging because it has always beeen my passion to communicate with people and share my taught through writing.
</p>

@endsection

@section('newsletter')
<section role="main" class="flex-auto w-full container max-w-4xl mx-auto px-6">
    @include('components.newsletter-signup')
</section>
@endsection