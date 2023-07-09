@extends('layouts.index')
@section('title', 'Normalisasi')

@section('content')

    <h2 class="mt-2">Normalisasi</h2>

    <div>
        <table class="table">
            <thead class="table">
                <tr>
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Alamat</th>
                    <th>Masa Lama Kerja</th>
                    <th>Penilaian Kinerja</th>
                    <th>Penilaian Perilaku</th>
                    <th>Skil</th>
                    <th>Loyalitas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($normalisasiList as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->masa_lama_kerja }}</td>
                        <td>{{ $data->penilaian_kinerja }}</td>
                        <td>{{ $data->penilaian_perilaku }}</td>
                        <td>{{ $data->skil }}</td>
                        <td>{{ $data->loyalitas }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection