@extends('front.layout.main')
@section('content')
<link rel="stylesheet" href="{{asset('front/post/card3.css')}}" />
<link rel="stylesheet" href="../fa/css/all.min.css" />
<link rel="stylesheet" href="{{asset('front/post.css')}}" />
<link rel="stylesheet" href="{{asset('front/tour/tour.css')}}" />


<body>

<img src="{{ asset('uploads/' . $tour->gambar_tour) }}" style="width: 100%" />
<header>
  <h1 class="judul mt-5 mb-5 text-center">{{ $tour ->judul}}</h1>
</header>
<div class="mt-3 container">
  <div class="card-group text-center">
    <div class="card-body" style="background-color: #e3e6db">
      <small>Estimated Duration</small>
      <p>12 Hours</p>
    </div>
    <div class="card-body" style="background-color: #bfcdb2">
      <small>Minimum Booking</small>
      <p>2 Person</p>
    </div>
    <div class="card-body" style="background-color: #e3e6db">
      <small>Special Price</small>
      <br />
      <b> {{$tour->harga}}.000 </b>/Person
    </div>
  </div>
  <hr />
  <h2>Things to do</h2>
<p> {!! $tour->to_do !!} </p>
  <section class="mt-5">
    <h2 class="text-center">Before We Go</h2>
    <p class="mb-4 text-center">
      Let's find out the details of what you did, the benefits you get and
      what you should prepare before the tour!
    </p>
    <div class="itinerary">
      <h3 class="text-left">Itinerary</h3>
      <ul>
        {!! $tour->itinerary!!}
      </ul>
    </div>
    <hr />
    <div class="inex">
      <div class="row">
        <div id="included" class="col-md-6 mb-3">
          <h3>Inclusions</h3>
          <ul>
            <li>
              Clean Private Car with Air Conditioner for Hotel Transfer
            </li>
          </ul>
          <ul>
            <li>Fast Boat Transfer to/from Nusa Penida</li>
          </ul>
          <ul>
            <li>Private Car in Nusa Penida</li>
          </ul>
          <ul>
            <li>Professional Local Driver as Guide & Photograper</li>
          </ul>
          <ul>
            <li>All Entry Fees</li>
          </ul>
          <ul>
            <li>All Parking Fees</li>
          </ul>
          <ul>
            <li>Landing Tax for Foreign Touris</li>
          </ul>
          <ul>
            <li>Lunch</li>
          </ul>
          <ul>
            <li>Bottol Water</li>
          </ul>
          <ul>
            <li>Express Toll Road <em>(whenever we need)</em></li>
          </ul>
        </div>
        <div id="Excluded" class="col-md-6 mb-3">
          <h3>Exclusions</h3>
          <ul>
            <li>
              Your own personal purchases <em>(snacks, beer, etc)</em>
            </li>
          </ul>
          <ul>
            <li>Visiting or taking photos outside of the itinerary</li>
          </ul>
        </div>
      </div>
    </div>
    <hr />
    <div class="bring" id="gList">
      <h3>What to Brings</h3>
      <ul>
        <li>Sun Screen</li>
      </ul>
      <ul>
        <li>Sun Glasses</li>
      </ul>
      <ul>
        <li>Hat</li>
      </ul>
      <ul>
        <li>Camera</li>
      </ul>
      <ul>
        <li>Other clothes</li>
      </ul>
      <ul>
        <li>Towel</li>
      </ul>
      <ul>
        <li>Comfortable slipper</li>
      </ul>
      <ul>
        <li>Insect Repellent</li>
      </ul>
      <ul>
        <li>Some Cash for Personal Purchases</li>
      </ul>
    </div>
  </section>
  <div class="text-center mt-4">
    <h3>Book Now!</h3>
    <a id="bookWa"
      href="https://wa.me/6282359365098?text=I want to book Private West Penida: Broken Beach, Kelingking Beach, Angel Billabong Beach, Crystal Bay package."
      data-id="91" target="_blank" rel="nofollow noreferrer noindex" class="btn btn-book btn-outline-success">
      Whatsapp
      <i>(recommended)</i>
    </a>
  </div>
</div>

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
 