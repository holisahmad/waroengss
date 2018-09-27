<!--===| Header Top Start |===-->
  <div id="offcanvas-container" class="wrapper offcanvas-container">
    <div class="inner-wrapper offcanvas-pusher">

	<div class="slider-one">
	<div id="map" class="overlay">
      <div class="guideme"><i class="flaticon-map43"></i></div>
    </div>
    <header class="header-wrapper">
          <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="logo" style="margin: 0">
                <a title="Waroeng SS Indonesia" href="{{ url('/') }}">
                  <img id="logo" src="{{ asset('assets/img/logo-header.png') }}" alt="WaroengSS Logo">
                </a>
              </div><!-- /Logo -->

              <!-- =========================================
              Menu
              ========================================== -->
              <div class="navbar navbar-default mainnav">
                <div class="navbar-header navbar-right pull-right">
                  <div id="offcanvas-trigger-effects" class="column">
                    <button type="button" class="navbar-toggle visible-sm visible-xs" data-toggle="offcanvas" data-target=".navbar-collapse" data-placement="right" data-effect="offcanvas-effect"> <i class="fa fa-bars"></i>
                    </button>
                  </div><!-- offcanvas-trigger-effects -->
                </div><!-- .navbar-header -->

                <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">

                    <!-- Halaman profil perusahaan -->
                    <li class="dropdown {{ Request::is('profil*') ? 'active' : '' }}"><a href="javascript:void(0);"><i class="fa fa-university"></i> {{ __('Profil') }} <i class="fa fa-angle-down"></i></a>
                      <div class="submenu-wrapper no-pointer-events submenu-wrapper-topbottom">
                        <div class="submenu-inner submenu-inner-topbottom">
                          <ul class="level-one dropdown-menu single-dropdown">
                            <li class="{{ Request::is('profil/sejarah-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('profil/sejarah-waroeng-ss') }}">{{ __('Sejarah & Perkembangan') }}</a></li>
                            <li class="{{ Request::is('profil/visi-misi-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('profil/visi-misi-waroeng-ss') }}">{{ __('Visi & Misi') }}</a></li>
                            <li class="{{ Request::is('profil/profil-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('profil/profil-waroeng-ss') }}">{{ __('Profil Perusahaan') }}</a></li>
                            <li class="{{ Request::is('profil/jajaran-tinggi-manajemen-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('profil/jajaran-tinggi-manajemen-waroeng-ss') }}">{{ __('Jajaran Tinggi Manajemen') }}</a></li>
                            <li class="{{ Request::is('profil/galeri-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('profil/galeri-waroeng-ss') }}">{{ __('Galeri & Info Waroeng') }}</a></li>
                        </ul>
                      </div><!-- .submenu-inner -->
                    </div><!-- .submenu-sub-wrapper -->
                  </li><!-- /Halaman profil perusahaan -->

                    <!-- Halaman produk dan layanan -->
                    <li class="dropdown {{ Request::is('produk*') ? 'active' : '' }}"><a href="javascript:void(0);"><i class="fa fa-cutlery"></i> {{ __('Produk & Layanan') }} <i class="fa fa-angle-down"></i></a>
                      <div class="submenu-wrapper no-pointer-events submenu-wrapper-topbottom">
                        <div class="submenu-inner submenu-inner-topbottom">
                          <ul class="level-one dropdown-menu single-dropdown">
                            <li class="{{ Request::is('produk/produk-dan-layanan-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('produk/produk-dan-layanan-waroeng-ss') }}">{{ __('Daftar Menu') }}</a></li>
                            <li class="{{ Request::is('produk/layanan-bungkus-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('produk/layanan-bungkus-waroeng-ss') }}">{{ __('Layanan Take Away') }}</a></li>
                            <li class="{{ Request::is('produk/layanan-nasi-dos-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('produk/layanan-nasi-dos-waroeng-ss') }}">{{ __('Layanan Nasi Dos') }}</a></li>
                            <li class="{{ Request::is('produk/layanan-kerjasama-produk-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('produk/layanan-kerjasama-produk-waroeng-ss') }}">{{ __('Layanan Kerjasama Produk') }}</a></li>
                            <li class="{{ Request::is('produk/produk-mitra-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('produk/produk-mitra-waroeng-ss') }}">{{ __('Produk Mitra') }}</a></li>
                          </ul>
                        </div><!-- .submenu-inner -->
                      </div><!-- .submenu-sub-wrapper -->
                    </li><!-- /Halaman produk dan layanan perusahaan -->

                    <!-- Halaman berita perusahaan -->
                    <li class="dropdown {{ Request::is('berita*') ? 'active' : '' }}"><a href="javascript:void(0);"><i class="fa fa-newspaper-o"></i> {{ __('Berita') }} <i class="fa fa-angle-down"></i></a>
                      <div class="submenu-wrapper no-pointer-events submenu-wrapper-topbottom">
                        <div class="submenu-inner submenu-inner-topbottom">
                          <ul class="level-one dropdown-menu single-dropdown">
                            <li class="{{ Request::is('berita/berita-waroeng-ss*') ? 'active' : '' }}"><a href="{{ url('berita/berita-waroeng-ss') }}">{{ __('Berita Perusahaan') }}</a></li>
                            <li class="{{ Request::is('berita/penyaluran-dana-sosial-dan-genggam-jemari*') ? 'active' : '' }}"><a href="{{ url('berita/penyaluran-dana-sosial-dan-genggam-jemari') }}">{{ __('Penyaluran Dana Sosial (CSR)') }}</a></li>
                            <li class="{{ Request::is('berita/berita-produk-dan-layanan-waroeng-ss*') ? 'active' : '' }}"><a href="{{ url('berita/berita-produk-dan-layanan-waroeng-ss') }}">{{ __('Promosi Produk & Layanan') }}</a></li>
                            <li class="{{ Request::is('berita/event-kerjasama-khusus-waroeng-ss*') ? 'active' : '' }}"><a href="{{ url('berita/event-kerjasama-khusus-waroeng-ss') }}">{{ __('Event Kerjasama Khusus') }}</a></li>
                            <li class="{{ Request::is('berita/berita-nikmat-waroeng-ss*') ? 'active' : '' }}"><a href="{{ url('berita/berita-nikmat-waroeng-ss') }}">{{ __('Berita Nikmat') }}</a></li>
                        </ul>
                        </div><!-- .submenu-inner -->
                      </div><!-- .submenu-sub-wrapper -->
                    </li><!-- /Halaman profil perusahaan -->

                    {{--  <!-- Halaman Keluarga Penebar Pedas -->
                    <li class="dropdown mega-menus {{ Request::is('keluarga/keluarga-penebar-pedas-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('keluarga/keluarga-penebar-pedas-waroeng-ss') }}">{{ __('Keluarga Penebar Pedas') }}</a></li>
                    <!-- /Halaman Keluarga Penebar Pedas -->  --}}

                    <!-- Halaman karir -->
                    <li class="dropdown {{ Request::is('karir*') ? 'active' : '' }}"><a href="javascript:void(0);"><i class="fa fa-briefcase"></i> {{ __('Karir') }} <i class="fa fa-angle-down"></i></a>
                      <div class="submenu-wrapper no-pointer-events submenu-wrapper-topbottom">
                        <div class="submenu-inner submenu-inner-topbottom">
                          <ul class="level-one dropdown-menu single-dropdown">
                            <li class="{{ Request::is('karir/lowongan-kerja-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('karir/lowongan-kerja-waroeng-ss') }}">{{ __('Karir Waroeng') }}</a></li>
                            <li class="{{ Request::is('karir/lowongan-kerja-manajemen-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('karir/lowongan-kerja-manajemen-waroeng-ss') }}">{{ __('Karir Manajemen') }}</a></li>
                          </ul>
                        </div><!-- .submenu-inner -->
                      </div><!-- .submenu-sub-wrapper -->
                    </li><!-- /Halaman karir -->


                    <!-- Halaman Kontak -->
                    <li class="dropdown {{ Request::is('kontak*') ? 'active' : '' }}"><a href="javascript:void(0);"><i class="fa fa-phone"></i> {{ __('Kontak') }} <i class="fa fa-angle-down"></i></a>
                    {{--  <li class="dropdown {{ Request::is('kontak*') ? 'active' : '' }}"><a href="{{ url('kontak/kontak-dan-alamat-waroeng-ss') }}"><i class="fa fa-phone"></i> {{ __('Kontak') }}<i class="fa fa-angle-down"></i></a>  --}}
                      <div class="submenu-wrapper no-pointer-events submenu-wrapper-topbottom">
                        <div class="submenu-inner submenu-inner-topbottom">
                          <ul class="level-one dropdown-menu single-dropdown">
                            <li class="{{ Request::is('kontak/kontak-kerjasama-pengadaan-bahan-baku-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('kontak/kontak-kerjasama-pengadaan-bahan-baku-waroeng-ss') }}">{{ __('Pengadaan Bahan Baku') }}</a></li>
                            <li class="{{ Request::is('kontak/kontak-kerjasama-konsinyasi-produk-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('kontak/kontak-kerjasama-konsinyasi-produk-waroeng-ss') }}">{{ __('Produk Konsinyasi') }}</a></li>
                            <li class="{{ Request::is('kontak/hotline-service-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('kontak/hotline-service-waroeng-ss') }}">{{ __('Hotline Service') }}</a></li>
                            <li class="{{ Request::is('kontak/hotline-order-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('kontak/hotline-order-waroeng-ss') }}">{{ __('Hotline Order') }}</a></li>
                            <li class="{{ Request::is('kontak/kontak-kerjasama-event-sponsorship-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('kontak/kontak-kerjasama-event-sponsorship-waroeng-ss') }}">{{ __('Event & Sponsorship') }}</a></li>
                            <li class="{{ Request::is('kontak/kontak-kantor-cabang-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('kontak/kontak-kantor-cabang-waroeng-ss') }}">{{ __('Kantor Pusat & Cabang') }}</a></li>
                          </ul>
                        </div><!-- .submenu-inner -->
                      </div><!-- .submenu-sub-wrapper -->
                    </li><!-- /Halaman Kontak -->

                    <!-- Halaman Pencarian -->
                    <li><i id="search" class="flaticon-search74"></i></li>
                    {{--  <li class="col-xs-12 col-sm-4 col-md-4">
                        <div id="custom-search-input">
                            <form>
                                    <div class="input-group col-md-10">
                                    <input class="search-query form-control" type="text" placeholder="Enter Your Search">
                                    <span class="input-group-btn">
                                        <button class="btn btn-danger btn-search" type="button">
                                        <span class="flaticon-search74"></span>
                                        </button>
                                    </span><!-- /.input-group-btn -->
                                    </div><!-- /.input-group -->
                            </form>
		                </div>
                    </li>  --}}
                    <!-- /Halaman Pencarian -->

                  </ul><!-- .navbar-nav -->
                </div><!-- .navbar-collapse -->
              </div><!-- .navbar -->
            </div><!-- .col-xs-12 -->
          </div><!-- .row -->
          </div> <!-- .container -->
        </header><!-- /header-wrapper -->
