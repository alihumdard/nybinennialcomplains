<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modern Navbar</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <style>
    header {
      padding: 0px 40px;
    }

    header img {
      height: 100px;
    }

    .nav-links a {
      color: #333;
      font-weight: 500;
      text-decoration: none;
      padding: 8px 12px;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: #0d6efd;
    }

    .cta-btn {
      background-color: #F5A81C;
      color: white;
      font-weight: 600;
      font-size: 14px;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      transition: background-color 0.3s ease;
    }

    .cta-btn:hover {
      background-color: #df950bff;
    }

    /* Mobile Menu Styles */
    .mobile-menu {
      display: none;
      width: 100%;
      background-color: white;
      padding: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .mobile-menu.active {
      display: block;
    }

    .mobile-menu a {
      display: block;
      padding: 10px 0;
      color: #333;
      text-decoration: none;
      border-bottom: 1px solid #eee;
    }

    .mobile-menu a:last-child {
      border-bottom: none;
    }

    @media (max-width: 576px) {
      header {
        padding: 0px;
      }

      .nav-links {
        display: none;
      }

      .mobile-menu-icon {
        display: inline-block;
        font-size: 1.5rem;
        color: #333;
        cursor: pointer;
      }
      
      .cta-btn {
        padding: 8px 12px;
        font-size: 12px;
      }
    }

    @media (min-width: 577px) {
      .mobile-menu-icon {
        display: none;
      }
      
      .mobile-menu {
        display: none !important;
      }
    }
  </style>
</head>
<body>

<header class="bg-white border-bottom shadow-sm">
  <div class="container d-flex justify-content-between align-items-center py-2" style="max-width: 1200px;">
    <!-- Logo -->
    <a href="/" class="d-flex align-items-center text-decoration-none">
      <img src="/assets/images/logo.png" alt="Logo" />
    </a>

    <!-- Nav Links (Desktop) -->
    <div class="d-none d-sm-flex align-items-center gap-5 nav-links">
      <a href="#">Home</a>
      <a href="#">Contact Us</a>
      <a href="#">Faq</a>
    </div>

    <!-- CTA Button -->
    <div class="d-flex align-items-center gap-3">
      <button class="cta-btn d-none d-sm-block">FILE YOUR BIENNIAL STATEMENT NOW</button>
      <!-- Mobile Menu Icon -->
      <span class="mobile-menu-icon d-sm-none" id="mobileMenuButton">
        <i class="bi bi-list"></i>
      </span>
    </div>
  </div>
  
  <!-- Mobile Menu (Hidden by default) -->
  <div class="mobile-menu" id="mobileMenu">
    <a href="#">Home</a>
    <a href="#">Contact Us</a>
    <a href="#">Faq</a>
    <button class="cta-btn w-100 mt-3">FILE YOUR BIENNIAL STATEMENT NOW</button>
  </div>
</header>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    
    mobileMenuButton.addEventListener('click', function() {
      mobileMenu.classList.toggle('active');
      
      // Change icon based on menu state
      const icon = mobileMenuButton.querySelector('i');
      if (mobileMenu.classList.contains('active')) {
        icon.classList.remove('bi-list');
        icon.classList.add('bi-x');
      } else {
        icon.classList.remove('bi-x');
        icon.classList.add('bi-list');
      }
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
      if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
        mobileMenu.classList.remove('active');
        const icon = mobileMenuButton.querySelector('i');
        icon.classList.remove('bi-x');
        icon.classList.add('bi-list');
      }
    });
  });
</script>
</body>
</html>