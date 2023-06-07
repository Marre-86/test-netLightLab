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

        <div class="w-30">

            <div class="card">
                <div class="card-header">
                    <h3>Hello</h3>
                </div>

                <div class="card-body">
                    World
                </div>
            </div>
        </div>
    </div>
</body>
</html>