<html>
    <head>
        <style>
            body{
                background-color: rgb(148, 168, 111)
            }

        </style>
    </head>
    <body>
        @include('common.menu')
        <h1 style="color: rgb(3, 78, 34)"><em><u>Nuovo Fornitore</u></em></h1><br><br>

        <form action="{{route('fornitores.store')}}" method="post">
        @csrf
            Nome Fornitore: <input type="text" name="fornitore[nome]" value=""><br><br>
            ID Prodotto: <select name="fornitore[product_id]" >
                @foreach ($product as $row)
                  <option value="{{$row->id}}">{{$row->nome}}</option>
                @endforeach
            </select><br><br>
            Referente: <input type="text" name="fornitore[referente]" value=""><br><br>
            Indirizzo: <input type="text" name="fornitore[indirizzo]" value=""><br><br>
            Cap: <input type="text" name="fornitore[cap]" value=""><br><br>
            City: <input type="text" name="fornitore[city]" value=""><br><br>
            Country: <input type="text" name="fornitore[country]" value=""><br><br>
            Email: <input type="text" name="fornitore[email]" value=""><br><br>
            Phone: <input type="text" name="fornitore[phone]" value=""><br><br>
            <input type="submit" value="create">
        </form>
        <br><br><br>
     <a href="/fornitores"> indietro</a>
    </body>
</html>
