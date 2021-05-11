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

        <form action="{{route('categories.store')}}" method="post">
        @csrf
            Nome Categoria: <input type="text" name="categorie[nome]" value="">
            Descrizione Categoria: <input type="text" name="categorie[descrizione]" value="">
            <input type="submit" value="create">
        </form>
     <a href="/categories"> indietro</a>
    </body>
</html>
