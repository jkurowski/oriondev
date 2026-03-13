<!-- NAVIGATION -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div id="logo">
                    <a href="/"><img src="{{ asset('images/logo-white-png.png') }}" alt="" width="206" height="99"></a>
                </div>
            </div>
            <div class="col-10">
                <nav class="d-flex h-100 align-items-center justify-content-end">
                    <ul class="list-unstyled d-flex justify-content-end mb-0">
                        <li><a href="/" class="dm-sans-500">Witamy</a></li>
                        <li>
                            <span class="dm-sans-500">Inwestycje <i>▼</i></span>
                            <ul class="mb-0 list-unstyled submenu">
                                <li><a href="{{ route('front.developro.show', 'duo-park') }}">Inwestycje aktualne</a></li>
                                <li><a href="{{ route('front.menu.show', ['uri' => 'inwestycje-zrealizowane']) }}">Inwestycje zrealizowane</a></li>
                                <li class="d-none"><a href="{{ route('front.menu.show', ['uri' => 'inwestycje-planowane']) }}">Inwestycje planowane</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('front.menu.show', ['uri' => 'relacje-inwestorskie']) }}" class="dm-sans-500">Relacje inwestorskie</a></li>
                        <li>
                            <span class="dm-sans-500">O firmie <i>▼</i></span>
                            <ul class="mb-0 list-unstyled submenu">
                                <li><a href="{{ route('front.menu.show', ['uri' => 'o-firmie']) }}">O nas</a></li>
                                <li><a href="{{ route('front.menu.show', ['uri' => 'partnerzy']) }}">Partnerzy</a></li>
                                <li><a href="{{ route('front.menu.show', ['uri' => 'aktualnosci']) }}">Aktualności</a></li>
                                <li><a href="{{ route('front.menu.show', ['uri' => 'blog']) }}">Blog</a></li>
                                <li><a href="{{ route('front.menu.show', ['uri' => 'praca']) }}">Kariera</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('front.menu.show', ['uri' => 'wykonczenie-mieszkan']) }}" class="dm-sans-500">Wykończenie mieszkań</a></li>
                        <li><a href="{{ route('front.menu.show', ['uri' => 'kontakt']) }}" class="dm-sans-500">Kontakt</a></li>
                        <li class="header-phone me-0"><a href="tel:+48512380000" class="dm-sans-500">+48 512 380 000</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- END -> NAVIGATION -->
