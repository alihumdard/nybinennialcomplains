<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modern Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <style>
    header {
        padding: 0 40px
    }

    header img {
        height: 100px
    }

    .nav-links a,
    .nav-links .dropdown-toggle {
        color: #333;
        font-weight: 500;
        text-decoration: none;
        padding: 8px 12px;
        transition: color .3s
    }

    .nav-links a:hover,
    .nav-links .dropdown-toggle:hover {
        color: #0d6efd
    }

    .cta-btn {
        background-color: #F5A81C;
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        transition: background-color .3s ease
    }

    .cta-btn:hover {
        background-color: #df950bff
    }

    .mobile-menu {
        display: none;
        width: 100%;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, .1)
    }

    .mobile-menu.active {
        display: block
    }

    .mobile-menu a {
        display: block;
        padding: 10px 0;
        color: #333;
        text-decoration: none;
        border-bottom: 1px solid #eee
    }

    .mobile-menu a:last-child {
        border-bottom: none
    }

    .dropdown-menu {
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, .1);
        border: 1px solid #eee
    }

    .dropdown-item {
        font-weight: 500;
        padding: 8px 16px;
        transition: background-color .2s
    }

    .dropdown-item:active {
        background-color: #e9ecef
    }

    @media (max-width:576px) {
        header {
            padding: 0
        }

        .nav-links {
            display: none
        }

        .mobile-menu-icon {
            display: inline-block;
            font-size: 1.5rem;
            color: #333;
            cursor: pointer
        }

        .cta-btn {
            padding: 8px 12px;
            font-size: 12px
        }
    }

    @media (min-width:577px) {
        .mobile-menu-icon {
            display: none
        }

        .mobile-menu {
            display: none !important
        }
    }

    .logo-wider {
        width: 120px;
        height: auto;
        /* Adjust as needed */
    }
    </style>
</head>

<body>

    <header class="bg-white border-bottom shadow-sm">
        <div class="container d-flex justify-content-between align-items-center" style="max-width: 1200px;">
            <a href="{{ route('home') }}" class="d-flex align-items-center text-decoration-none">
                <img src="/assets/images/logo.png" alt="Logo" class="logo-wider" />
            </a>

            <div class="d-none d-sm-flex align-items-center gap-5 nav-links">
                <a href="{{ route('home') }}">{{ __('Home') }}</a>
                <a href="{{ route('form') }}">{{ __('Contact Us') }}</a>
                <a href="{{ route('faq') }}">{{ __('FAQ') }}</a>
                <div class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdownLangDesktop" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        🌐 {{ 'Disponible en Español' }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownLangDesktop">
                        @if(app()->getLocale() == 'en')
                        <li><a class="dropdown-item" href="{{ route('lang.switch', 'es') }}">{{ __('spanish') }}</a>
                        </li>
                        @else   
                        <li><a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">{{ __(' english') }}</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>

            <div class="d-flex align-items-center gap-3">
                {{-- This link has been changed to a button that triggers the modal --}}
                <button type="button" class="btn cta-btn d-none d-sm-block" data-bs-toggle="modal"
                    data-bs-target="#dosIdRequiredModal">
                    {{ __('FILE YOUR BIENNIAL STATEMENT NOW') }}
                </button>

                <span class="mobile-menu-icon d-sm-none" id="mobileMenuButton">
                    <i class="bi bi-list"></i>
                </span>
            </div>
        </div>

        <div class="mobile-menu" id="mobileMenu">
            <a href="{{ route('home') }}">{{ __('Home') }}</a>
            <a href="{{ route('form') }}">{{ __('Contact Us') }}</a>
            <a href="{{ route('faq') }}">{{ __('Faq') }}</a>

            <div class="mt-3">
                <a href="{{ route('lang.switch', 'en') }}" class="d-flex align-items-center gap-2"><i
                        class="bi bi-globe"></i> {{ __('Switch to english') }}</a>
                <a href="{{ route('lang.switch', 'es') }}" class="d-flex align-items-center gap-2"><i
                        class="bi bi-globe"></i> {{ __('Switch to spanish') }}</a>
            </div>

            <a href="{{ route('file.statement') }}"
                class="btn cta-btn w-100 mt-3">{{ __('FILE YOUR BIENNIAL STATEMENT NOW') }}</a>
        </div>
    </header>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuButton.addEventListener('click', function(event) {
            event.stopPropagation();
            mobileMenu.classList.toggle('active');
            const icon = mobileMenuButton.querySelector('i');
            if (mobileMenu.classList.contains('active')) {
                icon.classList.remove('bi-list');
                icon.classList.add('bi-x');
            } else {
                icon.classList.remove('bi-x');
                icon.classList.add('bi-list');
            }
        });

        document.addEventListener('click', function(event) {
            if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                if (mobileMenu.classList.contains('active')) {
                    mobileMenu.classList.remove('active');
                    const icon = mobileMenuButton.querySelector('i');
                    icon.classList.remove('bi-x');
                    icon.classList.add('bi-list');
                }
            }
        });
    });
    </script>

</body>

</html>