@extends('layouts.app')

@section('content')

<div class="container">
<br />
    <div class="panel panel-primary">
        <div class="panel-heading">


            all awards

        </div>
        <div class="panel-body">
            @foreach($awards as $award)
            <tr class="text-center">
                <td>{{ $award->filename }} - <hr>
                
            </tr>
            @endforeach
        </div>
    </div>
</div>
@endsection