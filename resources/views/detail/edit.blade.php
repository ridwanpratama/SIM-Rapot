@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('detail.index') }}">Data UPD</a></li>
    </ol>
@endsection
@section('content')

    <div class="container-fluid">
        <h1>Tambah detail</h1>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><strong>Tambah detail</strong> </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('detail.update', [$detail_upd->id]) }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">Nama Mata Pelajaran</label>
                            <div class="col-md-9">
                                <input class="form-control" id="nama_upd" type="text" name="nama_upd"
                                    value="{{ $detail_upd->nama_upd }}" placeholder="Masukkan nama upd">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="select1">Guru</label>
                            <div class="col-md-9">
                                <select class="form-control" id="guru_id" name="guru_id">
                                    <option value="{{ $detail_upd->guru_id }}">{{ $detail_upd->guru->nama_guru }}</option>
                                    @foreach (App\Guru::all() as $guru)
                                        <option value="{{ $guru->id }}">{{ $guru->nama_guru }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit"> Tambah detail</button>
                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
