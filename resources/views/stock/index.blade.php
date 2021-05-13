<!DOCTYPE html>
<html>
<head>
  <style>
    th{
        text-align:left;

       }
    body{
        background-color: rgb(121, 111, 148)
    }
   h2,th,a{
       color: rgb(43, 2, 51)
   }
   h2{
       text-align: center;
       font-size: 40px;
   }
  </style>
</head>
<body>
    @include('common.menu')
<h2><em> Stocks Magazzino</em></h2><br><br>

<table style="width:60%">
  <tr>
    <th>ID Prodotto</th>
    <th>Quantita in ingresso</th>
    <th>Note</th>

  </tr>
  @foreach ($items as $item)
  <tr>
    <td><a href="/stocks/{{$item->id}}/edit">{{$item->product_id}}</a></td>
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
<a href="{{route('stocks.create')}}">new Stocks</a><br><br><br>

<div>cerca Prodotto
<select name="stock[id_product]" style="width: 40%">
    @foreach ($product as $row)
        <option value="{{$row->id}}">{{$row->nome}}</option>
    @endforeach
     </select><br><br>
</div>
</body>


</html>
