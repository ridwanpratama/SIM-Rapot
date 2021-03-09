@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('jurusan.index') }}">Data Jurusan</a></li>
    </ol>
@endsection
@section('content')

    <div class="container-fluid">
        <div class="col-lg-12">
			<div class="card">
				<div class="card-header">Data Jurusan
					<a href="{{ route('jurusan.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
				</div>
					<div class="card-body">
						<table id="table" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Jurusan</th>
								<th>Aksi</th>
							</tr>
						</thead>
							<tbody>
								<tr>
									<?php $i=1; ?>
									@foreach($data_jurusan as $jurusan)
									<td>{{ $i++ }}</td>
									<td>{{ $jurusan->nama_jurusan }}</td>
									<td><a href="">
				      	<form action="{{route('jurusan.destroy',[$jurusan->id])}}" method="post">
				      		{{csrf_field()}}
				      		{{method_field('DELETE')}}
				      		<button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data jurusan: {{$jurusan->nama_jurusan}} ')">Hapus</button>
				      		<a href="{{route('jurusan.edit',[$jurusan->id])}}" class="btn btn-warning btn-sm">Ubah</a>
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
