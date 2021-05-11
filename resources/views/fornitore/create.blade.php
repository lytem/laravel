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

        <form action="{{route('fornitori.store')}}" method="post">
        @csrf
            Nome Fornitore: <input type="text" name="fornitore[nome]" value=""><br><br>
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
     <a href="/fornitori"> indietro</a>
    </body>
</html>
