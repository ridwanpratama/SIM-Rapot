@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('guru.index') }}">Data Guru</a></li>
    </ol>
@endsection
@section('content')

    <div class="container-fluid">
        <div class="col-lg-12">
			<div class="card">
				<div class="card-header"> Guru
					<a href="{{ route('guru.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
				</div>
					<div class="card-body">
						<table id="table" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Guru</th>
                                <th>Jenis Kelamin</th>
                                <th>Nomor Telepon</th>
								<th>Aksi</th>
							</tr>
						</thead>
							<tbody>
								<tr>
									@foreach($teacher as $guru)
									<td>{{ $i++ }}</td>
									<td>{{ $guru->nama_guru }}</td>
                                    <td>{{ $guru->jk }}</td>
                                    <td>{{ $guru->no_telp }}</td>
									<td><a href="">
				      	    <form action="{{route('guru.destroy',[$guru->id])}}" method="post">
				      		{{csrf_field()}}
				      		{{method_field('DELETE')}}
				      		<button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus Nama guru: {{$guru->nama_guru}}')">Hapus</button>
				      		<a href="{{route('guru.edit',[$guru->id])}}" class="btn btn-warning btn-sm">Ubah</a>
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
