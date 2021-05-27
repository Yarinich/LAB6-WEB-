<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="styleLend.css">
    <link rel="stylesheet" href="styleCP.css">
    <link rel="stylesheet" href="styleIP.css">
    <link rel="stylesheet" href="bootstrap-grid.css">
    <title>@yield('title')</title>
</head>
<body>

    <header class="top">

        <div class="section">

            <div class="Logo"><a href="/Lend"><img src="img/unnamed.jpg" width="50" height="50"></a></div>
            <div class="Slogan"><a href="/Lend">Geek - все про улюблені фільми</a></div>

        </div>

        <div class="section">

            <div class="Menu_item1"><a href="/ConteinerPage">Фільми <br> Marvel/DC</a></div>
            <div class="Menu_item2"><a href="/ConteinerPage">Фільми <br> Star Wars</a></div>
            <div class="Menu_item3"><a href="/ConteinerPage">Шедеври <br> кіно</a></div>
            <div class="Menu_item4"><a href="/ConteinerPage">Шедеври <br> серіалів</a></div>
            <div class="Menu_item5"><a href="/ConteinerPage">Наші <br> контакти</a></div>

        </div>


    </header>

    <div class="forYield">
        @yield('content')
    </div>


    <div class="footer">

        <div class="container">
            <div class="row">
                <div class="col-sm-3"> Фільми </div>
                <div class="col-sm-3"> Серіали </div>
                <div class="col-sm-3"> Marvel/DC </div>
                <div class="col-sm-3"> Star Wars </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12"> Ми в мережах: <a href="" class="icon"><img src="img/youtube%20(1).png" width="14px" height="14px"></a>
                    <a href="" class="icon"><img src="img/instagram%20(2).png" width="14px" height="14px"></a>
                    <a href="" class="icon"><img src="img/telegram%20(2).png" width="14px" height="14px"></a>
                </div>
            </div>

        </div>

    </div>
</body>
</html>
