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

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        Nome Prodotto: <input type="text" name="product[nome]" value=""><br><br>

        ID Ordini:  <select name="record[ordini_id]" >
            @foreach ($fornitori as $row)
                <option value="{{$row->id}}">{{$row->nome}}</option>
            @endforeach
        </select><br><br>

        ID Stock: <select name="record[stock_id]" >
            @foreach ($categories as $row)
                <option value="{{$row->id}}">{{$row->nome}}</option>
            @endforeach
             </select><br><br>
        Quantità: <input type="text" name="record[reparto]" value=""><br><br>
        Note: <input type="text" name="record[giacenza]" value=""><br><br>

        <input type="submit" value="create">
    </form>
        <br><br><br>
     <a href="/products"> indietro</a>
    </body>
</html>
