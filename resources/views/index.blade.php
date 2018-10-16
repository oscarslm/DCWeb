@extends('layouts.master')

@section('title', 'Inicio')

@push('css')
	<!-- Swiper CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/swiper.min.css') }}">
	<style type="text/css">
		html, body {
	      position: relative;
	      height: 100%;
	    }
	    body {
	      background: #eee;
	      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
	      font-size: 14px;
	      color:#000;
	      margin: 0;
	      padding: 0;
	    }
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
    	<p>This is my body content.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut elit ut leo lacinia ultrices ac et arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim dolor ullamcorper nisl congue, non pellentesque sem fermentum. Aliquam erat justo, tempus id mi at, pharetra congue neque. In hac habitasse platea dictumst. Aliquam sagittis tortor eu ultrices ultricies. Integer at tellus lobortis sem lacinia volutpat id eu nibh. Vivamus vehicula, neque non interdum posuere, enim orci rhoncus neque, eget finibus mauris quam non est. Aenean mollis lobortis dui, eget lacinia dolor tempus eu. Integer a nisi in nunc tristique finibus. Curabitur velit lacus, commodo in finibus eget, sagittis vel augue. Phasellus tincidunt volutpat orci eget consectetur.</p>
		<p>Mauris nisi mauris, congue accumsan posuere ac, suscipit commodo arcu. Nulla a hendrerit dui, et eleifend orci. Donec ut diam id ipsum venenatis tincidunt eu ultricies turpis. Nam eget sollicitudin mi. Suspendisse dolor nunc, consectetur condimentum lacus at, tincidunt consectetur orci. Morbi mauris nisl, tempor vitae quam a, convallis sodales nisi. Ut erat augue, feugiat quis ante eget, congue malesuada enim. In hac habitasse platea dictumst. Cras condimentum convallis lectus. Nullam tellus turpis, bibendum et placerat eu, consectetur nec enim.</p>
		<p>Phasellus consectetur condimentum nisi vitae eleifend. Ut eu tincidunt nibh, eu interdum mi. Proin aliquet faucibus augue. Nunc luctus ultricies massa, vel pulvinar turpis cursus et. Cras condimentum, ligula a mollis malesuada, turpis justo fermentum purus, id venenatis metus lorem in tellus. Phasellus sit amet faucibus massa. Vivamus ultricies nisi et dignissim laoreet. Aenean sed tortor elementum felis consequat egestas sit amet vel ante. Morbi at lobortis metus. Aliquam enim purus, finibus id rhoncus ut, volutpat at sem. Pellentesque est enim, bibendum ut tempus eu, tincidunt eu dui. Etiam maximus, sapien eget volutpat viverra, sem sem accumsan leo, at convallis turpis mi in lacus. Praesent sed pharetra nulla. Maecenas est justo, maximus sit amet consectetur et, rutrum vel lorem. Integer ornare dolor quis arcu laoreet, in ullamcorper lectus condimentum. Sed tortor nisl, tempor eget pharetra eu, porttitor faucibus ligula.</p>
		<p>Aenean placerat, libero et dictum aliquet, purus eros aliquet purus, quis vestibulum neque dui at lorem. Suspendisse massa arcu, pellentesque eget rutrum at, blandit ac mauris. Cras nec luctus ex. Vivamus nec consectetur augue. Donec vel lobortis metus. Ut in sapien libero. Aenean rutrum sem et tristique tempor. Vestibulum scelerisque laoreet leo. Quisque erat sapien, cursus maximus nulla vitae, porttitor ornare mi. Sed vitae metus fringilla, ullamcorper lectus id, accumsan nisi. Integer auctor consectetur lectus vitae pellentesque. Pellentesque sit amet luctus ante, eget aliquam libero.</p>
		<p>Nulla et tortor hendrerit, pharetra neque sed, pulvinar odio. Quisque eleifend molestie ipsum, non dictum neque faucibus in. Fusce gravida quam nibh, vitae vehicula magna posuere sit amet. Duis sollicitudin massa ante. Nam id turpis pharetra, ornare ante vitae, tincidunt velit. Integer dolor justo, eleifend eu lorem non, semper scelerisque purus. Sed a pretium erat, vel venenatis velit. Aliquam non turpis tellus. Suspendisse dui libero, lacinia at risus eu, varius porttitor arcu.</p>
		<p>Aliquam quis malesuada ante. Aenean sollicitudin dignissim interdum. Fusce vestibulum ullamcorper tempor. Cras sed lacus turpis. Nam vel placerat nibh. Quisque nec ante id risus eleifend venenatis. Donec eu viverra sapien, egestas consequat enim. Proin sed euismod dolor, ac sodales ex. Curabitur a nunc a elit tincidunt faucibus nec bibendum purus. Suspendisse rutrum fermentum molestie. Sed nec orci in metus varius varius vel quis lacus. Maecenas fringilla ipsum quam, molestie sodales turpis sagittis at. Nam fringilla quam id ante tincidunt, at dignissim neque tempor.</p>
		<p>Donec ut auctor mauris. Maecenas at consequat arcu. Integer ornare velit id sapien blandit tempor. Aenean ullamcorper urna nec porta viverra. Sed malesuada sollicitudin ligula, et varius tellus. Donec id maximus tellus. Aliquam eu blandit nibh. Aenean gravida libero sit amet dolor laoreet pretium. Donec vestibulum scelerisque nibh ac tincidunt. Vestibulum vestibulum orci sit amet risus egestas vehicula. Mauris pulvinar sed ante in condimentum. Aliquam ac rutrum nulla. Donec nisi augue, congue id pellentesque vitae, sagittis sit amet ante. Etiam dictum pulvinar odio, et sagittis ligula finibus eu.</p>
		<p>Suspendisse feugiat congue consectetur. Nulla in egestas lectus, at imperdiet turpis. Sed eu dolor vel massa aliquet commodo. Cras eu tortor eget urna finibus malesuada. Donec pellentesque enim in ligula facilisis, nec vulputate purus tempus. Phasellus condimentum orci vel eros imperdiet euismod. Aenean et justo pulvinar, semper metus sed, pellentesque sapien. Phasellus massa sem, egestas in auctor at, posuere bibendum ex.</p>
		<p>Morbi sed libero quis mi ornare pretium. Aliquam ligula nisi, fringilla sed tincidunt maximus, tincidunt quis ex. Donec pharetra eu sapien luctus viverra. In posuere arcu a imperdiet elementum. Sed pellentesque nunc vel pellentesque tincidunt. Mauris euismod porttitor varius. In hac habitasse platea dictumst. Integer elementum imperdiet malesuada. Nulla tempus, elit ut molestie egestas, nisl velit venenatis nunc, vel tincidunt ante velit a purus. Cras sit amet quam sit amet nulla pharetra tempor at ac quam. Sed ac metus suscipit, ullamcorper neque vitae, accumsan nunc.</p>
		<p>Sed porta dignissim nunc eu tincidunt. In hac habitasse platea dictumst. Nunc in purus scelerisque risus fermentum volutpat et in felis. Nunc consequat elit risus, viverra eleifend tortor imperdiet eu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras imperdiet risus sed dignissim tincidunt. Aliquam in lobortis leo. Praesent nec viverra sem. Aenean non libero feugiat odio viverra euismod. Nullam nibh lectus, congue at risus ac, imperdiet tempus urna. Integer at sodales nulla. Sed non ligula nisi. Praesent tellus lectus, accumsan ut luctus vitae, ultrices a est.</p>
		<p>Donec leo leo, suscipit sed fringilla sit amet, molestie sit amet magna. Etiam sit amet feugiat enim. Donec feugiat iaculis sapien at feugiat. Vestibulum dignissim nisi ut ante placerat, a molestie risus bibendum. Phasellus nec fermentum ante, ac commodo leo. Nulla purus justo, faucibus vel tincidunt sed, luctus ut metus. Pellentesque rhoncus fringilla risus in varius. In at dui ultrices, sollicitudin erat varius, hendrerit nunc. Praesent suscipit malesuada odio, vel ultrices orci imperdiet eget. In hac habitasse platea dictumst.</p>
		<p>Praesent in orci at felis lobortis bibendum nec at ante. Fusce malesuada rhoncus egestas. Sed suscipit vulputate tempus. Fusce tincidunt feugiat tellus, sit amet tempor nulla facilisis congue. Sed vitae leo ac augue pretium egestas id ut quam. Donec elit quam, blandit sit amet porttitor id, suscipit non ex. Donec molestie, neque nec interdum pharetra, mauris tortor lacinia eros, in dapibus neque dui vel ex.</p>
		<p>Cras vehicula venenatis magna. Quisque aliquam sodales urna, quis accumsan est pulvinar nec. Nullam luctus pellentesque aliquam. Fusce non erat nec mi pulvinar sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In sit amet turpis at ante efficitur volutpat. Duis nisi nibh, fermentum vel dictum nec, finibus nec eros. Nam mi ipsum, consequat a pharetra eget, commodo sagittis ipsum. Nulla fringilla dolor egestas, aliquam leo at, placerat nibh. Maecenas porta, sem accumsan egestas dignissim, erat felis sagittis sapien, in imperdiet neque diam quis libero. Ut gravida viverra lacus, ut malesuada arcu auctor ut. Donec malesuada vulputate nibh vel sagittis. Sed maximus condimentum volutpat. Quisque non faucibus ipsum, ac ultrices dui. Duis rhoncus id lacus nec interdum.</p>
		<p>Donec volutpat porta justo vel porttitor. In velit libero, tempor condimentum porttitor rutrum, suscipit in nisi. Sed eget blandit sem. Duis sagittis orci nec felis venenatis ornare. Quisque semper cursus lectus et egestas. Quisque consequat tellus ut facilisis feugiat. Etiam vestibulum, metus eget rutrum aliquet, tellus ligula feugiat est, ac porta libero lectus ut lacus. Donec consequat semper justo vel dictum. Nunc tincidunt orci sit amet ante volutpat iaculis. Aenean et turpis neque. Donec tincidunt mauris nisl. Donec imperdiet purus eu commodo scelerisque. Nunc rutrum ligula nulla, quis varius ipsum efficitur eu.</p>
		<p>Vestibulum feugiat risus at lectus eleifend, ut accumsan neque fringilla. Morbi aliquam ex sit amet dolor pellentesque, in dignissim magna viverra. Nunc sed urna sed tellus blandit porta. Aliquam semper eros non iaculis viverra. Donec convallis cursus vulputate. Vestibulum euismod auctor pulvinar. Donec auctor vehicula arcu, quis aliquet metus aliquet sit amet. Sed rhoncus non nisi nec vestibulum. Proin nec leo consectetur, eleifend odio vel, consequat sapien. Pellentesque rhoncus sem libero, tempor faucibus ante facilisis id. Vivamus imperdiet ipsum sed sem fringilla sollicitudin. Donec gravida massa id semper cursus. Pellentesque fermentum blandit libero sed interdum. Etiam mollis lectus sed congue elementum. Sed ac commodo orci, nec interdum sapien.</p>
		<p>Vestibulum feugiat risus at lectus eleifend, ut accumsan neque fringilla. Morbi aliquam ex sit amet dolor pellentesque, in dignissim magna viverra. Nunc sed urna sed tellus blandit porta. Aliquam semper eros non iaculis viverra. Donec convallis cursus vulputate. Vestibulum euismod auctor pulvinar. Donec auctor vehicula arcu, quis aliquet metus aliquet sit amet. Sed rhoncus non nisi nec vestibulum. Proin nec leo consectetur, eleifend odio vel, consequat sapien. Pellentesque rhoncus sem libero, tempor faucibus ante facilisis id. Vivamus imperdiet ipsum sed sem fringilla sollicitudin. Donec gravida massa id semper cursus. Pellentesque fermentum blandit libero sed interdum. Etiam mollis lectus sed congue elementum. Sed ac commodo orci, nec interdum sapien.</p>
		<p>Vestibulum feugiat risus at lectus eleifend, ut accumsan neque fringilla. Morbi aliquam ex sit amet dolor pellentesque, in dignissim magna viverra. Nunc sed urna sed tellus blandit porta. Aliquam semper eros non iaculis viverra. Donec convallis cursus vulputate. Vestibulum euismod auctor pulvinar. Donec auctor vehicula arcu, quis aliquet metus aliquet sit amet. Sed rhoncus non nisi nec vestibulum. Proin nec leo consectetur, eleifend odio vel, consequat sapien. Pellentesque rhoncus sem libero, tempor faucibus ante facilisis id. Vivamus imperdiet ipsum sed sem fringilla sollicitudin. Donec gravida massa id semper cursus. Pellentesque fermentum blandit libero sed interdum. Etiam mollis lectus sed congue elementum. Sed ac commodo orci, nec interdum sapien.</p>
		<p>Vestibulum feugiat risus at lectus eleifend, ut accumsan neque fringilla. Morbi aliquam ex sit amet dolor pellentesque, in dignissim magna viverra. Nunc sed urna sed tellus blandit porta. Aliquam semper eros non iaculis viverra. Donec convallis cursus vulputate. Vestibulum euismod auctor pulvinar. Donec auctor vehicula arcu, quis aliquet metus aliquet sit amet. Sed rhoncus non nisi nec vestibulum. Proin nec leo consectetur, eleifend odio vel, consequat sapien. Pellentesque rhoncus sem libero, tempor faucibus ante facilisis id. Vivamus imperdiet ipsum sed sem fringilla sollicitudin. Donec gravida massa id semper cursus. Pellentesque fermentum blandit libero sed interdum. Etiam mollis lectus sed congue elementum. Sed ac commodo orci, nec interdum sapien.</p>
		<p>Vestibulum feugiat risus at lectus eleifend, ut accumsan neque fringilla. Morbi aliquam ex sit amet dolor pellentesque, in dignissim magna viverra. Nunc sed urna sed tellus blandit porta. Aliquam semper eros non iaculis viverra. Donec convallis cursus vulputate. Vestibulum euismod auctor pulvinar. Donec auctor vehicula arcu, quis aliquet metus aliquet sit amet. Sed rhoncus non nisi nec vestibulum. Proin nec leo consectetur, eleifend odio vel, consequat sapien. Pellentesque rhoncus sem libero, tempor faucibus ante facilisis id. Vivamus imperdiet ipsum sed sem fringilla sollicitudin. Donec gravida massa id semper cursus. Pellentesque fermentum blandit libero sed interdum. Etiam mollis lectus sed congue elementum. Sed ac commodo orci, nec interdum sapien.</p>
		<p>Vestibulum feugiat risus at lectus eleifend, ut accumsan neque fringilla. Morbi aliquam ex sit amet dolor pellentesque, in dignissim magna viverra. Nunc sed urna sed tellus blandit porta. Aliquam semper eros non iaculis viverra. Donec convallis cursus vulputate. Vestibulum euismod auctor pulvinar. Donec auctor vehicula arcu, quis aliquet metus aliquet sit amet. Sed rhoncus non nisi nec vestibulum. Proin nec leo consectetur, eleifend odio vel, consequat sapien. Pellentesque rhoncus sem libero, tempor faucibus ante facilisis id. Vivamus imperdiet ipsum sed sem fringilla sollicitudin. Donec gravida massa id semper cursus. Pellentesque fermentum blandit libero sed interdum. Etiam mollis lectus sed congue elementum. Sed ac commodo orci, nec interdum sapien.</p>
		<p>Vestibulum feugiat risus at lectus eleifend, ut accumsan neque fringilla. Morbi aliquam ex sit amet dolor pellentesque, in dignissim magna viverra. Nunc sed urna sed tellus blandit porta. Aliquam semper eros non iaculis viverra. Donec convallis cursus vulputate. Vestibulum euismod auctor pulvinar. Donec auctor vehicula arcu, quis aliquet metus aliquet sit amet. Sed rhoncus non nisi nec vestibulum. Proin nec leo consectetur, eleifend odio vel, consequat sapien. Pellentesque rhoncus sem libero, tempor faucibus ante facilisis id. Vivamus imperdiet ipsum sed sem fringilla sollicitudin. Donec gravida massa id semper cursus. Pellentesque fermentum blandit libero sed interdum. Etiam mollis lectus sed congue elementum. Sed ac commodo orci, nec interdum sapien.</p>
		<p>Vestibulum feugiat risus at lectus eleifend, ut accumsan neque fringilla. Morbi aliquam ex sit amet dolor pellentesque, in dignissim magna viverra. Nunc sed urna sed tellus blandit porta. Aliquam semper eros non iaculis viverra. Donec convallis cursus vulputate. Vestibulum euismod auctor pulvinar. Donec auctor vehicula arcu, quis aliquet metus aliquet sit amet. Sed rhoncus non nisi nec vestibulum. Proin nec leo consectetur, eleifend odio vel, consequat sapien. Pellentesque rhoncus sem libero, tempor faucibus ante facilisis id. Vivamus imperdiet ipsum sed sem fringilla sollicitudin. Donec gravida massa id semper cursus. Pellentesque fermentum blandit libero sed interdum. Etiam mollis lectus sed congue elementum. Sed ac commodo orci, nec interdum sapien.</p>
		<p>Vestibulum feugiat risus at lectus eleifend, ut accumsan neque fringilla. Morbi aliquam ex sit amet dolor pellentesque, in dignissim magna viverra. Nunc sed urna sed tellus blandit porta. Aliquam semper eros non iaculis viverra. Donec convallis cursus vulputate. Vestibulum euismod auctor pulvinar. Donec auctor vehicula arcu, quis aliquet metus aliquet sit amet. Sed rhoncus non nisi nec vestibulum. Proin nec leo consectetur, eleifend odio vel, consequat sapien. Pellentesque rhoncus sem libero, tempor faucibus ante facilisis id. Vivamus imperdiet ipsum sed sem fringilla sollicitudin. Donec gravida massa id semper cursus. Pellentesque fermentum blandit libero sed interdum. Etiam mollis lectus sed congue elementum. Sed ac commodo orci, nec interdum sapien.</p>
		<p>Vestibulum feugiat risus at lectus eleifend, ut accumsan neque fringilla. Morbi aliquam ex sit amet dolor pellentesque, in dignissim magna viverra. Nunc sed urna sed tellus blandit porta. Aliquam semper eros non iaculis viverra. Donec convallis cursus vulputate. Vestibulum euismod auctor pulvinar. Donec auctor vehicula arcu, quis aliquet metus aliquet sit amet. Sed rhoncus non nisi nec vestibulum. Proin nec leo consectetur, eleifend odio vel, consequat sapien. Pellentesque rhoncus sem libero, tempor faucibus ante facilisis id. Vivamus imperdiet ipsum sed sem fringilla sollicitudin. Donec gravida massa id semper cursus. Pellentesque fermentum blandit libero sed interdum. Etiam mollis lectus sed congue elementum. Sed ac commodo orci, nec interdum sapien.</p>
		<p>Vestibulum feugiat risus at lectus eleifend, ut accumsan neque fringilla. Morbi aliquam ex sit amet dolor pellentesque, in dignissim magna viverra. Nunc sed urna sed tellus blandit porta. Aliquam semper eros non iaculis viverra. Donec convallis cursus vulputate. Vestibulum euismod auctor pulvinar. Donec auctor vehicula arcu, quis aliquet metus aliquet sit amet. Sed rhoncus non nisi nec vestibulum. Proin nec leo consectetur, eleifend odio vel, consequat sapien. Pellentesque rhoncus sem libero, tempor faucibus ante facilisis id. Vivamus imperdiet ipsum sed sem fringilla sollicitudin. Donec gravida massa id semper cursus. Pellentesque fermentum blandit libero sed interdum. Etiam mollis lectus sed congue elementum. Sed ac commodo orci, nec interdum sapien.</p>
		<p>Vestibulum feugiat risus at lectus eleifend, ut accumsan neque fringilla. Morbi aliquam ex sit amet dolor pellentesque, in dignissim magna viverra. Nunc sed urna sed tellus blandit porta. Aliquam semper eros non iaculis viverra. Donec convallis cursus vulputate. Vestibulum euismod auctor pulvinar. Donec auctor vehicula arcu, quis aliquet metus aliquet sit amet. Sed rhoncus non nisi nec vestibulum. Proin nec leo consectetur, eleifend odio vel, consequat sapien. Pellentesque rhoncus sem libero, tempor faucibus ante facilisis id. Vivamus imperdiet ipsum sed sem fringilla sollicitudin. Donec gravida massa id semper cursus. Pellentesque fermentum blandit libero sed interdum. Etiam mollis lectus sed congue elementum. Sed ac commodo orci, nec interdum sapien.</p>
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
