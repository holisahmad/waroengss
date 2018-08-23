@extends('layouts.fronted')
@section('title', 'Beranda Waroeng SS')
@section('content')

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
		  src: url('fonts/Adlib-Regular.ttf');
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
	<!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->

{{-- <div class="banner-wrapper reservation-banner"  style="background: url('{{ url('assets/img/header.png')}}')">
<!-- <div class="banner-wrapper reservation-banner"  style="background: url(img/header.png)"> -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>Beranda</h1>
          <p>Waroeng SS</p>
        </div>
      </div>
    </div>
  </div> --}}

  <!--
	#################################
		- THEMEPUNCH BANNER -
	#################################
	-->
	<!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->

	<div class="tp-banner-container">
		<div class="tp-banner" >
			<ul>

			<!-- Slider One -->
			<li data-transition="slotfade-horizontal" data-slotamount="1" data-masterspeed="100" data-title="Waroeng SS">
		    <!-- MAIN IMAGE -->
            <img src="{{ asset('assets/img/bg-1600x339px.png') }}"  alt="slidebg1" data-lazyload="{{ asset('assets/img/bg-1600x339px.png') }}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

		    <!-- LAYERS -->
			<!-- LAYER NR. 1 -->
		    <div class="tp-caption tp-resizeme sft start"
                data-hoffset="0"
                data-x="905"
                data-y="110"
                data-speed="2000"
                data-start="2000"
                data-easing="Power4.easeOut"
                data-endspeed="300"
                data-endeasing="Power1.easeIn"
                data-captionhidden="off"
                style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;  font-family: 'Merriweather', sans-serif; font-size: 33px; letter-spacing: 1px; font-style: italic; ">
                <span> welcome to</span>
            </div>

			<!-- LAYER NR. 2 -->
		    <div class="tp-caption tp-resizeme sft"
		      data-x="760"
		      data-y="150"
		      data-speed="1000"
		      data-start="2400"
		      data-easing="Power4.easeOut"
		      data-endspeed="300"
		      data-endeasing="Power1.easeIn"
		      data-captionhidden="off"
		      style="z-index: 7; max-height: auto; white-space: nowrap;font-family : 'Playball', sans-serif; font-size: 93px; letter-spacing: 2px; color: #fff;">Urbangrill.
            </div>

			<!-- LAYER NR. 3 -->
		    <div class="tp-caption tp-resizeme sft"
		      data-x="875"
		      data-y="219"
		      data-speed="1000"
		      data-start="2700"
		      data-easing="Power4.easeOut"
		      data-endspeed="300"
		      data-endeasing="Power1.easeIn"
		      data-captionhidden="off"
		      style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;  font-family: 'Roboto', sans-serif; text-transform: uppercase; font-size: 18px; font-weight: 400; letter-spacing: 3px; color: #fff;">best quality food
		    </div>

			<!-- LAYER NR. 4 -->
		    <div class="tp-caption tp-resizeme sft"
		      data-x="910"
		      data-y="270"
		      data-speed="1000"
		      data-start="3000"
		      data-easing="Power3.easeInOut"
		      data-splitin="none"
		      data-splitout="none"
		      data-elementdelay="0.1"
		      data-endelementdelay="0.1"
		      data-linktoslide="next"
		      style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='tr-slider-btn'>READ MORE</a>
		    </div>
		  </li>

			<!-- Slider Two  -->
			<li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="1000"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-title="Waroeng SS">
			<!-- MAIN IMAGE -->
            <img src="{{ asset('assets/img/bg-1600x339px-2.png') }}"  alt="Waroeng SS Indonesia"  data-lazyload="{{ asset('assets/img/bg-1600x339px-2.png') }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

			<!-- LAYERS -->
			{{--  <!-- LAYER NR. 1 -->
			<div class="tp-caption tp-fade fadeout fullscreenvideo"
				data-x="0"
				data-y="0"
				data-speed="1000"
				data-start="1100"
				data-easing="Power4.easeOut"
				data-endspeed="1500"
				data-endeasing="Power4.easeIn"
				data-autoplay="true"
				data-autoplayonlyfirsttime="false"
				data-nextslideatend="true"
				data-forceCover="1"
				data-dottedoverlay="twoxtwo"
				data-aspectratio="16:9"
				data-forcerewind="on"
				style="z-index: 2">


			<video class="video-js vjs-default-skin" preload="none" width="100%" height="100%"
			poster='{{ asset('assets/video/urbangrill.jpg') }}' >
			<source src='{{ asset('assets/video/urbangrill.mp4') }}' type='video/mp4' />
			<source src='{{ asset('assets/video/urbangrill.webm') }}' type='video/webm' />
			<source src='{{ asset('assets/video/urbangrill.ogv') }}' type='video/ogg' />
			</video>

			</div>  --}}

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
	        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;  font-family: 'Merriweather', sans-serif; font-size: 33px; font-style: italic;text-transform:capitalize;font-weight:400;"><span>We take our</span>
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
	        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;font-family : 'Playball', sans-serif;font-size: 91px; color: #fff;">Responsibilities
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
	        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;  font-family: 'Roboto', sans-serif;text-transform: uppercase; font-size: 14px;letter-spacing: 4px; color: #fff;">very seriously – from the environment
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
	        style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='tr-slider-btn'>Book a Table Now</a>
	      </div>
		</li>

            <!-- Slider Three -->
            <li data-transition="slotfade-horizontal" data-slotamount="1" data-masterspeed="100" data-title="Waroeng SS">
            <!-- MAIN IMAGE -->
		   <img src="{{ asset('assets/img/bg-1600x339px-3.png') }}"  alt="slidebg1" data-lazyload="{{ asset('assets/img/bg-1600x339px-3.png') }}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		      <!-- LAYER NR. 1 -->
		      <div class="tp-caption tp-resizeme sft start"
		        data-x="800"
		        data-y="110"
		        data-speed="2000"
		        data-start="2000"
		        data-easing="Power4.easeOut"
		        data-endspeed="300"
		        data-endeasing="Power1.easeIn"
		        data-captionhidden="off"
		        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;  font-family: 'Merriweather', sans-serif; font-size: 33px; font-style: italic;"><span>Memorable</span>
		      </div>
		      <!-- LAYER NR. 2 -->
		      <div class="tp-caption tp-resizeme sft"
		        data-x="730"
		        data-y="150"
		        data-speed="1000"
		        data-start="2400"
		        data-easing="Power4.easeOut"
		        data-endspeed="300"
		        data-endeasing="Power1.easeIn"
		        data-captionhidden="off"
		        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;font-family : 'Playball', sans-serif;font-size: 91px; letter-spacing: 3px; color: #fff;">Experience
		      </div>

		      <!-- LAYER NR. 3 -->
		      <div class="tp-caption tp-resizeme sft"
		        data-x="705"
		        data-y="219"
		        data-speed="1000"
		        data-start="2700"
		        data-easing="Power4.easeOut"
		        data-endspeed="300"
		        data-endeasing="Power1.easeIn"
		        data-captionhidden="off"
		        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;  font-family: 'Roboto', sans-serif;text-transform: uppercase; font-size: 16px;letter-spacing: 3px; color: #fff;">with impeccable service and great food
		    </div>
		      <!-- LAYER NR. 4 -->
		      <div class="tp-caption tp-resizeme sft"
		        data-x="820"
		        data-y="270"
		        data-speed="1000"
		        data-start="3000"
		        data-easing="Power3.easeInOut"
		        data-splitin="none"
		        data-splitout="none"
		        data-elementdelay="0.1"
		        data-endelementdelay="0.1"
		        data-linktoslide="next"
		        style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='{{ url('produk') }}' class='tr-slider-btn'>{{ __('Lihat Menu Kami') }}</a>
              </div>
		   </li>
			</ul>

			<div class="tp-bannertimer"></div>
		</div>
	</div>
