<div class="container-fluid position-relative pt-0 mt-5 mieszkania-submenu scroll-anim-blur">
    <div class="container ">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <div class="mieszkania-submenu__wrapper w-100">
                    <ul class="nav nav-pills">
                        @foreach($investments as $i)
                            <li class="nav-item">
                                <a href="{{ route('front.developro.show', $i->slug) }}" class="nav-link @if($investment->id == $i->id) active @endif text-uppercase text-center">{{ $i->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="apartamenty-kasprowicza" role="tabpanel" aria-labelledby="apartamenty-kasprowicza-tab">
                            <div class="mieszkania-submenu__wrap d-flex flex-row flex-wrap align-items-start justify-content-start">
                                @foreach($investment->pages as $p)
                                    @if($p->type == 2)
                                    <a href="{{ route('front.developro.page', [$investment->slug, $p->slug]) }}" class="custom-link @if(($investment_page->id ?? null) == $p->id) active @endif">{{ $p->title }}</a>
                                    @else
                                        @if($p->url_target === '_domain')
                                            <a href="{{ url('i/' . $investment->slug . '/' . $p->url) }}"
                                               class="custom-link @if(($investment_page->id ?? null) == $p->id || $p->module == ($static_page ?? null)) active @endif">
                                                {{ $p->title }}
                                            </a>
                                        @elseif($p->url_target === '_blank')
                                            <a href="{{ $p->url }}"
                                               class="custom-link"
                                               target="_blank">
                                                {{ $p->title }}
                                            </a>
                                        @else
                                            <a href="{{ $p->url }}" class="custom-link">
                                                {{ $p->title }}
                                            </a>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
