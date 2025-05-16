@extends('admin.layouts.master')

@section('page_title', 'Bookings')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List of Bookings</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @include('admin.layouts.partials.flash_messages')
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @forelse($bookings as $booking)
                    <tr>
                        {{--                        (current page - 1 ) * per page + iteration --}}
                        <td>{{ ((request('page',1) - 1 ) * $bookings->perPage()) + $loop->iteration }}</td>
                        <td>{{ $booking->user->name}}</td>
                        <td>{{ $booking->user->email}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No bookings found</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{ $bookings->links() }}
        </div>
    </div>
    <!-- /.card -->
@endsection
