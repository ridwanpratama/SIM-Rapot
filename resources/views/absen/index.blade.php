@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('absen.index') }}">Data Absen</a></li>
</ol>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">Data Absen
                    <a href="{{ route('absen.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID Siswa</th>
                                <th>Sakit</th>
                                <th>Izin</th>
                                <th>Alpa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($absen as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->siswa_id }}</td>
                                <td>{{ $item->sakit }}</td>
                                <td>{{ $item->izin }}</td>
                                <td>{{ $item->alpha }}</td>
                                <td>
                                    <form action="{{route('absen.destroy',[$item->id])}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus siswa: {{$item->id}}')">Hapus</button>
                                        <a href="{{route('absen.edit',[$item->id])}}" class="btn btn-warning btn-sm">Ubah</a>
                                </td>

                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $absen->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
