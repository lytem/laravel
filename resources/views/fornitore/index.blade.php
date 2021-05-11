<!DOCTYPE html>
<html>
<head>
  <style>
     h2,th{
        text-align:left;
        color: rgb(3, 3, 73)
       }
    body{
        background-color: rgb(174, 226, 228)
    }
  </style>
</head>
<body>

<h2><em> Elenco Fornitori</em></h2>

<table style="width:100%">
  <tr>
    <th>Nome Fornitore</th>
    <th>Referente</th>
    <th>indirizzo</th>
    <th>CAP</th>
    <th>City</th>
    <th>Country</th>
    <th>Email</th>
    <th>Phone</th><br><br>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td><a href="/fornitori/{{$item->id}}/edit">{{$item->nome}}</a></td>
    <td>{{$item->referente}}</td>
    <td>{{$item->indirizzo}}</td>
    <td>{{$item->cap}}</td>
    <td>{{$item->city}}</td>
    <td>{{$item->country}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->phone}}</td>
    <td>
        <form action="/fornitori/{{$item->id}}" method="POST">
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
<a href="{{route('fornitori.create')}}" style="color: rgb(15, 63, 117)"> Create New Fornitore</a>

</body>


</html>
