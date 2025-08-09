@include('includes.head')
@include('includes.header')
@include('includes.script')

<style>
  body {
    background-color: #f0f4f8;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  .text-navy-900 {
    color: #1e3a8a;
  }
  .card {
    border: none;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
  }
  .card-header {
    background-color: #e9f0fc;
    font-size: 1.25rem;
    border-bottom: none;
    border-radius: 12px 12px 0 0;
  }
  .form-control, .form-select {
    border-radius: 8px;
    padding: 0.75rem 1rem;
  }
  .btn-primary {
    background-color: #3b82f6;
    border: none;
    border-radius: 8px;
    padding: 0.75rem 1.5rem;
    font-weight: 600;
    transition: background-color 0.3s ease;
  }
  .btn-primary:hover {
    background-color: #2563eb;
  }
  /* Required styles for the secure Stripe Element */
  .StripeElement {
    border: 1px solid #ced4da;
    padding: 0.75rem 1rem;
    border-radius: 8px;
    background-color: white;
  }
  #card-errors {
    color: #dc3545;
    font-size: 0.875em;
    margin-top: 4px;
  }
</style>

<div class="sticky-top bg-white z-3 mb-4 py-3" style="z-index: 1050;">
  <div class="container bg-light rounded-pill shadow-sm px-4 py-3 d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center">
      <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center fw-bold me-2" style="width: 32px; height: 32px;">1</div>
      <div class="fw-semibold">{{ __('File Your Statement') }}</div>
    </div>
    <div class="flex-grow-1 mx-3">
      <div class="progress" style="height: 4px;">
        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;"></div>
      </div>
    </div>
    <div class="d-flex align-items-center">
      <div class="rounded-circle bg-secondary bg-opacity-10 text-secondary d-flex align-items-center justify-content-center fw-bold me-2" style="width: 32px; height: 32px;">2</div>
      <div class="text-secondary">{{ __('Confirmation') }}</div>
    </div>
  </div>
</div>

