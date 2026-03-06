@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-menupage'])

{{--@section('meta_title', $page->title ?? 'Kredyt')--}}
{{--@section('seo_title',$page->meta_title ?? '')--}}
{{--@section('seo_description', $page->meta_description ?? '')--}}
{{--@section('seo_robots', $page->meta_robots ?? '')--}}

@section('content')
    <!-- MAIN SECTION -->
    <main class="overflow-hidden mb-5">
        <!-- BREADCRUMB -->
        <div class="container breadcrumb-section">
            <div class="row">
                <div class="col-12">
                    <a href="/">Strona główna</a> / Strefa klienta / Podpisanie aktu notarialnego
                </div>
            </div>
        </div>
        <!-- PAGE ENTRY -->
        <div class="container-fluid page-entry-dzialki mt-5 position-relative">
            <div class="page-entry-dzialki__decor">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="163.505" viewBox="0 0 29 163.505">
                    <path id="decor-page-entry" d="M1890.5,851.5V770.4a213.782,213.782,0,0,0,9.558-19.68c3.258-7.556,6.474-15.887,9.3-24.092,5.147-14.955,8.75-28.673,10.144-38.628V851.5h-29Z" transform="translate(-1890.5 -687.995)" fill="#5a5a5a"/>
                </svg>
            </div>
            <div class="container ">
                <svg width="0" height="0" style="position:absolute;">
                    <defs>
                        <clipPath id="o-nas-clip" clipPathUnits="objectBoundingBox">
                            <path d="M1,1H0V0.922C0.001,0.914,0.004,0.899,0.008,0.883A0.256,0.256,0,0,1,0.015,0.84V0.029H0.664c0.033-0.018,0.065-0.029,0.098-0.029,0.011,0,0.022,0.001,0.033,0.001H1V1Z"/>
                        </clipPath>
                    </defs>
                </svg>
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-uppercase mb-4">Podpisanie aktu notarialnego</h1>
                        <p>Do podpisywania aktów notarialnych przenoszących własność, przystąpimy po wydaniu przez Urząd Miasta <strong>Zaświadczeń o Samodzielności Lokali </strong>oraz <strong>Kartotek Lokali </strong> przez Kataster Nieruchomości.</p>
                        <p>Mając powyższe dokumenty<strong>, zaprosimy Państwa do Kancelarii Notarialnej</strong> na podpisanie umowy sprzedaży czyli umowy przyrzeczonej.</p>
                        <p>Triada Dom sp. j. współpracuje z Kancelarią Notarialną Pani Notariusz Benity Sokołowskiej-Pabjan, mieszczącą się przy ul. Krawieckiej 1 lokal 106, I piętro (wejście od strony Galerii Dominikańskiej naprzeciwko wjazdu na parking do Galerii, drugie wejście znajduje się od strony ulicy Krawieckiej – przejściem od ul. Oławskiej).</p>
                        <p><strong>www.notariusz.wroc.pl</strong><br>nr tel.: <a href="tel:717894382"><strong>71 789 43 82</strong></a> , <a href="tel:713432434"><strong>71 343 24 34</strong></a><br>adres e-mail: <a href="http://www.notariusz.wroc.pl/kontakt.html"><strong>kancelaria@notariusz.wroc.pl</strong></a></p>
                        <p>Przy umowie muszą się Państwo legitymować aktualnym dowodem osobistym, który nie utracił ważności, a w razie jego braku – aktualnym paszportem, który nie utracił ważności. <strong>Jeśli zastrzegliście Państwo swój nr PESEL, koniecznie przed wizytą w kancelarii musicie cofnąć zastrzeżenie numeru PESEL. </strong>Po podpisaniu aktu można go oczywiście z powrotem zastrzec.</p>
                        <p>Na podpisanie aktu notarialnego muszą się stawić wszyscy Nabywcy wymienieni w Umowie Deweloperskiej / Umowie Przedwstępnej. Jeśli którykolwiek z Nabywców nie może się stawić osobiście, może upoważnić notarialnie inną wskazaną przez siebie osobę.</p>
                        <p><b>Wszelkie koszty związane z podpisaniem umowy przyrzeczonej pobierane w Kancelarii ponosi Kupujący.</b></p>
                        <p>Po podpisaniu Aktu Notarialnego, w którym następuje ustanowienie odrębnej własności lokalu mieszkalnego i jego zakupu, kupujący staje się pełnoprawnym właścicielem oraz członkiem wspólnoty mieszkaniowej. Wiąże się to z prawami, jak i obowiązkami, do których należy:</p>
                        <ul>
                            <li><strong>Zgłoszenie zakupu nieruchomości w Urzędzie Miasta</strong><br>Zgodnie z Ustawą z 12 stycznia 1991 r. o podatkach i opłatach lokalnych, właściciel nieruchomości będący osobą fizyczną, w ciągu 14 dni od jej nabycia (podpisania aktu notarialnego), ma obowiązek złożyć właściwemu organowi podatkowemu odpowiedni formularz w Urzędzie Miasta, na którego terenie położona jest ta nieruchomość, w celu naliczenia podatku od nieruchomości.</li>
                            <li><strong>Zameldowanie</strong><br>Obowiązek meldunkowy dotyczy osób, które zamieszkują pod oznaczonym adresem z zamiarem stałego przebywania (Ustawa z dnia 10 kwietnia 1974 r. o ewidencji ludności i dowodach osobistych). W celu dokonania formalności związanych z zameldowaniem na pobyt stały w nowym mieszkaniu, należy wymeldować się z dotychczasowego miejsca stałego pobytu. Ponadto, w Biurze Meldunkowym mieszczącym się w Urzędzie Miasta, należy przedłożyć przedwstępną umowę kupna i protokół odbioru mieszkania.</li>
                            <li><strong>Złożenie wniosku o wydanie NIP 3</strong><br>Zmiana miejsca zameldowania oraz wymiana dowodu osobistego, wymagają zawiadomienia Urzędu Skarbowego o zmianie tych danych. W tym celu należy dokonać zgłoszenia aktualizacyjnego, poprzez złożenie w Urzędzie Skarbowym formularza NIP-3. Formularz ten należy dostarczyć w ciągu 30 dni od dnia, w którym nastąpiła zmiana danych podatnika. Obowiązek aktualizacji danych wynika z art. 9 ust. 1 o zasadach ewidencji i identyfikacji podatników i płatników.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- END -> MAIN SECTION -->
@endsection
