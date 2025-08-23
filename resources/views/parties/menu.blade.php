<!-- Header Here -->
<header class="header-section bgwhite">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo-menu">
                <a href="index.html" class="logo">
                    <img src="{{ asset('assets/logo/logo1.png') }}" alt="logo">
                </a>
            </div>
            <div class="menu__components d-flex align-content-center">
                <ul class="main-menu">
                    <li>
                        <a href="{{ route('home') }}" class="fz-24">
                            Acceuil
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">
                            A propos
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            Explorer
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('expPhoto') }}">
                                    Photo
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('expSon') }}">
                                    Son
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route( 'contact') }}">
                            Contact
                        </a>
                    </li>
                    @if (Auth::check())
                        <li>
                            <a class="fz-24" href="javascript:void(0)">
                                <img src="https://i.pravatar.cc/72?img=3" alt="Profil"
                                    class="rounded-circle avatar-36">
                            </a>
                            <ul class="sub-menu">
                                <li><a href="">Mon profil</a></li>
                                <li><a href="">Mon compte</a></li>
                                <li><a href="">Mes achat</a></li>
                                <li><a href="">Mes favoris</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <i class="flaticon-logout"></i>
                                        Déconnexion
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <div class="d-flex shop__area align-items-center">
                    @if (!Auth::check())
                        {{-- Utilisateur CONNECTÉ → afficher le PREMIER menu --}}
                        <a href="shop.html" class="shop__icon">
                            <i class="material-symbols-outlined aseetext">shopping_cart</i>
                            10
                        </a>

                        <a href="{{ route('login') }}"
                            class="d-flex fw-500 cmn--btn outline__btn align-items-center gap-2">
                            <span>Connexion</span>
                            <span><i class="material-symbols-outlined fz-18 mt-1">logout</i></span>
                        </a>

                        <a href="{{ route('register') }}" class="d-flex fw-500 cmn--btn align-items-center gap-2">
                            <span>Inscription</span>
                            <span><i class="material-symbols-outlined fz-18 mt-1">app_registration</i></span>
                        </a>
                    @endif


                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
