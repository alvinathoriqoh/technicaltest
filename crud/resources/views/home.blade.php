@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                      </tr>
                    </thead>
           
                        @foreach ($users as $no => $data)
                            <tr>
                              <td>{{ $no+1 }}</td>
                              <td>{{ $data->name }}</td>
                              <td>{{ $data->email }}</td>
                              <td>{{ $data->role }}</td>
                            </tr>
                       @endforeach 
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection