@include('includes.head')
@include('includes.header')
@include('includes.script')
<body class="bg-light">
  <div class="container py-5">
    <div class="bg-white rounded-4 shadow p-5 text-center">
      
      <!-- Success Icon & Heading -->
      <div class="mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-success mb-3" width="64" height="64" fill="currentColor" viewBox="0 0 24 24">
          <path d="M9 16.17 4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
        </svg>
        <h2 class="fw-bold text-primary mb-2">Your Biennial Statement Has Been Submitted</h2>
        <p class="text-muted">Thank you for filing your New York State Biennial Statement with us.</p>
      </div>

      <!-- What Happens Next -->
      <div class="bg-success bg-opacity-10 border border-success rounded p-4 text-start mb-4">
        <h5 class="text-success mb-3"><i class="bi bi-envelope-fill me-2"></i>What Happens Next?</h5>
        <ul class="list-unstyled mb-0 text-success small">
          <li>✔ Your filing has been submitted to the NY Department of State</li>
          <li>✔ You will receive an email confirmation within 48 business hours</li>
          <li>✔ Your business will be updated to "Good Standing"</li>
        </ul>
      </div>

      <!-- Filing & Help Details -->
      <div class="row g-4 mb-4">
        <div class="col-md-6">
          <div class="bg-light border rounded p-4 h-100 text-start">
            <h6 class="fw-bold mb-3">Filing Details</h6>
            <div class="small text-muted">
              <div class="d-flex justify-content-between"><span>Service:</span><span>Biennial Statement Filing</span></div>
              <div class="d-flex justify-content-between"><span>Amount Paid:</span><span>$125.00</span></div>
              <div class="d-flex justify-content-between"><span>Processing Time:</span><span>48 business hours</span></div>
              <div class="d-flex justify-content-between"><span>Confirmation:</span><span>Via email</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bg-primary bg-opacity-10 border rounded p-4 h-100 text-start">
            <h6 class="fw-bold mb-3">Need Help?</h6>
            <div class="small text-muted">
              <div class="d-flex justify-content-between"><span>Email:</span><span>info@nybiennialcompliance.com</span></div>
              <div class="d-flex justify-content-between"><span>Office Hours:</span><span>Mon–Fri 9AM–5PM</span></div>
              <div class="d-flex justify-content-between"><span>Response Time:</span><span>Within 24 hours</span></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Buttons -->
      <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 mb-4">
        <a href="#" class="btn btn-primary d-flex align-items-center gap-2 px-4 py-2">
          <i class="bi bi-file-earmark-text"></i> Request Printed Copy
        </a>
        <a href="/" class="btn btn-outline-secondary d-flex align-items-center gap-2 px-4 py-2">
          <i class="bi bi-house"></i> Return to Home
        </a>
      </div>

      <!-- Alert / Note -->
      <div class="alert alert-warning small text-start mb-0 rounded">
        <strong>Important:</strong> Save this confirmation for your records. If you do not receive your email confirmation within 48 business hours, please contact us.
      </div>
    </div>
  </div>
</body>
@include('includes.footer')