<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ __('Contact Us') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    @include('includes.header')

    <style>
    body {
        background-color: #f5f7fa;
        font-family: 'Segoe UI', sans-serif;
    }

    .hero-top {
        background: #e9efff;
        padding: 70px 20px;
        text-align: center;
    }

    .hero-top h1 {
        font-size: 38px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .hero-top h2 {
        font-size: 20px;
        font-weight: 500;
        margin-bottom: 15px;
        opacity: 0.9;
    }

    .hero-top p {
        font-size: 16px;
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.7;
        opacity: 0.95;
    }

    .contact-top-section {
        /* background: linear-gradient(135deg, #f0f4ff, #ffffff); */
        border-radius: 20px;
        padding: 60px 40px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04);
        margin-top: 50px;
    }

    .section-label {
        color: #0d6efd;
        font-weight: 700;
        font-size: 14px;
        text-transform: uppercase;
        margin-bottom: 12px;
        border-left: 4px solid #0d6efd;
        padding-left: 12px;
    }

    .contact-heading {
        font-size: 32px;
        font-weight: 800;
        color: #1a1a1a;
    }

    .contact-desc {
        font-size: 16px;
        color: #4f5b66;
    }

    .contact-info-box {
        background-color: #f8f9fc;
        transition: all 0.3s ease;
        border-left: 4px solid transparent;
        border-radius: 10px;
    }

    .contact-info-box:hover {
        background-color: #eef3fa;
        border-left-color: #0d6efd;
    }

    .icon-wrapper {
        width: 48px;
        height: 48px;
        font-size: 18px;
        flex-shrink: 0;
    }

    .contact-section {
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
        padding: 60px 40px;
    }

    .form-control {
        border-radius: 10px;
        padding: 14px 18px;
        font-size: 16px;
        border: 1px solid #ced4da;
    }

    .form-control:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }

    .form-label {
        font-weight: 600;
    }

    .btn-yellow {
        background-color: #ffc107;
        color: #212529;
        font-weight: 600;
        border-radius: 8px;
        padding: 12px 24px;
        transition: 0.3s;
        box-shadow: 0 4px 16px rgba(255, 193, 7, 0.25);
    }

    .btn-yellow:hover {
        background-color: #e0ac00;
    }
.btn-primary {
    background-color: #0056d2;
    border-color: #0056d2;
    &:hover {
        background-color: #004bb5;
        border-color: #004bb5;
    }
}

    @media (max-width: 768px) {
        .hero-top h1 {
            font-size: 28px;
        }

        .contact-top-section {
            padding: 30px 20px;
        }

        .contact-heading {
            font-size: 26px;
        }
    }
    </style>
</head>

<body>

    <!-- Hero Section -->
    <div class="hero-top">
        <h1>{{ __('Biennial Statement Filing Required by NY State Law') }}</h1>
        <h2>{{ __('Stay Compliant. Stay Informed.') }}</h2>
        <p>
            {{ __('Every business entity operating in New York must file a biennial statement to maintain good standing with the Department of State. Avoid penalties and stay compliant by filing your statement on time. If you need guidance or support, our team is here to assist you throughout the process.') }}
        </p>
    </div>

    <!-- Contact Info Section -->
    <section class="container contact-top-section">
        <div class="row align-items-center g-5">
            <!-- Text + Email + Phone -->
            <div class="col-lg-6">
                <div class="section-label">{{ __('Contact Info') }}</div>
                <h2 class="contact-heading mb-3">{{ __('Have Questions?') }}<br>{{ __('We’re Here to Help!') }}</h2>
                <p class="contact-desc mb-4">
                    {{ __('Our experts are here to guide you through every step — from idea to implementation. Reach out anytime, and let’s make something great together.') }}
                </p>

                <!-- Email -->
                <div class="contact-info-box d-flex align-items-start gap-3 p-3 mb-3 shadow-sm">
                    <div
                        class="icon-wrapper bg-primary text-white rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-envelope-fill fs-5"></i>
                    </div>
                    <div>
                        <small class="text-muted">{{ __('Email us at') }}</small><br />
                        <a href="mailto:info@boicomplianceservices.com"
                            class="text-decoration-none fw-semibold text-dark">
                            info@boicomplianceservices.com
                        </a>
                    </div>
                </div>

                <!-- Phone -->
                <div class="contact-info-box d-flex align-items-start gap-3 p-3 shadow-sm">
                    <div
                        class="icon-wrapper bg-success text-white rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-telephone-fill fs-5"></i>
                    </div>
                    <div>
                        <small class="text-muted">{{ __('Call us') }}</small><br />
                        <a href="tel:+923001234567" class="text-decoration-none fw-semibold text-dark">
                            +92 300 1234567
                        </a>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="col-lg-6 text-center">
                <img src="/assets/images/contact.png" alt="Contact" class="img-fluid rounded-3 shadow-sm"
                    style="max-width: 400px;">
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
   <section class="py-5 bg-light">
    <div class="container">
        <div class="contact-section shadow-lg p-5 rounded-4 bg-white">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h3 class="fw-bold display-6 text-primary mb-3">{{ __('Let’s Talk') }}</h3>
                    <p class="text-muted fs-5 mb-4">
                        {{ __('Send us a message, and we’ll get back to you as soon as possible. Whether it’s a project idea, a question, or a business opportunity — we’re listening.') }}
                    </p>

                    @if(session('success'))
                        <div class="alert alert-success rounded-3">
                            {{ __('Thank you for your message! We will get back to you shortly.') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit') }}" class="text-start mt-4">
                        @csrf

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">{{ __('Your Name') }}</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="{{ __('Name') }}" value="{{ old('name') }}" required />
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">{{ __('Email Address') }}</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="{{ __('you@example.com') }}" value="{{ old('email') }}" required />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">{{ __('Message') }}</label>
                                <textarea name="message"
                                    class="form-control @error('message') is-invalid @enderror"
                                    rows="6" placeholder="{{ __('Write your message here...') }}" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4 d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-send me-2"></i>{{ __('Send Message') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>