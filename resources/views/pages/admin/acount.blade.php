@extends('layouts.main')
@include('includes.script')
@include('includes.head')

<style>
/* All your existing styles from the previous code */
:root {
    --primary-color: #4361ee;
    --secondary-color: #3f37c9;
    --success-color: #4cc9f0;
    --danger-color: #7c7a7bff;
    --warning-color: #f8961e;
    --info-color: #4895ef;
    --light-bg: #f8f9fa;
    --dark-text: #2b2d42;
    --light-text: #8d99ae;
    --card-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    --card-hover-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

.main-content {
    width: 85vw;
    max-width: 100vw;
    margin: 0;
    padding: 0;
    background-color: var(--light-bg);
    min-height: 100vh;
}
 .container-fluid {
        padding: 0px 40px;
    }

@media (max-width: 1020px) {
      .main-content{
        width: 100vw;
    }
    .navbar {
     display: none;
    }
    .container-fluid {
        margin: 2rem 5px;
        padding: 0px 13px;
    }
}
/* Form specific styles */
.form-card {
    background: white;
    border-radius: 12px;
    box-shadow: var(--card-shadow);
    padding: 2rem;
    margin-bottom: 2rem;
}

.form-section {
    margin-bottom: 2rem;
}

.form-section-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid var(--primary-color);
}

.form-label {
    font-weight: 600;
    color: var(--dark-text);
    margin-bottom: 0.5rem;
}

.form-control, .form-select, .form-check-input {
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    /* padding: 0.75rem 1rem; */
    transition: all 0.3s;
}

.form-control:focus, .form-select:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.15);
}

.required-field::after {
    content: " *";
    color: var(--danger-color);
}

.form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 1rem;
    margin-top: 2rem;
}

/* Keep all your existing styles from previous code */
/* ... */
</style>

@section('content')
<div class="main-content">
    <!-- Header -->
    <nav class="navbar bg-white border-bottom">
        <div class="container-fluid" style="padding: 1rem 2rem;">
           <h5 class="mb-0 fw-semibold" style="font-size: 24px;">{{ __('New Business Submission') }}</h5>
        </div>
    </nav>

    <!-- Form Content -->
    <div class="container-fluid py-4" style="">
        <div class="card form-card">
            <form id="businessSubmissionForm">
                <!-- Basic Information Section -->
                <div class="form-section">
                    <h6 class="form-section-title">{{ __('Basic Information') }}</h6>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="businessName" class="form-label required-field">{{ __('Business Name') }}</label>
                            <input type="text" class="form-control" id="businessName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="dosId" class="form-label required-field">{{ __('DOS ID') }}</label>
                            <input type="text" class="form-control" id="dosId" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label required-field">{{ __('Email') }}</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">{{ __('Phone Number') }}</label>
                            <input type="tel" class="form-control" id="phone">
                        </div>
                    </div>
                </div>

                <!-- Business Details Section -->
                <div class="form-section">
                    <h6 class="form-section-title">{{ __('Business Details') }}</h6>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="businessType" class="form-label required-field">{{ __('Business Type') }}</label>
                            <select class="form-select" id="businessType" required>
                                <option value="" selected disabled>{{ __('Select business type') }}</option>
                                <option value="LLC">{{ __('LLC') }}</option>
                                <option value="Corporation">{{ __('Corporation') }}</option>
                                <option value="Sole Proprietorship">{{ __('Sole Proprietorship') }}</option>
                                <option value="Partnership">{{ __('Partnership') }}</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="industry" class="form-label required-field">{{ __('Industry') }}</label>
                            <select class="form-select" id="industry" required>
                                <option value="" selected disabled>{{ __('Select industry') }}</option>
                                <option value="Technology">{{ __('Technology') }}</option>
                                <option value="Healthcare">{{ __('Healthcare') }}</option>
                                <option value="Finance">{{ __('Finance') }}</option>
                                <option value="Retail">{{ __('Retail') }}</option>
                                <option value="Manufacturing">{{ __('Manufacturing') }}</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="businessAddress" class="form-label required-field">{{ __('Business Address') }}</label>
                            <textarea class="form-control" id="businessAddress" rows="2" required></textarea>
                        </div>
                    </div>
                </div>

                <!-- Submission Details Section -->
                <div class="form-section">
                    <h6 class="form-section-title">{{ __('Submission Details') }}</h6>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="submissionDate" class="form-label required-field">{{ __('Submission Date') }}</label>
                            <input type="date" class="form-control" id="submissionDate" required>
                        </div>
                        <div class="col-md-6">
                            <label for="status" class="form-label required-field">{{ __('Status') }}</label>
                            <select class="form-select" id="status" required>
                                <option value="Pending" selected>{{ __('Pending') }}</option>
                                <option value="Approved">{{ __('Approved') }}</option>
                                <option value="Under Review">{{ __('Under Review') }}</option>
                                <option value="Rejected">{{ __('Rejected') }}</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label required-field">{{ __('Payment Status') }}</label>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentStatus" id="paid" value="Paid" checked>
                                    <label class="form-check-label" for="paid">{{ __('Paid') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentStatus" id="unpaid" value="Unpaid">
                                    <label class="form-check-label" for="unpaid">{{ __('Unpaid') }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="amount" class="form-label">{{ __('Amount (USD)') }}</label>
                            <input type="number" class="form-control" id="amount" step="0.01">
                        </div>
                    </div>
                </div>

                <!-- Documents Section -->
                <div class="form-section">
                    <h6 class="form-section-title">{{ __('Documents') }}</h6>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="businessLicense" class="form-label">{{ __('Business License') }}</label>
                            <input type="file" class="form-control" id="businessLicense">
                        </div>
                        <div class="col-12">
                            <label for="taxDocument" class="form-label">{{ __('Tax Document') }}</label>
                            <input type="file" class="form-control" id="taxDocument">
                        </div>
                        <div class="col-12">
                            <label for="additionalDocuments" class="form-label">{{ __('Additional Documents') }}</label>
                            <input type="file" class="form-control" id="additionalDocuments" multiple>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="form-actions">
                    <button type="button" class="btn btn-outline-secondary">{{ __('Cancel') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('businessSubmissionForm');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Form validation
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');
        
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
                field.classList.add('is-invalid');
            } else {
                field.classList.remove('is-invalid');
            }
        });
        
        if (isValid) {
            // Form submission logic would go here
            alert('Form submitted successfully!');
            // form.submit();
        } else {
            alert('Please fill in all required fields.');
        }
    });
    
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>
@endsection