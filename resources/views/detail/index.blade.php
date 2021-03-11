@extends('layouts.app')
@section('third_party_stylesheets')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css') }}">
@endsection
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('detail.index') }}">Data UPD</a></li>
    </ol>
@endsection
@section('content')

    <div class="container-fluid">
        <div class="col-lg-12">
			<div class="card">
				<div class="card-header">Data UPD
					<a href="{{ route('detail.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
				</div>
					<div class="card-body">
						<table id="table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
									<th>Nama UPD</th>
									<th>Guru</th>
									<th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detail_upd as $detail)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $detail->nama_upd }}</td>
									<td>{{ $detail->guru->nama_guru }}</td>
                                    <td><a href="">
										<form action="{{route('detail.destroy',[$detail->id])}}" method="post">
											{{csrf_field()}}
											{{method_field('DELETE')}}
											<button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus UPD: {{$detail->nama_upd}}')">Hapus</button>
											<a href="{{route('detail.edit',[$detail->id])}}" class="btn btn-warning btn-sm">Ubah</a>
										</td>
                                            
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

					</div>
				</div>
			</div>
    </div>
@endsection
@section('third_party_scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js" defer></script>
@endsection
@push('page_scripts')
    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>
@endpush