@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      
                    {{ __('You are logged in!') }} <br>
                    <div>
                        {{-- <button class="btn btn-primary" type="submit">Add Role</button> --}}
                        <a href="{{ route('roles-index') }}" class="btn btn-primary">Add Role</a>
                        <a href="{{ route('user-index') }}" class="btn btn-primary">Create user with assign role</a>
                        {{-- <button class="btn btn-warning" type="submit">A</button> --}}
                    </div>
                    <table>
                        <th>No</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    @foreach ($users as $user)
                    <tr>
                    <td class="col-md-1">{{ $user->id }}</td>
                    <td class="col-md-1">{{ $user->name }}</td>
                    <td class="col-md-2">{{ $user->email }}</td>
                    @can('edit users')
                    <td class="col-md-1"><button class="btn btn-warning" type="submit">Edit</button></td>
                    @endcan
                    @can('delete users')
                    <td class="col-md-1"><button class="btn btn-danger" type="submit">Delete</button></td>
                    @endcan
                    <br>
                    </tr>
                    @endforeach 
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
