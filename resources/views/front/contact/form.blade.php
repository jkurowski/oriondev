@props([
    'page_name' => '',
    'obligation' => null,
    'rules' => []
])
<section id="contactForm">
    <div class="container">
        <div class="row">
            <div class="col-6 d-flex align-items-end justify-content-center">
                <div class="image-container">
                    <img src="{{ asset('images/contact-woman.png')}}" alt="">
                </div>
            </div>
            <div class="col-6">
                <div class="section-header">
                            <span class="section-header-subtitle dm-sans-400">
                                <i class="subtitle-left"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M0.527588 0V9.49634H8.96878" stroke="#FF9500" stroke-width="1"/></svg></i>
                                <i class="subtitle-right"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 9 11" fill="none"><path d="M8.44116 10.0239L8.44116 0.527584L-3.06411e-05 0.527583" stroke="#FF9500" stroke-width="1"/></svg></i>
                                FORMULARZ KONTAKTOWY
                            </span>
                    <h2 class="big">Napisz do nas!</h2>
                </div>

                <form action="{{ route('front.contact.send') }}" class="row mt-5 validateForm" method="POST">
                    {{ csrf_field() }}
                    <div class="col-12">
                        @if (session('success'))
                            <div class="alert alert-success border-0">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-warning border-0">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>

                    <div class="col-12 col-xxl-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="validate[required] form-control @error('form_name') is-invalid @enderror" id="floatingName" placeholder="Imię i nazwisko" name="form_name" value="{{ old('form_name') }}">
                            <label for="floatingName">Imię i nazwisko</label>
                            @error('form_name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6 col-xxl-4">
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control @error('form_phone') is-invalid @enderror" id="floatingPhone" placeholder="Numer telefonu" name="form_phone" value="{{ old('form_phone') }}">
                            <label for="floatingPhone">Numer telefonu</label>
                            @error('form_phone')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6 col-xxl-4">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('form_email') is-invalid @enderror" id="floatingEmail" placeholder="E-mail" name="form_email" value="{{ old('form_email') }}">
                            <label for="floatingEmail">E-mail</label>
                            @error('form_email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        <div class="form-floating">
                            <textarea class="form-control @error('form_message') is-invalid @enderror" placeholder="Opisz swoje oczekiwania wobec nowego mieszkania – my zajmiemy się resztą" id="floatingTextarea" name="form_message">{{ old('form_message') }}</textarea>
                            <label for="floatingTextarea">Treść wiadomości</label>
                            @error('form_message')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>

                    @if($obligation)
                        <div class="col-12 obligatory-text mt-3">
                            {!! $obligation->obligation !!}
                        </div>
                    @endif

                    @foreach ($rules as $r)
                        <div class="col-12 rodo-rules mt-3 @error('rule_'.$r->id) is-invalid @enderror">
                            <div class="form-check">
                                <input name="rule_{{$r->id}}" id="rule_{{$r->id}}" value="1" type="checkbox" class="form-check-input @if($r->required === 1) validate[required] @endif" data-prompt-position="topLeft:0">
                                <label for="rule_{{$r->id}}" class="form-check-label">
                                    {!! $r->text !!}
                                    @error('rule_'.$r->id)
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </label>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-12 mt-5">
                       <input name="form_page" type="hidden" value="{{ $page_name }}">
                        <script type="text/javascript">
                            @if(settings()->get("recaptcha_site_key") && settings()->get("recaptcha_secret_key"))
                            document.write("<button type=\"submit\" class=\"bttn bttn-icon g-recaptcha\" data-sitekey=\"{{ settings()->get("recaptcha_site_key") }}\" data-callback=\"onRecaptchaSuccess\" data-action=\"submitContact\">Wyślij wiadomość <span><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\"><g clip-path=\"url(#sendIcon)\"><path d=\"M4.9776 4.25018L4.97086 6.26437L9.35486 6.26437L3.55046 12.0688L4.96731 13.4856L10.7717 7.68122L10.7717 12.0652L12.7859 12.0585L12.777 4.25905L4.9776 4.25018Z\"/></g><defs><clipPath id=\"sendIcon\"><rect width=\"12.0465\" height=\"12.0465\" transform=\"translate(0 8.51855) rotate(-45)\"/></clipPath></defs></svg></span></button>");
                            @else
                            document.write("<button class=\"bttn bttn-icon\" type=\"submit\">Wyślij wiadomość<span><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\"><g clip-path=\"url(#sendIcon)\"><path d=\"M4.9776 4.25018L4.97086 6.26437L9.35486 6.26437L3.55046 12.0688L4.96731 13.4856L10.7717 7.68122L10.7717 12.0652L12.7859 12.0585L12.777 4.25905L4.9776 4.25018Z\"/></g><defs><clipPath id=\"sendIcon\"><rect width=\"12.0465\" height=\"12.0465\" transform=\"translate(0 8.51855) rotate(-45)\"/></clipPath></defs></svg></span></button>");
                            @endif
                        </script>
                        <noscript>Do poprawnego działania, Java musi być włączona.</noscript>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@push('scripts')
    <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px",
                autoPositionUpdate: false
            });
        });

        function onRecaptchaSuccess(token) {
            $(".validateForm").validationEngine('updatePromptsPosition');
            const isValid = $(".validateForm").validationEngine('validate');
            if (isValid) {
                $("#contact-form").submit();
            } else {
                grecaptcha.reset();
            }
        }

        @if (session('success') || session('warning') || $errors->any())
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.validateForm').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush
