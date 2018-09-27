<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(){
        return view('admin::index');
    }

    public function profil(){
        $subcrumb = 'Profil';
        return view('admin::master.profil', ['subcrumb' => $subcrumb]);
    }

    public function produk(){
        $subcrumb = 'Produk dan Layanan';
        return view('admin::master.produklayanan', ['subcrumb' => $subcrumb]);
    }

    public function karir(){
        $subcrumb = 'Karir';
        return view('admin::master.karir', ['subcrumb' => $subcrumb]);
    }

    public function berita(){
        $subcrumb = 'Berita';
        return view('admin::master.berita', ['subcrumb' => $subcrumb]);
    }
    
    public function sejarah(){
        $subcrumb = 'Sejarah dan Perkembangan';
        return view('admin::profil.sejarahss', ['subcrumb' => $subcrumb]);
    }

    public function visimisi(){
        $subcrumb = 'Visi dan Misi';
        return view('admin::profil.visimisiss', ['subcrumb' => $subcrumb]);
    }

    public function profilss(){
        $subcrumb = 'Profil Perusahaan';
        return view('admin::profil.profilss', ['subcrumb' => $subcrumb]);
    }
    public function jajaran(){
        $subcrumb = 'Jajaran Tinggi Manajemen';
        return view('admin::profil.jajarantinggiss', ['subcrumb' => $subcrumb]);
    }

    public function galeri(){
        $subcrumb = 'Galeri dan Info Waroeng';
        return view('admin::profil.galeriwaroeng', ['subcrumb' => $subcrumb]);
    }

    public function menu(){
        $subcrumb = 'Daftar Menu';
        return view('admin::profil.daftarmenuss', ['subcrumb' => $subcrumb]);
    }
    
    public function takeaway(){
        $subcrumb = 'Layanan Take Away';
        return view('admin::profil.takeawayss', ['subcrumb' => $subcrumb]);
    }
    
    public function nasidos(){
        $subcrumb = 'layanan Nasi Dos';
        return view('admin::profil.nasidosss', ['subcrumb' => $subcrumb]);
    }
    
    public function kerjasama(){
        $subcrumb = 'Layanan Kerjasama Produk';
        return view('admin::profil.kerjasamaprodukss', ['subcrumb' => $subcrumb]);
    }
    
    public function mitra(){
        $subcrumb = 'Produk Mitra';
        return view('admin::profil.produkmitra', ['subcrumb' => $subcrumb]);
    }
    
    public function karirss(){
        $subcrumb = 'Karir';
        return view('admin::profil.karirss', ['subcrumb' => $subcrumb]);
    }
    
    public function beritass(){
        $subcrumb = 'Berita Perusahaan';
        return view('admin::berita.beritaperusahaan', ['subcrumb' => $subcrumb]);
    }
    
    public function dansos(){
        $subcrumb = 'Penyaluran Dana Sosial';
        return view('admin::berita.dansos', ['subcrumb' => $subcrumb]);
    }
    
    public function promo(){
        $subcrumb = 'Promosi Produk dan Layanan';
        return view('admin::berita.promosi', ['subcrumb' => $subcrumb]);
    }
    
    public function eventkerjasama(){
        $subcrumb = 'Event Kerjasama Khusus';
        return view('admin::berita.eventkerjasama', ['subcrumb' => $subcrumb]);
    }
    
    public function nikmat(){
        $subcrumb = 'Berita Nikmat';
        return view('admin::berita.beritanikmat', ['subcrumb' => $subcrumb]);
    }
    
    public function medsil(){
        $subcrumb = 'Media Silaturrahmi';
        return view('admin::berita.medsil', ['subcrumb' => $subcrumb]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::create');
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
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('admin::edit');
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
