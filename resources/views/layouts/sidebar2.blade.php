<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title> </title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <script src="https://kit.fontawesome.com/bc9099db51.js" crossorigin="anonymous"></script>

        <style type="text/css">
            .removecaret.dropdown-toggle::after {
                display: none;
            }

            .removecaret.dropdown-toggle::before {
                display: none;
            }
        </style>
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="bg-black">
                <div class="sidebar-header text-center">
                   <a href="/"> <h3> Linkbuilding Partner </h3> </a>
                </div>

                <ul class="list-unstyled components">
                    <li class="{{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}">
                        <a href="/partner/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                    <li class="{{ (request()->segment(2) == 'offers') ? 'active' : '' }}">
                        <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">Martkplaats</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu1">
                            <li class="{{ (request()->segment(3) == 'overzicht') ? 'active' : '' }}">
                                <a href="/partner/offers/overzicht">Kanalen</a>
                            </li>
                            <li class="{{ (request()->segment(3) == 'maken') ? 'active' : '' }}">
                                <a href="/partner/offers/maken">Influencers</a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ (request()->segment(2) == 'partners') ? 'active' : '' }}">
                        <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false">Adverteerder</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu2">
                            <li class="{{ (request()->segment(3) == 'overzicht') ? 'active' : '' }}">
                                <a href="/partners/klant/overzicht">Introductie</a>
                            </li>
                            <li class="{{ (request()->segment(3) == 'offers') ? 'active' : '' }}">
                                <a href="/partners/klant/offers">Dashboard</a>
                            </li>
                            <li><a href="#">Campagnes</a></li>
                            <li><a href="#">Opdrachten</a></li>
                            <li><a href="#">Statistieken</a></li>
                            <li><a href="#">Betalingen</a></li>
                        </ul>
                    </li>
                    <li class="{{ (request()->segment(2) == 'partners') ? 'active' : '' }}">
                        <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">Partners</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu3">
                            <li class="{{ (request()->segment(3) == 'overzicht') ? 'active' : '' }}">
                                <a href="/partners/klant/overzicht">Publishers</a>
                            </li>
                            <li class="{{ (request()->segment(3) == 'offers') ? 'active' : '' }}">
                                <a href="/partners/klant/offers">Affiliate netwerken</a>
                            </li>
                            <li><a href="#">Adverteerders</a></li>
                            <li><a href="#">Partnerships</a></li>
                        </ul>
                    </li>

                    <li class="{{ (request()->segment(2) == 'partners') ? 'active' : '' }}">
                        <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false">Bedrijf</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu4">
                            <li class="{{ (request()->segment(3) == 'overzicht') ? 'active' : '' }}">
                                <a href="/partners/klant/overzicht">Contact</a>
                            </li>
                            <li class="{{ (request()->segment(3) == 'offers') ? 'active' : '' }}">
                                <a href="/partners/klant/offers">Over Ons</a>
                            </li>
                            <li><a href="#">Abonnementen</a></li>
                            <li><a href="#">Referral Programma</a></li>
                            <li><a href="#">Ambassador</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Algemene Voorwarden</a></li>
                        </ul>
                    </li>

                    <li class="{{ (request()->segment(2) == 'partners') ? 'active' : '' }}">
                        <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false">fAQ</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu5">
                            <li class="{{ (request()->segment(3) == 'overzicht') ? 'active' : '' }}">
                                <a href="/partners/klant/overzicht">Algemeen</a>
                            </li>
                            <li class="{{ (request()->segment(3) == 'offers') ? 'active' : '' }}">
                                <a href="/partners/klant/offers">Publishers</a>
                            </li>
                            <li><a href="#">Installatie</a></li>
                            <li><a href="#">Adverteerders</a></li>
                            <li><a href="#">SEO</a></li>
                            <li><a href="#">Terminologie</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Help</a></li>
                                <li>
                                    <a class="dropdown-toggle removecaret" data-toggle="dropdown">
                                      <img style="width: 25px; height: 25px; border-radius: 50%;" src="/uploads/small/{{ Auth::user()->PFimg}}">  {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        @guest
                                            <li class="">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))

                                            @endif
                                        @else
                                            <li>
                                                <a href="/partner/profiel">
                                                    {{ __('Profiel') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Uitloggen') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        @endguest
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                        <main class="py-4">
                            @yield('content')
                        </main>

                        <footer class="text-center"> &copy; {{ now()->year }} Linkbuilding </footer>
            </div>
        </div>





        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
    </body>
</html>
