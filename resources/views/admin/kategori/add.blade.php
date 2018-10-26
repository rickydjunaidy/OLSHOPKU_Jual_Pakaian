@extends('admin.layouts.master')

@section('title')
<title>Web Course | Add Kategori</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Add Kategori</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>Kategori</li>
        <li class="active">Add Kategori</li>
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
                    <h3 class="box-title">Add kategori</h3>
                </div>
                {{-- box header --}}

                {{-- form --}}
                <form role="form" action="/admin/kategori/store" method="POST">


                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>

                        <div class="form-group">
                            <label>nama_kategori</label>
                            <input type="text" class="form-control" name="nama_kategori" value="{{ old('nama_kategori') }}"
                                placeholder="batas 3-30 karakter" required pattern=".{3,30}">
                        </div>
                    </div>
                {{-- form --}}

                    <div class="box-footer">
                        <a href="admin/kategori" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>

                </form>
                {{-- form --}}
            </div>

        </div>
    </div>
</section>

@endsection
