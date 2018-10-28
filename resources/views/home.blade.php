@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! as {{session('orderterbaru')->id}}
                        <?php
                            foreach(session('orderterbaru')->orderproduk as $data)
                            {
                                echo $data->nama_produk;
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
