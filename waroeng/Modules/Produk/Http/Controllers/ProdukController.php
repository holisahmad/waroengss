<?php

namespace Modules\Produk\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $title      = 'Daftar Menu Waroeng SS';
        $judul      = 'Daftar Menu';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('produk::produk', ['title'=>$title, 'judul'=>$judul, 'subjudul' => $subjudul]);
    }

    public function bungkus()
    {
        $title      = 'Layanan Take Away Waroeng SS';
        $judul      = 'Layanan Take Away';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('produk::bungkus', ['title'=>$title, 'judul'=>$judul, 'subjudul' => $subjudul]);
    }

    public function nasidos()
    {
        $title      = 'Layanan Nasi Dos Waroeng SS';
        $judul      = 'Layanan Nasi Dos';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('produk::nasidos', ['title'=>$title, 'judul'=>$judul, 'subjudul' => $subjudul]);
    }

    public function kerjasama()
    {
        $title      = 'Layanan Kerjasama Produk Waroeng SS';
        $judul      = 'Layanan Kerjasama Produk';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('produk::kerjasamaproduk', ['title'=>$title, 'judul'=>$judul, 'subjudul' => $subjudul]);
    }

    public function mitra()
    {
        $title      = 'Produk - produk Mitra Waroeng SS';
        $judul      = 'Produk Mitra';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('produk::mitra', ['title'=>$title, 'judul'=>$judul, 'subjudul' => $subjudul]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('produk::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('produk::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('produk::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
