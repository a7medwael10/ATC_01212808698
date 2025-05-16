@extends('admin.layouts.master')

@section('page_title')
    Dashboard
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">

            {{-- Analysis Cards --}}
            <div class="col-md-4">
                <div class="card bg-primary text-white text-center">
                    <div class="card-body">
                        <h5>Total Events</h5>
                        <h2>{{ \App\Models\Event::count() }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-success text-white text-center">
                    <div class="card-body">
                        <h5>Total Users</h5>
                        <h2>{{ \App\Models\User::ofUsers()->count() }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-warning text-white text-center">
                    <div class="card-body">
                        <h5>Total Bookings</h5>
                        <h2>{{ \App\Models\Booking::count() }}</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
