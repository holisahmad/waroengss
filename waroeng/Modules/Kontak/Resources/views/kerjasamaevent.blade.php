@extends('home::layouts.master')

@section('isi')

<!--==| Reservation Top Section Start |==-->
  <section class="section-padding reservation-top-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <div id="reservation-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#reservation-slider" data-slide-to="0" class="active"></li>
              <li data-target="#reservation-slider" data-slide-to="1"></li>
              <li data-target="#reservation-slider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="{{ asset('assets/img/book-table.jpg') }}" alt="Gambar BB Waroeng SS 01">
              </div>
              <div class="item">
                <img src="{{ asset('assets/img/testimonial2.jpg') }}" alt="Gambar BB Waroeng SS 02">
              </div>
              <div class="item">
                <img src="{{ asset('assets/img/testimonial.jpg') }}" alt="Gambar BB Waroeng SS 03">
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12">
           <h2 class="text-left">Kerjasama Event</h2>
        <p class="slogan">Bagaimana cara melakukan kerjasama</p>
        <p>We recommend that you make a reservation in advance. Please uses our on-line reservations system If there are seats available, we will be more than happy to welcome you on the same day. So please, dont hesitate to contact us.</p>
        <p>Praesent rhoncus quam sapien, vitae malesuada metus mollis non. pharetra varius risus. Donec quis mi facilisis, gravida elit in, rutrum turpis. </p>
        </div>
      </div>
    </div>

  <!--==| Events Content Start|==-->
	<div class="container">
        <div class="categories archive">
            <h3 class="h3">Kontak Indonesia: </h3>
            <ul class="list-unstyled">
            <li><i class="fa fa-phone-square"></i> Humas Yogyakarta (Pusat): <a href="#">081391515363</a></li>
            <li><i class="fa fa-phone-square"></i> Humas Jabotabek  (Cabang): <a href="#">081391515363</a></li>
            <li><i class="fa fa-phone-square"></i> Humas Purwokerto (Cabang): <a href="#">081391515363</a></li>
            <li><i class="fa fa-phone-square"></i> Humas Semarang (Cabang): <a href="#">081391515363</a></li>
            <li><i class="fa fa-phone-square"></i> Humas Solo (Cabang): <a href="#">081391515363</a></li>
            <li><i class="fa fa-phone-square"></i> Humas Malang (Cabang): <a href="#">081391515363</a></li>
            <li><i class="fa fa-phone-square"></i> Humas Bali (Cabang): <a href="#">081391515363</a></li>
            </ul>
        </div>
        <div class="categories archive">
                <h3 class="h3">Kontak Malaysia: </h3>
                <ul class="list-unstyled">
                <li><i class="fa fa-phone-square"></i> Humas Kuala Lumpur (Cabang): <a href="#">081391515363</a></li>
                </ul>
            </div>
	</div>
    
</section>
<!--==| Events Content End|==-->

@endsection
