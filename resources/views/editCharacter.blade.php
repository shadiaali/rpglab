
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit {{$character->character_name}}</div>

                <div class="card-body">
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
    Why would you try to edit a character that doesn't belong to you?
    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection