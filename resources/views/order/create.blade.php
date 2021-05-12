<html>
    <head>
        <style>
            body{
                background-color: rgb(240, 214, 161)
            }

        </style>
    </head>
    <body>
        @include('common.menu')
        <h1 style="color: rgb(76, 21, 104)"><em><u>Nuovo Ordine</u></em></h1><br><br>

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        QR Code: <input type="text" name="order[qr_code]" value=""><br><br>

        <input type="submit" value="Show">
    </form>
        <br><br><br>
     <a href="/products"> indietro</a>
    </body>
</html>
