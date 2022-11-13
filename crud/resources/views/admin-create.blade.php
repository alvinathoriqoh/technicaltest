@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create') }}</div>

            <div class="card-body">
                <form method="POST" action="{{url('admin/store')}}">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select class="form-control" name="role">
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
                </div>
        </div>
    </div>
</div>
@endsection