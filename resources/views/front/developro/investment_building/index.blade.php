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
                    <a href="/">Strona główna</a> / Inwestycje / {{ $investment->name }} / {{$building->name}}
                </div>
            </div>
        </div>

        <!-- MENU TABS -->
        @include('front.developro.investment_shared.menu')
        <!-- ENTRY -->

        <!-- ENTRY -->
        <div class="container-fluid mieszkania-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xxl-10 offset-0 offset-xxl-1 d-flex align-items-center justify-content-center flex-column container-fluid position-relative px-0 mieszkania-submenu">
                        <h1 class="text-uppercase mb-20  scroll-anim-top">{{$building->name}}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if($building->file)
                        <div id="plan-holder">
                            <img src="{{ asset('/investment/building/'.$building->file) }}" alt="{{$building->name}}" id="invesmentplan" usemap="#invesmentplan" class="w-100 h-100 object-fit-cover rounded">

                            <map name="invesmentplan">
                                @foreach($investment->buildingFloors as $floor)
                                    @if($floor->html)
                                        <area shape="poly" href="{{route('front.developro.building.floor', [$investment->slug, $building, $floor, 'floorSlug' => Str::slug($floor->name)])}}" data-item="{{$floor->id}}" title="{{$floor->name}}" alt="floor-{{$floor->id}}" data-floornumber="{{$floor->id}}" data-floortype="{{$floor->type}}" coords="{{cords($floor->html)}}">
                                    @endif
                                @endforeach
                            </map>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @if($building->search_form)
            <!-- WYSZUKIWARKA -->
            @include('front.developro.search.floor-search-form')
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
                    @foreach($properties as $p)
                        <x-list-property-card :property="$p" />
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/plan.js') }}" charset="utf-8"></script>
@endpush
