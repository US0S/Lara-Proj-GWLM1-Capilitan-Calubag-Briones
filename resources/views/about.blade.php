
@extends('layouts.app')

@section('title', 'About | Velvet Crema Cafe')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

<section class="about-hero" aria-labelledby="about-title">
    <div>
        <p class="eyebrow">OUR STORY</p>
        <h1 id="about-title">More than<br>just coffee.</h1>
    </div>

    <p>
        At Velvet Crema Cafe, every cup is an invitation to slow down,
        connect, and enjoy life's simple moments.
    </p>
</section>

<section class="story-grid" aria-labelledby="story-title">

    <img
        src="https://images.unsplash.com/photo-1764584503115-3fca2f40700a?auto=format&fit=crop&w=1200&q=80"
        alt="Barista preparing coffee behind a cafe counter"
        loading="lazy"
        decoding="async"
    >

    <div class="story-copy">
        <p class="eyebrow">A LITTLE ABOUT US</p>

        <h2 id="story-title">A warm cup, a welcoming place.</h2>

        <p>
            Velvet Crema Cafe began with a simple idea: create a comfortable
            neighborhood space where good coffee and genuine hospitality
            come together.
        </p>

        <div class="extra-story" id="extra-story">
            <p>
                From carefully prepared espresso to fresh treats and friendly
                conversations, we aim to make every visit feel personal.
                Whether guests stop by for a morning pick-me-up or spend an
                afternoon catching up, our cafe is a place to pause and feel
                at home.
            </p>
        </div>

        <button
            class="read-toggle"
            id="read-toggle"
            type="button"
            aria-expanded="false"
            aria-controls="extra-story"
        >
            Read more <span>+</span>
        </button>
    </div>

</section>

<section class="values" aria-label="Our mission and vision">

    <article>
        <span>01 / OUR MISSION</span>
        <h3>Our Mission</h3>
        <p>
            To serve thoughtfully prepared coffee and fresh local flavors
            in a welcoming space where every guest feels valued.
        </p>
    </article>

    <article>
        <span>02 / OUR VISION</span>
        <h3>Our Vision</h3>
        <p>
            To become a beloved neighborhood cafe known for quality,
            warmth, and meaningful connections within the community.
        </p>
    </article>

</section>

<section class="team-section" aria-labelledby="team-title">

    <div class="team-heading">
        <div>
            <p class="eyebrow">THE PEOPLE BEHIND THE CUP</p>
            <h2 id="team-title">Meet our team.</h2>
        </div>

        <p>
            Good coffee takes care, teamwork, and people who love what they do.
        </p>
    </div>

    <div class="team-grid">

        <article class="team-card">
            <img
                src="https://images.unsplash.com/photo-1753351052277-a7ff634f0bd5?auto=format&fit=crop&w=900&q=80"
                alt="Cafe team members standing behind their coffee shop counter"
                loading="lazy"
                decoding="async"
            >
            <h3>CJ Capilitan</h3>
            <p>Cafe Manager</p>
        </article>

        <article class="team-card">
            <img
                src="https://images.unsplash.com/photo-1764584503115-3fca2f40700a?auto=format&fit=crop&w=900&q=80"
                alt="Barista preparing coffee at the cafe"
                loading="lazy"
                decoding="async"
            >
            <h3>Niño Calubag</h3>
            <p>Head Barista</p>
        </article>

        <article class="team-card">
            <img
                src="https://images.unsplash.com/photo-1763272594094-946e5be3ccbe?auto=format&fit=crop&w=900&q=80"
                alt="Baristas smiling behind a coffee shop counter"
                loading="lazy"
                decoding="async"
            >
            <h3>Nicholas Daniel Briones</h3>
            <p>Cafe Operations</p>
        </article>

    </div>

</section>

@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}" defer></script>
@endpush
