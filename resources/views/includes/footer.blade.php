<footer class="text-white py-5" style="background: #eeeeee;">
    <div class="container">
        <div class="row gy-4 align-items-start">

            <!-- Logo Column -->
            <div class="col-12 col-md-4 text-center text-md-start">
                <img src="/assets/images/logo.png" alt="BOL Logo" class="img-fluid mb-3" style="max-width: 180px;">
                <p class="small text-muted mb-0">{{ __('Your trusted compliance partner in New York.') }}</p>
            </div>

            <!-- Pages Links -->
            <div class="col-12 col-md-4 text-center text-md-start">
                <h5 class="text-uppercase mb-3 text-dark">{{ __('Pages') }}</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <a href="{{ route('home') }}" class="text-dark text-decoration-none">{{ __('Home') }}</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('form') }}" class="text-dark text-decoration-none">{{ __('Contact Us') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('faq') }}" class="text-dark text-decoration-none">{{ __('Faq') }}</a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-12 col-md-4 text-center text-md-start">
                <h5 class="text-uppercase mb-3 text-dark">{{ __('Contact Us') }}</h5>

                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <a href="mailto:info@bolcomplianceservices.com"
                            class="text-dark text-decoration-none d-inline-flex align-items-center justify-content-center justify-content-md-start">
                            <i class="bi bi-envelope me-2"></i> info@bolcomplianceservices.com
                        </a>
                    </li>
                </ul>

                <!-- Social Media Icons -->
                <div class="d-flex justify-content-center justify-content-md-start gap-3 mt-3">
                    <a href="#" class="text-dark fs-5"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-dark fs-5"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-dark fs-5"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

        </div>

        <hr class="my-4 bg-light">

        <!-- Copyright -->
        <div class="text-center small text-muted">
            {!! __('© :year :name. All rights reserved.', ['year' => date('Y'), 'name' => '<strong>BOL Compliance
                Services</strong>']) !!}
        </div>
    </div>
</footer>

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>
footer a {
    transition: color 0.3s ease;
}

footer a:hover {
    color: #f5a81c !important;
}

footer h5 {
    letter-spacing: 0.5px;
    font-weight: 600;
}

hr {
    opacity: 0.1;
}

@media (max-width: 575.98px) {
    footer ul {
        padding-left: 0;
    }

    footer h5 {
        font-size: 1.1rem;
    }

    footer .bi {
        font-size: 1.25rem !important;
    }
}
</style>