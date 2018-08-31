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
        return view('kontak::index');
    }

    public function bahanbaku()
    {
        return view('kontak::bahanbaku');
    }

    public function konsinyasi()
    {
        return view('kontak::konsinyasi');
    }

    public function kerjasamaevent()
    {
        return view('kontak::kerjasamaevent');
    }

    public function hotlineservice()
    {
        return view('kontak::hotlineservice');
    }

    public function hotlineorder()
    {
        return view('kontak::hotlineorder');
    }

    public function sponsorship()
    {
        return view('kontak::sponsorship');
    }

    public function cabang()
    {
        return view('kontak::kantorcabang');
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
