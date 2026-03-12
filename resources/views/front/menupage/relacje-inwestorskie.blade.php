@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-relacje'])

@section('meta_title', $page->title ?? 'Relacje inwestorskie')
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
                                KUPIMY GRUNTY
                            </span>
                            <h2 class="big">Chętnie nawiążemy współpracę!</h2>
                        </div>
                        <p>Firma <b>ORION DEVELOPMENT</b> w najbliższym czasie ma w planach realizację kolejnych projektów. W związku z tym jesteśmy zainteresowani nabyciem kolejnych gruntów pod zabudowę.</p>
                        <p>&nbsp;</p>
                        <p>Chętnie nawiążemy współpracę z osobami fizycznymi i prawnymi posiadające w swoim posiadaniu nieruchomości mogące nas zainteresować.</p>
                        <p>&nbsp;</p>
                        <p>Oferty prosimy kierować telefonicznie tel. <a href="tel:+48512370000"><b>512 370 000</b></a> bądź na adres: <a href="mailto:oriondevelopment@o2.pl"><b>oriondevelopment@o2.pl</b></a></p>
                    </div>
                </div>
                <div class="col-5 d-flex justify-content-end">
                    <img src="{{ asset('images/kariera.webp') }}" alt="" class="img-rounded">
                </div>
            </div>

        </div>
    </div>
    <section id="numbers" class="pb-6">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="numerbox">
                        <span>29+</span>
                        <p class="ps-4">lat <br>doświadczenia</p>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div class="numerbox">
                        <span>6</span>
                        <p class="ps-4">zrealizowanych <br>inwestycji</p>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <div class="numerbox">
                        <span>765</span>
                        <p class="ps-4">sprzedanych <br>mieszkań</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pt-5 pt-xxl-6 pb-5 pb-xxl-0">
        @include('front.contact.form', ['page_name' => 'Praca'])
    </div>
    <!-- END -> MAIN SECTION -->
@endsection
