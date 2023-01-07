<!-- Main Header -->
<header class="main-header" id="main-header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container clearfix">
            <!-- Top Left -->
            <div class="top-left">
                <ul class="clearfix">
                    <li><a href="/"><span class="fa fa-circle"></span> Welcome to {{ config('app.name') }}!</a></li>
                </ul>
            </div>

            <!-- Top Right -->
            <div class="top-right">
                <ul class="clearfix">
                    <li><a href="#"><span class="fa fa-phone"></span>07737047287, 01215546950, 07966934643</a></li>
                    <li><span class="fa fa-clock-o"></span> 10am - 5pm </li>
                    <li><a href="mailto:http://info@testimonycare.co.uk"><span class="fa fa-at"></span> info@testimonycare.co.uk </a></li>
                    <li><a href="https://goo.gl/maps/duSxoQrgRV4dmVeRA"><span class="fa fa-map-marker"></span> Find us on map</a></li>
                </ul>
            </div>

        </div>
    </div><!-- Header Top End -->

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container clearfix">

            <!--Outer Box-->
            <div class="outer-box">

                <!-- Logo -->
                <div class="logo">
                    <a href="/"><img src="index/wp-content/themes/images/logo-white.jpg" alt="" title="{{ config('app.name') }}" width="90"></a>
                </div>

                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation">
                            <li id="menu-item-763" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-755 current_page_item menu-item-763 {{ (request()->is('/')) ? 'active' : '' }}"><a title="Home" href="/" class="hvr-underline-from-left1" data-scroll data-options="easing: easeOutQuart">Home</a></li>
                            <li id="menu-item-775" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-775 {{ (request()->is('about')) ? 'active' : '' }}"><a title="About us" href="/about" class="hvr-underline-from-left1" data-scroll data-options="easing: easeOutQuart">About us</a></li>
                            <li id="menu-item-824" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-824 {{ (request()->is('services')) ? 'active' : '' }}"><a title="Services" href="/services" class="hvr-underline-from-left1" data-scroll data-options="easing: easeOutQuart">Services</a></li>
                            <li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-790 {{ (request()->is('contact')) ? 'active' : '' }}"><a title="Contact Us" href="/contact" class="hvr-underline-from-left1" aria-expanded="false" data-scroll data-options="easing: easeOutQuart">Contact Us</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->


            </div>
        </div>
    </div><!-- Header Lower End-->

</header>
<!--End Main Header -->