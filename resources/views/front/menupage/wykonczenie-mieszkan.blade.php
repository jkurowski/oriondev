@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-menupage'])

@section('meta_title', $page->title ?? 'Wykończenie mieszkań')
@section('seo_title',$page->meta_title ?? '')
@section('seo_description', $page->meta_description ?? '')
@section('seo_robots', $page->meta_robots ?? '')

@section('content')
    <div class="container-fluid mieszkania-submenu">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Wykończenie mieszkań</h1>
            </div>
        </div>
    </div>

    <!-- MAIN SECTION -->
    <div id="page">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-12 col-lg-7 d-flex justify-content-end align-items-center">
                    <div class="ps-0 ps-lg-5">
                        <div class="section-header">
                            <span class="section-header-subtitle dm-sans-400">
                                <i class="subtitle-left"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M0.527588 0V9.49634H8.96878" stroke="#FF9500" stroke-width="1"/></svg></i>
                                <i class="subtitle-right"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M8.44116 10.0239L8.44116 0.527584L-3.06411e-05 0.527583" stroke="#FF9500" stroke-width="1"/></svg></i>
                                KOMPLEKSOWE WYKOŃCZENIE
                            </span>
                            <h2 class="big">Wykończ swoje mieszkanie bez stresu</h2>
                        </div>
                        <p>Moment odbioru kluczy do nowego mieszkania to wyjątkowa chwila, która otwiera drzwi do kolejnego etapu - jego wykończenia i aranżacji. Wiemy, jak wymagający i czasochłonny potrafi być ten proces, dlatego chcemy Państwa w nim odciążyć.</p>
                        <p>&nbsp;</p>
                        <p>Oferujemy możliwość współpracy z doświadczonymi specjalistami, którzy kompleksowo zajmą się zaprojektowaniem oraz wykończeniem mieszkania. Każdy projekt powstaje w oparciu o Państwa potrzeby, gust oraz styl życia, z jednoczesnym uwzględnieniem maksymalnej funkcjonalności i ergonomii przestrzeni.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-5 d-flex justify-content-center justify-content-lg-start align-items-center mt-5 mt-lg-0">
                    <img src="{{ asset('images/wykonczenie-1.jpg') }}" alt="" class="img-rounded">
                </div>
            </div>
        </div>
    </div>

    <section class="pt-5 pt-xxl-6 pb-5 pb-xxl-6 section-mobile">
        <div class="container">
            <div class="row mt-3">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="iconbox pe-0 pe-sm-5">
                        <img src="images/icons/klucze.svg" alt="" width="76" height="76">
                        <h3>Odbiór<br> kluczy</h3>
                        <p>Początek drogi do stworzenia własnej, idealnie dopasowanej przestrzeni.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-sm-0">
                    <div class="iconbox pe-0 pe-sm-5">
                        <img src="images/icons/projekt.svg" alt="" width="76" height="76">
                        <h3>Indywidualny<br> projekt</h3>
                        <p>Projekt wnętrza dopasowany do Państwa stylu życia i potrzeb.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                    <div class="iconbox pe-0 pe-sm-5">
                        <img src="images/icons/wykonczenie.svg" alt="" width="76" height="76">
                        <h3>Kompleksowe<br> wykończenie</h3>
                        <p>Od projektu po realizację - wszystkim zajmuje się doświadczony zespół.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                    <div class="iconbox">
                        <img src="images/icons/mieszkanie-pokazowe.svg" alt="" width="76" height="76">
                        <h3>Mieszkanie<br> pokazowe</h3>
                        <p>Zobacz na żywo standard wykończenia i możliwości aranżacji wnętrza.</p>
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
                                MIESZKANIE POKAZOWE
                            </span>
                            <h2 class="big">Zobacz standard wykończenia na żywo</h2>
                        </div>
                        <p>Dzięki naszej pomocy cały proces przebiega sprawnie, bez zbędnego stresu i konieczności koordynowania wielu wykonawców. Państwa wizja stanie się gotowym, dopracowanym wnętrzem - komfortowym, estetycznym i w pełni dopasowanym do codziennego życia.</p>
                        <p>&nbsp;</p>
                        <p>Aby mogli Państwo przekonać się o jakości pracy naszych specjalistów, z przyjemnością zaprezentujemy mieszkanie pokazowe. To doskonała okazja, by naocznie zapoznać się za standardem wykończenia, ocenić możliwości naszej ekipy oraz wyobrazić sobie efekt końcowy jeszcze przed rozpoczęciem realizacji.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-5 d-flex justify-content-center justify-content-lg-end align-items-center mt-5 mt-lg-0">
                    <img src="{{ asset('images/wykonczenie-2.jpg') }}" alt="" class="img-rounded">
                </div>
            </div>

            <div class="row mt-4 mt-lg-6 pt-4">
                <div class="col-12 text-center">
                    <h3>Poniżej prezentujemy kilka przykładowych<br> wizualizacji wykończenia mieszkania.</h3>
                </div>
                <div class="col-12 mt-4">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                            {!! parse_text("[galeria=gallery]4[/galeria]") !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-5 pt-xxl-6 pb-5 pb-xxl-0">
        @include('front.contact.form', ['page_name' => 'Praca'])
    </div>
    <!-- END -> MAIN SECTION -->
@endsection
