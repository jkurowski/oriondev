@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-mieszkania'])

@section('meta_title', $page->title ?? 'Inwestycje w sprzedaży')
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
                    <a href="/">Strona główna</a> / Inwestycje / Mieszkania
                </div>
            </div>
        </div>
        <!-- PAGE ENTRY -->
        <div class="container-fluid mt-5 position-relative">
            <div class="container ">
                <div class="row">
                    <div class="col-12 col-lg-10 col-xl-8 col-xxl-6 offset-0 offset-lg-1 offset-xl-2 offset-xxl-3  d-flex flex-column align-items-center justify-content-center order-2 order-xl-1">
                        <h1 class="text-uppercase text-center scroll-anim-top">Inwestycje mieszkaniowe</h1>

                    </div>
                </div>
            </div>
        </div>

        <!-- WYSZUKIWARKA -->
        @include('front.developro.search.flat-search-form')

        <div class="container-fluid items-list pt-4 position-relative z-3">
            <div class="items-list__decor">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="483.288" viewBox="0 0 29 483.288">
                    <path id="single-slider-decor" d="M1919.5,1171.283h-29V770.4a213.737,213.737,0,0,0,9.558-19.68c3.258-7.556,6.474-15.887,9.3-24.092,5.148-14.956,8.75-28.674,10.144-38.628Z" transform="translate(-1890.5 -687.995)" fill="#5a5a5a"/>
                </svg>
            </div>
            <div class="container">
                <div class="row">
                    @foreach($investments as $investment)
                        <div class="col-12 col-md-6 col-xl-4 mb-15 mb-sm-30 {{ $loop->index >= 3 ? 'scroll-anim-bottom' : '' }}">
                            <div class="items-list__item position-relative">
                                <a href="{{ route('front.developro.show', $investment->slug) }}" class="items-list__streched-link z-2"></a>
                                <div class="d-flex position-relative">
                                    <div class="items-list__cats d-flex flex-row flex-wrap gap-10">
                                        @if($investment->entry_content)
                                        <span class="items-list__cat-item z-3 position-relative">
                                            {{ $investment->entry_content }}
                                        </span>
                                        @endif
                                        @if($investment->city && 1 == 2)
                                        <span class="items-list__cat-item z-3 position-relative">
                                            {{ $investment->city->name }}
                                        </span>
                                        @endif
                                    </div>
                                    @if($investment->file_thumb)
                                    <img src="{{ asset('investment/thumbs/' . $investment->file_thumb) }}" alt="Miniaturka inwestycji {{ $investment->name }}" class="items-list__img w-100">
                                    @endif
                                </div>
                                <div class="d-flex flex-column align-items-start justify-content-start p-20">
                                    <h3 class="text-uppercase">{{ $investment->name }}</h3>
                                    <span class="mb-15">{{ $investment->inv_street }}, {{ $investment->inv_city }}</span>
                                    @if($investment->date_start)
                                    <span class="mb-15">Termin rozpoczęcia sprzedaży: {{ $investment->date_start }}</span>
                                    @endif
                                    @if($investment->date_end)
                                    <span class="mb-15">Termin zakończenia: {{ $investment->date_end }}</span>
                                    @endif
                                    @if($investment->inv_phone)
                                    <span class="">Biuro sprzedaży </span>
                                    <a href="tel:{{ $investment->inv_phone }}" class="items-list__tel mb-20 z-2">{{ formatPhone($investment->inv_phone) }}</a>
                                    @endif
                                    <a href="{{ route('front.developro.show', $investment->slug) }}" class="custom-button z-2">Sprawdź</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-40 mt-lg-60 mt-xl-80 d-none">
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
            </div>
        </div>

        <!-- CTA -->
        @include('front.contact.cta', ['show_header' => 0])

        <!-- FORM -->
        @include('front.contact.offer-ask-form')

    </main>
    <!-- END -> MAIN SECTION -->
@endsection
