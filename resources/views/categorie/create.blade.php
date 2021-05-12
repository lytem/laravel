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
        <h1><em><u>Nuova Categoria</u></em></h1><br><br>

        <form action="{{route('categories.store')}}" method="post">
        @csrf
            Nome Categoria: <input type="text" name="categorie[nome]" value="">
            Descrizione Categoria: <input type="text" name="categorie[descrizione]" value="">
            <input type="submit" value="create">
        </form>
     <a href="/categories"> indietro</a>
    </body>
</html>
