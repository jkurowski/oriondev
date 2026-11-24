@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-mieszkania'])

@isset($page)
    @section('meta_title', $page->title.' - '.$investment->name.' - Plan inwestycji')
    @section('seo_title', $page->meta_title)
    @if(url()->current() === url('/i/duo-park/plan-inwestycji'))
        @section('seo_title', 'Mieszkania na sprzedaż Duo Park – Łódź – Orion Development')
    @endif
    @section('seo_description', $page->meta_description)
    @if(url()->current() === url('/i/duo-park/plan-inwestycji'))
        @section('seo_description', 'Wybierz wygodne mieszkanie na sprzedaż w Łodzi w dzielnicy Górna. Zobacz interaktywny plan inwestycji Duo Park i sprawdź układy lokali 1–4 pokojowych.')
    @endif
    @section('seo_robots', $page->meta_robots)
@endisset

@section('content')
    <div class="container-fluid mieszkania-submenu">
        <div class="row">
            <div class="col-12 text-center">
                @if(url()->current() === url('/i/duo-park/plan-inwestycji'))
                    <h1>Plan inwestycji Duo Park</h1>
                @else
                    <h1>{{ $investment->name }}</h1>
                @endif
            </div>
        </div>
    </div>

    <div id="page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 col-xxl-2">
                    <div class="sidemenu sticky-top d-none d-lg-block">
                        @include('front.developro.investment_shared.menu')
                    </div>
                </div>
                <div class="col-12 col-lg-9 col-xxl-10">
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

                    @if(url()->current() === url('/i/duo-park/plan-inwestycji'))
                        <div class="container-fluid">
                            <div class="row">
                                <p class="text-center text-lg py-3">
                                    <div class="seo-container">
                                        <p>Zapoznaj się z interaktywnym planem osiedla i znajdź interesujący Cię lokal. Wskaż budynek, piętro oraz układ pomieszczeń, aby sprawdzić dostępność mieszkań, ich rzuty, a także szczegółowe parametry.</p>
                                    </div>
                                </p>
                            </div>
                        </div>
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

                    @if(url()->current() === url('/i/duo-park/plan-inwestycji'))
                        <div class="container-fluid">
                            <div class="row">
                                <p class="text-center text-lg py-3">
                                    <div class="seo-container">
                                        <h2>Nowe mieszkania na sprzedaż – odkryj osiedle Duo Park</h2>
                                        <p>Inwestycja <strong>Duo Park</strong> znajduje się przy <strong>ul. Jasień 20/28</strong>, w cichej, zielonej części <strong>Łodzi w dzielnicy Górna</strong>. To miejsce łączy kameralny charakter, bliskość natury i szum rzeki Jasień z szybkim dojazdem do centrum miasta.</p>
                                        <p>Osiedle obejmuje <strong>104 przestronne lokale</strong>, których układy zaprojektowano z myślą o wygodzie mieszkańców, dobrym nasłonecznieniu, a także komforcie codziennego życia. Wszystkie kondygnacje obsługują cichobieżne windy, a do każdego lokum przynależy duży balkon. Ponadto do mieszkań na parterze przynależą ogródki.</p>
                                        <p><strong>Mieszkania w Łodzi w dzielnicy Górna</strong> to propozycja zarówno dla rodzin szukających wygodnego miejsca do życia, jak i osób planujących zakup nieruchomości w celach inwestycyjnych. Poznaj przemyślane założenia oraz pełną listę udogodnień, jakie oferuje <a href="/i/duo-park">nasza inwestycja</a>.</p>
                                        <h2>Mieszkania 3- i 4-pokojowe czy mniejszy metraż?
                                        </h2>
                                        <p>W naszej inwestycji dostępne są lokale o powierzchni od 41 m² do 85 m², w różnych układach i metrażach. Dzięki temu możesz wybrać miejsce dopasowane do swoich potrzeb. Znajdziesz u nas mieszkania:</p>
                                        <ul>
                                        <li><strong>2-pokojowe</strong> – propozycja dla singli, par oraz osób poszukujących mieszkania pod wynajem.</li>
                                        <li><strong>3-pokojowe</strong> – wygodna przestrzeń dla par czy rodzin z dziećmi, z salonem, aneksem kuchennym oraz dwiema sypialniami.</li>
                                        <li><strong>4-pokojowe</strong> – przestronne wnętrza dla rodzin, z miejscem na wspólne spędzanie czasu, odpoczynek, jak również naukę lub pracę.</li>
                                        </ul>
                                        <h2>Miejsca postojowe i wykończenie pod klucz</h2>
                                        <p>Na terenie osiedla przewidziano dwa rodzaje miejsc postojowych:</p>
                                        <ul>
                                        <li><strong>Naziemne</strong> – wygodny dostęp do samochodu, w cenie <strong>35 000 zł</strong>.</li>
                                        <li><strong>W garażu podziemnym</strong> – parkowanie pod dachem za <strong>50 000 zł</strong>.</li>
                                        </ul>
                                        <p>Oferujemy także możliwość <a href="/wykonczenie-mieszkan">wykończenia mieszkania pod klucz</a>. Usługa obejmuje kompleksową realizację prac – od przygotowania indywidualnego projektu po prace wykończeniowe i montażowe. Dzięki temu możesz powierzyć wykończenie lokalu jednej firmie.</p>
                                        <h2>Duo Park – poznaj inwestycję i wybierz swoje mieszkanie</h2>
                                        <p>Inwestycję Duo Park realizujemy jako <a href="/o-firmie">Orion Development</a>. Nasz zespół tworzą eksperci związani z rynkiem nieruchomości od 1997 roku. Ponad 29 lat doświadczenia pozwala nam lepiej rozumieć potrzeby przyszłych mieszkańców i uwzględniać je na etapie planowania inwestycji.</p>
                                        <p>Masz pytania dotyczące konkretnego mieszkania lub chcesz umówić się na spotkanie? <a href="/kontakt">Skontaktuj się z nami</a> – chętnie przedstawimy Ci dostępne lokale i pomożemy zdecydować się na taki, który spełni Twoje oczekiwania.</p>
                                    </div>
                                </p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
        <!-- FORM -->
    <div class="pt-5 pt-xxl-6 pb-5 pb-xxl-0">
    @include('front.contact.form', [
        'page_name' => $investment->name,
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
