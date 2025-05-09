
<footer id="footer" class="footer position-relative light-background">

<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
      <a href="{{route('home.index')}}" class="logo d-flex align-items-center">
        <span class="sitename">Zakat Fttrah</span>
      </a>
      <div class="footer-contact pt-3">
        <p>Desa Mulyoharjo</p>
        <p>Kec. Moilong</p>
        <p class="mt-3"><strong>Phone:</strong> <span>+62 85656293503</span></p>
        <p><strong>Email:</strong> <span>amaksubaidi@gmail.com</span></p>
      </div>
      <div class="social-links d-flex mt-4">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Link Terkait</h4>
      <ul>
        <li><a href="{{route('home.index')}}" class="{{request()->routeIs('home.index') ? 'active' : ''}}">Home<br></a></li>
          <li><a href="{{route('home.articles')}}" class="{{request()->routeIs('home.articles') ? 'active' : ''}}">Articles</a></li>
          <li><a href="{{route('home.penerima')}}" class="{{request()->routeIs('home.penerima') ? 'active' : ''}}">Penerima Zakat</a></li>
          <li><a href="{{route('home.amil')}}" class="{{request()->routeIs('home.amil') ? 'active' : ''}}">Amil Zakat</a></li>
      </ul>
    </div>

    <div class="col-lg-4 col-md-12 footer-newsletter">
      <h4>Our Newsletter</h4>
      <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
      <form action="forms/newsletter.php" method="post" class="php-email-form">
        <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
      </form>
    </div>

  </div>
</div>

<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> <strong class="px-1 sitename">Zakat Fitrah</strong> <span>All Rights Reserved</span></p>
  <div class="credits">
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>