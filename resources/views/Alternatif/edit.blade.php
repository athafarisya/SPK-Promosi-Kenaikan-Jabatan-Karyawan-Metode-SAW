@extends('layouts.index')
@section('title', 'Edit Alternatif')

@section('content')

    <div class="mt-3 col-8 m-auto">
    <h2>Edit Data Alternatif</h2>
    </div>
    <div class="mt-5 col-8 m-auto">
        <form action="/alternatif/{{ $alternatifList->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="nama">Nama Alternatif</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $alternatifList->nama }}" required>
            </div>
            <div class="mb-2">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $alternatifList->nama }}" required>
            </div>
            <div class="mb-2">
                <label for="masa_lama_kerja">Masa Lama Kerja</label>
                <input type="text" name="masa_lama_kerja" class="form-control" id="masa_lama_kerja" value="{{ $alternatifList->masa_lama_kerja }}" required>
            </div>
            <div class="mb-2">
                <label for="penilaian_kinerja">Penilaian Kinerja</label>
                <input type="text" name="penilaian_kinerja" class="form-control" id="penilaian_kinerja" value="{{ $alternatifList->penilaian_kinerja }}" required>
            </div>
            <div class="mb-2">
                <label for="penilaian_perilaku">Penilaian Perilaku</label>
                <input type="text" name="penilaian_perilaku" class="form-control" id="penilaian_perilaku" value="{{ $alternatifList->penilaian_perilaku }}" required>
            </div>
            <div class="mb-2">
                <label for="skil">Skil</label>
                <input type="text" name="skil" class="form-control" id="skil" value="{{ $alternatifList->skil }}" required>
            </div>
            <div class="mb-2">
                <label for="loyalitas">Loyalitas</label>
                <input type="text" name="loyalitas" class="form-control" id="loyalitas" value="{{ $alternatifList->loyalitas }}" required>
            </div>
            <div class="mb-5">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
              
        </form>
    </div>

@endsection