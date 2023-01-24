<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        @include('admin.partials.header')

        <div class="container-fluid main-wrapper">
            <div class="row h-100">
                @auth
                    <div class="col-2 h-100 aside">
                        @include('admin.partials.aside')
                    </div>
                @endauth
                <div class="@auth col-10 @endauth">
                    <main>
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
