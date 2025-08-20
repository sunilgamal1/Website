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
                <h2 class="ph-caption-subtitle">Jesper Dietrich</h2>
                <h1 class="ph-caption-title">About Me</h1>
                <div class="ph-caption-description max-width-700">
                    Design that doesn’t just look good,<br> but works beautifully too.
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
                    <h2 class="ph-caption-subtitle">Jesper Dietrich</h2>
                    <h1 class="ph-caption-title">Who I Am</h1>
                    <div class="ph-caption-description max-width-700">
                        Where creativity and strategy come<br> together for impactful results.
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
    <div class="tt-section no-padding-bottom padding-bottom-xlg-40">
        <div class="tt-section-inner tt-wrap">

            <div class="tt-row tt-lg-row-reverse">
                <div class="tt-col-lg-6 margin-bottom-20">

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
                        <video playsinline muted autoplay loop preload="metadata" poster="assets/vids/1200/video-3-1200.jpg" class="tt-anim-zoomin">
                            <source src="assets/vids/placeholder.mp4" data-src="assets/vids/1200/video-3-1200.mp4" type="video/mp4">
                            <source src="assets/vids/placeholder.webm" data-src="assets/vids/1200/video-3-1200.webm" type="video/webm">
                        </video>
                    </div>
                    <!-- End tt-video -->

                </div> <!-- /.tt-col -->

                <div class="tt-col-lg-1">

                </div> <!-- /.tt-col -->

                <div class="tt-col-lg-5">

                    <h2 class="tt-font-alter tt-anim-fadeinup">Hello!</h2>
                    <div class="text-lg tt-anim-fadeinup">
                        <p>I’m Jesper Dietrich, a Melbourne-based creative designer with over 15 years of crafting impactful digital solutions.</p>

                        <p>I believe great design is more than just aesthetics—it’s about strategy, usability, and creating meaningful connections between brands and their audiences.</p>

                        <p>With a keen eye for detail, a passion for innovation, and a user-centered approach, I collaborate with brands of all sizes to bring their vision to life. Let’s work together to create something extraordinary.</p>

                        <!-- Begin big round button 
                        ============================ -->
                        <div class="tt-big-round-ptn margin-top-20 margin-left-xlg-10-p">
                            <a href="portfolio.html" class="tt-big-round-ptn-holder tt-magnetic-item">
                                <div class="tt-big-round-ptn-inner">Explore<br> My Work</div>
                            </a>
                        </div>
                        <!-- End big round button -->

                    </div>

                </div> <!-- /.tt-col -->
            </div> <!-- /.tt-row -->

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
    <div class="tt-section no-padding">
        <div class="tt-section-inner">

            <!-- Begin crossed scrolling text 
            ================================== -->
            <div class="tt-scrolling-text-crossed">
                <div class="tt-scrolling-text-crossed-inner">

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
                    <div class="tt-scrolling-text scrt-dyn-separator scrt-color-reverse" data-scroll-speed="5" data-change-direction="true" data-opposite-direction="true">
                        <div class="tt-scrt-inner">
                            <div class="tt-scrt-content">
                                Highly motivated 
                                <span class="tt-scrt-separator">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"></path>
                                    </svg>
                                </span> 
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
                    <div class="tt-scrolling-text scrt-dyn-separator" data-scroll-speed="5" data-change-direction="true">
                        <div class="tt-scrt-inner">
                            <div class="tt-scrt-content">
                                Highly motivated 
                                <span class="tt-scrt-separator">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"></path>
                                    </svg>
                                </span>
                            </div> <!-- /.tt-scrt-content -->
                        </div> <!-- /.tt-scrt-inner -->
                    </div> <!-- /.tt-scrolling-text -->

                </div> <!-- /.tt-scrolling-text-crossed-inner -->
            </div>
            <!-- End crossed scrolling text -->

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
    <div class="tt-section no-padding-bottom padding-bottom-xlg-80">
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
                        <h3 class="tt-heading-subtitle tt-text-reveal">What I Do</h3>
                        <h2 class="tt-heading-title tt-text-reveal">Services</h2> <!-- You can use <br> to break a text line if needed -->
                    </div>
                    <!-- End tt-Heading -->

                    <div class="tt-text-uppercase max-width-400 margin-left-xlg-10-p text-pretty tt-text-reveal">
                        Comprehensive digital services to boost your online presence and achieve impactful results.
                    </div>

                </div> <!-- /.tt-col -->
            
                <div class="tt-col-xl-4 tt-align-self-end margin-top-40">

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
    <div class="tt-section">
        <div class="tt-section-inner">

            <!-- Begin horizontal accordion
            ================================ 
            * Use class "tt-hac-alter-hover" to enable alternative hover style (no effect on small screens!).
            * INFO: Do not use too many items here! The more items, the narrower the space to display. Up to 5 items are optimal. If you want to display more items, use a vertical accordion instead.
            -->
            <div class="tt-horizontal-accordion tt-hac-alter-hover tt-anim-fadeinup">

                <!-- Begin horizontal accordion item 
                ===================================== -->
                <div class="tt-hac-item cursor-alter">
                    <div class="tt-hac-item-count"></div>
                    <div class="tt-hac-item-inner">
                        <div class="tt-hac-item-content">
                            <div class="tt-haci-content-top">
                                <h2 class="tt-haci-title">Digital<br> Strategy</h2>
                                <div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
                                    Crafting data-driven strategies to elevate your online presence. I align your business goals with innovative digital solutions, ensuring measurable growth and a competitive edge in the digital landscape.
                                </div> <!-- /.tt-haci-description -->
                            </div> <!-- /.tt-haci-content-top -->

                            <div class="tt-haci-content-bottom">
                                <a href="services.html" class="tt-btn tt-btn-outline tt-magnetic-item">
                                    <span data-hover="Read More">Read More</span>
                                </a>
                            </div> <!-- /.tt-haci-content-bottom -->
                        </div> <!-- /.tt-hac-item-content -->
                    </div> <!-- /.tt-hac-item-inner -->
                </div>
                <!-- End horizontal accordion item -->

                <!-- Begin horizontal accordion item 
                ===================================== -->
                <div class="tt-hac-item cursor-alter">
                    <div class="tt-hac-item-count"></div>
                    <div class="tt-hac-item-inner">
                        <div class="tt-hac-item-content">
                            <div class="tt-haci-content-top">
                                <h2 class="tt-haci-title">Branding<br> &amp; Identity</h2>
                                <div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
                                    Building brands that resonate. From logos to messaging, I create cohesive and memorable identities that reflect your values, connect with your audience, and stand out in the market.
                                </div> <!-- /.tt-haci-description -->
                            </div> <!-- /.tt-haci-content-top -->

                            <div class="tt-haci-content-bottom">
                                <a href="services.html" class="tt-btn tt-btn-outline tt-magnetic-item">
                                    <span data-hover="Read More">Read More</span>
                                </a>
                            </div> <!-- /.tt-haci-content-bottom -->
                        </div> <!-- /.tt-hac-item-content -->
                    </div> <!-- /.tt-hac-item-inner -->
                </div>
                <!-- End horizontal accordion item -->

                <!-- Begin horizontal accordion item 
                ===================================== -->
                <div class="tt-hac-item cursor-alter">
                    <div class="tt-hac-item-count"></div>
                    <div class="tt-hac-item-inner">
                        <div class="tt-hac-item-content">
                            <div class="tt-haci-content-top">
                                <h2 class="tt-haci-title">UI/UX<br> Design</h2>
                                <div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
                                    Designing intuitive and engaging experiences. I blend user-centered design principles with cutting-edge aesthetics to create interfaces that are not only beautiful but also functional and easy to navigate.
                                </div> <!-- /.tt-haci-description -->
                            </div> <!-- /.tt-haci-content-top -->

                            <div class="tt-haci-content-bottom">
                                <a href="services.html" class="tt-btn tt-btn-outline tt-magnetic-item">
                                    <span data-hover="Read More">Read More</span>
                                </a>
                            </div> <!-- /.tt-haci-content-bottom -->
                        </div> <!-- /.tt-hac-item-content -->
                    </div> <!-- /.tt-hac-item-inner -->
                </div>
                <!-- End horizontal accordion item -->

                <!-- Begin horizontal accordion item 
                ===================================== -->
                <div class="tt-hac-item cursor-alter">
                    <div class="tt-hac-item-count"></div>
                    <div class="tt-hac-item-inner">
                        <div class="tt-hac-item-content">
                            <div class="tt-haci-content-top">
                                <h2 class="tt-haci-title">Web<br> Design</h2>
                                <div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
                                    Transforming ideas into stunning websites. My custom web designs are tailored to your brand, optimized for performance, and designed to captivate your audience while driving conversions.
                                </div> <!-- /.tt-haci-description -->
                            </div> <!-- /.tt-haci-content-top -->

                            <div class="tt-haci-content-bottom">
                                <a href="services.html" class="tt-btn tt-btn-outline tt-magnetic-item">
                                    <span data-hover="Read More">Read More</span>
                                </a>
                            </div> <!-- /.tt-haci-content-bottom -->
                        </div> <!-- /.tt-hac-item-content -->
                    </div> <!-- /.tt-hac-item-inner -->
                </div>
                <!-- End horizontal accordion item -->

                <!-- Begin horizontal accordion item 
                ===================================== -->
                <div class="tt-hac-item cursor-alter">
                    <div class="tt-hac-item-count"></div>
                    <div class="tt-hac-item-inner">
                        <div class="tt-hac-item-content">
                            <div class="tt-haci-content-top">
                                <h2 class="tt-haci-title">Product<br> Design</h2>
                                <div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
                                    Innovating with purpose. I design products that solve real problems, combining functionality, aesthetics, and user experience to deliver solutions that users love and businesses rely on.
                                </div> <!-- /.tt-haci-description -->
                            </div> <!-- /.tt-haci-content-top -->

                            <div class="tt-haci-content-bottom">
                                <a href="services.html" class="tt-btn tt-btn-outline tt-magnetic-item">
                                    <span data-hover="Read More">Read More</span>
                                </a>
                            </div> <!-- /.tt-haci-content-bottom -->
                        </div> <!-- /.tt-hac-item-content -->
                    </div> <!-- /.tt-hac-item-inner -->
                </div>
                <!-- End horizontal accordion item -->

            </div>
            <!-- End horizontal accordion -->

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