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
                    <a href="/">Strona główna</a> / Strefa klienta / Odbiór mieszkania/lokalu
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
                        <h1 class="text-uppercase mb-4">Odbiór mieszkania/lokalu</h1>
                        <p>Zgodnie z Ustawą Deweloperską proces przekazywania mieszkań protokołem zdawczo-odbiorczym może się rozpocząć<strong> po uzyskaniu decyzji pozwolenia na użytkowanie</strong>.</p>
                        <p>Wówczas zaprosimy każdego z Nabywców na konkretny dzień i godzinę na budowę, w celu dokonania odbioru a tym samym przekazania mieszkania i kluczy. </p>
                        <p>Jeżeli Nabywcami są dwie lub więcej osób, każda z nich jest uprawniona solidarnie do dokonania odbioru, czyli przy odbiorze wystarczy jedna z osób będących Nabywcą.</p>
                        <p>Odbiór Lokalu zostanie udokumentowany <strong>Protokołem Zdawczo - Odbiorczym w formie KSIĄŻKI ZDAWCZO-ODBIORCZEJ, którą przysyłamy Nabywcy w formie elektronicznej i z której treścią Nabywca ZOBOWIĄZANY JEST SIĘ ZAPOZNAĆ.</strong></p>
                        <p>Do Protokołu można wpisać ewentualne wady. W terminie 14 dni od podpisania protokołu, Deweloper zobowiązany jest doręczyć Nabywcy oświadczenie o uznaniu lub odmowie uznania wad i jej przyczynach. Uznane wady Deweloper zobowiązany jest usunąć w terminie 30 dni.</p>
                        <p>Po odbiorze mieszkania, <strong>należy podpisać indywidualną umowę na dostawę energii elektrycznej i montaż liczników elektrycznych</strong>. W tym celu trzeba się udać do Zakładu Energetycznego, mieszczącego się we Wrocławiu przy ul. Mennicza 20 lub ul. Legnicka 60A. Wszelkie niezbędne dokumenty do podpisania umowy otrzymacie Państwo od nas przy odbiorze mieszkania.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- END -> MAIN SECTION -->
@endsection
