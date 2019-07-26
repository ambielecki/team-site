@extends('shared.base')

@push('head_scripts')
    @stack('page_css')
@endpush

@section('layout')
    <main>
        @include('site_pages.navbar')
{{--        @include('shared.includes.flash_message')--}}
        <div class="container">
            @yield('content')
        </div>
    </main>
{{--    @include('shared.includes.footer')--}}
@endsection

@push('body_scripts')
    @stack('page_scripts')
@endpush
