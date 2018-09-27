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
        $crumb = 'Master';
        $subcrumb = 'Profil';
        return view('admin::master.profil', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }

    public function produk(){
        $crumb = 'Master';
        $subcrumb = 'Produk dan Layanan';
        return view('admin::master.produklayanan', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }

    public function karir(){
        $crumb = 'Master';
        $subcrumb = 'Karir';
        return view('admin::master.karir', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }

    public function berita(){
        $crumb = 'Master';
        $subcrumb = 'Berita';
        return view('admin::master.berita', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }
    
    public function sejarah(){
        $crumb = 'Profil';
        $subcrumb = 'Sejarah dan Perkembangan';
        return view('admin::profil.sejarahss', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }

    public function visimisi(){
        $crumb = 'Profil';
        $subcrumb = 'Visi dan Misi';
        return view('admin::profil.visimisiss', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }

    public function profilss(){
        $crumb = 'Profil';
        $subcrumb = 'Profil Perusahaan';
        return view('admin::profil.profilss', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }
    public function jajaran(){
        $crumb = 'Profil';
        $subcrumb = 'Jajaran Tinggi Manajemen';
        return view('admin::profil.jajarantinggiss', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }

    public function galeri(){
        $crumb = 'Profil';
        $subcrumb = 'Galeri dan Info Waroeng';
        return view('admin::profil.galeriwaroeng', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }

    public function menu(){
        $crumb = 'Profil';
        $subcrumb = 'Daftar Menu';
        return view('admin::profil.daftarmenuss', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }
    
    public function takeaway(){
        $crumb = 'Profil';
        $subcrumb = 'Layanan Take Away';
        return view('admin::profil.takeawayss', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }
    
    public function nasidos(){
        $crumb = 'Profil';
        $subcrumb = 'layanan Nasi Dos';
        return view('admin::profil.nasidosss', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }
    
    public function kerjasama(){
        $crumb = 'Profil';
        $subcrumb = 'Layanan Kerjasama Produk';
        return view('admin::profil.kerjasamaprodukss', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }
    
    public function mitra(){
        $crumb = 'Profil';
        $subcrumb = 'Produk Mitra';
        return view('admin::profil.produkmitra', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }
    
    public function karirss(){
        $crumb = 'Karir';
        $subcrumb = 'Karir';
        return view('admin::profil.karirss', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }
    
    public function beritass(){
        $crumb = 'Berita';
        $subcrumb = 'Berita Perusahaan';
        return view('admin::berita.beritaperusahaan', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }
    
    public function dansos(){
        $crumb = 'Berita';
        $subcrumb = 'Penyaluran Dana Sosial';
        return view('admin::berita.dansos', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }
    
    public function promo(){
        $crumb = 'Berita';
        $subcrumb = 'Promosi Produk dan Layanan';
        return view('admin::berita.promosi', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }
    
    public function eventkerjasama(){
        $crumb = 'Berita';
        $subcrumb = 'Event Kerjasama Khusus';
        return view('admin::berita.eventkerjasama', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }
    
    public function nikmat(){
        $crumb = 'Berita';
        $subcrumb = 'Berita Nikmat';
        return view('admin::berita.beritanikmat', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
    }
    
    public function medsil(){
        $crumb = 'Berita';
        $subcrumb = 'Media Silaturrahmi';
        return view('admin::berita.medsil', ['crumb' => $crumb,'subcrumb' => $subcrumb]);
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
