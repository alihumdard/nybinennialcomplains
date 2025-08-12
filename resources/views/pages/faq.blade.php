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
</head>

<body>

    {{-- Info Section --}}
    <section class="info-section-bg">
        <div class="custom-container">
            <h1>{{ __('About Our Biennial Filing Service') }}</h1>
            <p>{{ __('We provide fast, reliable, and affordable filing services for New York-based LLCs and corporations. Our mission is to keep your business compliant without hassle.') }}</p>
        </div>
    </section>

    <div class="custom-container">
        {{-- How It Works --}}
        <section class="how-it-works pt-3 text-center">
            <div class="container">
                <h3 class="mb-4">{{ __('How Our Service Works') }}</h3>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="p-4 border rounded bg-white h-100">
                            <i class="bi bi-file-earmark-text-fill fs-2 text-primary mb-2"></i>
                            <h5 class="fw-semibold">{{ __('Step 1: Submit Info') }}</h5>
                            <p class="text-muted">
                                {{ __('Provide your business details through our secure online form.') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 border rounded bg-white h-100">
                            <i class="bi bi-gear-fill fs-2 text-primary mb-2"></i>
                            <h5 class="fw-semibold">{{ __('Step 2: We File for You') }}</h5>
                            <p class="text-muted">{{ __('Our team prepares and submits your Biennial Statement.') }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 border rounded bg-white h-100">
                            <i class="bi bi-check2-circle fs-2 text-primary mb-2"></i>
                            <h5 class="fw-semibold">{{ __('Step 3: Get Confirmation') }}</h5>
                            <p class="text-muted">
                                {{ __('Receive official filing confirmation by email within 48 hours.') }}
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

        {{-- Why Choose Us Section --}}
        <section class="text-center pb-4">
            <div class="container">
                <h3 class="mb-4 fw-bold">{{ __('Why Choose Our Filing Service?') }}</h3>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="p-4 border rounded-4 shadow-sm h-100">
                            <i class="bi bi-shield-check fs-2 text-success mb-3"></i>
                            <h5 class="fw-semibold">{{ __('Trusted & Secure') }}</h5>
                            <p class="text-muted mb-0">
                                {{ __('We use bank-grade security to protect your information every step of the way.') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 border rounded-4 shadow-sm h-100">
                            <i class="bi bi-clock-history fs-2 text-warning mb-3"></i>
                            <h5 class="fw-semibold">{{ __('Fast Turnaround') }}</h5>
                            <p class="text-muted mb-0">
                                {{ __('Receive confirmation in as little as 48 hours — we value your time.') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 border rounded-4 shadow-sm h-100">
                            <i class="bi bi-emoji-smile fs-2 text-info mb-3"></i>
                            <h5 class="fw-semibold">{{ __('Excellent Support') }}</h5>
                            <p class="text-muted mb-0">
                                {{ __('Our friendly team is here to help you with questions before, during, and after filing.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('includes.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const faqs = [
                {
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
