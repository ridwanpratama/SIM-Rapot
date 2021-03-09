@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('siswa.index') }}">Data Siswa</a></li>
    </ol>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">Data Siswa
                        <a href="{{ route('siswa.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIS</th>
                                    <th>Nama Siswa</th>
                                    <th>Rombel</th>
                                    <th>Rayon</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nis }}</td>
                                    <td>{{ $item->nama_siswa }}</td>
                                    <td>{{ $item->rombel }}</td>
                                    <td>{{ $item->rayon->nama_rayon }}</td>
                                    <td>{{ $item->jurusan->nama_jurusan }}</td>
                                    <td>
                                        <form action="{{route('siswa.destroy',[$item->id])}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus siswa: {{$item->nama_siswa}}')">Hapus</button>
                                            <a href="{{route('siswa.edit',[$item->id])}}" class="btn btn-warning btn-sm">Ubah</a>
                                        </td>
                                            
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $siswa->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection