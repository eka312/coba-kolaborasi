@extends('master')

@section('judul_halaman', 'Data Tempat Wisata | Jelajah Malang')

@section('konten')
    <div class="container text-capitalize">
        <h1>Data wisata</h1>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/beranda_admin">Dasboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data wisata</li>
            </ol>
        </nav>   
            
        <!-- bagian car dan tabel -->
        <div class="card mb-4 text-capitalize">
            <div class="card-header bg-light">
                <div class="d-flex">
                    <div class="flex-grow-1 d-flex align-items-center">
                        <i class="fas fa-table me-1"></i>
                        daftar data wisata
                    </div>
                    <div>
                        <a class="btn btn-primary btn-sm" href="/tambah_wisata" role="button"><i class="fas fa-add me-2"></i>Tambah</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>gambar wisata</th>
                            <th>judul wisata</th>
                            <th>deskripsi wisata</th>
                            <th>Lokasi </th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wisata as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>
                                    @if($item->gambar)
                                        <img src="{{ asset('image_wisata/' . $item->gambar) }}" alt="Gambar wisata" width="250">
                                    @else
                                        <p>Tidak ada gambar</p>
                                    @endif
                                </td>
                                <td>{{$item->judul}}</td>
                                <td>{{$item->deskripsi}}</td>
                                <td>{{$item->lokasi_url}}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm mb-1" href="/ubah_wisata/{{$item->id_wisata}}" role="button"><i class="fas fa-edit me-2"></i>ubah</a>
                                    <a class="btn btn-danger btn-sm" href="/hapus_wisata/{{$item->id_wisata}}" onclick="return confirm('apakah anda yakin ingin menghapus data ini?');" role="button"><i class="fas fa-trash me-2"></i>Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection
