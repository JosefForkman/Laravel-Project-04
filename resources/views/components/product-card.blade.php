<li class="prodoktCard">
    <img src="{{$prodokt->url}}" alt="">
    <h3>{{$prodokt->Name}}</h3>
    <span>250 kr</span>
    <a class="btn" href="/prodokt/{{Str::kebab($prodokt->Name)}}">Köp</a>
</li>