<div class="container py-5">
  <form id="payment-form" method="POST" action="{{ route('filing.process', $submission->dos_id) }}">
    @csrf
    
    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">{{ __('Business Information') }}</div>
      <div class="card-body row g-4">
        <div class="col-md-6">
          <label class="form-label">{{ __('Business Name') }}</label>
          <input type="text" name="business_name" class="form-control" value="{{ $submission->business_name ?? '' }}" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">{{ __('DOS ID Number') }}</label>
          <input type="text" name="dos_id" class="form-control" value="{{ $submission->dos_id ?? '' }}" readonly required />
        </div>
        <div class="col-md-6">
          <label class="form-label">{{ __('Entity Type') }}</label>
          <select name="entity_type" class="form-select">
            <option value="DOMESTIC BUSINESS CORPORATION" @if(($submission->entity_type ?? '') == 'DOMESTIC BUSINESS CORPORATION') selected @endif>Corporation</option>
            <option value="DOMESTIC LIMITED LIABILITY COMPANY" @if(($submission->entity_type ?? '') == 'DOMESTIC LIMITED LIABILITY COMPANY') selected @endif>LLC</option>
          </select>
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">{{ __('CEO/Manager Information') }}</div>
      <div class="card-body row g-4">
        <div class="col-md-6">
          <label class="form-label">{{ __('Full Name') }}</label>
          <input type="text" name="ceo_name" class="form-control" value="{{ $submission->ceo_name ?? '' }}" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">{{ __('Title') }}</label>
          <input type="text" name="ceo_title" class="form-control" value="" required />
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">{{ __('Principal Office Address') }}</div>
      <div class="card-body row g-4">
        <div class="col-12">
          <label class="form-label">{{ __('Street Address') }}</label>
          <input type="text" name="dos_process_address_1" class="form-control" value="{{ $submission->dos_process_address_1 ?? '' }}" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">{{ __('City') }}</label>
          <input type="text" name="dos_process_city" class="form-control" value="{{ $submission->dos_process_city ?? '' }}" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">{{ __('ZIP Code') }}</label>
          <input type="text" name="dos_process_zip" class="form-control" value="{{ $submission->dos_process_zip ?? '' }}" required />
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">{{ __('Board of Directors (if Corporation)') }}</div>
      <div class="card-body row g-4">
        <div class="col-md-6">
          <label class="form-label">{{ __('Director Name') }}</label>
          <input type="text" name="directorName" class="form-control" />
        </div>
        <div class="col-md-6">
          <label class="form-label">{{ __('Position') }}</label>
          <input type="text" name="directorPosition" class="form-control" />
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">{{ __('Declaration & Signature') }}</div>
      <div class="card-body row g-4">
        <div class="col-md-6">
          <label class="form-label">{{ __('Your Name') }}</label>
          <input type="text" name="declarantName" class="form-control" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">{{ __('Date') }}</label>
          <input type="date" name="declarationDate" class="form-control" required />
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" required id="agreeTerms" />
            <label class="form-check-label" for="agreeTerms">
              {{ __('I declare that the information provided is true and correct.') }}
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">{{ __('Payment') }}</div>
      <div class="card-body row g-4">
        <div class="col-12">
          <p class="mb-0">{{ __('Base Filing Fee:') }}</p>
          <h5 class="text-primary fw-bold">$125.00</h5>
        </div>
        <div class="col-12">
          <label class="form-label fw-semibold">{{ __('Optional Services:') }}</label>
          <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" id="printedCopy" name="addPrintedCopy" />
            <label class="form-check-label" for="printedCopy">{{ __('Add Printed Copy – $25') }}</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="certificate" name="addCertificate" />
            <label class="form-check-label" for="certificate">{{ __('Request Certificate of Existence – $25') }}</label>
          </div>
        </div>
        <div class="col-12">
            <label class="form-label">{{ __('Card Details') }}</label>
            <div id="card-element" class="form-control"></div>
            <div id="card-errors" role="alert"></div>
        </div>
        <input type="hidden" name="stripeToken" id="stripeToken">
        <div class="col-12">
          <label class="form-label">{{ __('Name on Card') }}</label>
          <input type="text" name="nameOnCard" class="form-control" required />
        </div>
        <div class="col-12 mt-4">
          <div class="d-flex justify-content-between align-items-center">
            <h5>{{ __('Total:') }}</h5>
            <h5 class="fw-bold text-success" id="totalAmount">{{ __('$125.00') }}</h5>
          </div>
          <div class="text-center mt-3">
            <button type="submit" id="submit-button" class="btn btn-primary px-4 py-2">
              {{ __('Submit & Pay Now – ') }}<span id="submitTotal">$125.00</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Stripe JS
    const stripe = Stripe("{{ env('STRIPE_KEY') }}");
    const elements = stripe.elements();
    const cardElement = elements.create('card');
    cardElement.mount('#card-element');

    const form = document.getElementById('payment-form');
    const submitButton = document.getElementById('submit-button');
    const cardErrors = document.getElementById('card-errors');
    const stripeTokenInput = document.getElementById('stripeToken');

    form.addEventListener('submit', async function(event) {
        event.preventDefault();

        // This confirmation is the only change
        if (confirm('Are you sure you want to proceed with the payment?')) {
            submitButton.disabled = true;
            cardErrors.textContent = '';

            const { token, error } = await stripe.createToken(cardElement);

            if (error) {
                cardErrors.textContent = error.message;
                submitButton.disabled = false;
            } else {
                stripeTokenInput.value = token.id;
                form.submit();
            }
        }
    });

    // Your Price Calculation JS (Unchanged)
    const printedCheckbox = document.getElementById('printedCopy');
    const certificateCheckbox = document.getElementById('certificate');
    const totalAmount = document.getElementById('totalAmount');
    const submitTotal = document.getElementById('submitTotal');

    function calculateTotal() {
        let total = 125;
        if (printedCheckbox.checked) total += 25;
        if (certificateCheckbox.checked) total += 25;
        totalAmount.textContent = `$${total}.00`;
        submitTotal.textContent = `$${total}.00`;
    }

    if(printedCheckbox) printedCheckbox.addEventListener('change', calculateTotal);
    if(certificateCheckbox) certificateCheckbox.addEventListener('change', calculateTotal);
});
</script>

@include('includes.footer')