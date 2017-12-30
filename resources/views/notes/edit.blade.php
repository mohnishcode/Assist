@extends('layouts.app')

@section('content')
<div class='container'>
        <h1>Edit Notes</h1>
  
    <form action="{{route('notes.update',$note->id)}}" method="post">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="form-group">
            <lable for="title">Note Title:</lable>
                <input class="form-control" type='text' name='title'>
        </div>
        
        <div class="form-group">
            <lable for="body">Note body:</lable>
                <input class="form-control" type='text' name='body'>
        </div>
        
               
                <input class="btn btn-primary" type="submit" value='Done'>

    
    </form>
</div>
@endsection