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
                    <a href="/">Strona główna</a> / Strefa klienta / Kredyt
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
                        <h1 class="text-uppercase mb-4">Do kredytu</h1>

                        <p><strong>Do wniosku kredytowego należy dołączyć następujące dokumenty: </strong></p>
                        <ul>
                            <li>podpisaną przez Strony Umowę Deweloperską / Umowę Przedwstępną kupna-sprzedaży,</li>
                            <li>dokumenty dotyczące budowy inwestycji, w której zakupywana jest nieruchomość, tj.: pozwolenie na budowę, zaświadczenie ostateczności decyzji pozwolenia na budowę, wypis i wyrys z rejestru gruntu, odpis z Księgi Wieczystej oraz KRS Triady Dom sp.j. (w/w dokumenty każdy Nabywca dostaje od nas przy podpisywaniu Umowy, zawieszone są także na naszej stronie przy każdej inwestycji w zakładce „Dokumenty”)</li>
                        </ul>
                        <p><strong>PONADTO:</strong><br>dokumenty do przygotowania po stronie Nabywcy<br><br><strong>Osoba zatrudniona na podstawie umowy o pracę: </strong></p>
                        <ul>
                            <li>zaświadczenie z zakładu pracy o zatrudnieniu i średnim miesięcznym dochodzie za okres ostatnich trzech/sześciu miesięcy,</li>
                            <li>historię rachunku lub wyciąg z konta osobistego.</li>
                        </ul>
                        <p><strong>Osoba prowadząca działalność gospodarczą: </strong></p>
                        <ul>
                            <li>zaświadczenie o wpisie do ewidencji działalności gospodarczej,</li>
                            <li>zaświadczenie o nadaniu numerów NIP oraz Regon,</li>
                            <li>aktualne zaświadczenie o niezaleganiu z US oraz ZUS,</li>
                            <li>umowa spółki,</li>
                            <li>zezwolenie lub koncesje,</li>
                            <li>opinia o rachunku bieżącym firmy,</li>
                            <li>ostatnio złożona deklaracja na zaliczkę miesięczną na podatek dochodowy,</li>
                            <li>roczne zeznanie o wysokości dochodu osiągniętych przez podatnika.</li>
                        </ul>
                        <p><strong>Osoba wykonująca zawód zaufania publicznego: </strong></p>
                        <ul>
                            <li>dokumenty rejestracyjne firmy,</li>
                            <li>oświadczenie o dochodzie,</li>
                            <li>aktualne zaświadczenie o niezaleganiu z US oraz ZUS,</li>
                            <li>roczne zeznanie o wysokości dochodów osiągniętych przez podatnika.</li>
                        </ul>
                        <p><strong>Do wniosku kredytowego uwzględnia się także:</strong></p>
                        <ul>
                            <li>dochody uzyskiwane z tytułów umów o dzieło i zlecenie,</li>
                            <li>dochody ze stałej renty lub emerytury,</li>
                            <li>dochody z najmu mieszkania.</li>
                        </ul>
                        <p>Osoby prowadzące gospodarstwo rolne, osoby zatrudnione na zasadzie kontraktu menadżerskiego oraz osoby uzyskujące dochód z najmu lub dzierżawy, muszą dostarczyć potrzebne dokumenty, które są indywidualnie ustalane przez bank.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- END -> MAIN SECTION -->
@endsection
