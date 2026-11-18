@extends('layouts.app')

@section('title', 'Home | Velvet Crema Cafe')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
<section class="hero" aria-label="Featured cafe moments">
    <div class="slider" id="cafe-slider">
        <div class="slide active" style="background-image: url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1800&q=85')">
            <div class="slide-overlay"></div>
            <div class="hero-content">
                <p class="eyebrow">Roasted with care</p>
                <h1>Your daily pause,<br>beautifully brewed.</h1>
                <p class="hero-description">Thoughtful coffee, fresh bakes, and a comfortable corner made for slow mornings and bright conversations.</p>
                <a class="button button-light" href="{{ route('about') }}">Discover our story</a>
            </div>
        </div>
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1445116572660-236099ec97a0?auto=format&fit=crop&w=1800&q=85')">
            <div class="slide-overlay"></div>
            <div class="hero-content">
                <p class="eyebrow">Come as you are</p>
                <h1>A warm table<br>is waiting.</h1>
                <p class="hero-description">Settle in for handcrafted drinks, seasonal plates, and genuine hospitality from sunrise to sunset.</p>
                <a class="button button-light" href="{{ route('contact') }}">Visit the cafe</a>
            </div>
        </div>
    </div>
    <button class="theme-toggle" type="button" id="theme-toggle" aria-label="Switch to dark mode">☾</button>
    <div class="slider-controls">
        <button type="button" class="slider-arrow" id="previous-slide" aria-label="Previous slide">←</button>
        <span id="slide-count">01 / 02</span>
        <button type="button" class="slider-arrow" id="next-slide" aria-label="Next slide">→</button>
    </div>
</section>

<section class="welcome">
    <div>
        <p class="eyebrow dark">Welcome to Velvet Crema</p>
        <h2>More than coffee,<br>it is a feeling.</h2>
    </div>
    <p>We are a neighborhood cafe built around quality ingredients and unhurried moments. Every cup is prepared with care, every plate is made for sharing, and every guest is welcomed like a regular.</p>
</section>
@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endpush
