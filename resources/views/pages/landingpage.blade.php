@include('includes.head')
@include('includes.header')
@include('includes.script')

<link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
:root {
    --primary-blue: #004080;
    --dark-blue: #002b58;
    --light-blue: #e0f2fe;
    --accent-yellow: #F5A81C;
    --dark-yellow: #e69500;
    --text-dark: #212529;
    --text-muted: #6c757d;
    --bg-light: #f8f9fa;
    --bg-white: #ffffff;
    --border-color: #dee2e6;
    --danger-color: #dc3545;
    --success-color: #28a745;
    --transition: all 0.3s ease;
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
    background: linear-gradient(135deg, var(--primary-blue) 0%, var(--dark-blue) 100%);
    padding: 6rem 1rem;
    color: white;
    text-align: center;
    position: relative;
    overflow: hidden;
    margin-bottom: 3rem;
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
    max-width: 900px;
}

.hero-section h1 {
    font-size: 2.8rem;
    margin-bottom: 1.5rem;
    color: white;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.hero-section p {
    font-size: 1.25rem;
    max-width: 800px;
    margin: 0 auto 2.5rem;
    opacity: 0.9;
}

.cta-btn {
    background-color: var(--accent-yellow);
    color: white;
    font-weight: 600;
    padding: 14px 32px;
    border: none;
    border-radius: 6px;
    transition: var(--transition);
    box-shadow: 0 4px 12px rgba(245, 168, 28, 0.3);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 1rem;
    position: relative;
    overflow: hidden;
}

.cta-btn:hover {
    background-color: var(--dark-yellow);
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(245, 168, 28, 0.4);
}

.cta-btn:active {
    transform: translateY(0);
}

/* Notice Card Section */
.notice-container {
    padding: 4rem 1rem;
    background: linear-gradient(to bottom, #f0f4f8 0%, #ffffff 100%);
}

.notice-card {
    display: flex;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    transition: var(--transition);
}

.notice-card:hover {
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
    transform: translateY(-5px);
}

.notice-image {
    flex: 1;
    min-width: 420px;
    padding: 40px 0px;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.notice-image img {
    max-width: 80%;
    height: auto;
    border-radius: 8px;
}

.notice-content {
    flex: 2;
    background: #ffffff;
    min-width: 320px;
    padding: 3rem 2rem;
}

.notice-title {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--primary-blue);
    margin-bottom: 1.5rem;
    position: relative;
    padding-bottom: 1rem;
}

.notice-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 80px;
    height: 4px;
    background: var(--accent-yellow);
    border-radius: 2px;
}

.highlight {
    font-weight: 600;
    margin-bottom: 1.5rem;
    color: var(--text-dark);
    background: #fff3cd;
    padding: 1rem;
    border-left: 5px solid var(--accent-yellow);
    border-radius: 6px;
}

.notice-content p {
    margin-bottom: 1rem;
    color: var(--text-muted);
    line-height: 1.7;
    font-size: 1rem;
}

.consequences {
    background: #f8f9fa;
    border-left: 5px solid var(--primary-blue);
    padding: 1.5rem;
    margin-top: 2rem;
    margin-bottom: 2rem;
    border-radius: 8px;
}

.consequences h5 {
    color: var(--primary-blue);
    font-weight: 700;
    margin-bottom: 1rem;
}

.consequences ul {
    padding-left: 1.25rem;
    margin: 0;
}

.consequences li {
    margin-bottom: 0.75rem;
    color: var(--text-dark);
    position: relative;
    padding-left: 1.5rem;
}

.consequences li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0.5em;
    width: 0.5em;
    height: 0.5em;
    background-color: var(--danger-color);
    border-radius: 50%;
}

.btn-wrapper {
    margin-top: 2rem;
}

/* How It Works Section */
.how-it-works {
    padding: 5rem 1rem;
    background: linear-gradient(to bottom, #ffffff 0%, #f8f9fa 100%);
    position: relative;
    overflow: hidden;
}

.how-it-works h3 {
    font-size: 2rem;
    margin-bottom: 3rem;
    text-align: center;
    display: flex;
    justify-content: center;
    position: relative;
    padding-bottom: 10px;
    /* display: inline-block; */
}

.how-it-works h3::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: var(--accent-yellow);
    border-radius: 2px;
}

.step-card {
    padding: 2.5rem 2rem;
    border-radius: 12px;
    background: white;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
    transition: var(--transition);
    height: 100%;
    border: 1px solid rgba(0, 0, 0, 0.05);
    text-align: center;
    position: relative;
    overflow: hidden;
}

.step-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
}

.step-card i {
    font-size: 2.5rem;
    color: var(--primary-blue);
    margin-bottom: 1.5rem;
    display: inline-block;
    transition: var(--transition);
}

.step-card:hover i {
    transform: scale(1.1);
    color: var(--accent-yellow);
}

.step-card h5 {
    font-size: 1.25rem;
    margin-bottom: 1rem;
    color: var(--primary-blue);
}

