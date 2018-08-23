@extends('layouts.fronted')
@section('title', 'Galeri Waroeng SS')
@section('content')

<script src="{{ asset('assets/loadmore/jquery.min.js') }}"></script>
<script src="{{ asset('assets/loadmore/bootstrap.min.js') }}"></script>
  <!--===| About Us Banner Start|===-->
  <section class="banner-wrapper about-banner">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>Galery Waroeng</h1>
          <p>Waroeng Spesial Sambal SS</p>
        </div>
      </div>
    </div>
  </section>
  <!--===| About Us Banner End|===-->

  <!--===| Our Team Start|===-->
  <section class="section-padding our-team-section">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2>Waroeng Kami...</h2>
          <p class="slogan">here are our award winning shefs</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-4 blogBox moreBox">
          <div class="team-wrapper">
            <img src="{{ asset('assets/img/megatruh.png') }}" height="350" alt="Team-01">
            <ul class="social">
              <li><p><font color="white" face="tahoma">Waroeng SS Megatruh</font></p></li>
            </ul>
            <div class="contents" style="height:220px">
              <p><span>Yogyakarta</span><br>Gg. Megatruh No.5, Karang Wuni, Caturtunggal,Depok, Sleman, Yogyakarta 55281 <button class="btn-read-more btn-danger">Lihat Maps</button></p>
              <p align="left" class="panel-footer">
              <strong>Kapasitas : <font color="darkred">Khusus Melayani Bungkus</font></strong>
              <br>
              <strong>Jam buka : <font color="darkred">10:00 s/d 22:00</font></strong>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 blogBox moreBox">
          <div class="team-wrapper">
            <img src="{{ asset('assets/img/SSSompok.jpg') }}" height="350" alt="Team-02">
            <ul class="social">
              <li><p><font color="white" face="tahoma">Waroeng SS Sompok</font></p></li>
            </ul>
            <div class="contents" style="height:220px">
              <p><span>Semarang</span><br> JL. Sompok Lama No. 22, Peterongan, Semarang Sel., Kota Semarang, Jawa Tengah 50242 <button class="btn-read-more btn-danger">Lihat Maps</button></p>
              <p align="left" class="panel-footer">
              <strong>Kapasitas : <font color="darkred">30 Kursi</font></strong>
              <br>
              <strong>Jam buka : <font color="darkred">10:00 s/d 22:00</font></strong>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 blogBox moreBox">
          <div class="team-wrapper">
            <img src="{{ asset('assets/img/SSNgaliyan.jpg') }}" height="350" alt="Team-02">
            <ul class="social">
              <li><p><font color="white" face="tahoma">Waroeng SS Ngaliyan</font></p></li>
            </ul>
            <div class="contents" style="height:220px">
              <p><span>Semarang</span><br> Jalan Prof. Dr. Hamka Nomor 59, Purwoyoso, Ngaliyan, Purwoyoso, Ngaliyan, Kota Semarang, Jawa Tengah 50184 <button class="btn-read-more btn-danger">Lihat Maps</button></p>
              <p align="left" class="panel-footer">
              <strong>Kapasitas : <font color="darkred">30 Kursi</font></strong>
              <br>
              <strong>Jam buka : <font color="darkred">10:00 s/d 22:00</font></strong>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 blogBox moreBox" style="display: none;">
          <div class="team-wrapper">
            <img src="{{ asset('assets/img/megatruh.png') }}" height="350" alt="Team-01">
            <ul class="social">
              <li><p><font color="white" face="tahoma">Waroeng SS Megatruh</font></p></li>
            </ul>
            <div class="contents" style="height:220px">
              <p><span>Yogyakarta</span><br>Gg. Megatruh No.5, Karang Wuni, Caturtunggal,Depok, Sleman, Yogyakarta 55281 <button class="btn-read-more btn-danger">Lihat Maps</button></p>
              <p align="left" class="panel-footer">
              <strong>Kapasitas : <font color="darkred">Khusus Melayani Bungkus</font></strong>
              <br>
              <strong>Jam buka : <font color="darkred">10:00 s/d 22:00</font></strong>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 blogBox moreBox" style="display: none;">
          <div class="team-wrapper">
            <img src="{{ asset('assets/img/SSSompok.jpg') }}" height="350" alt="Team-02">
            <ul class="social">
              <li><p><font color="white" face="tahoma">Waroeng SS Sompok</font></p></li>
            </ul>
            <div class="contents" style="height:220px">
              <p><span>Semarang</span><br> JL. Sompok Lama No. 22, Peterongan, Semarang Sel., Kota Semarang, Jawa Tengah 50242 <button class="btn-read-more btn-danger">Lihat Maps</button></p>
              <p align="left" class="panel-footer">
              <strong>Kapasitas : <font color="darkred">30 Kursi</font></strong>
              <br>
              <strong>Jam buka : <font color="darkred">10:00 s/d 22:00</font></strong>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 blogBox moreBox" style="display: none;">
          <div class="team-wrapper">
            <img src="{{ asset('assets/img/SSNgaliyan.jpg') }}" height="350" alt="Team-02">
            <ul class="social">
              <li><p><font color="white" face="tahoma">Waroeng SS Ngaliyan</font></p></li>
            </ul>
            <div class="contents" style="height:220px">
              <p><span>Semarang</span><br> Jalan Prof. Dr. Hamka Nomor 59, Purwoyoso, Ngaliyan, Purwoyoso, Ngaliyan, Kota Semarang, Jawa Tengah 50184 <button class="btn-read-more btn-danger">Lihat Maps</button></p>
              <p align="left" class="panel-footer">
              <strong>Kapasitas : <font color="darkred">30 Kursi</font></strong>
              <br>
              <strong>Jam buka : <font color="darkred">10:00 s/d 22:00</font></strong>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <br>
    <div align="center">
      <button id="loadMore" class="btn-read-more btn-danger btn-lg">Lihat Lainnya</button>
    </div>
  </section>
  <!--===| Our Team End|===-->
<!--===| Testimonial Start|===-->

<!--===| Testimonial End|===-->

<script>
$( document ).ready(function () {
		$(".moreBox").slice(0, 3).show();
		if ($(".blogBox:hidden").length != 0) {
			$("#loadMore").show();
		}
		$("#loadMore").on('click', function (e) {
			e.preventDefault();
			$(".moreBox:hidden").slice(0, 3).slideDown();
			if ($(".moreBox:hidden").length == 0) {
				$("#loadMore").fadeOut('slow');
			}
		});
	});
</script>

@endsection
