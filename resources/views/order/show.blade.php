<html>
    <head>

    </head>
<body>
@include('common.menu')
        <h3><em>Detaglio Ordine</em></h3>

<table style="width:60%">
    <tr>
      <th>QR Code</th>
      <th>ID Fornitore</th>
      <th>Nome Magazzino</th>
      <th>ID Utente</th>
      <th>Data</th>
    </tr>
    @foreach ($items as $item)
    <tr>
      <td>{{$item->qr_code}}</td>
      <td>{{$item->fornitore_id}}</td>
      <td>{{$item->nome_magazzino}}</td>
      <td>{{$item->utente_id}}</td>
      <td>{{$item->data}}</td>
      <td>
    </tr>
</table>
<a href="/orders">Torna Indietro</a>

    </body>
</html>



