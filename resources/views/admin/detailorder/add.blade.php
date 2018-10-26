@extends('admin.layouts.master')

@section('title')
<title>Web Course | Add DetailOrder</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Add DetailOrder</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>DetailOrder</li>
        <li class="active">Add DetailOrder</li>
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
                    <h3 class="box-title">Add DetailOrder</h3>
                </div>
                {{-- box header --}}

                {{-- form --}}
                <form role="form" action="/admin/detailorder/store/{{$id_order}}" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <div class="form-group">
                            <label>nama_produk</label>
                            <select class="form-control" name="produk_id">
                                @foreach ($data as $data)
                                    <option  value="{{$data->id}}">{{$data->nama_produk}}</option>
                                @endforeach
                            </select>
                            <label>jumlah_beli</label>
                            <input type="number" class="form-control" name="jumlah_beli" value="1"
                                placeholder="jumlah_beli" required min="1" >
                            <label>harga_produk</label>
                            <input type="number" class="form-control" name="harga_produk" value="0"
                                placeholder="harga_produk" required min="0" >
                        </div>
                    </div>
                {{-- form --}}

                    <div class="box-footer">
                        <a href="/admin/order/show/{{$id_order}}" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>

                </form>
                {{-- form --}}
            </div>

        </div>
    </div>
</section>

@endsection
