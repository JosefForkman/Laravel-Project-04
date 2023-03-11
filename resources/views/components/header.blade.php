<header class="bg-blue">
    <nav>
        <ul>
            <li><a class="text-white" href="/">Home</a></li>
            <li><a class="text-white" href="/Produkt">Produkt</a></li>
            <li><a class="text-white" href="/About">About</a></li>
            @if (!Auth::check())
            <li><a class="text-white" href="/login_form">Logga in</a></li>
            @else
            <li><a class="text-white" href="logout">Sign out</a></li>
            @endif
        </ul>

    </nav>
</header>
