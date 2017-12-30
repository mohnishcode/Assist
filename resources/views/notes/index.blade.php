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
            <link href="{{asset('dist/css/main.css')}}" rel="stylesheet">
                <link href="{{asset('dist/css/bootstrap.css')}}" rel="stylesheet">
                </link>
              <link href="{{asset('font-awesome-4.7.0/css/font-awesome.css')}}" rel="stylesheet">
                </link>
            </link>
        </meta>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            <div class="container">
                <h1 class="pull-xs-left">
                    Notes
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('notes.createnote',$notebook->id)}}" role="button">
                        New Note +
                    </a>
                </div>
                <div class="clearfix">
                </div>
                <!--============= notes=========== -->
                <div class="list-group notes-group">

                    <!--note1 -->
                    @foreach($notes as $note)
                    <div class="card card-block">
                       
                        
                            <h4 class="card-title">
                              <i class="fa fa-cog fa-spin fa-lg fa-fw"></i>&nbsp; 
                                <a href="{{route('notes.show',$note->id)}}">
                                {{$note->title}}
                                </a>
                                    </h4>
                        
                        <p class="card-text">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$note->body}}
                        </p><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="btn-group">
                          
                        <a class="btn btn-sm btn-info pull-xs-left" href="{{route('notes.edit',$note->id)}}">
                            <i class="fa fa-pencil "></i> Edit
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <!--<a class="btn btn-success pull-xs-center" href="{{route('notes.pdf',$note->id)}}"  >Download</a>-->
                        <a  href="{{route('notes.pdf',$note->id)}}"  >
                            <i class="fa fa-download fa-2x" data-placement="top" title="Download!" aria-hidden="true" ></i>
                        </a>
                </div>        
                        
                        <form action="{{route('notes.destroy',$note->id)}}" class="pull-xs-right" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                                                    

                            <input class="btn btn-sm btn-danger" data-placement="top" title="Are u sure!" type="submit" value="Delete">
                                       
                        </form>
                    </div>
                    @endforeach
                        
                </div>
            </div>
            <!-- /container -->
            <script src="{{asset('dist/js/jquery3.min.js')}}">
            </script>
            <script src="{{asset('dist/js/bootstrap.js')}}">
            </script>
        </div>
    </body>
</html>
