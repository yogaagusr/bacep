@extends('layouts.dashboard')

@section('judul_halaman', 'Tabel User Web Permit')
        {{-- {{ csrf_field() }} --}}

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-center">Data Users</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            {{-- <a href="{{url('/a.new')}}" type="button" class="btn btn-primary mr-5" >
                <strong>Tambahkan Barang Asset Baru</strong>
            </a> --}}

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Slug</th>
                            <th>Department</th>
                            <th>No. HP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td>{{$c->name}}</td>
                                <td>{{$c->email}}</td>
                                <td>{{$c->slug}}</td>
                                <td>{{$c->dept}}</td>
                                <td>{{$c->hp}}</td>
                                <td>
                                    <div class="btn-toolbar">
                                        <a href="{{url('/u.edit', $c->id)}}" type="button" class="btn btn-success btn-sm col-xs-2 margin-bottom" id="in">Edit</a>
                                    </div>
                                    <div class="btn-toolbar">
                                        <a href="{{url('/u.hapus', $c->id)}}" type="button" class="btn btn-danger btn-sm" id="out">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
@endsection
