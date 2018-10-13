<header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 56, 'stickySetTop': '-56px', 'stickyChangeLogo': false}">
    <div class="header-body">
        <div class="header-top header-top-primary header-top-style-3">
            <div class="container">
                <div class="header-row py-2">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <p class="d-none d-sm-block text-color-tertiary">
                                The best place to eat in downtown Porto!
                            </p>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="d-none d-lg-block">
                                        <span class="ws-nowrap"><i class="fas fa-map-marker-alt"></i> 123 Street Name, Porto</span>
                                    </li>
                                    <li>
                                        <span class="ws-nowrap"><i class="fas fa-phone"></i> (123) 456-789</span>
                                    </li>
                                    <li class="d-none d-md-block">
                                        <span class="ws-nowrap"><i class="far fa-envelope"></i> <a href="mailto:mail@example.com">mail@example.com</a></span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container py-2">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{url('/')}}">
                                <img alt="Porto" width="116" height="50" src="https://via.placeholder.com/116x50">
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
                                                <span class="menu-text">@if($active == 'workshops') <b>Our Workshops</b> @else Our Workshops @endif</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a class="nav-link" href="demo-restaurant-about.html">
                                                <span class="menu-text">Special Events</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a class="nav-link" href="demo-restaurant-press.html">
                                                <span class="menu-text">About us</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a class="nav-link" href="demo-restaurant-contact.html">
                                                <span class="menu-text">Gallery</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a class="nav-link" href="demo-restaurant-contact.html">
                                                <span class="menu-text">Contact Us</span>
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
