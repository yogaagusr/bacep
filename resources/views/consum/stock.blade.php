@extends('layouts.barang')
@section('title', 'Semua Post')
@section('content')
<div class="wrapper">
<h1 style="text-align: center;">Semua Barang Consum</h1>
<table style="width:100%">
    <thead>
    <tr>
        <th>Kode barang</th>
        <th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Satuan</th>
        <th>Kondisi</th>
        <th>Notes</th>
        <th>Lokasi</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($consum as $c)
    <tr>
        <td style="width: 200px" >{{ $c->id}}</td>
        <td style="width: 600px" >{{ $c->nama_barang}}</td>
        <td style="width: 300px" >{{ $c->jumlah }}</td>
        <td style="width: 500px" >{{ $c->satuan }}</td>
        <td style="width: 500px" >kondisi brg</td>
        <td style="width: 500px" >{{ $c->notes }}</td>
        <td style="width: 500px" >{{ $c->lokasi }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection