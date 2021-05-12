<!DOCTYPE html>
<html>
<head>
  <style>
     h2,th{
        text-align:left;
        color: rgb(3, 44, 28)
       }
    body{
        background-color: rgb(242, 245, 84)
    }
  </style>
</head>
<body>
    @include('common.menu')
<h2><em> Stocks Magazzino</em></h2>

<table style="width:60%">
  <tr>
    <th>ID ordine</th>
    <th>ID Prodotto</th>
    <th>Quantita in ingresso</th>
    <th>Note</th>

  </tr>
  @foreach ($items as $item)
  <tr>
    <td><a href="/stocks/{{$item->id}}/edit">{{$item->ordini_id}}</a></td>
    <td>{{$item->product_id}}</td>
    <td>{{$item->quantita_entrata}}</td>
    <td>{{$item->note}}</td>

    <td>
        <form action="/stocks/{{$item->id}}" method="POST">
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
<a href="{{route('stocks.create')}}" style="color: rgb(15, 63, 117)">new Stocks</a>

<p>cerca Prodotto</p>
<select name="stock[id_product]" >
    @foreach ($product as $row)
        <option value="{{$row->id}}">{{$row->nome}}</option>
    @endforeach
     </select><br><br>
</body>


</html>