</div><!--slider One -->


<!--===| Welcome Area Start===|-->
<section style="margin-top: 1%;margin-bottom: 1%">
  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-md-4" style="background-color: cornsilk;box-shadow: 1vh 1vh 1vh grey">
        <div class="welcome-note text-center">
        (<em>tempat profil perusahaan</em>)
          <h1>Selamat Datang </h1>
			<p class="note"><strong>di website resmi</strong></p>
          <h2 style="font-family: 'adlib';color: bisque;font-size: 180%" class="strokeme" >Waroeng SS</h2>

          <p>Waroeng Spesial Sambal SS berdiri pada tanggal 20 Agustus 2002 dan kini memiliki 85 cabang yang tersebar dari Banten hingga Bali</p>
          <p>Waroeng pertama didirikan di barat Graha Saba Pramana UGM, dengan konsep waroeng tenda.</p>
          <p id="animated-example" class="animated bounce"><i class="fa fa-arrow-circle-down"></i></p>
			<p style="margin: 0"><em><small><a href="sejarah" ><font color="darkred">Klik untuk lihat selengkapnya</font></a></small></em></p>
        </div>
      </div>


		<div class="col-xs-12 col-md-8">
        <div class="row" style="margin-bottom: 4%">
          <div class="col-xs-12 col-sm-6  col-md-6 column-margin">
            <div class="grid">
              <figure class="effect-cheff soom" align="center" style="background-color: white;border: solid gainsboro;box-shadow: 1vh 1vh 1vh grey">
                <img src="{{ asset('assets/img/3.png') }}" alt="Food Welcome 2" style="width: 80%" />
              </figure>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6  col-md-6 column-margin">
            <div class="grid">
              <figure class="effect-cheff soom" align="center" style="background-color: white;border: solid gainsboro;box-shadow: 1vh 1vh 1vh grey">
              	<img src="{{ asset('assets/img/2.png') }}" width="50%" alt="Food Welcome 2" style="width: 80%" />
              </figure>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6  col-md-6 column-margin">
            <div class="grid">
              <figure class="effect-cheff soom" align="center" style="background-color: white;border: solid gainsboro;box-shadow: 1vh 1vh 1vh grey">
                <img src="{{ asset('assets/img/1.png') }}"  width="50%" alt="Food Welcome 2" style="width: 80%" />

              </figure>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 column-margin">
            <div class="grid">
              <figure class="effect-cheff soom" align="center" style="background-color: white;border: solid gainsboro;box-shadow: 1vh 1vh 1vh grey">
              	<img src="{{ asset('assets/img/4.png') }}"  width="50%" alt="Food Welcome 2" style="width: 80%" />

              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--===| Welcome Area End===|-->


