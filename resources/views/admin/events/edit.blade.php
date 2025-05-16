@extends('admin.layouts.master')

@section('page_title', 'Events')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edite Event</h3>
        </div>
        <!-- /.card-header -->
        <form action="{{ route('admin.events.update',$event->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @if($event->image)
                <div class="text-center mb-4">
                    <label class="form-label fw-bold">Current Event Image</label>
                    <div>
                        <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image" style="max-width: 300px; border-radius: 8px;">
                    </div>
                </div>
            @endif
            <div class="card-body">
                <div class="mb-3 row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                               name="name" value="{{ $event->name }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" class="form-control @error('category') is-invalid @enderror" id="category"
                               name="category" value="{{ $event->category }}">
                        @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="date" class="form-label">Date - Time</label>
                        <input type="datetime-local" class="form-control @error('date') is-invalid @enderror" id="date"
                               name="date" value="{{ $event->date}}">
                        @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="venue" class="form-label">Venue</label>
                        <input type="text" class="form-control @error('venue') is-invalid @enderror" id="venue"
                               name="venue" value="{{ $event->venue }}">
                        @error('venue')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                               name="price" value="{{ $event->price }}">
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="image" class="form-label">Update Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                               name="image" value="{{ $event->image }}">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                  name="description">{{$event->description}}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
