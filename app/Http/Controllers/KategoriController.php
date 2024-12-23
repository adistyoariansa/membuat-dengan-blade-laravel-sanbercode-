<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function create()
    {
        return view('kategori.tambah');
    }

    public function store(Request $request)
    {
     $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        DB::table('kategori')->insert([
            'nama' => $request['nama'],
            'deskripsi' => $request['deskripsi'],
        ]);

        return redirect('/kategori');
    }

    public function index()
    {
        $kategori = DB::table('kategori')->get();
       //dd($kategori);
 
        //return view('kategori.tampil', ['users' => $kategori]);
        return view('kategori.tampil', compact('kategori'));
    }

    public function show($id)
    {
        $kategori = DB::table('kategori')->where('id', $id)->first();
        // Kembalikan view dengan data kategori
        return view('kategori.detail', ['kategori'=>$kategori]);
    }
}
