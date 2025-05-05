@extends('master')

@section('judul_halaman', 'Ubah wisata
 | Portfolio')

@section('konten')
    <div class="container text-capitalize">
        <h1 class="mt-4">ubah wisata

        </h1>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="/data_wisata
                ">data wisata

                </a></li>
                <li class="breadcrumb-item active" aria-current="page">ubah wisata

                </li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-header bg-secondary text-light">
                <i class="fas fa-table me-1"></i>
                Ubah wisata
            </div>
            <div class="card-body text-capitalize">
            <form action="{{ route('edit_wisata', $wisata->id_wisata) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if($wisata->gambar)
                    <div class="mb-3">
                        <img src="{{ asset('image_wisata/' . $wisata->gambar) }}" alt="Gambar wisata" width="150">
                    </div>
                @endif
                <div class="mb-4 row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar wisata

                    </label>
                    <div class="col-sm-10">
                        <input name="gambar" class="form-control" type="file" id="gambar" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul wisata

                    </label>
                    <div class="col-sm-10">
                        <input name="judul" value="{{$wisata->judul}}" class="form-control" type="text" placeholder="Masukkan judul" id="judul" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi wisata

                    </label>
                    <div class="col-sm-10">
                        <input name="deskripsi" value="{{$wisata->deskripsi}}" class="form-control" type="text" placeholder="Masukkan deskripsi wisata" id="deskripsi" aria-label=".form-control-lg example">
                    </div>
                </div>

                <div class="mb-4 row">
                    <label for="kategori_id" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <select name="kategori_id" id="kategori_id" class="form-select">
                            @foreach ($kategori as $kategori)
                                <option value="{{ $kategori->id }}" {{ $wisata->kategori_id == $kategori->id ? 'selected' : '' }}>
                                    {{ $kategori->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-4 row">
                    <label for="url" class="col-sm-2 col-form-label">lokasi_url </label>
                    <div class="col-sm-10">
                        <input name="lokasi_url" value="{{$wisata->lokasi_url}}" class="form-control" type="url" placeholder="Masukkan URL demo (jika ada)" id="url" aria-label=".form-control-lg example">
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary">Simpan</button>
            </form>

            </div>
        </div>
    </div>

@endsection