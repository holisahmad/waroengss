@extends('home::layouts.master')

@section('isi')

  <!--===| Our Team Start|===-->
  <section class="section-padding our-team-section">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2>Personel Manajemen</h2>
          <p class="slogan">Jajaran Tinggi Manajemen Waroeng SS</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-3">
          <div class="team-wrapper">
            <img src="{{ asset('assets/foto/personel/13154280p.jpg') }}" height="250" alt="Team-01">
            <ul class="social">
              <li><a href="#"><i class="flaticon-facebook55"></i></a></li>
              <li><a href="#"><i class="flaticon-linkedin11"></i></a></li>
              <li><a href="#"><i class="flaticon-twitter1"></i></a></li>
            </ul>
            <div class="contents">
              <p><span>Yoyok Heri Wahyono</span><br>Direktur</p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.Anennean
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3">
          <div class="team-wrapper">
            <img src="{{ asset('assets/foto/personel/13154280p.jpg') }}" height="250" alt="Team-02">
            <ul class="social">
              <li><a href="#"><i class="flaticon-facebook55"></i></a></li>
              <li><a href="#"><i class="flaticon-linkedin11"></i></a></li>
              <li><a href="#"><i class="flaticon-twitter1"></i></a></li>
            </ul>
            <div class="contents">
              <p><span>Yoyok Heri Wahyono</span><br>GM1 - Operasi</p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.Anennean
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3">
          <div class="team-wrapper">
            <img src="{{ asset('assets/foto/personel/imam.jpg') }}" height="250" alt="Team-03">
            <ul class="social">
              <li><a href="#"><i class="flaticon-facebook55"></i></a></li>
              <li><a href="#"><i class="flaticon-linkedin11"></i></a></li>
              <li><a href="#"><i class="flaticon-twitter1"></i></a></li>
            </ul>
            <div class="contents">
              <p><span>Imam Muttaqin</span><br>GM2 - Pendukung</p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.Anennean
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3">
          <div class="team-wrapper">
            <img src="{{ asset('assets/foto/personel/holis.jpeg') }}" height="250" alt="Team-04">
            <ul class="social">
              <li><a href="#"><i class="flaticon-facebook55"></i></a></li>
              <li><a href="#"><i class="flaticon-linkedin11"></i></a></li>
              <li><a href="#"><i class="flaticon-twitter1"></i></a></li>
            </ul>
            <div class="contents">
              <p><span>Ahmad holis</span><br>Manager IT</p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.Anennean
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--===| Our Team End|===-->


@endsection
