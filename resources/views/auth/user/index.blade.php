@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Data User</a></li>
    </ol>
@endsection
@section('content')

    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"> Data User
                    <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($user as $item)
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->level }}</td>
                                    <td>
                                        <form action="{{route('user.destroy',[$item->id])}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus user: {{$item->name}}')">Hapus</button>
                                            <a href="{{route('user.edit',[$item->id])}}" class="btn btn-warning btn-sm">Ubah</a>
                                        </td>
                                            
                                        </form>
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
