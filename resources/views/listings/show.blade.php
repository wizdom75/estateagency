@extends('layouts.app')
@section('title',  $listing->title)
@section('content')
<div class="container">
    <div id="carouselControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @if(count($images) > 0)
            @foreach ($images as $image)
              <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img style="width: 1200px; height: 500px; object-fit: cover;" class="d-block w-100" src="/storage/listing_images/{!!$image->path!!}" alt="First slide">
              </div>
            @endforeach
          @else
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://via.placeholder.com/1200x500.png" alt="Second slide">
            </div>
          @endif

        </div> 
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="header lead" style=" margin-top:-450px; position: absolute; padding: 10px; background-color:#CAD3C8; background: rgba(0, 0, 0, 0.8); color: white;">
    @if(Request::is('for-sale/*'))
    <h1 class="text-uppercase"> {{ $listing->title }}</h1>
    <p class="price text-right">Asking price: &pound;{{ number_format($listing->price, 2) }}</p>
    <i class="fas fa-bed"></i> x {{ $listing->bedrooms }}&nbsp;&nbsp;
    <i class="fas fa-bath"></i> x {{ $listing->bathrooms }}
    {{-- <i class="fas fa-lounge"></i> {{ $listing->lounges }} --}}
    @elseif(Request::is('to-rent/*'))
    <h1 class="text-uppercase"> {{ $listing->title }}</h1>
    <p class="price text-right">Rent per month: &pound;{{ number_format($listing->rent, 2) }}</p>
    <i class="fas fa-bed"></i> x {{ $listing->bedrooms }}&nbsp;&nbsp;
    <i class="fas fa-bath"></i> x {{ $listing->bathrooms }}
    @endif
    
    </div>
    <hr class="style4">
    <div class="row">
      <div class="col-md-6 fetures">
        <h3>Features</h3>
        {!! $listing->features !!}
      </div>
      <div class="col-md-6">
        <a class="btn btn-outline-dark btn-lg" href="/book-a-viewing-appoitment?prop_id={{$listing->id}}">Book a viewing</a>
        <a class="btn btn-outline-dark btn-lg" href="/brochure?prop_id={{$listing->id}}" target="_blank">Print brochure</a>
      </div>
      <div class="details container">
        <h3>Details</h3>
        {!! $listing->details !!}
      </div>  
      <div class="card card-body" > 
          <iframe width="100%" height="450px" id="gmap_canvas" src="https://maps.google.com/maps?q={{ $listing->post_code }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> 
        </div>
    </div>
  
</div>

@endsection