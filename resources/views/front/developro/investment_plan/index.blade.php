@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-mieszkania'])

@section('meta_title', $page->title.' - '.$investment->name.' - Plan inwestycji')
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('content')
    <div class="container-fluid mieszkania-submenu">
        <div class="row">
            <div class="col-12 text-center">
                <h1>{{ $investment->name }}</h1>
            </div>
        </div>
    </div>

    <div id="page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="sidemenu sticky-top">
                        @include('front.developro.investment_shared.menu')
                    </div>
                </div>
                <div class="col-10">
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

                    @if($investment->search_form)
                        @include('front.developro.search.houses-plan-search-form')
                    @endif

                    <!-- MESZKANIA LIST -->
                    <div class="container-fluid mieszkania-list">
                        <div class="row">
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
            </div>
        </div>
    </div>
        <!-- FORM -->
    <div class="pt-5 pt-xxl-6 pb-5 pb-xxl-0">
    @include('front.contact.form', [
        'pageTitle' => $investment->name,
        'investmentName' => $investment->name,
        'investmentId' => $investment->id,
        'emailAddress' => $investment->office_emails,
        'back' => true
    ])
    </div>
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
