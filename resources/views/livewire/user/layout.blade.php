<section class="our-dashbord dashbord">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-lg-4 col-xl-3 dn-smd">
                <div class="user_profile">
                    <div class="media">
                        <img class="h-16 w-16 rounded-full mr-2" src="{{ Auth::user()->Avatar }}" alt="" />
                        <div class="media-body">
                            <h5 class="mt-0">Bonjour, {{$user->name}}</h5>
                        </div>
                    </div>
                </div>
                <div class="dashbord_nav_list">
                    <ul>
                        <li class="{{Request::routeIs('profile-update') ? 'active' : ''}}"><a
                                href="{{route('profile-update')}}"><span class="flaticon-profile"></span>
                                Mon Profile</a></li>
                        <li><a href="page-candidates-favourite-jobs.html"><span class="flaticon-favorites"></span>
                                Mes Contacts Favorites</a></li>
                        <li class="{{Request::routeIs('password-update') ? 'active' : ''}}"><a
                                href="{{route('password-update')}}"><span class="flaticon-locked"></span> Changer
                                Mon Mot de Passe</a></li>
                        <li><a href="page-log-reg.html"><span class="flaticon-logout"></span> Déconnecter</a></li>
                        <li><a href="#"><span class="flaticon-rubbish-bin"></span> Supprimer Mon Compte</a></li>
                    </ul>
                </div>
            </div>

            @yield('managecontent')


        </div>
    </div>
</section>