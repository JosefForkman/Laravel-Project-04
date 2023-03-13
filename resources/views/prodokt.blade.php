<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://kit.fontawesome.com/a913f4ac89.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <x-header />
        <x-sideMenu />

        <main class="produkt">
            <h2>{{$product->Name}}</h2>
            <img src="{{$product->url}}" alt="">
            <form action="/shopping" method="post">
                @csrf
                {{-- <span>{{$product->Price}} kr</span> --}}
                <input type="hidden" name="products_name" value="{{$product->Name}}" readonly>
                <input type="text" name="price" value="{{$product->Price}}" readonly >
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <input type="number" name="quantity" value="1" min="1" max="10">
                <p>{{$product->Description}}</p>
                <button type="submit" name="action" value="add_to_cart">Add to Cart</button>
                <button type="submit" name="action" value="buy">buy</button>
            </form>
            <div class="CommentsContiner">
                <ul class="comment">
                    @foreach ($product->comments as $item)
                        <li>
                            <p>{{$item->Content}}</p>

                            @if(Auth::id() == $item->users_id)
                            <i class="fa-solid fa-pen-to-square"></i>
                            @endif

                            {{-- <span>{{$item->updated_at->isoFormat('DD/MM')}}</span> --}}
                        </li>
                    @endforeach

                    @if(count($product->comments) == 0)
                        <li class="center">Be the first on this prodokt to comment!</li>
                    @endif
                </ul>

                <form action="/prodokt" method="post">
                    @method('post')
                    @csrf
                    <input type="hidden" name="prodokt_Name" value="{{$product->Name}}">
                    <textarea name="comment" required id="" placeholder="Example: I bought this a month ago and I'm really glad I did…"></textarea>
                    <button class="btn bg-blue text-white" type="submit">Send reception</button>
                </form>
            </div>
        </main>
    </body>
</html>
