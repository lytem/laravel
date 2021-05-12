<!DOCTYPE html>
<html>
<head>
  <style>
    th{
        text-align:left;

       }
    body{
        background-color: rgb(204, 164, 103);
    }
    h1,a,th{
                color: rgb(63, 40, 9)
            }
  </style>
</head>
<body>
    @include('common.menu')
<h1><em> Elenco Prodotti Deposito</em></h1>

<table style="width:100%">
  <tr>
    <th>Nome Prodotto</th>
    <th>ID Categoria</th>
    <th>ID Fornitore</th>
    <th>Prezzo Unitario</th>
    <th>Peso</th>
    <th>Volume</th>
    <th>Reparto</th>
    <th>Giacenza</th><br><br>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td><a href="/products/{{$item->id}}/edit">{{$item->nome}}</a></td>
    <td>{{$item->categorie_id}}</td>
    <td>{{$item->fornitore_id}}</td>
    <td>{{$item->prezzo_unitario}}</td>
    <td>{{$item->peso}}</td>
    <td>{{$item->volume}}</td>
    <td>{{$item->reparto}}</td>
    <td>{{$item->giacenza}}</td>
    <td>
        <form action="/products/{{$item->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="DELETE">
        </form>
    </td>
  </tr>
  @endforeach
</table>
<br>
<br>
<br>
<a href="{{route('products.create')}}"> Create New Prodotto</a>

</body>


</html>
