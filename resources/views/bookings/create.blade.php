@extends('layouts.app')
@section('title', 'Book a viewing')
@section('content')

<div class="container" style="margin-bottom: 20px">
    <h1>Book your viewing</h1>
    {!! Form::open(['action' => 'BookingsController@store']) !!}
    <div class="form-group mx-auto col-md-6">
        {!! Form::label('appointment_date', 'Appointment date:', ['class' => 'awesome']); !!}
        {!! Form::date('appointment_date', '', ['class' => 'form-control', 'placeholder' => 'Viewing Date']); !!}
    </div>
    <div class="form-group mx-auto col-md-6">
            {!! Form::label('appointment_time', 'Appointment time:', ['class' => 'awesome']); !!}
            {!! Form::time('appointment_time', '', ['class' => 'form-control', 'placeholder' => 'Viewing time']); !!}
    </div>
    <div class="form-group mx-auto col-md-6">
        {!! Form::label('firstname', 'Firstname:', ['class' => 'awesome']); !!}
        {!! Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'Firstname']); !!}
    </div>
    <div class="form-group mx-auto col-md-6">
        {!! Form::label('lastname', 'Lastname:', ['class' => 'awesome']); !!}
        {!! Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Surname']); !!}
    </div>
    <div class="form-group mx-auto col-md-6">
        {!! Form::label('email', 'Email:', ['class' => 'awesome']); !!}
        {!! Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email']); !!}
    </div>
    <div class="form-group mx-auto col-md-6">
        {!! Form::label('contact_number', 'Contact number:', ['class' => 'awesome']); !!}
        {!! Form::text('contact_number', '', ['class' => 'form-control', 'placeholder' => 'Contact number']) !!}
    </div>

    {!! Form::hidden('listing_id', Request::get('prop_id')) !!}
    {!! Form::hidden('is_valuation', Request::get('prop_id')??0) !!}

    <div class="form-group mx-auto col-md-6">
        {!! Form::submit('Submit', ['class' => 'btn btn-outline-dark btn-lg']); !!}
    </div>
    
    
    {!! Form::close() !!}
</div>
@endsection