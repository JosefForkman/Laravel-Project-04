<header class="bg-blue">
    <script src="https://kit.fontawesome.com/a913f4ac89.js" crossorigin="anonymous"></script>
    <nav>
        <ul>
            <li><a class="text-white" href="/">Home</a></li>
            <li><a class="text-white" href="/Produkt">Produkt</a></li>
            <li><a class="text-white" href="/About">About</a></li>

            {{-- {{dd()}} --}}
            @if (!Auth::check() || !auth()->guard('admin')->check())
            <li><a class="text-white" href="/login_form">Logga in</a></li>
            @else
            <li><a class="text-white" href="logout">Sign out</a></li>
            @endif
            <li><a href="/cart"><i class="fa-regular fa-cart-shopping"></i></a></li>
        </ul>

    </nav>
</header>
