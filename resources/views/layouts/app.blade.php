<html>

<head><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Crud básico NT</title>
    @stack('app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-2.1.0.min.js" type="text/javascript"></script>

    <style>
      .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #80ced6;
    color: white;
    text-align: center;
    }
    body {
        background-color:  #947a46
        font-family: 'Open Sans Condensed', sans-serif;
            background: white;
    }
    .nav-bar {
        width: 100%;
    }
    .nav-container {
        overflow: hidden;
        margin: 2.95% auto;
    }  
    .nav-menu {
        display: none;
    }
    nav.nav-bar ul {
        list-style: none;
    }
    .nav-list {
        margin: 0 auto;
        width: 100%;
        padding: 0;
    }
    .nav-list li {
        float: left;
        width:12.5%;
    }
    .nav-list li a {
        display: block;
        color: #f9f9f9;
        text-shadow: 1px 1px 3px rgba(150, 150, 150, 1);
        padding: 30px 30px;
        font-size: 1.5em;
        text-align: center;
        text-decoration: none;
        -webkit-transition:all 0.2s linear;
        -moz-transition:all 0.2s linear;
        -o-transition:all 0.2s linear;
        transition:all 0.2s linear;
    }
    .nav-list li a:hover {
        -webkit-filter: brightness(1.3);
        padding-top: 80px ;
    } 
    #clientes {
    background:#00a8af
    }
    #pedidos {
    background:#00889c
    }
    #produtos {
    background:#007b9c
    }
    @media screen and (max-width: 480px) {
        .nav-container, .container {
            background:#4f6f8f
        }
        .nav-menu{
            color: #fff;
            float: left;
            display: block;
            padding: 10px 10px;
            cursor: pointer;
        }
        .nav-list{
            float: left; 
            width: 100%;
            height: 0;
        }
        .nav-open {
            height:auto
        }
        .nav-list li {
            width:100%
        }
        .nav-list li a {
            text-align: left;
        }
        .nav-list li a:hover {
            padding-left: 36%;
            padding-top: 30px;
        }
    }
    @media screen and (min-width: 481px) and (max-width: 768px) {
    .nav-container,.container {
        margin: 8% auto;
    }
    .nav-list li {
        float: left;
        width: 50%;
    }
    .nav-list li a:hover{
        padding-right: 40%;
        padding-top: 30px ;
     }
    }
    </style>

</head>
@section('style')
    <link href="/css/app.css" rel="stylesheet">
@show
    <body>
    <div class="container"> 
        <nav class="nav-bar">
                <a id="nav-menu" class="nav-menu">☰ Menu</a>
                <ul class="nav-list " id="nav">
                    <li> <a href="{{ route('clientes.index')}}" id="clientes"><i class="ion-ios7-people-outline"></i> Clientes</a></li> 
                    <li> <a href="" id="pedidos"><i class="ion-bag"></i> Pedidos</a></li>
                    <li> <a href="{{ route('produtos.index')}}" id="produtos"><i class="icon ion-ios7-briefcase-outline"></i> Produtos</a></li> 
                </ul>
        </nav>
    </div>
    @section('sidebar')

    @show

    <div class="container">
    @yield('content')
    </div>
    <div class="text-center footer">

        <h4>Mussum Ipsum</h4>
        <h4>cacilds vidis litro abertis</h4>
        <h4>Viva Forevis aptent</h4>
        <h4>inteiris. Atirei o pau no gatis, per gatis num morreus</h4>
        <h4>Não sou faixa preta cumpadi</h4>

    </div>
</body>

</html>
