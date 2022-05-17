<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="{{ config('app.description') }}" />
    <meta name="google" content="nositelinkssearchbox" />
    <meta name="google-site-verification" content="hw53f9VrJWK4CMzNZc1w37bD8G-agDcRqIcqcjw-c9Y" />
    
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}"/>
    <meta property="og:image" content="{{ config('app.url') }}/img/logo.png"/>

    <meta property="og:description" content="{{ config('app.description') }}"/>

    <meta property="og:url" content="{{ config('app.url') }}"/>

    <link rel="icon" type="image/png" href="/img/logo.png"/>
    <link rel="shortcut icon" type="image/png" href="/img/logo.png"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="{{ !empty($appClasses) ? implode(' ', $appClasses) : null }}" style="{{ !empty($vueRootStyle) ? $vueRootStyle : null }}">
        <router-view token="{{ $token ?? null }}"></router-view>
    </div>
</body>
