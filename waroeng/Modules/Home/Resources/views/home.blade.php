@extends('layouts.fronted')
@section('title', 'Beranda Waroeng SS')
@section('content')

<script src="{{ asset('assets/loadmore/jquery.min.js') }}"></script>
<script src="{{ asset('assets/loadmore/bootstrap.min.js') }}"></script>

<style>
	  .strokeme
{
    text-shadow:
    -1.5px -1.5px 0 darkred,
    1.5px -1.5px 0 darkred,
    -1.5px 1.5px 0 darkred,
    1.5px 1.5px 0 darkred;
}

	.soom:hover {
		transition: transform 2s;
		-webkit-transform:scale(1.3); /* Safari and Chrome */
		-moz-transform:scale(1.3); /* Firefox */
		-ms-transform:scale(1.3); /* IE 9 */
		-o-transform:scale(1.3); /* Opera */
		 transform:scale(1.3);
    }

	@font-face {
		  font-family: "adlib";
		  src: url({{ asset('assets/fonts/Adlib-Regular.ttf') }});
	  }

.animated {
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}

@-webkit-keyframes bounce {
  0%, 20%, 40%, 60%, 80%, 100% {-webkit-transform: translateY(0);}
  50% {-webkit-transform: translateY(-10px);}
}

@keyframes bounce {
  0%, 20%, 40%, 60%, 80%, 100% {transform: translateY(0);}
  50% {transform: translateY(-10px);}
}

.bounce {
  -webkit-animation-name: bounce;
  animation-name: bounce;
}


</style>

