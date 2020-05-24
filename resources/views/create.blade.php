@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Listing<span class="float-right"><a href="/home" class="btn btn-secondary">Go Back</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="/listings">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                      </div>
                      <div class="form-group">
                        <label for="name">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                      </div>
                      <div class="form-group">
                        <label for="name">Website</label>
                        <input type="text" class="form-control" id="website" name="website" placeholder="Enter Website">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
                      </div>
                      <div class="form-group">
                        <label for="bio">Bio</label>
                        <input type="text" class="form-control" id="bio" name="bio" placeholder="Enter Bio">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
