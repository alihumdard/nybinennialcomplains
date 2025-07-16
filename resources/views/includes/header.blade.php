

<!-- Add Bootstrap Icons CDN (if not already included in layout) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<header class="bg-white border-bottom shadow-sm">
  <div class="container d-flex justify-content-between align-items-center py-3">
    <a href="/" class="d-flex align-items-center text-decoration-none">
      <i class="bi bi-geo-alt-fill text-primary me-3" style="font-size: 2rem;"></i>
      <div>
        <h1 class="h5 text-primary mb-0">NY Biennial Compliance</h1>
        <p class="small text-secondary mb-0">New York State Filing Service</p>
      </div>
    </a>
    <div class="d-flex align-items-center gap-3">
      <div class="d-none d-md-flex align-items-center text-muted small">
        <i class="bi bi-telephone-fill me-2" style="font-size: 1rem;"></i>
        <span>Office Hours: Mon-Fri 9AM-5PM</span>
      </div>
      @if (isset($submission) && $submission)
        {{-- If a valid submission is found, this links to the pre-filled checkout page --}}
        <a href="{{ route('checkout.with_data', $submission->dos_id) }}" class="btn btn-primary">File Now</a>
      @else
        {{-- Otherwise, this button triggers the pop-up modal --}}
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#infoModal">
            File Now
        </button>
      @endif
    </div>
  </div>
</header>
