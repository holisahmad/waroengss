@extends('layouts.fronted')
@section('title', 'Daftar Kontak dan Alamat Waroeng SS')
@section('content')

<style>
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

  <!--===| About Us Banner Start|===-->
  <section class="banner-wrapper about-banner" style=" background: url('{{ url('assets/img/1600x339.png')}}'); padding: 140px 0; background-size: cover; background-position: center center;">
  {{--  <section class="banner-wrapper about-banner" style=" background: url('{{ url('assets/img/header_kontak.jpg')}}'); padding: 140px 0; background-size: cover; background-position: center center;-moz-box-shadow: inset 0 0 1vh 1vh white; -webkit-box-shadow: inset 0 0 1vh 1vh white; box-shadow: inset 0 0 1vh 1vh white;">  --}}
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>Kontak</h1>
          <p>Waroeng Spesial Sambal SS</p>
        </div>
      </div>
    </div>
  </section>

<div class="col-md-12">
	<div class="row">
		<div class="col-md-6">

		</div>
	</div>
</div>


@endsection
