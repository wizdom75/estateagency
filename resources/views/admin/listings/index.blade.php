@extends('admin.layout')
@section('title',  'Listings')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Listings</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="/admin/listings/create" class="btn btn-sm btn-outline-primary">Add a listing</a>
      </div>
    </div>
  </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Listing title</th>
              <th>Post code</th>
              <th>Status</th>
              <th>Features</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @if(count($listings) > 0)
                @foreach ($listings as $listing)
                <tr>
                    <td>{{ $listing->id }}</td>
                    <td>{{ $listing->title }}</td>
                    <td>{{ $listing->post_code}}</td>
                    <td>{{ ($listing->is_buy === 'Y')?'For sale':'To rent' }}</td>
                    <td>{{ $listing->bedrooms }} X <i class="fas fa-bed"></i>&nbsp; {{ $listing->bathrooms }} X <i class="fas fa-bath"></i></td>
                    <td><a class="btn btn-outline-warning" href="/admin/listings/{{$listing->id}}/edit"><i class="far fa-edit"></i></a></td>
                    <td><a class="btn btn-outline-info" href="/admin/images/{{$listing->id}}/create"><i class="fas fa-file-upload"></i></a></td>
                  </tr>                      
                @endforeach
            @else
                <h1>No Listings added yet</h1>
            @endif
        
          </tbody>
        </table>
      </div>
@endsection