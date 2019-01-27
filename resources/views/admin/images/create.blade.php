@extends('admin.layout')
@section('title',  "Add images for $listing->title ")
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add images for {{ $listing->title }} (1200 X 500 px)</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
      </button>
    </div>
  </div>
      <div class="container">
        {!! Form::open(['action' => ['admin\ImagesController@store', $listing, 'files' => true], 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
          {!! Form::label('image', 'Image:') !!}
          {!! Form::file('image', ['class' => 'form-action']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('is_default', 'Set as default image:') !!}
          {!! Form::select('is_default', [0 => 'NO', 1 => 'YES']) !!}
        </div>
      <input type="hidden" name="listing" value="{{ $listing->id}}">
        {!! Form::submit('Upload', ['class' => 'btn btn-outline-info']) !!}

        {!! Form::close() !!}
 
      </div>
@endsection