<li>
    <h2>{{$Products->Name}}</h2>
    @foreach($Products->products as $items)
    <ul>
        <li class="prodoktCard">
            <img src="{{$items->url}}" alt="">
            <h3>{{$items->Name}}</h3>
            <span>{{$items->Price}} kr</span>
            <a class="btn" href="/prodokt/{{Str::kebab($items->Name)}}">Köp</a>
        </li>
    </ul>
    @endforeach
</li>

