@extends('admin.layouts.master')

@section('page_title', 'Events')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List of Events</h3>
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
                    <th>Venue</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($events as $event)
                    <tr>
                        <td>{{ ((request('page',1) - 1 ) * $events->perPage()) + $loop->iteration }}</td>
                        <td>{{ $event->name}}</td>
                        <td>{{ $event->category}}</td>
                        <td>{{ $event->date }}</td>
                        <td>{{ $event->venue }}</td>
                        <td>{{ $event->price }}</td>
                        <td>
                            <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-success btn-sm">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>

                            <button type="submit" class="btn btn-danger btn-sm delete-item"
                                    data-route="{{ route('admin.events.destroy', $event->id) }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
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
