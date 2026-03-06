@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-praca'])

@section('meta_title', $page->title ?? 'Praca')
@section('seo_title',$page->meta_title ?? '')
@section('seo_description', $page->meta_description ?? '')
@section('seo_robots', $page->meta_robots ?? '')

@section('content')
    <!-- MAIN SECTION -->
    <div id="page">
        <div class="container">
            <div class="row pb-5">
                <div class="col-7">
                    <div class="pe-5">
                        <div class="section-header">
                            <span class="section-header-subtitle dm-sans-400">
                                <i class="subtitle-left"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M0.527588 0V9.49634H8.96878" stroke="#FF9500" stroke-width="1"/></svg></i>
                                <i class="subtitle-right"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M8.44116 10.0239L8.44116 0.527584L-3.06411e-05 0.527583" stroke="#FF9500" stroke-width="1"/></svg></i>
                                SZUKASZ PRACY?
                            </span>
                            <h2 class="big">Sprawdź naszą ofertę!</h2>
                        </div>
                        <p>Dobrze dobrany zespół potrafi sprostać stawianym mu wyzwaniom, wzajemnie się wspierać, wspólnie rozwiązywac problemy i nawzajem się inspirować.</p>
                        <p>Stworzyliśmy taki zespół i ciągle dbamy o jego rozwój poprzez różnego rodzaju szkolenia grupowe i indywidualne. Dbamy też o podtrzymywanie dobrych, nie tylko zawodowych więzi organizując spotkania i wyjazdy integracyjne.</p>
                        <p>Naszą siłą jest różnorodność naszych wspólnych doświadczeń, kreatywność w rozwiązywaniu problemów i wzajemna pomoc zwłaszcza osobom nowozatrudnionym.</p>
                    </div>
                </div>
                <div class="col-5 d-flex justify-content-end">
                    <img src="{{ asset('images/kariera.webp') }}" alt="" class="img-rounded">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="carrer-item">
                        <h2>Inżynier Budowy / Kierownik Robót / Kierownik Budowy</h2>
                        <p>&nbsp;</p>
                        <h3>Zakres obowiązków</h3>
                        <ul>
                            <li>Prowadzenie i nadzorowanie robót budowlanych</li>
                            <li>Koordynacja i nadzór nad wykonawcami, podwykonawcami oraz dostawcami</li>
                            <li>Kontrola jakości i terminowości prowadzonych robót</li>
                            <li>Zamówienia materiałów na potrzeby budowy</li>
                            <li>Sporządzanie obmiarów, zestawień materiałowych i cenowych</li>
                            <li>Kontrola przestrzegania przepisów BHP i ppoż</li>
                            <li>Rozliczanie wykonanych robót, materiałów, sprzętu oraz podwykonawców</li>
                            <li>Przygotowanie dokumentacji powykonawczej i odbiorczej</li>
                        </ul>
                        <p>&nbsp;</p>
                        <h3>Nasze wymagania</h3>
                        <ul>
                            <li>Doświadczenie przy prowadzeniu i nadzorowaniu inwestycji budowlanych</li>
                            <li>Samodzielność i umiejętność podejmowania decyzji na budowie</li>
                            <li>Wykształcenie średnie lub wyższe w specjalności budowlanej</li>
                            <li>Znajomość techniczna branży drogowej</li>
                            <li>Systematyczność, odpowiedzialność i zaangażowanie w pracy</li>
                            <li>Umiejętność pracy w zespole i komunikatywność</li>
                            <li>Dobra organizacja pracy</li>
                            <li>Uprawnienia budowlane będą dodatkowym atutem</li>
                            <li>Prawo jazdy kat. B</li>
                        </ul>
                        <p>&nbsp;</p>
                        <p>
                            Osoby zainteresowane prosimy o przesyłanie CV na adres:
                            <strong><a href="mailto:oriondevelopment@o2.pl">oriondevelopment@o2.pl</a></strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-6">
        @include('front.contact.form', ['page_name' => 'Praca'])
    </div>
    <!-- END -> MAIN SECTION -->
@endsection
