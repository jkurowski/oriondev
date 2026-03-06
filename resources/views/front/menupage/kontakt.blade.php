@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-kontakt'])

@section('meta_title', $page->title ?? 'Kontakt')
@section('seo_title',$page->meta_title ?? '')
@section('seo_description', $page->meta_description ?? '')
@section('seo_robots', $page->meta_robots ?? '')

@section('content')
    <!-- MAIN SECTION -->
    <div id="page">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-md-4">
                    <div class="pe-5 ps-5 h-100">
                        <div class="contact-box">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Isolation_Mode" data-name="Isolation Mode" viewBox="0 0 24 24" width="512" height="512"><path d="M12,.021A10.077,10.077,0,0,0,1.935,10.087c0,5.274,8.166,12.329,9.1,13.117l.967.817.967-.817c.932-.788,9.1-7.843,9.1-13.117A10.077,10.077,0,0,0,12,.021Zm0,20.043c-3.065-2.792-7.067-7.328-7.067-9.977a7.067,7.067,0,1,1,14.134,0C19.067,12.731,15.064,17.269,12,20.064Z"/><circle cx="12" cy="10.002" r="2.997"/></svg>
                            <h2>Odwiedź nas</h2>
                            <div>
                                <p>Aleja Tadeusza Kościuszki 32 lok. 2</p>
                                <p>90-419 Łódź</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="pe-5 ps-5 h-100">
                        <div class="contact-box">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M24,10H21a7.008,7.008,0,0,0-7-7V0A10.011,10.011,0,0,1,24,10ZM14,5V8a2,2,0,0,1,2,2h3A5.006,5.006,0,0,0,14,5Zm6.265,17.235L23.91,18.59l-6.641-6.642L14.3,14.923A10.7,10.7,0,0,1,9.088,9.694l2.964-2.963L5.41.09,1.766,3.734A6.055,6.055,0,0,0,0,8.058C0,15.209,8.791,24,15.942,24A6.055,6.055,0,0,0,20.265,22.235ZM7.809,6.731,5.541,9l.369.919a13.938,13.938,0,0,0,8.2,8.182l.908.346,2.255-2.256,2.4,2.4-1.524,1.525a3.076,3.076,0,0,1-2.2.885C10.949,21,3,13.934,3,8.058a3.08,3.08,0,0,1,.886-2.2L5.41,4.332Z"/></svg>
                            <h2>Zadzwoń</h2>
                            <div>
                                <p><a href="tel:+4851238000">+48 512-380-000</a></p>
                                <p><a href="tel:+48512370000">+48 512-370-000</a></p>
                                <p><a href="tel:+48512390000">+48 512-390-000</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="pe-5 ps-5 h-100">
                        <div class="contact-box">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Isolation_Mode" data-name="Isolation Mode" viewBox="0 0 24 24" width="512" height="512"><path d="M21,1H3A3,3,0,0,0,0,4V23H24V4A3,3,0,0,0,21,1Zm-.226,3-7.135,7.135a2.373,2.373,0,0,1-3.278,0L3.226,4ZM3,20V8.017l5.239,5.239a5.317,5.317,0,0,0,7.521,0L21,8.017V20Z"/></svg>
                            <h2>Napisz do nas</h2>
                            <span class="fa-icons fa-email"></span>
                            <div>
                                <p><a href="mailto:oriondevelopment@o2.pl">oriondevelopment@o2.pl</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center pt-5">
                    <h2>Biuro sprzedaży czynne:</h2>
                    <ul class="list-group col-4 m-auto mt-5">
                        <li class="list-group-item">poniedziałek: <b>8:00 - 16:00</b></li>
                        <li class="list-group-item">wtorek: <b>8:00 - 16:00</b></li>
                        <li class="list-group-item">środa: <b>8:00 - 16:00</b></li>
                        <li class="list-group-item">czwartek: <b>8:00 - 16:00</b></li>
                        <li class="list-group-item">piątek: <b>8:00 - 16:00</b></li>
                        <li class="list-group-item text-danger">sobota: <b>zamkniete</b></li>
                        <li class="list-group-item text-danger">niedziela: <b>zamkniete</b></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-6">
        @include('front.contact.form', ['page_name' => 'Kontakt'])
    </div>
    <!-- END -> MAIN SECTION -->
@endsection
