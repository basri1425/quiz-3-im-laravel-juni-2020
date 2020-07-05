@extends('layouts.master')

@section('content')
<div class="card">
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row wrap">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>{{$article->judul}}</h2>
                        <p>{{$article->isi}}</p>
                        <div style="display: inline">
                            <a href="#" class="btn btn-sm btn-info">PHP</a>
                            <a href="#" class="btn btn-sm btn-info">COdeIgniter</a>
                            <a href="#" class="btn btn-sm btn-info">Laravel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>

@endsection