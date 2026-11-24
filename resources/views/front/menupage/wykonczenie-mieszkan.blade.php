@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-menupage'])

@section('meta_title', $page->title ?? 'Wykończenie mieszkań')
@section('seo_title', $page->meta_title ?? '')
@section('seo_description', $page->meta_description ?? '')
@section('seo_robots', $page->meta_robots ?? '')

@section('content')
    <div class="container-fluid mieszkania-submenu">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Wykończenie mieszkania pod klucz</h1>
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
                            <!-- <span class="section-header-subtitle dm-sans-400">
                                <i class="subtitle-left"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M0.527588 0V9.49634H8.96878" stroke="#FF9500" stroke-width="1"/></svg></i>
                                <i class="subtitle-right"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M8.44116 10.0239L8.44116 0.527584L-3.06411e-05 0.527583" stroke="#FF9500" stroke-width="1"/></svg></i>
                                KOMPLEKSOWE WYKOŃCZENIE
                            </span> -->
                            <!-- <h2 class="big">Wykończ swoje mieszkanie bez stresu</h2> -->
                        </div>
                        <div class="seo-container">
                            <p>Odbiór kluczy do nowego lokalu to początek ekscytującego, ale też wymagającego etapu, jakim jest aranżacja wnętrza. W <a href="/o-firmie">Orion Development</a> wyręczamy Cię we wszystkich formalnościach i pracach budowlanych.</p>
                            <p>Realizujemy kompleksowe usługi <strong>pod klucz</strong>, łącząc autorski projekt z precyzyjnym wykonawstwem. Nasi architekci wraz z zespołem fachowców tworzą przestrzenie gotowe do zamieszkania, których standard możesz wcześniej osobiście sprawdzić w naszym łódzkim lokalu pokazowym.</p>
                            <p><strong>Projekt dopasowany do Ciebie</strong></p>
                            <p>Indywidualna aranżacja wnętrza stworzona przez architekta z uwzględnieniem Twoich potrzeb, oczekiwań i budżetu.</p>
                            <p><strong>Jedna ekipa i pełna odpowiedzialność</strong></p>
                            <p>Nie musisz szukać ani koordynować wielu podwykonawców. Całość realizacji i nadzór nad pracami bierzemy na siebie.</p>
                            <p><strong>Oszczędność czasu i budżetu</strong></p>
                            <p>Przejrzysty kosztorys, ustalona cena i realizacja prac zgodnie z harmonogramem – bez niepotrzebnego stresu i niespodziewanych wydatków.</p>
                            <p><strong>Lokal gotowy do zamieszkania</strong></p>
                            <p>Odbierasz klucze do w pełni wykończonego mieszkania, gotowego na nowy rozdział – bez bałaganu, zmartwień i konieczności nadzorowania remontu.</p>
                        </div>
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
                <div class="col-12">
                    <h2>Proste kroki do sprawnego wykończenia</h2>
                    <p><strong>Wykończenie mieszkania pod klucz</strong> to proces, który prowadzimy od pierwszej konsultacji aż po przekazanie gotowego wnętrza. Każdy etap jest starannie zaplanowany, dzięki czemu wiesz, czego się spodziewać, a my dbamy o sprawną realizację całego przedsięwzięcia.</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="iconbox pe-0 pe-sm-5">
                        <img src="images/icons/klucze.svg" alt="" width="76" height="76">
                        <h3>Krok 1: Konsultacja i określenie potrzeb</h3>
                        <p>Poznajemy Twoje oczekiwania, preferencje stylistyczne i potrzeby funkcjonalne, a także ustalamy budżet przeznaczony na wykończenie mieszkania.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-sm-0">
                    <div class="iconbox pe-0 pe-sm-5">
                        <img src="images/icons/projekt.svg" alt="" width="76" height="76">
                        <h3>Krok 2: Projekt wnętrza i dobór materiałów</h3>
                        <p>Architekt opracowuje układ pomieszczeń, przygotowuje wizualizacje i pomaga dobrać materiały wykończeniowe dopasowane do Twojego stylu oraz możliwości finansowych.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                    <div class="iconbox pe-0 pe-sm-5">
                        <img src="images/icons/wykonczenie.svg" alt="" width="76" height="76">
                        <h3>Krok 3: Realizacja prac wykończeniowych</h3>
                        <p>Nasza ekipa realizuje wszystkie zaplanowane etapy – od przygotowania ścian i układania płytek po montaż podłóg, drzwi oraz armatury.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                    <div class="iconbox">
                        <img src="images/icons/mieszkanie-pokazowe.svg" alt="" width="76" height="76">
                        <h3>Krok 4: Odbiór gotowego mieszkania</h3>
                        <p>Po zakończeniu prac przekazujemy Ci klucze do wykończonego wnętrza, przygotowanego do zamieszkania.</p>
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
                        <div class="seo-container">
                            <p>Chcesz sprawdzić jakość materiałów i precyzję wykonania przed podjęciem decyzji? Zapraszamy do naszego mieszkania pokazowego w Łodzi. To doskonała okazja, aby na własne oczy ocenić dbałość o detale, zainspirować się przykładową aranżacją wnętrza oraz porozmawiać z doradcą o opcjach wykończenia Twojego lokalu. <a href="/kontakt">Skontaktuj się z biurem sprzedaży</a> i umów termin wizyty.</p>
                            <p>Aby mogli Państwo przekonać się o jakości pracy naszych specjalistów, z przyjemnością zaprezentujemy mieszkanie pokazowe. To doskonała okazja, by naocznie zapoznać się za standardem wykończenia, ocenić możliwości naszej ekipy oraz wyobrazić sobie efekt końcowy jeszcze przed rozpoczęciem realizacji.</p>
                        </div>
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
