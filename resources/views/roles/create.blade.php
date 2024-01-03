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
                        <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
                        {{-- <button class="btn btn-warning" type="submit">A</button> --}}

                    </div>
                    <form method="POST" action="{{ route('store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Role Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name"/>
                        </div>
                        <div>
                            {{-- @dd($permissions); --}}
                            @foreach ($permissions as $permission)
                            <input type='checkbox' value='{{$permission->name}}' name="permission[]">{{$permission->name}}</>
                            @endforeach
                        </div>
                        <button type="submit " class="btn btn-primary">Save Permissions</button>
                    </form>


                </div>
                @endsection