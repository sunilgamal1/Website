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
				<div id="page-header" class="ph-full ph-full-m ph-cap-xlg ph-center ph-image-parallax ph-caption-parallax">

					<!-- Begin page header image 
					============================= 
					* Use class "ph-image-grayscale" to enable black & white image.
					* Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5"). 
					-->
					<div class="ph-image ph-image-cover-2">
						<div class="ph-image-inner">
							<img src="{{ asset('uploads/digital-design/banner/'.$digital_design->banner_image) }}" alt="Image">
						</div>
					</div>
					<!-- End page header image -->

					<!-- Begin page header video 
					============================= 
					* Use class "ph-video-grayscale" to enable black & white video.
					* Use class "ph-video-cover-*" to set video overlay opacity. For example "ph-video-cover-2" or "ph-video-cover-2-5" (up to "ph-video-cover-9-5"). 
					* Use attribute "loop" in <video> tag to make the video play repeatedly.
					-->
					<!-- <div class="ph-video ph-video-cover-1">
						<div class="ph-video-inner">
							<video loop muted autoplay playsinline preload="metadata" poster="{{ asset('assets/vids/1920/video-1-1920.jpg') }}">
								<source src="{{ asset('assets/vids/placeholder.mp4') }}" data-src="{{ asset('assets/vids/1920/video-1-1920.mp4') }}" type="video/mp4">
								<source src="{{ asset('assets/vids/placeholder.webm') }}" data-src="{{ asset('assets/vids/1920/video-1-1920.webm') }}" type="video/webm">
							</video>
						</div>
					</div> -->
					<!-- End page header video -->
						
					<div class="page-header-inner tt-wrap">
						
						<div class="ph-caption">
							<div class="ph-caption-inner">
								<h1 class="ph-caption-title">{{ $digital_design->title }}</h1>
								@if($digital_design->sub_title)
								<div class="ph-caption-categories">
									<div class="ph-caption-category">{{ $digital_design->sub_title }}</div>
									<!-- <div class="ph-caption-category">Varia</div> -->
								</div> <!-- /.ph-categories -->
								@endif
							</div> <!-- /.ph-caption-inner -->
						</div> <!-- /.ph-caption -->

					</div> <!-- /.page-header-inner -->


					<!-- Begin page header share (share buttons are for design purposes only!) 
					============================= -->
					<div class="ph-share">
						<div class="ph-share-inner">
							<div class="ph-share-trigger">
								<div class="ph-share-text">Share</div>
								<div class="ph-share-icon"><i class="fas fa-share"></i></div>
							</div> <!-- /.ph-share-trigger -->
							<div class="ph-share-buttons">
								<ul>
									<li><a href="#" class="tt-magnetic-item" title="Share on Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="#" class="tt-magnetic-item" title="Share on X"><i class="fa-brands fa-x-twitter"></i></a></li>
									<li><a href="#" class="tt-magnetic-item" title="Share on Pinterest"><i class="fa-brands fa-pinterest"></i></a></li>
								</ul>
							</div> <!-- /.ph-share-buttons -->
						</div> <!-- /.ph-share-inner -->
					</div>
					<!-- End page header share -->

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

					@if($digital_design->description || $digital_design->client || $digital_design->year || $digital_design->role || $digital_design->url_title)
					<!-- =======================
					///// Begin tt-section /////
					============================ 
					* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
					* You can use classes "border-top" and "border-bottom" if needed. 
					* Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
					-->
					<div class="tt-section padding-top-80 padding-top-xlg-160">
						<div class="tt-section-inner tt-wrap">
							
							<div class="tt-row">
								<div class="tt-col-lg-4 padding-right-lg-5-p">

									<!-- Begin tt-Heading 
									====================== 
									* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
									* Use class "tt-heading-center" to align tt-Heading to center.
									* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
									* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
									-->
									<div class="tt-heading tt-heading-xlg margin-bottom-40">
										<!-- <h3 class="tt-heading-subtitle tt-text-reveal">Subtitle</h3> -->
										<h2 class="tt-heading-title tt-text-reveal">About the Project</h2> <!-- You can use <br> to break a text line if needed -->
									</div>
									<!-- End tt-Heading -->

								</div> <!-- /.tt-col -->

								<div class="tt-col-lg-8">
									@if($digital_design->description)
									<div class="tt-anim-fadeinup">
										<p>{!! $digital_design->description !!}</p>
									</div>
									@endif

									@if($digital_design->client || $digital_design->year || $digital_design->role || $digital_design->url_title)
									<!-- Begin project info list
									============================= 
									* Use class "tt-pil-inline" to enable list inline (useful depending on the layout. No effect on small screens!). 
									-->
									<div class="tt-project-info-list tt-pil-inline tt-anim-fadeinup margin-top-40">
										<ul>
											@if($digital_design->client)
											<li>
												<div class="pi-list-heading">Client</div>
												<div class="pi-list-cont">{{ $digital_design->client }}</div>
											</li>
											@endif
											@if($digital_design->year)
											<li>
												<div class="pi-list-heading">Year</div>
												<div class="pi-list-cont">{{ $digital_design->year }}</div>
											</li>
											@endif
											@if($digital_design->role)
											<li>
												<div class="pi-list-heading">Role</div>
												<div class="pi-list-cont">{{ $digital_design->role }}</div> <!-- Describe in a few words -->
											</li>
											@endif
											@if($digital_design->url_title && $digital_design->url_link)
											<li>
												<div class="pi-list-heading">{{ $digital_design->url_title }}</div>
												<div class="pi-list-cont"><a href="{{ $digital_design->url_link }}" target="_blank" rel="noopener">Visit site<span class="pi-list-icon"><i class="fas fa-arrow-right"></i></span></a></div>
											</li>
											@endif
										</ul>
									</div>
									<!-- End project info list -->
									@endif

								</div> <!-- /.tt-col -->
							</div> <!-- /.tt-row -->

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->
					@endif

					@if($digital_design->banner_image_2)
					<!-- =======================
					///// Begin tt-section /////
					============================ 
					* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
					* You can use classes "border-top" and "border-bottom" if needed. 
					* Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
					-->
					<div class="tt-section">
						<div class="tt-section-inner">

							<!-- Begin tt-image
							====================
							* Use class "tti-border-radius" to enable image border radius.
							* Use class "tti-landscape" or "tti-portrait" to enable image landscape or portrait mode (no effect on small screens!).
							* Use class "tti-fixed-height" to enable image fixed height. 80% of screen height. Useful for full width layout (no effect on small screens!).
							* Use class "tti-full-height" to enable image full height. 100% of screen height. Useful for full width layout (no effect on small screens!).
							* Use class "tt-image-parallax" on <img> tag to enable the parallax effect.
							* Use class "margin-bottom-*" to enable bottom margins. For example "margin-bottom-40". More info about helper classes can be found in the file "helper.css".
							* NOTE-1: No above classes = image default size and style.
							* NOTE-2: Please read the template documentation for instructions to use "tt-image" with lightbox.
							-->
							<div class="tt-image tti-fixed-height">
								<figure>
									<img src="{{ asset('uploads/digital-design/banner/'.$digital_design->banner_image_2) }}" class="tt-image-parallax tt-anim-zoomin" loading="lazy" alt="Image">
									@if($digital_design->banner_image_2_name)
									<figcaption>
										{{ $digital_design->banner_image_2_name }}
									</figcaption>
									@endif
								</figure>
							</div> 
							<!-- End tt-image -->

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->
					@endif

					@if($digital_design->section_title_1 || $digital_design->section_description_1)
					<!-- =======================
					///// Begin tt-section /////
					============================ 
					* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
					* You can use classes "border-top" and "border-bottom" if needed. 
					* Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
					-->
					<div class="tt-section">
						<div class="tt-section-inner tt-wrap">

							<div class="tt-row">
								<div class="tt-col-lg-4 padding-right-lg-5-p">

									<!-- Begin tt-Heading 
									====================== 
									* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
									* Use class "tt-heading-center" to align tt-Heading to center.
									* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
									* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
									-->
									@if($digital_design->section_title_1)
									<div class="tt-heading tt-heading-xlg margin-bottom-40">
										<!-- <h3 class="tt-heading-subtitle tt-text-reveal">Subtitle</h3> -->
										<h2 class="tt-heading-title tt-text-reveal">{{ $digital_design->section_title_1 }}</h2> <!-- You can use <br> to break a text line if needed -->
									</div>
									<!-- End tt-Heading -->
									@endif

								</div> <!-- /.tt-col -->

								<div class="tt-col-lg-8">
									@if($digital_design->section_description_1)
									<div class="tt-anim-fadeinup">
										<p>{!! $digital_design->section_description_1 !!}</p>
									</div>
									@endif

								</div> <!-- /.tt-col -->
							</div> <!-- /.tt-row -->

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->
					@endif

					@if(count($digital_design_images) > 0)
					<!-- =======================
					///// Begin tt-section /////
					============================ 
					* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
					* You can use classes "border-top" and "border-bottom" if needed. 
					* Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
					-->
					<div class="tt-section">
						<div class="tt-section-inner tt-wrap">

							@foreach ($digital_design_images as $image)
								<div class="tt-image tti-border-radius tti-landscape margin-bottom-40">
									<figure>
										<img src="{{ asset('uploads/digital-design/images/'.$image->image) }}" class="tt-anim-zoomin" loading="lazy" alt="Image">
										@if($image->image_name)
										<figcaption>
											{{ $image->image_name }}
										</figcaption>
										@endif
									</figure>
								</div> 
							@endforeach

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->
					@endif

					@if($digital_design->section_title_2 || $digital_design->section_description_2 || $digital_design->button_title)
					<!-- =======================
					///// Begin tt-section /////
					============================ 
					* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
					* You can use classes "border-top" and "border-bottom" if needed. 
					* Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
					-->
					<div class="tt-section padding-top-40">
						<div class="tt-section-inner tt-wrap">
							
							<div class="tt-row">
								<div class="tt-col-lg-4 padding-right-lg-5-p">

									<!-- Begin tt-Heading 
									====================== 
									* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
									* Use class "tt-heading-center" to align tt-Heading to center.
									* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
									* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
									-->
									@if($digital_design->section_title_2)
									<div class="tt-heading tt-heading-xlg margin-bottom-40">
										<!-- <h3 class="tt-heading-subtitle tt-text-reveal">Subtitle</h3> -->
										<h2 class="tt-heading-title tt-text-reveal">{{ $digital_design->section_title_2 }}</h2> <!-- You can use <br> to break a text line if needed -->
									</div>
									<!-- End tt-Heading -->
									@endif

								</div> <!-- /.tt-col -->

								<div class="tt-col-lg-8">
									@if($digital_design->section_description_2)
									<div class="tt-anim-fadeinup">
										<p>{!! $digital_design->section_description_2 !!}</p>
									</div>
									@endif

									@if($digital_design->button_title && $digital_design->button_link)
									<a href="{{ $digital_design->button_link }}" class="tt-btn tt-btn-outline margin-top-20 tt-anim-fadeinup tt-magnetic-item" target="_blank" rel="noopener">
										<span data-hover="{{ $digital_design->button_title }}">{{ $digital_design->button_title }}</span>
									</a>
									@endif

								</div> <!-- /.tt-col -->
							</div> <!-- /.tt-row -->

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->
					@endif

					@if($digital_design->banner_image_3)
					<!-- =======================
					///// Begin tt-section /////
					============================ 
					* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
					* You can use classes "border-top" and "border-bottom" if needed. 
					* Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
					-->
					<div class="tt-section">
						<div class="tt-section-inner">

							<!-- Begin tt-image
							====================
							* Use class "tti-border-radius" to enable image border radius.
							* Use class "tti-landscape" or "tti-portrait" to enable image landscape or portrait mode (no effect on small screens!).
							* Use class "tti-fixed-height" to enable image fixed height. 80% of screen height. Useful for full width layout (no effect on small screens!).
							* Use class "tti-full-height" to enable image full height. 100% of screen height. Useful for full width layout (no effect on small screens!).
							* Use class "tt-image-parallax" on <img> tag to enable the parallax effect.
							* Use class "margin-bottom-*" to enable bottom margins. For example "margin-bottom-40". More info about helper classes can be found in the file "helper.css".
							* NOTE-1: No above classes = image default size and style.
							* NOTE-2: Please read the template documentation for instructions to use "tt-image" with lightbox.
							-->
							<div class="tt-image tti-fixed-height">
								<figure>
									<img src="{{ asset('uploads/digital-design/banner/'.$digital_design->banner_image_3) }}" class="tt-image-parallax tt-anim-zoomin" loading="lazy" alt="Image">
									@if($digital_design->banner_image_3_name)
									<figcaption>
										{{ $digital_design->banner_image_3_name }}
									</figcaption>
									@endif
								</figure>
							</div> 
							<!-- End tt-image -->

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->
					@endif

					@if($digital_design->conclusion)
					<!-- =======================
					///// Begin tt-section /////
					============================ 
					* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
					* You can use classes "border-top" and "border-bottom" if needed. 
					* Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
					-->
					<div class="tt-section padding-bottom-xlg-160">
						<div class="tt-section-inner tt-wrap">

							<div class="text-center text-xlg max-width-1000 margin-auto tt-text-reveal">
								{!! $digital_design->conclusion !!}
							</div>

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->
					@endif


					<!-- =======================
					///// Begin tt-section /////
					============================ 
					* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
					* You can use classes "border-top" and "border-bottom" if needed. 
					* Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
					-->
					@if($next_work)
					<div class="tt-section padding-top-xlg-120 padding-bottom-xlg-140 border-top">
						<div class="tt-section-inner tt-wrap">
							
							<!-- Begin next project nav
							============================ -->
							<div class="tt-next-project">
								<div class="tt-row">
									<div class="tt-col-md-7">

										<div class="tt-next-project-caption">
											<div class="tt-np-top tt-anim-fadeinup">
												<a href="{{ route('digital-design.index') }}" class="tt-btn tt-btn-link">
													<span data-hover="All Works">All Works</span>
													<span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
												</a>
											</div> <!-- /.tt-np-top -->
											<h3 class="tt-np-title tt-text-reveal">Next<br> Project</h3>
										</div> <!-- /.tt-next-project-caption -->

									</div> <!-- /.tt-col -->
								
									<div class="tt-col-md-5 tt-align-self-center">

										<div class="tt-next-project-item">
											<a href="{{ route('digital-design.show', $next_work->slug) }}" class="tt-npi-image" data-cursor="View<br>Project">
												<figure class="tt-npi-image-inner">
													<!-- Note: The recommended maximum image width is 800px -->
													<img src="{{ asset('uploads/digital-design/banner/'.$next_work->banner_image) }}" class="tt-anim-zoomin" loading="lazy" alt="{{ $next_work->title }}">
												</figure>
											</a>
											<div class="tt-npi-caption">
												<div class="tt-npi-title">
													<a href="{{ route('digital-design.show', $next_work->slug) }}">{{ $next_work->title }}</a>
												</div>
												<div class="tt-npi-categories-wrap">
													@if($next_work->sub_title)
													<div class="tt-npi-category">{{ $next_work->sub_title }}</div>
													@endif
												</div> <!-- /.tt-npi-categories-wrap -->
											</div> <!-- /.tt-npi-caption -->
										</div> <!-- /.tt-next-project-item -->

									</div> <!-- /.tt-col -->
								</div><!-- /.tt-row --> 
							</div>
							<!-- End next project nav -->

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->
					@endif


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