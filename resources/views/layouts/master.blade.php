@php
	$detect = new \Mobile_Detect;
@endphp
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<!-- SEO -->
    <meta name="description" content="" />
    <meta name="keywords" content="diseño de páginas web, diseño de sitios web, páginas web, diseño web, publicidad digital, seo, dcweb, diseño creativo en la web" />
    <meta name="author" content="DCWeb" />

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    @stack('css')
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">

	<title>@yield('title') | {{ config('app.name') }}</title>
</head>
<body>

	<div id="wrapper">

		<!-- Header
		=================================-->
		@include('includes.header')

		<!-- Slider
		=================================-->
		@yield('slider')

		<!-- Page-title 
		=================================-->
		@yield('page-title')
		
		<section id="content">

			<div class="content-wrap">
				
				@yield('content')

			</div><!--.content-wrap-->
			
		</section>

		<!-- Footer
		=================================-->
		@include('includes.footer')

	</div><!--#wrapper-->
	
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Parrallax CSS -->
	<script type="text/javascript" src="{{ asset('js/parallax.min.js') }}"></script>

    <!-- Functions JS -->
    <script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>

    @stack('js')
</body>
</html>