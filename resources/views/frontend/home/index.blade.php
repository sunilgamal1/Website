@extends('frontend.layouts.main')

@section('content')<div id="tt-content-wrap">

				
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
<div id="page-header" class="ph-full ph-full-m ph-center ph-cap-xxxxlg ph-image-parallax ph-caption-parallax">

	<!-- Begin page header image 
	============================= 
	* Use class "ph-image-grayscale" to enable black & white image.
	* Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5"). 
	-->
	<!-- <div class="ph-image ph-image-cover-2">
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
				<!-- <h2 class="ph-caption-subtitle">Subtitle</h2> -->
				<h1 class="ph-caption-title">Jesper<br> Dietrich</h1>
				<div class="ph-caption-description max-width-700">
					Over 15 years of experience<br> in the design industry
				</div>
			</div> <!-- /.ph-caption-inner -->
		</div>
		<!-- End page header caption -->

	</div> <!-- /.page-header-inner -->

	<!-- Begin page header mask
	============================ 
	Note: ph-mask is basically a clone of caption. If you want to use a different text on the mask then it is a bit tricky to fit. For better results, make sure that it will be the same length as possible as the original caption text (especially the title). It should also contain the same number of lines. Sometimes this can be difficult to achieve, in which case we recommend simply using identical text to the original caption.
	-->
	<div class="page-header-inner ph-mask">
		<div class="ph-mask-inner tt-wrap">

			<div class="ph-caption">
				<div class="ph-caption-inner">
					<!-- <h2 class="ph-caption-subtitle">Subtitle</h2> -->
					<h1 class="ph-caption-title">Digital<br> Designer</h1>
					<div class="ph-caption-description max-width-700">
						Over 15 years of experience<br> in the design industry
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
	<div class="tt-section padding-top-xlg-140 padding-bottom-xlg-120 border-top">
		<div class="tt-section-inner tt-wrap">

			<div class="tt-row">
				<div class="tt-col-lg-3">

					<!-- Begin tt-video 
					==================== 
					* Use class "ttv-landscape" or "ttv-portrait" to enable video fixed height (no effect on small screens and full width layout!). No class = video default size.
					* Use class "ttv-full-height" to enable video full height. Useful for full width layout (no effect on small screens!).
					* Use class "margin-bottom-*" to enable bottom margins. For example "margin-bottom-40". More info about helper classes can be found in the file "helper.css".
					* Use class "ttv-grayscale" to enable video grayscale.
					* Available <video> attributes:
						Use the attribute "loop" to loop the video.
						Use the attribute "muted" to mute video.
						Use the attribute "autoplay" to enable autoplay (attribute "muted" is required for autoplay!).
						Use the attribute "controls" to display the video controls.
					* Note-1: attribute "playsinline" is required!
					* Note-2: data-src="..." is required in the video source for video lazy loading!
					-->
					<div class="tt-video ttv-portrait ttv-grayscale">
						<video playsinline muted autoplay loop preload="metadata" poster="assets/vids/800/video-1-800.jpg" class="tt-anim-zoomin">
							<source src="assets/vids/placeholder.mp4" data-src="assets/vids/800/video-1-800.mp4" type="video/mp4">
							<source src="assets/vids/placeholder.webm" data-src="assets/vids/800/video-1-800.webm" type="video/webm">
						</video>
					</div>
					<!-- End tt-video -->

					<div class="tt-text-uppercase margin-top-30 tt-text-reveal">
						Creative designer<br> based in Melbourne
					</div>

				</div> <!-- /.tt-col -->

				<div class="tt-col-lg-1 padding-top-30">
				</div> <!-- /.tt-col -->

				<div class="tt-col-lg-8 tt-align-self-center">

					<div class="text-xxlg font-500 tt-text-reveal">
						I am dedicated to developing innovative solutions and impactful experiences that meet user needs and exceed expectations.
					</div>

					<a href="about-me.html" class="tt-btn tt-btn-outline margin-top-40 tt-magnetic-item tt-anim-fadeinup">
						<span data-hover="More About Me">More About Me</span>
					</a>
					
				</div> <!-- /.tt-col -->
			</div><!-- /.tt-row -->

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
	<div class="tt-section padding-top-xlg-140 border-top">
		<div class="tt-section-inner tt-wrap">

			<div class="tt-row">
				<div class="tt-col-xl-8">

					<!-- Begin tt-Heading 
					====================== 
					* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
					* Use class "tt-heading-center" to align tt-Heading to center.
					* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
					* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
					-->
					<div class="tt-heading tt-heading-xxxlg">
						<h3 class="tt-heading-subtitle tt-text-reveal">Featured Work</h3>
						<h2 class="tt-heading-title tt-text-reveal">Projects</h2> <!-- You can use <br> to break a text line if needed -->
					</div>
					<!-- End tt-Heading -->

					<div class="tt-text-uppercase max-width-400 margin-left-xlg-10-p text-pretty tt-text-reveal">
						Please explore my selected projects below. Click on each one for an overview
					</div>

				</div> <!-- /.tt-col -->
			
				<div class="tt-col-xl-4 tt-align-self-end margin-top-30">

					<!-- Begin big round button 
					============================ -->
					<div class="tt-big-round-ptn tt-anim-fadeinup">
						<a href="portfolio-compact.html" class="tt-big-round-ptn-holder tt-magnetic-item">
							<div class="tt-big-round-ptn-inner">All<br> Projects</div>
						</a>
					</div>
					<!-- End big round button -->

				</div> <!-- /.tt-col -->
			</div><!-- /.tt-row -->

		</div> <!-- /.tt-section-inner -->
	</div>
	<!-- End tt-section -->

	<div class="tt-section">
		<div class="tt-section-inner max-width-2200">

			<style>
			/* Override CSS counter for portfolio items */
			.pcli-count::before {
				content: none !important;
			}
			.pcli-count {
				position: relative;
			}
			.pcli-count {
				font-family: var(--tt-alter-font);
				font-size: clamp(34px, 7vw, 128px);
				font-weight: normal;
				color: var(--tt-text-color);
				line-height: 1;
				opacity: .2;
			}
			@media (max-width: 767px) {
				.pcli-count {
					font-size: clamp(32px, 8vw, 54px);
					opacity: .3;
				}
			}
			</style>

			@php $projectCounter = 1; @endphp
			
			@foreach ($arts as $art)
			<div class="tt-portfolio-compact-list pcl-caption-hover pcl-image-hover">
				<div class="pcli-inner">

					<!-- Begin portfolio compact list item
					======================================= -->
					<a href="{{ route('art-design.show', $art->slug) }}" class="pcli-item tt-anim-fadeinup" data-cursor="View<br>Project">
						<div class="pcli-item-inner">
							<div class="pcli-col pcli-col-image">
								<div class="pcli-image">
									<!-- Note: The recommended maximum image width is 800px -->
									<img src="{{ asset('uploads/graphic_art/banner/' . $art->banner_image) }}" loading="lazy" alt="Image">
								</div> <!-- /.pcli-image -->
							</div> <!-- /.pcli-col -->

							<div class="pcli-col pcli-col-count">
								<div class="pcli-count">{{ sprintf('%02d', $projectCounter) }}</div>
							</div> <!-- /.pcli-col -->

							<div class="pcli-col pcli-col-caption">
								<div class="pcli-caption">
									<h2 class="pcli-title">{{ $art->title }}</h2>
									<div class="pcli-categories">
										<div class="pcli-category">{{ $art->sub_title }}</div>
										<!-- <div class="pcli-category">Varia</div> -->
									</div> <!-- /.pcli-categories -->
								</div> <!-- /.pcli-caption -->
							</div> <!-- /.pcli-col -->
						</div> <!-- /.pcli-item-inner -->
					</a>
					<!-- End portfolio compact list item -->

					
				

				</div> <!-- /.pcli-inner -->

			</div>
			@php $projectCounter++; @endphp
			@endforeach

			@foreach ($motions as $motion)
			<div class="tt-portfolio-compact-list pcl-caption-hover pcl-image-hover">
				<div class="pcli-inner">

					<!-- Begin portfolio compact list item
					======================================= -->
					<a href="{{ route('motion.show', $motion->slug) }}" class="pcli-item tt-anim-fadeinup" data-cursor="View<br>Project">
						<div class="pcli-item-inner">
							<div class="pcli-col pcli-col-image">
								<div class="pcli-image">
									<!-- Note: The recommended maximum image width is 800px -->
									<img src="{{ asset('uploads/motion/banner/' . $motion->banner_image) }}" loading="lazy" alt="Image">
								</div> <!-- /.pcli-image -->
							</div> <!-- /.pcli-col -->

							<div class="pcli-col pcli-col-count">
								<div class="pcli-count">{{ sprintf('%02d', $projectCounter) }}</div>
							</div> <!-- /.pcli-col -->

							<div class="pcli-col pcli-col-caption">
								<div class="pcli-caption">
									<h2 class="pcli-title">{{ $motion->title }}</h2>
									<div class="pcli-categories">
										<div class="pcli-category">{{ $motion->sub_title }}</div>
										<!-- <div class="pcli-category">Varia</div> -->
									</div> <!-- /.pcli-categories -->
								</div> <!-- /.pcli-caption -->
							</div> <!-- /.pcli-col -->
						</div> <!-- /.pcli-item-inner -->
					</a>
					<!-- End portfolio compact list item -->

					
				

				</div> <!-- /.pcli-inner -->

			</div>
			@php $projectCounter++; @endphp
			@endforeach

			@foreach ($digital_designs as $digital_design)
			<div class="tt-portfolio-compact-list pcl-caption-hover pcl-image-hover">
				<div class="pcli-inner">

					<!-- Begin portfolio compact list item
					======================================= -->
					<a href="{{ route('digital-design.show', $digital_design->slug) }}" class="pcli-item tt-anim-fadeinup" data-cursor="View<br>Project">
						<div class="pcli-item-inner">
							<div class="pcli-col pcli-col-image">
								<div class="pcli-image">
									<!-- Note: The recommended maximum image width is 800px -->
									<img src="{{ asset('uploads/digital-design/banner/' . $digital_design->banner_image) }}" loading="lazy" alt="Image">
								</div> <!-- /.pcli-image -->
							</div> <!-- /.pcli-col -->

							<div class="pcli-col pcli-col-count">
								<div class="pcli-count">{{ sprintf('%02d', $projectCounter) }}</div>
							</div> <!-- /.pcli-col -->

							<div class="pcli-col pcli-col-caption">
								<div class="pcli-caption">
									<h2 class="pcli-title">{{ $digital_design->title }}</h2>
									<div class="pcli-categories">
										<div class="pcli-category">{{ $digital_design->sub_title }}</div>
										<!-- <div class="pcli-category">Varia</div> -->
									</div> <!-- /.pcli-categories -->
								</div> <!-- /.pcli-caption -->
							</div> <!-- /.pcli-col -->
						</div> <!-- /.pcli-item-inner -->
					</a>
					<!-- End portfolio compact list item -->

					
				

				</div> <!-- /.pcli-inner -->

			</div>
			@php $projectCounter++; @endphp
			@endforeach

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
	<div class="tt-section">
		<div class="tt-section-inner">

			<!-- Begin scrolling text
			==========================
			* Use class "scrt-color-reverse" to reverse colors.
			* Use class "scrt-dyn-separator" to enable dynamic separator (works only with data-change-direction="true").
			* Note: Ideally, the text should be long enough to cover the entire width of the screen. If you use a very short text (e.g. one word), duplicate it (including the separator) to compensate for the optimal length of the text.
			Available data attributes:
			  data-scroll-speed="10" ...................(lower number = higher speed). 
			  data-change-direction="true" .............(true/false).
			  data-opposite-direction="true" ...........(true/false).
			-->
			<div class="tt-scrolling-text scrt-color-reverse" data-scroll-speed="6" data-change-direction="true">
				<div class="tt-scrt-inner">
					<div class="tt-scrt-content">
						I Am Highly motivated <span class="tt-scrt-separator"><i class="fa-regular fa-face-smile"></i></span> 
					</div> <!-- /.tt-scrt-content -->
				</div> <!-- /.tt-scrt-inner -->
			</div> <!-- /.tt-scrolling-text -->

			<!-- Begin scrolling text
			==========================
			* Use class "scrt-color-reverse" to reverse colors.
			* Use class "scrt-dyn-separator" to enable dynamic separator (works only with data-change-direction="true").
			* Note: Ideally, the text should be long enough to cover the entire width of the screen. If you use a very short text (e.g. one word), duplicate it (including the separator) to compensate for the optimal length of the text.
			Available data attributes:
			  data-scroll-speed="10" ...................(lower number = higher speed). 
			  data-change-direction="true" .............(true/false).
			  data-opposite-direction="true" ...........(true/false).
			-->
			<div class="tt-scrolling-text" data-scroll-speed="6" data-change-direction="true" data-opposite-direction="true">
				<div class="tt-scrt-inner">
					<div class="tt-scrt-content">
						I Am Highly motivated <span class="tt-scrt-separator"><i class="fa-regular fa-face-smile"></i></span> 
					</div> <!-- /.tt-scrt-content -->
				</div> <!-- /.tt-scrt-inner -->
			</div> <!-- /.tt-scrolling-text -->

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
	<div class="tt-section">
		<div class="tt-section-inner tt-wrap max-width-1500">

			<div class="tt-row">
				<div class="tt-col-xl-3 margin-bottom-60">

					<!-- Begin tt-Heading 
					====================== 
					* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
					* Use class "tt-heading-center" to align tt-Heading to center.
					* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
					* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
					-->
					<div class="tt-heading tt-heading-xxlg">
						<h3 class="tt-heading-subtitle tt-text-reveal">What I Do</h3>
						<h2 class="tt-heading-title tt-text-reveal">Services</h2> <!-- You can use <br> to break a text line if needed -->
					</div>
					<!-- End tt-Heading -->

					<div class="tt-text-uppercase max-width-400 margin-bottom-20 text-pretty tt-text-reveal">
						Comprehensive digital services to boost your online presence and achieve impactful results.
					</div>

				</div> <!-- /.tt-col -->

				<div class="tt-col-xl-2">
				</div> <!-- /.tt-col -->
			
				<div class="tt-col-xl-7 tt-align-self-end">

					<!-- Begin accordion 
					===================== 
					* Use class "tt-ac-sm", "tt-ac-lg", "tt-ac-xlg" or "tt-ac-xxlg" to set accordion size. No class = default size. Alternative font used in the title from "tt-ac-lg"!
					* Use class "tt-ac-hover" to enable hover effect.
					* Use class "tt-ac-counter" to enable counter.
					* Use class "tt-ac-borders" to enable borders.
					-->
					<div class="tt-accordion tt-ac-lg tt-ac-hover tt-ac-counter tt-ac-borders">

						<div class="tt-accordion-item tt-anim-fadeinup">
							<div class="tt-accordion-heading">
								<div class="tt-ac-head cursor-alter">
									<div class="tt-ac-head-inner">
										<h4 class="tt-ac-head-title">Digital Strategy</h4>
									</div>
								</div>
								<div class="tt-accordion-caret">
									<div class="tt-accordion-caret-inner tt-magnetic-item">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
											<path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"></path>
										</svg>
									</div>
								</div> <!-- /.tt-accordion-caret -->
							</div> <!-- /.tt-accordion-heading -->

							<!-- Use class "is-open" to make this content open by default. Max width class is optional. -->
							<div class="tt-accordion-content max-width-1400">

								<p>Crafting data-driven strategies to elevate your online presence. I align your business goals with innovative digital solutions, ensuring measurable growth and a competitive edge in the digital landscape.</p>

								<p>In today’s fast-paced digital world, having a clear and actionable strategy is key to standing out. I specialize in crafting data-driven digital strategies tailored to your unique business goals. Whether you’re looking to grow your online presence, improve customer engagement, or drive conversions, I work closely with you to identify opportunities and create a roadmap for success. From audience analysis and competitive research to defining KPIs and optimizing digital channels, I ensure your strategy is not only innovative but also measurable and results-oriented. Let’s turn your vision into a digital reality.</p>

								<a href="contact.html" class="tt-btn tt-btn-outline tt-magnetic-item">
									<span data-hover="Let’s Connect!">Let’s Connect!</span>
								</a>

							</div> <!-- /.tt-accordion-content -->
						</div> <!-- /.tt-accordion-item -->

						<div class="tt-accordion-item tt-anim-fadeinup">
							<div class="tt-accordion-heading">
								<div class="tt-ac-head cursor-alter">
									<div class="tt-ac-head-inner">
										<h4 class="tt-ac-head-title">Branding &amp; Identity</h4>
									</div>
								</div>
								<div class="tt-accordion-caret">
									<div class="tt-accordion-caret-inner tt-magnetic-item">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
											<path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"></path>
										</svg>
									</div>
								</div> <!-- /.tt-accordion-caret -->
							</div> <!-- /.tt-accordion-heading -->

							<!-- Use class "is-open" to make this content open by default. Max width class is optional. -->
							<div class="tt-accordion-content max-width-1400">

								<p>Building brands that resonate. From logos to messaging, I create cohesive and memorable identities that reflect your values, connect with your audience, and stand out in the market.</p>

								<p>Your brand is more than just a logo—it’s the heart and soul of your business. I help you create a cohesive and memorable brand identity that resonates with your audience and reflects your core values. From crafting a unique logo and selecting the perfect color palette to defining your brand voice and messaging, I ensure every element works together to tell your story. Whether you’re launching a new brand or refreshing an existing one, I’ll guide you through the process of building a strong, authentic identity that stands out in a crowded market.</p>

								<a href="contact.html" class="tt-btn tt-btn-outline tt-magnetic-item">
									<span data-hover="Let’s Connect!">Let’s Connect!</span>
								</a>

							</div> <!-- /.tt-accordion-content -->
						</div> <!-- /.tt-accordion-item -->

						<div class="tt-accordion-item tt-anim-fadeinup">
							<div class="tt-accordion-heading">
								<div class="tt-ac-head cursor-alter">
									<div class="tt-ac-head-inner">
										<h4 class="tt-ac-head-title">UI / UX Design</h4>
									</div>
								</div>
								<div class="tt-accordion-caret">
									<div class="tt-accordion-caret-inner tt-magnetic-item">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
											<path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"></path>
										</svg>
									</div>
								</div> <!-- /.tt-accordion-caret -->
							</div> <!-- /.tt-accordion-heading -->

							<!-- Use class "is-open" to make this content open by default. Max width class is optional. -->
							<div class="tt-accordion-content max-width-1400">

								<p>Designing intuitive and engaging experiences. I blend user-centered design principles with cutting-edge aesthetics to create interfaces that are not only beautiful but also functional and easy to navigate.</p>

								<p>Great design is more than just aesthetics—it’s about creating seamless and enjoyable experiences for your users. I specialize in designing intuitive and user-friendly interfaces that not only look stunning but also function flawlessly. By combining user-centered design principles with a deep understanding of your audience, I create wireframes, prototypes, and final designs that prioritize usability and engagement. Whether it’s a website, app, or digital platform, I ensure every interaction feels natural and every detail enhances the overall experience.</p>

								<a href="contact.html" class="tt-btn tt-btn-outline tt-magnetic-item">
									<span data-hover="Let’s Connect!">Let’s Connect!</span>
								</a>

							</div> <!-- /.tt-accordion-content -->
						</div> <!-- /.tt-accordion-item -->

						<div class="tt-accordion-item tt-anim-fadeinup">
							<div class="tt-accordion-heading">
								<div class="tt-ac-head cursor-alter">
									<div class="tt-ac-head-inner">
										<h4 class="tt-ac-head-title">Web Design</h4>
									</div>
								</div>
								<div class="tt-accordion-caret">
									<div class="tt-accordion-caret-inner tt-magnetic-item">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
											<path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"></path>
										</svg>
									</div>
								</div> <!-- /.tt-accordion-caret -->
							</div> <!-- /.tt-accordion-heading -->

							<!-- Use class "is-open" to make this content open by default. Max width class is optional. -->
							<div class="tt-accordion-content max-width-1400">

								<p>Transforming ideas into stunning websites. My custom web designs are tailored to your brand, optimized for performance, and designed to captivate your audience while driving conversions.</p>

								<p>Your website is often the first impression you make on potential customers, and it needs to be unforgettable. I design custom websites that are visually striking, highly functional, and optimized for performance. From responsive layouts that look great on any device to seamless navigation and fast load times, I focus on creating a user experience that keeps visitors engaged and drives conversions. Whether you need a simple portfolio site or a complex e-commerce platform, I’ll work with you to bring your vision to life and create a website that truly represents your brand.</p>

								<a href="contact.html" class="tt-btn tt-btn-outline tt-magnetic-item">
									<span data-hover="Let’s Connect!">Let’s Connect!</span>
								</a>

							</div> <!-- /.tt-accordion-content -->
						</div> <!-- /.tt-accordion-item -->

						<div class="tt-accordion-item tt-anim-fadeinup">
							<div class="tt-accordion-heading">
								<div class="tt-ac-head cursor-alter">
									<div class="tt-ac-head-inner">
										<h4 class="tt-ac-head-title">Product Design</h4>
									</div>
								</div>
								<div class="tt-accordion-caret">
									<div class="tt-accordion-caret-inner tt-magnetic-item">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
											<path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"></path>
										</svg>
									</div>
								</div> <!-- /.tt-accordion-caret -->
							</div> <!-- /.tt-accordion-heading -->

							<!-- Use class "is-open" to make this content open by default. Max width class is optional. -->
							<div class="tt-accordion-content max-width-1400">

								<p>Innovating with purpose. I design products that solve real problems, combining functionality, aesthetics, and user experience to deliver solutions that users love and businesses rely on.</p>

								<p>Innovative products start with thoughtful design. I specialize in creating products that solve real problems and deliver exceptional user experiences. From initial concept development and user research to prototyping and final design, I focus on combining functionality, aesthetics, and usability to create solutions that users love. Whether it’s a physical product, a digital tool, or something in between, I’ll work with you to design something that not only meets your business goals but also exceeds user expectations. Let’s create products that make an impact.</p>

								<a href="contact.html" class="tt-btn tt-btn-outline tt-magnetic-item">
									<span data-hover="Let’s Connect!">Let’s Connect!</span>
								</a>

							</div> <!-- /.tt-accordion-content -->
						</div> <!-- /.tt-accordion-item -->

					</div>
					<!-- End accordion -->

				</div> <!-- /.tt-col -->
			</div><!-- /.tt-row -->

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
	<div class="tt-section no-padding-top">
		<div class="tt-section-inner">

			<!-- Begin clipper
			=================== 
			* Use class "tt-clipper-grayscale" to enable black & white background.
			* Use class "tt-clipper-cover-*" to set background overlay opacity. For example "tt-clipper-cover-2" or "tt-clipper-cover-2-5" (up to "tt-clipper-cover-9-5").
			* Supported media: "YouTube", "Vimeo", ".mp4", ".mp3 (requires data-type="html5video")". Just add your media link to the href="" tag.
			-->
			<div class="tt-clipper">
				<a href="https://www.youtube.com/watch?v=6nGs9iGrpok" class="tt-clipper-inner" data-cursor="Play<br>Reel" data-fancybox data-caption="My awesome showreel. :)">

					<!-- Clipper background (image) -->
					<!-- <div class="tt-clipper-bg">
						<img src="assets/vids/1920/showreel-1920.jpg" loading="lazy" alt="Image">
					</div> -->

					<!-- Clipper background (video) -->
					<div class="tt-clipper-bg">
						<video loop muted autoplay playsinline preload="metadata" poster="assets/vids/1920/showreel-1920.jpg">
							<source src="assets/vids/placeholder.mp4" data-src="assets/vids/1920/showreel-1920.mp4" type="video/mp4">
							<source src="assets/vids/placeholder.webm" data-src="assets/vids/1920/showreel-1920.webm" type="video/webm">
						</video>
					</div>

					<div class="tt-clipper-content">

						<!-- Clipper button (for mobile devices only!) -->
						<div class="tt-clipper-btn">
							<i class="fa-solid fa-play"></i>
						</div>

					</div> <!-- /.tt-clipper-content -->
				</a> 
			</div>
			<!-- End clipper -->

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
	<div class="tt-section no-padding-bottom">
		<div class="tt-section-inner tt-wrap">

			<!-- Begin tt-Heading 
			====================== 
			* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
			* Use class "tt-heading-center" to align tt-Heading to center.
			* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
			* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
			-->
			<div class="tt-heading tt-heading-xxxlg tt-heading-center">
				<h3 class="tt-heading-subtitle tt-text-reveal">Recognitions</h3>
				<h2 class="tt-heading-title tt-text-reveal">Awards</h2> <!-- You can use <br> to break a text line if needed -->
				<p class="max-width-500 tt-text-uppercase tt-text-reveal">List of recognitions<br> that make me proud</p>
			</div>
			<!-- End tt-Heading -->

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
	<div class="tt-section">
		<div class="tt-section-inner">

			<!-- Begin avards list
			========================= -->
			<div class="tt-avards-list">

				<!-- Begin avards list item
				============================== -->
				<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
					<div class="tt-avlist-item-inner">

						<div class="tt-avlist-col tt-avlist-col-count">
							<div class="tt-avlist-count"></div>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-title">
							<h4 class="tt-avlist-title">Awwwards</h4>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-description">
							<div class="tt-avlist-description">
								Developer Award, Site of the Month
							</div> <!-- /.tt-avlist-description -->
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-info">
							<div class="tt-avlist-info">
								12x Avards
							</div> <!-- /.tt-avlist-info -->
						</div> <!-- /.tt-avlist-col -->

					</div> <!-- /.tt-avlist-item-inner -->
				</a>
				<!-- End avards list item -->

				<!-- Begin avards list item
				============================== -->
				<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
					<div class="tt-avlist-item-inner">

						<div class="tt-avlist-col tt-avlist-col-count">
							<div class="tt-avlist-count"></div>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-title">
							<h4 class="tt-avlist-title">CSS Design Awards</h4>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-description">
							<div class="tt-avlist-description">
								Website of the Day, Designer of the Year '23
							</div> <!-- /.tt-avlist-description -->
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-info">
							<div class="tt-avlist-info">
								3x Avards
							</div> <!-- /.tt-avlist-info -->
						</div> <!-- /.tt-avlist-col -->

					</div> <!-- /.tt-avlist-item-inner -->
				</a>
				<!-- End avards list item -->

				<!-- Begin avards list item
				============================== -->
				<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
					<div class="tt-avlist-item-inner">

						<div class="tt-avlist-col tt-avlist-col-count">
							<div class="tt-avlist-count"></div>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-title">
							<h4 class="tt-avlist-title">Behance</h4>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-description">
							<div class="tt-avlist-description">
								UI Gallery Featured
							</div> <!-- /.tt-avlist-description -->
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-info">
							<div class="tt-avlist-info">
								2x Avards
							</div> <!-- /.tt-avlist-info -->
						</div> <!-- /.tt-avlist-col -->

					</div> <!-- /.tt-avlist-item-inner -->
				</a>
				<!-- End avards list item -->

				<!-- Begin avards list item
				============================== -->
				<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
					<div class="tt-avlist-item-inner">

						<div class="tt-avlist-col tt-avlist-col-count">
							<div class="tt-avlist-count"></div>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-title">
							<h4 class="tt-avlist-title">CSS Winner</h4>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-description">
							<div class="tt-avlist-description">
								Site of the Day
							</div> <!-- /.tt-avlist-description -->
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-info">
							<div class="tt-avlist-info">
								4x Avards
							</div> <!-- /.tt-avlist-info -->
						</div> <!-- /.tt-avlist-col -->

					</div> <!-- /.tt-avlist-item-inner -->
				</a>
				<!-- End avards list item -->

				<!-- Begin avards list item
				============================== -->
				<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
					<div class="tt-avlist-item-inner">

						<div class="tt-avlist-col tt-avlist-col-count">
							<div class="tt-avlist-count"></div>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-title">
							<h4 class="tt-avlist-title">FWA Awards</h4>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-description">
							<div class="tt-avlist-description">
								FWA of the Day, Special Mention
							</div> <!-- /.tt-avlist-description -->
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-info">
							<div class="tt-avlist-info">
								8x Avards
							</div> <!-- /.tt-avlist-info -->
						</div> <!-- /.tt-avlist-col -->

					</div> <!-- /.tt-avlist-item-inner -->
				</a>
				<!-- End avards list item -->

				<!-- Begin avards list item
				============================== -->
				<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
					<div class="tt-avlist-item-inner">

						<div class="tt-avlist-col tt-avlist-col-count">
							<div class="tt-avlist-count"></div>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-title">
							<h4 class="tt-avlist-title">SiteInspire</h4>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-description">
							<div class="tt-avlist-description">
								Featured Design
							</div> <!-- /.tt-avlist-description -->
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-info">
							<div class="tt-avlist-info">
								6x Avards
							</div> <!-- /.tt-avlist-info -->
						</div> <!-- /.tt-avlist-col -->

					</div> <!-- /.tt-avlist-item-inner -->
				</a>
				<!-- End avards list item -->

				<!-- Begin avards list item
				============================== -->
				<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
					<div class="tt-avlist-item-inner">

						<div class="tt-avlist-col tt-avlist-col-count">
							<div class="tt-avlist-count"></div>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-title">
							<h4 class="tt-avlist-title">One Page Love</h4>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-description">
							<div class="tt-avlist-description">
								Site of the Day
							</div> <!-- /.tt-avlist-description -->
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-info">
							<div class="tt-avlist-info">
								2x Avards
							</div> <!-- /.tt-avlist-info -->
						</div> <!-- /.tt-avlist-col -->

					</div> <!-- /.tt-avlist-item-inner -->
				</a>
				<!-- End avards list item -->

				<!-- Begin avards list item
				============================== -->
				<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
					<div class="tt-avlist-item-inner">

						<div class="tt-avlist-col tt-avlist-col-count">
							<div class="tt-avlist-count"></div>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-title">
							<h4 class="tt-avlist-title">CSS Light</h4>
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-description">
							<div class="tt-avlist-description">
								Featured Design, Featured Website
							</div> <!-- /.tt-avlist-description -->
						</div> <!-- /.tt-avlist-col -->

						<div class="tt-avlist-col tt-avlist-col-info">
							<div class="tt-avlist-info">
								4x Avards
							</div> <!-- /.tt-avlist-info -->
						</div> <!-- /.tt-avlist-col -->

					</div> <!-- /.tt-avlist-item-inner -->
				</a>
				<!-- End avards list item -->

			</div>
			<!-- End avards list -->

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
	<div class="tt-section no-padding-bottom">
		<div class="tt-section-inner tt-wrap">

			<div class="tt-row margin-bottom-40">
				<div class="tt-col-xl-8">

					<!-- Begin tt-Heading 
					====================== 
					* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
					* Use class "tt-heading-center" to align tt-Heading to center.
					* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
					* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
					-->
					<div class="tt-heading tt-heading-xxxlg no-margin">
						<h3 class="tt-heading-subtitle tt-text-reveal">What They Say</h3>
						<h2 class="tt-heading-title tt-text-reveal">Feedback</h2> <!-- You can use <br> to break a text line if needed -->
					</div>
					<!-- End tt-Heading -->

				</div> <!-- /.tt-col -->
			
				<div class="tt-col-xl-4 tt-align-self-end">

					<div class="max-width-600 margin-top-20 tt-text-uppercase text-pretty tt-text-reveal">
						Genuine words from the people I’ve had the pleasure to work with.
					</div>

					<a href="{{ url('/about') }}" class="tt-btn tt-btn-outline margin-top-30 tt-magnetic-item tt-anim-fadeinup">
						<span data-hover="Read More">Read More</span>
					</a>

				</div> <!-- /.tt-col -->
			</div><!-- /.tt-row --> 

		</div> <!-- /.tt-section-inner -->
	</div>
	<!-- End tt-section -->


	<!-- =======================
	///// Begin tt-section /////
	============================ 
	* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
	* You can use classes "border-top" and "border-bottom" if needed. 
	* Note: All cards have equal height, based on the tallest card.
	-->
	<div class="tt-section">
		<div class="tt-section-inner">

			<!-- Begin sticky testimonials 
			============================== 
			* Use class "tt-stte-center" to align the content to the center.
			* Use class "tt-stte-reversed-colors" to enable reversed colors.
			* Note: All cards have equal height, based on the tallest card.
			-->
			<div class="tt-sticky-testimonials">

				<!-- Begin sticky testimonials item -->
				<div class="tt-stte-item">
					<div class="tt-stte-card cursor-alter">
						<div class="tt-stte-card-counter"></div>
						<div class="tt-stte-card-caption">
							<div class="tt-stte-text">
								"One of the best template I've ever had. I love it! It's fully customizable, well coded, fast and responsive - fitting for all kind of devices".
							</div>
							<div class="tt-stte-subtext">
								<a href="https://themetorium.net/" class="tt-link" target="_blank" rel="noopener">- Wironimo</a>
							</div>
						</div> <!-- /.tt-stte-card-caption -->
					</div> <!-- /.tt-stte-card -->
				</div>
				<!-- End sticky testimonials item -->

				<!-- Begin sticky testimonials item -->
				<div class="tt-stte-item">
					<div class="tt-stte-card cursor-alter">
						<div class="tt-stte-card-counter"></div>
						<div class="tt-stte-card-caption">
							<div class="tt-stte-text">
								"Brilliant template. Tons of options, many concepts, design flexibility, code quality, explanatory comments in each section for easy styling".
							</div>
							<div class="tt-stte-subtext">- Gneto</div>
						</div> <!-- /.tt-stte-card-caption -->
					</div> <!-- /.tt-stte-card -->
				</div>
				<!-- End sticky testimonials item -->

				<!-- Begin sticky testimonials item -->
				<div class="tt-stte-item">
					<div class="tt-stte-card cursor-alter">
						<div class="tt-stte-card-counter"></div>
						<div class="tt-stte-card-caption">
							<div class="tt-stte-text">
								"Easy to customize, plenty of choices to display your portfolio, fast loading times. Excellent support".
							</div>
							<div class="tt-stte-subtext">
								<a href="https://themetorium.net/" class="tt-link" target="_blank" rel="noopener">- Brendak</a>
							</div>
						</div> <!-- /.tt-stte-card-caption -->
					</div> <!-- /.tt-stte-card -->
				</div>
				<!-- End sticky testimonials item -->

				<!-- Begin sticky testimonials item -->
				<div class="tt-stte-item">
					<div class="tt-stte-card cursor-alter">
						<div class="tt-stte-card-counter"></div>
						<div class="tt-stte-card-caption">
							<div class="tt-stte-text">
								"Very nice design and well organised and commented code. Also good customer service".
							</div>
							<div class="tt-stte-subtext">- Gazzzzz</div>
						</div> <!-- /.tt-stte-card-caption -->
					</div> <!-- /.tt-stte-card -->
				</div>
				<!-- End sticky testimonials item -->

				<!-- Begin sticky testimonials item -->
				<div class="tt-stte-item">
					<div class="tt-stte-card cursor-alter">
						<div class="tt-stte-card-counter"></div>
						<div class="tt-stte-card-caption">
							<div class="tt-stte-text">
								"I founded a bug on Iphone and Ipad and the author fixed very quickly. I appreciated his efforts and his quickness in solving the problem".
							</div>
							<div class="tt-stte-subtext">- Admanente</div>
						</div> <!-- /.tt-stte-card-caption -->
					</div> <!-- /.tt-stte-card -->
				</div>
				<!-- End sticky testimonials item -->

			</div>
			<!-- End sticky testimonials  -->

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
	@include('frontend.partials.lets-connect');
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
