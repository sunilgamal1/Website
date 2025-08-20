<!DOCTYPE html>

<html lang="en">


<!-- Header Links -->
@include('frontend.layouts.layoutHeader')


<!-- ===========
	///// Body /////
	================
	* Use class "tt-transition" to enable page transitions.
	* Use class "tt-magic-cursor" to enable magic cursor.
	* Use class "tt-noise" to enable the background noise effect on the whole page. 
	* Use class "tt-smooth-scroll" to enable page smooth scroll. 
	* Use class "tt-lightmode-default" to enable light style by default (you must clear your browser's cookies and cache first!).
	* Note: there may be classes that are specific to this page only!
	-->

<body id="body" class="tt-transition tt-noise tt-magic-cursor tt-smooth-scroll">


	<!-- *************************************
		*********** Begin body inner ************* 
		************************************** -->
	<main id="body-inner">


		<!-- Begin page transition (do not remove!!!) 
			=========================== -->
		<div id="tt-page-transition">
			<div class="tt-ptr-overlay-top tt-noise"></div>
			<div class="tt-ptr-overlay-bottom tt-noise"></div>
			<div class="tt-ptr-preloader">
				<div class="tt-ptr-prel-content">
					<!-- Hint: You may need to change the img height and opacity to match your logo type. You can do this from the "theme.css" file (find: ".tt-ptr-prel-image"). -->
					<!-- <img src="{{ asset('assets/img/logo-light.png') }}" class="tt-ptr-prel-image" alt="Logo">
					<img src="{{ asset('assets/img/logo-dark.png') }}" class="tt-ptr-prel-image" alt="Logo"> -->

					<!-- new logo replace this -->
					<img src="{{ asset('config/images/logo.png') }}" class="tt-ptr-prel-image" alt="Logo">
				</div> <!-- /.tt-ptr-prel-content -->
			</div> <!-- /.tt-ptr-preloader -->
		</div>
		<!-- End page transition -->

		<!-- Begin magic cursor 
			======================== -->
		<div id="magic-cursor">
			<div id="ball"></div>
		</div>
		<!-- End magic cursor -->

	
        <!-- Header -->
        @include('frontend.partials.header')
		<!-- End header -->


		<!-- *************************************
			*********** Begin content wrap *********** 
			************************************** -->
		<div id="tt-content-wrap">


			@yield('content')


			@include('frontend.partials.footer')


			<!-- Begin scroll to top button
				================================ -->
			<a href="#" class="tt-scroll-to-top">
				<div class="tt-stt-progress tt-magnetic-item">
					<svg class="tt-stt-progress-circle" width="100%" height="100%" viewBox="-1 -1 102 102">
						<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
					</svg>
				</div> <!-- /.tt-stt-progress -->
			</a>
			<!-- End scroll to top button -->

		</div>
		<!-- End content wrap -->


	</main>
	<!-- End body inner -->




	@include('frontend.layouts.layoutFooter')



</body>


</html>