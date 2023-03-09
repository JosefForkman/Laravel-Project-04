<li>
    <h2>{{$Products->Name}}</h2>
    @foreach($Products->products as $items)
    <ul class="prodoktContiner">
        <li class="prodoktCard">
            <img src="{{$items->url}}" alt="">
            <h3>{{$items->Name}}</h3>
            <span>{{$items->Price}} kr</span>
            <a class="btn bg-blue text-white" href="/prodokt/{{$items->Name}}">Köp</a>
        </li>
    </ul>
    @endforeach
</li>