<style>
div.relative {
    position: absolute;
    bottom: 10px;
    left: 90px;
    width: 100%;
    height: 10%;
    {{--  border:3pxsolid#73AD21;  --}}

</style>

	<div class="tp-banner-container">
		<div class="tp-banner" >
			<ul>
                <!-- Slider One  -->
                <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="1000" data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-title="Nasi Dos">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/img/bg-1600x339px-3.png') }}"  alt="slidebg1"  data-lazyload="{{ asset('assets/img/bg-1600x339px-3.png') }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme sft start"
                        {{--  data-hoffset="0"  --}}
                        data-x="590"
                        data-y="115"
                        data-speed="2000"
                        data-start="2000"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;  font-family: 'Merriweather', sans-serif; font-size: 33px; font-style: italic; text-transform:capitalize; font-weight:400;">
                        <span>Layanan kami</span>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme sft"
                        data-x="360"
                        data-y="170"
                        data-speed="1000"
                        data-start="2400"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap; font-family : 'Kalam', cursive; font-size: 76px; color: #fff;">Catering Nasi Dos
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme sft"
                        data-x="390"
                        data-y="235"
                        data-speed="1000"
                        data-start="2700"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;  font-family: 'Roboto', sans-serif;text-transform: uppercase; font-size: 16px;letter-spacing: 4px; color: #fff;">kami juga melayani catering nasi dos
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme sft"
                        data-x="center"
                        data-y="280"
                        data-speed="1000"
                        data-start="3000"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='tr-slider-btn'>lihat detail</a>
                    </div>
                </li>

                <!-- Slider Two  -->
                <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="1000"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-title="Ceriakan September">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/img/bg-1600x339px-2.png') }}"  alt="Waroeng SS Indonesia"  data-lazyload="{{ asset('assets/img/bg-1600x339px-2.png') }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme sft start"
                        data-x="590"
                        data-y="115"
                        data-speed="2000"
                        data-start="2000"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;  font-family: 'Merriweather', sans-serif; font-size: 33px; font-style: italic;text-transform:capitalize;font-weight:400;"><span>Rekomendasi</span>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme sft"
                        data-x="360"
                        data-y="170"
                        data-speed="1000"
                        data-start="2400"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;font-family : 'Kalam', cursive; font-size: 76px; color: #fff;">Ceriakan September
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme sft"
                        data-x="390"
                        data-y="235"
                        data-speed="1000"
                        data-start="2700"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;  font-family: 'Roboto', sans-serif;text-transform: uppercase; font-size: 16px;letter-spacing: 4px; color: #fff;">Yuk segera kunjungi Waroeng SS terdekat
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme sft"
                        data-x="center"
                        data-y="280"
                        data-speed="1000"
                        data-start="3000"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='tr-slider-btn'>lihat detail</a>
                    </div>
                </li>

                <!-- Slider Three  -->
                <li data-transition="slotfade-horizontal" data-slotamount="1" data-masterspeed="100" data-title="Berita Nikmat">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/img/bg-1600x339px.png') }}"  alt="slidebg1"  data-lazyload="{{ asset('assets/img/bg-1600x339px.png') }}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme sft start"
                        data-x="590"
                        data-y="115"
                        data-speed="2000"
                        data-start="2000"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;  font-family: 'Merriweather', sans-serif; font-size: 33px; font-style: italic;">
                        <span>Berita huuhaah</span>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme sft"
                        data-x="360"
                        data-y="170"
                        data-speed="1000"
                        data-start="2400"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap; font-family : 'Kalam', cursive; font-size: 76px; letter-spacing: 3px; color: #fff;">Berita Nikmat
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme sft"
                        data-x="390"
                        data-y="235"
                        data-speed="1000"
                        data-start="2700"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;  font-family: 'Roboto', sans-serif;text-transform: uppercase; font-size: 16px; letter-spacing: 3px; color: #fff;">info-info ringan seputar SS untuk menemani Bigboss
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme sft"
                        data-x="center"
                        data-y="280"
                        data-speed="1000"
                        data-start="3000"
                        data-easing="Power3.easeOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        data-linktoslide="next"
                        style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='tr-slider-btn'>lihat detail</a>
                    </div>
                </li>

	        </ul>
			<div class="tp-bannertimer"></div>
		</div>
	</div>
</div><!--slider One -->


<!--===| Welcome Area Start===|-->
<section class="welcome-area">
  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-md-4">
        <div class="welcome-note text-center">
          <h1>Selamat Datang</h1>
          <p class="note"><strong>di website resmi</strong></p>
          <h2 style="font-family: 'adlib';color: bisque;font-size: 180%" class="strokeme" >Waroeng SS</h2>
          <p>Waroeng Spesial Sambal SS berdiri pada tanggal 20 Agustus 2002 dan kini memiliki 85 cabang yang tersebar dari Banten hingga Bali</p>
          <p>Waroeng pertama didirikan di barat Graha Saba Pramana UGM, dengan konsep waroeng tenda.<br>
          Waroeng tersebut sampai saat ini masih tetap beroperasi, waroeng tersebut diberi nama <strong style="color:darkred">Waroeng Perjuangan</strong>.</p>
          <p id="animated-example" class="animated bounce"><i class="fa fa-arrow-circle-down"></i></p>
		  <em style="margin: 0"><small><a href="{{ url('profil/profil-waroeng-ss') }}" ><font color="darkred">Klik untuk lihat selengkapnya</font></a></small></em>
        </div>
      </div>

       <div class="col-xs-12 col-md-8">
        <div class="row">

          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="grid">
              <figure class="effect-cheff">
                <img class="img-responsive demo-img penci-image-holder penci-lazy" src="{{ asset('assets/img/3.png') }}" alt="Waroeng SS">
                <div class="relative" style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='tr-slider-btn'>READ MORE</a>
                </div>
              </figure>
            </div>
          </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="grid">
              <figure class="effect-cheff">
                <img class="img-responsive" src="{{ asset('assets/img/4.png') }}" alt="Waroeng SS 1">
                <div class="relative" style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='tr-slider-btn'>READ MORE</a>
                </div>
              </figure>
            </div>
          </div>

        </div>

        <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 column-margin clear-left">
            <div class="grid">
              <figure class="effect-cheff">
                <img class="img-responsive" src="{{ asset('assets/img/1.png') }}" alt="Waroeng SS 2">
                <div class="relative" style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='tr-slider-btn'>READ MORE</a>
                </div>
              </figure>
            </div>
          </div>

        <div class="col-xs-12 col-sm-6 col-md-6 column-margin">
            <div class="grid">
              <figure class="effect-cheff">
                <img class="img-responsive" src="{{ asset('assets/img/2.png') }}" alt="Waroeng SS 3"/>
                <div class="relative" style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='tr-slider-btn'>READ MORE</a>
                </div>
              </figure>
            </div>
          </div>
        </div>

        </div>
      </div>
    </div><br>
        <div id="animated-example" class="read-more pull-right animated bounce">
            <a class="text-right" href="#">lihat selengkapnya... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
</section>


<!--===| Welcome Area End===|-->


<!--===| Service Start ===|-->
<section class="services">
  <div class="services-overlay">
    <div class="container">
      <div class="row">
      <div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
        <h1>info huuhaah</h1>
        <p class="slogan">Fresh, Made By Order </p>
          <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#tab-features" data-toggle="tab" aria-expanded="true"><i class="fa fa-wifi"></i><br>Tanpa Wifi</a></li>
            <li><a href="#extra" data-toggle="tab" aria-expanded="false"><i class="fa fa-taxi"></i><br>smoking</a></li>
            <li><a href="#home-delivery" data-toggle="tab" aria-expanded="false"><i class="fa fa-bicycle"></i><br>Booking</a></li>
            <li><a href="#custom" data-toggle="tab" aria-expanded="false"><i class="fa fa-cubes"></i><br>Menu Pedas</a></li>
          </ul><div class="panel-group visible-xs" id="myTab-accordion"></div>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade" id="tab-features">
              <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                  <h2><a href="#">Urbangrill offers free wifi </a></h2>
                  <p>Enjoy free high-speed wifi. Simply click on Urbngrill wifi and ask any of our staff for login details. Now you can enjoy uninterrupted video streaming and downloads as much as you want...</p>
                  <a class="btn btn-default btn-link" href="#" role="button">view more</a>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="custom">
              <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                  <h2><a href="#">We have a safe and secured play area</a></h2>
                  <p> Enjoy your dining experience knowing that your children are safe and secure in our playground. We have an array of childrens toys to keep them busy while you dine...</p>
                  <a class="btn btn-default btn-link" href="#" role="button">view more</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade active in" id="extra">
              <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                  <h2><a href="#">We have valet parking facilities</a></h2>
                  <p>Urbangrill provides its customers with valet parking facilities that contribute to a positive overall dining experience. This way you dont have to waste time looking for a parking space...</p>
                  <a class="btn btn-default btn-link" href="#" role="button">view more</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="home-delivery">
              <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                  <h2><a href="#">Urbangrill also provides home deliveries</a></h2>
                  <p>Our home delivery service allows you to order your favorite foods so that you can enjoy it from the comfort of your home, best for beating the traffic...</p>
                  <a class="btn btn-default btn-link" href="#" role="button">view more</a>
                </div>
              </div>
            </div>
          </div><!--/.tab-content-->
        </div>
      </div>
  </div>
  </div>
</section>
<!--===| Service End ===|-->

<!--===| Food Menu Start ===|-->
<section id="food-menu" class="galleri-wrapper food-menu-wrapper section-padding">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>menu huuhaah</h1>
          <p class="slogan">daftar menu waroeng SS</p>
        </div>
      </div>

      <div class="row">
        <div class="gallery-trigger">
          <ul id="filter">
           <li><a href="#" data-group="sambal">Sambal</a></li>
           <li><a href="#" data-group="lauk">Lauk</a></li>
           <li><a href="#" data-group="sayur">Sayur</a></li>
           <li><a href="#" data-group="minuman">Minuman</a></li>
           <li><a href="#" data-group="buah">Buah</a></li>
           <li><a href="#" data-group="paket">Paket</a></li>
           <li><a href="#" data-group="catering">Catering</a></li>
           <li><a class="active" href="#" data-group="semua">Semua</a></li>
         </ul>
       </div>

       <div id="grid">
        <!-- menu-item -->
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3 blogBox moreBox" data-groups='["semua", "sambal"]'>
          <div class="menu-index">
            <h2>ORGANIC EGG</h2>
            <img src="http://placehold.it/210x125" alt="appetizer 01">
            <P>Ratte potato, chorizo iberico<span>$15.00</span></P>
          </div>
        </div>
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3 blogBox moreBox" data-groups='["semua", "lauk"]'>
          <div class="menu-index">
            <h2>Southern Salad</h2>
            <img src="http://placehold.it/210x125" alt="appetizer 02">
            <P>Premium Bacon Ranch Chicken Salad<span>$35.00</span></P>
          </div>
        </div>
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3 blogBox moreBox" data-groups='["semua", "sayur"]'>
          <div class="menu-index">
            <h2>Prime PINEAPPLE</h2>
            <img src="http://placehold.it/210x125" alt="Desserts 02">
            <P>Coconut sablé, fromage<span>$28.00</span></P>
          </div>
        </div>
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3 blogBox moreBox" data-groups='["semua", "minuman"]'>
          <div class="menu-index">
            <h2>RAINBOW TROUT</h2>
            <img src="http://placehold.it/210x125" alt="Main Course 01">
            <P>Kurobuta pork, miso caramel, yuzu<span>$39.00</span></P>
          </div>
        </div>
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3 blogBox moreBox  style="display: none;" data-groups='["semua", "buah"]'>
          <div class="menu-index">
            <h2>BEETROOT</h2>
            <img src="http://placehold.it/210x125" alt="Main Course 02">
            <P>‘Burrata artigiana’, honeycomb<span>$61.00</span></P>
          </div>
        </div>
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3 blogBox moreBox  style="display: none;" data-groups='["semua",  "paket"]'>
          <div class="menu-index">
            <h2>Nutty GRAND</h2>
            <img src="http://placehold.it/210x125" alt="Desserts 01">
            <P>Tastes & textures, horseradish<span>$24.00</span></P>
          </div>
        </div>
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3 blogBox moreBox  style="display: none;" data-groups='["semua", "catering"]'>
          <div class="menu-index">
            <h2>CONFIT TROUT</h2>
            <img src="http://placehold.it/210x125" alt="Main Course 03">
            <P>Kurobuta pork, miso caramel, yuzu<span>$39.00</span></P>
          </div>
        </div>
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3 blogBox moreBox  style="display: none;" data-groups='["semua", "catering"]'>
          <div class="menu-index">
            <h2>Bacon Salad </h2>
            <img src="http://placehold.it/210x125" alt="Appetizer 03">
            <P>Premium Collection of Bacon Salad<span>$09.00</span></P>
          </div>
        </div>
      </div> <!-- grid -->
      <div class="load-button text-center">
        <button id="loadMore" class="btn" name="submit" type="submit">load more</button>
      </div>
    </div><!-- row -->
  </div><!-- container -->
</section>

  <!--==| Food Menu End |==-->

<!--===| Event Start|===-->
<section class="event-wrapper section-padding">
  <div class="container">
    <div class="row">
        <div class="col-xs-12">
          <h1>berita huuhaah</h1>
          <p class="slogan">berita seputar waroeng SS</p>
        </div>
      </div>
      <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="single-event">
            <a href="events-details.html"><img src="http://placehold.it/320x200" alt="Blog 02"></a>
            <div class="content-holder">
            <h2><a href="events-details.html">Birthday Celebration</a></h2>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit</P>
                <address>
                  <strong>Place: </strong>
                  Bar Room
                  <br>
                  <strong>Date & Time: </strong>
                  14 Oct 2015 &nbsp07:30:29
                </address>
                <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="single-event">
            <a href="events-details.html"><img src="http://placehold.it/320x200" alt="Blog 03"></a>
            <div class="content-holder">
            <h2><a href="events-details.html">BIUB convocation</a></h2>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit</P>
                <address>
                  <strong>Place: </strong>
                  Hall of Frame
                  <br>
                  <strong>Date & Time: </strong>
                  16 Oct 2015 &nbsp07:30:29
                </address>
                <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="single-event">
            <a href="events-details.html"><img src="http://placehold.it/320x200" alt="Blog 03"></a>
            <div class="content-holder">
            <h2><a href="events-details.html">BIUB convocation</a></h2>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit</P>
                <address>
                  <strong>Place: </strong>
                  Hall of Frame
                  <br>
                  <strong>Date & Time: </strong>
                  16 Oct 2015 &nbsp07:30:29
                </address>
                <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="single-event">
            <a href="events-details.html"><img src="http://placehold.it/320x200" alt="Blog 03"></a>
            <div class="content-holder">
            <h2><a href="events-details.html">BIUB convocation</a></h2>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit</P>
                <address>
                  <strong>Place: </strong>
                  Hall of Frame
                  <br>
                  <strong>Date & Time: </strong>
                  16 Oct 2015 &nbsp07:30:29
                </address>
                <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="single-event">
            <a href="events-details.html"><img src="http://placehold.it/320x200" alt="Blog 03"></a>
            <div class="content-holder">
            <h2><a href="events-details.html">BIUB convocation</a></h2>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit</P>
                <address>
                  <strong>Place: </strong>
                  Hall of Frame
                  <br>
                  <strong>Date & Time: </strong>
                  16 Oct 2015 &nbsp07:30:29
                </address>
                <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="single-event">
            <a href="events-details.html"><img src="http://placehold.it/320x200" alt="Blog 03"></a>
            <div class="content-holder">
            <h2><a href="events-details.html">BIUB convocation</a></h2>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit</P>
                <address>
                  <strong>Place: </strong>
                  Hall of Frame
                  <br>
                  <strong>Date & Time: </strong>
                  16 Oct 2015 &nbsp07:30:29
                </address>
                <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                </div>
          </div>
        </div>

      </div>
  </div><br>
        <div id="animated-example" class="read-more pull-right animated bounce">
            <a class="text-right" href="#" style="font-size: 14px">lihat selengkapnya... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
</section>
<!--===| Event End|===-->

<!--===| Testimonial Start|===-->
<section class="section-padding testimonial-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
        <h1>Kata konsumen</h1>
        <div id="testimonial" class="carousel slide carousel-fade" data-ride="carousel">


          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="{{ asset('assets/img/pak_yok2.png') }}" alt="testimonial 01">

              <p>I loved the ambiance and the decor at urbangrill. Their service is really awesome. I will recommend this place to my friends and will come back for sure</p>
              <blockquote> oni Perry</blockquote>
            </div>
            <div class="item">
              <img src="{{ asset('assets/img/pak_yok1.png') }}" alt="testimonial 02">

              <p>I loved the seafood menu. The sauces were delicious. And my kids had a lovely time at the play area while we ordered. Keep up the good work!”</p>
              <blockquote> steve john</blockquote>
            </div>
            <div class="item">
              <img src="{{ asset('assets/img/logo-header.png') }}" alt="testimonial 03">

              <p>I needed a place for a corporate event at the very last minute and urbangrill was so cooperative. Our event was a huge success and all the credit goes to the urbangrill management and support staff. Thank you</p>
              <blockquote> Lisa morgan</blockquote>
            </div>
          </div>

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#testimonial" data-slide-to="0" class="active"></li>
            <li data-target="#testimonial" data-slide-to="1"></li>
            <li data-target="#testimonial" data-slide-to="2"></li>
          </ol>

        </div>
      </div>
    </div>
  </div>
</section>
<!--===| Testimonial End|===-->

<!--===| Start Signature Dishes Start|===-->
  <section class="section-padding signature-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>galeri & Info waroeng</h1>
          <p class="slogan">info waroeng cabang terkini Mr. Huuhaah</p>
        </div>
      </div>
      <div class="row">
         <div class="col-xs-12">
           <div class="owl-wrap">
            <div id="owl-dishes" class="owl-carousel">

              <div class="feature-image">
                    <img src="{{ asset('assets/img/icon.jpg') }}" alt="Signature Dishes 01">
                    <h2>SS Palagan | Yogyakarta</h2>
                    <p>Waroeng SS Palagan dibuka pada tahun 2015, terletak di Jl. Palagan tentara pelajar.</p>
                    <p class="price"><a href="#" style="color: darkred"><i class="fa fa-info-circle"></i> selengkapnya <span><i class="fa fa-arrow-circle-right"></i></span></a></p>
              </div>

              <div class="feature-image">
                <img src="{{ asset('assets/img/2.png') }}" alt="Signature Dishes 02">
                <h2>chicken for two roasted</h2>
                <p>There was a time when Chinese food in this country meant (Americanized) Cantonese food.</p>
                <p class="price"><a href="#" style="color: darkred"><i class="fa fa-info-circle"></i> selengkapnya <span><i class="fa fa-arrow-circle-right"></i></span></a></p>
              </div>
              <div class="feature-image">
                  <img src="{{ asset('assets/img/1.png') }}" alt="Signature Dishes 03">
                  <h2>black cod with miso</h2>
                  <p>There was a time when Chinese food in this country meant (Americanized) Cantonese food.</p>
                  <p class="price"><a href="#" style="color: darkred"><i class="fa fa-info-circle"></i> selengkapnya <span><i class="fa fa-arrow-circle-right"></i></span></a></p>
              </div>

               <div class="feature-image">
                    <img src="{{ asset('assets/img/3.png') }}" alt="Signature Dishes 01">
                    <h2>orange beef</h2>
                    <p>There was a time when Chinese food in this country meant (Americanized) Cantonese food.</p>
                    <p class="price"><a href="#" style="color: darkred"><i class="fa fa-info-circle"></i> selengkapnya <span><i class="fa fa-arrow-circle-right"></i></span></a></p>
              </div>
              <div class="feature-image">
                <img src="{{ asset('assets/img/4.png') }}" alt="Signature Dishes 02">
                <h2>chicken for two roasted</h2>
                <p>There was a time when Chinese food in this country meant (Americanized) Cantonese food.</p>
                <p class="price"><a href="#" style="color: darkred"><i class="fa fa-info-circle"></i> selengkapnya <span><i class="fa fa-arrow-circle-right"></i></span></a></p>
              </div>
           </div><!-- /.owl-carousel -->
            <div class="owl-controls">
             <a class="next"><i class="flaticon-arrow427"></i></a>
              <a class="prev"><i class="flaticon-arrow413"></i></a>
            </div>
          </div><!-- /.owl-wrap -->
         </div>
      </div>

        <div id="animated-example" class="read-more pull-right animated bounce">
            <a class="text-right" href="#" style="font-size: 14px">lihat semua waroeng... <i class="fa fa-arrow-circle-right"></i></a>
        </div>

    </div>
  </section>
  <!--====| End Signature Dishes End|====-->

  <!--====| Gallery Start |====-->
  <section class="galleri-wrapper section-padding">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>galeri kami</h1>
          <p class="slogan">galeri foto dan video kami</p>
        </div>
      </div>
    <div class="row">
        <div class="gallery-trigger">
          <ul id="filter">
           <li><a href="#" data-group="foto">Foto</a></li>
           <li><a href="#" data-group="video">Video</a></li>
           <li><a class="active" href="#" data-group="semua">Semua</a></li>
         </ul>
       </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="row">

                <div class="col-xs-12 col-md-6">
                    <div class="grid">
                        <figure class="effect-cheff gallary-image">
                         <img src="{{ asset('assets/img/icon.jpg') }}" alt="Gallery 02">
                        <figcaption>
                        <div class="gallary-hover-text">
                            <a class="yellow-bar video" href="{{ 'https://www.youtube.com/watch?v=-S1PqvTOgA4?fs=1&amp;autoplay=1' }}" ><i class="fa fa-play"></i></a>
                            <p>chicken seasoned with Youtube Video</p>
                        </div>
                        </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="grid">
                        <figure class="effect-cheff gallary-image">
                        <img src="{{ asset('assets/img/2.png') }}" alt="Gallery 05">
                        <figcaption>
                        <div class="gallary-hover-text">
                            <a class="yellow-bar fancybox" href="{{ asset('assets/img/2.png') }}" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                            <p>chicken seasoned with herbs</p>
                        </div>
                        </figcaption>
                        </figure>
                    </div>
                </div>

            </div>
        </div>

<div class="col-xs-12 col-sm-6 col-md-6">
            <div class="row">

                <div class="col-xs-12 col-md-6">
                    <div class="grid">
                        <figure class="effect-cheff gallary-image">
                         <img src="{{ asset('assets/img/icon.jpg') }}" alt="Gallery 02">
                        <figcaption>
                        <div class="gallary-hover-text">
                            <a class="yellow-bar video" href="{{ 'https://www.youtube.com/watch?v=-S1PqvTOgA4?fs=1&amp;autoplay=1' }}" ><i class="fa fa-play"></i></a>
                            <p>chicken seasoned with Youtube Video</p>
                        </div>
                        </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="grid">
                        <figure class="effect-cheff gallary-image">
                        <img src="{{ asset('assets/img/3.png') }}" alt="Gallery 06">
                        <figcaption>
                        <div class="gallary-hover-text">
                            <a class="yellow-bar fancybox" href="{{ asset('assets/img/3.png') }}" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                            <p>chicken seasoned with herbs</p>
                        </div>
                        </figcaption>
                        </figure>
                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>
  </section>
  <!--====| Gallery End |====-->

<script>
$( document ).ready(function () {
		$(".moreBox").slice(0, 4).show();
		if ($(".blogBox:hidden").length != 0) {
			$("#loadMore").show();
		}
		$("#loadMore").on('click', function (e) {
			e.preventDefault();
			$(".moreBox:hidden").slice(0, 4).slideDown();
			if ($(".moreBox:hidden").length == 0) {
				$("#loadMore").fadeOut('slow');
			}
		});
	});
</script>

@endsection
