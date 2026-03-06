@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-o-nas'])

@section('meta_title', $page->title ?? 'Strefa klienta')
@section('seo_title',$page->meta_title ?? '')
@section('seo_description', $page->meta_description ?? '')
@section('seo_robots', $page->meta_robots ?? '')

@section('content')
    <!-- MAIN SECTION -->
    <main class="overflow-hidden">
        <!-- BREADCRUMB -->
        <div class="container breadcrumb-section">
            <div class="row">
                <div class="col-12">
                    <a href="/">Strona główna</a> / Strefa klienta
                </div>
            </div>
        </div>

        <!-- PAGE ENTRY -->
        <div class="container-fluid dlaczego-warto page-entry pt-0 mt-5 position-relative">
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
                    <div class="col-12 col-xl-6 d-flex flex-column align-items-start justify-content-center order-2 order-xl-1 mt-20 mt-xl-0">
                        <h1 class="text-uppercase mb-3">Strefa <br>klienta</h1>
                        <p><b>Szanowni Klienci</b> zachęcamy do zapoznania się z informacjami znajdującymi się w Strefie Klienta. Znajdziecie Państwo tutaj wszystkie niezbędne wiadomości przydatne na różnych etapach naszej współpracy: zaczynając od pomocy w finansowaniu, poprzez wskazówki dotyczące dokumentów, które należy przygotować ubiegając się o kredyt.</p>
                        <p>Klienci, którzy chcieliby wykończenie mieszkań scedować na firmę zewnętrzną, proponujemy współpracę z firmą, której zakres programów wykończeniowych znajdziecie Państwo w zakładce „Wykończenie Pod Klucz”.</p>
                        <p>Znajdziecie tu również Państwo wszystkie niezbędne informacje związane z ostatnim etapem jakim jest odbiór mieszkania, podpisanie aktu własności i zasady realizacji prac wykończeniowych w lokalu.</p>
                    </div>
                    <div class="col-12 col-xl-6 order-1 order-xl-2">
                        <img src="{{ asset('/img/temp/strefa.jpg') }}" alt="O nas" class="page-entry__img" width="672" height="530">
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        @include('front.contact.cta')

        <!-- FORM -->
        @include('front.contact.offer-ask-form', ['pageTitle' => 'Strefa klienta', 'back' => true])
    </main>
    <!-- END -> MAIN SECTION -->
@endsection
