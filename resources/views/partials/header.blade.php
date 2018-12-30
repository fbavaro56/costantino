<header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 0, 'stickySetTop': '0px', 'stickyChangeLogo': false}">
    <div class="header-body">
        <div class="header-container container py-2">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{url('/')}}">
                                <img alt="te quiero cocinar" height="50" src="{{asset('img/tequierococinar3.png')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a class="nav-link @if($active == 'home') active @endif" href="{{url('/')}}">
                                                <span class="menu-text">@if($active == 'home') <b>Home</b> @else Home @endif</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a class="nav-link @if($active == 'workshops') active @endif" href="{{url('workshops')}}">
                                                <span class="menu-text">@if($active == 'workshops') <b>Workshops</b> @else Workshops @endif</span>
                                            </a>
                                        </li>
                                        {{--<li class="dropdown-full-color dropdown-secondary">--}}
                                            {{--<a class="nav-link" href="demo-restaurant-about.html">--}}
                                                {{--<span class="menu-text">Special Events</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a class="nav-link @if($active == 'about') active @endif" href="{{url('about')}}">
                                                <span class="menu-text">@if($active == 'about') <b>About us</b> @else About us @endif</span>
                                            </a>
                                        </li>
                                        {{--<li class="dropdown-full-color dropdown-secondary">--}}
                                            {{--<a class="nav-link" href="demo-restaurant-contact.html">--}}
                                                {{--<span class="menu-text">Gallery</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        <li class="dropdown-full-color dropdown-secondary ">
                                            <a class="nav-link @if($active == 'contact') active @endif" href="{{url('contact')}}">
                                                <span class="menu-text">@if($active == 'contact') <b>Contact Us</b> @else Contact Us @endif</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
