@extends('layouts.app')

@section('content')
<div class='container'>
        <h1>Edit {{$notebook->name}}</h1>
  
    
    @if(count($errors)>0)
    
    <ul>
       
        @foreach($errors->all() as $error)
        <li class="alert alert-danger">{{$error}}</li>
        
        @endforeach
        
    </ul>
    
    @endif
    
    
    <form action='/notebooks/{{$notebook->id}}' method="post">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="form-group">
            <lable for="name">Notebook Name:</lable>
                <input type="text" class="form-control"  name='name' >
        </div>
                <input class="btn btn-primary" type="submit" value='Edit!'>

    
    </form>
</div>
@endsection