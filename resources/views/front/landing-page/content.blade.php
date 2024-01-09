@extends('front.layout.main')
<link rel="stylesheet" href="{{asset('front/landingpage/landingpage.css')}}" />

@section('content')
<!-- carousel item -->
<div class="carousel">
  <img src="gambar/4.jpg" alt="Gambar 1" class="active" />
  <img src="gambar/2.jpg" alt="Gambar 2" />
  <img src="gambar/3.jpg" alt="Gambar 3" />

  <div class="carousel-item active">
    <div class="container">
      <h1 class="batur">Bali Tour</h1>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi
        fugiat asperiores commodi sunt neque, odit error fuga aliquid
        delectus illum enim maiores? Sint numquam cum, adipisci
        necessitatibus voluptatibus consectetur ex.
      </p>
      <a href="https://wa.me/6282359365098" class="btn btn-lg btn-primary book">Book Now</a>
    </div>
  </div>

  <div class="carousel-indicators" style="display: flex; z-index: 1">
    <span class="active" onclick="jumpToSlide(1)"></span>
    <span onclick="jumpToSlide(2)"></span>
    <span onclick="jumpToSlide(3)"></span>
  </div>
</div>

<!-- card -->
<div class="container-xl kartu">
  <div class="row">
    <div class="col-12 teks1" style="display: flex; justify-content: center">
      <h2>Best Activity In Bali</h2>
    </div>
    <div class="col-12 teks2" style="display: flex; justify-content: center">
      <h5>see what can bring your spirit back, find it now!</h5>
    </div>
  </div>
  <div class="row kartu2" style="text-align: center">
    <div class="col-md kartu1 link1">
      <h1>Bali Private Tour</h1>
      <p>
        Explore various destination in Bali with private tour services.
        Determine and book package that you love
      </p>
      <a href="tour/tour.html">
        <h5>Click & Find Now</h5>
      </a>
      <img src="gambar/kartu1.jpg" alt="" width="100%" />
    </div>
    <div class="col-md kartu1 link2">
      <h1>Bali Transport</h1>
      <p>
        Explore Bali with our transport vehicle to acces many place in Bali.
      </p>
      <a href="Transport/transport.html">
        <h5>Let's Join Us</h5>
      </a>
      <img src="gambar/kartu2.jpg" alt="" width="100%" />
    </div>
    <div class="col-md kartu1 link3">
      <h1>Sunrise Tracking</h1>
      <p>
        Enjoy the beauty of the sunrise from the top of the most beautiful
        mountain in Bali.
      </p>
      <a href="tracking/tracking.html">
        <h5>Chose & Find Your Spirit</h5>
      </a>
      <!-- <h5>Chose & Find Your Spirit</h5> -->
      <img src="gambar/kartu3.jpg" alt="" width="100%" />
    </div>
  </div>
</div>

<!-- reason -->
<div class="container-md reason">
  <div class="alasan">
    <div class="alasan1">
      <h2>Reasons People Choose Our Service</h2>
    </div>
    <div class="alasan2">
      <p>know about what our customers love about us</p>
    </div>
    <div class="kotak">
      <div class="alasan3">
        <div class="alsn1">
          <div class="ceklist">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 40px; fill: rgb(44, 77, 1)">
              <title>check-circle</title>
              <path
                d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" />
            </svg>
            <h4>Experienced local guide</h4>
          </div>
          <div class="als1">
            We are young local guides who have decades of experience in
            guiding tourists while in Bali.
          </div>
        </div>
        <div class="alsn1">
          <div class="ceklist">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 40px; fill: rgb(44, 77, 1)">
              <title>check-circle</title>
              <path
                d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" />
            </svg>
            <h4>Be friends and assistant</h4>
          </div>
          <div class="als1">
            We are ready to be your friend and assistant during your
            vacation and adventure.
          </div>
        </div>
        <div class="alsn1">
          <div class="ceklist">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 40px; fill: rgb(44, 77, 1)">
              <title>check-circle</title>
              <path
                d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" />
            </svg>
            <h4>Know the best spots to visit</h4>
          </div>
          <div class="als1">Know the best spots to visit</div>
        </div>
        <div class="alsn1">
          <div class="ceklist">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 40px; fill: rgb(44, 77, 1)">
              <title>check-circle</title>
              <path
                d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" />
            </svg>
            <h4>Your photo & video assistant</h4>
          </div>
          <div class="als1">
            We are always ready to help capture your adventures with photos
            and videos.
          </div>
        </div>
        <div class="alsn1">
          <div class="ceklist">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 40px; fill: rgb(44, 77, 1)">
              <title>check-circle</title>
              <path
                d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" />
            </svg>
            <h4>Ready for you 24/7</h4>
          </div>
          <div class="als1">Ready for you 24/7</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>

@endsection  
