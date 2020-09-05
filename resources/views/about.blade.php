@extends('layouts.master')

@push('meta')
<meta property="og:title" content="About {{ $meta['title'] ?? config('services.meta.site_name') }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->full() }}" />
<meta property="og:description" content="A little bit about {{ $meta['description'] ?? config('services.meta.mantra') }}" />
@endpush

@section('body')
<main class="main-content tg-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="tg-fullwidth-post tg-haslayout">
                    <section class="tg-haslayout">
                        <div class="tg-sectionheading">
                            <h2>About Me</h2>
                        </div>
                        <div class="tg-post tg-haslayout">
                        <p >
                            Preshblog was created on june 2020, 
                            <br> preshblog is an online entertainment platform that delivers aspiring entertainment, gist, stories, news etc.
                        </p>
                        <p>
                            Follow us on Our soicial media handles.
                        
                        </p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@section('newsletter')
<section role="main" class="flex-auto w-full container max-w-4xl mx-auto px-6">
    @include('components.newsletter-signup')
</section>
@endsection