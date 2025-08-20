@extends('frontend.layouts.main')

@section('content')
<div id="tt-content-wrap">

				
				<!-- ========================
				///// Begin page header /////
				============================= 
				* Use class "ph-full" to enable fullscreen size (no effect on small screens!).
				* Use class "ph-full-m" to enable fullscreen size on small screens.
				* Use class "ph-cap-sm", "ph-cap-lg", "ph-cap-xlg", "ph-cap-xxlg" "ph-cap-xxxlg" or "ph-cap-xxxxlg" to set caption size (no class = default size).
				* Use class "ph-center" to align the content to the center. 
				* Use class "ph-caption-parallax" to enable caption parallax.
				* Use class "ph-image-parallax" to enable image/video parallax (if image/video exist).
				* Use class "ph-bg-is-light" if needed, it makes the elements dark and more visible if you use a very light background image (effect only if the image/video exist).
				-->
				<div id="page-header" class="ph-full ph-full-m ph-cap-xxxxlg ph-center ph-image-parallax ph-caption-parallax">

					<!-- Begin page header image 
					============================= 
					* Use class "ph-image-grayscale" to enable black & white image.
					* Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5"). 
					-->
					<!-- <div class="ph-image ph-image-cover-1">
						<div class="ph-image-inner">
							<img src="assets/img/page-header/ph-1.jpg" alt="Image">
						</div>
					</div> -->
					<!-- End page header image -->

					<!-- Begin page header video 
					============================= 
					* Use class "ph-video-grayscale" to enable black & white video.
					* Use class "ph-video-cover-*" to set video overlay opacity. For example "ph-video-cover-2" or "ph-video-cover-2-5" (up to "ph-video-cover-9-5"). 
					* Use attribute "loop" in <video> tag to make the video play repeatedly.
					-->
					<!-- <div class="ph-video ph-video-cover-1">
						<div class="ph-video-inner">
							<video loop muted autoplay playsinline preload="metadata" poster="assets/vids/1920/video-1-1920.jpg">
								<source src="assets/vids/placeholder.mp4" data-src="assets/vids/1920/video-1-1920.mp4" type="video/mp4">
								<source src="assets/vids/placeholder.webm" data-src="assets/vids/1920/video-1-1920.webm" type="video/webm">
							</video>
						</div>
					</div> -->
					<!-- End page header video -->
						
					<div class="page-header-inner tt-wrap">

						<div class="ph-caption">
							<div class="ph-caption-inner">
								<h2 class="ph-caption-subtitle">My Work</h2>
								<h1 class="ph-caption-title">Projects</h1>
								<div class="ph-caption-description max-width-700">
									Discover a showcase of my creative journey that reflects my passion for crafting engaging digital experiences
								</div>
							</div> <!-- /.ph-caption-inner -->
						</div> <!-- /.ph-caption -->

					</div> <!-- /.page-header-inner -->

					<!-- Begin page header mask
					============================ 
					Note: ph-mask is basically a clone of caption. If you want to use a different text on the mask then it is a bit tricky to fit. For better results, make sure that it will be the same length as possible as the original caption text (especially the title). It should also contain the same number of lines. Sometimes this can be difficult to achieve, in which case we recommend simply using identical text to the original caption.
					-->
					<div class="page-header-inner ph-mask">
						<div class="ph-mask-inner tt-wrap">

							<div class="ph-caption">
								<div class="ph-caption-inner">
									<h2 class="ph-caption-subtitle">Portfolio</h2>
									<h1 class="ph-caption-title">Cool Stuff</h1>
									<div class="ph-caption-description max-width-700">
										Explore a collection of my creative journey, showcasing my passion for designing immersive digital experiences
									</div>
								</div> <!-- /.ph-caption-inner -->
							</div> <!-- /.ph-caption -->

						</div> <!-- /.ph-mask-inner -->
					</div>
					<!-- End page header mask -->


					<!-- Begin social buttons
					========================== -->
				@include('frontend.partials.socialLinks')
					<!-- End social buttons -->

					<!-- Begin scroll down
					=======================
					* Note: Circle shown only if class "ph-full" or "ph-full-m" is enabled in "page-header" but not on small screens! Otherwise, only the arrow icon will be shown to save space.
					-->
					<div class="tt-scroll-down">
						<!-- You can change "data-offset" attribute to set scroll top offset -->
						<a href="#tt-page-content" class="tt-scroll-down-inner tt-magnetic-item" data-offset="0">
							<div class="tt-scrd-icon"></div>
							<svg viewBox="0 0 500 500">
								<defs>
									<path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250" id="textcircle"></path>
								</defs>
								<text dy="30">
									<!-- If you change the text, you probably have to change the CSS parameters as well. In the "theme.css" file, find ".tt-scroll-down text {" and change the "font-size" and "letter-spacing" to fit the text correctly. -->
									<textPath xlink:href="#textcircle">Scroll to Explore - Scroll to Explore -</textPath>
								</text>
							</svg>
						</a> <!-- /.tt-scroll-down-inner -->
					</div>
					<!-- End scroll down -->

				</div>
				<!-- End page header -->


				<!-- *************************************
				*********** Begin page content *********** 
				************************************** -->
				<div id="tt-page-content">


					<!-- =======================
					///// Begin tt-section /////
					============================ 
					* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
					* You can use classes "border-top" and "border-bottom" if needed. 
					* Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
					-->
					<div class="tt-section">
						<div class="tt-section-inner">

							<!-- Begin stick portfolioy
							============================ -->
							<div class="tt-sticky-portfolio">
								
								<!-- Begin stick portfolioy item
								================================= 
								* Use class "stpi-bg-is-light" if needed, it makes the caption dark and more visible if you use a very light image.
								-->
								@foreach ($digital_designs as $digital_design)
								<a href="{{ route('digital-design.show', $digital_design->slug) }}" class="tt-stp-item" data-cursor="View<br>Project">
									<div class="tt-stp-item-inner">

										<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5"). Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
										<div class="tt-stp-item-image cover-opacity-2">
											<img src="{{ asset('uploads/digital-design/banner/'.$digital_design->banner_image) }}" class="tt-anim-zoomin" loading="lazy" alt="Image">
										</div> <!-- /.tt-stp-item-image -->

										<div class="tt-stp-item-caption">
											<h2 class="tt-stp-item-title">{{ $digital_design->title }}</h2>
											<div class="tt-stp-item-categories">
												<div class="tt-stp-item-category">{{ $digital_design->sub_title }}{{ $digital_design->banner_image }}</div>
												<!-- <div class="tt-stp-item-category">Varia</div> -->
											</div> <!-- /.tt-stp-item-categories -->
										</div> <!-- /.tt-stp-item-caption -->
									</div> <!-- /.tt-stp-item-inner -->
								</a>
								@endforeach
								<!-- End sticky portfolio item -->

	

							</div>
							<!-- End sticky portfolio -->

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->


					<!-- =======================
					///// Begin tt-section /////
					============================ 
					* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
					* You can use classes "border-top" and "border-bottom" if needed. 
					* Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
					-->
					@include('frontend.partials.lets-connect')
					<!-- End tt-section -->


				</div>
				<!-- End page content -->




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


@endsection