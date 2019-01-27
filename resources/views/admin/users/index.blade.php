@extends('admin.layout')
@section('title',  'Users')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Users</h1>
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
              <th>Firstname</th>
              <th>Surname</th>
              <th>Email</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          @if(count($users) > 0)
            @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->email }}</td>
                <td>sit</td>
              </tr>
            @endforeach
          @else
            <h1>No users found</h1>
          @endif
          </tbody>
        </table>
      </div>
@endsection