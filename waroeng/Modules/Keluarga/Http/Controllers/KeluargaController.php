<?php

namespace Modules\Keluarga\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $title      = 'Media Silaturrahim Waroeng SS';
        $judul      = 'Keluarga Penebar Pedas';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('keluarga::index', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);

    }

    public function data1()
    {
        $title      = 'Medsil - Penyaluran dana sosial melalui Genggam Jemari Indonesia di Lombok NTB';
        $judul      = 'Media Silaturrahmi';
        $subjudul   = 'Waroeng Spesial Sambal SS';

        return view('keluarga::detailkeluarga.index', ['title' => $title, 'judul' => $judul, 'subjudul' => $subjudul]);


    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('keluarga::create');
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
        return view('keluarga::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('keluarga::edit');
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
