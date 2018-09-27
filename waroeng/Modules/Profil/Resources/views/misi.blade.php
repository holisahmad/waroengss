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
                <img src="http://placehold.it/570x258" alt="Slider 01">
              </div>
              <div class="item">
                <img src="http://placehold.it/570x258" alt="Slider 02">
              </div>
              <div class="item">
                <img src="http://placehold.it/570x258" alt="Slider 03">
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12">
           <h2 class="text-left">Visi Waroeng SS</h2>
        <p class="slogan">how to make reservations</p>
        <p>We recommend that you make a reservation in advance. Pleasour on-line reservations system If there are seats available, we will be more than happy to welcome you on the same day. So please, donot hesitate to contact us.</p>
        <p>Praesent rhoncus quam sapien, vitae malesuada metus mollis non.
pharetra varius risus. Donec quis mi facilisis, gravida elit in, rutrum turpis. </p>
        </div>
      </div>
    </div>
  <!--==| Reservation Top Section End |==-->

<br>
    <div class="container">
		<hr>
	  </div>
<br>

  <!--==| Reservation Top Section Start |==-->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
           <h2 class="text-left">Misi Waroeng SS</h2>
        <p class="slogan">how to make reservations</p>
        <p>We recommend that you make a reservation in advance. Please our on-line reservations system If there are seats available, we will be more than happy to welcome you on the same day. So please, donot  hesitate to contact us.</p>
        <p>Praesent rhoncus quam sapien, vitae malesuada metus mollis non.
pharetra varius risus. Donec quis mi facilisis, gravida elit in, rutrum turpis. </p>
        </div>

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
                <img src="http://placehold.it/570x258" alt="Slider 01">
              </div>
              <div class="item">
                <img src="http://placehold.it/570x258" alt="Slider 02">
              </div>
              <div class="item">
                <img src="http://placehold.it/570x258" alt="Slider 03">
              </div>
            </div>
          </div>
        </div>

		</div>
    </div>
  </section>
  <!--==| Reservation Top Section End |==-->



  <!--===| About Brief Start|===-->
  <section class="section-padding about-brief-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
          <div class="contents">
            <h2>we know what you except from us</h2>
<iframe width="100%" height="400" src="https://www.youtube.com/embed/Tet6_BlStEM">
</iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--===| About Brief End|===-->


@endsection
