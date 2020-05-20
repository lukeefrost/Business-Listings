@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="float-right"><a href="/listings/create" class="btn btn-secondary">Create Listing</a></span></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your Listings</h3>
                    @if (count($listings))
                      <table class="table table-striped">
                        <tr>
                          <th>Company</th>
                        </tr>
                        @foreach ($listings as $listing)
                        <tr>
                          <td>{{ $listing->name }}</td>
                        </tr>
                        @endforeach
                      </table>

                    @else
                      <p>You don't have any listings yet!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
