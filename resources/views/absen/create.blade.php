@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('absen.index') }}">Data Absen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('absen.create') }}">Tambah Data Absen</a></li>
</ol>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Tambah Data Absen</div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('absen.store') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="select1">Guru</label>
                            <div class="col-md-9">
                                <select class="form-control" id="siswa_id" name="siswa_id">
                                    <option value="0">--Pilih Siswa--</option>
                                    @foreach (App\Siswa::all() as $siswa)
                                        <option value="{{ $siswa->id }}">{{ $siswa->nis }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Sakit</label>
                            <div class="col-md-9">
                                <input class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa" type="number" name="sakit" placeholder="@error('nama_siswa') {{ $message }} @enderror" value="{{ old('nama_siswa') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Izin</label>
                            <div class="col-md-9">
                                <input class="form-control @error('rombel') is-invalid @enderror" id="rombel" type="text" name="izin" placeholder="@error('rombel') {{ $message }} @enderror" value="{{ old('rombel') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Alpa</label>
                            <div class="col-md-9">
                                <input class="form-control @error('rombel') is-invalid @enderror" id="rombel" type="text" name="alpha" placeholder="@error('rombel') {{ $message }} @enderror" value="{{ old('rombel') }}">
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
