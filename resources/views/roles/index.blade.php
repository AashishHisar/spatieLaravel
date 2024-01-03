@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Role Index</div>
                <div>
                    {{-- <button class="btn btn-primary" type="submit">Add Role</button> --}}
                    <a href="{{ route('roles-create') }}" class="btn btn-primary mt-3 pl-2">Add Role</a>
                    <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
                    {{-- <button class="btn btn-warning" type="submit">A</button> --}}
                </div>    
                <div class="card-body">
                <table>
                <th>No</th>
                <th> Role Name</th>
                <th>Action</th>
        @foreach ($roles as $role)
        <tr>
        <td class="col-md-1">{{ $role->id }}</td>
        <td class="col-md-1">{{ $role->name }}</td>
        <td class="col-md-1"><button class="btn btn-warning" type="submit">Edit</button></td>
        <td class="col-md-1"><button class="btn btn-danger" type="submit">Delete</button></td>
        <br>
        </tr>
        @endforeach 
        </table>
</div>
@endsection

