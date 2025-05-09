<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{route('home.index')}}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Zakat Fitrah</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('home.index')}}" class="{{request()->routeIs('home.index') ? 'active' : ''}}">Home<br></a></li>
          <li><a href="{{route('home.articles')}}" class="{{request()->routeIs('home.articles') ? 'active' : ''}}">Articles</a></li>
          <li><a href="{{route('home.penerima')}}" class="{{request()->routeIs('home.penerima') ? 'active' : ''}}">Penerima Zakat</a></li>
          <li><a href="{{route('home.amil')}}" class="{{request()->routeIs('home.amil.*') ? 'active' : ''}}">Amil Zakat</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted"  href="{{route('login')}}">Login <i class="bi bi-arrow-right"></i></a>
    </div>
  </header>