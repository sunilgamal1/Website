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
                <img src="{{ asset('uploads/motion/banner/' . $motion->banner_image) }}" alt="Image">
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
                    <h1 class="ph-caption-title">{{ $motion->title }}</h1>
                    <div class="ph-caption-categories">
                        <div class="ph-caption-category">{{ $motion->sub_title }}</div>
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

        @if($motion->description)
        <!-- =======================
    ///// Begin tt-section /////
    ============================ 
    * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
    * You can use classes "border-top" and "border-bottom" if needed. 
    * Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
    -->
        <div class="tt-section padding-top-xlg-120">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-row">
                    <div class="tt-col-lg-3">
                    </div> <!-- /.tt-col -->

                    <div class="tt-col-lg-9">

                        <!-- Begin tt-Heading 
                    ====================== 
                    * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
                    * Use class "tt-heading-center" to align tt-Heading to center.
                    * Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
                    * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                    -->
                        <div class="tt-heading tt-heading-lg margin-bottom-40">
                            <!-- <h3 class="tt-heading-subtitle tt-text-reveal">Subtitle</h3> -->
                            <h2 class="tt-heading-title tt-text-reveal">About the Project</h2> <!-- You can use <br> to break a text line if needed -->
                        </div>
                        <!-- End tt-Heading -->

                        <div class="tt-anim-fadeinup">
                            <p>{!! $motion->description !!}</p>
                        </div>

                    </div> <!-- /.tt-col -->
                </div> <!-- /.tt-row -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->
        @endif

        @if($motion_images && count($motion_images) > 0)
        <!-- =======================
    ///// Begin tt-section /////
    ============================ 
    * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
    * You can use classes "border-top" and "border-bottom" if needed. 
    * Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
    -->
        <div class="tt-section no-padding-top">
            <div class="tt-section-inner tt-wrap">

                <!-- Begin content slider 
            ==========================
            * Use class "cs-hide-pagination" to hide pagination (for desktop only!).
            * Available data attributes:
                data-speed="800"......................(milliseconds)
                data-autoplay="5000"..................(milliseconds. Note: disabled after user first interactions)
                data-pagination-type="bullets"........(bullets/fraction/progressbar)
                data-loop="true"......................(true/false)
            * Note: Remove classes "cursor-arrow-left" and "cursor-arrow-right" from the slider navigation below if you want to use classic navigation arrows.
            -->
                <div class="tt-content-slider tt-anim-fadeinup" data-loop="true" data-speed="800" data-pagination-type="bullets">

                    <!-- Begin swiper container -->
                    <div class="swiper">

                        <!-- Begin swiper wrapper (required) -->
                        <div class="swiper-wrapper">

                            @foreach ($motion_images as $motion_image)
                            <div class="swiper-slide">
                                <div class="tt-content-slider-item">
                                    <div class="tt-cs-image-wrap" data-swiper-parallax="50%">
                                        <img src="{{ asset('uploads/motion/images/' . $motion_image->image) }}" class="tt-cs-image" loading="lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div> <!-- /.tt-cs-image-wrap -->
                                </div> <!-- /.tt-content-slider-item -->
                            </div>
                            @endforeach



                        </div>
                        <!-- End swiper wrapper -->

                    </div>
                    <!-- End swiper container -->

                    <!-- Content slider navigation (arrows) 
                ======================================== 
                * Remove classes "cursor-arrow-left" and "cursor-arrow-right" if you want to use classic navigation arrows.
                -->
                    <div class="tt-cs-nav-prev cursor-arrow-left">
                        <div class="tt-cs-nav-arrow tt-magnetic-item"></div>
                    </div>
                    <div class="tt-cs-nav-next cursor-arrow-right">
                        <div class="tt-cs-nav-arrow tt-magnetic-item"></div>
                    </div>

                    <!-- Content slider pagination 
                =============================== -->
                    <div class="tt-cs-pagination hide-cursor"></div>

                </div>
                <!-- End content slider -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->
        @endif

        @if($motion_info && count($motion_info) > 0)
        <!-- =======================
    ///// Begin tt-section /////
    ============================ 
    * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
    * You can use classes "border-top" and "border-bottom" if needed. 
    * Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
    -->
        <div class="tt-section padding-bottom-xlg-140">
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
                        <div class="tt-heading tt-heading-lg margin-bottom-60">
                            <!-- <h3 class="tt-heading-subtitle tt-text-reveal">Subtitle</h3> -->
                            <h2 class="tt-heading-title tt-text-reveal">{{ $motion->about_title }}</h2> <!-- You can use <br> to break a text line if needed -->
                        </div>
                        <!-- End tt-Heading -->

                    </div> <!-- /.tt-col -->

                    @php $first_items = []; $second_items = []; $counter = 0; @endphp
                    @foreach ($motion_info as $motion_info)
                    @if($counter % 2 == 0)
                    @php $first_items[] = $motion_info; @endphp
                    @else
                    @php $second_items[] = $motion_info; @endphp
                    @endif
                    @php $counter++; @endphp
                    @endforeach

                    <div class="tt-col-lg-4">
                        <ul class="list-styled">
                            @foreach($first_items as $item)
                            <li class="margin-bottom-20 tt-anim-fadeinup">
                                <h6 class="no-margin">{{ $item->title }}</h6>
                                <div class="text-muted">{{ $item->info }}</div>
                            </li>
                            @endforeach
                        </ul>
                    </div> <!-- /.tt-col -->

                    <div class="tt-col-lg-4">
                        <ul class="list-styled">
                            @foreach($second_items as $item)
                            <li class="margin-bottom-20 tt-anim-fadeinup">
                                <h6 class="no-margin">{{ $item->title }}</h6>
                                <div class="text-muted">{{ $item->info }}</div>
                            </li>
                            @endforeach
                        </ul>
                    </div> <!-- /.tt-col -->
                </div> <!-- /.tt-row -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->
        @endif

        @if($motion->video_1)
        <!-- =======================
    ///// Begin tt-section /////
    ============================ 
    * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
    * You can use classes "border-top" and "border-bottom" if needed. 
    * Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
    -->
        <div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120">
            <div class="tt-section-inner tt-wrap text-center">

                <div class="tt-image tti-border-radius tti-landscape margin-bottom-40 tt-anim-fadeinup">
                    <figure>
                        <video class="tt-anim-zoomin" autoplay muted loop playsinline>
                            <source src="{{ asset('uploads/motion/videos/' . $motion->video_1) }}" type="video/mp4">
                        </video>
                    </figure>
                </div>

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->
        @endif


        @if($motion->banner_image_2 && $motion->title_2)
        <!-- =======================
    ///// Begin tt-section /////
    ============================ 
    * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
    * You can use classes "border-top" and "border-bottom" if needed. 
    * Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
    -->
        <div class="tt-section full-height-vh padding-top-120 padding-bottom-120 padding-top-xlg-200 padding-bottom-xlg-200">

            <!-- Begin tt-section background
        ================================= 
        * Use class "tt-sbg-grayscale" to enable black & white background.
        * Use class "tt-sbg-cover-*" to set video overlay opacity. For example "tt-sbg-cover-2" or "tt-sbg-cover-2-5" (up to "tt-sbg-cover-9-5"). 
        * Use class "tt-sbg-is-light" if needed, it makes the elements dark and more visible if you use a very light background image.
        -->
            <div class="tt-section-background tt-sbg-image tt-sbg-cover-2">
                <img src="{{ asset('uploads/motion/banner/' . $motion->banner_image_2) }}" class="tt-image-parallax tt-anim-fadeinup" loading="lazy" alt="Image">
            </div>
            <!-- End tt-section background -->

            <!-- Begin tt-section background (video)
        ========================================= 
        * Use class "tt-sbg-grayscale" to enable black & white background.
        * Use class "tt-sbg-cover-*" to set video overlay opacity. For example "tt-sbg-cover-2" or "tt-sbg-cover-2-5" (up to "tt-sbg-cover-9-5"). 
        * Use class "tt-sbg-is-light" if needed, it makes the elements dark and more visible if you use a very light background video.
        * Use attribute "loop" in <video> tag to make the video play repeatedly.
        -->
            <!-- <div class="tt-section-background tt-sbg-video tt-sbg-grayscale tt-sbg-cover-1">
            <video class="tt-image-parallax" loop muted autoplay playsinline preload="metadata" poster="assets/vids/1920/video-2-1920.jpg">
                <source src="assets/vids/placeholder.mp4" data-src="assets/vids/1920/video-2-1920.mp4" type="video/mp4">
                <source src="assets/vids/placeholder.webm" data-src="assets/vids/1920/video-2-1920.webm" type="video/webm">
            </video>
        </div> -->
            <!-- End tt-section background -->

            <div class="tt-section-inner tt-wrap text-center">

                <!-- Begin tt-Heading 
            ====================== 
            * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
            * Use class "tt-heading-center" to align tt-Heading to center.
            * Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
            * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
            -->
                <div class="tt-heading tt-heading-xxxlg tt-heading-center no-margin">
                    <!-- <h3 class="tt-heading-subtitle tt-text-reveal">Subtitle</h3> -->
                    <h2 class="tt-heading-title tt-text-reveal">{{ $motion->title_2 }}</h2> <!-- You can use <br> to break a text line if needed -->
                    @if($motion->sub_title_2)
                    <p>{{ $motion->sub_title_2 }}</p>
                    @endif
                </div>
                <!-- End tt-Heading -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->
        @endif

        @if($motion->conclusion)
        <!-- =======================
    ///// Begin tt-section /////
    ============================ 
    * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
    * You can use classes "border-top" and "border-bottom" if needed. 
    * Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
    -->
        <div class="tt-section padding-top-xlg-160 padding-bottom-xlg-160">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-row">
                    <div class="tt-col-lg-9">

                        <!-- Begin tt-Heading 
                    ====================== 
                    * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
                    * Use class "tt-heading-center" to align tt-Heading to center.
                    * Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
                    * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                    -->
                        <div class="tt-heading tt-heading-lg margin-bottom-40">
                            <!-- <h3 class="tt-heading-subtitle tt-text-reveal">Subtitle</h3> -->
                            <h2 class="tt-heading-title tt-text-reveal">Conclusion</h2> <!-- You can use <br> to break a text line if needed -->
                        </div>
                        <!-- End tt-Heading -->

                        <div class="tt-anim-fadeinup">
                            <p>{!! $motion->conclusion !!}</p>
                        </div>

                        @if($motion->button_link && $motion->button_text)
                        <a href="{{ $motion->button_link }}" class="tt-btn tt-btn-outline margin-top-20 tt-anim-fadeinup tt-magnetic-item" target="_blank" rel="noopener">
                            <span data-hover="{{ $motion->button_text }}">{{ $motion->button_text }}</span>
                        </a>
                        @endif

                    </div> <!-- /.tt-col -->

                    <div class="tt-col-lg-3">
                    </div> <!-- /.tt-col -->
                </div> <!-- /.tt-row -->

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