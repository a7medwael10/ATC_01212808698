@extends('admin.layouts.master')

@section('page_title', 'Booked Events')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List of Booked Events</h3>
            <a href="{{ route('admin.events.create') }}" class="btn btn-primary float-end">Create</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @include('admin.layouts.partials.flash_messages')
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Date - Time</th>
                    <th>Bookings' Number</th>
                    <th>Show Bookings</th>
                </tr>
                </thead>
                <tbody>
                @forelse($events as $event)
                    <tr>
                        <td>{{ ((request('page',1) - 1 ) * $events->perPage()) + $loop->iteration }}</td>
                        <td>{{ $event->name}}</td>
                        <td>{{ $event->category}}</td>
                        <td>{{ $event->date }}</td>
                        <td>{{ count($event->bookings)}}</td>
                        <td>
                            <a href="{{ route('admin.bookings.show', $event->id) }}" class="btn btn-success btn-sm">
                                <i class="fa-solid fa-eye"></i>                            </a>
                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">No events found</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{ $events->links() }}
        </div>
    </div>
    <!-- /.card -->
@endsection