.step-card p {
    color: var(--text-muted);
    margin-bottom: 0;
}

/* About Us Section */
.about-section {
    padding: 5rem 1rem;
    background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);
    position: relative;
}

.about-container {
    max-width: 1200px;
    margin: 0 auto;
}

.about-content {
    display: flex;
    flex-wrap: wrap;
    align-items: start;
    gap: 3rem;
}

.about-image {
    flex: 1;
    min-width: 350px;
    position: relative;
}

.about-image img {
    width: 100%;
    border-radius: 12px;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
}

.about-image::before {
    content: '';
    position: absolute;
    top: -20px;
    left: -20px;
    width: 100%;
    height: 100%;
    border: 3px solid var(--accent-yellow);
    border-radius: 12px;
    z-index: -1;
}

.about-text {
    flex: 1;
    min-width: 350px;
}

.about-text h2 {
    font-size: 2.2rem;
    margin-bottom: 1.5rem;
    color: var(--primary-blue);
    position: relative;
}

.about-text h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 80px;
    height: 4px;
    background: var(--accent-yellow);
    border-radius: 2px;
}

.about-text p {
    margin-bottom: 1.5rem;
    color: var(--text-muted);
    line-height: 1.8;
}

.about-features {
    margin-top: 2rem;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1.5rem;
}

.feature-icon {
    flex-shrink: 0;
    width: 50px;
    height: 50px;
    background: var(--light-blue);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1.5rem;
    color: var(--primary-blue);
    font-size: 1.25rem;
}

.feature-content h4 {
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
    color: var(--primary-blue);
}

.feature-content p {
    margin-bottom: 0;
    font-size: 0.95rem;
}

/* Testimonials Section */
.testimonials {
    padding: 5rem 1rem;
    background: linear-gradient(to bottom, #ffffff 0%, #f0f4f8 100%);
}

.testimonial-container {
    max-width: 1200px;
    margin: 0 auto;
}

.testimonial-header {
    text-align: center;
    margin-bottom: 3rem;
}

.testimonial-header h2 {
    font-size: 2.2rem;
    color: var(--primary-blue);
    position: relative;
    display: inline-block;
}

.testimonial-header h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: var(--accent-yellow);
    border-radius: 2px;
}

.testimonial-card {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
    margin: 1rem;
    position: relative;
    transition: var(--transition);
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
}

.testimonial-card::before {
    content: '"';
    position: absolute;
    top: 20px;
    left: 20px;
    font-size: 5rem;
    color: rgba(0, 64, 128, 0.05);
    font-family: serif;
    line-height: 1;
    z-index: 0;
}

.testimonial-content {
    position: relative;
    z-index: 1;
    margin-bottom: 1.5rem;
    font-style: italic;
    color: var(--text-muted);
}

.testimonial-author {
    display: flex;
    align-items: center;
}

.testimonial-author img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 1rem;
}

.author-info h5 {
    font-size: 1rem;
    margin-bottom: 0.25rem;
    color: var(--primary-blue);
}

.author-info p {
    font-size: 0.85rem;
    color: var(--text-muted);
    margin-bottom: 0;
}

/* Responsive Adjustments */
@media (max-width: 1200px) {
    .hero-section h1 {
        font-size: 2.5rem;
    }
}

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
        min-width: 100%;
    }

    .notice-title {
        font-size: 1.4rem;
    }

    .about-content {
        flex-direction: column;
    }

    .about-image,
    .about-text {
        min-width: 100%;
    }

    .about-image::before {
        top: -10px;
        left: -10px;
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
        padding: 12px 24px;
        font-size: 0.9rem;
    }

    .how-it-works h3,
    .testimonial-header h2,
    .about-text h2 {
        font-size: 1.8rem;
    }
}
</style>

<section class="hero-section">
    <div class="container">
        <h1 class="fw-bold mb-3">{{ __('Biennial Statement Filing Required by NY State Law') }}</h1>
        <p class="fw-semibold mb-4">
            {{ __('Avoid the administrative dissolution of your company — stay compliant and in Good Standing with New York State.') }}
        </p>

        @if ($submission)
        <a href="{{ route('checkout.with_data', $submission->dos_id) }}"
            class="btn cta-btn">{{ __('File Now - $125') }}</a>
        @else
        <button type="button" class="btn cta-btn" data-bs-toggle="modal" data-bs-target="#dosIdRequiredModal">
            {{ __('FILE YOUR BIENNIAL STATEMENT NOW') }}
        </button>
        @endif
    </div>
</section>

<div class="container notice-container py-5">
    <div class="notice-card">
        <!-- Image Section -->
        <div class="notice-image">
            <img src="/assets/images/map.jpg" alt="New York State Compliance Notice" class="img-fluid" />
        </div>

        <!-- Content Section -->
        <div class="notice-content">
            <h4 class="notice-title fw-bold mb-3 text-danger">
                {{ __('NOTICE OF NON-COMPLIANCE WITH BIENNIAL STATEMENT') }}
            </h4>

            <p class="highlight fw-semibold text-dark">
                {{ __('You Are Receiving This Notice Because Your Business Has Been Identified as Past Due.') }}
            </p>

            <p class="text-muted">
                {{ __('According to public records maintained by the New York Department of State – Division of Corporations, your business has not submitted its required Biennial Statement.') }}
            </p>

            <p class="text-muted">
                {{ __('To bring your business into compliance, the Biennial Statement must be filed immediately.') }}
            </p>

            <p class="text-muted">
                {{ __('Pursuant to Section 408 of the New York Business Corporation Law and Section 301(e) of the New York Limited Liability Company Law, all domestic and authorized foreign corporations and LLCs must file a Biennial Statement every two years with the New York Department of State.') }}
            </p>

            <div class="consequences mt-4">
                <h5 class="fw-semibold">{{ __('Failure to comply may result in:') }}</h5>
                <ul>
                    <li class="mb-2">{{ __('Risk of involuntary dissolution by the state') }}</li>
                    <li class="mb-2">{{ __('Suspension of business entity status') }}</li>
                    <li class="mb-2">{{ __('Loss of ability to receive legal and tax documents') }}</li>
                    <li class="mb-2">
                        {{ __('Loss of ability to conduct transactions, secure loans, or enter into contracts') }}</li>
                </ul>
            </div>

            <div class="mt-4 text-center text-md-start">
                <button type="button" class="btn cta-btn px-4 py-2 shadow-sm" data-bs-toggle="modal"
                    data-bs-target="#dosIdRequiredModal">
                    {{ __('FILE YOUR BIENNIAL STATEMENT NOW') }}
                </button>
            </div>
        </div>
    </div>
</div>

<section class="how-it-works">
    <div class="container">
        <h3>{{ __('How Our Service Works') }}</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="step-card">
                    <i class="bi bi-file-earmark-text-fill"></i>
                    <h5>{{ __('Step 1: Submit Info') }}</h5>
                    <p>{{ __('Provide your business details through our secure online form. Takes just 2 minutes.') }}
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="step-card">
                    <i class="bi bi-gear-fill"></i>
                    <h5>{{ __('Step 2: We File for You') }}</h5>
                    <p>{{ __('Our experts prepare and submit your Biennial Statement to NY Department of State.') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="step-card">
                    <i class="bi bi-check2-circle"></i>
                    <h5>{{ __('Step 3: Get Confirmation') }}</h5>
                    <p>{{ __('Receive official filing confirmation by email within 24-48 business hours.') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section">
    <div class="about-container">
      <h1 style="text-align: center; padding-bottom: 50px;">About Us</h1>
        <div class="about-content">
            <div class="about-image">
                <img src="/assets/images/about.webp" alt="About Our Compliance Service">
            </div>
            <div class="about-text">
                <h2>About Our Compliance Service</h2>
                <p>We specialize in helping New York businesses maintain compliance with state regulations. Our team of
                    corporate compliance experts has filed hundreds of Biennial Statements with the NY Department of
                    State, ensuring our clients remain in good standing.</p>
                <p>With over 10 years of experience in corporate filings, we understand the complexities of New York
                    business law and make the compliance process simple and stress-free for our clients.</p>

                <div class="about-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Trusted Compliance Experts</h4>
                            <p>Our team includes former corporate paralegals with deep knowledge of NY State
                                requirements.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Fast Processing</h4>
                            <p>Most filings are submitted within 1 business day of receiving your information.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Dedicated Support</h4>
                            <p>Real customer support available to answer your compliance questions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="testimonial-container">
        <div class="testimonial-header">
            <h2>What Our Clients Say</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "I was worried about my LLC's compliance status, but this service made the filing process
                        incredibly easy. Received my confirmation from NY State within 48 hours!"
                    </div>
                    <div class="testimonial-author">
                        <img src="/assets/images/download.jpeg" alt="Client testimonial">
                        <div class="author-info">
                            <h5>Michael R.</h5>
                            <p>Small Business Owner, NYC</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "As a busy entrepreneur, I don't have time to deal with state filings. This service saved me
                        hours of research and paperwork. Highly recommend for any NY business!"
                    </div>
                    <div class="testimonial-author">
                        <img src="/assets/images/download (2).jpeg" alt="Client testimonial">
                        <div class="author-info">
                            <h5>Sarah L.</h5>
                            <p>Startup Founder, Buffalo</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "The consequences of non-compliance were scary. I'm so glad I found this service before it was
                        too late. Professional, fast, and worth every penny."
                    </div>
                    <div class="testimonial-author">
                        <img src="/assets/images/download (1).jpeg" alt="Client testimonial">
                        <div class="author-info">
                            <h5>David K.</h5>
                            <p>Restaurant Owner, Albany</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="dosIdRequiredModal" tabindex="-1" aria-labelledby="dosIdRequiredModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dosIdRequiredModalLabel">Action Required</h5>
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