<!--===| Service Start ===|-->
<section class="services">
  <div class="services-overlay">
    <div class="container">
      <div class="row">
      <div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
        <h1>Pelayanan Kami</h1>
        <p class="slogan">Fresh, Made by order</p>
          <ul id="myTab" class="nav nav-tabs">
            <li><a href="#tab-features" data-toggle="tab" aria-expanded="true"><i class="fa fa-wifi"></i><br>Tanpa Wifi</a></li>
            <li class="active"><a href="#extra" data-toggle="tab" aria-expanded="false"><i class="fa fa-taxi"></i><br>Free Parking</a></li>
            <li><a href="#home-delivery" data-toggle="tab" aria-expanded="false"><i class="fa fa-bicycle"></i><br>Home Delivery</a></li>
            <li><a href="#custom" data-toggle="tab" aria-expanded="false"><i class="fa fa-cubes"></i><br>Play ground</a></li>
          </ul>
          <div class="panel-group visible-xs" id="myTab-accordion"></div>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade" id="tab-features">
              <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                  <h2><a href="#">Waroeng SS Tanpa Wifi</a></h2>
                  <p>Enjoy free high-speed wifi. Simply click on Urbngrill wifi and ask any of our staff for login details. Now you can enjoy uninterrupted video streaming and downloads as much as you want...</p>
                  <a class="btn btn-default btn-link" href="#" role="button">view more</a>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="custom">
              <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                  <h2><a href="#">We have a safe and secured play area</a></h2>
                  <p> Enjoy your dining experience knowing that your children are safe and secure in our playground. We have an array of children's toys to keep them busy while you dine...</p>
                  <a class="btn btn-default btn-link" href="#" role="button">view more</a>
                </div>
              </div>
            </div>

            <div class="tab-pane fade active in" id="extra">
              <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                  <h2><a href="#">We have valet parking facilities</a></h2>
                  <p>Urbangrill provides its customers with valet parking facilities that contribute to a positive overall dining experience. This way you don't have to waste time looking for a parking space...</p>
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
        (<em>tempat produk layanan</em>)
          <h1>food menu</h1>
          <p class="slogan">fresh and healthy food available</p>
        </div>
      </div>

      <div class="row">
        <div class="gallery-trigger">
          <ul id="filter">
           <li><a class="active" href="#" data-group="total">all</a></li>
           <li><a href="#" data-group="appetizer">appetizer</a></li>
           <li><a href="#" data-group="main-course">main-course</a></li>
           <li><a href="#" data-group="desserts">desserts</a></li>
         </ul>
       </div>

       <div id="grid">
        <!-- menu-item -->
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3" data-groups='["total", "appetizer"]'>
          <div class="menu-index">
            <h2>ORGANIC EGG</h2>
            <img src="http://placehold.it/210x125" alt="appetizer 01">
            <P>Ratte potato, chorizo iberico<span>$15.00</span></P>
          </div>
        </div>
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3" data-groups='["total", "appetizer"]'>
          <div class="menu-index">
            <h2>Southern Salad</h2>
            <img src="http://placehold.it/210x125" alt="appetizer 02">
            <P>Premium Bacon Ranch Chicken Salad<span>$35.00</span></P>
          </div>
        </div>
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3" data-groups='["total", "desserts"]'>
          <div class="menu-index">
            <h2>Prime PINEAPPLE</h2>
            <img src="http://placehold.it/210x125" alt="Desserts 02">
            <P>Coconut sablé, fromage<span>$28.00</span></P>
          </div>
        </div>
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3" data-groups='["total", "main-course"]'>
          <div class="menu-index">
            <h2>RAINBOW TROUT</h2>
            <img src="http://placehold.it/210x125" alt="Main Course 01">
            <P>Kurobuta pork, miso caramel, yuzu<span>$39.00</span></P>
          </div>
        </div>
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3" data-groups='["total", "main-course"]'>
          <div class="menu-index">
            <h2>BEETROOT</h2>
            <img src="http://placehold.it/210x125" alt="Main Course 02">
            <P>‘Burrata artigiana’, honeycomb<span>$61.00</span></P>
          </div>
        </div>
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3" data-groups='["total",  "desserts"]'>
          <div class="menu-index">
            <h2>Nutty GRAND</h2>
            <img src="http://placehold.it/210x125" alt="Desserts 01">
            <P>Tastes & textures, horseradish<span>$24.00</span></P>
          </div>
        </div>
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3" data-groups='["total", "main-course"]'>
          <div class="menu-index">
            <h2>CONFIT TROUT</h2>
            <img src="http://placehold.it/210x125" alt="Main Course 03">
            <P>Kurobuta pork, miso caramel, yuzu<span>$39.00</span></P>
          </div>
        </div>
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-4 col-lg-3" data-groups='["total", "appetizer"]'>
          <div class="menu-index">
            <h2>Bacon Salad </h2>
            <img src="http://placehold.it/210x125" alt="Appetizer 03">
            <P>Premium Collection of Bacon Salad<span>$09.00</span></P>
          </div>
        </div>
      </div> <!-- grid -->
      <div class="load-button text-center">
        <button class="btn" name="submit" type="submit">load more</button>
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
        (<em>tempat berita</em>)
          <h1>event</h1>
          <p class="slogan">fresh and healthy food available</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
          <div class="join-event comingevent">
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <a href="events-details.html"><img src="http://placehold.it/360x450" alt="Blog 01"></a>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="content-holder">
                <p class="upcoming">Upcoming Event</p>
                <h2><a href="events-details.html">live concert 2015</a></h2>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eos suscipit earum voluptas aliquam recusandae, quae iure adipisci.</P>
                <p id="countdown">CountDown</p>

                <address>
                  <strong>Place: </strong>
                  Hall of Frame
                  <br>
                  <strong>Date & Time: </strong>
                  12 Oct 2015 &nbsp07:30:29
                </address>
                <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
          <div class="join-event">
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <a href="events-details.html"><img src="http://placehold.it/360x450" alt="Blog 04"></a>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="content-holder">
                <h2><a href="events-details.html">HSCP Seminar 2015</a></h2>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eos suscipit earum voluptas aliquam recusandae, quae iure adipisci, inventore quia, quos delectus quaerat praesentium id expedita nihil illo accusantium, tempora.</p>
                <p class="hidden-sm">Labore eos suscipit earum voluptas aliquam recusandae, quae iure adipisci, inventore quia, quos delectus quaerat praesentium id expedita nihil illo accusantium, tempora.</P>
                <address>
                  <strong>Place: </strong>
                  Hall of Vinch
                  <br>
                  <strong>Date & Time: </strong>
                  18 Oct 2015 &nbsp07:30:29
                </address>
                <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
