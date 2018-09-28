
    <!-- GLOBAL HEADER -->
    <!-- https://stijl.kuleuven.be/2016/includes/header.nl.inc -->
    <nav class="global-header noindex hidden-print">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img class="logo" alt="logo"
                                                               src="https://stijl.kuleuven.be/2016/img/svg/logo.svg"
                                                               width="157" height="56"/></a>
            <div class="controls">
                <form class="form-search hidden-md-down" role="search"
                      action="//search.kuleuven.be/Paginas/results.aspx" method="get"
                      name="searchform">
                    <input class="form-control" type="text"
                           placeholder="Zoeken in KU Leuven" name="k"
                           id="words">
                    <button class="btn btn-primary" type="submit"><i class="material-icons">search</i>
                    </button>
                </form>

                <a href="#" class="btn-toggle hidden-md-down" role="button"
                   aria-expanded="false"
                   aria-controls="kuleuven-menu"
                   data-toggle="collapse" data-target="#kuleuven-menu">Info <span
                            class="lines"></span></a>

                <a href="#"
                   class="btn-toggle hidden-lg-up js-flyout-toggle flyout-toggle collapsed"
                   role="button" aria-expanded="false"
                   aria-controls="flyout-menu"
                   data-toggle="collapse" data-target="#flyout-menu">Info <span
                            class="arrow"></span></a>
            </div>
        </div>

        <div class="container hidden-md-down">
            <div class="nav navbar-nav navbar-collapse collapse" id="kuleuven-menu" role="navigation"
                 aria-expanded="false">
                <nav class="nav-main pull-lg-left">
                    <ul>
                        <li><a href="https://www.kuleuven.be/onderzoek/">Onderzoek</a></li>
                        <li><a href="https://www.kuleuven.be/studeren/">Studeren</a></li>
                        <li><a href="https://www.kuleuven.be/overons/">Over KU&nbsp;Leuven</a></li>
                    </ul>
                </nav>
                <nav class="nav-service pull-lg-right">
                    <ul>
                        <li class="dropdown">
                            <a href="#" id="a-z-menu"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">A-Z
                                <i class="material-icons">keyboard_arrow_down</i></a>
                            <ul class="dropdown-menu" aria-labelledby="a-z-menu">
                                <li><a href="https://bib.kuleuven.be/">Bibliotheken</a></li>
                                <li><a href="https://www.kuleuven.be/campus">Campussen</a></li>
                                <li><a href="https://admin.kuleuven.be/">Diensten</a></li>
                                <li><a
                                            href="https://www.kuleuven.be/onderzoek/onderzoekstructuur.html">Departementen</a>
                                </li>
                                <li><a href="https://www.kuleuven.be/kuleuven/faculteiten">Faculteiten</a>
                                </li>
                                <li><a href="https://www.kuleuven.be/wieiswie">Personeelsleden</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" id="info-voor-menu" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Info voor <i
                                        class="material-icons">keyboard_arrow_down</i></a>
                            <ul class="dropdown-menu" aria-labelledby="info-voor-menu">
                                <li><a href="https://www.kuleuven.be/toekomstigestudenten/">Toekomstige student</a></li>
                                <li><a href="https://www.kuleuven.be/studenten/">Student</a></li>
                                <li><a href="https://www.kuleuven.be/personeel/jobsite/">Sollicitant</a></li>
                                <li><a href="https://admin.kuleuven.be/intranet/">Personeelslid</a></li>
                                <li><a href="https://alum.kuleuven.be/">Alumnus</a></li>
                                <li><a href="https://www.kuleuven.be/onderzoek/overheid/">Overheid, bedrijf en maatschappij</a></li>
                                <li><a href="https://www.kuleuven.be/pers/">Pers</a></li>
                                <li><a href="https://www.kuleuven.be/mecenaat/">Schenker</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" id="interne-tools-menu" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Interne tools <i
                                        class="material-icons">keyboard_arrow_down</i></a>
                            <ul class="dropdown-menu" aria-labelledby="interne-tools-menu">
                                <li><a href="https://toledo.kuleuven.be/">Toledo</a></li>
                                <li><a href="https://www.kuleuven.be/sapredir/kuloket">KU&nbsp;Loket</a>
                                </li>
                                <li><a href="https://webmail.kuleuven.be/">Webmail</a></li>
                                <li><a href="https://admin.kuleuven.be/intranet/">Intranet</a>
                                </li>
                                <li><a href="https://www.kuleuven.be/wieiswie">Wie-is-wie</a></li>
                                <li><a href="https://www.kuleuven.be/wieiswie/nl/unit/50000050">Organigram</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="https://nieuws.kuleuven.be/">Nieuws</a></li>
                        <li><a href="https://www.kuleuven.be/personeel/jobsite/">Jobs</a></li>
                        <li><a href="https://www.kuleuven.be/kuleuven/contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </nav>
    <!-- END GLOBAL HEADER -->

    <!-- LOCAL HEADER -->
    <nav class="local-header">
        <div class="container container-relative">
            <h2><a href="#"><i class="material-icons">home</i> Toekomstige studenten</a></h2>

            <a href="#" class="btn-toggle hidden-lg-up" role="button"
               aria-expanded="false" data-toggle="collapse" data-target="#local-header"
               aria-controls="local-header">Menu
                <span class="lines"></span>
            </a>

            <nav class="nav-user pull-xs-right">
                <ul>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @else
                    <!--<li><a href="">Inloggen</a></li>-->
                        <li><a href="#"
                               class="dropdown-toggle"
                               id="more-menu0"
                               data-toggle="dropdown"
                               role="button"
                               aria-haspopup="true"
                               aria-expanded="false"><i class="material-icons"
                                                        aria-hidden="true">person_outline</i>
                                {{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu" aria-labelledby="more-menu0"
                                aria-expanded="false">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>
                                <li><a href=""><i class="material-icons">thumb_up</i> Actie</a>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </nav>

            <ul class="langswitch">
                <li><a href="" class="active">NL</a></li>
                <li><a href="">EN</a></li>
            </ul>

            <nav class="nav-tabs nav-more collapse" id="local-header">
                <ul>
                    <li class="home"><a href="#">Home</a></li>
                    <li><a href="#">Kies je opleiding</a></li>
                    <li><a href="#">Infomomenten</a></li>
                    <li><a href="#">Openlesdagen</a></li>
                    <li><a href="#">Diensten voor studenten</a></li>
                    <li><a href="#">Inschrijven</a></li>
                </ul>
            </nav>
        </div>
    </nav>
    <!-- END LOCAL HEADER -->

