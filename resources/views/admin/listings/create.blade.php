@extends('admin.layout')
@section('title',  'Listings')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add a listing</h1>
        {{-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div> --}}
      </div>
<div class="container">
    {!! Form::open(['action' => 'admin\ListingsController@store']) !!}
    <div class="form-group col-md-6">
        {!! Form::label('title', 'Heading:', ['class' => 'awesome']); !!}
        {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'e.g. 70 Hodges Close']); !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('post_code', 'Post Code:', ['class' => 'awesome']); !!}
        {!! Form::text('post_code', '', ['class' => 'form-control', 'placeholder' => 'e.g. SE9 6YP']); !!}
    </div>
    <div class="form-group  col-md-6">
        {!! Form::label('features', 'Features:', ['class' => 'awesome']); !!}
        {!! Form::textarea('features', '', ['class' => 'form-control', 'placeholder' => 'List main features of your home.....', 'id' => 'article-ckeditor']); !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('details', 'Details:', ['class' => 'awesome']); !!}
        {!! Form::textarea('details', '', ['class' => 'form-control', 'placeholder' => 'Write a detailed desciption of your home.....', 'id' => 'article2-ckeditor']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('bedrooms', 'Bedrooms', ['class' => 'awesome']); !!}
        {!! Form::selectRange('bedrooms', 0, 20); !!}

        {!! Form::label('bathrooms', 'Bathrooms', ['class' => 'awesome']); !!}
        {!! Form::selectRange('bathrooms', 0, 20); !!}

        {!! Form::label('lounges', 'Lounges', ['class' => 'awesome']); !!}
        {!! Form::selectRange('lounges', 0, 20); !!}

        {!! Form::label('for_sale', 'For sale:', ['class' => 'aweome']) !!}
        {!! Form::select('is_buy', ['Y' => 'Yes', 'N' => 'No']) !!}

        {!! Form::label('type', 'Property Type', ['class' => 'awesome']); !!}
        {!! Form::select('type', ['flat'=>'Flat (Apartment)', 'detached'=>'Detached', 'semiDetached'=>'Semi-Detached', 'terraced'=>'Terraced', 'endTerrace'=>'End Terrace', 'cottage'=>'Cottage', 'bungalow'=>'Bungalow'], 'semiDetached'); !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('price', 'Price:', ['class' => 'awesome']); !!}
        {!! Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Enter asking price here...']); !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('rent', 'Rent:', ['class' => 'awesome']) !!}
        {!! Form::number('rent', '', ['class' => 'form-control', 'placeholder' => 'Enter rent per month']) !!}
    </div>

    {!! Form::submit('Submit', ['class' => 'btn btn-primary']); !!}
    
    {!! Form::close() !!}
</div>
@endsection