<!DOCTYPE html>
<html>
<head>
  <style>
   body{
            background-color: rgb(155, 142, 115);
        }
    h2,th,a{
            color: rgb(54, 49, 39);
        }
  </style>
</head>
<body>
    @include('common.menu')
<h2><em> Elenco Ordini</em></h2>

<table style="width:60%">
  <tr>
<th>ID Prodotto</th>
<th>ID Fornitore</th>
<th>Nome Magazzino</th>
 <th>ID Utente</th>
 <th>Data Creazione</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td><a href="/orders/{{$item->id}}/edit">{{$item->product_id}}</td></a>
    <td>{{$item->fornitore_id}}</td>
    <td>{{$item->nome_magazzino}}</td>
    <td>{{$item->utente_id}}</td>
    <td>{{$item->create_at}}</td>
    <td>
        <form action="/orders/{{$item->id}}" method="POST">
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
<a href="{{route('orders.create')}}"> Create New Prodotto</a>

</body>


</html>
