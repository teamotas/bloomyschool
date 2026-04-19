  <!-- Favicon -->
  <!-- <link rel="icon" href="./assets/images/logo/favicon.png" type="image/png"> -->
   
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo/favicon-16x16.png" />

  <!-- Bootstrap -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <!-- swiper -->
  <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">
  <!-- magnipic -->
  <link rel="stylesheet" href="./assets/css/magnipic-popup.css">
  <!-- aos -->
  <link rel="stylesheet" href="./assets/css/aos.css">
  <!-- Main css -->
  <link rel="stylesheet" href="./assets/css/main.css">
  
  <!-- ✅ Font Awesome (required for icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <style>
    .social-sidebar {
      position: fixed;
      top: 35%;
      right: 0;
      z-index: 9999;
    }

    /* Each item */
    .social {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 200px;
      padding: 12px 16px;
      margin: 4px 0;
      color: #fff;
      font-size: 14px;
      font-family: sans-serif;
      text-decoration: none;

      /* hidden state */
      /* transform: translateX(155px); */
      transition: transform 0.3s ease;

      box-shadow: 0 4px 8px rgba(0,0,0,0.2);

  transform: translateX(calc(100% - 45px)); /* only icon visible */
}

    /* Hover (ONLY THIS ITEM moves) */
    .social:hover {
      transform: translateX(0);
    }

    /* Icon */
    .social i {
      font-size: 18px;
    }

    /* Colors */
    .facebook { background: #1877f2; }
    .twitter { background: #1da1f2; }
    .linkedin { background: #0077b5; }
    .instagram { background: #e1306c; }
    .youtube { background: #ff0000; }

    /* Link reset */
    .social a {
      display: flex;
      flex-direction: row-reverse;
      justify-content: space-between;
      /* gap: 8px; */
      align-items: center;
      width: 100%;
      color: #fff;
      text-decoration: none;
    }
    /* Left floating contact buttons */
    .contact-float {
      position: fixed;
      left: 16px;
      bottom: 16px;
      z-index: 10000;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    /* Button base */
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
      width: 52.5px;
      height: 52.5px;
    }

    .whatsapp i {
      font-size: 28px;
    }

    /* WhatsApp */
    .whatsapp {
      background: #25D366;
    }

    /* Call */
    .call {
      background: #007bff;
    }

    /* Mobile size */
    @media (max-width: 768px) {
      .contact-btn {
        width: 44px;
        height: 44px;
        font-size: 18px;
      }
    }
  </style>


