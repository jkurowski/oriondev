@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-mieszkania'])

{{--@section('meta_title', $page->title.' - '.$investment->name)--}}
{{--@section('seo_title', $page->meta_title)--}}
{{--@section('seo_description', $page->meta_description)--}}
{{--@section('seo_robots', $page->meta_robots)--}}

@section('content')
    <div class="container-fluid mieszkania-submenu">
        <div class="row">
            <div class="col-12 text-center">
                <h1>{{ $investment->name }} - {{$building->name}} - {{$floor->name}}</h1>
            </div>
        </div>
    </div>

    <div id="page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="sidemenu">
                        @include('front.developro.investment_shared.menu')
                    </div>
                </div>
                <div class="col-10">
                    @if($floor->file)
                        <div id="plan-holder">
                            <img src="{{ asset('/investment/floor/'.$floor->file) }}" alt="{{$floor->name}}" id="invesmentplan" usemap="#invesmentplan" class="w-100 h-100 object-fit-cover rounded">
                            <map name="invesmentplan">
                                @if($properties)
                                    @foreach($properties as $r)
                                        @if($r->html)
                                            <area
                                                shape="poly"
                                                href="{{ route('front.developro.building.floor.property', [
                                                            $investment->slug,
                                                            $building,
                                                            Str::slug($building->name),
                                                            $r->floor,
                                                            Str::slug($floor->name),
                                                            $r,
                                                            Str::slug($r->name),
                                                            number2RoomsName($r->rooms, true),
                                                            round(floatval($r->area), 2).'-m2'
                                                        ]) }}"
                                                data-item="{{$r->id}}"
                                                title="{{$r->name}}<br>Powierzchnia: <b class=fr>{{$r->area}} m<sup>2</sup></b><br />Pokoje: <b class=fr>{{$r->rooms}}</b><br><b>{{ roomStatus($r->status) }}</b>"
                                                alt="{{$r->slug}}"
                                                data-roomnumber="{{$r->number}}"
                                                data-roomtype="{{$r->typ}}"
                                                data-roomstatus="{{$r->status}}"
                                                coords="{{cords($r->html)}}"
                                                class="inline status-{{$r->status}}"
                                            >
                                        @endif
                                    @endforeach
                                @endif
                            </map>
                        </div>
                    @endif

                    @if($investment->floor->search_form)
                        <!-- WYSZUKIWARKA -->
                        @include('front.developro.search.floor-search-form')
                    @endif

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
    <div class="pt-6">
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
    <script src="{{ asset('/js/plan/tip.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/floor.js') }}" charset="utf-8"></script>
@endpush
