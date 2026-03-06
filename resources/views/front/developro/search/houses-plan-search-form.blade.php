<!-- WYSZUKIWARKA -->
<div class="container-fluid position-relative px-0 page-search scroll-anim-blur">
    <div class="container ">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <h2 class="text-uppercase">Wyszukiwarka</h2>
                <div class="page-search__wrapper w-100 mt-15 mt-md-25">
                    <form action="" class="page-search__form container-fluid">
                        <div class="row">
                            @if($investment->area_range)
                            <div class="col">
                                <label class="form-label mb-0" for="domy-powierzchnia">Powierzchnia</label>
                                <select name="area" id="domy-powierzchnia">
                                    <option value="">Wszystkie</option>
                                    {!! area2Select($investment->area_range) !!}
                                </select>
                            </div>
                            @endif

                            @if($uniqueRooms)
                            <div class="col">
                                <label class="form-label mb-0" for="domy-pokoje">Liczba pokoi</label>
                                <select name="rooms" id="domy-pokoje">
                                    <option value="">Wszystkie</option>
                                    @foreach($uniqueRooms as $room)
                                        <option value="{{ $room }}" @if(request()->input('rooms') == $room) selected @endif>{{ $room }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif

                            @if($investment->price_range)
                            <div class="col">
                                <label class="form-label mb-0" for="domy-powierzchnia">Cena</label>
                                <select name="price" id="domy-powierzchnia">
                                    <option value="">Wszystkie</option>
                                    {!! price2Select($investment->price_range) !!}
                                </select>
                            </div>
                            @endif

                            <div class="col">
                                <label class="form-label mb-0" for="domy-pietro">Promocja</label>
                                <select name="highlighted" id="domy-pietro">
                                    <option value="">Wszystkie</option>
                                    <option value=0 @if(request()->input('highlighted') == 0) selected @endif>Nie</option>
                                    <option value=1 @if(request()->input('highlighted') == 1) selected @endif>Tak</option>
                                </select>
                            </div>

                            <div class="col">
                                <label class="form-label mb-1" for="">&nbsp;</label>
                                <button type="submit" class="custom-button w-100">
                                    Szukaj
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="type" value="1">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
