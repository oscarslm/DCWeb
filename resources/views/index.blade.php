@extends('layouts.master')

@section('title', 'Inicio')

@push('css')
	<!-- Swiper CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/swiper.min.css') }}">
	<style type="text/css">
	    .swiper-container {
	      width: 100%;
	      height: 100%;
	    }
	    .swiper-slide {
	      text-align: center;
	      font-size: 18px;
	      background: #fff;
	      /* Center slide text vertically */
	      display: -webkit-box;
	      display: -ms-flexbox;
	      display: -webkit-flex;
	      display: flex;
	      -webkit-box-pack: center;
	      -ms-flex-pack: center;
	      -webkit-justify-content: center;
	      justify-content: center;
	      -webkit-box-align: center;
	      -ms-flex-align: center;
	      -webkit-align-items: center;
	      align-items: center;
	    }
	</style>
@endpush

@section('slider')
	<section id="slider">
		<!-- Swiper -->
		<div class="swiper-container">
		    <div class="swiper-wrapper">
		    	<div class="swiper-slide" style="background-image:url('{{ asset('img/coding-html5.jpg') }}')">
		    		<div class="container">
		    			<h1 class="text-center">Diseño web</h1>
						<h4 class="text-center">Somos especialistas en diseño web, diseño de páginas web y posicionamiento SEO en México.</h4>
		    		</div>
		    	</div><!--.swiper-wrapper-->
		    	<div class="swiper-slide" style="background-image:url('{{ asset('img/coding-html5.jpg') }}')">
		    		Slide 2
		    	</div><!--.swiper-wrapper-->
		    	<div class="swiper-slide" style="background-image:url('{{ asset('img/coding-html5.jpg') }}')">
		    		Slide 3
		    	</div><!--.swiper-wrapper-->
		    	<div class="swiper-slide" style="background-image:url('{{ asset('img/coding-html5.jpg') }}')">
		    		Slide 4
		    	</div><!--.swiper-wrapper-->
		    	<div class="swiper-slide" style="background-image:url('{{ asset('img/coding-html5.jpg') }}')">
		    		Slide 5
		    	</div><!--.swiper-wrapper-->
		    </div><!--.swiper-wrapper-->
		    <!-- Add Pagination -->
    		<div class="swiper-pagination"></div>
		</div><!--.swiper-container-->
	</section>
@endsection

@section('content')
    <div class="container">
    	
	</div><!--.container-->
@endsection

@push('js')
	<!-- Parrallax CSS -->
	<script type="text/javascript" src="{{ asset('js/parallax.min.js') }}"></script>
	<!-- Swiper CSS -->
	<script type="text/javascript" src="{{ asset('js/swiper.min.js') }}"></script>
	<!-- Initialize Swiper -->
  	<script>
    	var swiper = new Swiper('.swiper-container', {
	      pagination: {
	        el: '.swiper-pagination',
	        dynamicBullets: true,
	      },
	    });
  	</script>
@endpush
