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
        return view('profil::sejarah');
    }

    public function misi()
    {
        return view('profil::misi');
    }

    public function profil()
    {
        return view('profil::profil');
    }

    public function jajaran()
    {
        return view('profil::jajaran');
    }

    public function galeri()
    {
        return view('profil::galeri');
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
