<html>
    <head>
        <style>
            body{
                background-color: rgb(240, 214, 161)
            }

        </style>
    </head>
    <body>
        <h1 style="color: rgb(76, 21, 104)"><em><u>Nuovo Prodotto</u></em></h1><br><br>

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        Nome Prodotto: <input type="text" name="product[nome]" value=""><br><br>
        ID Categoria: <input type="text" name="product[categorie_id]" value=""><br><br>
        ID Fornitore: <input type="text" name="product[fornitore_id]" value=""><br><br>
        Prezzo Unitario: <input type="text" name="product[prezzo_unitario]" value=""><br><br>
        Peso: <input type="text" name="product[peso]" value=""><br><br>
        Volume: <input type="text" name="product[volume]" value=""><br><br>
        Reparto: <input type="text" name="product[reparto]" value=""><br><br>
        Giacenza: <input type="text" name="product[giacenza]" value=""><br><br>
        <input type="submit" value="create">
    </form>
        <br><br><br>
     <a href="/products"> indietro</a>
    </body>
</html>
