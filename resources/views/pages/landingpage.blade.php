@include('includes.head')
@include('includes.header')
@include('includes.script')

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    :root {
        --primary-blue: #004080;
        --light-blue: #e0f2fe;
        --accent-yellow: #F5A81C;
        --text-dark: #212529;
        --text-muted: #6c757d;
        --bg-light: #f8f9fa;
        --bg-white: #ffffff;
        --border-color: #dee2e6;
        --danger-color: #dc3545;
    }

    body {
        font-family: 'Open Sans', sans-serif;
        background: var(--bg-light);
        line-height: 1.7;
        color: var(--text-dark);
        margin: 0;
        padding: 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: 'Montserrat', sans-serif;
        color: var(--primary-blue);
        font-weight: 700;
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, #005f99 0%, #003d66 100%);
        padding: 6rem 1rem;
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at center, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
    }

    .hero-section .container {
        position: relative;
        z-index: 1;
    }

    .hero-section h1 {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        color: white;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .hero-section p {
        font-size: 1.2rem;
        max-width: 800px;
        margin: 0 auto 2.5rem;
        opacity: 0.9;
    }

    .cta-btn {
        background-color: var(--accent-yellow);
        color: white;
        font-weight: 600;
        padding: 14px 28px;
        border: none;
        border-radius: 6px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(245, 168, 28, 0.3);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 1rem;
    }

    .cta-btn:hover {
        background-color: #df950b;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(245, 168, 28, 0.4);
    }

    /* Notice Card Section */
    .notice-container {
        padding: 4rem 1rem;
        background: var(--bg-light);
    }

    .notice-card {
        display: flex;
        flex-wrap: wrap;
        max-width: 1300px;
        margin: 0 auto;
        background: white;
        border-radius: 10px;
        overflow: hidden;
    }

    .notice-image {
        flex: 1;
        min-width: 300px;
        padding: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f8f9fa;
    }

    .notice-image img {
        max-width: 100%;
        height: auto;
        border-radius: 6px;
    }

    .notice-content {
        flex: 2;
        background: #f8f9fa;
        min-width: 300px;
        padding: 3rem;
    }

    .notice-title {
        font-size: 1.6rem;
        font-weight: 700;
        color: var(--primary-blue);
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 3px solid var(--border-color);
    }

    .highlight {
        font-weight: 600;
        margin-bottom: 1.5rem;
        color: var(--text-dark);
    }

    .consequences {
        background: var(--bg-light);
        border-left: 4px solid var(--primary-blue);
        padding: 1.5rem;
        margin: 2rem 0;
        border-radius: 6px;
    }

    .consequences h5 {
        color: var(--primary-blue);
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .consequences ul {
        padding-left: 1.5rem;
        margin: 0;
    }

    .consequences li {
        margin-bottom: 0.75rem;
        list-style-type: disc;
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .hero-section {
            padding: 5rem 1rem;
        }

        .hero-section h1 {
            font-size: 2.2rem;
        }

        .notice-content {
            padding: 2rem;
        }
    }

    @media (max-width: 768px) {
        .hero-section {
            padding: 4rem 1rem;
        }

        .hero-section h1 {
            font-size: 1.8rem;
        }

        .hero-section p {
            font-size: 1.1rem;
        }

        .notice-card {
            flex-direction: column;
        }

        .notice-image {
            padding: 1.5rem;
        }

        .notice-title {
            font-size: 1.4rem;
        }

        .cta-btn {
            padding: 12px 24px;
        }
    }

    @media (max-width: 576px) {
        .hero-section {
            padding: 3rem 1rem;
        }

        .hero-section h1 {
            font-size: 1.6rem;
        }

        .hero-section p {
            font-size: 1rem;
        }

        .notice-content {
            padding: 1.5rem;
        }

        .notice-title {
            font-size: 1.3rem;
        }

        .cta-btn {
            padding: 10px 20px;
            font-size: 0.9rem;
        }
    }
</style>

<section class="hero-section">
    <div class="container">
        <h1 class="fw-bold mb-3">{{ __('Biennial Statement Filing Required by NY State Law') }}</h1>
        <p class="fw-semibold mb-4">{{ __('Avoid the administrative dissolution of your company — stay compliant and in Good Standing with New York State.') }}</p>

        @if ($submission)
        <a href="{{ route('checkout.with_data', $submission->dos_id) }}" class="btn cta-btn">{{ __('File Now - $125') }}</a>
        @else
        {{-- This button now opens the modal --}}
        <button type="button" class="btn cta-btn" data-bs-toggle="modal" data-bs-target="#dosIdRequiredModal">
            {{ __('FILE YOUR BIENNIAL STATEMENT NOW') }}
        </button>
        @endif
    </div>
</section>

<div class="notice-container">
    <div class="notice-card">
        <div class="notice-image">
            <img src="/assets/images/Capture.png" alt="New York State Compliance Notice">
        </div>
        <div class="notice-content">
            <div class="notice-title">
                {{ __('NOTICE OF NON-COMPLIANCE WITH BIENNIAL STATEMENT') }}
            </div>

            <p class="highlight">
                {{ __('You Are Receiving This Notice Because Your Business Has Been Identified as Past Due.') }}
            </p>

            <p>
                {{ __('According to public records maintained by the New York Department of State – Division of Corporations, your business has not submitted its required Biennial Statement.') }}
            </p>

            <p>
                {{ __('To bring your business into compliance, the Biennial Statement must be filed immediately.') }}
            </p>

            <p>
                {{ __('Pursuant to Section 408 of the New York Business Corporation Law and Section 301(e) of the New York Limited Liability Company Law, all domestic and authorized foreign corporations and LLCs must file a Biennial Statement every two years with the New York Department of State.') }}
            </p>

            <div class="consequences">
                <h5>{{ __('Failure to comply may result in:') }}</h5>
                <ul>
                    <li>{{ __('Risk of involuntary dissolution by the state') }}</li>
                    <li>{{ __('Suspension of business entity status') }}</li>
                    <li>{{ __('Loss of ability to receive legal and tax documents') }}</li>
                    <li>{{ __('Loss of ability to conduct transactions, secure loans, or enter into contracts') }}</li>
                </ul>
            </div>

            <div class="mt-4">
                {{-- This button now opens the modal --}}
                <button type="button" class="btn cta-btn" data-bs-toggle="modal" data-bs-target="#dosIdRequiredModal">
                    {{ __('FILE YOUR BIENNIAL STATEMENT NOW') }}
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="dosIdRequiredModal" tabindex="-1" aria-labelledby="dosIdRequiredModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dosIdRequiredModalLabel" style="color: var(--primary-blue);">Action Required</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Invalid DOS ID or DOS ID Not available. Please contact admin.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')