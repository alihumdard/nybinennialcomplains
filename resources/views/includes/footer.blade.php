<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        /* Footer Styles */
        footer {
            background: #ebeceeff;
            color: #555;
            padding: 40px 0;
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
            left: 0;
            background: #F5A81C;
            height: 3px;
            width: 40px;
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
            font-size: 0.95rem;
        }

        .footer-link:hover {
            color: #F5A81C !important;
            transform: translateX(3px);
        }

        .footer-contact i {
            color: #004080;
            font-size: 1rem;
            margin-right: 8px;
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

        /* Responsive adjustments */
        @media (max-width: 767.98px) {
            .footer-heading::after {
                left: 50%;
                transform: translateX(-50%);
            }
            .footer-heading{
                text-align: center;
            }

            .footer-brand img {
                margin: 0 auto;
            }

            .footer-links,
            .footer-contact {
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <footer>
        <div class="container">
            <div class="row gy-4">

                <!-- Logo Column -->
                <div class="col-12 col-md-4 footer-brand text-center text-md-start">
                    <img src="/assets/images/logo.png" alt="BOL Logo" class="img-fluid"
                        style="max-width: 180px; filter: brightness(0.8);">
                </div>

                <!-- Pages Links -->
                <div class="col-12 col-md-4">
                    <h5 class="footer-heading">{{ __('Quick Links') }}</h5>
                    <ul class="footer-links">
                        <li>
                            <a href="{{ route('home') }}" class="footer-link">
                                <i class="bi bi-chevron-right"></i> {{ __('Home') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('form') }}" class="footer-link">
                                <i class="bi bi-chevron-right"></i> {{ __('Contact Us') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('faq') }}" class="footer-link">
                                <i class="bi bi-chevron-right"></i> {{ __('FAQs') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">
                                <i class="bi bi-chevron-right"></i> {{ __('Privacy Policy') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">
                                <i class="bi bi-chevron-right"></i> {{ __('Terms of Service') }}
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-12 col-md-4">
                    <h5 class="footer-heading">{{ __('Contact Information') }}</h5>
                    <ul class="footer-contact list-unstyled">
                        <li class="d-flex align-items-center justify-content-center justify-content-md-start">
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto:info@nybiennialcompliance.com" class="footer-link">
                                info@nybiennialcompliance.com
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
</body>

</html>
