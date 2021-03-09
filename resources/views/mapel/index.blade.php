@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('mapel.index') }}">Data Mapel</a></li>
    </ol>
@endsection
@section('content')

    <div class="container-fluid">
        <div class="col-lg-12">
			<div class="card">
				<div class="card-header">Data Mapel
					<a href="{{ route('mapel.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
				</div>
					<div class="card-body">
						<table id="table" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Mata Pelajaran</th>
								<th>Guru</th>
								<th>Aksi</th>
							</tr>
						</thead>
							<tbody>
								<tr>
									<?php $i=1; ?>
									@foreach($data_mapel as $mapel)
									<td>{{ $i++ }}</td>
									<td>{{ $mapel->nama_mapel }}</td>
									<td>{{ $mapel->guru->nama_guru }}</td>
									<td><a href="">
				      	<form action="{{route('mapel.destroy',[$mapel->id])}}" method="post">
				      		{{csrf_field()}}
				      		{{method_field('DELETE')}}
				      		<button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus Mata Pelajaran: {{$mapel->nama_mapel}}')">Hapus</button>
				      		<a href="{{route('mapel.edit',[$mapel->id])}}" class="btn btn-warning btn-sm">Ubah</a>
				      	</td>
				      		
				      	</form>
									
								</tr>
							</tbody>
							@endforeach
						</table>
					</div>
				</div>
			</div>
    </div>
@endsection
