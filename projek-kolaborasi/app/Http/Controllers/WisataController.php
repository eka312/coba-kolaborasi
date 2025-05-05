<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Wisata;
use App\Models\Kategori;


class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function master()
    {
        $wisata = Wisata::all(); 
         return view('master', compact('wisata'));
    }


    public function index()
    {
        $wisata = Wisata::all(); 
         return view('wisata.data_wisata', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('wisata.tambah_wisata', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori_id' => 'required|exists:kategori,id',
            'lokasi_url' => 'nullable|url',
        ]);

        // Membuat slug otomatis berdasarkan judul
        $slug = Str::slug($request->judul);

        // Proses upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image-wisata'), $namaFile); // simpan di public/image_wisata
        } else {
            $namaFile = null;
        }

        // Simpan data ke database
        $wisata = Wisata::create([
            'gambar' => $namaFile,
            'judul' => $request->judul,
            'slug' => $slug,
            'deskripsi' => $request->deskripsi,
            'kategori_id' => $request->kategori_id,
            'lokasi_url' => $request->lokasi_url,
        ]);

        return redirect('/data_wisata');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $wisata = Wisata::where('slug', $slug)->firstOrFail();
        return view('wisata.detail_wisata', compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         // untuk mengambil data wisata berdasarkan kolom id_wisata
         $wisata = Wisata::findOrFail($id);
         $kategori = Kategori::all();
         return view('wisata.ubah_wisata', compact('wisata', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $wisata = Wisata::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori_id' => 'required|exists:kategori,id',
            'lokasi_url' => 'nullable|url',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

         // Membuat slug otomatis berdasarkan judul
        $slug = Str::slug($request->judul);
    
        // Cek jika user upload gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            $gambarLama = public_path('image-wisata/' . $wisata->gambar);
            if (file_exists($gambarLama) && $wisata->gambar) {
                unlink($gambarLama);
            }
    
            // Simpan gambar baru
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image-wisata'), $namaFile);
            $wisata->gambar = $namaFile;
        }
    
        // Update data lain
        $wisata->judul = $request->judul;
        $wisata->slug = $slug;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->kategori_id = $request->kategori_id;
        $wisata->lokasi_url = $request->lokasi_url;
        $wisata->save();
    
        return redirect('/data_wisata');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Wisata::where('id_wisata', $id)->delete();
        
        //setelah terhapus akan dialihkan ke hal data wisata
        return redirect('/data_wisata');
    }
}
