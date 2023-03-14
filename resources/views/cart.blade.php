
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
@vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <x-header />
    <x-sideMenu />
    <h1 class="cart-title">Cart</h1>
    {{-- {{dd($cart)}} --}}
    <div class="cart-products">

        @if(Auth::check())
        @foreach($cart as $item)
        <ul>
            <li>
                {{$item->products_name}}
            </li>
        </ul>
        @endforeach
        @endif
    </div>
</body>
</html>
