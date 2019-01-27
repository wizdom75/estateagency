@extends('layouts.app')
@section('title', 'View listings')
@section('content')
<div class="container">

    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    @if(Request()->get('buy') === 'Y' || Request::is('for-sale'))
                    <li class="breadcrumb-item" aria-current="page">For Sale</li>
                    @elseif(Request()->get('buy') === 'N' || Request::is('to-rent'))
                    <li class="breadcrumb-item " aria-current="page">To Rent</li>
                    @endif
                    {{-- <li class="breadcrumb-item active" aria-current="page">SE28</li> --}}
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">

    
<div class="col-md-5 ">
    <div class="card card-body" style="height:350px"> 
    <iframe width="100%" height="350px" id="gmap_canvas" src="https://maps.google.com/maps?q={{ $pcodes }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
     
     <script>
        var map;
        function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
          });
        }
      </script>
    </div>

</div>
<div class="col-md-7">
    @if(Request()->get('buy') === 'Y' || Request::is('for-sale'))
        <h1 class="text-muted">Property for sale.</h1>
    @elseif(Request()->get('buy') === 'N' || Request::is('to-rent'))
        <h1 class="text-muted">Property to rent.</h1>
    @endif
    
    @if(count($listings) > 0)
    
        @foreach($listings as $listing)
            <div class="col-md-12" style="padding:0; margin-right:0">
                @if(Request()->get('buy') === 'Y' || Request::is('for-sale'))
                <a class="nav-link" href="/for-sale/{{ $listing->id }}">
                @elseif(Request()->get('buy') === 'N' || Request::is('to-rent')) 
                <a class="nav-link" href="/to-rent/{{ $listing->id }}">
                @endif   
                    <div class="card card-body" style="padding: 0">
                        <div class="media" style="padding:0">
                            @if(is_object(App\Image::where('listing_id', $listing->id)->first()))
                                <img style="width: 200px; height: 200px;object-fit: cover;" class="align-self-center mr-3" src="/storage/listing_images/{!!App\Image::where('listing_id', $listing->id)->first()->path!!}" alt="{{ $listing->title }}">
                            @else
                                <img style="width: 200px; height: 200px;object-fit: cover;" class="align-self-center mr-3" src="https://via.placeholder.com/200x200.png" alt="{{ $listing->title }}">
                            @endif
                            <div class="media-body" >
                                <h3 class="text-muted">{{ $listing->title }}</h3>
                                @if($listing->is_buy === 'Y')
                                    <span class="text-muted">&pound;{{ number_format($listing->price, 2) }}</span>
                                @else
                                    <span class="text-muted">&pound;{{ number_format($listing->rent, 2) }}</span>
                                @endif
                                    <hr class="style4">
                            <div class="text-muted">{!! str_limit($listing->details, 180, "...") !!}</div>      
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    
    @else
    <h3 class="alert-warning">Your search term <em class="alert-danger">{{ Request()->get('q') }}</em> did not return any results.<br> Please try a different search term.</h3>
    @endif
</div>
</div>
</div>
@endsection