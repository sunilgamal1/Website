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
    <div class="ph-image ph-image-cover-1">
        <div class="ph-image-inner">
            <img src="{{ asset('uploads/graphic_art/banner/' . $art->banner_image) }}" alt="Image">
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
                <h1 class="ph-caption-title">{{ $art->title }}</h1>
                <div class="ph-caption-categories">
                    <div class="ph-caption-category">{{ $art->sub_title }}</div>
                    <!-- <div class="ph-caption-category">Varia</div> -->
                </div> <!-- /.ph-categories -->
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


    <!-- =======================
    ///// Begin tt-section /////
    ============================ 
    * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
    * You can use classes "border-top" and "border-bottom" if needed. 
    * Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
    -->
    <div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120">
        <div class="tt-section-inner tt-wrap">

            <div class="tt-row">
                <div class="tt-col-lg-4 padding-right-md-5-p">

                    <!-- Begin tt-Heading 
                    ====================== 
                    * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
                    * Use class "tt-heading-center" to align tt-Heading to center.
                    * Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
                    * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                    -->
                    <div class="tt-heading tt-heading-xlg margin-bottom-30">
                        <!-- <h3 class="tt-heading-subtitle tt-text-reveal">Subtitle</h3> -->
                        <h2 class="tt-heading-title tt-text-reveal">About the<br> Project</h2> <!-- You can use <br> to break a text line if needed -->
                    </div>
                    <!-- End tt-Heading -->

                </div> <!-- /.tt-col -->

                <div class="tt-col-lg-8">

                    <div class="tt-anim-fadeinup">
                        <p>{!! $art->description !!}</p>
                    </div>

                    <!-- Begin project info list
                    ============================= 
                    * Use class "tt-pil-inline" to enable list inline (useful depending on the layout. No effect on small screens!). 
                    -->
                    <div class="tt-project-info-list tt-pil-inline tt-anim-fadeinup margin-top-40">
                        <ul>
                            <li>
                                <div class="pi-list-heading">Client</div>
                                <div class="pi-list-cont">{{ $art->client }}</div>
                            </li>
                            <li>
                                <div class="pi-list-heading">Year</div>
                                <div class="pi-list-cont">{{ $art->year }}</div>
                            </li>
                            <li>
                                <div class="pi-list-heading">Role</div>
                                <div class="pi-list-cont">{{ $art->role }}</div> <!-- Describe in a few words -->
                            </li>
                            <li>
                                <div class="pi-list-heading">Website</div>
                                <div class="pi-list-cont"><a href="{{ $art->url_link }}" target="_blank" rel="noopener">{{ $art->url_title }}<span class="pi-list-icon"><i class="fas fa-arrow-right"></i></span></a></div>
                            </li>
                        </ul>
                    </div>
                    <!-- End project info list -->

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
    <div class="tt-section no-padding-top">
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
            <div class="tt-image tti-full-height">
                <figure>
                    <img src="{{ asset('uploads/graphic_art/banner2/' . $art->banner_image_2) }}" class="tt-image-parallax tt-anim-zoomin" loading="lazy" alt="Image">
                    <figcaption>
                        {{ $art->banner_image_2_name }}
                    </figcaption>
                </figure>
            </div> 
            <!-- End tt-image -->

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
        <div class="tt-section-inner tt-wrap">

            <div class="tt-row">
                <div class="tt-col-lg-9">

                    <div class="text-xxlg tt-text-reveal">
                        {!! $art->conclusion !!}
                    </div>

                </div> <!-- /.tt-col -->

                <div class="tt-col-lg-3">
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
    <div class="tt-section">
        <div class="tt-section-inner tt-wrap">

            <!-- Begin tt-Gallery (works combined with tt-Ggrid!)
            ======================
            * Use class "ttga-hover" to enable gallery item hover effect (behavior depends on "ttgr-gap-*" classes below).
            --> 
            <div class="tt-gallery ttga-hover">

                <!-- Begin tt-Grid
                =================== 
                * Use class "ttgr-layout-2", "ttgr-layout-3", "ttgr-layout-4" to set grid layout (columns). No class = one column.
                * Use class "ttgr-layout-1-2", "ttgr-layout-2-1", "ttgr-layout-2-3", "ttgr-layout-3-2", "ttgr-layout-3-4" or "ttgr-layout-4-3" to set grid mixed layout (columns).
                * Use class "ttgr-layout-creative-1" or "ttgr-layout-creative-2" to set grid creative mixed layout (no effect with classes "ttgr-portrait", "ttgr-portrait-half", "ttgr-not-cropped" and "ttgr-shifted").
                * Use class "ttgr-portrait" or "ttgr-portrait-half" to enable portrait mode (no effect with classes "ttgr-layout-creative-1", "ttgr-layout-creative-2" and "ttgr-not-cropped").
                * Use class "ttgr-gap-1", "ttgr-gap-2", "ttgr-gap-3", "ttgr-gap-4", "ttgr-gap-5" or "ttgr-gap-6" to add space between items.
                * Use class "ttgr-not-cropped" to enable not cropped mode (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
                * Use class "ttgr-shifted" to enable shifted layout (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
                -->
                <div class="tt-grid ttgr-layout-2 ttgr-gap-2">

                    <!-- Begin tt-Grid items wrap 
                    ============================== -->
                    <div class="tt-grid-items-wrap isotope-items-wrap">

                        <!-- Begin tt-Grid item
                        ======================== -->
                      @foreach ($art->images as $image)
                      <div class="tt-grid-item isotope-item">
                            <div class="ttgr-item-inner">

                                <!-- Begin tt-Gallery item
                                =========================== 
                                * IMPORTANT: Make sure all gallery items contain the same attribute data-fancybox="gallery-*". If you use multiple galleries on a page, the attributes of each gallery must be unique!
                                -->
                                <a href="{{ asset('uploads/graphic_art/images/' . $image->image) }}" class="tt-gallery-item" data-cursor="View" data-fancybox="gallery-459719">
                                    <div class="tt-gallery-item-inner">
                                        <div class="tt-gallery-image-wrap tt-anim-zoomin">
                                            <figure class="tt-gallery-image ttgr-height">
                                                <img src="{{ asset('uploads/graphic_art/images/' . $image->image) }}" loading="lazy" alt="image">
                                            </figure> <!-- /.tt-gallery-image -->
                                        </div> <!-- /.tt-gallery-image-wrap -->
                                    </div> <!-- /.tt-gallery-item-inner -->
                                </a>
                                <!-- End tt-Gallery item -->

                            </div> <!-- /.ttgr-item-inner -->
                        </div>
                      @endforeach
                        <!-- End tt-Grid item -->


               

                    </div>
                    <!-- End tt-Grid items wrap  -->

                </div>
                <!-- End tt-Grid -->

            </div>
            <!-- End tt-Gallery -->

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
    <div class="tt-section padding-top-xlg-120 padding-bottom-xlg-140 border-top">
        <div class="tt-section-inner tt-wrap">
            
            <!-- Begin next project nav
            ============================ -->
            <div class="tt-next-project">
                <div class="tt-row">
                    <div class="tt-col-md-7">

                        <div class="tt-next-project-caption">
                            <div class="tt-np-top tt-anim-fadeinup">
                                <a href="portfolio.html" class="tt-btn tt-btn-link">
                                    <span data-hover="All Works">All Works</span>
                                    <span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
                                </a>
                            </div> <!-- /.tt-np-top -->
                            <h3 class="tt-np-title tt-text-reveal">Next<br> Project</h3>
                        </div> <!-- /.tt-next-project-caption -->

                    </div> <!-- /.tt-col -->
                
                    <div class="tt-col-md-5 tt-align-self-center">

                        <div class="tt-next-project-item">
                            <a href="single-project-2.html" class="tt-npi-image" data-cursor="View<br>Project">
                                <figure class="tt-npi-image-inner">
                                    <!-- Note: The recommended maximum image width is 800px -->
                                    <img src="assets/img/portfolio/800/portfolio-2.jpg" class="tt-anim-zoomin" loading="lazy" alt="Image">
                                </figure>
                            </a>
                            <div class="tt-npi-caption">
                                <div class="tt-npi-title">
                                    <a href="single-project-2.html">Coffee Shop</a>
                                </div>
                                <div class="tt-npi-categories-wrap">
                                    <div class="tt-npi-category">Lifestyle</div>
                                    <!-- <div class="tt-npi-category">Varia</div> -->
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


</div>
<!-- End page content -->


<!-- ======================
///// Begin tt-footer /////
=========================== -->
<footer id="tt-footer" class="border-top">
    <div class="tt-footer-inner tt-wrap">

        <div class="tt-row">
            <div class="tt-col-xl-3 tt-col-sm-6">
                <div class="tt-footer-widget">
                    <h5 class="tt-footer-widget-heading">Links</h5>
                    <ul class="tt-footer-widget-list">
                        <li><a href="dummy.html" class="tt-link">Support</a></li>
                        <li><a href="dummy.html" class="tt-link">Licenses</a></li>
                        <li><a href="dummy.html" class="tt-link">Terms of Use</a></li>
                        <li><a href="dummy.html" class="tt-link">Privacy Policy</a></li>
                    </ul> <!-- /.tt-footer-widget-list -->
                </div> <!-- /.tt-footer-widget -->
            </div> <!-- /.tt-col -->

            <div class="tt-col-xl-3 tt-col-sm-6">
                <div class="tt-footer-widget">
                    <h5 class="tt-footer-widget-heading">Sitemap</h5>
                    <ul class="tt-footer-widget-list">
                        <li><a href="about-me.html" class="tt-link">About Me</a></li>
                        <li><a href="portfolio.html" class="tt-link">My Work</a></li>
                        <li><a href="services.html" class="tt-link">Services</a></li>
                        <li><a href="contact.html" class="tt-link">Contact</a></li>
                    </ul> <!-- /.tt-footer-widget-list -->
                </div> <!-- /.tt-footer-widget -->
            </div> <!-- /.tt-col -->

            <div class="tt-col-xl-3 tt-col-sm-6">
                <div class="tt-footer-widget">
                    <h5 class="tt-footer-widget-heading">Contact</h5>
                    <ul class="tt-footer-widget-list">
                        <li>
                            <a href="https://www.google.com/maps/place/121+King+St,+Melbourne+VIC+3000,+Austraalia/@-37.817251,144.955775,17z/data=!3m1!4b1!4m6!3m5!1s0x6ad65d4dd5a05d97:0x3e64f855a564844d!8m2!3d-37.817251!4d144.955775!16s%2Fg%2F11g0g8c54h" class="tt-link" target="_blank" rel="nofollow noopener">121 King Street,<br> Melbourne, Australia</a>
                        </li>
                        <li><a href="mailto:company@email.com" class="tt-link">company@email.com</a></li>
                        <li><a href="tel:+(123)456789000" class="tt-link"> +(123) 456 789 000</a></li>
                        <li>
                            <div class="tt-social-buttons">
                                <ul>
                                    <li><a href="https://www.facebook.com/themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://dribbble.com/Themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="https://www.behance.net/Themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-behance"></i></a></li>
                                    <li><a href="https://www.youtube.com/" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i></a></li>
                                    <!-- <li><a href="https://x.com/Themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a></li> -->
                                </ul>
                            </div> <!-- /.tt-social-buttons -->
                        </li>
                    </ul> <!-- /.tt-footer-widget-list -->
                </div> <!-- /.tt-footer-widget -->
            </div> <!-- /.tt-col -->

            <div class="tt-col-xl-3 tt-col-sm-6 tt-justify-content-xl-end">
                <div class="tt-footer-widget">
                    <ul class="tt-footer-widget-list">
                        <li>
                            <!-- You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-footer-logo img").-->
                            <div class="tt-footer-logo"> 
                                <a href="index.html" class="tt-magnetic-item">
                                    <img src="assets/img/logo-light.png" class="tt-logo-light" loading="lazy" alt="Logo"> <!-- logo light -->
                                    <img src="assets/img/logo-dark.png" class="tt-logo-dark" loading="lazy" alt="Logo"> <!-- logo dark -->
                                </a>
                            </div> <!-- /.tt-footer-logo -->  
                        </li>
                        <li>
                            <div class="tt-footer-copyright">
                                © <span class="tt-copyright-year"></span> <a href="https://themetorium.net/" class="tt-link" target="_blank" rel="nofollow noopener"> Themetorium.net</a><br> 
                                All Rights Reserved
                            </div> <!-- /.tt-footer-copyright -->
                        </li>
                    </ul> <!-- /.tt-footer-widget-list -->
                </div> <!-- /.tt-footer-widget -->
            </div> <!-- /.tt-col -->
        </div> <!-- /.tt-row -->

    </div> <!-- /.tt-section-inner -->
</footer>
<!-- End tt-footer -->


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