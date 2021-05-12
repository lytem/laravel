<html>
    <head>
        <style>
            body{
                background-color: rgb(155, 142, 115);
            }
            h1,a{
                color: rgb(54, 49, 39);
            }
        </style>
    </head>
    <body>
        @include('common.menu')
        <h1><em><u>Nuovo Ordine</u></em></h1><br><br>

    <form action="/orders" method="POST">
        @csrf
        QR Code: <input type="text" name="qr_code" value=""><br><br>

        <input type="submit" value="Show">
    </form>
        <br><br><br>
     <a href="/products"> indietro</a>
    </body>
</html>
