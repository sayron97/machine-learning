
        <!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<form method="GET" action="{{route('first')}}">
    <label>User</label>
    <input type="checkbox" name = "user">
    <label>Computer</label>
    <input type="checkbox" name = "computer">
    <button type="submit">First player</button>
</form>
<form method="GET" action="{{route('count')}}">
    <input type="checkbox" name = "check[1]">
    <input type="checkbox" name = "check[2]">
    <input type="checkbox" name = "check[3]">
    <br>
    <input type="checkbox" name = "check[4]">
    <input type="checkbox" name = "check[5]">
    <input type="checkbox" name = "check[6]">
    <br>
    <input type="checkbox" name = "check[7]">
    <input type="checkbox" name = "check[8]">
    <input type="checkbox" name = "check[9]">

    <button type="submit">Next step</button>
</form>
<br>
<table style="width:10%">

        <td bgcolor="yellow">@if(Session::has('count_1'))
                @if(Session::get('count_1') == 'x.png')
                    <img src="{{'../../img/x.png'}}" alt="альтернативный текст" width="10" height="10"/>
                @else
                    <img src="{{'../../img/0.png'}}" alt="альтернативный текст" width="15" height="15"/>
                @endif
                @else
                    <img src="{{'../../img/null.jpg'}}" alt="альтернативный текст" width="10" height="10"/>
            @endif</td>
        <td bgcolor="#ffe4c4">@if(Session::has('count_2'))
                @if(Session::get('count_2') == 'x.png')
                    <img src="{{'../../img/x.png'}}" alt="альтернативный текст" width="10" height="10"/>
                @else
                    <img src="{{'../../img/0.png'}}" alt="альтернативный текст" width="15" height="15"/>
                @endif
            @else
                <img src="{{'../../img/null.jpg'}}" alt="альтернативный текст" width="10" height="10"/>
            @endif</td>
        <td bgcolor="yellow">@if(Session::has('count_3'))
                @if(Session::get('count_3') == 'x.png')
                    <img src="{{'../../img/x.png'}}" alt="альтернативный текст" width="10" height="10"/>
                @else
                    <img src="{{'../../img/0.png'}}" alt="альтернативный текст" width="15" height="15"/>
                @endif
            @else
                <img src="{{'../../img/null.jpg'}}" alt="альтернативный текст" width="10" height="10"/>
            @endif</td>
    </tr>
    <tr>
        <td bgcolor="#ffe4c4">@if(Session::has('count_4'))
                @if(Session::get('count_4') == 'x.png')
                    <img src="{{'../../img/x.png'}}" alt="альтернативный текст" width="10" height="10"/>
                @else
                    <img src="{{'../../img/0.png'}}" alt="альтернативный текст" width="15" height="15"/>
                @endif
            @else
                <img src="{{'../../img/null.jpg'}}" alt="альтернативный текст" width="10" height="10"/>
            @endif</td>
        <td bgcolor="yellow">@if(Session::has('count_5'))
                @if(Session::get('count_5') == 'x.png')
                    <img src="{{'../../img/x.png'}}" alt="альтернативный текст" width="10" height="10"/>
                @else
                    <img src="{{'../../img/0.png'}}" alt="альтернативный текст" width="15" height="15"/>
                @endif
            @else
                <img src="{{'../../img/null.jpg'}}" alt="альтернативный текст" width="10" height="10"/>
            @endif</td>
        <td bgcolor="#ffe4c4">@if(Session::has('count_6'))
                @if(Session::get('count_6') == 'x.png')
                    <img src="{{'../../img/x.png'}}" alt="альтернативный текст" width="10" height="10"/>
                @else
                    <img src="{{'../../img/0.png'}}" alt="альтернативный текст" width="15" height="15"/>
                @endif
            @else
                <img src="{{'../../img/null.jpg'}}" alt="альтернативный текст" width="10" height="10"/>
            @endif</td>
    </tr>
    <tr>
        <td bgcolor="yellow">@if(Session::has('count_7'))
                @if(Session::get('count_7') == 'x.png')
                    <img src="{{'../../img/x.png'}}" alt="альтернативный текст" width="10" height="10"/>
                @else
                    <img src="{{'../../img/0.png'}}" alt="альтернативный текст" width="15" height="15"/>
                @endif
            @else
                <img src="{{'../../img/null.jpg'}}" alt="альтернативный текст" width="10" height="10"/>
            @endif</td>
        <td bgcolor="#ffe4c4">@if(Session::has('count_8'))
                @if(Session::get('count_8') == 'x.png')
                    <img src="{{'../../img/x.png'}}" alt="альтернативный текст" width="10" height="10"/>
                @else
                    <img src="{{'../../img/0.png'}}" alt="альтернативный текст" width="15" height="15"/>
                @endif
            @else
                <img src="{{'../../img/null.jpg'}}" alt="альтернативный текст" width="10" height="10"/>
            @endif</td>
        <td bgcolor="yellow">@if(Session::has('count_9'))
                @if(Session::get('count_9') == 'x.png')
                    <img src="{{'../../img/x.png'}}" alt="альтернативный текст" width="10" height="10"/>
                @else
                    <img src="{{'../../img/0.png'}}" alt="альтернативный текст" width="15" height="15"/>
                @endif
            @else
                <img src="{{'../../img/null.jpg'}}" alt="альтернативный текст" width="10" height="10"/>
            @endif</td>
    </tr>
</table>
<form method="GET" action="{{route('clear')}}">
    <button type="submit">Clear</button>
</form>
</body>
</html>

