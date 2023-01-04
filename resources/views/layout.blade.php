<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        @livewireStyles

        <style>
            a:hover {
                cursor: pointer;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="row justify-content-center">
        <div class="col-xl-9">
            <div class="row">
                <livewire:crypto-list>
                <livewire:show>
            </div>
            <!--end row-->
        </div>
        <!--end col-->
    </div>
        @livewireScripts
    </body>
</html>
