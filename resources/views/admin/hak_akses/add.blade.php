@extends('admin.layouts.master')

@section('title')
<title>Web Course | Add Hak_Akses</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Add Hak_Akses</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>Hak_Akses</li>
        <li class="active">Add Hak_Akses</li>
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
                    <h3 class="box-title">Add Hak_Akses</h3>
                </div>
                {{-- box header --}}

                {{-- form --}}
                <form role="form" action="/admin/hak_akses/store" method="POST">


                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>

                        <div class="form-group">
                            <label>nama_hak_akses</label>
                            <input type="text" class="form-control" name="nama_hak_akses" value="{{ old('nama_hak_akses') }}"
                                placeholder="nama hak_akses" required>
                        </div>
                    </div>
                {{-- form --}}

                    <div class="box-footer">
                        <a href="admin/hak_akses" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>

                </form>
                {{-- form --}}
            </div>

        </div>
    </div>
</section>

@endsection
