
	@if(!$detect->isMobile())
		<header id="header">
		    <div class="container-fluid clearfix">
		        <h1 id="logo">DCWeb</h1>
		        <nav>
		            @include('includes.menu')
		        </nav>
		    </div><!--.container-fluid-->
		</header>
	@else
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
		  	<a class="navbar-brand" href="{{ URL('/') }}">DCWeb</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav">
			    	@include('includes.menu')
			    </div><!--.navbar-nav-->
			</div><!--.collapse-->
		</nav>
	@endif

@push('js')
	@if($detect->isMobile())
	<script type="text/javascript">
		$("div.navbar-nav a").addClass("nav-item");
		$("div.navbar-nav a").addClass("nav-link");
	</script>
	@endif
@endpush
