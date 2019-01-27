@extends('admin.layout')
@section('title',  'Bookings')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Bookings</h1>
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
      <div class="table-responsive ">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Date and time</th>
            </tr>
          </thead>
          <tbody>
            @if(count($bookings) > 0)
              @foreach($bookings as $booking)
              <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->firstname }}</td>
                <td>{{ $booking->lastname }}</td>
                <td>{{ $booking->email }}</td>
                <td>{{ $booking->contact_number }}</td>
              <td>{{$booking->appointment_date}} <br> {{ $booking->appointment_time }}</td>
              </tr>
              @endforeach
            @else

            <h1>You have nothing listed here</h1>
            
            @endif
            
          </tbody>
        </table>
      </div>
@endsection