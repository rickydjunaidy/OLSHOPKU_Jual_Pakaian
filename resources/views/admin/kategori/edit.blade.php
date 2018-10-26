@extends('admin.layouts.master')

@section('title')
<title>Web Course | Edit Kategori</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Edit Kategori</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>Kategori</li>
        <li class="active">Edit Kategori</li>
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
                    <h3 class="box-title">Edit Data Kategori</h3>
                </div>
                {{-- box header --}}

                {{-- form --}}
                <form role="form" action="/admin/kategori/update" method="POST">
                    
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="{{$data->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">

                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label>nama_kategori</label>
                            <input type="text" class="form-control" name="nama_kategori" placeholder="Masukkan nama"
                                value="{{$data->nama_kategori}}">
                        </div>
                    </div>
                    {{-- form --}}

                    <div class="box-footer">
                        <a href="/admin/kategori" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>

                </form>
                {{-- form --}}
            </div>

        </div>
    </div>
</section>

@endsection
