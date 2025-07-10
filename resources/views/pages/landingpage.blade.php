@include('includes.head')
@include('includes.header')
@include('includes.script')

<style>
  body {
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background: #f9fafb;
    line-height: 1.6;
  }

  .icon-circle {
    width: 64px;
    height: 64px;
    background: #3b82f6;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    margin: 0 auto 1rem;
    font-size: 28px;
  }

  @media (max-width: 576px) {
    .icon-circle {
      width: 48px;
      height: 48px;
      font-size: 20px;
    }
    .container {
      padding-left: 1rem;
      padding-right: 1rem;
    }
    .btn {
      font-size: 14px;
      padding: 0.5rem 1rem;
    }
    h1, h2, h3 {
      font-size: 1.25rem;
    }
    p {
      font-size: 0.95rem;
    }
  }

  .accordion-button:not(.collapsed) {
    background-color: #e0f2fe;
    color: #0c4a6e;
  }

  .accordion-button i {
    transition: transform 0.3s ease;
  }

  .accordion-button[aria-expanded="true"] i {
    transform: rotate(90deg);
  }
</style>

<!-- Hero Section -->
<section class="text-white py-5 text-center" style="background: linear-gradient(to bottom right, #003366, #0072CE);">
  <div class="container">
    <h1 class="fw-bold mb-3">Biennial Statement Filing Required by NY State Law</h1>
    <p class="fw-semibold mb-4" style="color: #F5F5F5; padding: 20px 0px;">Your business has been identified as past due.</p>
    <a href="/checkout" class="btn btn-light text-primary fw-bold">File Now - $125</a>
  </div>
</section>

<!-- How it Works -->
<section class="py-5 bg-light" style="margin: 40px 0px;">
  <div class="container text-center mb-5">
    <h2 class="fw-bold mb-3">How It Works</h2>
    <p class="text-muted">Simple 3-step process to get your business compliant</p>
  </div>
  <div class="container d-flex flex-wrap justify-content-center gap-5">
    <div class="text-center" style="max-width: 320px;">
      <div class="icon-circle"><i class="bi bi-file-earmark-text"></i></div>
      <h3 class="fw-semibold mb-2">1. Review & Complete</h3>
      <p>Review your business information and complete the required form fields</p>
    </div>
    <div class="text-center" style="max-width: 320px;">
      <div class="icon-circle"><i class="bi bi-credit-card-2-front"></i></div>
      <h3 class="fw-semibold mb-2">2. Secure Payment</h3>
      <p>Pay the $125 filing fee securely online with our encrypted payment system</p>
    </div>
    <div class="text-center" style="max-width: 320px;">
      <div class="icon-circle"><i class="bi bi-envelope-fill"></i></div>
      <h3 class="fw-semibold mb-2">3. Receive Confirmation</h3>
      <p>Get your filing receipt via email within 48 business hours</p>
    </div>
  </div>
</section>

<!-- Risks -->
<section class="py-5 bg-danger bg-opacity-10">
  <div class="container bg-white p-4 rounded-4">
    <div class="d-flex align-items-center mb-3">
      <i class="bi bi-exclamation-triangle-fill text-danger me-2" style="font-size: 2rem;"></i>
      <h2 class="text-danger fw-bold mb-0">Risks of Non-Compliance</h2>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4 mb-md-0">
        <h3 class="fw-semibold mb-2">Immediate Consequences:</h3>
        <ul class="list-unstyled">
          <li>Loss of good standing with NY State</li>
          <li>Inability to conduct business legally</li>
          <li>Potential fines and penalties</li>
        </ul>
      </div>
      <div class="col-md-6">
        <h3 class="fw-semibold mb-2">Long-term Risks:</h3>
        <ul class="list-unstyled">
          <li>Administrative dissolution of business</li>
          <li>Loss of limited liability protection</li>
          <li>Complications with banking and contracts</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="py-5 " style="margin: 60px 0px;">
  <div class="container text-center mb-4">
    <h2 class="fw-bold mb-3">Frequently Asked Questions</h2>
    <p class="text-muted">Get answers to common questions about biennial filings</p>
  </div>
  <div class="container">
    <div id="faq-container" class="accordion"></div>
  </div>
</section>

@include('includes.footer')

<script>
  const faqs = [
    {
      question: "What is a Biennial Statement?",
      answer: "A Biennial Statement is a required filing that New York corporations and LLCs must submit every two years to maintain their good standing with the state."
    },
    {
      question: "What happens if I don't file?",
      answer: "Failure to file can result in dissolution of your business, loss of good standing, fines, and potential legal complications."
    },
    {
      question: "How long does processing take?",
      answer: "Once submitted, your filing will be processed within 48 business hours. You'll receive an email confirmation with your receipt."
    },
    {
      question: "Is this service official?",
      answer: "We are a private filing service authorized to submit documents to the New York State Department of State on your behalf."
    },
    {
      question: "What if I need additional services?",
      answer: "We offer additional services like printed copies ($25) and certificates of existence ($25) during the checkout process."
    }
  ];

  const faqContainer = document.getElementById("faq-container");

  faqs.forEach((faq, index) => {
    const item = document.createElement("div");
    item.className = "accordion-item border-0 shadow-sm rounded-3 overflow-hidden mb-3";

    item.innerHTML = `
      <h2 class="accordion-header" id="heading${index}">
        <button class="accordion-button collapsed bg-light text-dark fw-semibold" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapse${index}" aria-expanded="false"
                aria-controls="collapse${index}">
          <i class="bi bi-question-circle me-2" style="font-size: 18px;"></i>
          ${faq.question}
        </button>
      </h2>
      <div id="collapse${index}" class="accordion-collapse collapse" aria-labelledby="heading${index}">
        <div class="accordion-body text-secondary">
          ${faq.answer}
        </div>
      </div>
    `;

    faqContainer.appendChild(item);
  });
</script>

