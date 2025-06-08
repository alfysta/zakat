@include('home.partials.head')

<body class="index-page">

  @include('home.partials.header')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{asset('assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

      <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100">Sistem Informasi,<br>Zakat Fitrah</h2>
        <p data-aos="fade-up" data-aos-delay="200">Digitalisasi Pembayaran Zakat Fitrah di Indonesia</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="{{route('login')}}" class="btn-get-started">Ayo Bayar Zakat</a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Pentingnya membayar Zakat Fitrah</h3>
            <p class="fst-italic">
            Membayar zakat fitrah sangat penting karena menyucikan jiwa dari dosa-dosa kecil selama berpuasa dan membantu fakir miskin agar dapat merayakan Idul Fitri dengan layak. Zakat fitrah juga merupakan bentuk syukur atas nikmat Allah dan memperkuat rasa kebersamaan antar sesama muslim.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Menyucikan Jiwa dan Menyempurnakan Ibadah Puasa.  </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Membantu Kaum Dhuafa:
              </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Membangun Solidaritas Sosial</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Mendapatkan Pahala Berlipat di Bulan Ramadan</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Membersihkan Harta dan Menambah Keberkahannya</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Menghapus Kesalahan dan Dosa</span></li>
            </ul>
            <a href="{{route('home.articles')}}" class="read-more"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Counts Section -->
    <section id="counts" class="section counts light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-2 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="{{$beras}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jumlah Beras</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-2 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="{{$uang}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jumlah Uang</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-2 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="{{$infaq}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Infaq</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-2 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="{{$sedekah_uang}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Sedekah Uang</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-2 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="{{$sedekah_beras}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Sedekah Beras</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-2 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="{{$penerima}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Penerima Zakat</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Counts Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Zakat Fitrah dapat berupa</h3>
              <p>
              Makanan Pokok: Secara tradisional, zakat fitrah diberikan dalam bentuk makanan pokok seperti beras, kurma, atau gandum. Zakat fitrah dalam bentuk makanan pokok yang dikonsumsi sehari-hari, seperti beras. Besarannya sekitar 2,5 kg atau 3,5 liter per jiwa.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn"><span></span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Uang</h4>
                  <p>Uang:
                  Seiring perkembangan zaman dan kebutuhan masyarakat, sebagian ulama membolehkan membayar zakat fitrah dengan uang.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Kualitas Makanan Pokok:</h4>
                  <p>Jika menggunakan makanan pokok (beras), kualitasnya harus sama dengan kualitas beras yang biasa dikonsumsi sehari-hari.
                  </p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Kapan Zakat Fitrah Dibayarkan:</h4>
                  <p>Zakat fitrah sebaiknya dibayarkan sebelum shalat Idul Fitri. Jika dibayarkan setelah shalat idul Fitri maka dianggap sedekah</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Kategori</h2>
        <p>Penerima Zakat Fitrah</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
        @foreach ($kategori as $item)
            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="features-item">
                    <i class="{{ $item->icon }}" style="color:{{ $item->color }};"></i>
                    <h3><a href="#" class="stretched-link">{{ $item->kategori }}</a></h3>
                    </div>
                </div>
        @endforeach

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Courses Section -->
    <section id="courses" class="courses section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Artikel</h2>
        <p>Postingan Terkini</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">
          @foreach($articles as $article)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="course-item">
          <img src="{{$article->images()}}" class="img-fluid" style="height:270px; object-fit : cover; object-position: center" alt="{{$article->judul}}">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">#{{$article->kategori->nama}}</p>
            </div>

            <h3><a href="{{route('home.show', $article->slug)}}">{!!str()->limit($article->judul, 60)!!}</a></h3>
            <p class="description">{!!str()->limit($article->body, 120)!!}</p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="{{'https://gravatar.com/avatar/'.hash('sha256',strtolower( trim( $article->user->email)))}}" class="img-fluid w-20" alt="">
                <a href="" class="trainer-link" style="font-size: 11pt"><i class="bi bi-person user-icon"></i> {{$article->user->name}}</a>

              </div>
              <div class="trainer-rank d-flex align-items-center" style="font-size: 11pt">
                <i class="bi bi-person user-icon"></i>{{$article->created_at->diffForHumans()}}
              </div>
            </div>
          </div>
        </div>
      </div> <!-- End Course Item-->
          @endforeach
        </div>

      </div>

    </section><!-- /Courses Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Daftar</h2>
        <p>Amil Zakat Fitrah</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
        @foreach($amil as $item)
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/icon.png" class="testimonial-img" alt="">
                  <h3>{{$item->nama_amil}}</h3>
                  <h4>{{$item->jabatan}}</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>{{$item->alamat}}</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

  </main>
@include('home.partials.footer')
