@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="col-md-5" style="padding:0">
    <div class="card card-body"> 
    <iframe width="100%" height="350px" id="gmap_canvas" src="https://maps.google.com/maps?q={{ Request()->get('q') }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    
    </div>
</div>

<div class="col-md-7" style="padding:0">
<h1>Properties to rent</h1>
    @if(count($listings) > 0)
    
        @foreach($listings as $listing)
        <div class="col-md-12" style="padding:0">
                <a class="nav-link" href="/for-sale/{{ $listing->id }}">
                    <div class="card card-body" style="padding: 0">
                        <div class="media" style="padding:0">
                                <img class="align-self-center mr-3" src="https://via.placeholder.com/200/200" alt="{{ $listing->title }}">
                                <div class="media-body" >
                                        <h3 class="text-muted">{{ $listing->title }}</h3>
                                <span class="text-muted">&pound;{{ number_format($listing->rent, 2) }} PCM</span>
                                <hr class="style4">
                                <div class="text-muted">{!! str_limit($listing->details, 180, "...") !!}</div>
                                        
                                </div>
                        </div>
                    </div>
                </a>
                </div>
        @endforeach
    
    @else
        <h3>Your search term <em class="alert-danger">{{ Request()->get('q') }}</em> did not return any results.<br> Please try a different search term.</h3>
    @endif
</div>
@endsection