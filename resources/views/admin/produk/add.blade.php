@extends('admin.layouts.master')

@section('title')
<title>Web Course | Add Produk</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Add Produk</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>Produk</li>
        <li class="active">Add Produk</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            {{-- box header --}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Produk</h3>
                </div>
                {{-- box header --}}

                {{-- form --}}
                <form role="form" action="/admin/produk/store" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <div class="form-group">
                            <label>nama_kategori</label>
                            <select class="form-control" name="kategori_id">
                                @foreach ($kategori as $kategori)
                                    <option  value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                                @endforeach
                            </select>
                            <label>nama_produk</label>
                            <input type="text" class="form-control" name="nama_produk" value="{{ old('nama_produk') }}"
                                placeholder="nama_produk" required>
                            <label>deskripsi_produk</label>
                            <input type="text" class="form-control" name="deskripsi_produk" value="{{old('deskripsi_produk')}}"
                                placeholder="deskripsi_produk" required>
                            <label>harga</label>
                            <input type="number" class="form-control" name="harga" value="{{old('harga')}}"
                                placeholder="harga" required min="0">
                            <label>stok_barang</label>
                            <input type="number" class="form-control" name="stok_barang" value="{{old('stok_barang')}}"
                                placeholder="stok_barang" required min="0">
                            <label>lokasi_gambar</label>
                            <input type="file" class="form-control" name="gambar" placeholder="lokasi_gambar">
                        </div>
                    </div>
                {{-- form --}}

                    <div class="box-footer">
                        <a href="admin/produk" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>

                </form>
                {{-- form --}}
            </div>

        </div>
    </div>
</section>

@endsection
