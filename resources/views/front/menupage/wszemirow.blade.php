@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-wszemirow'])

@section('meta_title', $page->title)
@section('seo_title',$page->meta_title ?? '')
@section('seo_description', $page->meta_description ?? '')
@section('seo_robots', $page->meta_robots ?? '')

@section('content')
    <!-- MAIN SECTION -->
    <main class="overflow-hidden">
        <div class="wszemirow-bg w-100">
            <!-- BREADCRUMB -->
            <div class="container breadcrumb-section">
                <div class="row">
                    <div class="col-12">
                        <a href="/">Strona główna</a> / Wszemirów
                    </div>
                </div>
            </div>
            <!-- PAGE ENTRY -->
            <div class="container-fluid page-entry mt-5 position-relative">
                <div class="page-entry__decor">
                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="163.505" viewBox="0 0 29 163.505">
                        <path id="decor-page-entry" d="M1890.5,851.5V770.4a213.782,213.782,0,0,0,9.558-19.68c3.258-7.556,6.474-15.887,9.3-24.092,5.147-14.955,8.75-28.673,10.144-38.628V851.5h-29Z" transform="translate(-1890.5 -687.995)" fill="#5a5a5a"/>
                    </svg>
                </div>
                <div class="container ">
                    <svg width="0" height="0" style="position:absolute;">
                        <defs>
                            <clipPath id="o-nas-clip" clipPathUnits="objectBoundingBox">
                                <path d="M1,1H0V0.922C0.001,0.914,0.004,0.899,0.008,0.883A0.256,0.256,0,0,1,0.015,0.84V0.029H0.664c0.033-0.018,0.065-0.029,0.098-0.029,0.011,0,0.022,0.001,0.033,0.001H1V1Z"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <div class="row">
                        <div class="col-12 d-flex flex-column align-items-start justify-content-center order-2 order-xl-1 mt-20 mt-xl-0 d-none">
                            <h1 class="text-uppercase mb-15 scroll-anim-top">wszemirów</h1>
                            <p>Szanowni Państwo Współwłaściciele, </p>

                            <p>Działając jako Wspólnik Spółki „Triada-Dom Wachowiak Śliwiak spółka jawna” z siedzibą w Trzebnicy (adres: ul. Obornicka 19, 55-100 Trzebnica) wpisanej do rejestru przedsiębiorców Krajowego Rejestru Sądowego pod numerem KRS: 0000153900,  NIP: 9151545914, REGON: 931983476 (dalej: Spółka) chciałem Państwa poinformować, że od dnia 10.10.2024 roku Spółka stała się współwłaścicielem „działek drogowych” (działki numer 83/75, 83/108, 83/109, 83/131, 83/141, 83/150, 83/154, 83/166, 83/167, 83/214, 83/248, 83/282, 83/288, 83/291, 83/325, 83/359) położonych w miejscowości Wszemirów, gmina Prusice, powiat trzebnicki, województwo dolnośląskie - wpisanym w księdze wieczystej numer WR1W/00062372/0, prowadzonej przez Sąd Rejonowy w Trzebnicy IV Wydział Ksiąg Wieczystych (działki drogowe zwane będą dalej także „Drogą”).</p>

                            <p>Zamiarem Spółki jest rozpoczęcie długotrwałego procesu, którego efektem będzie wykonanie w działkach drogowych sieci wodociągowej, po wcześniejszym usunięciu drzew – co leży zarówno w interesie Spółki jak też Wszystkich Współwłaścicieli działek drogowych,  albowiem pozwoli na uzbrojenie posiadanych przez Państwa prywatnych nieruchomości. Wodociąg będzie poprowadzony w sposób umożliwiający wpięcie każdemu właścicielowi działki.</p>

                            <p>Dodatkowo, w ramach inwestycji, zostaną zainstalowane hydranty przeciwpożarowe, które będą stanowiły istotny element bezpieczeństwa pożarowego, zwłaszcza z uwagi na bezpośrednie otoczenie działek przez las i pola uprawne.</p>

                            <p>Realizacja tych planów jest jednak bardzo skomplikowana i wymaga podjęcia szeregu działań uzgodnieniowych, projektowych i wreszcie realizacyjnych. Dla potrzeb rozpoczęcia przedmiotowego procesu wszyscy Współwłaściciele nieruchomości drogowych muszą udzielić Spółce pełnomocnictwa, którego treść zawierać będzie między innymi prawo do  dysponowania wskazanymi wyżej działkami drogowymi dla celów budowlanych w rozumieniu ustawy Prawo budowlane oraz prawo do ustanawiania na tych działkach drogowych bezpłatnych i bezterminowych służebności gruntowych lub służebności przesyłu na rzecz dostawców mediów (w przypadku, gdy ustanowienie tych obciążeń będzie warunkiem rozpoczęcia dostaw mediów przez dany zakład lub podmiot), polegających m.in. na swobodnym dostępie do instalacji w celu ułożenia, budowy, utrzymania, rozbudowy i przebudowania urządzeń, rur, przepustów, dokonywania przeglądów, napraw, remontów, konserwacji, usunięcia awarii sieci wraz z przyłączami doprowadzającymi instalację oraz innych czynności związanych z eksploatacją lub wymianą tych urządzeń.</p>

                            <p>Pragnę w tym miejscu podkreślić, że budowa sieci wodociągowej w działkach drogowych ostanie sfinansowana w całości z środków Spółki, a Państwo będą uprawnieni (nie zobowiązani) do ewentualnego przyłączenia do tej sieci wodociągowej.</p>

                            <p>Obecnie, jesteśmy w trakcie procedowania projektu sieci wodociągowej. Koszt wpięcia do sieci, nie jest na tym etapie nam znany. Po otrzymaniu projektu, będziemy mogli takie koszty wyliczyć i oficjalnie przedstawić.</p>

                            <p>W związku z tym chciałbym zaprosić Państwa do Kancelarii Notarialnej Biernat Błuś Notariusze S.C., ul. Stacyjna 1 lok. 12A we Wrocławiu, celem udzielenia takiego pełnomocnictwa naszej Spółce. W tym miejscu wyjaśniam, że Spółka pokryje koszty notarialne związane z jego udzieleniem. Wszelkie ewentualne niejasności lub wątpliwości proszę zgłaszać na dedykowanego dla potrzeb kontaktu ze Współwłaścicielami nieruchomości maila: wszemirow@triadadom.pl lub telefon: 669-885-997</p>

                            <p>Na zakończenie raz jeszcze chciałbym podkreślić, że Państwa zgody i udzielenia upoważnienia Spółce do wskazanych wyżej czynności dotyczących Drogi nie będzie możliwe rozpoczęcie długotrwałego procesu, którego efektem będzie wykonanie w działkach drogowych sieci wodociągowej – co bezspornie podniesie wartość Państwa nieruchomości. Dla rozpoczęcia i realizacji tego celu Spółka potrzebuje uzyskać od wszystkich Państwa wskazane wyżej pełnomocnictwa.</p>


                            <p>Z wyrazami szacunku,<br>
                                Wojciech Wachowiak<br>
                                Członek Zarządu<br>
                                Triada Dom Wachowiak Śliwiak Sp. j.</p>

                            <p class="mt-50">Materiały do pobrania:</p>
                            <a href="{{ asset('uploads/wszemirow/pelnomocnictwo_wzor.pdf') }}" class="custom-link d-flex align-items-center justify-content-start gap-2 mb-25" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.063" height="16.084" viewBox="0 0 12.063 16.084">
                                    <g id="pdf" transform="translate(-64 -1.916)">
                                        <g id="Group_1459" data-name="Group 1459" transform="translate(64 1.916)">
                                            <g id="Group_1458" data-name="Group 1458">
                                                <path id="Path_1751" data-name="Path 1751" d="M75.965,3.449,72.614.1a.335.335,0,0,0-.237-.1H65.34A1.342,1.342,0,0,0,64,1.34v13.4a1.342,1.342,0,0,0,1.34,1.34h9.382a1.342,1.342,0,0,0,1.34-1.34V3.686A.335.335,0,0,0,75.965,3.449Zm-3.253-2.3,2.207,2.207H73.382a.671.671,0,0,1-.67-.67Zm2.681,13.6a.671.671,0,0,1-.67.67H65.34a.671.671,0,0,1-.67-.67V1.34a.671.671,0,0,1,.67-.67h6.7v2.01a1.342,1.342,0,0,0,1.34,1.34h2.01Z" transform="translate(-64 0)"/>
                                                <path id="Path_1752" data-name="Path 1752" d="M133.729,175.141a9.716,9.716,0,0,1-.8-.691c-.255-.255-.483-.5-.68-.738a7.5,7.5,0,0,0,.443-1.706c0-1.112-.4-1.34-1.005-1.34-.458,0-1.005.238-1.005,1.372a3.213,3.213,0,0,0,.817,1.813c-.133.405-.289.873-.464,1.4-.084.253-.176.487-.273.7-.079.035-.155.071-.229.108-.266.133-.519.253-.754.364-1.07.507-1.777.842-1.777,1.5,0,.48.522.778,1.005.778.623,0,1.564-.832,2.251-2.234a13.331,13.331,0,0,1,2.3-.62,3.844,3.844,0,0,0,1.48.844c.831,0,1.005-.48,1.005-.883,0-.792-.905-.792-1.34-.792A7.937,7.937,0,0,0,133.729,175.141Zm-4.724,2.9a.53.53,0,0,1-.335-.108c0-.238.708-.573,1.394-.9l.133-.063C129.693,177.7,129.2,178.038,129.005,178.038Zm2.346-6c0-.7.218-.7.335-.7.237,0,.335,0,.335.67a5.373,5.373,0,0,1-.267,1.046A2.059,2.059,0,0,1,131.351,172.038Zm.257,3.6q.031-.087.061-.177c.124-.373.236-.708.336-1.01q.209.23.45.471c.063.063.219.2.426.381C132.467,175.4,132.028,175.507,131.608,175.64Zm3.764.174c0,.151,0,.213-.311.215a2.47,2.47,0,0,1-.563-.321c.095-.01.164-.016.2-.016C135.2,175.692,135.337,175.741,135.372,175.814Z" transform="translate(-125.99 -165.305)"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                Wzór pełnomocnictwa
                            </a>
                            <a href="{{ asset('uploads/wszemirow/wszemirow_mapa.png') }}" class="custom-link d-flex align-items-center justify-content-start gap-2 mb-25" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.063" height="16.084" viewBox="0 0 12.063 16.084">
                                    <g id="pdf" transform="translate(-64 -1.916)">
                                        <g id="Group_1459" data-name="Group 1459" transform="translate(64 1.916)">
                                            <g id="Group_1458" data-name="Group 1458">
                                                <path id="Path_1751" data-name="Path 1751" d="M75.965,3.449,72.614.1a.335.335,0,0,0-.237-.1H65.34A1.342,1.342,0,0,0,64,1.34v13.4a1.342,1.342,0,0,0,1.34,1.34h9.382a1.342,1.342,0,0,0,1.34-1.34V3.686A.335.335,0,0,0,75.965,3.449Zm-3.253-2.3,2.207,2.207H73.382a.671.671,0,0,1-.67-.67Zm2.681,13.6a.671.671,0,0,1-.67.67H65.34a.671.671,0,0,1-.67-.67V1.34a.671.671,0,0,1,.67-.67h6.7v2.01a1.342,1.342,0,0,0,1.34,1.34h2.01Z" transform="translate(-64 0)"/>
                                                <path id="Path_1752" data-name="Path 1752" d="M133.729,175.141a9.716,9.716,0,0,1-.8-.691c-.255-.255-.483-.5-.68-.738a7.5,7.5,0,0,0,.443-1.706c0-1.112-.4-1.34-1.005-1.34-.458,0-1.005.238-1.005,1.372a3.213,3.213,0,0,0,.817,1.813c-.133.405-.289.873-.464,1.4-.084.253-.176.487-.273.7-.079.035-.155.071-.229.108-.266.133-.519.253-.754.364-1.07.507-1.777.842-1.777,1.5,0,.48.522.778,1.005.778.623,0,1.564-.832,2.251-2.234a13.331,13.331,0,0,1,2.3-.62,3.844,3.844,0,0,0,1.48.844c.831,0,1.005-.48,1.005-.883,0-.792-.905-.792-1.34-.792A7.937,7.937,0,0,0,133.729,175.141Zm-4.724,2.9a.53.53,0,0,1-.335-.108c0-.238.708-.573,1.394-.9l.133-.063C129.693,177.7,129.2,178.038,129.005,178.038Zm2.346-6c0-.7.218-.7.335-.7.237,0,.335,0,.335.67a5.373,5.373,0,0,1-.267,1.046A2.059,2.059,0,0,1,131.351,172.038Zm.257,3.6q.031-.087.061-.177c.124-.373.236-.708.336-1.01q.209.23.45.471c.063.063.219.2.426.381C132.467,175.4,132.028,175.507,131.608,175.64Zm3.764.174c0,.151,0,.213-.311.215a2.47,2.47,0,0,1-.563-.321c.095-.01.164-.016.2-.016C135.2,175.692,135.337,175.741,135.372,175.814Z" transform="translate(-125.99 -165.305)"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                Mapa
                            </a>
                            <a href="{{ asset('uploads/wszemirow/wszemirow_formularz_klienta.docx') }}" class="custom-link d-flex align-items-center justify-content-start gap-2" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.063" height="16.084" viewBox="0 0 12.063 16.084">
                                    <g id="pdf" transform="translate(-64 -1.916)">
                                        <g id="Group_1459" data-name="Group 1459" transform="translate(64 1.916)">
                                            <g id="Group_1458" data-name="Group 1458">
                                                <path id="Path_1751" data-name="Path 1751" d="M75.965,3.449,72.614.1a.335.335,0,0,0-.237-.1H65.34A1.342,1.342,0,0,0,64,1.34v13.4a1.342,1.342,0,0,0,1.34,1.34h9.382a1.342,1.342,0,0,0,1.34-1.34V3.686A.335.335,0,0,0,75.965,3.449Zm-3.253-2.3,2.207,2.207H73.382a.671.671,0,0,1-.67-.67Zm2.681,13.6a.671.671,0,0,1-.67.67H65.34a.671.671,0,0,1-.67-.67V1.34a.671.671,0,0,1,.67-.67h6.7v2.01a1.342,1.342,0,0,0,1.34,1.34h2.01Z" transform="translate(-64 0)"/>
                                                <path id="Path_1752" data-name="Path 1752" d="M133.729,175.141a9.716,9.716,0,0,1-.8-.691c-.255-.255-.483-.5-.68-.738a7.5,7.5,0,0,0,.443-1.706c0-1.112-.4-1.34-1.005-1.34-.458,0-1.005.238-1.005,1.372a3.213,3.213,0,0,0,.817,1.813c-.133.405-.289.873-.464,1.4-.084.253-.176.487-.273.7-.079.035-.155.071-.229.108-.266.133-.519.253-.754.364-1.07.507-1.777.842-1.777,1.5,0,.48.522.778,1.005.778.623,0,1.564-.832,2.251-2.234a13.331,13.331,0,0,1,2.3-.62,3.844,3.844,0,0,0,1.48.844c.831,0,1.005-.48,1.005-.883,0-.792-.905-.792-1.34-.792A7.937,7.937,0,0,0,133.729,175.141Zm-4.724,2.9a.53.53,0,0,1-.335-.108c0-.238.708-.573,1.394-.9l.133-.063C129.693,177.7,129.2,178.038,129.005,178.038Zm2.346-6c0-.7.218-.7.335-.7.237,0,.335,0,.335.67a5.373,5.373,0,0,1-.267,1.046A2.059,2.059,0,0,1,131.351,172.038Zm.257,3.6q.031-.087.061-.177c.124-.373.236-.708.336-1.01q.209.23.45.471c.063.063.219.2.426.381C132.467,175.4,132.028,175.507,131.608,175.64Zm3.764.174c0,.151,0,.213-.311.215a2.47,2.47,0,0,1-.563-.321c.095-.01.164-.016.2-.016C135.2,175.692,135.337,175.741,135.372,175.814Z" transform="translate(-125.99 -165.305)"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                Formularz dla właścicieli działek
                            </a>
                            <small class="text-small mt-10">(do uzupełnienia i odesłania na e-mail: wszemirow@triadadom.pl)</small>
                        </div>
                        <div class="col-12 d-flex flex-column align-items-start justify-content-center order-2 order-xl-1 mt-20 mt-xl-0">
                            <h1 class="text-uppercase mb-15 scroll-anim-top">wszemirów</h1>

                            {!! parse_text($page->content, true) !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- CTA -->
        @include('front.contact.cta')

        <!-- FORM -->
        @include('front.contact.offer-ask-form', ['pageTitle' => 'Wszemirów', 'back' => true])
    </main>
    <style>
        .cta-img {margin-top:0}
        .wszemirow-bg {
            padding-bottom:100px;
            background-image: url("{{ asset('img/wszemirow-bg.jpg') }}");
            background-position: bottom right;
            background-repeat: no-repeat;
        }
    </style>
@endsection
