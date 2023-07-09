@extends('layouts.index')
@section('title', 'Hasil')

@section('content')

    <h2 class="mt-2">Pangkat Karyawan</h2>

    <div>
        <table class="table">
            <thead class="table">
                <tr>
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Alamat</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hasilList as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->hasil }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection