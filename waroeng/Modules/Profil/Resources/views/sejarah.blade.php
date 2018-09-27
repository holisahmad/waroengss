@extends('home::layouts.master')

@section('isi')

    {{--  <link rel="author" type="text/plain" href="http://albertino.eti.br/humans.txt" />
    <link rel="Shortcut Icon" type="image/x-icon" href="http://cdn.albertino.eti.br/favicon.ico" />
    <link rel="icon" type="image/gif" href="http://cdn.albertino.eti.br/favicon.gif">  --}}
    <link rel="stylesheet" href="{{ asset('assets/css/css_tl/animate.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/css_tl/style_tl.css') }}">

  <section class="cd-timeline js-cd-timeline">
		<div class="cd-timeline__container">
			<div class="cd-timeline__block js-cd-block">
				<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
					<img src="{{ asset('assets/img/cd-icon-picture.svg') }}" alt="Picture">
				</div> <!-- cd-timeline__img -->

				<div class="cd-timeline__content js-cd-content">
					<h2>Waroeng SS Berdiri</h2>
					<p>Waroeng SS Pertama berupa tenda didirikan di depan Grha Sabha Pramana UGM </p>
					<span class="cd-timeline__date">20 Agustus 2002</span>
				</div> <!-- cd-timeline__content -->
			</div> <!-- cd-timeline__block -->

			<div class="cd-timeline__block js-cd-block">
				<div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
					<img src="{{ asset('assets/img/cd-icon-movie.svg') }}" alt="Movie">
				</div> <!-- cd-timeline__img -->

				<div class="cd-timeline__content js-cd-content">
					<h2>Title of section 2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
					<a href="#0" class="cd-timeline__read-more">Read more</a>
					<span class="cd-timeline__date">Jan 18</span>
				</div> <!-- cd-timeline__content -->
			</div> <!-- cd-timeline__block -->

			<div class="cd-timeline__block js-cd-block">
				<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
					<img src="{{ asset('assets/img/cd-icon-picture.svg') }}" alt="Picture">
				</div> <!-- cd-timeline__img -->

				<div class="cd-timeline__content js-cd-content">
					<h2>Title of section 3</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
					<a href="#0" class="cd-timeline__read-more">Read more</a>
					<span class="cd-timeline__date">Jan 24</span>
				</div> <!-- cd-timeline__content -->
			</div> <!-- cd-timeline__block -->

			<div class="cd-timeline__block js-cd-block">
				<div class="cd-timeline__img cd-timeline__img--location js-cd-img">
					<img src="{{ asset('assets/img/cd-icon-location.svg') }}" alt="Location">
				</div> <!-- cd-timeline__img -->

				<div class="cd-timeline__content js-cd-content">
					<h2>Title of section 4</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
					<a href="#0" class="cd-timeline__read-more">Read more</a>
					<span class="cd-timeline__date">Feb 14</span>
				</div> <!-- cd-timeline__content -->
			</div> <!-- cd-timeline__block -->

			<div class="cd-timeline__block js-cd-block">
				<div class="cd-timeline__img cd-timeline__img--location js-cd-img">
					<img src="{{ asset('assets/img/cd-icon-location.svg') }}" alt="Location">
				</div> <!-- cd-timeline__img -->

				<div class="cd-timeline__content js-cd-content">
					<h2>Title of section 5</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
					<a href="#0" class="cd-timeline__read-more">Read more</a>
					<span class="cd-timeline__date">Feb 18</span>
				</div> <!-- cd-timeline__content -->
			</div> <!-- cd-timeline__block -->

			<div class="cd-timeline__block js-cd-block">
				<div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
					<img src="{{ asset('assets/img/cd-icon-movie.svg') }}" alt="Movie">
				</div> <!-- cd-timeline__img -->

				<div class="cd-timeline__content js-cd-content">
					<h2>Final Section</h2>
					<p>This is the content of the last section</p>
					<span class="cd-timeline__date">Feb 26</span>
				</div> <!-- cd-timeline__content -->
			</div> <!-- cd-timeline__block -->
		</div>
	</section>

<!-- Resource JavaScript -->
  <script type="text/javascript" src="{{ asset('assets/js/js_tl/main.js') }}"></script>

@endsection
