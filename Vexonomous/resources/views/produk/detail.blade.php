@extends('app.master')

@section('title', 'Produk Index')

@section('sidebar')
    @parent
    @section('submenu-produk')
        <a href="/produk/create" class="list-group-item list-group-item-action ps-4>">Tambah Produk</a>
        <a href="/produk/search" class="list-group-item list-group-item-action ps-4>">Cari Produk</a>
    @endsection

@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mb-4">{{$title}}</h1>
        <p>Nama Produk: {{$produk['name']}}</p>
        <p>ID Produk: {{$produk['id']}}</p>
        <p>Price: Rp {{number_format($product['price'], 2, ',', '.')}}</p>
        <hr>
        <a href="{{url('/produk')}}"class = "btn btn-primary">Kembali</a>
    </div>
@endsection