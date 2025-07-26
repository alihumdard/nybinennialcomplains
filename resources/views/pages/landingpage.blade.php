@include('includes.head')
@include('includes.header')
@include('includes.script')

<link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap"
    rel="stylesheet">
{{-- REMOVED: Duplicate Bootstrap JS inclusion --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
/* Your existing CSS... */
:root {
    --primary-blue: #004080;
    /* Darker, richer blue */
    --light-blue: #e0f2fe;
    --accent-color: #ffffff;
    /* Subtle gold accent */
    --text-dark: #212529;
    --text-muted: #6c757d;
    --bg-light: #f8f9fa;
    --bg-white: #ffffff;
    --border-color: #dee2e6;
    --danger-color: #dc3545;
    --danger-bg: #fff3f4;
}

body {
    margin: 0;
    font-family: 'Open Sans', sans-serif;
    background: var(--bg-light);
    line-height: 1.7;
    color: var(--text-dark);
    overflow-x: hidden;
}

h1,
h2,
h3 {
    font-family: 'Montserrat', sans-serif;
    color: var(--primary-blue);
    font-weight: 700;
}

p {
    font-weight: 300;
}

.icon-circle {
    width: 80px;
    /* Even larger icons */
    height: 80px;
    background: var(--primary-blue);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--bg-white);
    margin: 0 auto 1.5rem;
    font-size: 38px;
    /* Larger icon font size */
    box-shadow: 0 8px 25px rgba(0, 64, 128, 0.25);
    /* More prominent shadow */
    transition: all 0.4s ease-in-out;
    /* Smooth transition */
}

.icon-circle:hover {
    transform: translateY(-8px) scale(1.03);
    /* More pronounced lift and slight scale */
    background: #0056b3;
    /* Slightly lighter on hover */
    box-shadow: 0 12px 30px rgba(0, 64, 128, 0.35);
}

@media (max-width: 576px) {
    .icon-circle {
        width: 60px;
        height: 60px;
        font-size: 28px;
        margin-bottom: 1rem;
    }

    .container {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .btn {
        font-size: 0.9rem;
        padding: 0.6rem 1.5rem;
    }

    h1 {
        font-size: 1.8rem;
    }

    h2 {
        font-size: 1.5rem;
    }

    h3 {
        font-size: 1.1rem;
    }

    p {
        font-size: 0.85rem;
    }
}

.accordion-button {
    padding: 1.4rem 1.8rem;
    background-color: var(--bg-white);
    color: var(--text-dark);
    font-weight: 600;
    border: none;
    transition: all 0.3s ease;
    border-radius: 8px;
    /* Soften edges */
}

.accordion-button:not(.collapsed) {
    background-color: var(--light-blue);
    color: var(--primary-blue);
    box-shadow: 0 4px 15px rgba(0, 64, 128, 0.1);
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.accordion-button i {
    transition: transform 0.3s ease;
    color: var(--primary-blue);
    /* Ensure icon color is primary blue */
}

.accordion-button[aria-expanded="true"] i {
    transform: rotate(90deg);
}

.accordion-item {
    border: 1px solid var(--border-color);
    border-radius: 8px;
    overflow: hidden;
    /* Ensures rounded corners apply to children */
    margin-bottom: 1.5rem;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.accordion-item:hover {
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    transform: translateY(-2px);
}

.accordion-body {
    padding: 1.5rem 1.8rem;
    background-color: var(--bg-white);
    border-top: 1px solid var(--border-color);
    color: var(--text-dark) !important;
    /* Ensure text is visible and not muted */
    font-weight: 400;
    /* Ensure readability */
}

/* Hero Section */
.hero-section {
    background: linear-gradient(135deg, #003366 0%, #0056b3 100%);
    /* Deeper, more dynamic gradient */
    padding: 8rem 0;
    /* More vertical padding */
    position: relative;
    overflow: hidden;
    color: var(--bg-white);
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 800 800"><defs><radialGradient id="a" cx="400" cy="400" r="400" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="rgba(255,255,255,0.05)"/><stop offset="1" stop-color="rgba(255,255,255,0)"/></radialGradient></defs><rect width="800" height="800" fill="url(#a)"/></svg>') no-repeat center center;
    background-size: cover;
    opacity: 0.6;
    z-index: 1;
}

.hero-section .container {
    position: relative;
    z-index: 2;
}

.hero-section h1 {
    font-size: 2.6rem;
    margin-bottom: 1.5rem;
    letter-spacing: -0.5px;
    color: var(--bg-white);
}

.hero-section p {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.9);
    max-width: 800px;
    margin: 0 auto 3rem;
    font-weight: 400;
}

.btn-action {
    color: #005f99;
    padding: .7rem 1.5rem;
    border-radius: 50px;
    font-size: 1.2rem;
    font-weight: 700;
    transition: all 0.3s ease;
    box-shadow: 0 6px 15px rgba(247, 165, 0, 0.4);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    cursor: pointer;
}

.btn-action:hover {
    background-color: #ffffff;
    /* Slightly darker accent on hover */
    color: black;
    transform: translateY(-3px) scale(1.01);
}

/* How It Works Section */
.how-it-works-section {
    background: var(--bg-white);
    padding: 100px 0;
    border-bottom: 1px solid var(--border-color);
}

.how-it-works-section .container>div {
    padding: 2rem;
    border-radius: 12px;
    background: var(--bg-light);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
    transition: all 0.3s ease;
}

.how-it-works-section .container>div:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
}

/* Risk Section */
.risk-section {
    background: var(--danger-bg);
    padding: 100px 200px;
    border-top: 1px solid var(--border-color);
}

@media (max-width: 576px) {
    .risk-section {
        padding: 50px 10px;
    }
}

.risk-section .container {
    background: var(--bg-white);
    padding: 3rem 2rem;
    border-radius: 15px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(var(--danger-color), 0.1);
}

.risk-section h2 {
    color: var(--danger-color);
    font-size: 2.2rem;
}

.risk-section .bi-exclamation-triangle-fill {
    color: var(--danger-color);
    font-size: 3rem;
}

.risk-section ul {
    list-style: none;
    padding-left: 0;
}

.risk-section li {
    margin-bottom: 0.8rem;
    color: var(--text-dark);
    font-weight: 400;
    display: flex;
    align-items: flex-start;
}

.risk-section li i {
    margin-right: 10px;
    font-size: 1.2rem;
    color: var(--danger-color);
}

/* FAQ Section */
.faq-section {
    padding: 100px 0;
    background: var(--bg-white);
}

/* Modal Styling */
.modal-content {
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.modal-header {
    border-bottom: none;
    padding: 1.5rem;
    background-color: var(--primary-blue);
    color: var(--bg-white);
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
}

.modal-title {
    font-weight: 600;
    color: var(--bg-white);
}

.modal-body {
    padding: 2rem;
    font-weight: 400;
}

.modal-footer {
    border-top: none;
    padding: 1.5rem;
}

.modal .btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
    transition: all 0.3s ease;
}

.modal .btn-secondary:hover {
    background-color: #5a6268;
    border-color: #545b62;
}

.cta-btn {
    background-color: #F5A81C;
    color: white;
    font-weight: 600;
    font-size: 14px;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    transition: background-color 0.3s ease;
}

.cta-btn:hover {
    background-color: #df950bff;
}

.notice-card {
    padding: 30px 100px;
    margin: 30px 80px;
    /* max-width: 960px; */
}

.notice-title {
    font-size: 1.5rem;
    font-weight: 800;
    color: #2a3e59;
    border-bottom: 3px solid #dee2e6;
    padding-bottom: 15px;
    margin-bottom: 25px;
}

.highlight {
    font-weight: 700;
}

.consequences {
    background: #f8f9fa;
    border-left: 4px solid #0d6efd;
    padding: 20px;
    margin-top: 20px;
    border-radius: 8px;
}

.consequences h5 {
    color: #2a3e59;
    font-weight: bold;
}

.consequences ul {
    padding-left: 20px;
    color: #555;
    margin: 0;
}

.cta-button {
    margin-top: 30px;
}

.btn-cta {
    background-color: #fbbc04;
    color: #000;
    font-weight: 600;
    padding: 12px 20px;
    border-radius: 8px;
    border: none;
    transition: 0.3s ease-in-out;
}

.btn-cta:hover {
    background-color: #e0a800;
    color: #fff;
}

.map-img {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px;
}

@media (min-width: 768px) {
    .map-img {
        max-width: 300px;
    }
}

.notice-card {
    border-radius: 12px;
    overflow: hidden;
    padding: 20px;
    margin-top: 40px;
}

.notice-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1c3b5a;
    margin-bottom: 15px;
}

.highlight {
    font-weight: 600;
    color: #000;
}

.consequences h5 {
    color: #1c3b5a;
    font-weight: 700;
    margin-top: 25px;
}

.consequences ul {
    padding-left: 20px;
}

.consequences li {
    color: #555;
    margin-bottom: 8px;
    list-style-type: circle;
}

.btn-cta {
    background-color: #ffc107;
    color: #000;
    font-weight: 600;
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    text-align: center;
    transition: background-color 0.3s ease;
}

.btn-cta:hover {
    background-color: #e0a800;
    color: #fff;
}

iframe {
    width: 100%;
    height: 100%;
    border-radius: 8px;
}

@media (max-width: 767px) {
    .notice-card {
        padding: 15px;
    }

    .btn-cta {
        width: 100%;
    }

    iframe {
        height: 250px;
        margin-bottom: 20px;
    }

    .notice-title {
        font-size: 1.25rem;
    }
}
</style>

<section class="text-white text-center hero-section">
    <div class="container">
        <h1 class="fw-bold mb-3">Biennial Statement Filing Required by NY State Law</h1>
        <p class="fw-semibold mb-4" style="padding: 20px 0px;">Avoid the administrative dissolution of your company —
            stay compliant and in Good Standing with New York State. </p>

        @if ($submission)
        <a href="{{ route('checkout.with_data', $submission->dos_id) }}" class="btn btn-action">File Now - $125</a>
        @else
        <button class="cta-btn">FILE YOUR BIENNIAL STATEMENT NOW</button>
        @endif
    </div>
</section>
<div class="">
    <div class="notice-card row g-4 align-items-center" style="background: #f2f2f2;">
        <!-- Left Column (Map or Image) -->
        <div class="col-md-4">
            <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.0505329989!2d-74.30915768664983!3d40.69719336297784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1753528228126!5m2!1sen!2s"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            <img src="/assets/images/Capture.PNG" alt="">
        </div>

        <!-- Right Column (Text Content) -->
        <div class="col-md-8">
            <div class="notice-title">
                NOTICE OF NON-COMPLIANCE WITH BIENNIAL STATEMENT
            </div>

            <p class="highlight">
                You Are Receiving This Notice Because Your Business Has Been Identified as Past Due.
            </p>

            <p>
                According to public records maintained by the New York Department of State – Division of Corporations,
                your business has not submitted its required Biennial Statement.
            </p>

            <p>
                To bring your business into compliance, the Biennial Statement must be filed immediately.
            </p>

            <p>
                Pursuant to Section 408 of the New York Business Corporation Law and Section 301(e) of the New York
                Limited Liability Company Law, all domestic and authorized foreign corporations and LLCs must file a
                Biennial Statement every two years with the New York Department of State.
            </p>

            <div class="consequences">
                <h5>Failure to comply may result in:</h5>
                <ul>
                    <li>Risk of involuntary dissolution by the state</li>
                    <li>Suspension of business entity status</li>
                    <li>Loss of ability to receive legal and tax documents</li>
                    <li>Loss of ability to conduct transactions, secure loans, or enter into contracts</li>
                </ul>
            </div>

            <div class="cta-button mt-4">
    <button class="cta-btn">FILE YOUR BIENNIAL STATEMENT NOW</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infoModalLabel">Information Required</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>A valid DOS ID was not found in the URL. To proceed, please contact our support team or ensure you
                    are accessing the page via the correct link which includes your business's DOS ID.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')