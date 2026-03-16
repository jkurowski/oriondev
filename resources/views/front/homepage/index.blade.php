@extends('layouts.homepage')

@section('content')
    <main>
        <section id="hero">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-item hero-item w-100 h-100 d-flex align-items-center justify-content-end position-relative">
                            <img src="{{ asset('images/duo-park-her.png') }}" alt="" width="1161" height="929">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ asset('images/duo-park-subhero.jpg') }}" alt="" class="hero-img-sub">

                                        <div class="hero-apla">
                                            <h1>Duo Park</h1>
                                            <p>Niezwykłe miejsce <br>na mapie Łodzi</p>
                                        </div>

                                        <div class="hero-button">
                                            <a class="bttn bttn-icon" href="{{ route('front.developro.show', 'duo-park') }}">Poznaj inwestycję <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><g clip-path="url(#sendIcon)"><path d="M4.9776 4.25018L4.97086 6.26437L9.35486 6.26437L3.55046 12.0688L4.96731 13.4856L10.7717 7.68122L10.7717 12.0652L12.7859 12.0585L12.777 4.25905L4.9776 4.25018Z"/></g><defs><clipPath id="sendIcon"><rect width="12.0465" height="12.0465" transform="translate(0 8.51855) rotate(-45)"/></clipPath></defs></svg></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="searchForm" class="section-mobile">
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

        <section id="currentProjects" class="section-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="w-700">
                            <div class="section-header">
                            <span class="section-header-subtitle dm-sans-400">
                                <i class="subtitle-left"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M0.527588 0V9.49634H8.96878" stroke="#FF9500" stroke-width="1"/></svg></i>
                                <i class="subtitle-right"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M8.44116 10.0239L8.44116 0.527584L-3.06411e-05 0.527583" stroke="#FF9500" stroke-width="1"/></svg></i>
                                INWESTYCJE AKTUALNE
                            </span>
                                <h2 class="big">Wybierz idealne <br>miejsce do życia</h2>
                            </div>
                            <p>Jako ORION DEVELOPMENT prowadzimy sprzedaż mieszkań w atrakcyjnych lokalizacjach i o wysokim standardzie. Stawiamy na rozwiązania przyjazne środowisku, ekologiczne, kładąc nacisk na potrzeby przyszłych mieszkańców.</p>
                        </div>
                        <img src="{{ asset('images/usmiechnieta-para-w-nowym-mieszkaniu.jpg') }}" alt="" width="700" height="450" class="d-none d-lg-block mt-5">
                    </div>
                    <div class="col-12 col-lg-1"></div>
                    <div class="col-12 col-lg-5 d-flex align-items-center">
                        <a href="{{ route('front.developro.show', 'duo-park') }}" class="main-invest">
                            <div class="main-invest-img">
                                <div class="main-invest-thumb">
                                    <img src="images/duo-park-thumb.jpg" alt="">
                                </div>
                                <div class="main-invest-img-placeholder gap-2">
                                    <img src="images/icons/marker-location.svg" alt="" width="19" height="23"> Łódź, ul. Jasień 20/28
                                </div>
                                <span class="news-card__arrow" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none"><g clip-path="url(#arrowIconBig)"><path d="M9.91157 8.4627L9.89814 12.4732L18.6273 12.4732L7.06992 24.0306L9.89107 26.8518L21.4485 15.2944L21.4485 24.0235L25.459 24.0101L25.4413 8.48037L9.91157 8.4627Z" fill=""/></g><defs><clipPath id="arrowIconBig"><rect width="23.9862" height="23.9862" fill="white" transform="translate(0 16.9609) rotate(-45)"/></clipPath></defs></svg>
                                </span>
                            </div>
                            <h2>Duo Park</h2>
                            <p>Poznaj naszą nową inwestycję przy ulicy Jasień 20/28, to odkryta dla Ciebie enklawa spokoju i ciszy z szybkim dostępem do centrum.</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="duopark" class="section-mobile">
            <div class="container container-1920">
                <div class="row">
                    <div class="col-12 col-xl-11 col-xxl-10 offset-0 offset-xl-1 offset-xxl-2">
                        <img src="{{ asset('images/wizualizacja-inwestycji-big.jpg') }}" alt="" width="1580" height="840">
                    </div>
                </div>
                <div class="row row-overlay">
                    <div class="col-6 col-xxl-5 d-none d-xl-block">
                        <img src="{{ asset('images/wizualizacja-inwestycji-small.jpg') }}" alt="" width="776" height="553" class="img-border-overlay">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row mb-5 justify-content-end row-text-overlay">
                    <div class="col-12 col-xl-6">
                        <div class="section-header">
                                <span class="section-header-subtitle dm-sans-400">
                                    <i class="subtitle-left"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M0.527588 0V9.49634H8.96878" stroke="#FF9500" stroke-width="1"/></svg></i>
                                    <i class="subtitle-right"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M8.44116 10.0239L8.44116 0.527584L-3.06411e-05 0.527583" stroke="#FF9500" stroke-width="1"/></svg></i>
                                    W SPRZEDAŻY
                                </span>
                            <h2 class="big">Równowaga, którą pokochasz</h2>
                        </div>
                        <p>Duo Park to niezwykłe miejsce na mapie Łodzi – położone blisko centrum, a jednocześnie otulone zielenią, z kojącymi widokami i szumem urokliwej rzeki Jasień.  Właśnie tutaj może powstać Twój nowy dom. Wyobraź sobie poranki w miejscu, gdzie natura gra pierwsze skrzypce, a aromatycznej kawie towarzyszy śpiew ptaków.</p>
                    </div>
                </div>

                <div class="row justify-content-center justify-content-lg-end">
                    <div class="col-12 col-lg-3 d-flex justify-content-center justify-content-lg-end">
                        <div class="numerbox">
                            <span>104</span>
                            <p class="ps-4">przestronne <br>mieszkania</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 mt-lg-3">
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="iconbox pe-0 pe-md-3 pe-lg-5">
                            <img src="{{ asset('images/icons/elevator.svg') }}" alt="" width="76" height="76">
                            <h3>Udogodnienia</h3>
                            <p>Duo Park to nie tylko unikatowa oferta poprawy jakości życia, ale także duże relaksacyjne balkony i windy</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="iconbox pe-0 pe-md-3 pe-lg-5">
                            <img src="{{ asset('images/icons/car-parking.svg') }}" alt="" width="76" height="76">
                            <h3>Miejsca postojowe</h3>
                            <p>Wygodne miejsca postojowe naziemne w cenie 35 000 zł i podziemne w cenie 50 000 zł</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="iconbox">
                            <img src="{{ asset('images/icons/paint-roller.svg') }}" alt="" width="76" height="76">
                            <h3>Wykończenie pod klucz</h3>
                            <p>Kompleksowe wykończenie mieszkania w wybranym standardzie - od projektu po realizację, bez stresu i bez szukania ekip</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="timeLine" class="d-none">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="section-header">
                                <span class="section-header-subtitle dm-sans-400">
                                    <i class="subtitle-left"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M0.527588 0V9.49634H8.96878" stroke="#FF9500" stroke-width="1"/></svg></i>
                                    <i class="subtitle-right"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M8.44116 10.0239L8.44116 0.527584L-3.06411e-05 0.527583" stroke="#FF9500" stroke-width="1"/></svg></i>
                                    DUO PARK
                                </span>
                            <h2 class="big">Na jakim etapie <br>budowy jesteśmy?</h2>
                        </div>
                    </div>
                    <div class="col-6">

                    </div>
                </div>
            </div>
        </section>

        <section id="newsList" class="overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="section-header">
                            <span class="section-header-subtitle dm-sans-400">
                                <i class="subtitle-left"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M0.527588 0V9.49634H8.96878" stroke="#FF9500" stroke-width="1"/></svg></i>
                                <i class="subtitle-right"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M8.44116 10.0239L8.44116 0.527584L-3.06411e-05 0.527583" stroke="#FF9500" stroke-width="1"/></svg></i>
                                NA BIEŻĄCO
                            </span>
                            <h2 class="big">Aktualności</h2>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex justify-content-end h-100 align-items-center gap-3 position-relative">
                            <button class="slick-button slick-button-left slick-prev-custom position-relative m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="17" viewBox="0 0 24 17" fill="none"><g clip-path="url(#clip0_1_253)"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.6324 16.0835C10.7491 14.7359 10.3892 12.7392 8.99918 10.949C8.44738 10.2384 7.74302 9.57249 6.86035 8.99645L22.6052 9.03217L22.612 7.209L6.41696 7.16931C7.54996 6.58839 8.43719 5.86064 9.11715 5.0607C10.5775 3.34278 11.017 1.36643 10.9544 0.0142431L9.13918 0.0895212C9.18223 1.01953 8.87029 2.53429 7.73201 3.87346C6.61358 5.18932 4.62995 6.4128 1.18945 6.67013L1.2539 7.48145L1.25189 8.04066L1.14394 8.93935C4.57078 9.37088 6.50316 10.6937 7.56789 12.0649C8.65137 13.4603 8.90232 14.9894 8.82204 15.9162L10.6324 16.0835Z" fill="#FF9500"/></g><defs><clipPath id="clip0_1_253"><rect width="23.6667" height="16.3846" fill="white" transform="translate(23.6667 16.3848) rotate(-180)"/></clipPath></defs></svg>
                            </button>
                            <button class="slick-button slick-button-right slick-next-custom position-relative m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="17" viewBox="0 0 24 17" fill="none"><g clip-path="url(#clip0_1_245)"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.0343 0.30127C12.9175 1.64884 13.2774 3.64559 14.6675 5.43572C15.2193 6.14636 15.9236 6.81227 16.8063 7.38831L1.06144 7.35259L1.05469 9.17576L17.2497 9.21545C16.1167 9.79638 15.2295 10.5241 14.5495 11.3241C13.0892 13.042 12.6496 15.0183 12.7123 16.3705L14.5275 16.2952C14.4844 15.3652 14.7964 13.8505 15.9347 12.5113C17.0531 11.1954 19.0367 9.97197 22.4772 9.71464L22.4128 8.90332L22.4148 8.34411L22.5227 7.44541C19.0959 7.01389 17.1635 5.69111 16.0988 4.31988C15.0153 2.92448 14.7643 1.3954 14.8446 0.468522L13.0343 0.30127Z" fill="#FF9500"/></g><defs><clipPath id="clip0_1_245"><rect width="23.6667" height="16.3846" fill="white"/></clipPath></defs></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-carousel-wrapper">
                <div class="news-carousel">
                    @foreach($news as $n)
                        <div class="news-card px-2">
                            <article itemscope itemtype="https://schema.org/NewsArticle">
                                <!-- Ukryte meta wymagane przez schema.org -->
                                <meta itemprop="headline" content="{{ $n->title }}">
                                <meta itemprop="datePublished" content="{{ $n->posted_at }}">
                                <meta itemprop="url" content="{{ route('front.aktualnosci.show', ['aktualnosci', $n->slug]) }}">
                                <span itemprop="author" itemscope itemtype="https://schema.org/Organization">
                                    <meta itemprop="name" content="ORION DEVELOPMENT SP. Z O.O.">
                                </span>

                                <span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                    <meta itemprop="name" content="ORION DEVELOPMENT SP. Z O.O.">
                                    <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                        <meta itemprop="url" content="{{ asset('images/logo-white-png.png') }}">
                                    </span>
                                </span>

                                <a href="{{ route('front.aktualnosci.show', ['aktualnosci', $n->slug]) }}" class="news-card" aria-label="{{ $n->title }}">
                                    <div class="news-card__thumb">
                                        <picture>
                                            @if($n->file_webp)
                                                <source type="image/webp" srcset="{{ asset('uploads/articles/thumbs/webp/'.$n->file_webp) }}">
                                            @endif

                                            <source type="image/jpeg" srcset="{{ asset('uploads/articles/thumbs/'.$n->file) }}">

                                            <img
                                                src="{{ asset('uploads/articles/thumbs/'.$n->file) }}"
                                                alt="{{ $n->file_alt ?? $n->title }}"
                                                loading="lazy"
                                                decoding="async"
                                                fetchpriority="low">
                                        </picture>
                                    </div>
                                    <div class="news-card__body position-relative">
                                        <span class="news-card__arrow" aria-hidden="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none"><g clip-path="url(#arrowIconBig)"><path d="M9.91157 8.4627L9.89814 12.4732L18.6273 12.4732L7.06992 24.0306L9.89107 26.8518L21.4485 15.2944L21.4485 24.0235L25.459 24.0101L25.4413 8.48037L9.91157 8.4627Z" fill=""/></g><defs><clipPath id="arrowIconBig"><rect width="23.9862" height="23.9862" fill="white" transform="translate(0 16.9609) rotate(-45)"/></clipPath></defs></svg>
                                        </span>
                                        <time class="news-card__date" itemprop="datePublished" datetime="{{ $n->posted_at }}">{{ $n->posted_at }} r.</time>
                                        <h3 class="news-card__title" itemprop="headline">
                                            {{ $n->title }}
                                        </h3>
                                    </div>
                                </a>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="about" class="section-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="pe-0 pe-lg-5">
                            <img src="{{ asset('images/rodzina-nowe-mieszkanie.jpg') }}" alt="" width="800" height="600">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                        <div class="section-header">
                            <span class="section-header-subtitle dm-sans-400">
                                <i class="subtitle-left"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M0.527588 0V9.49634H8.96878" stroke="#FF9500" stroke-width="1"/></svg></i>
                                <i class="subtitle-right"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M8.44116 10.0239L8.44116 0.527584L-3.06411e-05 0.527583" stroke="#FF9500" stroke-width="1"/></svg></i>
                                DEWELOPER
                            </span>
                            <h2 class="big">Z myślą o Twoim komforcie</h2>
                            <p>Właściciele firmy ORION DEVELOPMENT związani są z branżą od 1997 roku kiedy po raz pierwszy zaczęli zajmować się kompleksową obsługą rynku nieruchomości. Działalność developerską rozpoczęli mając już doświadczenie w obsłudze klientów poszukujących powierzchni mieszkalnych zarówno na rynku pierwotnym jak i wtórnym.</p>
                            <a class="bttn bttn-icon mt-3 mt-sm-5" href="{{ route('front.menu.show', ['uri' => 'o-firmie']) }}">Więcej o firmie <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><g clip-path="url(#sendIcon)"><path d="M4.9776 4.25018L4.97086 6.26437L9.35486 6.26437L3.55046 12.0688L4.96731 13.4856L10.7717 7.68122L10.7717 12.0652L12.7859 12.0585L12.777 4.25905L4.9776 4.25018Z"/></g><defs><clipPath id="sendIcon"><rect width="12.0465" height="12.0465" transform="translate(0 8.51855) rotate(-45)"/></clipPath></defs></svg></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="numbers">
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
            @include('front.contact.form', ['page_name' => 'Strona główna'])
        </div>
    </main>
@endsection
