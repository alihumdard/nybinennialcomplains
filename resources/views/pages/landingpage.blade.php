@include('includes.head')
@include('includes.header')
@include('includes.script')

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
{{-- REMOVED: Duplicate Bootstrap JS inclusion --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    /* Your existing CSS... */
    :root {
        --primary-blue: #004080; /* Darker, richer blue */
        --light-blue: #e0f2fe;
        --accent-color: #ffffff; /* Subtle gold accent */
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

    h1, h2, h3 {
        font-family: 'Montserrat', sans-serif;
        color: var(--primary-blue);
        font-weight: 700;
    }

    p {
        font-weight: 300;
    }

    .icon-circle {
        width: 80px; /* Even larger icons */
        height: 80px;
        background: var(--primary-blue);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--bg-white);
        margin: 0 auto 1.5rem;
        font-size: 38px; /* Larger icon font size */
        box-shadow: 0 8px 25px rgba(0, 64, 128, 0.25); /* More prominent shadow */
        transition: all 0.4s ease-in-out; /* Smooth transition */
    }

    .icon-circle:hover {
        transform: translateY(-8px) scale(1.03); /* More pronounced lift and slight scale */
        background: #0056b3; /* Slightly lighter on hover */
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
        border-radius: 8px; /* Soften edges */
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
        color: var(--primary-blue); /* Ensure icon color is primary blue */
    }

    .accordion-button[aria-expanded="true"] i {
        transform: rotate(90deg);
    }

    .accordion-item {
        border: 1px solid var(--border-color);
        border-radius: 8px;
        overflow: hidden; /* Ensures rounded corners apply to children */
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
        color: var(--text-dark) !important; /* Ensure text is visible and not muted */
        font-weight: 400; /* Ensure readability */
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, #003366 0%, #0056b3 100%); /* Deeper, more dynamic gradient */
        padding: 8rem 0; /* More vertical padding */
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
        background-color: #ffffff; /* Slightly darker accent on hover */
        color: black;
        transform: translateY(-3px) scale(1.01);
    }

    /* How It Works Section */
    .how-it-works-section {
        background: var(--bg-white);
        padding: 100px 0;
        border-bottom: 1px solid var(--border-color);
    }

    .how-it-works-section .container > div {
        padding: 2rem;
        border-radius: 12px;
        background: var(--bg-light);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        transition: all 0.3s ease;
    }

    .how-it-works-section .container > div:hover {
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
      .risk-section{
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
      background-color:  #F5A81C;
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
</style>

<section class="text-white text-center hero-section">
    <div class="container">
        <h1 class="fw-bold mb-3">Biennial Statement Filing Required by NY State Law</h1>
        <p class="fw-semibold mb-4" style="padding: 20px 0px;">Avoid the administrative dissolution of your company — stay compliant and in Good Standing with New York State. </p>

        @if ($submission)
            <a href="{{ route('checkout.with_data', $submission->dos_id) }}" class="btn btn-action">File Now - $125</a>
        @else
            <button class="cta-btn">FILE YOUR BIENNIAL STATEMENT NOW</button>
        @endif
    </div>
</section>




<section class="faq-section">
    <div class="container text-center mb-5">
        <h2 class="fw-bold mb-3">Frequently Asked Questions</h2>
        <p class="text-muted">Find quick answers to the most common questions about biennial filings and our service.</p>
    </div>
    <div class="container" style="max-width: 800px;">
        <div class="accordion" id="faqAccordion">
            </div>
    </div>
</section>

<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infoModalLabel">Information Required</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>A valid DOS ID was not found in the URL. To proceed, please contact our support team or ensure you are accessing the page via the correct link which includes your business's DOS ID.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const faqs = [
            {
                question: "What exactly is a Biennial Statement?",
                answer: "A Biennial Statement is a mandatory legal document that all corporations and Limited Liability Companies (LLCs) registered in New York State must file every two years. It's crucial for maintaining active status and good standing with the state."
            },
            {
                question: "What are the consequences if I fail to file this statement?",
                answer: "Failure to submit your Biennial Statement can lead to severe repercussions, including the administrative dissolution of your business entity, loss of your 'good standing' status with the state, potential fines, and significant difficulties in conducting legal and financial transactions, such as banking or securing contracts."
            },
            {
                question: "How long does it typically take to process the filing?",
                answer: "Once your complete filing has been successfully submitted through our service, you will receive an official confirmation and receipt directly to your provided email address within 48 business hours."
            },
            {
                question: "Is your service officially recognized or affiliated with the state?",
                answer: "We are a reputable, private third-party filing service. We are fully authorized to prepare and submit all necessary documentation to the New York Department of State on your behalf, ensuring accuracy, compliance, and timely processing for your convenience."
            }
        ];

        const container = document.getElementById("faqAccordion");

        if (container) {
            faqs.forEach((faq, index) => {
                const card = document.createElement("div");
                card.className = "accordion-item shadow-sm rounded mb-3";

                card.innerHTML = `
                    <h2 class="accordion-header" id="heading${index}">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse${index}"
                                aria-expanded="false"
                                aria-controls="collapse${index}">
                            <i class="bi bi-question-circle me-3"></i>
                            ${faq.question}
                        </button>
                    </h2>
                    <div id="collapse${index}" class="accordion-collapse collapse"
                         aria-labelledby="heading${index}" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            ${faq.answer}
                        </div>
                    </div>
                `;

                container.appendChild(card);
            });
        }
    });
</script>

@include('includes.footer')