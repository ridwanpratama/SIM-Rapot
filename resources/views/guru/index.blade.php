@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Input Data Guru</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('guru.create') }}"> Tambah Data</a>
            </div>
        </div>
    </div>

    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Guru</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telepon</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($teacher as $guru)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $guru->nama_guru }}</td>
                <td>{{ $guru->jk }}</td>
                <td>{{ $guru->no_telp }}</td>
                <td>
                    <form action="{{ route('guru.destroy', $guru->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('guru.edit',$guru->id) }}">Edit</a>
    
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td> 
            </tr>
        @endforeach
    </table>

    {!! $teacher->links() !!}
@endsection