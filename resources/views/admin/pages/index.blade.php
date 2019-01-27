@extends('admin.layout')
@section('title',  'Pages')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pages</h1>
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
              <th>Title</th>
              <th>Date added</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @if(count($pages) > 0)
              @foreach($pages as $page)
              <tr>
                  <td>{{ $page->id }}</td>
                  <td>{{ $page->title }}</td>
                  <td>{{ $page->created_at }}</td>
                  <td><a class="btn btn-outline-warning" href="/admin/pages/{{$page->id}}/edit">Edit</a></td>
                  <td>sit</td>
                </tr>
              @endforeach
            @else
              <h1>No pages created yet</h1>
            @endif
          </tbody>
        </table>
      </div>
@endsection