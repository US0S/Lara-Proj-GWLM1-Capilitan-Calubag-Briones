@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
<!-- Full Background Hero Section -->
<div class="contact-hero">
    
    <!-- The Centered Content Card -->
    <div class="contact-card">
        
        <!-- Left Side: Contact Details -->
        <div class="contact-info-side">
            <h1>Get in<br>Touch.</h1>
            <p class="subtitle">Have a question or want to book a table? Drop us a message and we'll get back to you shortly.</p>

            <div class="details">
                <div class="detail-item">
                    <span class="label">Address</span>
                    <span class="value">123 Coffee St, Butuan City</span>
                </div>
                <div class="detail-item">
                    <span class="label">Phone</span>
                    <span class="value">(085) 123-4567</span>
                </div>
                <div class="detail-item">
                    <span class="label">Email</span>
                    <span class="value">hello@velvetcrema.com</span>
                </div>
                <div class="detail-item">
                    <span class="label">Hours</span>
                    <span class="value">Mon–Sun, 7am–10pm</span>
                </div>
            </div>
        </div>

        <!-- Right Side: The Form -->
        <div class="contact-form-side">
            <form id="contactForm" class="contact-form" novalidate>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Jane Doe">
                    <span class="error" id="nameError"></span>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="jane@example.com">
                    <span class="error" id="emailError"></span>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Table Reservation">
                    <span class="error" id="subjectError"></span>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="How can we help you?"></textarea>
                    <span class="error" id="messageError"></span>
                </div>

                <button type="submit">Send Message</button>
                <p class="success" id="successMessage"></p>
            </form>
        </div>
        
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endpush