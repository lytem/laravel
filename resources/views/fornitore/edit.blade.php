<html>
    <head>
        <style>
            body{
                background-color: rgb(247, 218, 164)
            }

        </style>
    </head>
    <body>
        <h1 style="color: sienna"><em><u>Nuova Categoria</u></em></h1><br><br>

        <form action="{{route('fornitori.update' , $fornitore->id)}}" method="post">
        @csrf
        @method('PUT')
            Nome Fornitore: <input type="text" name="fornitore[nome]" value="{{$fornitore->nome}}"><br><br>
            Referente: <input type="text" name="fornitore[referente]" value="{{$fornitore->referente}}"><br><br>
            Indirizzo: <input type="text" name="fornitore[indirizzo]" value="{{$fornitore->indirizzo}}"><br><br>
            Cap: <input type="text" name="fornitore[cap]" value="{{$fornitore->cap}}"><br><br>
            City: <input type="text" name="fornitore[city]" value="{{$fornitore->city}}"><br><br>
            Country: <input type="text" name="fornitore[country]" value="{{$fornitore->country}}"><br><br>
            Email: <input type="text" name="fornitore[email]" value="{{$fornitore->email}}"><br><br>
            Phone: <input type="text" name="fornitore[phone]" value="{{$fornitore->phone}}"><br><br>
            <input type="submit" value="salva modifiche">
        </form>
        <br><br><br>
     <a href="/fornitori"> indietro</a>
    </body>
</html>
