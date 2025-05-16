@extends('frontend.layouts.master')
@section('content')

    <section class="banner bg-banner-one overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Content Block -->
                    <div class="block">
                        <!-- Coundown Timer -->
                        <div class="timer"></div>
                        <h1>Special</h1>
                        <h2>Events 2025</h2>
                        <!-- Action Button -->
                        <a href="#news" class="btn btn-white-md">Book now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="news section" id="news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Eventre <span class="alternate">Schedule</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor incididunt ut
                            labore dolore</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($events as $event)
                    <div class="col-lg-4 col-md-6 col-sm-8 col-10  m-auto">
                        <div class="blog-post">
                            <div class="post-thumb">
                                <a href="{{route('events.show',$event->id)}}">
                                    <img src="{{ asset('storage/' . $event->image) }}" alt="post-image"
                                         class="img-fluid">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="date">
                                    <h4>{{date('d', strtotime($event->date))}}
                                        <span>{{date('M', strtotime($event->date))}}</span></h4>
                                </div>
                                <div class="post-title">
                                    <h2><a href="{{route('events.show',$event->id)}}">{{$event->name}}</a></h2>
                                </div>
                                <div class="post-meta ">
                                    <ul class="list-inline ">
                                        <li class="list-inline-item">
                                            <i class="fa-solid fa-circle"></i>{{$event->category}}
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa-solid fa-dollar-sign"></i>{{$event->price}}
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa-solid fa-location-dot"></i>{{$event->venue}}
                                        </li>
                                    </ul>
                                </div>
                                <form action="{{ route('events.book', $event->id) }}" method="POST" class="booking-form">
                                    @csrf
                                    <button type="submit"
                                            class="btn {{ in_array($event->id, $bookedEventIds) ? 'btn-danger' : 'btn-primary' }}">
                                        {{ in_array($event->id, $bookedEventIds) ? 'Cancel' : 'Book' }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$events->links()}}
        </div>

    </section>

@endsection
@include('frontend.components.congrats-modal')
@include('frontend.components.cancel-modal')
