@extends('layout.app')
@section('subtitle', 'Katagori')
@section('content_header_title','Katagori')
@section('content_header_subtitle','Create')

@section('content')
<div class="cotainer">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Buat kategori baru</h3>
        </div>

        <form action="{{ url('/kategori') }}" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="kodeKategori">Kode Kategori</label>
                    <input type="text" class="form-control" id="kodeKategori" name="kodeKategori"
                        placeholder="Untuk makanan cnt: MKN">
                </div>
                <div class="form-group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" class="form-control" id="namaKategori" name="namaKategori"
                        placeholder="Nama Kategori">
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection