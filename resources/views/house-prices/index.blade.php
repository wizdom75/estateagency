@extends('layouts.app')
@section('title', 'House prices')
@section('content')
<!-- Jumbotron -->
<div class="jumbotron text-center">

        <!-- Title -->
        <h2 class="card-title h2">Property valuation</h2>
        <!-- Subtitle -->
        <p class="blue-text my-4 font-weight-bold">What is your property worth?</p>
      
        <!-- Grid row -->
        <div class="row d-flex justify-content-center">
      
          <!-- Grid column -->
          <div class="col-xl-7 pb-2">
      
            <p class="card-text">Full Advertising & Tenant Find, Tenant referencing including credit checks, Creation of AST, Initial Rent & Deposit Collection, Tenant Check In, Advising the Utility companies and Tenant Check out.

                    And all at no additional cost to you! Just one simple fixed fee covers all the above with no hidden extras.</p>
      
          </div>
          <!-- Grid column -->
      
        </div>
        <!-- Grid row -->
      
        <hr class="my-4">
      
        <div class="pt-2">
          <a href="/online-valuation?stage=1">
            <button type="button" class="btn btn-outline-dark btn-lg">Online valuation <span class="far fa-gem ml-1"></span></button>
          </a>
          <a href="/book-a-visit">
            <button type="button" class="btn btn-outline-dark btn-lg">Book a home visit <i class="fas fa-home ml-1"></i></button>
          </a>
          
        </div>
      
      </div>
      <!-- Jumbotron -->
@endsection