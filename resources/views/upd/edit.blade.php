@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('upd.index') }}">Data upd</a></li>
    </ol>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Nama UPD</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{route('upd.update',[$upd->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="select1">Siswa ID</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="siswa_id" name="siswa_id">
                                        <option value="{{ $upd->siswa_id }}">{{ $upd->siswa->nama_siswa }}</option>
                                        @foreach (App\Siswa::all() as $siswa)
                                            <option value="{{ $siswa->id }}">{{ $siswa->nama_siswa }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                           <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="select1">Nama Siswa</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="detail_upd_id" name="detail_upd_id">
                                        <option value="{{ $upd->detail_upd_id }}">{{ $upd->detail->nama_upd }}</option>
                                        @foreach (App\Detail::all() as $upd_detail)
                                            <option value="{{ $upd_detail->id }}">{{ $upd_detail->nama_upd }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Nilai</label>
                                <div class="col-md-9">
                                    <input class="form-control @error('nilai_upd') is-invalid @enderror" id="nilai_upd" type="number" name="nilai_upd"
                                        placeholder="@error('nilai_upd') {{ $message }} @enderror" value="{{ $upd->nilai_upd }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Simpan Data</button>
                                <button class="btn btn-secondary" type="reset">Reset</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
