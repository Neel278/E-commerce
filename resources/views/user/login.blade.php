@extends('layouts.master')

@section('title')
Login
@endsection

@section('content')
<div class="hero-wrap hero-bread" style="background-image: url({{URL::to('src/images/bg_6.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Login</span></p>
                <h1 class="mb-0 bread">Login</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        @include('messages.error')
        <div class="row justify-content-center">
            <div class="col-xl-8 ftco-animate">
                <form action="{{route('login')}}" method="POST" class="billing-form">
                    @csrf
                    <h3 class="mb-4 billing-heading">Login Details</h3>
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="emailaddress">Email Address</label>
                                <input type="text" name="email" class="form-control" id="emailaddress">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12 offset-md-5">
                            <div class="form-group">
                                <button type="submit" role="button" class="btn btn-primary py-3 px-4">Login</button>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12 offset-md-4">
                            <div class="form-group mt-4">
                                <div class="radio">
                                    <label class="mr-3"> Don`t have an Account ? <a href="{{ route('signup') }}">Signup Here</a> </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form><!-- END -->
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->
@endsection