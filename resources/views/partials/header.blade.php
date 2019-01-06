<header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 0, 'stickySetTop': '0px', 'stickyChangeLogo': false}">
    <div class="header-body">
        <div class="header-container container py-2">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{url('/home/'.$lang)}}">
                                <img alt="te quiero cocinar" height="50" src="{{asset('/img/cocina/logo_w.png')}}">
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
                                            <a class="nav-link @if($active == 'home') active @endif active" href="{{url('/home/'.$lang)}}">
                                                <span class="menu-text">@if($active == 'home') <b>{{trans('strings.home')}}</b> @else {{trans('strings.home')}} @endif</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a class="nav-link @if($active == 'workshops') active @endif active" href="{{url('workshops/'.$lang)}}">
                                                <span class="menu-text">@if($active == 'workshops') <b>Workshops</b> @else Workshops @endif</span>
                                            </a>
                                        </li>
                                        {{--<li class="dropdown-full-color dropdown-secondary">--}}
                                            {{--<a class="nav-link" href="demo-restaurant-about.html">--}}
                                                {{--<span class="menu-text">Special Events</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a class="nav-link @if($active == 'about') active @endif active" href="{{url('about/'.$lang)}}">
                                                <span class="menu-text">@if($active == 'about') <b>{{trans('strings.about')}}</b> @else {{trans('strings.about')}} @endif</span>
                                            </a>
                                        </li>

                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a class="nav-link @if($active == 'gallery') active @endif active" href="{{url('gallery/'.$lang)}}">
                                                <span class="menu-text">@if($active == 'gallery') <b>{{trans('strings.gallery')}}</b> @else {{trans('strings.gallery')}} @endif</span>
                                            </a>
                                        </li>

                                        {{--<li class="dropdown-full-color dropdown-secondary">--}}
                                            {{--<a class="nav-link" href="demo-restaurant-contact.html">--}}
                                                {{--<span class="menu-text">Gallery</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        <li class="dropdown-full-color dropdown-secondary ">
                                            <a class="nav-link @if($active == 'contact') active @endif active" href="{{url('contact/'.$lang)}}">
                                                <span class="menu-text">@if($active == 'contact') <b>{{trans('strings.contact')}}</b> @else {{trans('strings.contact')}} @endif</span>
                                            </a>
                                        </li>

                                        <li class="dropdown dropdown-full-color dropdown-secondary ">
                                            <a class="nav-link active" href="#">
                                                <span class="menu-text">
                                                    {{trans('strings.language')}} <i class="fa fa-caret-down"></i>
                                                </span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{url('home')}}">
                                                        EN
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{url('home/es')}}">
                                                        ES
                                                    </a>
                                                </li>
                                            </ul>
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
