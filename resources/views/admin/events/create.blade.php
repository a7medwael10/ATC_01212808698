@extends('admin.layouts.master')

@section('page_title', 'Events')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create Event</h3>
        </div>
        <!-- /.card-header -->
        <form action="{{ route('admin.events.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

                <div class="mb-3 row">
                   <div class="col-md-6">
                       <label for="name" class="form-label">Name</label>
                       <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                              name="name" value="{{ old('name') }}">
                       @error('name')
                       <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                       @enderror
                   </div>

                    <div class="col-md-6">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" class="form-control @error('category') is-invalid @enderror" id="category"
                               name="category">
                        @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="date" class="form-label">Date - Time</label>
                        <input type="datetime-local" class="form-control @error('date') is-invalid @enderror" id="date"
                               name="date">
                        @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="venue" class="form-label">Venue</label>
                        <input type="text" class="form-control @error('venue') is-invalid @enderror" id="venue"
                               name="venue">
                        @error('venue')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                               name="price">
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                               name="image">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                  name="description"></textarea>
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
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
