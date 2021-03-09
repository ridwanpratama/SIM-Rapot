@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('rayon.index') }}">Data Rayon</a></li>
    </ol>
@endsection
@section('content')

    <div class="container-fluid">
        <div class="col-lg-12">
			<div class="card">
				<div class="card-header"> Rayon
					<a href="{{ route('rayon.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
				</div>
					<div class="card-body">
						<table id="table" class="table table-striped table-bordered" style="width:100%">
						<thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Rayon</th>
                                <th>Nama Guru</th>
                                <th>Aksi</th>
                            </tr>
						</thead>
							<tbody>
								<tr>
									@foreach($rayons as $rayon)
									<td>{{ $loop->iteration }}</td>
									<td>{{ $rayon->nama_rayon }}</td>
									<td>{{ $rayon->guru->nama_guru }}</td>
									<td><a href="">
				      	    <form action="{{route('rayon.destroy',[$rayon->id])}}" method="post">
				      		{{csrf_field()}}
				      		{{method_field('DELETE')}}
				      		<button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus Mata Pelajaran: {{$rayon->nama_rayon}}')">Hapus</button>
				      		<a href="{{route('rayon.edit',[$rayon->id])}}" class="btn btn-warning btn-sm">Ubah</a>
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
