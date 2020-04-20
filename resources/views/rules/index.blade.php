@extends('layouts.app')
@section('title','Rules')
@section('content')


<div class="jumbotron card card-image cloudy-knoxville-gradient">
<div class="text-center">

    <h1 class="display-4 font-bold">Rules</h1>

    @role('admin')
<br>
    <a href="rules/create" class="text-white btn btn-danger btn-sm"><i class="fas fa-plus left"></i> Create New Rule</a>
    @endrole

</div>
</div>



<div class="container">
            @foreach($rules as $rule)
    


<div class="card">
    <div class="card-header">
        {{ $rule->rule }}</div>
        <div class="card-body">
            {{ $rule->more_info }}
        </div>
</div>
                    
    
                            
@role('admin')
<a href="{{route('rules.destroy',['id'=>$rule->id])}}"
                                class="text-white btn btn-danger btn-sm">Delete</a>

                                @endrole
                @endforeach
            
</div>

@endsection