<?php

namespace Modules\Profil\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function sejarah()
    {
        $title      = 'Sejarah dan Perkembangan Waroeng SS';
        $judul      = 'Sejarah Kami';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('profil::sejarah', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);

    }

    public function misi()
    {
        $title      = 'Visi dan Misi Waroeng SS';
        $judul      = 'Visi & Misi';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('profil::misi', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);

    }

    public function profil()
    {
        $title      = 'Profil Waroeng SS';
        $judul      = 'Profil Perusahaan';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('profil::profil', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function jajaran()
    {
        $title      = 'Jajaran Tinggi Manajemen Waroeng SS';
        $judul      = 'Jajaran Tinggi Manajemen';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('profil::jajaran', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    public function galeri()
    {
        $title      = 'Galeri dan Info Waroeng SS';
        $judul      = 'Galeri Huuhaah';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('profil::galeri', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('profil::create');
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
        return view('profil::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('profil::edit');
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
