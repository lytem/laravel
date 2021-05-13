<html>
    <head>
        <style>
           body{
                background-color:rgb(102, 123, 155)
            }
            a,h1{
                color: rgb(7, 36, 80);
            }
        </style>
    </head>
    <body>
        @include('common.menu')
        <h1><em><u>Modifica Prodotto</u></em></h1><br><br>

        <form action="{{route('stocks.update',$stock->id)}}" method="POST">
        @csrf
        @method('PUT')
            ID Prodotto: <input type="text" name="stock[product_id]" value="{{$stock->product_id}}">
            Quantita entrata: <input type="text" name="stock[quantita_entrata]" value="{{$stock->quantita_entrata}}">
            Note: <input type="text" name="stock[note]" value="{{$stock->note}}">
            <input type="submit" value="Salva Modifiche">
        </form>
    </body>

    <a href="{{ route('stocks.index')}}">Indietro</a>
</html>
