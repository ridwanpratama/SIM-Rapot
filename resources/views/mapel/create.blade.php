@extends('layouts.app')

@section('content')

    <div class="container-fluid">
		<h1>Tambah Mapel</h1>
		<div class="col-md-6">
		<div class="card">
		<div class="card-header"><strong>Tambah Mapel</strong> </div>
		<div class="card-body">
		<form class="form-horizontal" action="{{route('mapel.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
		<div class="form-group row">
		<label class="col-md-3 col-form-label" for="text-input">Nama Mata Pelajaran</label>
		<div class="col-md-9">
		<input class="form-control" id="nama_mapel" type="text" name="nama_mapel" placeholder="Masukkan nama mata pelajaran">
		</div>
		</div>
		<div class="form-group row">
		<label class="col-md-3 col-form-label" for="select1">Guru</label>
		<div class="col-md-9">
		<select class="form-control" id="guru_id" name="guru_id">
		<option value="0">--Pilih Guru--</option>
		@foreach(App\Guru::all() as $guru)
		<option value="{{$guru->id}}">{{$guru->nama_guru}}</option>
		@endforeach
		</select>
		</div>
		</div>
		</div>
		<div class="card-footer">
		<button class="btn btn-sm btn-primary" type="submit"> Tambah Mapel</button>
		<button class="btn btn-sm btn-danger" type="reset"> Reset</button>
		</div>
		</form>
		</div>
		</div>
	</div>
@endsection