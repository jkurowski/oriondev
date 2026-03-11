@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-apartamenty'])

@section('meta_title', 'Inwestycje - '.$investment->name)
@section('meta_title', $page->title ?? 'Inwestycje w sprzedaży')
@section('seo_title',$page->meta_title ?? '')
@section('seo_description', $page->meta_description ?? '')
@section('seo_robots', $page->meta_robots ?? '')

@section('content')
    <!-- MAIN SECTION -->
    <main class="overflow-hidden">

        @include('front.developro.investment_shared.menu', ['static_page' => $static_page])

        <div class="container apartament-slider mt-5">
            <div class="row">
                <div class="col-12 col-xl-6 col-xxl-5 d-flex flex-column align-items-start justify-content-center order-2 order-xl-1 mt-30 mt-xl-0">
                    <h1 class="text-uppercase mb-30">{{ $investment->name }}<br>{{ $investment->inv_city }}<br>{{ $investment->inv_street }} {{ $investment->inv_property_number }}</h1>
                    {!! $investment->content !!}
                    @if($investment->plan)
                        @if($investment->type <> 3)
                            @if($investment->id == 43)
                                <a href="{{ route('front.developro.plan', $investment->slug) }}" class="custom-button mt-20">Dostępne apartamenty</a>
                            @elseif($investment->id == 47)
                                <a href="https://www.triadadom.pl/i/lipa-piotrowska/p/garaz" class="custom-button mt-20">Ostatnie dostępne miejsce parkingowe</a>
                            @else
                                <a href="{{ route('front.developro.plan', $investment->slug) }}" class="custom-button mt-20">Dostępne mieszkania</a>
                            @endif
                        @else
                            <a href="{{ route('front.developro.plan', $investment->slug) }}" class="custom-button mt-20">Dostępne domy</a>
                        @endif
                    @endif
                </div>

                <div class="col-12 col-lg-10 col-xl-6 offset-0 offset-lg-1 offset-xl-0 offset-xxl-1 order-1 order-xl-2 scroll-anim-bottom">
                    <div class="apartament-slider__slider-for">
                        @if($investment->images->count() < 5)
                            @foreach($investment->images as $image)
                                <div class="apartament-slider__item-for">
                                    <picture>
                                        @if($image->file_webp)
                                            <source type="image/webp" srcset="{{asset('uploads/gallery/images/webp/'.$image->file_webp) }}">
                                        @endif
                                        <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/'.$image->file) }}">
                                        <img src="{{asset('uploads/gallery/images/'.$image->file) }}" alt="{{ $investment->name }}">
                                    </picture>
                                </div>
                            @endforeach
                        @endif
                        @foreach($investment->images as $image)
                            <div class="apartament-slider__item-for">
                                <picture>
                                    @if($image->file_webp)
                                    <source type="image/webp" srcset="{{asset('uploads/gallery/images/webp/'.$image->file_webp) }}">
                                    @endif
                                    <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/'.$image->file) }}">
                                    <img src="{{asset('uploads/gallery/images/'.$image->file) }}" alt="{{ $investment->name }}">
                                </picture>
                            </div>
                        @endforeach
                    </div>
                    <div class="apartament-slider__slider-nav mt-15 mt-sm-30" style="padding: 0 15px">
                        @if($investment->images->count() < 5)
                            @foreach($investment->images as $image)
                                <div class="apartament-slider__item-nav">
                                    <picture>
                                        @if($image->file_webp)
                                            <source type="image/webp" srcset="{{asset('uploads/gallery/images/thumbs/webp/'.$image->file_webp) }}">
                                        @endif
                                        <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/thumbs/'.$image->file) }}">
                                        <img src="{{asset('uploads/gallery/images/thumbs/'.$image->file) }}" alt="{{ $investment->name }}">
                                    </picture>
                                </div>
                            @endforeach
                        @endif
                        @foreach($investment->images as $image)
                            <div class="apartament-slider__item-nav">
                                <picture>
                                    @if($image->file_webp)
                                    <source type="image/webp" srcset="{{asset('uploads/gallery/images/thumbs/webp/'.$image->file_webp) }}">
                                    @endif
                                    <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/thumbs/'.$image->file) }}">
                                    <img src="{{asset('uploads/gallery/images/thumbs/'.$image->file) }}" alt="{{ $investment->name }}">
                                </picture>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

        @if($investment->advantages)
        <div class="container apartment-icons">
            <div class="row justify-content-center">
                @foreach ($investment->advantages as $adv)
                    <div class="apartment-icons__item d-flex flex-column align-items-center justify-content-start scroll-anim-bottom col-2">
                        <img src="{{ asset('/investment/advantages/'.$adv->image) }}" width="60" alt="{{ $adv->title }}" class="apartment-icons__icn">
                        <span class="text-center text-uppercase mt-15">{{ $adv->title }}</span>
                        <p class="text-center">{{ $adv->subtitle }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        @endif

        @if($investment->youtube)
        <div class="container video scroll-anim-bottom">
            <div class="row">
                <div class="col-12 col-xxl-10 offset-0 offset-xxl-1">
                    <div class="youtube" data-id="{{ $investment->youtube }}" style="background-image: url(https://www.youtube.com/watch?v={{ $investment->youtube }};);">
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if($investment->stages && $investment->stages->count())
        <div class="container-fluid timeline position-relative px-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 col-xl-8 col-xxl-6 offset-0 offset-lg-1 offset-xl-2 offset-xxl-3 d-flex align-items-center justify-content-center flex-column mb-20 mb-lg-50 scroll-anim-bottom">
                        <h2 class="mb-15 text-center  text-uppercase ">Postęp</br>budowy</h2>
                        <p class="text-center">{{ $investment->stages_content }}</p>
                    </div>
                    <div class="col-12 scroll-anim-bottom">
                        <div class="timeline__wrapper position-relative">
                            <div class="timeline__line"></div>
                            @php
                                $lastStage = $investment->stages->last();
                            @endphp
                            <div class="timeline__line-red" style="width: {{ $lastStage->percent }}%"></div>
{{--                            timeline__dot--first--}}
{{--                            active-click--}}
{{--                            timeline__dot--last--}}
                            @foreach ($investment->stages as $stage)
                                <div class="timeline__dot active
    {{ $loop->first && $loop->last ? ' timeline__dot--left active-click timeline__dot--first' : '' }}
    {{ $loop->first && !$loop->last ? ' timeline__dot--first' : '' }}
    {{ !$loop->first && !$loop->last ? ' timeline__dot--middle' : '' }}
    {{ !$loop->first && $loop->last && $stage->percent <= 100 ? 'active-click' : '' }}
    {{ !$loop->first && $loop->last && $stage->percent >= 100 ? 'timeline__dot--last timeline__dot--right' : '' }}"
                                     style="left:{{ $stage->percent }}%">

                                    <div class="timeline__dot-wrapper">
                                        <span class="timeline__title">{{ $stage->name }}</span>
                                        <span class="timeline__date">{{ $stage->date }}</span>
                                        <span class="timeline__procent">{{ $stage->percent }}%</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @foreach ($investment->stages as $stage)
                            @if($stage->content)
                        <div class="timeline__imgs mt-30 mt-5 d-flex flex-wrap flex-row align-items-start justify-content-center justify-content-sm-start gap-15 gap-sm-30 {{ !$loop->first && $loop->last ? 'active' : '' }}">
                            {!! parse_text($stage->content, true) !!}
                        </div>
                            @endif
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="timeline__decor">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="163.505" viewBox="0 0 29 163.505">
                    <path id="decor-page-entry" d="M1890.5,851.5V770.4a213.782,213.782,0,0,0,9.558-19.68c3.258-7.556,6.474-15.887,9.3-24.092,5.147-14.955,8.75-28.673,10.144-38.628V851.5h-29Z" transform="translate(-1890.5 -687.995)" fill="#5a5a5a"/>
                </svg>
            </div>
        </div>
        @endif

        @if($investment->advantage_content)
        <div class="container-fluid apartament-text position-relative px-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-6 col-xxl-5 d-flex flex-column align-items-start justify-content-center order-2 order-xl-1 mt-30 mt-xl-0 scroll-anim-top">
                        <h2 class="text-uppercase mb-30">atuty</br>inwestycji</h2>
                        {!! $investment->advantage_content !!}
                    </div>
                    <div class="col-12 col-lg-12 col-xl-6 offset-0 offset-xl-0 offset-xxl-1 order-1 order-xl-2 scroll-anim-bottom">
                        <img src="{{ asset('/investment/advantage/'.$investment->file_advantage) }}" alt="Wizualizacja inwestycji {{ $investment->name }}">
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if($investment->location_content)
            <div class="container-fluid lokalizacja"  data-map="true">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xxl-5 offset-0 offset-xxl-1 d-flex flex-column align-items-start justify-content-center mt-30 mt-lg-0 text-white scroll-anim-bottom">
                            <h2 class="text-uppercase mb-30">lokalizacja</br>inwestycji</h2>
                            {!! $investment->location_content !!}
                        </div>
                        <div class="col-12 col-lg-6 col-xxl-5 scroll-anim-top">
                            <div class="map-container">
                                <div id="locationmap" class="mb-4 w-100 h-100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </main>
    <!-- END -> MAIN SECTION -->
@endsection
@push('scripts')
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}" />
    <script src="{{ asset('/js/leaflet.js') }}" charset="utf-8"></script>
    <script>
        var map = L.map('locationmap').setView([{{$investment->lat}}, {{$investment->lng}}], {{$investment->zoom}});

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var myIcon = L.icon({
            iconUrl: "/img/map-icon.png",
            iconSize: [84, 84],
            iconAnchor: [43, 54],
        });

        L.marker([{{$investment->lat}}, {{$investment->lng}}], { icon: myIcon }).addTo(map)
            .bindPopup('<h4>{{ $investment->name }}</h4>{{ $investment->address }}',
                { offset: [0, -10] })
            .openPopup();
    </script>
@endpush
