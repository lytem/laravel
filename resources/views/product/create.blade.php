<html>
    <head>
        <style>
            body{
                background-color: rgb(204, 164, 103);
            }
            h1,a{
                color: rgb(63, 40, 9)
            }

        </style>
    </head>
    <body>
        @include('common.menu')
        <h1><em><u>Nuovo Prodotto</u></em></h1><br><br>

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        ID Fornitore:  <select name="product[fornitore_id]" >
            @foreach ($fornitori as $row)
                <option value="{{$row->id}}">{{$row->nome}}</option>
            @endforeach
        </select><br><br>
        Nome Prodotto: <input type="text" name="product[nome]" value=""><br><br>
        ID Categoria: <select name="product[categorie_id]" >
            @foreach ($categories as $row)
                <option value="{{$row->id}}">{{$row->nome}}</option>
            @endforeach
             </select><br><br>


        Prezzo Unitario: <input type="text" name="product[prezzo_unitario]" value=""><br><br>
        Peso: <input type="text" name="product[peso]" value=""><br><br>
        Volume: <input type="text" name="product[volume]" value=""><br><br>
        Reparto: <input type="text" name="product[reparto]" value=""><br><br>
        Giacenza: <input type="text" name="product[giacenza]" value=""><br><br>

        <input type="submit" value="create">
    </form>
        <br><br><br>
     <a href="/products"> indietro</a>
    </body>
</html>
