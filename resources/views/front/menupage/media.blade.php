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
                    <a href="/">Strona główna</a> / Strefa klienta / Media w mieszkaniu
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
                        <h1 class="text-uppercase mb-4">Media w mieszkaniu</h1>
                        <p><strong>Telewizja</strong><br>Wszystkie inwestycje wyposażamy w instalację umożliwiającą odbiór TV naziemnej, z możliwością odbioru ok 30 programów. Aby odbierać sygnał telewizji naziemnej (standardowy pakiet kanałów), nie jest potrzebne żadne dodatkowe urządzenie. To samo dotyczy sygnału radiowego. Aby odbierać sygnał kanałów kodowanych, niezbędny jest zakup dekodera i podpisanie umowy z jednym z wielu operatorów, np. Cyfrowym Polsatem, Cyfrą+ itp. Instalacja zapewnia również techniczne możliwości podłączenia budynków do sieci operatorów telewizji kablowej i odbioru oferowanego zestawu kanałów, po podpisaniu indywidualnej umowy.<br><strong>Zabroniony jest montaż indywidualnych anten telewizji satelitarnej.</strong></p>

                        <p><strong>Telefony</strong><br>W celu dokonania zamówienia na instalację telefonu u operatora, konieczne jest dysponowanie dokumentem potwierdzającym tytuł prawny do lokalu. Dokumentem tym może być Umowa Deweloperska wraz z protokołem zdawczo-odbiorczym lokalu lub akt notarialny nabycia nieruchomości. Ponadto należy również okazać dokument tożsamości. Czas oczekiwania na przyłączenie, po rozpoznaniu przez operatorów jego warunków technicznych, wynosi około dwóch tygodni.</p>

                        <p><strong>Internet</strong><br>Wszystkie Lokale mają dostęp do szerokopasmowego Internetu poprzez budowę odpowiedniej instalacji (w ramach instalacji teleinformatycznej) z uniwersalnymi gniazdkami teleinformatycznymi w każdym pokoju dawanym w standardzie. Nasze inwestycje obsługiwane są przez ORANGE, PLAY, lub Fine Media. <br>&nbsp;Już w momencie wprowadzenia się, istnieje możliwość podpisania z konkretnym, działającym operatorem internetowym umowy indywidualnej na dostawę Internetu. <br>Wybór Abonamentu należy do Nabywcy.</p>
                        <ul>
                            <li><a target="_blank" href="https://www.orange.pl">www.orange.pl</a></li>
                            <li><a target="_blank" href="https://www.play.pl/">www.play.pl</a></li>
                            <li><a target="_blank" href="https://www.finemedia.pl/">www.finemedia.pl</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- END -> MAIN SECTION -->
@endsection
