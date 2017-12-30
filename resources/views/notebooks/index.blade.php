<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                NoteBook App
            </title>
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
           <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Notebook
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                    <img src='/uploads/avatars/{{Auth::user()->avatar}}' style="position:absolute; left:10px; border-radius:50%; width:32px; height:32px;">
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
                </div>
            </div>
        </nav>
            <!-- /navbar -->
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left" >
                    Your Notebooks
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="/notebooks/create" role="button">
                        New NoteBook +
                    </a>
                </div>

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Notebooks==================== -->
                <!-- notebook1 -->
                
                @foreach($notebook as $notebooks)
                <div class="col-sm-6 col-md-3">
                    <!--<div class="card">-->
                        <div class="card-block">
                            <a href="{{route('notebooks.show',$notebooks->id)}}">
                                <h4 class="card-title">
                                   {{$notebooks->name}}
                                </h4>
                            </a>
                        </div>
                        <a href="#">
                            <img alt="Responsive image" class="img-fluid" src="dist/img/notebook.jpg"/>
                        </a>
                        <div class="card-block">
                            <a class="card-title " href="{{route('notebooks.edit',$notebooks->id)}}">
                                <i class="fa fa-pencil-square-o fa-lgx" aria-hidden="true">Edit</i>
                            </a>
                            <form action="/notebooks/{{$notebooks->id}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                               
                                <input class="btn btn-sm btn-danger pull-xs-right" type="submit" value="Delete"/>
                               
                                
                            </form>
                        </div>
                    <!--</div>-->
                </div>
                @endforeach
                                </div>
                
                </div>
            </div>
            <!-- /container -->
            <script src="dist/js/jquery3.min.js">
            </script>
            <script src="dist/js/bootstrap.js">
            </script>
        </div>
    </body>
</html>