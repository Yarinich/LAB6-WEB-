@extends('header')

@section('title') Star Wars @endsection

@section('content')

    <head> <link rel="stylesheet" href="styleCP.css"> </head>
    <div class="imgFirst">
        <img src="img/Star-Wars-big.png" class="img1">
    </div>

    <div class="choise">
        <div class="container button">
            <div class="row">
                <div class="col-sm">
                    <div class="Buttons">
                        <a href="/InfoPage" class="gradient-button">Фільми/серіали Star Wars </a>
                    </div>

                </div>

                <div class="col-sm">
                    <div class="Buttons">
                        <a href="/InfoPage" class="gradient-button">Мультфільми Star Wars </a>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="Buttons">
                        <a href="/InfoPage" class="gradient-button">Новини по лору Star Wars </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
