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
        <h1><em><u>Nuovo Stock</u></em></h1><br><br>

        <form action="{{route('stocks.store')}}" method="POST">
        @csrf
            ID Prodotto: <input type="text" name="stock[product_id]" value="">
            Quantita entrata: <input type="text" name="stock[quantita_entrata]" value="">
            Note: <input type="text" name="stock[note]" value="note">
            <input type="submit" value="create">
        </form>
    </body>

    <a href="{{ route('stocks.index')}}">Indietro</a>
</html>
