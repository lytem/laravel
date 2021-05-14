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
        <h1><em><u>Elenco Records</u></em></h1><br><br>

            <table align="center" style="width: 70%">
                <tr>
                  <th>ID Ordini</th>
                  <th>ID Stock</th>
                  <th>Quantità</th>
                  <th>note</th>
                  <th></th>
                </tr>
                @foreach ($items as $item)
                  <tr>
                    <td><a href="/records/{{$item->id}}/edit">{{$item->ordini_id}}</a></td>
                    <td>{{$item->stock_id}}</td>
                    <td>{{$item->quantite}}</td>
                    <td>{{$item->note}}</td>
                    <td>
                        <form action="/records/{{$item->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE">
                        </form>
                    </td>
                  </tr>
                @endforeach

            </table>
        <br><br><br>
        <a href="{{route('records.create')}}"> Create New categorie</a>

    </body>
</html>
