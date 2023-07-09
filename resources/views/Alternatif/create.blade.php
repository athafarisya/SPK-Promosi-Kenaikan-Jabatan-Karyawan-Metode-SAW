@extends('layouts.index')
@section('title', 'Tambah Alternatif')

@section('content')
    <div class="mt-3 col-8 m-auto">
    <h2>Tambah Data Alternatif</h2>
    </div>
    <div class="mt-5 col-8 m-auto">
        <form action="/alternatif/store" method="POST">
            @csrf
            <div class="mb-2">
                <label for="nama">Nama Alternatif</label>
                <input type="text" name="nama" class="form-control" id="nama" required>
            </div>
            <div class="mb-2">
                <label for="masa_lama_kerja">Masa lama Kerja</label>
                <input class="form-control" name="masa_lama_kerja" id="masa_lama_kerja" required>
            </div>
            <div class="mb-2">
                <label for="penilaian kinerja">Penilaian Kinerja</label>
                <input type="text" name="penilaian kinerja" class="form-control" id="penilaian kinerja" required>
            </div>
            <div class="mb-2">
                <label for="kebersihan">Penilaian Perilaku</label>
                <input type="text" name="penilaian perilaku" class="form-control" id="penilaian perilaku" required>
            </div>
            <div class="mb-2">
                <label for="skil">Skil</label>
                <input type="text" name="skil" class="form-control" id="skil" required>
            </div>
            <div class="mb-2">
                <label for="loyalitas">Loyalitas</label>
                <input type="text" name="loyalitas" class="form-control" id="loyalitas" required>
            </div>
            <div class="mb-5">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
              
        </form>
    </div>

@endsection