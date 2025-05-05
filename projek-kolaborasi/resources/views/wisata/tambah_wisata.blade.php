@extends('master')

@section('judul_halaman', 'Tambah Data Wisata | Portfolio')

@section('konten')
    <div class="container text-capitalize">
        <h1 class="mt-4">Tambah Wisata</h1>
       

        <div class="card mb-4">
            <div class="card-header bg-secondary text-light">
                <i class="fas fa-table me-1"></i>
                Tambah Wisata
            </div>
            <div class="card-body text-capitalize">
                <form action="/tambah_wisata" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 row">
                        <label for="gambar" class="col-sm-2 col-form-label">Gambar Wisata</label>
                        <div class="col-sm-10">
                            <input name="gambar" class="form-control " type="file" placeholder="Masukkan gambar Wisata" id="gambar" aria-label=".form-control-lg example">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="judul" class="col-sm-2 col-form-label">Nama Wisata</label>
                        <div class="col-sm-10">
                            <input name="judul" class="form-control " type="text" placeholder="Masukkan judul" id="judul" aria-label=".form-control-lg example">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Wisata</label>
                        <div class="col-sm-10">
                            <input name="deskripsi" class="form-control " type="text" placeholder="Masukkan deskripsi Wisata" id="deskripsi" aria-label=".form-control-lg example">
                        </div>
                    </div>
                     
                    <div class="mb-4 row">
                        <label for="kategori_id" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select name="kategori_id" id="kategori_id" class="form-select">
                                <option disabled selected>Pilih kategori</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>



                    <div class="mb-4 row">
                        <label for="url" class="col-sm-2 col-form-label">lokasi_url </label>
                        <div class="col-sm-10">
                            <input name="lokasi_url"  class="form-control " type="url" placeholder="Masukkan URL demo (jika ada)" id="url" aria-label=".form-control-lg example">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

@endsection