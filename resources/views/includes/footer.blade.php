<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    /* Footer Styles */
    footer {
        background: linear-gradient(to right, #f5f5f5, #ffffff);
        color: #555;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .footer-heading {
        color: #004080;
        font-weight: 700;
        letter-spacing: 0.5px;
        position: relative;
        padding-bottom: 10px;
        font-size: 1.1rem;
        text-transform: uppercase;
    }

    .footer-heading::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        background: #F5A81C;
        text-align: center;
    }

    .text-md-start .footer-heading::after {
        left: 0;
        transform: none;
    }

    .footer-links {
        list-style: none;
        padding-left: 0;
    }

    .footer-links li {
        margin-bottom: 8px;
    }

    .footer-link {
        color: #555;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
        font-size: 0.95rem;
    }

    .footer-link:hover {
        color: #F5A81C !important;
        transform: translateX(5px);
    }

    .footer-link i {
        color: #F5A81C;
        font-size: 0.8rem;
    }

    .footer-contact {
        list-style: none;
        padding-left: 0;
    }

    .footer-contact i {
        color: #004080;
        font-size: 1rem;
        min-width: 20px;
    }

    .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        background: rgba(0, 64, 128, 0.1);
        color: #004080;
        border-radius: 50%;
        transition: all 0.3s ease;
        font-size: 1rem;
    }

    .social-icon:hover {
        background: #F5A81C;
        color: white !important;
        transform: translateY(-3px);
    }

    .footer-divider {
        border-color: rgba(0, 64, 128, 0.1);
        border-width: 1px;
        margin: 2rem 0;
    }

    /* Responsive adjustments */
    @media (max-width: 767.98px) {
        .footer-heading::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .footer-brand {
            text-align: center;
        }

        .footer-links,
        .footer-contact {
            text-align: center;
        }

        .footer-link {
            justify-content: center;
        }
    }

    @media (min-width: 768px) {
        .footer-heading {
            font-size: 1.2rem;
        }
    }
    </style>
</head>

<body>
    <footer class="py-5" style="background: linear-gradient(to right, #e6e6f1ff, rgba(217, 218, 240, 1));">
        <div class="container">
            <div class="row gy-4 align-items-start">

                <!-- Logo Column -->
                <div class="col-12 col-md-4 text-center text-md-start">
                    <div class="footer-brand mb-4 text-center text-md-start">
                        <img src="/assets/images/logo.png" alt="BOL Logo" class="img-fluid mx-auto mx-md-0 d-block"
                            style="max-width: 180px; filter: brightness(0.8);">
                    </div>
                </div>

                <!-- Pages Links -->
                <div class="col-12 col-md-4 text-center text-md-start">
                    <h5 class="footer-heading mb-4">{{ __('Quick Links') }}</h5>
                    <ul class="footer-links">
                        <li class="mb-2">
                            <a href="{{ route('home') }}" class="footer-link">
                                <i class="bi bi-chevron-right me-1"></i> {{ __('Home') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('form') }}" class="footer-link">
                                <i class="bi bi-chevron-right me-1"></i> {{ __('Contact Us') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('faq') }}" class="footer-link">
                                <i class="bi bi-chevron-right me-1"></i> {{ __('FAQs') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="footer-link">
                                <i class="bi bi-chevron-right me-1"></i> {{ __('Privacy Policy') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">
                                <i class="bi bi-chevron-right me-1"></i> {{ __('Terms of Service') }}
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-12 col-md-4 text-center text-md-start">
                    <h5 class="footer-heading mb-4">{{ __('Contact Information') }}</h5>
                    <ul class="footer-contact list-unstyled">
                        <li
                            class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-start text-center text-md-start">
                            <i class="bi bi-envelope-fill me-md-2 mb-2 mb-md-0"></i>
                            <a href="mailto:info@bolcomplianceservices.com" class="footer-link">
                                info@nybiennialcompliance.com
                            </a>
                        </li>
                    </ul>
                </div>


            </div>

            <hr class="footer-divider my-4">

            <!-- Copyright -->
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="small text-muted mb-0">
                        {!! __('© :year :name. All rights reserved.', ['year' => date('Y'), 'name' => '<strong>BOL
                            Compliance Services</strong>']) !!}
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="small text-muted mb-0">
                        {{ __('Compliance solutions for New York businesses') }}
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>