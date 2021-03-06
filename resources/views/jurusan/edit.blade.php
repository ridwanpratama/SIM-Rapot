@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('jurusan.index') }}">Data Jurusan</a></li>
    </ol>
@endsection
@section('content')

    <div class="container-fluid">
        <h1>Edit Jurusan</h1>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><strong>Edit Jurusan</strong> </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('jurusan.update', [$data_jurusan->id]) }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">Nama jurusan</label>
                            <div class="col-md-9">
                                <input class="form-control" id="nama_jurusan" type="text" name="nama_jurusan"
                                    value="{{ $data_jurusan->nama_jurusan }}" placeholder="Masukkan nama jurusan">
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit"> Edit Jurusan</button>
                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
