@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('nilai.index') }}">Data Nilai</a></li>
    </ol>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <p>Detail nilai dari siswa {{ $nilai->siswa->nama_siswa }}</p>
                <p>{{ $upd->nilai_upd }}</p>
                <p>{{ $absen->sakit }}</p>
                <p>{{ $absen->izin }}</p>
                <p>{{ $absen->alpha }}</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Mapel</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p><code class="highlighter-rouge">{{ $nilai->mapel->nama_mapel }}</code></p>
                            </td>
                            <td><span class="h6">UH1 = {{ $nilai->uh1 }} <br>UH2 = {{ $nilai->uh2 }} <br> PTS Ganjil = {{ $nilai->pts_ganjil }} <br> UH3 = {{ $nilai->uh3 }} <br> UH4 = {{ $nilai->uh4 }} <br> PAS Ganjil = {{ $nilai->pas_ganjil }} <br> UH5 = {{ $nilai->uh5 }} <br> UH6 = {{ $nilai->uh6 }} PTS Genap = {{ $nilai->pts_genap }} <br> UH7 = {{ $nilai->uh7 }} <br> UH8 = {{ $nilai->uh8 }} <br> PAT = {{ $nilai->pat }}</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
