<section class="side-menu bg-blue">
    <h2 class="text-white">Katogorier</h2>
    <nav>
        <ul>
            @foreach ($categories as $item)
                <li><a class="text-black" href="">{{$item->Name}}</a></li>
            @endforeach
        </ul>
    </nav>
</section>
