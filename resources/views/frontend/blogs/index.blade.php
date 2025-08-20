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
<div id="page-header" class="ph-cap-xxxxlg ph-center ph-image-parallax ph-caption-parallax">

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
                <h2 class="ph-caption-subtitle">Articles &amp; News</h2>
                <h1 class="ph-caption-title">Blog</h1>
                <!-- <div class="ph-caption-description max-width-700">
                    Description
                </div> -->
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
                    <h2 class="ph-caption-subtitle">Articles &amp; News</h2>
                    <h1 class="ph-caption-title">News</h1>
                    <!-- <div class="ph-caption-description max-width-700">
                        Description
                    </div> -->
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
    <div class="tt-section padding-bottom-xlg-120">
        <div class="tt-section-inner tt-wrap">

            <!-- Begin blog list
            ===================== 
            * Use class "bli-image-cropped" to grop blog list item images (set fixed height).
            * Use class "bli-compact" to enable compact blog list style. Note: If "tt-sidebar" is used, then add more width to "tt-section-inner", for example "max-width-1600".
            -->
            <div id="blog-list" class="bli-compact bli-image-cropped">
                @foreach($blogs as $blog)
                <article class="blog-list-item">
            
                    <!-- Begin blog list item image -->
                    <a href="{{ route('blog.show', $blog->slug) }}" class="bli-image-wrap" data-cursor="Read<br>More">
                        <figure class="bli-image tt-anim-zoomin">
                            <img src="{{ asset('uploads/blog/banner/'.$blog->banner_image) }}" loading="lazy" alt="Image">
                        </figure>
                    </a>
                    <!-- End blog list item image -->
                    
                    <!-- Begin blog list item info -->
                    <div class="bli-info">
                        <div class="bli-categories">
                            <p>{{ $blog->sub_title }}</p>
                            <!-- <a href="blog-archive.html">Uncategorized</a> -->
                        </div>
                        <h2 class="bli-title"><a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a></h2>
                        <div class="bli-meta"> 
                            <span class="published">{{ $blog->published_at->format('F d, Y') }}</span>
                            <span class="posted-by">- by <a>{{ $blog->author }}</a></span>
                        </div>
                        <div class="bli-desc"> <!-- 3 lines is optimal! -->
                            {!! $blog->description !!}
                        </div>
                        <a href="{{ route('blog.show', $blog->slug) }}" class="tt-btn tt-btn-primary">
                            <span data-hover="Read More">Read More</span>
                        </a>
                    </div>
                    <!-- End blog list item info -->

                </article>
                @endforeach


            </div>
            <!-- End blog list -->


            <!-- Begin tt-pagination (uncomment below code if you want to use pagination)
            ========================= 
            * Use class "tt-pagin-center" to align center.
            -->
            @if($blogs->hasPages())
            <div class="tt-pagination">
                @if($blogs->onFirstPage())
                    <div class="tt-pagin-prev">
                        <span class="tt-pagin-item disabled"><i class="fas fa-arrow-left"></i></span>
                    </div>
                @else
                    <div class="tt-pagin-prev">
                        <a href="{{ $blogs->previousPageUrl() }}" class="tt-pagin-item tt-magnetic-item"><i class="fas fa-arrow-left"></i></a>
                    </div>
                @endif
                
                <div class="tt-pagin-numbers">
                    @foreach($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                        @if($page == $blogs->currentPage())
                            <span class="tt-pagin-item tt-magnetic-item active">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="tt-pagin-item tt-magnetic-item">{{ $page }}</a>
                        @endif
                    @endforeach
                </div>
                
                @if($blogs->hasMorePages())
                    <div class="tt-pagin-next">
                        <a href="{{ $blogs->nextPageUrl() }}" class="tt-pagin-item tt-pagin-next tt-magnetic-item"><i class="fas fa-arrow-right"></i></a>
                    </div>
                @else
                    <div class="tt-pagin-next">
                        <span class="tt-pagin-item tt-pagin-next disabled"><i class="fas fa-arrow-right"></i></span>
                    </div>
                @endif
            </div>
            @endif
            <!-- End tt-pagination -->

        </div> <!-- /.tt-section-inner -->
    </div>
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