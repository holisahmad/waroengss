</div><!--==| .inner-wrapper |==-->

    <!--==| offcanvas-menu |==-->
    <div class="offcanvas-menu offcanvas-effect  hidden-sm hidden-md hidden-lg">
      <button id="off-canvas-close-btn" class="close" type="button" aria-hidden="true" data-toggle="offcanvas" >&times;</button>
      <h2>Waroeng SS</h2>
        <ul>

            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> {{ __('Beranda') }}</a></li>

            <li class="dropdown {{ Request::is('profil*') ? 'active' : '' }}"><a href="javascript:void(0)"><i class="fa fa-university"></i> {{ __('Profil') }}<i class="fa fa-angle-down"></i></a>
            <div class="submenu-wrapper no-pointer-events submenu-wrapper-topbottom">
                <div class="submenu-inner submenu-inner-topbottom">
                   <ul class="level-one dropdown-menu single-dropdown">
                        <li class="{{ Request::is('profil/sejarah-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('profil/sejarah-waroeng-ss') }}">{{ __('Sejarah dan Perkembangan') }}</a></li>
                        <li class="{{ Request::is('profil/visi-misi-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('profil/visi-misi-waroeng-ss') }}">{{ __('Visi & Misi') }}</a></li>
                        <li class="{{ Request::is('profil/profil-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('profil/profil-waroeng-ss') }}">{{ __('Profil Perusahaan') }}</a></li>
                        <li class="{{ Request::is('profil/jajaran-tinggi-manajemen-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('profil/jajaran-tinggi-manajemen-waroeng-ss') }}">{{ __('Jajaran Tinggi Manajemen') }}</a></li>
                        <li class="{{ Request::is('profil/galeri-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('profil/galeri-waroeng-ss') }}">{{ __('Galeri dan Info Waroeng') }}</a></li>
                  </ul>
                </div>
            </div>
            </li>

            <!-- Halaman produk dan layanan -->
            <li class="dropdown {{ Request::is('produk*') ? 'active' : '' }}"><a href="javascript:void(0)"><i class="fa fa-cutlery"></i> {{ __('Produk & Layanan') }}<i class="fa fa-angle-down"></i></a>
            <div class="submenu-wrapper no-pointer-events submenu-wrapper-topbottom">
                <div class="submenu-inner submenu-inner-topbottom">
                <ul class="level-one dropdown-menu single-dropdown">
                    <li class="{{ Request::is('produk/produk-dan-layanan-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('produk/produk-dan-layanan-waroeng-ss') }}">{{ __('Daftar Menu') }}</a></li>
                    <li class="{{ Request::is('produk/layanan-bungkus-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('produk/layanan-bungkus-waroeng-ss') }}">{{ __('Layanan Bungkus') }}</a></li>
                    <li class="{{ Request::is('produk/layanan-nasi-dos-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('produk/layanan-nasi-dos-waroeng-ss') }}">{{ __('Layanan Nasi Dos') }}</a></li>
                    <li class="{{ Request::is('produk/layanan-kerjasama-produk-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('produk/layanan-kerjasama-produk-waroeng-ss') }}">{{ __('Layanan Kerjasama Produk') }}</a></li>
                    <li class="{{ Request::is('produk/produk-mitra-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('produk/produk-mitra-waroeng-ss') }}">{{ __('Produk Mitra') }}</a></li>
                </ul>
                </div><!-- .submenu-inner -->
            </div><!-- .submenu-sub-wrapper -->
            </li><!-- /Halaman profil perusahaan -->

            <!-- Halaman berita perusahaan -->
            <li class="dropdown {{ Request::is('berita*') ? 'active' : '' }}"><a href="javascript:void(0)"><i class="fa fa-newspaper-o"></i> {{ __('Berita') }}<i class="fa fa-angle-down"></i></a>
            <div class="submenu-wrapper no-pointer-events submenu-wrapper-topbottom">
                <div class="submenu-inner submenu-inner-topbottom">
                <ul class="level-one dropdown-menu single-dropdown">
                    <li class="{{ Request::is('berita/berita-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('berita/berita-waroeng-ss') }}">{{ __('Berita Perusahaan') }}</a></li>
                    <li class="{{ Request::is('berita/penyaluran-dana-sosial-dan-genggam-jemari') ? 'active' : '' }}"><a href="{{ url('berita/penyaluran-dana-sosial-dan-genggam-jemari') }}">{{ __('Penyaluran Dana Sosial (CSR) & Genggam Jemari Indonesia') }}</a></li>
                    <li class="{{ Request::is('berita/berita-produk-dan-layanan-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('berita/berita-produk-dan-layanan-waroeng-ss') }}">{{ __('Produk & Layanan') }}</a></li>
                    <li class="{{ Request::is('berita/event-kerjasama-khusus-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('berita/event-kerjasama-khusus-waroeng-ss') }}">{{ __('Event - Event Kerjasama Khusus') }}</a></li>
                    <li class="{{ Request::is('keluarga/keluarga-penebar-pedas-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('keluarga/keluarga-penebar-pedas-waroeng-ss') }}">{{ __('Keluarga Penebar Pedas') }}</a></li>
                    <li class="{{ Request::is('berita/berita-nikmat-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('berita/berita-nikmat-waroeng-ss') }}">{{ __('Berita Nikmat') }}</a></li>
                </ul>
                </div><!-- .submenu-inner -->
            </div><!-- .submenu-sub-wrapper -->
            </li><!-- /Halaman profil perusahaan -->

            {{--  <!-- Halaman Keluarga Penebar Pedas -->
            <li class="{{ Request::is('keluarga/keluarga-penebar-pedas-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('keluarga/keluarga-penebar-pedas-waroeng-ss') }}">{{ __('Keluarga Penebar Pedas') }}</a></li>
            <!-- /Halaman Keluarga Penebar Pedas -->  --}}

            <!-- Halaman karir -->
            <li class="dropdown {{ Request::is('karir*') ? 'active' : '' }}"><a href="javascript:void(0);"><i class="fa fa-briefcase"></i> {{ __('Karir') }}<i class="fa fa-angle-down"></i></a>
                <div class="submenu-wrapper no-pointer-events submenu-wrapper-topbottom">
                    <div class="submenu-inner submenu-inner-topbottom">
                        <ul class="level-one dropdown-menu single-dropdown">
                            <li class="{{ Request::is('karir/lowongan-kerja-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('karir/lowongan-kerja-waroeng-ss') }}">{{ __('Karir Waroeng') }}</a></li>
                            <li class="{{ Request::is('karir/lowongan-kerja-manajemen-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('karir/lowongan-kerja-manajemen-waroeng-ss') }}">{{ __('Karir Manajemen') }}</a></li
                        </ul>
                    </div><!-- .submenu-inner -->
                </div><!-- .submenu-sub-wrapper -->
            </li><!-- /Halaman karir -->


                    <!-- Halaman Kontak -->
                    <li class="dropdown {{ Request::is('kontak*') ? 'active' : '' }}"><a href="javascript:void(0);"><i class="fa fa-phone"></i> {{ __('Kontak') }}<i class="fa fa-angle-down"></i></a>
                      <div class="submenu-wrapper no-pointer-events submenu-wrapper-topbottom">
                        <div class="submenu-inner submenu-inner-topbottom">
                          <ul class="level-one dropdown-menu single-dropdown">
                            <li class="{{ Request::is('kontak/kontak-kerjasama-pengadaan-bahan-baku-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('kontak/kontak-kerjasama-pengadaan-bahan-baku-waroeng-ss') }}">{{ __('Kerjasama Pengadaan Bahan Baku') }}</a></li>
                            <li class="{{ Request::is('kontak/kontak-kerjasama-konsinyasi-produk-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('kontak/kontak-kerjasama-konsinyasi-produk-waroeng-ss') }}">{{ __('Kerjasama Konsinyasi Produk') }}</a></li>
                            <li class="{{ Request::is('kontak/kontak-kerjasama-event-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('kontak/kontak-kerjasama-event-waroeng-ss') }}">{{ __('Kerjasama Event') }}</a></li>
                            <li class="{{ Request::is('kontak/hotline-service-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('kontak/hotline-service-waroeng-ss') }}">{{ __('Hotline Service') }}</a></li>
                            <li class="{{ Request::is('kontak/hotline-order-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('kontak/hotline-order-waroeng-ss') }}">{{ __('Hotline Order') }}</a></li>
                            <li class="{{ Request::is('kontak/kontak-sponsorship-event-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('kontak/kontak-sponsorship-event-waroeng-ss') }}">{{ __('Sponsorship Event') }}</a></li>
                            <li class="{{ Request::is('kontak/kontak-kantor-cabang-waroeng-ss') ? 'active' : '' }}"><a href="{{ url('kontak/kontak-kantor-cabang-waroeng-ss') }}">{{ __('Kantor Cabang') }}</a></li>
                          </ul>
                        </div><!-- .submenu-inner -->
                      </div><!-- .submenu-sub-wrapper -->
                    </li><!-- /Halaman Kontak -->

        </ul>
    </div><!-- .offcanvas-menu -->
</div><!-- .wrapper -->
