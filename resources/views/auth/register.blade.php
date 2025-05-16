@extends('frontend.layouts.master')
@section('content')
    <section class="section form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Register</h3>
                    </div>
                </div>
            </div>
            <form action="{{route('register')}}" method="POST" class="row">
                @csrf
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control main" name="name" id="name" placeholder="Name">
                        @error('name')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="email" class="form-control main" name="email" id="email" placeholder="Email">
                        @error('email')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" class="form-control main" name="password" id="password" placeholder="Password">
                        @error('password')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" class="form-control main" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                        @error('password_confirmation')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-main-md">Register</button>
                </div>
            </form>
        </div>
    </section>
@endsection
