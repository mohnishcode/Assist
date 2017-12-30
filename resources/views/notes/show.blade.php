@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumborton">
    <div class="row">
        
        <h3 class="display-3">
        
            {{$note->title}}
        </h3>
        <div class="col-sm-8"> 
        
        {{$note->body}}
        
            </div>
    </div>
        </div>
</div>

@endsection