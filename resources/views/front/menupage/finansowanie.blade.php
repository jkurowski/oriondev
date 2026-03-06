@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-menupage'])

{{--@section('meta_title', $page->title ?? 'Kredyt')--}}
{{--@section('seo_title',$page->meta_title ?? '')--}}
{{--@section('seo_description', $page->meta_description ?? '')--}}
{{--@section('seo_robots', $page->meta_robots ?? '')--}}

@section('content')
    <!-- MAIN SECTION -->
    <main class="overflow-hidden mb-5">
        <!-- BREADCRUMB -->
        <div class="container breadcrumb-section">
            <div class="row">
                <div class="col-12">
                    <a href="/">Strona główna</a> / Strefa klienta / Finansowanie
                </div>
            </div>
        </div>
        <!-- PAGE ENTRY -->
        <div class="container-fluid page-entry-dzialki mt-5 position-relative">
            <div class="page-entry-dzialki__decor">
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
                    <div class="col-12">
                        <h1 class="text-uppercase mb-4">Finansowanie</h1>

                        <p>Rozumiemy, że proces starania się o kredyt hipoteczny nie zawsze jest łatwy i zrozumiały. Często wymaga dużych nakładów czasu, znajomości procedur i kruczków prawnych. Mając na uwadze Państwa wygodę podjęliśmy współpracę z Private Solutions – firmą ekspercką, niezależną od instytucji finansowych, która zapewni Państwu bezpłatną konsultację i kompleksową obsługę w zakresie kredytów hipotecznych. Eksperci Private Solutions wspomogą Państwa merytorycznie, nadzorując procedurę kredytową.<br><br>W ramach współpracy oferujemy Państwu:</p>
                        <ul>
                            <li>analizę ofert kredytowych różnych instytucji finansowych</li>
                            <li>badanie zdolności kredytowej</li>
                            <li>pomoc w kompletowaniu dokumentacji</li>
                            <li>procesowanie wniosku w kliku instytucjach jednocześnie</li>
                            <li>negocjowanie warunków oferty</li>
                            <li>analizę prawną umowy</li>
                        </ul>
                        <p>&nbsp;</p>
                        <p>Co zyskują Państwo w ramach współpracy z Private Solutions:</p>
                        <ul>
                            <li><strong>Brak opłat i prowizji</strong> – oferowane usługi są dla Państwa całkowicie bezpłatne</li>
                            <li><strong>Profesjonalne konsultację</strong> – pracownicy Private Solutions to doskonale przeszkoleni specjaliści z doświadczeniem, którzy bezustannie podnoszą swoje kompetencje, aby świadczone usługi były na jak najwyższym poziomie.</li>
                            <li><strong>Oszczędność czasu i pieniędzy</strong> - szybkie i sprawne przebrnięcie przez kredytowe formalności, a także pomoc w negocjacjach cenowych z instytucjami finansowymi.</li>
                            <li><strong>Szeroka oferta</strong> – Dysponując pełną paletą produktów hipotecznych, ubezpieczeniowych i inwestycyjnych, dedykowani specjaliści zaproponują Państwu produkt bezpieczny oraz dopasowany do indywidualnych potrzeb.</li>
                            <li><strong>Najlepsze warunki</strong> - z uwagi na doświadczenie negocjacyjne, oferta kredytowa, którą otrzymują Klienci Private Solutions jest często korzystniejsza niż oferowana bezpośrednio przez instytucje finansowe.</li>
                            <li><strong>Dodatkowe bonusy</strong> – w ramach podjętej współpracy, Klienci mają możliwość otrzymania dodatkowych bonusów – np. w postaci darmowego ubezpieczenia nieruchomości lub bonu na zakup sprzętu RTV/AGD.</li>
                            <li><strong>Obiektywizm</strong> - Private Solutions jest spółką niepowiązaną kapitałowo z innymi instytucjami finansowymi, dzięki czemu specjaliści finansowi, przedstawiają zawsze najlepszą ofertę, kierując się tylko i wyłącznie dobrem Klienta.</li>
                            <li><strong>Dyspozycyjność</strong> – dla Państwa wygody, spotkanie ze specjalistą Private Solutions może odbyć się w domu, w biurze, siedzibie spółki lub w innych dogodnych dla Klientów miejscach.</li>
                        </ul>
                        <p>&nbsp;</p>
                        <img src="{{ asset('uploads/storage/private-solutions-logo.jpg') }}" alt="Private Solutions logo" width="150" height="139" class="d-block mx-auto">
                        <p>&nbsp;</p>
                        <p>Aby uzyskać pomoc w sfinansowaniu zakupu nieruchomości lub zbadać swoją zdolność kredytową, wystarczy skontaktować się z dedykowanymi specjalistami finansowymi Private Solutions:</p>
                        <h4>Regina Obłąk</h4>
                        <p><i>Specjalista Kredytowy</i></p>
                        <p>ul. Legnicka 57w/6, 54-203 Wrocław<br>kom. + <a href="tel:604782520">604 782 520</a><br><a href="mailto:regina.oblak@privatesolutions.pl">regina.oblak@privatesolutions.pl</a><br><br></p>
                        <p>Więcej informacji o spółce znajdą Państwo na stronie: <a href="http://www.privatesolutions.pl%20" target="_blank" rel="nofollow">www.privatesolutions.pl </a><br>Działamy zgodnie z <a href="http://zwiazek-doradcow.org/index.php/rekomendacja-dobrych-praktyk" target="_blank" rel="nofollow">Rekomendacją Dobrych Praktyk Kredytowych</a><br><br></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- END -> MAIN SECTION -->
@endsection
