@extends('layouts.app')

@section('content')
<div class="container">


<a href="addcharacter">Add A Character</a>


    <br />
    <div class="panel panel-primary">
        <div class="panel-heading">
<br>
@foreach(Auth::user()->characters as $character)
<tr class="text-center">
    <td>{{ $character->id }}</td>
    <td>{{ $character->character_name }}</td>


</tr>
@endforeach
        </div></div></div>
@endsection