<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NoteBook App</title>
    <link rel="stylesheet" href="dist/css/main.css">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
</head>
         <link href="dist/css/main.css" rel="stylesheet"></link>
                <link href="dist/css/bootstrap.css" rel="stylesheet">
                
            </link>
<link href="{{asset('font-awesome-4.7.0/css/font-awesome.css')}}" rel="stylesheet">
                </link>
<link href="dist/css/main.css" rel="stylesheet"></link>
                <link href="dist/css/bootstrap.css" rel="stylesheet">
                
            </link>

               <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </meta>
    </head>
<style>
.card-title{
    font-size: 17px;
}
</style>
<body>
    <div class="container-fluid">
        <nav class="navbar  navbar-dark bg-primary">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
                &#9776;
            </button>
            <div class="collapse navbar-toggleable-xs" id="navbar-header">
                <a class="navbar-brand" href="#">NoteBook App</a>
            </div>
              <!-- Right Side Of Navbar -->
                    <ul class="dropdown">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        <a href="{{url('/profile')}}"><i class="fa fa-btn fa-user"></i>
                                            
                                           Profile
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    
                    </ul>
          
        </nav>
        <!-- /navbar -->
        <!-- Main component for call to action -->
        <div class="jumbotron">
            <h1>Notebook</h1>
            <p>Store and organise your thoughts in notebook and NoteBook web app makes this easier than ever</p>
            <p>
                <a class="btn btn-lg btn-primary" href="/notebooks" role="button">Your NoteBooks</a>
            </p>
        </div>
    </div>
    <!-- /container -->

    <script src="dist/js/jquery3.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
</body>

</html>
