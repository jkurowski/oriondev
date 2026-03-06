@extends('layouts.page', ['body_class' => 'position-relative', 'body_id' => 'page-polityka-prywatnosci'])

@section('meta_title', $page->title ?? 'Polityka prywatności')
@section('seo_title',$page->meta_title ?? '')
@section('seo_description', $page->meta_description ?? '')
@section('seo_robots', $page->meta_robots ?? '')

@section('content')
    <!-- MAIN SECTION -->
    <div id="page">
        <div class="container">
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>
    </div>
    <div class="pt-6">
        @include('front.contact.form', ['page_name' => 'Polityka prywatności'])
    </div>
    <!-- END -> MAIN SECTION -->
@endsection

@push('scripts')

@endpush
