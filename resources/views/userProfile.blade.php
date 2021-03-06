@extends('layouts.user')

@section('content')
    <div class="container"style="padding: 100px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            
                            <div class="col-md-6">
                                <h5>Profile</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/userDashboard" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            @forelse ($userDetails as $user)
                            <div class="col-md-3">
                                <img alt="User Pic" src="/images/user.jpg" class="img-circle img-responsive" width="100%">
                                <h5 class="text-primary text-center pt-1">{{$user->name}}</h5>
                            </div>
                            <div class="col-md-9">
                                    <table class="table table-user-information">
                                        <tbody>
                                            <tr>
                                                <td>User Id</td>
                                                <td>{{$user->id}}</td>
                                            </tr>
                                            <tr>
                                                <td>Name:</td>
                                                <td>{{$user->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>{{$user->email}}</td>
                                            </tr>
                                            <tr>
                                                <td>Approve Date</td>
                                                <td>{{$user->approved_at}}</td>
                                            </tr>
                                            <tr>
                                                <td>Payment Status:</td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm text-white">{{$user->payment}}</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                      </table>
                                @empty
                                    <p>No data found.</p>
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection