@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-wszemirow'])

@section('meta_title', $page->title ?? 'Działki')
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
                    <a href="/">Strona główna</a> / Działki
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
                    <div class="col-12 col-xl-6 col-xxl-5 d-flex flex-column align-items-start justify-content-center order-2 order-xl-1 mt-20 mt-xl-0 scroll-anim-top">
                        <h1 class="text-uppercase mb-10">działki</h1>
                        <p>Poszukujemy gruntów pod zabudówę mieszkalną i komercyjną.</p>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                    </div>
                    <div class="col-12 col-xl-6 offset-0 offset-xxl-1 order-1 order-xl-2">
                        <img src="{{ asset('img/temp/dzialki.png') }}" alt="O nas" class="page-entry-dzialki__img scroll-anim-bottom">
                    </div>
                </div>
            </div>
        </div>

        <!-- KAFELKI -->
        <div class="container dzialki-kafelki mt-30 mt-lg-100">
            <div class="row">
                <div class="col-12 col-lg-4  mb-15 mb-sm-30 mb-lg-0">
                    <div class="dzialki-kafelki__item scroll-anim-bottom">
                        <h2 class="text-uppercase mb-20">sprzedajemy</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                        <a href="mailto:biuro@triadadom.pl" class="dzialki-kafelki__link d-flex align-items-center justify-content-start gap-2 mt-20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.058" height="20.058" viewBox="0 0 20.058 20.058">
                                <path id="mail-icn" d="M9.529,19.058a9.529,9.529,0,1,1,9.529-9.529A9.54,9.54,0,0,1,9.529,19.058ZM4.225,7.952v4.16a1.611,1.611,0,0,0,1.61,1.609h7.688a1.611,1.611,0,0,0,1.61-1.609V7.952L9.994,11.081a.62.62,0,0,1-.644,0Zm1.66-3.266A1.6,1.6,0,0,0,4.327,5.947l5.409,3.3,5.4-3.3a1.6,1.6,0,0,0-1.558-1.262Z" transform="translate(0.5 0.5)" stroke="#fff" stroke-width="1"/>
                            </svg>
                            biuro@triadadom.pl
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-15 mb-sm-30 mb-lg-0">
                    <div class="dzialki-kafelki__item scroll-anim-bottom">
                        <h2 class="text-uppercase mb-20">kupujemy</h2>
                        <p>Poszukujemy gruntów pod zabudówę mieszkalną i komercyjną.</p>
                        <a href="mailto:biuro@triadadom.pl" class="dzialki-kafelki__link d-flex align-items-center justify-content-start gap-2 mt-20" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.058" height="20.058" viewBox="0 0 20.058 20.058">
                                <path id="mail-icn" d="M9.529,19.058a9.529,9.529,0,1,1,9.529-9.529A9.54,9.54,0,0,1,9.529,19.058ZM4.225,7.952v4.16a1.611,1.611,0,0,0,1.61,1.609h7.688a1.611,1.611,0,0,0,1.61-1.609V7.952L9.994,11.081a.62.62,0,0,1-.644,0Zm1.66-3.266A1.6,1.6,0,0,0,4.327,5.947l5.409,3.3,5.4-3.3a1.6,1.6,0,0,0-1.558-1.262Z" transform="translate(0.5 0.5)" stroke="#fff" stroke-width="1"/>
                            </svg>
                            biuro@triadadom.pl
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="dzialki-kafelki__item scroll-anim-bottom">
                        <h2 class="text-uppercase mb-20">wszemirów</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                        <a href="/wszemirow/" class="custom-link">sprawdź</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        @include('front.contact.cta')

        <!-- FORM -->
        @include('front.contact.offer-ask-form')
    </main>
    <!-- END -> MAIN SECTION -->
@endsection

@push('scripts')

@endpush
