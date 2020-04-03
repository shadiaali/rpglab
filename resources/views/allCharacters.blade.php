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
                <td>{{ $character->id }}</td>
                <td>{{ $character->first_name }}</td>


            </tr>
            @endforeach
        </div>
    </div>
</div>
@endsection