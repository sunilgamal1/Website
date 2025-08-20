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
<div id="page-header" class="ph-cap-lg ph-image-parallax ph-caption-parallax">

    <!-- Begin page header image 
    ============================= 
    * Use class "ph-image-grayscale" to enable black & white image.
    * Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5"). 
    -->
    <div class="ph-image ph-image-cover-5">
        <div class="ph-image-inner">
            <img src="{{ asset('uploads/blog/banner/'.$blog->banner_image) }}" alt="Image">
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
                <div class="ph-caption-categories">
                    <p class="ph-caption-category">{{ $blog->sub_title }}</p>
                    <!-- <a href="blog-archive.html" class="ph-caption-category">Uncategorized</a> -->
                </div> <!-- /.ph-categories -->
                <h1 class="ph-caption-title">{{ $blog->title }}</h1>
                <div class="ph-caption-meta">
                    <span class="ph-cap-meta-published">{{ $blog->published_at->format('F d, Y') }}</span>
                    <span class="ph-cap-meta-posted-by">by: <a href="" title="View all posts by John Doe">{{ $blog->author }}</a></span>
                </div> <!-- /.ph-meta -->
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
        <div class="tt-section-inner tt-wrap max-width-1000">

            <!-- Begin blog post 
            ===================== -->
            <article class="tt-blog-post">

                <!-- Begin blog post content -->
                <div class="tt-blog-post-content">


                    {!! $blog->description !!}

                    <br>

                    <p>{!! $blog->content !!}</p>

                    <img src="{{ asset('uploads/blog/banner/'.$blog->banner_image) }}" class="tt-blog-post-image" loading="lazy" alt="Image">

                    <p>{!! $blog->conclusion !!}</p>

                   

                </div>
                <!-- End blog post content -->


                <!-- Begin blog post share (Note: Share buttons are for design purposes only!) 
                =========================== -->
                <div class="tt-blog-post-share">
                    <div class="tt-bps-text">Share:</div>
                    <div class="tt-social-buttons">
                        <ul>
                            <li><a href="#0" class="tt-magnetic-item" title="Share on Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#0" class="tt-magnetic-item" title="Share on Twitter"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="#0" class="tt-magnetic-item" title="Share on Pinterest"><i class="fa-brands fa-pinterest"></i></a></li>
                        </ul>
                    </div> <!-- /.social-buttons -->
                </div>
                <!-- End blog post share -->

            </article> 
            <!-- End blog post -->


            <!-- Begin blog post nav 
            ======================== -->
            <div class="tt-blog-post-nav">
                <div class="tt-bp-nav-col tt-bp-nav-left">
                    @if($previous_post)
                    <div class="tt-bp-nav-text">
                        <a href="{{ route('blog.show', $previous_post->slug) }}">
                            <span><i class="fa-solid fa-arrow-left"></i></span>Previous Post
                        </a>
                    </div>
                    <h4 class="tt-bp-nav-title">
                        <a href="{{ route('blog.show', $previous_post->slug) }}">{{ $previous_post->title }}</a>
                    </h4>
                    @else
                    <div class="tt-bp-nav-text disabled">
                        <span><i class="fa-solid fa-arrow-left"></i></span>No Previous Post
                    </div>
                    <h4 class="tt-bp-nav-title disabled">This is the first post</h4>
                    @endif
                </div>
                <div class="tt-bp-nav-col tt-bp-nav-right">
                    @if($next_post)
                    <div class="tt-bp-nav-text">
                        <a href="{{ route('blog.show', $next_post->slug) }}">
                            Next Post<span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                    <h4 class="tt-bp-nav-title">
                        <a href="{{ route('blog.show', $next_post->slug) }}">{{ $next_post->title }}</a>
                    </h4>
                    @else
                    <div class="tt-bp-nav-text disabled">
                        No Next Post<span><i class="fa-solid fa-arrow-right"></i></span>
                    </div>
                    <h4 class="tt-bp-nav-title disabled">This is the last post</h4>
                    @endif
                </div>
            </div>
            <!-- End blog post nav -->



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