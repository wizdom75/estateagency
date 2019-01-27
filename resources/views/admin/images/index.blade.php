@extends('admin.layout')
@section('title',  'Messages')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Messages</h1>
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
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
              <th>Date Recieved</th>
            </tr>
          </thead>
          <tbody>
            @if(count($messages) > 0)
            @foreach ($messages as $message)
              <tr>
                <td>{{ $message->id }}</td>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->message }}</td>
                <td>{{ $message->created_at }}</td>
              </tr>
            @endforeach
            @else
              <h1>No messages yet</h1>
            @endif
          </tbody>
        </table>
      </div>
@endsection