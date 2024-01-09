
@extends('front.layout.main')
@section('content')
<link rel="stylesheet" href="{{asset('front/tour/tour.css')}}" />
<!-- carousel item -->
<div class="carousel">
  <img src="{{asset('gambar/2.jpg')}}" alt="Gambar 1" class="active">
  <img src="{{asset('gambar/3.jpg')}}" alt="Gambar 2">

  <div class="carousel-indicators" style="display: flex; z-index: 1;">
    <span class="active" onclick="jumpToSlide(1)"></span>
    <span onclick="jumpToSlide(2)"></span>
  </div>

  <header class="align-item-end">
    <div class="tittle">
      <h1>Explore the beauty of Bali with best Bali Tour packages</h1>
      <span>SCROLL & EXPLORE</span>
    </div>
  </header>
</div>

<!-- deskripsi -->
<section class="container pt-5 pt-3">
  <h1 class="text-center">
    BALI TOUR
  </h1>
  <p>
    First of all, I would like to say thank you so much for visiting Gunung Batur Guide website. We are a legal Bali
    Tour Company with reasonable and competitive price in Bali Islands, and have a lot of experience in tourism
    services more than 5 years experienced. We are proud to offer a variety of Gunung Batur Guide, such as Bali
    tracking and Bali Transport for you to enjoy during your holiday in the island of paradise.Please relax and enjoy
    going through all of the Gunung Batur Guide available through our web site. Gunung Batur Guide is a Local Bali
    Tour Operator Services in Bali and Travel Guide Site which manage by original Balinese people. The website for
    Bali Tour has been designed with you in the mind. We do hope the information contained will help you to find your
    way around Bali.
  </p>
</section>

<!-- Card -->
<section class="container">
  <div class="row justify-content-center gy-4">
    @foreach ($tour as $tours)
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card">
        <div class="ratio ratio-16x9 img-hover-zoom">
          <img src="{{ asset('uploads/' . $tours->gambar_tour) }}">
        </div>
        <div class="card-body">
          <h4 class="card-title"> {{ $tours ->judul}} </h4>
          <p class="card-text"> {!!$tours->desk !!} </p>
          <a href="{{ url('/balitour/' . $tours->id) }}" class="btn btn-primary">Visit Now!</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>

<!-- jarak -->
<div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
@endsection