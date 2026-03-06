@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-apartamenty'])

@section('meta_title', 'Inwestycje - '.$investment->name)
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
                    <a href="/">Strona główna</a> / <a href="{{ route('front.developro.current') }}">Mieszkania</a> / {{ $investment->name }}
                </div>
            </div>
        </div>

        <!-- MENU TABS -->
        @include('front.developro.investment_shared.menu')

        <div class="container-fluid inwestycje-garaz position-relative px-0">
            <div class="inwestycje-garaz__decor">
                <svg xmlns="http://www.w3.org/2000/svg" width="29.424" height="920.114" viewBox="0 0 29.424 920.114">
                    <path id="blog-decor-02" d="M1919.5,1106.5h-29.424V266.808a200.063,200.063,0,0,0,9.982-19.759c3.256-7.3,6.471-15.362,9.3-23.3,5.148-14.465,8.75-27.734,10.144-37.36Z" transform="translate(-1890.077 -186.386)" fill="#5a5a5a"/>
                </svg>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12  d-flex align-items-center justify-content-center flex-column text-start mb-30 scroll-anim-top">
                        <h1 class="text-uppercase">{{ $investment_page->title }}</h1>

                    </div>
                    <div class="col-12 d-flex align-items-start justify-content-start flex-column mt-30">
                        {!! parse_text($investment_page->content) !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- FORM -->
        @include('front.contact.offer-ask-form', [
            'pageTitle' => $investment->name,
            'investmentName' => $investment->name,
            'investmentId' => $investment->id,
            'back' => true
        ])
    </main>
    <!-- END -> MAIN SECTION -->
@endsection
@push('scripts')

@endpush
