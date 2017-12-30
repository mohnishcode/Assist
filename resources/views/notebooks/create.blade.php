@extends('layouts.app')

@section('content')
<div class='container'>
        <h1>Create Notebook</h1>

     @if(count($errors)>0)
    
    <ul>
       
        @foreach($errors->all() as $error)
        <li class="alert alert-danger">{{$error}}</li>
        
        @endforeach
        
    </ul>
    
    @endif
    
    <form action='/notebooks' method="post">
        {{csrf_field()}}
        <div class="form-group">
            <lable for="name">Notebook Name:</lable>
                <input class="form-control" type='text' name='name'>
        </div>
                <input class="btn btn-primary" type="submit" value='Done'>

    
    </form>
</div>
@endsection