@extends('admin.layouts.master')

@section('title')
<title>Web Course | Edit Hak Akses</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Edit Hak Akses</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>Hak Akses</li>
        <li class="active">Edit Hak Akses</li>
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
                    <h3 class="box-title">Edit Data Hak Akses</h3>
                </div>
                {{-- box header --}}

                {{-- form --}}
                <form role="form" action="/admin/hak_akses/update" method="POST">
                    
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="{{$data->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">

                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                                <label>nama_hak_akses</label>
                                <input type="text" class="form-control" name="nama_hak_akses" value="{{$data->nama_hak_akses}}"
                                    placeholder="nama hak_akses" required>
                        </div>
                    </div>
                    {{-- form --}}

                    <div class="box-footer">
                        <a href="/admin/hak_akses" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>

                </form>
                {{-- form --}}
            </div>

        </div>
    </div>
</section>

@endsection
