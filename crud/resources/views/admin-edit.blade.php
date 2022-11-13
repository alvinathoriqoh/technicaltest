@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>

            <div class="card-body">
                        @if (session("success"))
                            <div class="alert alert-primary">{{ session('success') }}</div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                {!! implode('', $errors->all('<li>:message</li>')) !!}
                            </div>
                        @endif
                        <form action="{{ url('/admin/update/' . $users->id) }}">
                        @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $users->name }}" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ $users->email }}" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" value="{{ $users->password }}" placeholder="Password">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
                </div>
        </div>
    </div>
</div>
@endsection