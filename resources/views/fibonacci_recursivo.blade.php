<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Fibonacci Recursivo
                </div>

                <div class="links">
                      <a href="http://127.0.0.1:8000/Fibonacci_Lineal">Fibonacci Lineal</a>
                    <a href="http://127.0.0.1:8000/Fibonacci_Recursivo">Fibonacci Recursivo</a>
                    <a href="http://127.0.0.1:8000/Fibonacci_ProgDinamica">Fibonacci ProgDinamica</a>
                    <!--<a href="https://forge.laravel.com">Forge</a>-->
                    <!--<a href="https://github.com/laravel/laravel">GitHub</a>-->
                </div>

<?php   
    $tiempo_inicio = microtime(true);

    $cantidad_fibonacci=30;
     echo 'cantidad de numeros fibonacci: '.$cantidad_fibonacci;
    echo '<hr>';
      
        $a=1;
        for($i=0; $i<$cantidad_fibonacci; $i++){

            echo 'fibo '.$a.' = '.fibo_recursivo($i);
            echo '  / ';

              $a++; 
        }

    $tiempo_fin = microtime(true);
    echo '<hr>';
    echo '<a>Tiempo empleado: ' . ($tiempo_fin - $tiempo_inicio).' seg <a>';
    

    function fibo_recursivo($num){
        if($num==0){
            return 0;
        }
        else{
            if($num==1){
                return 1;        
            }else{
                return (fibo_recursivo($num-1) + fibo_recursivo($num-2)) ;

            }            
        } 
    }


?>

            </div>
        </div>
    </body>
</html>
