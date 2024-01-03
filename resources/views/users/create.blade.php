@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create user </div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      
                    <br>
                    <div>
                        {{-- <button class="btn btn-primary" type="submit">Add Role</button> --}}
                        <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
                        {{-- <button class="btn btn-warning" type="submit">A</button> --}}

                    </div>
                    <form method="POST" action="{{ route('user-store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name"/>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"/>
                        </div>
                        <div>
                            <select name="role" id="department" class="form-control">
                                <option value=""> -- Select One --</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach 
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" name="password"/>
                        </div>
                        <button type="submit " class="btn btn-primary">Save Permissions</button>
                    </form>


                </div>
                @endsection