<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{asset('js/app.js')}}"></script>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Favicon -->
    <link href="{{asset('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{asset('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>

    @livewireStyles

</head>

<body>
    <div class="preloader"></div>
    {{-- Main Header Nav --}}
    <header class="header-nav style_one navbar-scrolltofixed main-menu">
        <div class="container">
            <!-- Ace Responsive Menu -->
            <nav>
                <!-- Menu Toggle btn-->
                <div class="menu-toggle">
                    <img class="nav_logo_img img-fluid w-56 mt10" src="{{asset('images/logo-white.png')}}"
                        alt="{{asset('images/logo-white.png')}}">
                    <button type="button" id="menu-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a href="{{route('dashboard')}}" class="navbar_brand float-left dn-smd align-middle">
                    <img class="img-fluid mt10 mb10 w-56 align-middle d-inline" src="{{asset('images/logo-white.png')}}"
                        alt="{{asset('images/logo-white.png')}}">
                </a>
                <!-- Responsive Menu Structure-->
                <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                    <li>
                        <a class="{{Request::routeIs('dashboard') ? 'active' : ''}}" href="{{route('dashboard')}}"><span
                                class="title">Home</span></a>
                    </li>
                    <li>
                        <a class="{{Request::routeIs('entreprises') ? 'active' : ''}}"
                            href=" {{route('entreprises')}}"><span class="title">Entreprises</span></a>
                    </li>
                    <li>
                        <a class="{{Request::routeIs('contacts') ? 'active' : ''}}" href=" {{route('contacts')}}"><span
                                class="title">Contacts</span></a>
                    </li>
                    {{-- <li>
                        <a href="#"><span class="title">Find A Job</span></a>
                        <!-- Level Two-->
                        <ul>
                            <li>
                                <a href="#">Job List</a>
                                <ul>
                                    <li><a href="page-job-list-v1.html">List V1</a></li>
                                    <li><a href="page-job-list-v2.html">List V2</a></li>
                                    <li><a href="page-job-list-v3.html">List V3</a></li>
                                    <li><a href="page-job-list-v4.html">List V4</a></li>
                                    <li><a href="page-job-list-v5.html">List V5</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Job Single</a>
                                <ul>
                                    <li><a href="page-job-single-v1.html">Single V1</a></li>
                                    <li><a href="page-job-single-v2.html">Single V2</a></li>
                                    <li><a href="page-job-single-v3.html">Single V3</a></li>
                                    <li><a href="page-job-single-v4.html">Single V4</a></li>
                                    <li><a href="page-job-single-v5.html">Single V5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="last">
                        <a href="page-employer-post-job.html"><span class="title">Post a Job</span></a>
                    </li> --}}
                </ul>
                <ul class="sign_up_btn pull-right dn-smd mt25">
                    <li>
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-jet-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                        <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->Avatar }}" alt="" />
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        Manage Account
                                    </div>

                                    <x-jet-dropdown-link href="/profile/update">
                                        Profile
                                    </x-jet-dropdown-link>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="/user/api-tokens">
                                        API Tokens
                                    </x-jet-dropdown-link>
                                    @endif

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Management -->
                                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        Manage Team
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="/teams/{{ Auth::user()->currentTeam->id }}">
                                        Team Settings
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <x-jet-dropdown-link href="/teams/create">
                                        Create New Team
                                    </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        Switch Teams
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                    <x-jet-switchable-team :team="$team" />
                                    @endforeach

                                    <div class="border-t border-gray-100"></div>
                                    @endif

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                         this.closest('form').submit();">
                                            Logout
                                        </x-jet-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        </div>
                    </li>
                </ul><!-- Button trigger modal -->
            </nav>
            <!-- End of Responsive Menu -->
        </div>
    </header>

    {{-- <!-- Main Header Nav For Mobile --> --}}
    <div id="page" class="stylehome1 h0">
        <div class="mobile-menu">
            <div class="header stylehome1">
                <img class="nav_logo_img img-fluid float-left w-56 mt35" src="{{asset('images/logo-white.png')}}"
                    alt="{{asset('images/logo-white.png')}}">
                <a class="bg-thm" href="#menu"><span></span></a>
            </div>
        </div>
        {{-- <!-- /.mobile-menu --> --}}
        <nav id="menu" class="stylehome1">
            <ul>
                <li><a href="{{route('dashboard')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('entreprises')}}">Labels</a>
                </li>
                <li>
                    <a href="{{route('contacts')}}">Contacts</a>
                </li>
            </ul>
        </nav>
    </div>
    {{-- <!-- Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <a href="/dashboard">
                                <x-jet-application-mark class="block h-9 w-auto" />
                            </a>
                        </div> --}}


    <!-- Page Content -->
    <main>
        {{-- {{ $slot }} --}}

        @yield('content')
    </main>
    </div>

    @stack('modals')


    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mmenu.all.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/ace-responsive-menu.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/snackbar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/simplebar.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/parallax.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/scrollto.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-scrolltofixed-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.counterup.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/tagsinput.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/progressbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/timepicker.js')}}"></script>
    <!-- Custom script for all pages -->
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>

    @livewireScripts

    @stack('scripts')
</body>

</html>