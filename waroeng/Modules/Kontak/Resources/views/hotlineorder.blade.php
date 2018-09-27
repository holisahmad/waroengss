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
           <h2 class="text-left">Hotline Order</h2>
        <p class="slogan">Bagaimana cara melakukan order</p>
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
            <li><i class="fa fa-phone-square"></i> Operasional Yogyakarta (Pusat): <a href="tel:6281391515363">081391515363</a></li>
            <li><i class="fa fa-phone-square"></i> Operasional Jabotabek  (Cabang): <a href="tel:6281391515363">081391515363</a></li>
            <li><i class="fa fa-phone-square"></i> Operasional Purwokerto (Cabang): <a href="tel:6281391515363">081391515363</a></li>
            <li><i class="fa fa-phone-square"></i> Operasional Semarang (Cabang): <a href="tel:6281391515363">081391515363</a></li>
            <li><i class="fa fa-phone-square"></i> Operasional Solo (Cabang): <a href="tel:6281391515363">081391515363</a></li>
            <li><i class="fa fa-phone-square"></i> Operasional Malang (Cabang): <a href="tel:6281391515363">081391515363</a></li>
            <li><i class="fa fa-phone-square"></i> Operasional Bali (Cabang): <a href="tel:6281391515363">081391515363</a></li>
            </ul>
        </div>
        <div class="categories archive">
                <h3 class="h3">Kontak Malaysia: </h3>
                <ul class="list-unstyled">
                <li><i class="fa fa-phone-square"></i> Operasional Kuala Lumpur (Cabang): <a href="tel:6281391515363">081391515363</a></li>
                </ul>
            </div>
	</div>
    
</section>
<!--==| Events Content End|==-->

@endsection
