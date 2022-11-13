@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
            <!-- <button type="button" class="btn btn-primary btn-sm" href="{{url('/admin/create')}}">Tambah</button> -->
            <a href ="{{url('/admin/create')}}">Tambah</a>
                <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
           
                        @foreach ($users as $no => $data)
                            <tr>
                              <td>{{ $no+1 }}</td>
                              <td>{{ $data->name }}</td>
                              <td>{{ $data->email }}</td>
                              <td>{{ $data->role }}</td>
                             <td>
                             <a class="btn btn-primary btn-sm" href ="{{url('/home/edit/'. encrypt($data->id))}}">detail</a>
                             <a class="btn btn-success btn-sm" href ="{{url('/home/edit/'. encrypt($data->id))}}">Edit</a>
                             <a class="btn btn-danger btn-sm" onclick="return confirm('anda yakin menghapus {{ $data->name }}?')" href="{{ url('/home/delete/' . encrypt($data->id)) }}">Delete</a>
                            </td>
                            </tr>
                       @endforeach 
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection