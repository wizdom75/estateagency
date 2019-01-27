<h1>{!! $listing->title !!}</h1>
@if($listing->price > 0)
    <h2>Asking price: &pound;{{ number_format($listing->price, 2) }}</h2>
@else
   <h2> Rent per month: &pound;{{ number_format($listing->rent, 2) }}</h2>
@endif
@if(count(App\Listing::find($listing->id)->images) > 0)
    @foreach (App\Listing::find($listing->id)->images as $image)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img style="width: 1200px; height: 500px; object-fit: cover;" class="d-block w-100" src="/storage/listing_images/{!!$image->path!!}" alt="First slide">
        </div>
    @endforeach
@else
    <div class="carousel-item active">
        <img class="d-block w-100" src="https://via.placeholder.com/1200x500.png" alt="Second slide">
    </div>
@endif

{!! $listing->details !!}

{!! $listing->features !!}