@extends('layouts.app')

@section('content')

<div class="container">





    <br />
    <div class="panel panel-primary">
        <div class="panel-heading">


            all characters

        </div>
        <div class="panel-body">
            @foreach($characters as $character)
            <tr class="text-center">
                <td>{{ $character->character_name }} - {{$character->user->name}}<a href="character/{{ $character->id }}">Profile</a></td><hr>
                
                

            </tr>
            @endforeach
        </div>
    </div>
</div>
@endsection