@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing<span class="float-right"><a href="/home" class="btn btn-secondary">Go Back</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="/listings/{{ $listing->id }}">
                      {{csrf_field()}}
                      {{ method_field('PUT') }}
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ $listing->name }}">
                      </div>
                      <div class="form-group">
                        <label for="name">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="{{ $listing->address }}">
                      </div>
                      <div class="form-group">
                        <label for="name">Website</label>
                        <input type="text" class="form-control" id="website" name="website" placeholder="Enter Website" value="{{ $listing->website }}">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ $listing->email }}">
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value="{{ $listing->phone }}">
                      </div>
                      <div class="form-group">
                        <label for="bio">Bio</label>
                        <input type="text" class="form-control" id="bio" name="bio" placeholder="Enter Bio" value="{{ $listing->bio }}">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
