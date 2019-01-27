@extends('layouts.app')
@section('title', 'Add a listing')
@section('content')
<h1 class="mx-auto">Add a property for sale</h1>
<div class="container">
    {!! Form::open(['action' => 'ForSaleController@store']) !!}
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
    <div class="form-group col-md-6">
        {!! Form::label('bedrooms', 'Bedrooms', ['class' => 'awesome']); !!}
        {!! Form::selectRange('bedrooms', 0, 20, ['class' => 'form-control']); !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('bathrooms', 'Bathrooms', ['class' => 'awesome']); !!}
        {!! Form::selectRange('bathrooms', 0, 20, ['class' => 'form-control']); !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('lounges', 'Lounges', ['class' => 'awesome']); !!}
        {!! Form::selectRange('lounges', 0, 20, ['class' => 'form-control']); !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('type', 'Property Type', ['class' => 'awesome']); !!}
        {!! Form::select('type', ['flat'=>'Flat (Apartment)', 'detached'=>'Detached', 'semiDetached'=>'Semi-Detached', 'terraced'=>'Terraced', 'endTerrace'=>'End Terrace', 'cottage'=>'Cottage', 'bungalow'=>'Bungalow'], 'semiDetached', ['class' => 'form-control']); !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('price', 'Price:', ['class' => 'awesome']); !!}
        {!! Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Enter asking price here...']); !!}
    </div>

    {!! Form::submit('Submit', ['class' => 'btn btn-primary']); !!}
    
    {!! Form::close() !!}
</div>
@endsection