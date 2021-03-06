@extends('layouts.admin')

@section('content')
<div class="container"style="padding: 80px">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-left">Delete User Board</h5>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="/adminDashboard" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <table class="table">
                        <tr>
                            <th>User ID</th>
                            <th>User name</th>
                            <th>Registered at</th>
                            <th>Payment</th>
                            <th></th>
                        </tr>
                        @forelse ($deleteUser as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->payment }}</td>
                                <td>
                                    <a href="deleteUser/{{$user->id}}" class="text-danger" onclick="return confirm('Are you sure to delete this user?')">
                                        <i style="font-size: 18px" class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                    
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No users found.</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
