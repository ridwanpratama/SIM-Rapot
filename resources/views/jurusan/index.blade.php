@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Input Data Jurusan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jurusan.create') }}"> Tambah Data</a>
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
            <th>Nama Jurusan</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($jurusans as $jurusan)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $jurusan->nama_jurusan }}</td>
                <td>
                    <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('jurusan.edit',$jurusan->id) }}">Edit</a>
    
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td> 
            </tr>
        @endforeach
    </table>

    {!! $jurusans->links() !!}
@endsection