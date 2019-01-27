@extends('layouts.app')
@section('title', 'Welcome')
@section('content')

<div class="container">
        <h1>Home</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cumque dolorum inventore minima, sapiente sequi sunt voluptatibus. Atque dicta doloremque, doloribus dolorum ducimus, error id ipsam iste nihil nostrum voluptate. </p>
</div>

@endsection

@section('sidebar')
    @parent
    <p>This only shows on home page</p>
@endsection