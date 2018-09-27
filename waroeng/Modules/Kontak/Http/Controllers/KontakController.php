<?php

namespace Modules\Kontak\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $title      = 'Kontak dan Alamat Waroeng SS';
        $judul      = 'Kontak';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('kontak::index', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function bahanbaku()
    {
        $title      = 'Kontak Kerjasama Pengadaan Bahan Baku Waroeng SS';
        $judul      = 'Kontak Pengadaan Bahan Baku';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('kontak::bahanbaku', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function konsinyasi()
    {
        $title      = 'Kontak Kerjasama Produk Konsinyasi Waroeng SS';
        $judul      = 'Kontak Produk Konsinyasi';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('kontak::konsinyasi', ['title'=>$title, 'judul'=>$judul, 'subjudul' => $subjudul]);
    }

    public function eventsponsorship()
    {
        $title      = 'Kontak Kerjasama Event Waroeng SS';
        $judul      = 'Kontak Kerjasama Event';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('kontak::eventsponsorship', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function hotlineservice()
    {
        $title      = 'Hotline Service - Komplain Waroeng SS';
        $judul      = 'Hotline Service (Komplain)';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('kontak::hotlineservice', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function hotlineorder()
    {
        $title      = 'Hotline Order Menu Waroeng SS';
        $judul      = 'Hotline Order';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('kontak::hotlineorder', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function cabang()
    {
        $title      = 'Kontak Kantor Pusat dan Cabang Waroeng SS';
        $judul      = 'Kontak Kantor Pusat & Cabang';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('kontak::kantorcabang', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('kontak::create');
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
        return view('kontak::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('kontak::edit');
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
