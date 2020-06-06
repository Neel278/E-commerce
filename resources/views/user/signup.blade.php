@extends('layouts.master')

@section('title')
Signup
@endsection

@section('content')
<div class="hero-wrap hero-bread" style="background-image: url({{URL::to('src/images/bg_6.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Checkout</span></p>
                <h1 class="mb-0 bread">Signup</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 ftco-animate">
                <form action="#" class="billing-form">
                    <h3 class="mb-4 billing-heading">Signup Details</h3>
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="first_name" class="form-control" id="firstname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="lastname">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailaddress">Email Address</label>
                                <input type="text" name="email" class="form-control" id="emailaddress">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="conf_password">Confirm Password</label>
                                <input type="text" name="conf_password" class="form-control" id="conf_password">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12 offset-md-5">
                            <div class="form-group">
                                <a href="#" type="submit" role="button" class="btn btn-primary py-3 px-4">Signup</a>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12 offset-md-4">
                            <div class="form-group mt-4">
                                <div class="radio">
                                    <label class="mr-3"> Already have a Account ? <a href="#">Login Here</a> </label>
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