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
                    <a href="/">Strona główna</a> / Strefa klienta / Poradnik mies
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
                        <h1 class="text-uppercase mb-4">Poradnik mieszkańca</h1>
                        <h2 class="mb-3">ODBIÓR MIESZKANIA</h2>
                        <p>Zgodnie z Ustawą deweloperską proces przekazywania mieszkań protokołem zdawczo-odbiorczym może się rozpocząć<strong> po uzyskaniu decyzji pozwolenia na użytkowanie</strong>.</p>
                        <p>Wówczas zaprosimy każdego z Nabywców na konkretny dzień i godzinę na budowę, w celu dokonania odbioru a tym samym przekazania mieszkania i kluczy. </p>
                        <p>Jeżeli Nabywcami są dwie lub więcej osób, każda z nich jest uprawniona solidarnie do dokonania odbioru, czyli przy odbiorze wystarczy jedna z osób będących Nabywcą.</p>
                        <p>Odbiór Lokalu zostanie udokumentowany <strong>Protokołem Zdawczo - Odbiorczym w formie KSIĄŻKI ODBIOROWEJ, którąprzysyłamy nabywcy w formie elektronicznej i z której terścią Nabywca ZOBOWIĄZANY JEST SIĘ ZAPOZNAĆ.</strong></p>
                        <p>Do Protokołu można wpisać ewentualne wady. W terminie 14 dni od podpisania protokołu Deweloprer zobowiązany jesteśmy doręczyć Nabywcy oświadczenie o uznaniu lub odmowie uznania wad i jej przyczynach. Uznane wady Deweloper zobowiązany jest usunąć w terminie 30 dni.</p>
                        <p>Po odbiorze mieszkania, <strong>należy podpisać indywidualną umowę na dostawę energii elektrycznej i montaż liczników elektrycznych</strong>. W tym celu trzeba się udać do Zakładu Energetycznego, mieszczącego się we Wrocławiu przy ul. Mennicza 20 lub ul.Legnicka 60A. Wszelkie niezbędne dokumenty do podpisania umowy otrzymacie Państwo od nas przy odbiorze mieszkania.</p>
                        <p>&nbsp;</p>
                        <h2 class="mb-3">PODPISANIE AKTU WŁASNOŚCI</h2>
                        <p>Do podpisywania aktów notarialnych przenoszących własność przystąpimy po wydaniu przez Urząd Miasta <strong>Zaświadczeń o Samodzielności Lokali </strong>oraz <strong>Kartotek Lokali </strong> przez KATASTER Nieruchomości.</p>
                        <p>Mając powyższe dokumenty<strong> zaprosimy Państwa do Kancelarii Notarialnej</strong> na podpisanie umowy sprzedaży czyli umowy przyrzeczonej.</p>
                        <p>Triada Dom sp.j. współpracuje z Kancelarią Notarialną Pani Notariusz Benity Sokołowskiej-Pabjan, mieszczącą się przy ul. Krawieckiej 1 lokal 106, I piętro (wejście od strony Galerii Dominikańskiej naprzeciwko wjazdu na parking do Galerii, drugie wejście znajduje się od strony ulicy Krawieckiej – przejściem od ul. Oławskiej).</p>
                        <p><strong>www.notariusz.wroc.pl</strong><br>nr tel.: <a href="tel:717894382"><strong>71 789 43 82</strong></a> , <a href="tel:713432434"><strong>71 343 24 34</strong></a><br>adres e-mail: <a href="http://www.notariusz.wroc.pl/kontakt.html"><strong>kancelaria@notariusz.wroc.pl</strong></a></p>
                        <p>Przy umowie muszą się Państwo legitymować aktualnym dowodem osobistym, który nie utracił ważności, a w razie jego braku – aktualnym paszportem, który nie utracił ważności. <strong>Jesli zastrzegliście Państwo swój nr PESEL, koniecznie przed wizytą w kancelarii musicie go odstrzec. </strong>Po podpisaniu aktu można go oczywiście spowrotem zastrzec.</p>
                        <p>Na podpisanie aktu notarialnego muszą się stawić wszyscy Nabywcy wymienieni w Umowie Deweloperskiej / Umowie Przedwstępnej. Jeśli którykolwiek z Nabywców nie może się stawić osobiście, może upoważnić notarialnie inną wskazaną przez siebie osobę.</p>
                        <p>Wszelkie koszty związane z podpisaniem umowy przyrzeczonej pobierane w Kancelarii ponosi Kupujący.</p>
                        <p>Po podpisaniu Aktu Notarialnego, w którym następuje ustanowienie odrębnej własności lokalu mieszkalnego i jego zakupu, kupujący staje się pełnoprawnym właścicielem oraz członkiem wspólnoty mieszkaniowej. Wiąże się to z prawami jak i obowiązkami, do których należy:</p>
                        <ul>
                            <li><strong>Zgłoszenie zakupu nieruchomości w Urzędzie Miasta</strong><br>Zgodnie z Ustawą z 12 stycznia 1991 r. o podatkach i opłatach lokalnych, właściciel nieruchomości będący osobą fizyczną, w ciągu 14 dni od jej nabycia (podpisania aktu notarialnego), ma obowiązek złożyć właściwemu organowi podatkowemu odpowiedni formularz w Urzędzie Miasta, na terenie którego położona jest ta nieruchomość, w celu naliczenia podatku od nieruchomości.</li>
                            <li><strong>Zameldowanie</strong><br>Obowiązek meldunkowy dotyczy osób, które zamieszkują pod oznaczonym adresem z zamiarem stałego przebywania (Ustawa z dnia 10 kwietnia 1974 r. o ewidencji ludności i dowodach osobistych). W celu dokonania formalności związanych z zameldowaniem na pobyt stały w nowym mieszkaniu, należy wymeldować się z dotychczasowego miejsca stałego pobytu. Ponadto, w Biurze Meldunkowym mieszczącym się w Urzędzie Miasta, należy przedłożyć przedwstępną umowę kupna i protokół odbioru mieszkania.</li>
                            <li><strong>Złożenie wniosku o wydanie NIP 3</strong><br>Zmiana miejsca zameldowania oraz wymiana dowodu osobistego wymagają zawiadomienia Urzędu Skarbowego o zmianie tych danych. W tym celu należy dokonać zgłoszenia aktualizacyjnego poprzez złożenie w Urzędzie Skarbowym formularza NIP-3. Formularz ten należy dostarczyć w ciągu 30 dni od dnia, w którym nastąpiła zmiana danych podatnika. Obowiązek aktualizacji danych wynika z art. 9 ust. 1 o zasadach ewidencji i identyfikacji podatników i płatników</li>
                        </ul>
                        <p>&nbsp;</p>
                        <h2 class="mb-3">MEDIA W MIESZKANIU</h2>
                        <p><strong>Telewizja</strong><br>Wszystkie inwestycje wyposażamy w instalację umożliwiającą odbiór TV naziemnej, z możliwością odbioru 20 programów. Aby odbierać sygnał telewizji naziemnej (standardowy pakiet kanałów), nie jest potrzebne żadne dodatkowe urządzenie. To samo dotyczy sygnału radiowego. Aby odbierać sygnał kanałów kodowanych, niezbędny jest zakup dekodera i podpisanie umowy z jednym z wielu operatorów, np. Platformą „n”, Cyfrowym Polsatem, Cyfrą+ itp. Instalacja zapewnia również techniczne możliwości podłączenia budynków do sieci operatorów telewizji kablowej i odbioru oferowanego zestawu kanałów, po podpisaniu indywidualnej umowy.<br><strong>Zabroniony jest montaż indywidualnych anten telewizji satelitarnej.</strong></p>

                        <p><strong>Telefony</strong><br>W celu dokonania zamówienia na instalację telefonu u operatora, konieczne jest dysponowanie dokumentem potwierdzającym tytuł prawny do lokalu. Dokumentem tym może być Umowa Deweloperska wraz z protokołem zdawczo-odbiorczym lokalu lub akt notarialny nabycia nieruchomości. Ponadto należy również okazać dokument tożsamości. Czas oczekiwania na przyłączenie, po rozpoznaniu przez operatorów jego warunków technicznych, wynosi około dwóch tygodni.</p>

                        <p><strong>Internet</strong><br>Wszystkie Lokale posiadają dostęp do szerokopasmowego Internetu poprzez budowę odpowiedniej instalacji (w ramach instalacji teleinformatycznej) z uniwersalnymi gniazdkami teleinformatycznymi w każdym pokoju jako standardem. Nasze inwestycje obsługiwane są przez ORANGE, UPC, Fine Media lub Connectę. <br>&nbsp;Już w momencie wprowadzenia się, istnieje możliwość podpisania z konkretnym, działającym operatorem internetowym umowy indywidualnej na dostawę Internetu. <br>Wybór Abonamentu należy do Nabywcy.</p>
                        <ul>
                            <li><a target="_blank" href="http://www.orange.pl">www.orange.pl</a></li>
                            <li><a target="_blank" href="http://www.upc.pl/">www.upc.pl</a></li>
                            <li><a target="_blank" href="http://www.finemedia.pl/1/">www.finemedia.pl</a></li>
                            <li><a target="_blank" href="http://www.conecta.pl/">www.conecta.pl</a></li>
                        </ul>
                        <p>&nbsp;</p>
                        <p><strong>ZASADY REALIZACJI PRAC WYKOŃCZENIOWYCH W LOKALU</strong></p>
                        <ol>
                            <li>Prace muszą być prowadzone zgodnie z Prawem Budowlanym, obowiązującymi warunkami technicznymi i przepisami BHP i p/poż. oraz nadzorowane przez osoby posiadające właściwe uprawnienia,</li>
                            <li>W przypadku dokonywania zmian technicznych następuje utrata rękojmi na tę grupę robót, której zmiany dotyczą. Zabrania się składowania materiałów poza lokalem oraz gromadzenia gruzu przed budynkiem.</li>
                            <li>Zabrania się podłączania urządzeń elektrycznych do zespołów rozdzielczo-pomiarowych znajdujących się na klatkach schodowych i korytarzach, oraz do obwodów oświetlenia klatek schodowych i korytarzy,</li>
                            <li>Zabrania się zanieczyszczania kanalizacji, tj. wrzucania gruzu, szmat, śmieci, wylewania , klei, zapraw, gipsu i pozostałości zaczynu gipsowego itp. do przewodów instalacji&nbsp;kanalizacyjnej.</li>
                            <li>Wszelkie zmiany wewnątrz lokalu wymagają uzgodnień i akceptacji Dewelopera oraz architektów projektu, w przeciwnym wypadku traktowane będą jako samowola budowlana i kierowane do Powiatowego Inspektora Nadzoru Budowlanego. Uzgodnienia poczynione z Deweloperem oraz architektami projektu nie zwalnia z obowiązku zgłoszenia wykonywanych robót do Zarządcy nieruchomości oraz wykonywania robót pod nadzorem osób z uprawnieniami. Po wykonaniu zmian, zakończenie prac należy zgłosić do Zarządcy celem stwierdzenia zgodności ich wykonania z wiedzą i sztuką budowlaną oraz z obowiązującymi przepisami&nbsp;Prawa Budowlanego.</li>
                            <li>Za szkody powstałe w Lokalu Nabywcy, w innych lokalach jak również w częściach wspólnych budynku, wynikające z dokonywania zmian ZABRONIONYCH (patrz: Książka Odbiorowa) , odpowiada Naabywca i zobowiązany jest do naprawy uszkodzeń na własny koszt.&nbsp;Ponadto Nabywca ponosi odpowiedzialność za szkody spowodowane zniszczeniami, uszkodzeniem urządzeń, m.in. grzejników, wyłączników, itp. części budynków przeznaczonych do wspólnego korzystania i użytkowania.Nabywca odpowiada także za szkody spowodowane przez osoby trzecie, którym zleca wykonanie prac remontowych, montażowych i innych.</li>
                        </ol>
                        <p><strong>Niedostosowanie się do powyższych zaleceń karane będzie utratą rękojmi wynikającej z Umowy Deweloperskiej / Przedwstępnej Umowy Sprzedaży oraz karą grzywny w wysokości faktycznie powstałych strat budowlanych.</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- END -> MAIN SECTION -->
@endsection
