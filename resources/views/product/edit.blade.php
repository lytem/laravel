<html>
    <head>
        <style>
            body{
                background-color: rgb(243, 213, 168);
            }
            h1,a{
                color: rgb(63, 40, 9)
            }

        </style>
    </head>
    <body>
        @include('common.menu')
        <h1><em><u>Nuovo Prodotto</u></em></h1><br><br>

    <form action="{{route('products.update',$product->id)}}" method="POST">
        @csrf
        @method('PUT')
        Nome Prodotto: <input type="text" name="product[nome]" value="{{$product->nome}}"><br><br>
        ID Categoria: <input type="text" name="product[categorie_id]" value="{{$product->categorie_id}}"><br><br>
        ID Fornitore: <input type="text" name="product[fornitore_id]" value="{{$product->fornitore_id}}"><br><br>
        Prezzo Unitario: <input type="text" name="product[prezzo_unitario]" value="{{$product->prezzo_unitario}}"><br><br>
        Peso: <input type="text" name="product[peso]" value="{{$product->peso}}"><br><br>
        Volume: <input type="text" name="product[volume]" value="{{$product->volume}}"><br><br>
        Reparto: <input type="text" name="product[reparto]" value="{{$product->reparto}}"><br><br>
        Giacenza: <input type="text" name="product[giacenza]" value="{{$product->giacenza}}"><br><br>
        <input type="submit" value="salva modifiche">
    </form>
        <br><br><br>
     <a href="/products"> indietro</a>
    </body>
</html>
