@extends('layouts.app')

@section('content')
<div class="container">
    
    @if(auth()->user()->id == $character->user_id)
    <form action="{{route('character.update')}}" method = "post">
        @csrf
        
        
        <div class="form-group">

            <input type="hidden" name="id" value = "{{$character->id}}">

        <input type="text" name = "character_name" id = "character_name" class="form-control" required value = "{{$character->character_name}}">
        </div>
        
        
        <button type = "submit" class = "btn btn-success">Submit</button>
    </form><br><hr>
    @else
    @endif
    No hoe
    
    <div class="container justify-content-center text-center"><a onclick="goBack()" class="text-white btn spring-warmth-gradient btn-lg"> Go back</a><div>
</div>


</div>
@endsection