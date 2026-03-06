@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-mieszkania'])

{{--@section('meta_title', $page->title.' - '.$investment->name)--}}
{{--@section('seo_title', $page->meta_title)--}}
{{--@section('seo_description', $page->meta_description)--}}
{{--@section('seo_robots', $page->meta_robots)--}}

@section('content')
    <main class="overflow-hidden">
        <!-- BREADCRUMB -->
        <div class="container breadcrumb-section">
            <div class="row">
                <div class="col-12">
                    <a href="/">Strona główna</a> / {{ $investment->name }}
                </div>
            </div>
        </div>

        <!-- MENU TABS -->
        @include('front.developro.investment_shared.menu')
        <!-- ENTRY -->

        <div class="container-fluid mieszkania-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xxl-10 offset-0 offset-xxl-1 d-flex align-items-center justify-content-center flex-column container-fluid position-relative px-0">
                        <h1 class="text-uppercase mb-20  scroll-anim-top"> {{ $investment->name }}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if($investment->plan)
                        <div id="plan-holder">
                            <img src="{{ asset('/investment/plan/'.$investment->plan->file) }}" alt="{{$investment->name}}" id="invesmentplan" usemap="#invesmentplan" class="w-100 h-100 object-fit-cover rounded">

                            @if($investment->type == 1)
                                <map name="invesmentplan">
                                    @if($investment->buildings)
                                        @foreach($investment->buildings as $building)
                                            <area
                                                shape="poly"
                                                href="{{route('front.developro.building', [$investment->slug, $building])}}"
                                                alt="{{$building->slug}}"
                                                data-item="{{$building->id}}" title="{{$building->name}}"
                                                data-roomnumber="{{$building->number}}"
                                                data-roomtype="{{$building->typ}}"
                                                data-roomstatus="{{$building->status}}"
                                                coords="@if($building->html) {{cords($building->html)}} @endif">
                                        @endforeach
                                    @endif
                                </map>
                            @endif

                            @if($investment->type == 2)
                                <map name="invesmentplan">
                                    @foreach($investment->floors as $floor)
                                        @if($floor->html)
                                            <area
                                                shape="poly"
                                                href="{{route('front.developro.floor', [$investment->slug, $floor, 'floorSlug' => Str::slug($floor->name)])}}"
                                                title="{{$floor->name}}"
                                                alt="floor-{{$floor->id}}"
                                                data-item="{{$floor->id}}"
                                                data-floornumber="{{$floor->id}}"
                                                data-floortype="{{$floor->type}}"
                                                coords="@if($floor->html) {{cords($floor->html)}} @endif">
                                        @endif
                                    @endforeach
                                </map>
                            @endif

                            @if($investment->type == 3)
                                <map name="invesmentplan">
                                    @if($investment->properties)
                                        @foreach($investment->properties as $house)
                                            <area
                                                shape="poly"
                                                href="{{route('front.developro.house', [$investment->slug, $house, Str::slug($house->name), round(floatval($house->area), 2).'-m2'])}}"
                                                title="{{$house->name}}<br>Powierzchnia: <b class=fr>{{$house->area}} m<sup>2</sup></b><br /><b>{{ roomStatus($house->status) }}</b>"
                                                alt="{{$house->slug}}"
                                                data-roomnumber="{{$house->number}}"
                                                data-roomtype="{{$house->typ}}"
                                                data-roomstatus="{{$house->status}}"
                                                coords="{{ $house->html ? (cords($house->html) ?? '') : '' }}"
                                                class="inline status-{{$house->status}}">
                                        @endforeach
                                    @endif
                                </map>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @if($investment->search_form)
            <!-- WYSZUKIWARKA -->
            @if($investment->type == 1)
                @include('front.developro.search.houses-plan-search-form')
            @endif

            @if($investment->type == 2)
                @include('front.developro.search.houses-plan-search-form')
            @endif

            @if($investment->type == 3)
                @include('front.developro.search.houses-plan-search-form')
            @endif
        @endif

        <!-- MESZKANIA LIST -->
        <div class="container-fluid mieszkania-list position-relative px-0 mt-20">
            <div class="mieszkania-list__decor">
                <svg xmlns="http://www.w3.org/2000/svg" width="29.426" height="1030.922" viewBox="0 0 29.426 1030.922">
                    <path id="mieszkania-list-svg" d="M1919.5,2977.5h-29.426V2036.515a234.928,234.928,0,0,0,9.984-22.1c3.259-8.174,6.474-17.185,9.3-26.06,5.149-16.178,8.751-31.015,10.145-41.778Z" transform="translate(-1890.074 -1946.578)" fill="#5a5a5a"/>
                </svg>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-end flex-row gap-10">
                        <img src="{{ asset("img/view-icn-01.svg") }}" alt="" class="mieszkania-list__view-01 active">
                        <img src="{{ asset("img/view-icn-02.svg") }}" alt="" class="mieszkania-list__view-02">
                    </div>
                </div>
                <div class="row mt-20">
                    @if($properties->count() === 0)
                        <p class="text-center text-lg py-3">
                            Brak wyników wyszukiwania, zmień parametry i spróbuj ponownie.
                        </p>
                    @else
                        @foreach($properties as $p)
                            <x-list-property-card :property="$p" />
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <!-- FORM -->
        @include('front.contact.offer-ask-form', [
            'pageTitle' => $investment->name,
            'investmentName' => $investment->name,
            'investmentId' => $investment->id,
            'emailAddress' => $investment->office_emails,
            'back' => true
        ])
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    @if($investment->type == 3)
        <script src="{{ asset('/js/plan/tip.js') }}" charset="utf-8"></script>
        <script src="{{ asset('/js/plan/floor.js') }}" charset="utf-8"></script>
    @else
        <script src="{{ asset('/js/plan/plan.js') }}" charset="utf-8"></script>
    @endif
@endpush
