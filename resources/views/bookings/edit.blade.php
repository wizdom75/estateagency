@extends('layouts.app')

@section('content')
<h1 class="mx-auto">Edit your listing</h1>
<div class="container">
    {!! Form::open(['url' => "/to-rent/$listing->id",  'method' => 'put']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Heading:', ['class' => 'awesome']); !!}
        {!! Form::text('title', $listing->title, ['class' => 'form-control', 'placeholder' => 'e.g. 70 Hodges Close']); !!}
    </div>
    <div class="form-group">
            {!! Form::label('post_code', 'Post Code:', ['class' => 'awesome']); !!}
            {!! Form::text('post_code', $listing->post_code, ['class' => 'form-control', 'placeholder' => 'e.g. SE9 6YP']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('features', 'Features:', ['class' => 'awesome']); !!}
        {!! Form::textarea('features', $listing->features, ['class' => 'form-control', 'placeholder' => 'List main features of your home.....', 'id' => 'article-ckeditor']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('details', 'Details:', ['class' => 'awesome']); !!}
        {!! Form::textarea('details', $listing->details, ['class' => 'form-control', 'placeholder' => 'Write a detailed desciption of your home.....', 'id' => 'article2-ckeditor']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('rent', 'Rent:', ['class' => 'awesome']); !!}
        {!! Form::number('rent', $listing->rent, ['class' => 'form-control', 'placeholder' => 'Enter PCM rent here...']); !!}
    </div>

    {!! Form::submit('Submit', ['class' => 'btn btn-primary']); !!}
    
    {!! Form::close() !!}
</div>
@endsection