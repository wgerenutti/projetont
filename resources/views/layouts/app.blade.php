<html>

<head><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Crud básico NT</title>
    @stack('app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">    
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <style>
      /* * {
            border:1px solid red;
        } */

        .navbar .navbar-nav .nav-link > .fa {
            display: block;
            text-align: center;
            padding: 30px;
            transition: 0.5s;
        }

        .navbar .navbar-collapse {
            text-align: center;
        }

        .nav-item a {
            background-color: #00a8af;
            
        }
        .navbar .navbar-nav .nav-link .fa:hover {
            margin-bottom: -15px;
        }

        .content {
            height: 100vh;
        }

        .footer {
            text-align: center;
            background-color: teal;
        }
    </style>

</head>
@section('style')
    <link href="/css/app.css" rel="stylesheet">
@show
    <body>
    <div class="container"> 
    <nav class="navbar navbar-expand-lg navbar-light">            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span>☰ Menu</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('clientes.index')}}">
                            <i class="fa fa-3x fa-users" aria-hidden="true"></i>
                            Clientes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pedidos.index')}}">
                            <i class="fa fa-3x fa-shopping-bag" aria-hidden="true"></i> 
                            Pedidos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('produtos.index')}}">
                        <i class="fa fa-3x fa-briefcase" aria-hidden="true"></i> 
                        Produtos
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    @section('sidebar')

    @show

    <div class="container">
    @yield('content')
    </div>
    </br>
    <div class="footer">
        <h4>Mussum Ipsum</h4>
        <h4>cacilds vidis litro abertis</h4>
    </div>

    <!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
