@extends('layouts.app')
@section('title', 'Contact')
@section('content')
<div class="container">
        <h1 class="card-title h3">Contact</h1>
        {!! Form::open(['url' => 'contact']) !!}
            <div class="form-group mx-auto col-md-6">
                {{ Form::label('name', 'Name:') }}
                {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name']) }}
            </div>
            <div class="form-group mx-auto col-md-6">
                {{ Form::label('email', 'Email:') }}
                {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email']) }}
            </div>
            <div class="form-group mx-auto col-md-6">
                {{ Form::label('message', 'Message:') }}
                {{ Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message....']) }}
            </div>
            <div class="form-group  mx-auto col-md-6">
                {{Form::submit('Submit', ['class' => 'btn btn-outline-dark'])}}
            </div>
        {!! Form::close() !!} 
</div>


@endsection