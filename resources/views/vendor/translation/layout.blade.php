@extends('layout.default')
@section('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('/vendor/translation/css/main.css') }}">
@endsection
@section('content')
    <div id="app">

        @include('translation::nav')
        @include('translation::notifications')

        @yield('body')

    </div>
@endsection
@section('scripts')
    <script src="{{ asset('/vendor/translation/js/app.js') }}"></script>
@endsection
