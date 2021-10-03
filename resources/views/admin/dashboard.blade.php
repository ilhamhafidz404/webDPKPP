@extends('admin.master')

@section('title', 'Dinas Perumahan, Kawasan Permukiman dan Pertanahan Kabupaten Kuningan')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card p-3">
      <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('images/1.jpeg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/2.jpeg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/3.jpeg')}}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="far fa-user"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Pegawai</h4>
        </div>
        <div class="card-body">
          50
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <i class="far fa-newspaper"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Pimpinan DPKPP Kuningan</h4>
        </div>
        <div class="card-body">
          Ir. I. PUTU BAGIASNA, MT
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-warning">
        <i class="far fa-file"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Perumahan</h4>
        </div>
        <div class="card-body">
          {{$inventories}}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-success">
        <i class="fas fa-circle"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Online Users</h4>
        </div>
        <div class="card-body">
          47
        </div>
      </div>
    </div>
  </div>

  <div class="col-12">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary p-3">
          <h5 class="text-center text-primary">VISI</h5>
          <p class="text-center">
            “Terwujudnya Permukiman Prima yang Berwawasan Lingkungan dan Berbudaya Menuju Rapih Winangun Kerta Raharja"
          </p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card card-danger p-3">
          <h5 class="text-center text-danger">Misi</h5>
          <p class="text-center">
            1.   Peningkatan kualitas dan kuantitas lingkungan perumahan / permukiman
            <br>
            2.   Meningkatkan Ketersediaan prasarana dan sarana permukiman Sesuai Kebutuhan Dasar
            <br>
            3.   Meningkatkan pembinaan bangunan gedung sesuai kaidah teknis serta pembinaan jasa konstruksi.
            <br>
            4.   Mewujudkan tertib perencanaan, penataan, penguasaan, pemilikan, penggunaan dan pemanfaatan tanah.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-12">
    <div class="card p-3">
      <div class="card-header ">
        <h3 class="text-primary">
          Gallery
        </h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4 mb-3">
            <a href="{{asset('images/gallery/1.jpg')}}" data-lightbox="image-1" data-title="Piagam Penghargaan SKPD terbaik">
              <img src="{{asset('images/gallery/1.jpg')}}" alt="" class="img-thumbnail">
            </a>
          </div>
          <div class="col-md-4 mb-3">
            <a href="{{asset('images/gallery/2.jpeg')}}" data-lightbox="image-1" data-title="Juara 1 Futsal HUT KORPRI ke-48">
              <img src="{{asset('images/gallery/2.jpeg')}}" alt="" class="img-thumbnail">
            </a>
          </div>
          <div class="col-md-4 mb-3">
            <a href="{{asset('images/gallery/3.jpeg')}}" data-lightbox="image-1" data-title="Juara 1 Futsal HUT KORPRI ke-48">
              <img src="{{asset('images/gallery/3.jpeg')}}" alt="" class="img-thumbnail">
            </a>
          </div>
          <div class="col-md-4 mb-3">
            <a href="{{asset('images/gallery/4.jpeg')}}" data-lightbox="image-1" data-title="Rencana Tapak dan DED Rumah Khusus">
              <img src="{{asset('images/gallery/4.jpeg')}}" alt="" class="img-thumbnail">
            </a>
          </div>
          <div class="col-md-4 mb-3">
            <a href="{{asset('images/gallery/5.jpeg')}}" data-lightbox="image-1" data-title="Rencana Tapak dan DED Rumah Khusus">
              <img src="{{asset('images/gallery/5.jpeg')}}" alt="" class="img-thumbnail">
            </a>
          </div>
          <div class="col-md-4 mb-3">
            <a href="{{asset('images/gallery/6.jpeg')}}" data-lightbox="image-1" data-title="Bintek Pengukuran tanah bagi Kaur Ekbang">
              <img src="{{asset('images/gallery/6.jpeg')}}" alt="" class="img-thumbnail">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection