<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.trans = <?php
        $lang_files = File::files(resource_path() . '/lang/' . app()->getLocale());
        $trans = [];
        foreach ($lang_files as $f) {
            $filename = pathinfo($f)['filename'];
            $trans[$filename] = trans($filename);
        }
        echo json_encode($trans);
        ?>;

        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};

    </script>
    <title> @yield('title') </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
    {{--@stack('scripts')--}}
</head>
<body>
<div id="app">
    <header-menu></header-menu>
    @yield('content')
    @include('layouts.footer')
</div>
@include('layouts.languages')
@include('layouts.modal')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
