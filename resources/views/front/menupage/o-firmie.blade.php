@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-firma'])

@section('meta_title', $page->title ?? 'O firmie')
@section('seo_title',$page->meta_title ?? '')
@section('seo_description', $page->meta_description ?? '')
@section('seo_robots', $page->meta_robots ?? '')

@section('content')
    <!-- MAIN SECTION -->
    <section id="about" class="pt-6 pb-6 section-mobile">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="pe-0 pe-lg-5 mb-4 mb-lg-0">
                        <img src="{{ asset('images/rodzina-nowe-mieszkanie.jpg') }}" alt="" width="800" height="600">
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center">
                    <div class="section-header">
                            <span class="section-header-subtitle dm-sans-400">
                                <i class="subtitle-left"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M0.527588 0V9.49634H8.96878" stroke="#FF9500" stroke-width="1"></path></svg></i>
                                <i class="subtitle-right"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M8.44116 10.0239L8.44116 0.527584L-3.06411e-05 0.527583" stroke="#FF9500" stroke-width="1"></path></svg></i>
                                DEWELOPER
                            </span>
                        <h2 class="big">Z myślą o Twoim komforcie</h2>
                        <p>Właściciele firmy ORION DEVELOPMENT związani są z branżą od 1997 roku kiedy po raz pierwszy zaczęli zajmować się kompleksową obsługą rynku nieruchomości. Działalność developerską rozpoczęli mając już doświadczenie w obsłudze klientów poszukujących powierzchni mieszkalnych zarówno na rynku pierwotnym jak i wtórnym.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 d-flex align-items-center">
                    <div class="pe-0 pe-lg-5">
                        <div class="section-header">
                            <span class="section-header-subtitle dm-sans-400">
                                <i class="subtitle-left"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M0.527588 0V9.49634H8.96878" stroke="#FF9500" stroke-width="1"/></svg></i>
                                <i class="subtitle-right"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M8.44116 10.0239L8.44116 0.527584L-3.06411e-05 0.527583" stroke="#FF9500" stroke-width="1"/></svg></i>
                                HASŁO
                            </span>
                            <h2 class="big">Działalność developerska</h2>
                        </div>
                        <p>Zajmujemy się również kompleksowym doradztwem inwestycyjnym oraz zarządzaniem. W swojej działalności współpracuje z najlepszymi architektami dlatego inwestycje realizowane przez nas są przemyślane i charakteryzują się wspaniałymi rozkładami pomieszczeń oraz możliwością indywidualnej aranżacji.</p>
                        <p>&nbsp;</p>
                        <p>Każdy projekt jest wielokrotnie analizowany przez zespół specjalistów pod względem wygody przyszłych nabywców, a używane do budowy materiały dobierane są z niezwykłą starannością.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-5 d-flex justify-content-center justify-content-lg-end align-items-center mt-5 mt-lg-0">
                    <img src="{{ asset('images/kariera.webp') }}" alt="" class="img-rounded">
                </div>
            </div>
        </div>
    </div>

    <section id="searchForm" class="section-mobile pt-6 pb-6">
        <div class="container">
            <div class="row section-header">
                <div class="col-12 text-center">
                        <span class="section-header-subtitle dm-sans-400">
                            <i class="subtitle-left"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M0.527588 0V9.49634H8.96878" stroke="#FF9500" stroke-width="1"/></svg></i>
                            <i class="subtitle-right"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M8.44116 10.0239L8.44116 0.527584L-3.06411e-05 0.527583" stroke="#FF9500" stroke-width="1"/></svg></i>
                            WYSZUKIWARKA MIESZKAŃ
                        </span>
                    <h2>Znajdź wymarzone mieszkanie</h2>
                </div>
            </div>

            <form class="row pt-0 pt-lg-5 mt-3 mt-lg-5 pb-0 pb-sm-5 mb-3 mb-sm-5" method="get" action="{{ route('front.developro.plan', 'duo-park') }}">

                <!-- INWESTYCJE -->
                <div class="col-6 col-md">
                    <label class="form-label">Inwestycje</label>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle w-100 select-like"
                                type="button"
                                data-bs-toggle="dropdown"
                                id="investmentBtn">
                            Wszystkie
                        </button>
                        <ul class="dropdown-menu w-100">
                            <li><a class="dropdown-item" href="#" data-value="inv2">Duo Park</a></li>
                        </ul>
                    </div>
                    <input type="hidden" name="investment" id="investmentInput">
                </div>

                <!-- POWIERZCHNIA -->
                <div class="col-6 col-md">
                    <label class="form-label">Powierzchnia</label>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle w-100 select-like"
                                type="button"
                                data-bs-toggle="dropdown"
                                id="areaBtn">
                            Wszystkie
                        </button>
                        <ul class="dropdown-menu w-100">
                            <li><a class="dropdown-item active" href="#" data-value="">Wszystkie</a></li>
                            <li><a class="dropdown-item" href="#" data-value="0-40">0–40 m²</a></li>
                            <li><a class="dropdown-item" href="#" data-value="40-60">40–60 m²</a></li>
                            <li><a class="dropdown-item" href="#" data-value="60+">60+ m²</a></li>
                        </ul>
                    </div>
                    <input type="hidden" name="area" id="areaInput">
                </div>

                <!-- ILOŚĆ POKOI -->
                <div class="col-6 col-md mt-4 mt-md-0">
                    <label class="form-label">Ilość pokoi</label>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle w-100 select-like"
                                type="button"
                                data-bs-toggle="dropdown"
                                id="roomsBtn">
                            Wszystkie
                        </button>
                        <ul class="dropdown-menu w-100">
                            <li><a class="dropdown-item active" href="#" data-value="">Wszystkie</a></li>
                            <li><a class="dropdown-item" href="#" data-value="1">1</a></li>
                            <li><a class="dropdown-item" href="#" data-value="2">2</a></li>
                            <li><a class="dropdown-item" href="#" data-value="3">3</a></li>
                            <li><a class="dropdown-item" href="#" data-value="4">4</a></li>
                        </ul>
                    </div>
                    <input type="hidden" name="rooms" id="roomsInput">
                </div>

                <!-- CENA -->
                <div class="col-6 col-md mt-4 mt-md-0">
                    <label class="form-label">Cena</label>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle w-100 select-like"
                                type="button"
                                data-bs-toggle="dropdown"
                                id="priceBtn">
                            Wszystkie
                        </button>
                        <ul class="dropdown-menu w-100">
                            <li><a class="dropdown-item active" href="#" data-value="">Wszystkie</a></li>
                            <li><a class="dropdown-item" href="#" data-value="0-500">do 500k</a></li>
                            <li><a class="dropdown-item" href="#" data-value="500-800">500–800k</a></li>
                            <li><a class="dropdown-item" href="#" data-value="800+">800k+</a></li>
                        </ul>
                    </div>
                    <input type="hidden" name="price" id="priceInput">
                </div>

                <!-- SUBMIT -->
                <div class="col-12 col-lg-3 ps-3 ps-lg-4 mt-4 mt-lg-0">
                    <div class="row form-checkboxes d-flex align-items-center h-100">
                        <div class="col-12 d-flex align-items-center h-100">
                            <button type="submit" class="w-100 h-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.75 4.5C21.5154 4.50035 18.3278 5.27558 15.4543 6.76078C12.5808 8.24599 10.1049 10.398 8.2338 13.0365C6.36274 15.6751 5.15099 18.7235 4.69999 21.9266C4.249 25.1297 4.57187 28.3942 5.6416 31.4468C6.71132 34.4995 8.49676 37.2514 10.8485 39.4724C13.2002 41.6933 16.0497 43.3186 19.1585 44.2121C22.2673 45.1056 25.5449 45.2414 28.7169 44.6081C31.889 43.9748 34.8632 42.5908 37.3905 40.572L45.6593 48.8408C46.0836 49.2506 46.652 49.4774 47.2419 49.4723C47.8319 49.4671 48.3962 49.2305 48.8134 48.8133C49.2305 48.3962 49.4672 47.8318 49.4723 47.2419C49.4774 46.652 49.2506 46.0836 48.8408 45.6592L40.572 37.3905C42.9525 34.4112 44.4433 30.8202 44.8729 27.031C45.3024 23.2417 44.6533 19.4082 43.0001 15.9716C41.3469 12.535 38.757 9.63513 35.5283 7.60566C32.2997 5.57619 28.5635 4.49967 24.75 4.5ZM11.25 24.75C11.25 22.9772 11.5992 21.2217 12.2776 19.5838C12.9561 17.9459 13.9505 16.4576 15.2041 15.2041C16.4577 13.9505 17.9459 12.9561 19.5838 12.2776C21.2217 11.5992 22.9772 11.25 24.75 11.25C26.5229 11.25 28.2783 11.5992 29.9162 12.2776C31.5541 12.9561 33.0424 13.9505 34.2959 15.2041C35.5495 16.4576 36.5439 17.9459 37.2224 19.5838C37.9008 21.2217 38.25 22.9772 38.25 24.75C38.25 28.3304 36.8277 31.7642 34.2959 34.2959C31.7642 36.8277 28.3304 38.25 24.75 38.25C21.1696 38.25 17.7358 36.8277 15.2041 34.2959C12.6723 31.7642 11.25 28.3304 11.25 24.75Z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </section>


    <div id="page">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-12 col-lg-7 d-flex justify-content-end align-items-center">
                    <div class="ps-0 ps-lg-5">
                        <div class="section-header">
                            <span class="section-header-subtitle dm-sans-400">
                                <i class="subtitle-left"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M0.527588 0V9.49634H8.96878" stroke="#FF9500" stroke-width="1"/></svg></i>
                                <i class="subtitle-right"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M8.44116 10.0239L8.44116 0.527584L-3.06411e-05 0.527583" stroke="#FF9500" stroke-width="1"/></svg></i>
                                HASŁO
                            </span>
                            <h2 class="big">Działalność developerska</h2>
                        </div>
                        <p>Działalność developerską rozpoczęli mając już doświadczenie w obsłudze klientów poszukujących powierzchni mieszkalnych zarówno na rynku pierwotnym jak i wtórnym. Obecnie firma specjalizuje się w prowadzeniu inwestycji mieszkaniowych.</p>
                        <p>&nbsp;</p>
                        <p>Naszym celem jest rozwój lokalnego rynku mieszkaniowego i dostarczenie klientom wygodnych solidnych mieszkań za rozsądną cenę.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-5 d-flex justify-content-center justify-content-lg-start align-items-center mt-5 mt-lg-0">
                    <img src="{{ asset('images/kariera.webp') }}" alt="" class="img-rounded">
                </div>
            </div>
        </div>
    </div>

    <section id="numbers" class="pb-6">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 d-flex justify-content-start justify-content-sm-center justify-content-lg-start">
                    <div class="numerbox">
                        <span>29+</span>
                        <p class="ps-3 ps-xl-4">lat <br>doświadczenia</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 d-flex justify-content-start justify-content-sm-center mt-4 mt-lg-0">
                    <div class="numerbox">
                        <span>10</span>
                        <p class="ps-3 ps-xl-4">zrealizowanych <br>inwestycji</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 d-flex justify-content-start justify-content-sm-center justify-content-lg-end mt-4 mt-lg-0">
                    <div class="numerbox">
                        <span>765</span>
                        <p class="ps-3 ps-xl-4">sprzedanych <br>mieszkań</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="pt-5 pt-xxl-6 pb-5 pb-xxl-0">
        @include('front.contact.form', ['page_name' => 'Praca'])
    </div>
    <!-- END -> MAIN SECTION -->
@endsection
