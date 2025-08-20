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
        <div class="ph-social">
            <ul>
                <li><a href="https://www.facebook.com/themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="https://dribbble.com/Themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-dribbble"></i></a></li>
                <li><a href="https://www.behance.net/Themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-behance"></i></a></li>
                <li><a href="https://www.youtube.com/" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i></a></li>
                <!-- <li><a href="https://x.com/Themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a></li> -->
            </ul>
        </div>
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
            <div class="tt-section-inner max-width-2200">

                <!-- Begin portfolio grid (works combined with tt-Ggrid!)
            ========================== 
            * Use class "pgi-hover" to enable portfolio grid item hover effect (behavior depends on "ttgr-gap-*" classes below!).
            * Use class "pgi-cap-hover" to enable portfolio grid item caption hover effect (effect only with class "pgi-cap-inside"! Also no effect on mobile devices!).
            * Use class "pgi-cap-center" to position portfolio grid item caption to center.
            * Use class "pgi-cap-inside" to position portfolio grid item caption to inside.
            -->
                <div id="portfolio-grid" class="pgi-hover pgi-cap-inside">

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
                    <div class="tt-grid ttgr-layout-3 ttgr-gap-1 ttgr-not-cropped">



                        <!-- Begin tt-Grid items wrap 
                    ============================== -->
                        <div class="tt-grid-items-wrap isotope-items-wrap">

                            @foreach($arts as $art)
                                <!-- Begin tt-Grid item
======================== -->
                                <div class="tt-grid-item isotope-item lifestyle">
                                    <div class="ttgr-item-inner">

                                        <!-- Begin portfolio grid item 
    ===============================
    * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"! Also no effect on small screens!).
    -->
                                        <div class="portfolio-grid-item">
                                            <a href="{{ route('art-design.show', $art->slug) }}" class="pgi-image-wrap" data-cursor="View<br>Project">
                                                <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                                <div class="pgi-image-holder">
                                                    <div class="pgi-image-inner tt-anim-zoomin">
                                                        <figure class="pgi-image ttgr-height">
                                                            <img src="{{ asset('uploads/graphic_art/banner/' . $art->banner_image) }}" loading="lazy" alt="image">
                                                        </figure> <!-- /.pgi-image -->
                                                    </div> <!-- /.pgi-image-inner -->
                                                </div> <!-- /.pgi-image-holder -->
                                            </a> <!-- /.pgi-image-wrap -->

                                            <div class="pgi-caption">
                                                <div class="pgi-caption-inner">
                                                    <h2 class="pgi-title">
                                                        <a href="{{ route('art-design.show', $art->slug) }}">{{ $art->title }}</a>
                                                    </h2>
                                                    <div class="pgi-categories-wrap">
                                                        <div class="pgi-category">{{ $art->sub_title }}</div>
                                                        <!-- <a href="" class="pgi-category">Varia</a -->
                                                    </div> <!-- /.pli-categories-wrap -->
                                                </div> <!-- /.pgi-caption-inner -->
                                            </div> <!-- /.pgi-caption -->
                                        </div>
                                        <!-- End portfolio grid item -->

                                    </div> <!-- /.ttgr-item-inner -->
                                </div>
                                <!-- End tt-Grid item -->
                            @endforeach

                        </div>
                        <!-- End tt-Grid items wrap  -->

                    </div>
                    <!-- End tt-Grid -->

                    <!-- Begin tt-pagination (uncomment below code if you want to use pagination)
                ========================= 
                * Use class "tt-pagin-center" to align center.
                -->
                    <!-- <div class="tt-pagination tt-pagin-center tt-anim-fadeinup">
                    <div class="tt-pagin-prev">
                        <a href="" class="tt-pagin-item tt-magnetic-item"><i class="fas fa-arrow-left"></i></a>
                    </div>
                    <div class="tt-pagin-numbers">
                        <a href="#" class="tt-pagin-item tt-magnetic-item active">1</a>
                        <a href="" class="tt-pagin-item tt-magnetic-item">2</a>
                        <a href="" class="tt-pagin-item tt-magnetic-item">3</a>
                        <a href="" class="tt-pagin-item tt-magnetic-item">4</a>
                    </div>
                    <div class="tt-pagin-next">
                        <a href="" class="tt-pagin-item tt-pagin-next tt-magnetic-item"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div> -->
                    <!-- End tt-pagination -->

                </div>
                <!-- End portfolio grid -->

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