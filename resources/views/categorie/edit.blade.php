<html>
    <head>
        <style>
            body{
                background-color: rgb(247, 218, 164)
            }

        </style>
    </head>
    <body>
        @include('common.menu')
        <h1 style="color: sienna"><em><u>Nuova Categoria</u></em></h1><br><br>

        <form action="{{route('categories.update',$categorie->id)}}" method="POST">
        @csrf
        @method('PUT')
            Nome Categoria: <input type="text" name="categorie[nome]" value="{{$categorie->nome}}">
            Descrizione Categoria: <input type="text" name="categorie[descrizione]" value="{{$categorie->descrizione}}">
            <input type="submit" value="Salva Modifiche">
        </form>
    </body>

    <a href="{{ route('categories.index')}}">Indietro</a>
</html>
