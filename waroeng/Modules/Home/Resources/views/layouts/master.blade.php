@extends('layouts.fronted')
@section('title', $title)
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

<script type="text/javascript" src="{{ asset('assets/loadmore/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/loadmore/bootstrap.min.js') }}"></script>


  <!--===| About Us Banner Start|===-->
  <section class="banner-wrapper about-banner" style=" background: url('{{ url('assets/img/banner.jpg')}}'); padding: 140px 0; background-size: cover; background-position: center center;">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>{{ $judul }}</h1>
          <p>{{ $subjudul }}</p>
        </div>
      </div>
    </div>
  </section>

@yield('isi')

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
