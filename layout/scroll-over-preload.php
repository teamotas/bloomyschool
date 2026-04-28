    <!--==================== Preloader Start ====================-->
    <div class="loader-mask">
        <div class="loader">
        <div></div>
        <div></div>
        </div>
    </div>
    <!--==================== Preloader End ====================-->

    <?php // include('./layout/setting-panel.php') ?>

    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- Custom Toast Message start -->
    <div id="toast-container"></div>
    <!-- Custom Toast Message End -->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap cursor-big">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->

    <!-- Custom Cursor Start -->
    <div class="cursor"></div>
    <span class="dot"></span>
    <!-- Custom Cursor End -->

    <style>
    /* ================= SOCIAL SIDEBAR ================= */
.social-sidebar {
  position: fixed;
  top: 35%;
  right: 2px;
  z-index: 1000;
}

/* Each item */
.social {
  display: flex;
  align-items: center;
  width: 200px;
  padding: 12px 16px;
  margin: 6px 0;
  color: #fff;
  font-size: 14px;
  font-family: sans-serif;
  text-decoration: none;
  border-radius: 6px 0 0 6px;

  /* Hidden by default (desktop slide effect) */
  transform: translateX(calc(100% - 40px));
  transition: transform 0.3s ease;

  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

/* Hover (desktop only) */
.social:hover {
  transform: translateX(0);
}

/* Inner link */
.social a {
  display: flex;
  flex-direction: row-reverse;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  color: #fff;
  text-decoration: none;
}

/* Icon */
.social i {
  font-size: 18px;
  min-width: 20px;
  text-align: center;
}

/* Colors */
.facebook { background: #1877f2; }
.twitter { background: #1da1f2; }
.instagram { background: #e1306c; }
.youtube { background: #ff0000; }

/* ================= MOBILE FIX ================= */
@media (max-width: 768px) {
  .social-sidebar {
    top: 50%;
    transform: translateY(-50%);
    
    right: 8px;
  }

  .social {
    width: 48px;
    height: 48px;
    padding: 0;
    justify-content: center;
    transform: none !important; /* disable slide */
    border-radius: 50%;
  }

  .social a {
    justify-content: center;
  }

  .social span {
    display: none; /* hide text */
  }

  .social i {
    font-size: 20px;
  }
}

/* ================= CONTACT FLOAT ================= */
.contact-float {
  position: fixed;
  left: 16px;
  bottom: 16px;
  z-index: 1000;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.contact-btn {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 22px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.25);
  text-decoration: none;
  transition: transform 0.2s ease;
}

.contact-btn:hover {
  transform: scale(1.1);
}

.whatsapp {
  background: #25D366;
}

.call {
  background: #007bff;
}

@media (max-width: 768px) {
  .contact-btn {
    width: 44px;
    height: 44px;
    font-size: 18px;
  }
} </style>



<!-- Social Sidebar -->
<div class="social-sidebar">

  <div class="social facebook">
    <a href="https://facebook.com/bloomyschools/" target="_blank">
      <span>Like on Facebook</span>
      <i class="fab fa-facebook-f"></i>
    </a>
  </div>

  <div class="social twitter">
    <a href="https://x.com/bloomyschools/" target="_blank">
      <span>Follow on Twitter</span>
      <i class="fab fa-twitter"></i>
    </a>
  </div>

  <div class="social instagram">
    <a href="https://instagram.com/bloomyschools/" target="_blank">
      <span>Follow on Instagram</span>
      <i class="fab fa-instagram"></i>
    </a>
  </div>

  <div class="social youtube">
    <a href="https://youtube.com/@bloomyschools" target="_blank">
      <span>Subscribe on YouTube</span>
      <i class="fab fa-youtube"></i>
    </a>
  </div>

</div>