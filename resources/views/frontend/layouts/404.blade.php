@extends('frontend.layouts.main')

@section('content')

<div id="tt-content-wrap">


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
    <div class="tt-section no-padding">
        <div class="tt-section-inner tt-wrap">

            <div class="tt-404-error">
                <h2 class="tt-404-error-subtitle">404 Error</h2>
                <h1 class="tt-404-error-title">Oops!</h1>
                <div class="tt-404-error-description">Something went wrong.<br> This page could not be found.</div>
                <a href="/" class="tt-btn tt-btn-secondary margin-top-40 tt-magnetic-item">
                    <span data-hover="Home Page">Home Page</span>
                </a>
            </div>

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