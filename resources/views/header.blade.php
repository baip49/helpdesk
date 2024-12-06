<!-- Mobile Menu -->
<div class="mobile-nav-wrapper">
    <div class="mobile-menu-inner">
        <ul class="mobile-menu">
            <li class="has-sub"><a href="{{ route('index') }}">HOME</a></li>
            <li class="has-sub"><a href="{{ route('about') }}">ABOUT US</a></li>
            <li class="has-sub"><a href="{{ route('portfolio') }}">PORTFOLIO</a></li>
            <li class="has-sub"><a href="{{ route('services') }}">SERVICES</a></li>
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
        </ul>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
<!-- Header -->
<header class="site-header fixed-header">
    <div class="container expanded">
        <div class="header-wrap">
            <li class="sr-white-button">
                <!--<a href="https://twitter.com/KyhlusServices" target="_blank"><i class="fa fa-twitter"></i></p></a>-->
            </li>
            <div class="fixed-header-logo">
                <a href=""><img src="" alt=""></a>
            </div>
            <div class="is-fixed-header-logo">
                <a href="#"><img src="" alt=""></a>
            </div>
            <div class="header-nav">
                <ul class="main-menu">
                    <li class="menu-item-has-children"><a href="{{ route('index') }}"><b><i class="fa fa-home"></i>
                                HOME</b></a>
                    </li>
                    <li class="menu-item-has-children"><a href="{{ route('about') }}"><b><i class="fa fa-users"></i>
                                ABOUT
                                US</b></a></li>
            </div>
            <div class="fixed-header-logo">
                <a href="{{ route('index') }}"><img src="images/white-logo.png" alt=""></a>
            </div>
            <div class="is-fixed-header-logo">
                <a href="{{ route('index') }}"><img src="images/black-logo.png" alt=""></a>
            </div>
            <div class="header-nav">
                <ul class="main-menu">
                    <li class="menu-item-has-children"><a href="{{ route('portfolio') }}"><b><i
                                    class="fa fa-suitcase"></i>
                                PORTFOLIO</b></a></li>
                    <li class="menu-item-has-children"><a href="{{ route('services') }}"><b><i class="fa fa-server"></i>
                                SERVICES</b></a>
                    </li>
                </ul>
            </div>
            <div class="header-widgets">
                <ul class="right-menu">
                    <li class="sr-white-button">
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </li>
                    <li class="menu-item menu-mobile-nav">
                        <a href="#" class="menu-bar" id="menu-show-mobile-nav">
                            <span class="hamburger"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Header -->
