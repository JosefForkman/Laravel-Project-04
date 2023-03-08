<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
<body>
    <x-header />


    <h1>About us</h1>
    <h2>
        We're a small webbshop designed to bring you the best shopping experience on the internet.
        We consist of a small team of 3 webbdevelopers with a passion for user experience and functionality.

    </h2>

    <p>
        Our Shop is designed to be as painless and easy to use for everyone. We hand select our products that we belive
        our users need/wants. We put a huge emphasis on quality and would never sell any product we hadn't made a thorough
        check on.
    </p>
    <x-sideMenu />

</body>
