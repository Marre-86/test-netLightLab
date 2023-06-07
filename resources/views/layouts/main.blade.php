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

                        <div class="flex items-right lg:order-2" style="margin-bottom:1rem">
                            @auth
                            <div style="display: flex; align-items: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                <p style="margin: 2px 20px 0 8px">{{ Auth::user()->name }}</p>                         
                                <a href="{{ route('logout') }}" class="btn btn-primary" data-method="post" rel="nofollow">
                                    Log Out
                                </a>   
                                </div>                     
                            @else
                              @if (Request::route()->getName() !== 'login')                                
                                <a href="{{ route('login') }}" class="btn btn-primary">
                                    Log In
                                </a>  
                              @endif                                  
                            @endauth
                        </div>

            <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 2000)">
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