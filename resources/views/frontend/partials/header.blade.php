<header id="tt-header" class="tt-header-alter tt-header-scroll tt-header-filled">
	<div class="tt-header-inner tt-noise">

		<div class="tt-header-col tt-header-col-left">

			<!-- Begin logo 
						================ 
						Hint: You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-logo img").
						-->
			<div class="tt-logo">
				<a href="index.html" class="tt-magnetic-item">

					<!-- original logo -->
					<!-- <img src="{{ asset('assets/img/logo-light.png') }}" class="tt-logo-light" alt="Logo"> 
					<img src="{{ asset('assets/img/logo-dark.png') }}" class="tt-logo-dark" alt="Logo">  -->

					<!-- new logo replace this -->
					<img src="{{ asset('config/images/logo.png') }}" class="tt-logo-light" alt="Logo"> 
					<img src="{{ asset('config/images/logo.png') }}" class="tt-logo-dark" alt="Logo"> 
				</a>
			</div>
			<!-- End logo -->

		</div> <!-- /.tt-header-col -->

		<div class="tt-header-col tt-header-col-center">

			<!-- Begin main menu (classic)
						===============================
						* Use class "tt-m-menu-center" to align mobile menu to center.
						-->
			<nav class="tt-main-menu tt-m-menu-center">
				<div class="tt-main-menu-holder">
					<div class="tt-main-menu-inner">
						<div class="tt-main-menu-content">

							<!-- Begin main menu list -->
							<ul class="tt-main-menu-list">


								<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
								<li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('about') }}">About</a></li>
								<li class="{{ Request::is('art-design*') ? 'active' : '' }}"><a href="{{ url('art-design') }}">Art Design</a></li>
								<li class="{{ Request::is('digital-design') ? 'active' : '' }}"><a href="{{ url('digital-design') }}">Digital Design </a></li>
								<li class="{{ Request::is('motion') ? 'active' : '' }}"><a href="{{ url('motion') }}">Motion </a></li>
								<li class="{{ Request::is('blogs') ? 'active' : '' }}"><a href="{{ url('blogs') }}">Blogs</a></li>
								<li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('contact') }}">Contact</a></li>




							</ul>
							<!-- End main menu list -->

						</div> <!-- /.tt-main-menu-content -->
					</div> <!-- /.tt-main-menu-inner -->
				</div> <!-- /.tt-main-menu-holder -->

			</nav>
			<!-- End main menu -->

		</div> <!-- /.tt-header-col -->

		<div class="tt-header-col tt-header-col-right">

			<!-- Begin mobile menu toggle button (for "tt-main-menu") -->
			<div id="tt-m-menu-toggle-btn-wrap">
				<div class="tt-m-menu-toggle-btn-text">
					<span class="tt-m-menu-text-menu">Menu</span>
					<span class="tt-m-menu-text-close">Close</span>
				</div>
				<div class="tt-m-menu-toggle-btn-holder">
					<a href="#" class="tt-m-menu-toggle-btn"><span></span></a>
				</div>
			</div>
			<!-- End mobile menu toggle button -->

			<!-- Begin header button (hidden on small screens!) -->
			<a href="{{ url('contact') }}" class="tt-btn tt-btn-secondary hide-from-xlg tt-magnetic-item">
				<span data-hover="Contact">Contact</span>
			</a>
			<!-- End header button -->

			<!-- Begin style switch button -->
			<div class="tt-style-switch">
				<div class="tt-style-switch-inner tt-magnetic-item">
					<div class="tt-stsw-light">
						<i class="fas fa-sun"></i>
					</div>
					<div class="tt-stsw-dark">
						<i class="fas fa-moon"></i>
					</div>
				</div>
			</div>
			<!-- End style switch button -->

		</div> <!-- /.header-col -->
	</div> <!-- /.header-inner -->
</header>