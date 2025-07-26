<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Section</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  @include('includes.header')
  <style>
    body{background-color:#f8f9fa;font-family:'Segoe UI',sans-serif}.contact-section{background:#fff;border-radius:16px;box-shadow:0 5px 30px rgba(0,0,0,.05);padding:60px 40px}.form-control{border-radius:12px;padding:14px 18px;border:1px solid #ced4da;font-size:16px}.form-control:focus{border-color:#0d6efd;box-shadow:0 0 0 .2rem rgba(13,110,253,.2)}.form-control::placeholder{color:#6c757d}.btn-yellow{background-color:#ffe000;color:#000;font-weight:700;border-radius:8px;padding:12px 28px;box-shadow:0 4px 12px rgba(255,224,0,.4);transition:.3s}.btn-yellow:hover{background-color:#f4d200;box-shadow:0 6px 20px rgba(244,210,0,.5)}.section-label{font-weight:600;font-style:italic;text-transform:uppercase;color:#0d6efd;border-left:4px solid #0d6efd;padding-left:12px;margin-bottom:10px}.contact-heading{font-size:36px;font-weight:800;color:#000}.contact-desc{color:#6c757d;font-size:16px;margin-top:10px}.email-box{display:flex;align-items:center;gap:15px;margin-top:30px}.email-icon{background:#ffe000;padding:16px;display:inline-flex;align-items:center;justify-content:center;border-radius:8px}.email-icon i{font-size:24px}.email-text small{font-weight:500;color:#555}.email-text a{color:#000;font-weight:600;text-decoration:none}.email-text a:hover{text-decoration:underline}@media (max-width:768px){.contact-section{padding:30px 20px}.contact-heading{font-size:28px}}
  </style>
</head>
<body>

<section class="py-5">
  <div class="container">
    <div class="contact-section">
      <div class="row g-5 align-items-start">
        <div class="col-lg-6">
          <h3 class="fw-bold mb-4">Send A Message</h3>
          
          @if(session('success'))
            <div class="alert alert-success rounded-3">
                {{ session('success') }}
            </div>
          @endif

          <form method="POST" action="{{ route('contact.submit') }}">
            @csrf
            <div class="mb-3">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}" required />
              @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" value="{{ old('email') }}" required />
              @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-4">
              <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="6" placeholder="Your Message" required>{{ old('message') }}</textarea>
              @error('message')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-yellow">Send A Message</button>
          </form>
        </div>

        <div class="col-lg-6 ps-lg-5">
          <div class="section-label">Quick Contact</div>
          <h2 class="contact-heading">Have Questions?<br>Get in Touch!</h2>
          <p class="contact-desc">
            Our compliance specialists are available to answer your questions and guide you through the filing process.
          </p>
          <div class="email-box">
            <div class="email-icon">
              <i class="bi bi-envelope-fill text-dark"></i>
            </div>
            <div class="email-text">
              <small>Write email</small><br />
              <a href="mailto:info@boicomplianceservices.com">info@boicomplianceservices.com</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('includes.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
