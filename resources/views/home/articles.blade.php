@include('home.partials.head')

<body class="index-page">

    @include('home.partials.header')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Artikel</h1>
                            <p class="mb-0">Memuat artikel tentang pembayaran zakat fitrah untuk kaum muslim</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{route('home.index')}}">Home</a></li>
                        <li class="current">Articles</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Courses Section -->
        <section id="courses" class="courses section">

            <div class="container">

                <div class="row">
                    @foreach($articles as $article)

                    <div class="col-lg-4 col-md-4 d-flex align-items-stretch mb-3" data-aos="zoom-in" data-aos-delay="100">
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
        {{$articles->links()}}
    </main>
    @include('home.partials.footer')
