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
                    <a href="/">Strona główna</a> / Strefa klienta / Wykończenie pod klucz
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
                        <h1 class="text-uppercase mb-4">Wykończenie pod klucz</h1>
                        <img src="{{ asset('uploads/decoroom/1.jpg') }}" alt="Realizacja firmy Decoroom" width="1370" height="913" class="mb-4">
                        <p><b>Decoroom</b> to pracownia architektury wnętrz obecna na rynku od ponad 16 lat. Specjalizujemy się w kompleksowym wykończeniu mieszkań i domów w stanie deweloperskim. Mamy na swoim koncie ponad 4000 realizacji.</p>
                        <p>Działamy kompleksowo, oferujemy nie tylko projekt i wykończenie wnętrz, ale również zabudowy meblowe z naszej stolarni, personalizowane drzwi, schody, montaż klimatyzacji oraz rozwiązania smart home. W ramach współpracy oferujemy trzy pakiety wykończenia wnętrz: Standard, Premium i Designer. W każdym z nich klient otrzymuje projekt, materiały wykończeniowe wraz z logistyką, realizację z nadzorem oraz 2-letnią gwarancję.</p>
                        <p>Decydując się na naszą usługę, oszczędzasz czas i zyskujesz kontrolę nad budżetem. Współpraca z architektami wnętrz umożliwia stworzenie ergonomicznej przestrzeni, a sprawną realizację zapewnia zespół koordynatorów, który zadba o każdy szczegół.</p>
                        <p>Co zyskasz, decydując się na ofertę Decoroom?</p>
                        <ul>
                            <li>oszczędność czasu i pieniędzy</li>
                            <li>fachową pomoc architekta podczas aranżacji wnętrz</li>
                            <li>profesjonalny nadzór nad realizacją prac wykończeniowych</li>
                            <li>niższy VAT: 8% zamiast 23%</li>
                            <li>przygotowanie wizualizacji 3D łazienki w cenie pakietu</li>
                            <li>wybór materiałów w jednym miejscu, w showroomie Decoroom</li>
                            <li>możliwość zaprojektowania i wykonania zabudowy kuchennej i meblowej</li>
                        </ul>
                        <div class="row mt-5 pb-5">
                            <div class="col-12 col-md-4">
                                <div class="deco-box text-center">
                                    <h2>Pakiet Standard</h2>
                                    <p>To ergonomiczne rozwiązania w rozsądnej cenie. W tej opcji oferujemy trwałe materiały od sprawdzonych producentów m.in. panele laminowane o wysokiej klasie odporności, wyselekcjonowany wybór płytek i gresów oraz wysokiej jakości armaturę i ceramikę.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-3 mt-md-0">
                                <div class="deco-box text-center">
                                    <h2>Pakiet Premium</h2>
                                    <p>To jeden z trzech, oferowanych przez Decoroom, pakietów wykończenia pod klucz. Stanowi wybór spośród szlachetnych i bardzo estetycznych materiałów, takich jak deska trójwarstwowa, drzwi bezprzylgowe z ukrytą ościeżnicą, płytki rektyfikowane czy kolorowa armatura łazienkowa.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-3 mt-md-0">
                                <div class="deco-box text-center">
                                    <h2>Pakiet Designer</h2>
                                    <p>To zestaw wyselekcjonowanych materiałów najwyższej jakości. W tej opcji oferujemy m.in. deskę 1-lamelową, wielkoformatowe płytki ceramiczne oraz ceramikę łazienkową od renomowanych producentów.</p>
                                </div>
                            </div>
                        </div>
                        <p>Więcej: <a href="https://www.decoroom.eu/" target="_blank">www.decoroom.eu</a></p>
                        <hr>
                        <img src="{{ asset('uploads/decoroom/2.jpg') }}" alt="Realizacja firmy Decoroom" width="1370" height="913" class="mt-3">
                        <img src="{{ asset('uploads/decoroom/3.jpg') }}" alt="Realizacja firmy Decoroom" width="1370" height="913" class="mt-3">
                        <img src="{{ asset('uploads/decoroom/4.jpg') }}" alt="Realizacja firmy Decoroom" width="1370" height="913" class="mt-3">
                        <img src="{{ asset('uploads/decoroom/5.jpg') }}" alt="Realizacja firmy Decoroom" width="1370" height="913" class="mt-3">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- END -> MAIN SECTION -->
@endsection
