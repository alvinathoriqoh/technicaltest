@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail') }}</div>

            <div class="card-body">
            <!-- <button type="button" class="btn btn-primary btn-sm" href="{{url('/admin/create')}}">Tambah</button> -->
                <table class="table">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                            <tr>
                              <td>{{ $users->name }}</td>
                              <td>{{ $users->email }}</td>
                            </tr>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection