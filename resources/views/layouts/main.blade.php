<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />
    <title>{{ config('app.name') }}</title>
    <!-- Scripts -->
    @vite(['resources/js/app.js', 'resources/scss/app.scss'])
</head>
<body>
    <div class="container-xxl" style="margin-top:1rem">

            <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 2500)">
                @if (session()->has('flash_notification'))               
                    <div style="z-index: 3; position: absolute; top: 10%; left: 40%;  width: 30%; text-align: center;">
                        @include('flash::message')
                    </div>
                @endif
            </div>

        @yield('content')

    </div>
</body>
</html>