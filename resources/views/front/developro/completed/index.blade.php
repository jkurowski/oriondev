@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-o-nas-inwestycje-zrealizowane'])

@section('meta_title', $page->title ?? 'Inwestycje zrealizowane')
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
                    <a href="/">Strona główna</a> / <a href="/o-nas/">O nas</a> / Inwestycje zrealizowane
                </div>
            </div>
        </div>
        <!-- PAGE ENTRY -->
        <div class="container-fluid page-entry-center mt-5 position-relative">
            <div class="container ">
                <div class="row">
                    <div class="col-12 col-lg-10 col-xl-8 col-xxl-6 offset-0 offset-lg-1 offset-xl-2 offset-xxl-3  d-flex flex-column align-items-center justify-content-center order-2 order-xl-1 scroll-anim-top">
                        <h1 class="text-uppercase text-center">Inwestycje</br>zrealizowane</h1>
                        <p class="mt-10 mb-0 text-center">Niektóre z naszych realizacji to kameralne osiedla, inne – nowoczesne budynki wielorodzinne, natomiast wszystkie łączy jedno: solidność wykonania i zadowolenie nabywców, którzy nazwali je swoim domem.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid zrealizowane mt-5">
            <div class="container">
                <div class="row">
                    @foreach($investments as $i)
                        <div class="col-12 col-md-6 col-xl-4 mb-15 mb-sm-30 scroll-anim-bottom">
                            <div class="zrealizowane__item position-relative">
                                @if(1 == 2)
                                <a href="{{ route('front.developro.completed.show', $i->slug) }}" class="zrealizowane__streched-link z-2"></a>
                                @endif
                                <div class="d-flex position-relative">
                                    <img class="zrealizowane__img w-100" src="{{ asset('/investment/thumbs/'. $i->file_thumb ) }}" width="300" height="250" alt="Wizualizacja inwestycji {{ $i->name }}">
                                </div>
                                <div class="d-flex flex-column align-items-start justify-content-start p-20">
                                    <h3 class="text-uppercase mb-10">{{ $i->name }}</h3>
                                    <span class="mb-15">{{ $i->inv_city }}, {{ $i->inv_street }}</span>
                                    <span class="mb-15">Rok ukończenia: {{ $i->date_end }} r</span>
                                    @if(1 == 2)
                                    <a href="{{ route('front.developro.completed.show', $i->slug) }}" class="custom-button z-2">Sprawdź</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- PAGINATION -->
                <div class="row mt-40 mt-lg-80 mt-xl-125 d-none">
                    <div class="col-12">
                        <div class="pagination d-flex align-items-center justify-content-center gap-20 gap-md-50">
                            <a href="#" class="pagination__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8.685" height="15.588" viewBox="0 0 8.685 15.588"><path id="arrow-left" d="M285.484-836.722l.891-.891-6.9-6.9,6.9-6.9-.891-.891-7.794,7.794Z" transform="translate(-277.69 852.31)" fill="#fff"></path></svg>
                            </a>
                            <span class="pagination__current">
                                1
                            </span>
                            <a href="#" class="pagination__link">2</a>
                            <a href="#" class="pagination__link">3</a>
                            <a href="#" class="pagination__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8.685" height="15.588" viewBox="0 0 8.685 15.588"><path id="arrow-next" d="M278.581-836.722l-.891-.891,6.9-6.9-6.9-6.9.891-.891,7.794,7.794Z" transform="translate(-277.69 852.31)" fill="#fff"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END -> PAGINATION -->
            </div>
        </div>

        <!-- FORM -->
        @include('front.contact.offer-ask-form', ['pageTitle' => 'Inwestycje zrealizowane', 'back' => true])
    </main>
    <!-- END -> MAIN SECTION -->
@endsection
