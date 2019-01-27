@extends('layouts.app')
@section('title', $page->title)
@section('content')
<div class="container">
    
    <h2 class="card-title h2">{{ $page->title }}</h2>
    <div class="main-body">
        {!! $page->body !!}
    </div>
   
</div>
@endsection