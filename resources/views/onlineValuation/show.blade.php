@extends('layouts.app')

@section('content')
<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://via.placeholder.com/1200x500.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://via.placeholder.com/1200x500.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://via.placeholder.com/1200x500.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="header" class="margin-top:-300px; position: absolute">
    <h1>Rent {{ $listing->title }}</h1>
    <p class="price">&pound;{{ number_format($listing->rent, 2) }}pcm</p>
    </div>
    <div class="fetures">
      <h3>Features</h3>
      {!! $listing->features !!}
    </div>
    <div class="details">
      <h3>Details</h3>
      {!! $listing->details !!}
    </div>    
</div>

@endsection