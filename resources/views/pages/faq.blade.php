@include('includes.header')
<style>
    .faq-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    }
    
    .accordion-item {
        border: none;
        border-radius: 12px !important;
        overflow: hidden;
        transition: all 0.3s ease;
        margin-bottom: 1rem;
        background-color: white;
    }
    
    .accordion-item:hover {
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        transform: translateY(-2px);
    }
    
    .accordion-button {
        font-weight: 600;
        padding: 1.5rem;
        color: #2c3e50;
        background-color: white;
    }
    
    .accordion-button:not(.collapsed) {
        color: #0d6efd;
        background-color: rgba(13, 110, 253, 0.05);
    }
    
    .accordion-button:focus {
        box-shadow: none;
        border-color: rgba(0,0,0,0.1);
    }
    
    .accordion-button::after {
        background-size: 1.2rem;
        transition: transform 0.3s ease-in-out;
    }
    
    .accordion-body {
        padding: 1.5rem;
        color: #555;
        line-height: 1.7;
    }
    
    .bi-question-circle {
        color: #F5A81C;
        font-size: 1.2rem;
    }
    
    .accordion-button:not(.collapsed) .bi-question-circle {
        color: #0d6efd;
    }
    
    /* Animation for accordion collapse */
    .accordion-collapse {
        transition: all 0.3s ease;
    }
</style>
<section class="faq-section py-5 bg-light">
    <div class="container text-center mb-5">
        <h2 class="fw-bold mb-3">Frequently Asked Questions</h2>
        <p class="text-muted fs-6">Find quick answers to the most common questions about biennial filings and our service.</p>
    </div>
    <div class="container" style="max-width: 800px;">
        <div class="accordion" id="faqAccordion">
            <!-- FAQ items will be inserted here by JavaScript -->
        </div>
    </div>
</section>

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
            },
            {
                question: "What information do I need to provide to file my Biennial Statement?",
                answer: "You'll need to provide your business entity's exact legal name, DOS ID number, principal business address, and the names and addresses of all current officers/directors (for corporations) or members/managers (for LLCs)."
            },
            {
                question: "Can I file my Biennial Statement directly with the state?",
                answer: "Yes, you can file directly with the New York Department of State. However, using our service ensures your filing is error-free, includes all required information, and is submitted on time with confirmation of receipt."
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
                            <div class="d-flex">
                                <i class="bi bi-info-circle-fill text-primary me-3"></i>
                                <div>${faq.answer}</div>
                            </div>
                        </div>
                    </div>
                `;

                container.appendChild(card);
            });
        }
    });
</script>

@include('includes.footer')