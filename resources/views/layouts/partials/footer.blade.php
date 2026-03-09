<!-- FOOTER -->
<footer class="pt-6">
    <div class="container">
        <div class="row border-bottom pb-6">
            <div class="col-6 d-flex align-items-center">
                <h4 class="mb-0">Masz pytania? <br>Skontaktuj się z nami!</h4>
            </div>
            <div class="col-6">
                <ul class="mb-0 list-unstyled footer-contact">
                    <li><a href="tel:+48512380000">+48 512 380 000</a> - Małgorzata</li>
                    <li><a href="tel:+48512370000">+48 512 370 000</a> - Monika</li>
                    <li><a href="mailto:oriondevelopment@o2.pl">oriondevelopment@o2.pl</a></li>
                </ul>
            </div>
        </div>

        <div class="row mt-5 pt-4">
            <div class="col-3 me-auto">
                <div class="footer-company">
                    <div id="flogo" class="mb-4">
                        <img src="{{ asset('images/logo-white-png.png')}}" alt="">
                    </div>
                    <p>Od 1997 roku zajmujemy się kompleksową obsługą rynku nieruchomości.</p>
                </div>
            </div>
            <div class="col-2">
                <h5>MENU</h5>
                <ul class="mb-0 list-unstyled footer-menu">
                    <li><a href="/">Strona główna</a></li>
                    <li><a href="">Inwestycje</a></li>
                    <li><a href="{{ route('front.menu.show', ['uri' => 'relacje-inwestorskie']) }}">Relacje inwestorskie</a></li>
                    <li><a href="{{ route('front.menu.show', ['uri' => 'o-firmie']) }}">O firmie</a></li>
                    <li><a href="{{ route('front.menu.show', ['uri' => 'kontakt']) }}">Kontakt</a></li>
                </ul>
            </div>
            <div class="col-2">
                <h5>INFORMACJE</h5>
                <ul class="mb-0 list-unstyled footer-menu">
                    <li><a href="{{ route('front.menu.show', ['uri' => 'polityka-prywatnosci']) }}">Polityka prywatności</a></li>
                    <li><a href="">Nota prawna</a></li>
                    <li><a href="{{ route('front.menu.show', ['uri' => 'aktualnosci']) }}">Aktualności</a></li>
                    <li><a href="{{ route('front.menu.show', ['uri' => 'blog']) }}">Blog</a></li>
                </ul>
            </div>
            <div class="col-3">
                <h5>BIURO SPRZEDAŻY</h5>
                <div class="footer-menu">
                    <p>al. Tadeusza Kościuszki 32 lok. 2</p>
                    <p>90-419 Łódź</p>
                    <p>+48 512 380 000</p>
                    <p>+48 512 370 000</p>
                    <p><a href="mailto:oriondevelopment@o2.pl">oriondevelopment@o2.pl</a></p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyrights" class="mt-6">
        <div class="container">
            <div class="col-12 text-center py-4 text-white">
                <p>Orion Development. Wszelkie prawa zastrzeżone. <span>|</span> Projekt: 4DL.pl / DeveloPro</p>
            </div>
        </div>
    </div>
</footer>
<!--  -->

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
