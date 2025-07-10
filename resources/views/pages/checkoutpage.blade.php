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
  .bg-bright-blue {
    background-color: #3b82f6;
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


<div class="container py-5">
  <form id="checkoutForm">
    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">Business Information</div>
      <div class="card-body row g-4">
        <div class="col-md-6">
          <label class="form-label">Business Name</label>
          <input type="text" name="businessName" class="form-control" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">DOS ID Number</label>
          <input type="text" name="dosId" class="form-control" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">Entity Type</label>
          <select name="entityType" class="form-select">
            <option value="corporation">Corporation</option>
            <option value="llc">LLC</option>
          </select>
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">CEO/Manager Information</div>
      <div class="card-body row g-4">
        <div class="col-md-6">
          <label class="form-label">Full Name</label>
          <input type="text" name="ceoName" class="form-control" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">Title</label>
          <input type="text" name="ceoTitle" class="form-control" required />
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">Principal Office Address</div>
      <div class="card-body row g-4">
        <div class="col-12">
          <label class="form-label">Street Address</label>
          <input type="text" name="principalAddress" class="form-control" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">City</label>
          <input type="text" name="principalCity" class="form-control" required />
        </div>
        <div class="col-md-6">
          <label class="form-label">ZIP Code</label>
          <input type="text" name="principalZip" class="form-control" required />
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">Additional Services</div>
      <div class="card-body">
        <div class="form-check mb-2">
          <input class="form-check-input" type="checkbox" id="printedCopy" name="addPrintedCopy" />
          <label class="form-check-label" for="printedCopy">Add Printed Copy - $25</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="certificate" name="addCertificate" />
          <label class="form-check-label" for="certificate">Request Certificate of Existence - $25</label>
        </div>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">Payment Information</div>
      <div class="card-body row g-4">
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
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header text-navy-900 fw-bold">Order Summary</div>
      <div class="card-body">
        <p>Base Fee: <strong>$125.00</strong></p>
        <p id="printedFee" class="d-none">Printed Copy: <strong>$25.00</strong></p>
        <p id="certificateFee" class="d-none">Certificate of Existence: <strong>$25.00</strong></p>
        <hr />
        <p>Total: <strong id="totalAmount">$125.00</strong></p>
        <div class="text-center mt-4">
          <button type="submit" class="btn btn-primary">
            Submit & Pay Now - <span id="submitTotal">$125.00</span>
          </button>
        </div>
      </div>
    </div>
  </form>
</div>

<script>
  const printedCheckbox = document.getElementById('printedCopy');
  const certificateCheckbox = document.getElementById('certificate');
  const printedFee = document.getElementById('printedFee');
  const certificateFee = document.getElementById('certificateFee');
  const totalAmount = document.getElementById('totalAmount');
  const submitTotal = document.getElementById('submitTotal');

  function calculateTotal() {
    let total = 125;
    printedFee.classList.add('d-none');
    certificateFee.classList.add('d-none');
    if (printedCheckbox.checked) {
      total += 25;
      printedFee.classList.remove('d-none');
    }
    if (certificateCheckbox.checked) {
      total += 25;
      certificateFee.classList.remove('d-none');
    }
    totalAmount.textContent = `$${total}.00`;
    submitTotal.textContent = `$${total}.00`;
  }

  printedCheckbox.addEventListener('change', calculateTotal);
  certificateCheckbox.addEventListener('change', calculateTotal);
</script>

@include('includes.footer')
