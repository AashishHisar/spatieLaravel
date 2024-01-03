@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users Index</div>
                <div>
                    {{-- <button class="btn btn-primary" type="submit">Add Role</button> --}}
                    <a href="{{ route('user-create') }}" class="btn btn-primary mt-3 pl-2">Add User Here</a>
                    <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
                    {{-- <button class="btn btn-warning" type="submit">A</button> --}}
                </div>    
                <div class="card-body">
                <table>
                <th>No</th>
                <th> User Name</th>
                <th> Role </th>
                <th>Action</th>
        @foreach ($users as $user)
        <tr>
        <td class="col-md-1">{{ $user->id }}</td>
        <td class="col-md-1">{{ $user->name }}</td>
        <td>Admin</td>
        <td class="col-md-1"><button class="btn btn-warning" type="submit">Edit</button></td>
        <td class="col-md-1"><button class="btn btn-danger" type="submit">Delete</button></td>
        <br>
        </tr>
        @endforeach 
        </table>
</div>
@endsection

