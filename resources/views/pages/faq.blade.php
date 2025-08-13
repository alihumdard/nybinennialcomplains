<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="/assets/images/fav.png" />

    <title>{{ __('Frequently Asked Questions') }}</title>

    <!-- Bootstrap CSS -->
    @include('includes.head')
    @include('includes.script')
    @include('includes.header')
    <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f9f9fc;
    }

    .info-section-bg {
        background-color: #f3f4f6;
        color: #000;
        padding: 2rem 1rem;
        text-align: center;
    }

    .info-section-bg h1 {
        font-weight: 800;
        font-size: 1.8rem;
    }

    .info-section-bg p {
        font-size: 1rem;
        color: #4b5563;
        margin-bottom: 0.5rem;
    }

    .custom-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .faq-section {
        padding: 60px 0 30px 0;
    }

    .accordion-item {
        border: none;
        border-radius: 12px;
        background-color: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        margin-bottom: 1rem;
    }

    .accordion-button {
        font-weight: 600;
        font-size: 1rem;
        background-color: white;
        color: #333;
        padding: 1.2rem 1.5rem;
    }

    .accordion-button:not(.collapsed) {
        background-color: #e7f1ff;
        color: #0d6efd;
    }

    .accordion-body {
        padding: 1.2rem 1.5rem;
        color: #555;
    }

    .how-it-works h3 {
        font-weight: 600;
        font-size: 1.2rem;
    }
    </style>
    <style>
    .step-card {
        transition: all 0.3s ease-in-out;
        border: 1px solid #eee;
    }

    .step-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .step-card .display-4 {
        transition: transform 0.3s ease;
    }

    .step-card:hover .display-4 {
        transform: scale(1.1);
        color: #004080 !important;
    }
    </style>
</head>

<body>

    <div class="custom-container">
        <!-- How It Works Section -->
        <section class="py-5" style="">
            <div class="container">
                <!-- Heading -->
                <h3 class="fw-bold text-center mb-4 position-relative" style="font-family: 'Montserrat', sans-serif;">
                    {{ __('Follow These Steps to Submit Your Biennial Report') }}
                    <span class="position-absolute start-50 translate-middle-x w-75"
                        style="height: 4px; background: #F5A81C; border-radius: 50px; bottom: -8px;"></span>
                </h3>

                <!-- Steps -->
                <div class="row g-4 pt-4">
                    <!-- Step 1 -->
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100 text-center p-3 step-card">
                            <div class="mb-3" style="font-size: 2.5rem; color: #003366;">
                                <i class="bi bi-file-earmark-text-fill"></i>
                            </div>

                            <h5 class="font-['Montserrat'] font-bold text-md mb-2">
                                {{ __('Step 1: Submit Required Entity Information') }}</h5>
                            <p class="text-gray-600">
                                {{ __('Complete the form with your official New York business details. Takes 2 minutes.') }}
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100 text-center p-3 step-card">
                            <div class="mb-3" style="font-size: 2.5rem; color: #003366;">
                                <i class="bi bi-gear-fill"></i>
                            </div>
                            <h5 class="font-['Montserrat'] font-bold text-lg mb-2">
                                {{ __('Step 2: Processing and Submission') }}
                            </h5>
                            <p class="text-gray-600">
                                {{ __('Your Biennial Statement is reviewed and submitted for official filing procedures.') }}
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100 text-center p-3 step-card">
                            <div class="mb-3" style="font-size: 2.5rem; color: #003366;">
                                <i class="bi bi-check2-circle"></i>
                            </div>
                            <h5 class="font-['Montserrat'] font-bold text-lg mb-2">{{ __('Step 3: Get Confirmation') }}
                            </h5>
                            <p class="text-gray-600">
                                {{ __(' Receive official filing confirmation by email within 24-48 business hours.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- FAQ Section --}}
        <section class="faq-section">
            <div class="container">
                <div class="accordion" id="faqAccordion"></div>
            </div>
        </section>
    </div>

    @include('includes.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const faqs = [{
                question: `{{ __('What exactly is a Biennial Statement?') }}`,
                answer: `{!! addslashes(__("A Biennial Statement is a mandatory legal document...")) !!}`
            },
            {
                question: `{{ __('What are the consequences if I fail to file?') }}`,
                answer: `{!! addslashes(__("Failure to submit can lead to administrative dissolution...")) !!}`
            },
            {
                question: `{{ __('How long does it take to process the filing?') }}`,
                answer: `{{ addslashes(__("You’ll receive confirmation via email within 48 hours.")) }}`
            },
            {
                question: `{{ __('Is your service officially recognized or affiliated with the state?') }}`,
                answer: `{{ addslashes(__("We are a third-party filing service...")) }}`
            },
            {
                question: `{{ __('What information do I need to provide?') }}`,
                answer: `{{ addslashes(__("Legal name, DOS ID, business address, and officers or members.")) }}`
            },
            {
                question: `{{ __('Can I file directly with the state?') }}`,
                answer: `{{ addslashes(__("Yes, but our service ensures speed, accuracy, and compliance.")) }}`
            }
        ];

        const container = document.getElementById("faqAccordion");
        container.innerHTML = "";

        faqs.forEach((faq, i) => {
            const collapseId = `collapseFaq${i}`;
            const headingId = `headingFaq${i}`;

            const item = document.createElement("div");
            item.className = "accordion-item";
            item.innerHTML = `
                    <h2 class="accordion-header" id="${headingId}">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#${collapseId}"
                            aria-expanded="false"
                            aria-controls="${collapseId}">
                            <i class="bi bi-question-circle me-2 text-primary"></i>${faq.question}
                        </button>
                    </h2>
                    <div id="${collapseId}" class="accordion-collapse collapse"
                        aria-labelledby="${headingId}" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">${faq.answer}</div>
                    </div>
                `;
            container.appendChild(item);
        });
    });
    </script>
</body>

</html>