@extends('frontend.layouts.master')

@section('content')
    <section class="page-title bg-title overlay-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="title">
                        <h3>Event Details</h3>
                    </div>
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Event Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="news section">
        <div class="container">
            <div class="row mt-30">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="block">
                        <!-- Article -->
                        <article class="blog-post single">
                            <div class="post-thumb">
                                <img src="{{asset('assets')}}/images/news/single-post.jpg" alt="post-image" class="img-fluid">
                            </div>
                            <div class="post-content">
                                <div class="date">
                                    <h4>{{date('d', strtotime($event->date))}}<span>{{date('M', strtotime($event->date))}}</span></h4>
                                </div>
                                <div class="post-title">
                                    <h3>{{$event->name}}</h3>
                                </div>
                                <div class="post-meta">
                                    <ul class="list-inline">
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
                                <div class="post-details">
                                    <p>
                                        {{$event->description}}
                                    </p>
                                </div>
                                @if ($isBooked)
                                    <form action="{{ route('events.book', $event->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Cancel</button>
                                    </form>
                                @else
                                    <form action="{{ route('events.book', $event->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Book</button>
                                    </form>
                                @endif
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
