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
          <h1>Penerima Zakat Fitrah</h1>
          <p class="mb-0">Memuat data tentang penerima zakat fitrah untuk kaum muslim</p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{route('home.index')}}">Home</a></li>
        <li class="current">Penerima Zakat Fitrah</li>
      </ol>
    </div>
  </nav>
</div><!-- End Page Title -->

<!-- Courses Section -->
<section id="courses" class="courses section">

  <div class="container">

    <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Kategori</th>
              <th>Alamat</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            @foreach($penerima as $index => $item)
            <tr>
              <td>{{$penerima->firstItem() + $index}}</td>
              <td>{{$item->nama_penerima}}</td>
              <td>{{$item->kategori->kategori}}</td>
              <td>{{$item->alamat}}</td>
              <td></td>
            </tr>
            @endforeach
          </tbody>
        </table>

        {{$penerima->links()}}
    </div>

  </div>

</section><!-- /Courses Section -->

</main>
@include('home.partials.footer')