<html>

<head>

</head>

<body>
    @include('common.menu')
    <h3><em>Modifica Ordine</em></h3>

    <form action="{{ route('orders.update', $order->id) }}" method="post">
        @csrf
        @method('PUT')
        ID Prodotto: <input type="text" name="order[product_id]" value="{{ $order->product_id }}">
        ID fornitore: <input type="text" name="order[fornitore_id" ] value="{{ $order->fornitore_id }}">
        Nome Magazzino: <input type="text" name="order[nome_magazzino]" value="{{ $order->nome_magazzino }}">
        ID utente: <input type="text" name="order[utente]" value="{{ $order->utente }}">
        data creazione: <input type="date" name="order[create_at]" value=" {{ $order->create_at }}">
        <input type="submit" value="salva modifiche">

    </form>




    <a href="/orders">Torna Indietro</a>

</body>

</html>
