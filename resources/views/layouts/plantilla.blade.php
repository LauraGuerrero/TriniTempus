<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TriniTempus</title>

    <!--link js-->
    <script src="stiloMenu.js"></script>
    <!--icono pestaña-->
    <link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
			/*
			background-image: {{asset('img/negocio.jpg')}};
			background-image: url({{asset('img/negocio.jpg')}})
			*/
            /*background-color: #A0E5EB;*/
           /* background: rgba(182,194,237,1);*/

            color: #636b6f;
            font-family: 'Exo', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            
           /* background: -webkit-linear-gradient(90deg, #e74d6b 10%, #8cc8ac 90%);
            background:    -moz-linear-gradient(90deg, #e74d6b 10%, #8cc8ac 90%);
            background:     -ms-linear-gradient(90deg, #e74d6b 10%, #8cc8ac 90%);
            background:      -o-linear-gradient(90deg, #e74d6b 10%, #8cc8ac 90%);
            background:         linear-gradient(90deg, #e74d6b 10%, #8cc8ac 90%);*/
            
            /*background: -webkit-linear-gradient(90deg, #65997d 10%, #fccb6e 90%);
            background:    -moz-linear-gradient(90deg, #65997d 10%, #fccb6e 90%);
            background:     -ms-linear-gradient(90deg, #65997d 10%, #fccb6e 90%);
            background:      -o-linear-gradient(90deg, #65997d 10%, #fccb6e 90%);
            background:         linear-gradient(90deg, #65997d 10%, #fccb6e 90%);*/
            
            background: -webkit-linear-gradient(90deg, #4c515b 10%, #fccb6e 90%);
            background:    -moz-linear-gradient(90deg, #4c515b 10%, #fccb6e 90%);
            background:     -ms-linear-gradient(90deg, #4c515b 10%, #fccb6e 90%);
            background:      -o-linear-gradient(90deg, #4c515b 10%, #fccb6e 90%);
            background:         linear-gradient(90deg, #4c515b 10%, #fccb6e 90%);

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
        
        .fontColor {
            color: #312828;
        }
        
        .title {
            font-size: 84px;
        }
        
		.links>a{
			color: white;
			text-decoration: none;
			font-size: 20px;
			border: 2px thin ;
			border-radius: 15px;
			padding: 17px 25px;
			margin: 10px;
			background-color:  #b47c4a;
			opacity:0.8;
		
		}
        
        .links> a:hover {
			
			background-color: #4c515b;
            margin-top: 5px;
            font-weight: bold;
            transition: all 0.5s linear;
            border-radius: 30px;
            transform: scale(0.9);   
            opacity:0.8;           
		}
		
        
        .m-b-md {
            margin-bottom: 30px;
        }
        
        .container {
            position: absolute;
            margin-left: 590px;
            margin-top: -400px;
        }
		
        
        
        /*---------------------------------------------------------------*/

    </style>
</head>

<body>
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/buscador') }}">Buscador</a>@else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
    @endif
    <div class="content">
        <div class="title m-b-md">
            <a id="capa" href='<?=url('/home ')?>'><img  src="{{ asset('img/logo.png')}}" style='max-width: 250px'/></a>
        </div>
        <h1>VISTA PRUEBA LAYOUT</h1>










    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>