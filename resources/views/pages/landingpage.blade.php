@include('includes.head')
@include('includes.header')
@include('includes.script')

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    :root {
        --primary-blue: #004080;
        --light-blue: #e0f2fe;
        --accent-yellow: #F5A81C;
        --text-dark: #212529;
        --text-muted: #6c757d;
        --bg-light: #f8f9fa;
        --bg-white: #ffffff;
        --border-color: #dee2e6;
        --danger-color: #dc3545;
    }

    body {
        font-family: 'Open Sans', sans-serif;
        background: var(--bg-light);
        line-height: 1.7;
        color: var(--text-dark);
        margin: 0;
        padding: 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: 'Montserrat', sans-serif;
        color: var(--primary-blue);
        font-weight: 700;
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, #005f99 0%, #003d66 100%);
        padding: 6rem 1rem;
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at center, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
    }

    .hero-section .container {
        position: relative;
        z-index: 1;
    }

    .hero-section h1 {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        color: white;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .hero-section p {
        font-size: 1.2rem;
        max-width: 800px;
        margin: 0 auto 2.5rem;
        opacity: 0.9;
    }

    .cta-btn {
        background-color: var(--accent-yellow);
        color: white;
        font-weight: 600;
        padding: 14px 28px;
        border: none;
        border-radius: 6px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(245, 168, 28, 0.3);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 1rem;
    }

    .cta-btn:hover {
        background-color: #df950b;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(245, 168, 28, 0.4);
    }

    /* Notice Card Section */
  .notice-container {
  padding: 4rem 1rem;
  background: #f0f4f8;
}

.notice-card {
  display: flex;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 0 auto;
  background: white;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
}

.notice-image {
  flex: 1;
  min-width: 420px;
  padding: 40px 0px;
  background: white;
  display: flex;
  justify-content: center;
}

.notice-image img {
  max-width: 80%;
  height: auto;
  /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); */
}

.notice-content {
  flex: 2;
  background: #ffffff;
  min-width: 320px;
  padding: 3rem 2rem;
}

.notice-title {
  font-size: 1.8rem;
  font-weight: 700;
  color: #0a58ca;
  margin-bottom: 1.5rem;
  border-bottom: 3px solid #dee2e6;
  padding-bottom: 1rem;
}

.highlight {
  font-weight: 600;
  margin-bottom: 1.5rem;
  color: #212529;
  background: #fff3cd;
  padding: 1rem;
  border-left: 5px solid #ffc107;
  border-radius: 6px;
}

.notice-content p {
  margin-bottom: 1rem;
  color: #495057;
  line-height: 1.7;
  font-size: 1rem;
}

.consequences {
  background: #f8f9fa;
  border-left: 5px solid #0a58ca;
  padding: 1.5rem;
  margin-top: 2rem;
  margin-bottom: 2rem;
  border-radius: 8px;
}

.consequences h5 {
  color: #0a58ca;
  font-weight: 700;
  margin-bottom: 1rem;
}

.consequences ul {
  padding-left: 1.25rem;
  margin: 0;
}

.consequences li {
  margin-bottom: 0.75rem;
  color: #343a40;
}

.btn-wrapper {
  margin-top: 2rem;
}

.cta-btn {
  background-color: #0d6efd;
  color: #ffffff;
  border: none;
  padding: 0.8rem 1.6rem;
  font-size: 1rem;
  font-weight: 600;
  border-radius: 8px;
  transition: background-color 0.3s ease;
  box-shadow: 0 6px 16px rgba(13, 110, 253, 0.2);
}

