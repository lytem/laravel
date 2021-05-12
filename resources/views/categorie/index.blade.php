<html>
    <head>
        <style>
            th{
                text-align: left;
            }
            body{
                background-color:rgb(102, 123, 155)
            }
            a,h1,th{
                color: rgb(7, 36, 80);
            }
            table,td,th{
                border: 2px solid black;
                border-collapse: collapse;
            }

        </style>
    </head>
    <body>
        @include('common.menu')
        <h1><em><u>Categorie Prodotti </u></em></h1><br><br>

            <table align="center" style="width: 70%">
                <tr>
                  <th>Nome</th>
                  <th>Descrizione</th>
                  <th></th>
                </tr>
                @foreach ($items as $item)
                  <tr>
                    <td><a href="/categories/{{$item->id}}/edit">{{$item->nome}}</a></td>
                    <td>{{$item->descrizione}}</td>
                    <td>
                        <form action="/categories/{{$item->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE">
                        </form>
                    </td>
                  </tr>
                @endforeach

            </table>
        <br><br><br>
        <a href="{{route('categories.create')}}" style="color: rgb(46, 45, 45)"> Create New categorie</a>

    </body>
</html>

