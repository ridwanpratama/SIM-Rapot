@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <h1 class="text-black-50">Daftar Mapel</h1>
        <div class="col-lg-12">
			<div class="card">
				<div class="card-header"> Mapel</div>
					<div class="card-body">
						<table class="table table-responsive-sm table-bordered table-striped table-sm">
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
									<td>{{$i++}}</td>
									<td>{{$mapel->nama_mapel}}</td>
									<td>{{$mapel->guru->nama_guru}}</td>
									<td><a href="">
				      	<form action="{{route('mapel.destroy',[$mapel->id])}}" method="post">
				      		{{csrf_field()}}
				      		{{method_field('DELETE')}}
				      		<button class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus Mata Pelajaran: {{$mapel->nama_mapel}}')">Hapus</button>
				      		<a href="{{route('mapel.edit',[$mapel->id])}}" class="btn btn-warning">Ubah</a>
				      	</td>
				      		
				      	</form>
									
								</tr>
							</tbody>
							@endforeach
						</table>
						<nav>
							<ul class="pagination">
								<li class="page-item"><a class="page-link" href="#">Prev</a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
    </div>
@endsection
