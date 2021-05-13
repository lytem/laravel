<html>
    <head>
        <style>
            body{
                background-color: rgb(155, 142, 115);
            }
            h1,a{
                color: rgb(54, 49, 39);
            }
        </style>
    </head>
    <body>
        @include('common.menu')
        <h1><em><u>Nuovo Ordine</u></em></h1><br><br>

        <form action="{{route('orders.store')}}" method="post">
            @csrf

            ID Prodotto: <select name="product[product_id]">
                @foreach ($product as $prod)
                <option value="{{$prod->nome}}">{{$prod->nome}}</option>
                @endforeach

            </select><br><br>
            ID fornitore: <select name="fornitore[fornitore_id]">

                @foreach ($fornitore as $fornit)
                <option value="{{$fornit->nome}}">
                    {{$fornit->nome}}
                 </option>
                @endforeach

            </select><br><br>
            Nome Magazzino: <input type="text" name="order[nome_magazzino]" value=""><br><br>
            ID utente: <input type="text" name="order[utente_id]" value=""><br><br>
            Date creazione: <input type="date" name="order[create_at]" value=""><br><br>
            <input type="submit" value="create">

        </form>

        <br><br><br>
     <a href="/products"> indietro</a>
    </body>
</html>
