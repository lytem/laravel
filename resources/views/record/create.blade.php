<html>
    <head>
        <style>
            body{
                background-color: rgb(243, 213, 168);
            }
            h1,a{
                color: rgb(63, 40, 9)
            }

        </style>
    </head>
    <body>
        @include('common.menu')
        <h1><em><u>Nuovo records</u></em></h1><br><br>

    <form action="{{route('records.store')}}" method="POST">
        @csrf
        ID Ordini:  <select name="record[ordini_id]" >
            @foreach ($order as $row)
                <option value="{{$row->id}}">{{$row->id}}</option>
            @endforeach
        </select><br><br>

        ID Stock: <select name="record[stock_id]" >
            @foreach ($stock as $row)
                <option value="{{$row->id}}">{{$row->id}}</option>
            @endforeach
             </select><br><br>
        Quantità: <input type="text" name="record[quantita]" value=""><br><br>
        Note: <input type="text" name="record[note]" value=""><br><br>

        <input type="submit" value="create">
    </form>
        <br><br><br>
     <a href="/records"> indietro</a>
    </body>
</html>
