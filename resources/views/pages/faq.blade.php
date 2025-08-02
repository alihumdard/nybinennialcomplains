<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ __('Frequently Asked Questions') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @include('includes.header')
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9fc;
        }

        .section-header {
            background: linear-gradient(to right, #0d6efd, #4dabf7);
            color: white;
            padding: 80px 0 50px;
            text-align: center;
        }

        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .section-header p {
            font-size: 1rem;
            opacity: 0.95;
        }

        .info-section, .how-it-works, .cta-section {
            padding: 60px 20px;
            background-color: white;
        }

        .faq-section {
            padding: 60px 0;
        }

        .accordion-item {
            border: none;
            border-radius: 12px;
            background-color: white;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
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

        .cta-section {
            background: linear-gradient(to right, #0d6efd, #4dabf7);
            color: white;
            text-align: center;
        }

        .cta-section h3 {
            font-weight: 700;
        }

        .btn-white-outline {
            border: 2px solid #fff;
            color: #fff;
            background: transparent;
            transition: 0.3s;
        }

        .btn-white-outline:hover {
            background-color: #fff;
            color: #0d6efd;
        }
    </style>
</head>
<body>

{{-- Info Section --}}
<section class="info-section text-center" style="background: #e9efff;">
    <div class="container">
        <h1 class="mb-3" style="font-size: 38px;">{{ __('About Our Biennial Filing Service') }}</h1>
        <p class="text-muted mb-0">
            {{ __('We provide fast, reliable, and affordable filing services for New York-based LLCs and corporations. Our mission is to keep your business compliant without hassle.') }}
        </p>
    </div>
</section>

{{-- How It Works --}}
<section class="how-it-works text-center bg-light">
    <div class="container">
        <h3 class="mb-4">{{ __('How Our Service Works') }}</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 border rounded bg-white h-100">
                    <i class="bi bi-file-earmark-text-fill fs-2 text-primary mb-2"></i>
                    <h5 class="fw-semibold">{{ __('Step 1: Submit Info') }}</h5>
                    <p class="text-muted">{{ __('Provide your business details through our secure online form.') }}</p>
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
                    <p class="text-muted">{{ __('Receive official filing confirmation by email within 48 hours.') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ Section --}}
<section class="faq-section">
    <div class="container">
        <div class="accordion" id="faqAccordion">
            {{-- JavaScript will inject accordion items --}}
        </div>
    </div>
</section>

{{-- Why Choose Us Section --}}
<section class="info-section bg-white text-center">
    <div class="container py-5">
        <h3 class="mb-4 fw-bold text-primary">{{ __('Why Choose Our Filing Service?') }}</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 border rounded-4 shadow-sm h-100">
                    <i class="bi bi-shield-check fs-2 text-success mb-3"></i>
                    <h5 class="fw-semibold">{{ __('Trusted & Secure') }}</h5>
                    <p class="text-muted mb-0">{{ __('We use bank-grade security to protect your information every step of the way.') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border rounded-4 shadow-sm h-100">
                    <i class="bi bi-clock-history fs-2 text-warning mb-3"></i>
                    <h5 class="fw-semibold">{{ __('Fast Turnaround') }}</h5>
                    <p class="text-muted mb-0">{{ __('Receive confirmation in as little as 48 hours — we value your time.') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border rounded-4 shadow-sm h-100">
                    <i class="bi bi-emoji-smile fs-2 text-info mb-3"></i>
                    <h5 class="fw-semibold">{{ __('Excellent Support') }}</h5>
                    <p class="text-muted mb-0">{{ __('Our friendly team is here to help you with questions before, during, and after filing.') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- Modal --}}
<div class="modal fade" id="dosIdRequiredModal" tabindex="-1" aria-labelledby="dosIdRequiredModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dosIdRequiredModalLabel" style="color: var(--primary-blue);">Action Required</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Invalid DOS ID or DOS ID Not available. Please contact admin.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const faqs = [
            {
                question: "{{ __('What exactly is a Biennial Statement?') }}",
                answer: `{!! __("A Biennial Statement is a mandatory legal document...") !!}`
            },
            {
                question: "{{ __('What are the consequences if I fail to file?') }}",
                answer: `{!! __("Failure to submit can lead to administrative dissolution...") !!}`
            },
            {
                question: "{{ __('How long does it take to process the filing?') }}",
                answer: `{{ __("You’ll receive confirmation via email within 48 hours.") }}`
            },
            {
                question: "{{ __('Is your service officially recognized or affiliated with the state?') }}",
                answer: `{{ __("We are a third-party filing service...") }}`
            },
            {
                question: "{{ __('What information do I need to provide?') }}",
                answer: `{{ __("Legal name, DOS ID, business address, and officers or members.") }}`
            },
            {
                question: "{{ __('Can I file directly with the state?') }}",
                answer: `{{ __("Yes, but our service ensures speed, accuracy, and compliance.") }}`
            }
        ];

        const container = document.getElementById("faqAccordion");
        faqs.forEach((faq, i) => {
            const item = document.createElement("div");
            item.className = "accordion-item";
            item.innerHTML = `
                <h2 class="accordion-header" id="heading${i}">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse${i}"
                        aria-expanded="false"
                        aria-controls="collapse${i}">
                        <i class="bi bi-question-circle me-2 text-primary"></i>${faq.question}
                    </button>
                </h2>
                <div id="collapse${i}" class="accordion-collapse collapse"
                    aria-labelledby="heading${i}" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">${faq.answer}</div>
                </div>
            `;
            container.appendChild(item);
        });
    });
</script>

</body>
</html>
