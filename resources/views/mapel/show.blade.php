@extends('layouts.app')

@section('content')
		<div class="container-fluid">
			<div class="card">
				<div class="card-header"> Detail Mapel</div>
					<div class="card-body">
							<div class="form-group row">
								<label class="col-md-3 col-form-label" for="text-input">Nama Mapel :</label>
								<div class="col-md-9">
								<label><u><b>{{$data_mapel['nama_mapel']}}</b></u></label>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 col-form-label" for="text-input">Guru :</label>
								<div class="col-md-9">
								<label><u><b>{{$data_mapel->guru->nama_guru}}</b></u></label>
								</div>
							</div>
							<a href="{{route('mapel.index')}}" class="btn btn-primary">Kembali</a>
					</div>

			</div>
		</div>
@endsection