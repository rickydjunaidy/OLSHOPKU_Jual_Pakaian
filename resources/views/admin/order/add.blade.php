@extends('admin.layouts.master')

@section('title')
<title>Web Course | Add Order</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Add Order</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>Order</li>
        <li class="active">Add Order</li>
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
                    <h3 class="box-title">Add Order</h3>
                </div>
                {{-- box header --}}

                {{-- form --}}
                <form role="form" action="/admin/order/store" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <div class="form-group">
                            <label>nama_profile</label>
                            <select class="form-control" name="profile_id">
                                @foreach ($profile as $profile)
                                    <option  value="{{$profile->id}}">{{$profile->nama_profile}}</option>
                                @endforeach
                            </select>
                            <label>nama_kurir</label>
                            <select class="form-control" name="kurir_id">
                                @foreach ($kurir as $kurir)
                                    <option  value="{{$kurir->id}}">{{$kurir->nama_kurir}}</option>
                                @endforeach
                            </select>
                            <label>status_pembayaran</label>
                            <input type="text" class="form-control" name="status_pembayaran" value="BELUM LUNAS"
                                placeholder="status_pembayaran" required readonly>
                            <label>status_pengiriman</label>
                            <input type="text" class="form-control" name="status_pengiriman" value="BELUM DIKIRIM"
                                placeholder="status_pengiriman" required readonly>
                            <label>bukti_pembayaran</label>
                            <input type="text" class="form-control" name="bukti_pembayaran" value="BELUM ADA"
                                placeholder="bukti_pembayaran" required readonly>
                            <label>total_harga</label>
                            <input type="number" class="form-control" name="total_harga" value="0"
                                placeholder="total_harga" required min="0" readonly>
                        </div>
                    </div>
                {{-- form --}}

                    <div class="box-footer">
                        <a href="/  admin/order" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>

                </form>
                {{-- form --}}
            </div>

        </div>
    </div>
</section>

@endsection
