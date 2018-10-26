@extends('admin.layouts.master')

@section('title')
<title>Web Course | Edit Order</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Edit Order</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>Order</li>
        <li class="active">Edit Order</li>
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
                    <h3 class="box-title">Edit Data Order</h3>
                </div>
                {{-- box header --}}

                {{-- form --}}
                <form role="form" action="/admin/order/update" method="POST" enctype="multipart/form-data">
                    
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="{{$data->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">

                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label>nama_profile</label>
                                    <input type="text" class="form-control" name="nama_profile" value="{{$data->profile->nama_profile}}"
                                    placeholder="nama_profile" required min="0" readonly>
                                <label>nama_kurir</label>
                                        <input type="text" class="form-control" name="nama_kurir" value="{{$data->kurir->nama_kurir}}"
                                        placeholder="nama_kurir" required min="0" readonly>
                                <label>status_pembayaran</label>
                                <select class="form-control" name="status_pembayaran">
                                        <option value="LUNAS" <?php if($data->status_pembayaran == "BELUM LUNAS") {echo "selected";} ?>>LUNAS</option>
                                        <option value="BELUM LUNAS" <?php if($data->status_pembayaran == "BELUM LUNAS") {echo "selected";} ?>>BELUM LUNAS</option>
                                </select>
                                <label>status_pengiriman</label>
                                <select class="form-control" name="status_pengiriman">
                                        <option value="BELUM DIKIRIM" <?php if($data->status_pengiriman == "BELUM DIKIRIM") {echo "selected";} ?>>BELUM DIKIRIM</option>
                                        <option value="SEDANG DIKIRIM" <?php if($data->status_pengiriman == "SEDANG DIKIRIM") {echo "selected";} ?>>SEDANG DIKIRIM</option>
                                        <option value="BARANG TIBA" <?php if($data->status_pengiriman == "BARANG TIBA") {echo "selected";} ?>>BARANG TIBA</option>
                                </select>
                                <label>bukti_pembayaran</label>
                                <input type="button" class="form-control" name="bukti_pembayaran" value="CEK BUKTI PEMBAYARAN"
                                    placeholder="CEK bukti_pembayaran" onclick="location.href='http://localhost:8000/storage/produk/{{$data->bukti_pembayaran}}';" required>
                                <label>total_harga</label>
                                <input type="number" class="form-control" name="total_harga" value="{{$data->total_harga}}"
                                    placeholder="total_harga" required min="0" readonly>
                            </div>
                        </div>
                    </div>
                    {{-- form --}}

                    <div class="box-footer">
                        <a href="/admin/order" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>
                </form>
                {{-- form --}}
            </div>

        </div>
    </div>
</section>

@endsection
