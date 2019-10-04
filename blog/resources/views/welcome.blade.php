<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="icon" href="img/logo2.ico">


    



    
  </head>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #F18410;
               
            }

            

            .links > a {
                color: #FFFFFF;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .10rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 40px;
            }
        </style>
    </head>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>


<br>

<div class="content">
               
                <font color="Black" face="Century Gothic" align="center">
                    <h1></h1>
<h1></h1>
<h1></h1>


  <h1></h1>
  <body><div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/imagenes/71839570_982796465386295_7399167441898569728_n.png" alt="First slide" width="500" height="400">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/imagenes/RO.png" alt="Second slide" width="500" height="400">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/71939968_389553965311617_7432248731711307776_n.png" alt="Third slide" width="500" height="400">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <h1></h1>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            
                  <h1></h1>
                <div class="links">
                    
                    <a href="Electronica">◉Electronica</a>
                    <a href="Computacion">◉Computacion</a>
                    <a href="Smartphones">◉Smartphones</a>
                    <a href="Zapatos">◉Zapatos</a>
                    <a href="Ropa">◉Ropa</a>
                </div>
            </div>
        </div>
    </body>
</html>
