<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Favicon -->
    <link href="{{asset('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{asset('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
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
                <a href="index.html" class="navbar_brand float-left dn-smd align-middle">
                    <img class="img-fluid mt10 mb10 w-56 align-middle d-inline" src="{{asset('images/logo-white.png')}}"
                        alt="{{asset('images/logo-white.png')}}">
                </a>
                <!-- Responsive Menu Structure-->
                <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                    <li>
                        <a href="#"><span class="title">Home</span></a>
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
                    <li class="last">
                        <a href="page-employer-post-job.html"><span class="title">Post a Job</span></a>
                    </li>
                </ul>
                <ul class="sign_up_btn pull-right dn-smd mt25">
                    <li>
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-jet-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                        <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                                            alt="" />
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        Manage Account
                                    </div>

                                    <x-jet-dropdown-link href="/user/profile">
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
                <li><span>Home</span>
                    <ul>
                        <li><a href="index.html">Home One</a></li>
                        <li><a href="index2.html">Home Two</a></li>
                        <li><a href="index3.html">Home Three</a></li>
                        <li><a href="index4.html">Home Four</a></li>
                        <li><a href="index5.html">Home Five</a></li>
                        <li><a href="index6.html">Home Six</a></li>
                    </ul>
                </li>
                <li><span>Find A Job</span>
                    <ul>
                        <li><span>Job List</span>
                            <ul>
                                <li><a href="page-job-list-v1.html">List V1</a></li>
                                <li><a href="page-job-list-v2.html">List V2</a></li>
                                <li><a href="page-job-list-v3.html">List V3</a></li>
                                <li><a href="page-job-list-v4.html">List V4</a></li>
                                <li><a href="page-job-list-v5.html">List V5</a></li>
                            </ul>
                        </li>
                        <li><span>Job Single</span>
                            <ul>
                                <li><a href="page-job-single-v1.html">Single V1</a></li>
                                <li><a href="page-job-single-v2.html">Single V2</a></li>
                                <li><a href="page-job-single-v3.html">Single V3</a></li>
                                <li><a href="page-job-single-v4.html">Single V4</a></li>
                                <li><a href="page-job-single-v5.html">Single V5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><span>Employer</span>
                    <ul>
                        <li><span>Employer List</span>
                            <ul>
                                <li><a href="page-employer-list-v1.html">List V1</a></li>
                                <li><a href="page-employer-list-v2.html">List V2</a></li>
                                <li><a href="page-employer-list-v3.html">List V3</a></li>
                            </ul>
                        </li>
                        <li><span>Employer Single</span>
                            <ul>
                                <li><a href="page-employer-single-v1.html">Single V1</a></li>
                                <li><a href="page-employer-single-v2.html">Single V2</a></li>
                                <li><a href="page-employer-single-v3.html">Single V3</a></li>
                            </ul>
                        </li>
                        <li><span>Employer Admin</span>
                            <ul>
                                <li><a href="page-employer-dashboard.html">Dashboard</a></li>
                                <li><a href="page-employer-profile.html">Profile</a></li>
                                <li><a href="page-employer-post-job.html">Post Job</a></li>
                                <li><a href="page-employer-manage-job.html">Manage Job</a></li>
                                <li><a href="page-employer-resume.html">Resume</a></li>
                                <li><a href="page-employer-packages.html">Packages</a></li>
                                <li><a href="page-employer-transactions.html">Transactions</a></li>
                                <li><a href="page-employer-change-password.html">Change Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><span>Candidates</span>
                    <ul>
                        <li><span>Candidates List</span>
                            <ul>
                                <li><a href="page-candidates-list-v1.html">List V1</a></li>
                                <li><a href="page-candidates-list-v2.html">List V2</a></li>
                                <li><a href="page-candidates-list-v3.html">List V3</a></li>
                            </ul>
                        </li>
                        <li><span>Candidates Single</span>
                            <ul>
                                <li><a href="page-candidates-single-v1.html">Single v1</a></li>
                                <li><a href="page-candidates-single-v2.html">Single v2</a></li>
                                <li><a href="page-candidates-single-v3.html">Single v3</a></li>
                            </ul>
                        </li>
                        <li><span>Candidates Admin</span>
                            <ul>
                                <li><a href="page-candidates-dashboard.html">Dashboard</a></li>
                                <li><a href="page-candidates-profile.html">Profile</a></li>
                                <li><a href="page-candidates-my-resume.html">My Resume</a></li>
                                <li><a href="page-candidates-applied-jobs.html">Applied Jobs</a></li>
                                <li><a href="page-candidates-cv-manager.html">Cv Manager</a></li>
                                <li><a href="page-candidates-favourite-jobs.html">Favourite Jobs</a></li>
                                <li><a href="page-candidates-message.html">Message</a></li>
                                <li><a href="page-candidates-review.html">Review</a></li>
                                <li><a href="page-candidates-job-alert.html">Job Alert</a></li>
                                <li><a href="page-candidates-change-password.html">Change Password</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li><span>Pages</span>
                    <ul>
                        <li><a href="page-about.html">About</a></li>
                        <li><span>Blog</span>
                            <ul>
                                <li><a href="page-blog-v1.html">Page Blog v1</a></li>
                                <li><a href="page-blog-grid.html">Blog Grid</a></li>
                                <li><a href="page-blog-list.html">Blog List</a></li>
                                <li><a href="page-blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="page-contact.html">Contact Us</a></li>
                        <li><a href="page-error.html">404</a></li>
                        <li><a href="page-faq.html">Faq</a></li>
                        <li><a href="page-how-it-works.html">How It Works</a></li>
                        <li><a href="page-invoice.html">Invoice</a></li>
                        <li><a href="page-log-reg.html">Login/Register</a></li>
                        <li><a href="page-pricing.html">Pricing</a></li>
                        <li><a href="page-terms-and-policies.html">Terms And Policies</a></li>
                        <li><a href="page-ui-element.html">UI Elements</a></li>
                    </ul>
                </li>
                <li><a href="#">Post a Job</a></li>
                <li><a class="text-thm" href="page-log-reg.html">Login/Register</a></li>
            </ul>
        </nav>
    </div>

    @yield('content')


    @stack('modals')

    @livewireScripts

    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/jquery.mmenu.all.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/ace-responsive-menu.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/snackbar.min.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/simplebar.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/parallax.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/scrollto.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/jquery-scrolltofixed-min.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/jquery.counterup.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/progressbar.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/slider.js')}}"></script>
    <script type=" text/javascript" src="{{asset('js/timepicker.js')}}"></script>
    <!-- Custom script for all pages -->
    <script type=" text/javascript" src="{{asset('js/script.js')}}"></script>
</body>

</html>