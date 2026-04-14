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
    
a {
  text-decoration: none;
  vertical-align: middle;
  text-align: center;
  line-height: 3;
}

p {
  color: white;
  margin: 0px;
}

.social-sidebar {
  height: auto;
  width: 0px;
  position: fixed;
  text-align: center;
  top: 35vh;
  padding: 10px;
}

p i {
  left: 30px;
  position: relative;
  vertical-align: middle;
  text-align: center;
  font-size: 24px;
}

.social {
  margin-left: -200px;
  width: 230px;
  padding: 0;
  display: inline-table;
  height: 0px;
  background-color: rgba(128, 128, 128, 0.73);
  -moz-transition-property: margin-left;
  -moz-transition-duration: 0.2s;
  -moz-transition-delay: 0.2s;
  -ms-transition-property: margin-left;
  -ms-transition-duration: 0.2s;
  -ms-transition-delay: 0.2s;
  -o-transition-property: margin-left;
  -o-transition-duration: 0.2s;
  -o-transition-delay: 0.2s;
  -webkit-transition-property: margin-left;
  -webkit-transition-duration: 0.2s;
  -webkit-transition-delay: 0.2s;
  box-shadow: 0px 0px 6px 0px #3E3D3D;
  cursor: pointer;
}

.social:hover {
  margin-left: -30px;
  width: 230px;
}

.facebook {
  background-color: #3b5998;
}

.twitter {
  background-color: #4099FF;
}

.google {
  background-color: #DD4B39;
}

.linkedin p i {
  left: 20px;
}

.google p i {
  left: 35px;
}

.youtube p i {
  left: 18px;
}

.youtube:hover {
  background-color: #E52D27;
}

.linkedin:hover {
  background-color: #0976B4;
}
</style>

<div class="social-sidebar">
  <div class="social facebook">
    <a href=" https://www.facebook.com " target="_blank">
      <p>Like on Facebook <i class="fa fa-facebook "></i> </p>
    </a>
  </div>
  <div class="social twitter">
    <a href=" https://www.twitter.com " target="_blank">
      <p>Follow on Twitter<i class="fa fa-twitter"></i> </p>
    </a>
  </div>
  <div class="social google">
    <a href=" https://www.plus.google.com " target="_blank">
      <p>&nbspAdd on Google+<i class="fa fa-google-plus"></i> </p>
    </a>
  </div>
</div>