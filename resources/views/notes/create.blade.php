@extends('layouts.app')

@section('content')
<div class='container'>
        <h1>Create Notes</h1>
    
    @if(count($errors)>0)
    
    <ul>
       
        @foreach($errors->all() as $error)
        <li class="alert alert-danger">{{$error}}</li>
        
        @endforeach
        
    </ul>
    
    @endif
  
    <form action="{{route('notes.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <lable for="title">Note Title:</lable>
                <input class="form-control" type='text' name='title'>
        </div>
        
        <div class="form-group">
            <lable for="body">Note body:</lable>
                <input class="form-control" type='text' name='body'>
        </div>
        
                <input type="hidden" name="notebook_id" value="{{$id}}">
                <input class="btn btn-primary" type="submit" value='Done'>

    
    </form>
</div>
@endsection