@extends('layouts.app')
@section('title','Rules')
@section('content')


<div class="jumbotron card card-image mt-4 rare-wind-gradient">
<div class="text-white text-center py-5 px-4">

    <h1 class="display-4 font-bold">Rules</h1>
<br>
    <a href="rules/create" class="text-white btn btn-danger btn-sm"><i class="fas fa-plus left"></i> Create New Rule</a>


</div>
</div>


<div class="jumbotron jumbotron-fluid">


            @foreach($rules as $rule)
    

<h2>Rule</h2>
<h3>{{ $rule->rule }}</h3>

                    
<h2>More Info</h2>
<h3>{{ $rule->more_info }}</h3>
    
                            

<a href="{{route('rules.destroy',['id'=>$rule->id])}}"
                                class="text-white btn btn-danger btn-sm">Delete</a>
                @endforeach
            
</div>


@endsection