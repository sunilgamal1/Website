@extends('frontend.layouts.main')

@section('content')

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
								<h2 class="ph-caption-subtitle">Let's Work Together</h2>
								<h1 class="ph-caption-title">Contact</h1>
								<div class="ph-caption-description max-width-700">
									Feeling good about a new project?<br> Write me and let's talk about it.
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
									<h2 class="ph-caption-subtitle">Let's Work Together</h2>
									<h1 class="ph-caption-title">Write Me</h1>
									<div class="ph-caption-description max-width-700">
										Feeling good about a new project?<br> Write me and let's talk about it.
									</div>
								</div> <!-- /.ph-caption-inner -->
							</div> <!-- /.ph-caption -->

						</div> <!-- /.ph-mask-inner -->
					</div>
					<!-- End page header mask -->


				@include('frontend.partials.socialLinks')

			
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
					<div class="tt-section padding-top-40 padding-bottom-xlg-120">
						<div class="tt-section-inner tt-wrap">

							<div class="tt-row tt-xl-row-reverse">
								<div class="tt-col-xl-5">

									<!-- Begin contact info 
									======================== -->
									<div class="tt-contact-info margin-bottom-80">

										<!-- Begin big arrow 
										====================== 
										Use classes "tt-ba-angle-left", "tt-ba-angle-top", "tt-ba-angle-top-left", "tt-ba-angle-top-right", "tt-ba-angle-bottom", "tt-ba-angle-bottom-left", "tt-ba-angle-bottom-right" set change arrow pointing angle (no class = right).
										-->
										<div class="tt-big-arrow tt-ba-angle-bottom-left tt-anim-fadeinup">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
												<path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"></path>
											</svg>
										</div> 
										<!-- End big arrow -->

										<div class="tt-contact-info-inner">

											<div class="margin-bottom-50 tt-anim-fadeinup">
												<h6>Let's Talk</h6>
												<p>You're just one click away from taking your brand or product from great to incredible. Fill out the form to share more details about your project.</p>
											</div>
											
											<!-- Begin contact details 
											=========================== -->
											<div class="tt-contact-details margin-bottom-50 tt-anim-fadeinup">
												<h6>Details</h6>
												<ul>
													<li>
														<span class="tt-cd-icon"><i class="fas fa-map-marker-alt"></i></span>
														<a href="https://www.google.com/maps/place/Dharan/@26.7950512,87.27611,12z/data=!3m1!4b1!4m6!3m5!1s0x39ef419fc7271c1d:0x1d1300367590c002!8m2!3d26.806497!4d87.2847086!16zL20vMDRud3cz?entry=ttu&g_ep=EgoyMDI1MDcxMy4wIKXMDSoASAFQAw%3D%3D" class="tt-link" target="_blank" rel="noopener">Dharan, Nepal</a>
													</li>
													<li>
														<span class="tt-cd-icon"><i class="fas fa-phone"></i></span>
														<a href="tel:9804006360" class="tt-link">+(977) 9804006360</a>
													</li>
													<li>
														<span class="tt-cd-icon"><i class="fas fa-envelope"></i></span>
														<a href="mailto:rijanrai881@gmail.com" class="tt-link">rijanrai881@gmail.com</a>
													</li>
												</ul>
											</div>
											<!-- End contact details -->

											<!-- Begin social buttons 
											========================== -->
											@include('frontend.partials.socialLinks')
											<!-- End social buttons  -->

										</div> <!-- /.tt-contact-info-inner -->
									</div>
									<!-- End contact info -->

								</div> <!-- /.tt-col -->

								<div class="tt-col-xl-7">

									<!-- Begin form 
									================ 
									* Use class "tt-form-filled", "tt-form-minimal" or "tt-form-creative" to change form style.
									* Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
									* Note-1: Use only lowercase letters in field names! For example name="email".
									* Note-2: See the template documentation for how to set up the contact form.
									-->
									<form id="tt-contact-form" class="tt-form tt-form-creative tt-form-lg" action="{{ route('contact.store') }}" method="POST">

										<!-- CSRF Token -->
										@csrf

										<!-- Becin contact form messages (do not remove!) -->
										<div id="tt-contact-form-messages" role="alert">
											<div class="tt-cfm-inner"></div>
											<div class="tt-cfm-close hide-cursor"><i class="fa-solid fa-xmark"></i></div>
										</div>
										<!-- End contact form messages -->

										<div class="tt-contact-form-inner">

											<!-- <small class="tt-form-text margin-bottom-30"><em>Fields marked with an asterisk (*) are required!</em></small> -->

											<div class="tt-form-group tt-anim-fadeinup">
												<label>What's your name? <span class="required">*</span></label>
												<input class="tt-form-control" id="sender-name" type="text" name="name" placeholder="Rijan Rai" required>
											</div>

											<div class="tt-form-group tt-anim-fadeinup">
												<label>What's your email? <span class="required">*</span></label>
												<input class="tt-form-control" id="sender-email" type="email" name="email" placeholder="rijanrai@gmail.com" required>
											</div>

											<div class="tt-form-group tt-anim-fadeinup">
												<label>What would you like to talk about? <span class="required">*</span></label>
												<select class="tt-form-control" id="sender-option" name="option" required>
													<option value="" disabled selected>Please choose an option</option>
													<option value="Say Hello">Say hello</option>
													<option value="New Project">New project</option>
													<option value="Feedback">Feedback</option>
													<option value="Other">Other</option>
												</select>
											</div>

											<div class="tt-form-group tt-anim-fadeinup">
												<label>Your message <span class="required">*</span></label>
												<textarea class="tt-form-control" id="sender-message" rows="5" name="message" placeholder="Hello, can you help me with ..." required></textarea>
											</div>

											<div class="tt-anim-fadeinup">
												<button type="submit" class="tt-btn tt-btn-primary tt-magnetic-item">
													<span data-hover="Send Message">Send Message</span>
												</button>
											</div>

										</div> <!-- /.tt-contact-form-inner-->
									</form>
									<!-- End form -->

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
					<div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120 border-top">
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
										<h3 class="tt-heading-subtitle tt-text-reveal">Portfolio</h3>
										<h2 class="tt-heading-title tt-text-reveal">Explore<br> My Work</h2> <!-- You can use <br> to break a text line if needed -->
									</div>
									<!-- End tt-Heading -->

								</div> <!-- /.tt-col -->
							
								<div class="tt-col-xl-4 tt-align-self-end tt-xl-column-reverse margin-top-40">

									<div class="max-width-600 margin-bottom-10 tt-text-uppercase tt-text-reveal">
										Discover a showcase of my creative journey that reflects my passion for crafting engaging digital experiences
									</div>

									<!-- Begin big round button 
									============================ -->
									<div class="tt-big-round-ptn margin-top-30 margin-bottom-xlg-80 tt-anim-fadeinup">
										<a href="portfolio.html" class="tt-big-round-ptn-holder tt-magnetic-item">
											<div class="tt-big-round-ptn-inner">My<br> Work</div>
										</a>
									</div>
									<!-- End big round button -->

								</div> <!-- /.tt-col -->
							</div><!-- /.tt-row --> 

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->


@endsection