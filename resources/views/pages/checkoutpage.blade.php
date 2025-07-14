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
</style>

<div class="sticky-top bg-white z-3 mb-4 py-3" style="z-index: 1050;">
  <div class="container bg-light rounded-pill shadow-sm px-4 py-3 d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center">
      <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center fw-bold me-2" style="width: 32px; height: 32px;">1</div>
      <div class="fw-semibold">File Your Statement</div>
    </div>
    <div class="flex-grow-1 mx-3">
      <div class="progress" style="height: 4px;">
        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;"></div>
      </div>
    </div>
    <div class="d-flex align-items-center">
      <div class="rounded-circle bg-secondary bg-opacity-10 text-secondary d-flex align-items-center justify-content-center fw-bold me-2" style="width: 32px; height: 32px;">2</div>
      <div class="text-secondary">Confirmation</div>
    </div>
  </div>
</div>

<div class="container py-5">
  <form id="checkoutForm" method="POST" action="{{ route('submission.update', $submission->dos_id) }}">
    @csrf
    
    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">Business Information</div>
      <div class="card-body row g-4">
        <div class="col-md-6">
          <label class="form-label">Business Name</label>
          <input type="text" name="business_name" class="form-control" value="{{ $submission->business_name ?? '' }}" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">DOS ID Number</label>
          <input type="text" name="dos_id" class="form-control" value="{{ $submission->dos_id ?? '' }}" readonly required />
        </div>
        <div class="col-md-6">
          <label class="form-label">Entity Type</label>
          <select name="entity_type" class="form-select">
            <option value="corporation" {{ ($submission->entity_type ?? '') == 'DOMESTIC BUSINESS CORPORATION' ? 'selected' : '' }}>Corporation</option>
            <option value="llc" {{ ($submission->entity_type ?? '') == 'DOMESTIC LIMITED LIABILITY COMPANY' ? 'selected' : '' }}>LLC</option>
          </select>
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">CEO/Manager Information</div>
      <div class="card-body row g-4">
        <div class="col-md-6">
          <label class="form-label">Full Name</label>
          <input type="text" name="ceo_name" class="form-control" value="{{ $submission->ceo_name ?? '' }}" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">Title</label>
          <input type="text" name="ceo_title" class="form-control" value="" required />
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">Principal Office Address</div>
      <div class="card-body row g-4">
        <div class="col-12">
          <label class="form-label">Street Address</label>
          <input type="text" name="dos_process_address_1" class="form-control" value="{{ $submission->dos_process_address_1 ?? '' }}" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">City</label>
          <input type="text" name="dos_process_city" class="form-control" value="{{ $submission->dos_process_city ?? '' }}" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">ZIP Code</label>
          <input type="text" name="dos_process_zip" class="form-control" value="{{ $submission->dos_process_zip ?? '' }}" required />
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">Board of Directors (if Corporation)</div>
      <div class="card-body row g-4">
        <div class="col-md-6">
          <label class="form-label">Director Name</label>
          <input type="text" name="directorName" class="form-control" />
        </div>
        <div class="col-md-6">
          <label class="form-label">Position</label>
          <input type="text" name="directorPosition" class="form-control" />
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">Declaration & Signature</div>
      <div class="card-body row g-4">
        <div class="col-md-6">
          <label class="form-label">Your Name</label>
          <input type="text" name="declarantName" class="form-control" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">Date</label>
          <input type="date" name="declarationDate" class="form-control" required />
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" required id="agreeTerms" />
            <label class="form-check-label" for="agreeTerms">
              I declare that the information provided is true and correct.
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">Payment</div>
      <div class="card-body row g-4">

        <div class="col-12">
          <p class="mb-0">Base Filing Fee:</p>
          <h5 class="text-primary fw-bold">$125.00</h5>
        </div>

        <div class="col-12">
          <label class="form-label fw-semibold">Optional Services:</label>
          <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" id="printedCopy" name="addPrintedCopy" />
            <label class="form-check-label" for="printedCopy">Add Printed Copy – $25</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="certificate" name="addCertificate" />
            <label class="form-check-label" for="certificate">Request Certificate of Existence – $25</label>
          </div>
        </div>

        <div class="col-12">
          <label class="form-label">Card Number</label>
          <input type="text" name="cardNumber" class="form-control" placeholder="1234 5678 9012 3456" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">Expiry Date</label>
          <input type="text" name="expiryDate" class="form-control" placeholder="MM/YY" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">CVV</label>
          <input type="text" name="cvv" class="form-control" placeholder="123" required />
        </div>
        <div class="col-12">
          <label class="form-label">Name on Card</label>
          <input type="text" name="nameOnCard" class="form-control" required />
        </div>

        <div class="col-12 mt-4">
          <div class="d-flex justify-content-between align-items-center">
            <h5>Total:</h5>
            <h5 class="fw-bold text-success" id="totalAmount">$125.00</h5>
          </div>
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary px-4 py-2">
              Submit & Pay Now – <span id="submitTotal">$125.00</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<script>
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

  printedCheckbox.addEventListener('change', calculateTotal);
  certificateCheckbox.addEventListener('change', calculateTotal);
  
</script>

@include('includes.footer')