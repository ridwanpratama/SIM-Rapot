@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('jurusan.index') }}">Data Siswa</a></li>
    </ol>
@endsection
@section('content')

    <div class="container-fluid">
        <h1>Tambah Jurusan</h1>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><strong>Tambah Jurusan</strong> </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('jurusan.store') }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">Nama Jurusan</label>
                            <div class="col-md-9">
                                <input class="form-control" id="nama_jurusan" type="text" name="nama_jurusan"
                                    placeholder="Masukkan nama jurusan">
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit"> Tambah Jurusan</button>
                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
