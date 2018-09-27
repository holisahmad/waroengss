<?php

namespace Modules\Berita\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Berita\Entities\ModelBerita;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function berita()
    {
        $title      = 'Berita Seputar Waroeng SS';
        $judul      = 'Berita Perusahaan';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('berita::berita', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function detailberita()
    {
        $title      = 'Berita Seputar Waroeng SS';
        $judul      = 'Berita Perusahaan';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('berita::detailberita.berita', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function dansos()
    {
        $title      = 'Penyaluran Dana Sosial (CSR) dan Genggam Jemari Indonesia Waroeng SS';
        $judul      = 'Penyaluaran Dana Sosial (CSR)';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('berita::dansos', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function detaildansos()
    {
        $title = 'Penyaluran Dana Sosial (CSR) dan Genggam Jemari Indonesia Waroeng SS';
        $judul = 'Penyaluaran Dana Sosial (CSR)';
        $subjudul = 'Waroeng Spesial Sambal SS';

        return view('berita::detaildansos.dansos', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function produk()
    {
        $title      = 'Produk dan Layanan Waroeng SS';
        $judul      = 'Promosi Produk & Layanan';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('berita::produk', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function detailproduk()
    {
        $title = 'Produk dan Layanan Waroeng SS';
        $judul = 'Promosi Produk & Layanan';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('berita::detailproduk.produk', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function event()
    {
        $title      = 'Event - Event Kerjasama Khusus Waroeng SS';
        $judul      = 'Event Kerjasama Khusus';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('berita::event', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function detailevent()
    {
        $title      = 'Event - Event Kerjasama Khusus Waroeng SS';
        $judul      = 'Event Kerjasama Khusus';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('berita::detailevent.event', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function buletin()
    {
        $title      = 'Berita Nikmat Waroeng SS';
        $judul      = 'Berita Nikmat';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('berita::buletin', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function detailbuletin()
    {
        $title      = 'Berita Nikmat Waroeng SS';
        $judul      = 'Berita Nikmat';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('berita::detailbuletin.buletin', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('berita::create');
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
        return view('berita::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('berita::edit');
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