.cta-btn:hover {
  background-color: #0b5ed7;
  cursor: pointer;
}


    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .hero-section {
            padding: 5rem 1rem;
        }

        .hero-section h1 {
            font-size: 2.2rem;
        }

        .notice-content {
            padding: 2rem;
        }
    }

    @media (max-width: 768px) {
        .hero-section {
            padding: 4rem 1rem;
        }

        .hero-section h1 {
            font-size: 1.8rem;
        }

        .hero-section p {
            font-size: 1.1rem;
        }

        .notice-card {
            flex-direction: column;
        }

        .notice-image {
            padding: 1.5rem;
        }

        .notice-title {
            font-size: 1.4rem;
        }

        .cta-btn {
            padding: 12px 24px;
        }
    }

    @media (max-width: 576px) {
        .hero-section {
            padding: 3rem 1rem;
        }

        .hero-section h1 {
            font-size: 1.6rem;
        }

        .hero-section p {
            font-size: 1rem;
        }

        .notice-content {
            padding: 1.5rem;
        }

        .notice-title {
            font-size: 1.3rem;
        }

        .cta-btn {
            padding: 10px 20px;
            font-size: 0.9rem;
        }
    }
</style>

<section class="hero-section">
    <div class="container">
        <h1 class="fw-bold mb-3">{{ __('Biennial Statement Filing Required by NY State Law') }}</h1>
        <p class="fw-semibold mb-4">{{ __('Avoid the administrative dissolution of your company — stay compliant and in Good Standing with New York State.') }}</p>

        @if ($submission)
        <a href="{{ route('checkout.with_data', $submission->dos_id) }}" class="btn cta-btn">{{ __('File Now - $125') }}</a>
        @else
        {{-- This button now opens the modal --}}
        <button type="button" class="btn cta-btn" data-bs-toggle="modal" data-bs-target="#dosIdRequiredModal">
            {{ __('FILE YOUR BIENNIAL STATEMENT NOW') }}
        </button>
        @endif
    </div>
</section>
<div class="container notice-container py-5">
  <div class=" notice-card g-5 align-items-center">
    <!-- Image Section -->
    <div class="col-12 col-md-6">
      <div class="notice-image text-center text-md-start">
        <img src="/assets/images/map.jpg" alt="New York State Compliance Notice" class="img-fluid rounded shadow-sm w-100" style="max-width: 500px;" />
      </div>
    </div>

    <!-- Content Section -->
    <div class="col-12 col-md-6">
      <div class="notice-content px-md-3">
        <h4 class="notice-title fw-bold mb-3 text-danger">
          {{ __('NOTICE OF NON-COMPLIANCE WITH BIENNIAL STATEMENT') }}
        </h4>

        <p class="highlight fw-semibold text-dark">
          {{ __('You Are Receiving This Notice Because Your Business Has Been Identified as Past Due.') }}
        </p>

        <p class="text-muted">
          {{ __('According to public records maintained by the New York Department of State – Division of Corporations, your business has not submitted its required Biennial Statement.') }}
        </p>

        <p class="text-muted">
          {{ __('To bring your business into compliance, the Biennial Statement must be filed immediately.') }}
        </p>

        <p class="text-muted">
          {{ __('Pursuant to Section 408 of the New York Business Corporation Law and Section 301(e) of the New York Limited Liability Company Law, all domestic and authorized foreign corporations and LLCs must file a Biennial Statement every two years with the New York Department of State.') }}
        </p>

        <div class="consequences mt-4">
          <h5 class="fw-semibold">{{ __('Failure to comply may result in:') }}</h5>
          <ul class="list-unstyled ps-3">
            <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i>{{ __('Risk of involuntary dissolution by the state') }}</li>
            <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i>{{ __('Suspension of business entity status') }}</li>
            <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i>{{ __('Loss of ability to receive legal and tax documents') }}</li>
            <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i>{{ __('Loss of ability to conduct transactions, secure loans, or enter into contracts') }}</li>
          </ul>
        </div>

        <div class="mt-4 text-center text-md-start">
          <button type="button" class="btn btn-danger px-4 py-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#dosIdRequiredModal">
            {{ __('FILE YOUR BIENNIAL STATEMENT NOW') }}
          </button>
        </div>
      </div>
    </div>
  </div>
</div>



<section class="how-it-works text-center py-5 bg-light">
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

<div class="modal fade" id="dosIdRequiredModal" tabindex="-1" aria-labelledby="dosIdRequiredModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dosIdRequiredModalLabel" style="color: var(--primary-blue);">Action Required</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Invalid DOS ID or DOS ID Not available. Please contact admin.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')
