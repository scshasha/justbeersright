<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="scshasha" name="author">
        <meta content="Its just beers right?" name="description">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome/css//font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
    </head>
    <body id="body">
    <div id="hero">
        <header>
            <nav>
                <div id="logo">
                    <!-- <img src=""> -->
                    Its Just Beers Right?
                </div>

                <div class="menu-toggler">
                    <i class="fa fa-bars mobile-menu" aria-hidden="true"></i>
                </div>
                <ul class="main-menu">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/our-beers">Our Beers</a>
                    </li>
                    <li>
                        <a href="/sign-up">Sign-up</a>
                    </li>
                    <li>
                        <a href="/login">Login</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>


        <div class="hero-content">
            <h1 class="caption">citrus, tropical, fruity, floral</h1>
            <p>sounds like your kind of beer?</p>
            <button class="cta">explore &amp; rate your favourites</button>
        </div>
    </div>