<!--===| Event End|===-->

<!--===| Testimonial Start|===-->
<section class="section-padding testimonial-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
        <h1>Customer says</h1>
        <div id="testimonial" class="carousel slide carousel-fade" data-ride="carousel">


          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="http://placehold.it/100x100" alt="testimonial 01">

              <p>I loved the ambiance and the decor at urbangrill. Their service is really awesome. I will recommend this place to my friends and will come back for sure</p>
              <blockquote> oni Perry</blockquote>
            </div>
            <div class="item">
              <img src="http://placehold.it/100x100" alt="testimonial 02">

              <p>I loved the seafood menu. The sauces were delicious. And my kids had a lovely time at the play area while we ordered. Keep up the good work!”</p>
              <blockquote> steve john</blockquote>
            </div>
            <div class="item">
              <img src="http://placehold.it/100x100" alt="testimonial 03">

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
          <h1>signature dishes</h1>
          <p class="slogan">fresh and healthy food available</p>
        </div>
      </div>
      <div class="row">
         <div class="col-xs-12">
           <div class="owl-wrap">
            <div id="owl-dishes" class="owl-carousel">
              <div class="feature-image">
                    <img src="http://placehold.it/264x174" alt="Signature Dishes 01">
                    <h2>orange beef</h2>
                    <p>There was a time when Chinese food in this country meant (Americanized) Cantonese food.</p>
                    <p class="price">price: <span>$135</span></p>
              </div>

              <div class="feature-image">
                <img src="http://placehold.it/264x174" alt="Signature Dishes 02">
                <h2>chicken for two roasted</h2>
                <p>There was a time when Chinese food in this country meant (Americanized) Cantonese food.</p>
                <p class="price">price: <span>$135</span></p>
              </div>
              <div class="feature-image">
                  <img src="http://placehold.it/264x174" alt="Signature Dishes 03">
                  <h2>black cod with miso</h2>
                  <p>There was a time when Chinese food in this country meant (Americanized) Cantonese food.</p>
                  <p class="price">price: <span>$135</span></p>
              </div>

               <div class="feature-image">
                    <img src="http://placehold.it/264x174" alt="Signature Dishes 01">
                    <h2>orange beef</h2>
                    <p>There was a time when Chinese food in this country meant (Americanized) Cantonese food.</p>
                    <p class="price">price: <span>$135</span></p>
              </div>
              <div class="feature-image">
                <img src="http://placehold.it/264x174" alt="Signature Dishes 02">
                <h2>chicken for two roasted</h2>
                <p>There was a time when Chinese food in this country meant (Americanized) Cantonese food.</p>
                <p class="price">price: <span>$135</span></p>
              </div>
           </div><!-- /.owl-carousel -->
            <div class="owl-controls">
             <a class="next"><i class="flaticon-arrow427"></i></a>
              <a class="prev"><i class="flaticon-arrow413"></i></a>
            </div>
          </div><!-- /.owl-wrap -->
         </div>
      </div>
    </div>
  </section>
  <!--====| End Signature Dishes End|====-->

  <!--====| Gallery Start |====-->
  <section class="galleri-wrapper section-padding">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>gallery</h1>
          <p class="slogan">fresh and healthy food available</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="row">
            <div class="col-xs-12 col-md-12">
            <div class="grid">
              <figure class="effect-cheff gallary-image">
                <img src="http://placehold.it/571x200" alt="Gallery 01"/>
                <figcaption>
                  <div class="gallary-hover-text">
                    <a class="yellow-bar fancybox" href="img/gallery-demo.jpg" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                  </div>
                </figcaption>
              </figure>
            </div>
            </div>
            <div class="col-xs-12 col-md-6">
            <div class="grid">
              <figure class="effect-cheff gallary-image">
                 <img src="http://placehold.it/269x200" alt="Gallery 02">
                  <figcaption>
                   <div class="gallary-hover-text">
                    <a class="yellow-bar video" href="http://www.youtube.com/v/d9yxuVjddzo?fs=1&amp;autoplay=1" ><i class="fa fa-play"></i></a>
                  <p>chicken seasoned with Youtube Video</p>
                  </div>
                  </figcaption>
              </figure>
            </div>
            <div class="grid">
              <figure class="effect-cheff gallary-image">
                <img src="http://placehold.it/269x200" alt="Gallery 03">
                <figcaption>
                  <div class="gallary-hover-text">
                    <a class="yellow-bar fancybox" href="img/gallery-demo.jpg" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                  </div>
                </figcaption>
              </figure>
            </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="grid">
              <figure class="effect-cheff gallary-image">
                 <img src="http://placehold.it/269x429" alt="Gallery 04">
                <figcaption class="figure-class">
                  <div class="gallary-hover-text">
                    <a class="yellow-bar fancybox" href="img/gallery-demo.jpg" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
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
                 <img src="http://placehold.it/269x200" alt="Gallery 05">
                <figcaption>
                  <div class="gallary-hover-text">
                    <a class="yellow-bar fancybox" href="img/gallery-demo.jpg" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                  </div>
                </figcaption>
              </figure>
            </div>
            <div class="grid">
              <figure class="effect-cheff gallary-image">
                 <img src="http://placehold.it/269x200" alt="Gallery 06">
                <figcaption>
                 <div class="gallary-hover-text">
                    <a class="yellow-bar fancybox" href="img/gallery-demo.jpg" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                  </div>
                </figcaption>
              </figure>
            </div>
            </div>
            <div class="col-xs-12 col-md-6">
              <div class="grid">
              <figure class="effect-cheff gallary-image">
                 <img src="http://placehold.it/269x429" alt="Gallery 07">
                <figcaption class="figure-class">
                  <div class="gallary-hover-text">
                    <a class="yellow-bar fancybox" href="img/gallery-demo.jpg" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                  </div>
                </figcaption>
              </figure>
            </div>
            </div>
            <div class="col-xs-12 col-md-12">
              <div class="grid">
              <figure class="effect-cheff gallary-image">
                 <img src="http://placehold.it/573x200" alt="Gallery 08">
                <figcaption>
                  <div class="gallary-hover-text">
                    <a class="yellow-bar fancybox" href="img/gallery-demo.jpg" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
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

@endsection
