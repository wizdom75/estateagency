@extends('admin.layout')
@section('title',  "Edit $page->title")
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit the '{{$page->title}}' page</h1>
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
        {!! Form::open(['url' => 'admin/pages/'.$page->id, 'method' => 'PUT']) !!}
          <div class="form-group">
            {!! Form::label('title', 'Title:', ['class' => 'awesome']) !!}
            {!! Form::text('title', $page->title, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('slug', 'Slug:', ['class' => 'awesome']) !!}
            {!! Form::text('slug', $page->slug, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('body', 'Write up:', ['class' => 'awesome']) !!}
            {!! Form::textarea('body', $page->body, ['class' => 'form-control', 'id' => 'article-ckeditor']) !!}
          </div>

          {!! Form::hidden('id', $page->id) !!}
          {!! Form::submit('Update', ['class' => 'btn btn-outline-dark']) !!}
        
        
        {!! Form::close() !!}
 
      </div>
@endsection