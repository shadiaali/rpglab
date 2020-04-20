@extends('layouts.app')
@section('title','Create Employee')
@section('content')
<div class="card">

    <div class="card-header"><h6>Create New Rule</h6></div>
<div class="card-body">

    <form class="action="{{route('rules.store')}} method = "post">
        @csrf
        
        
        <div class="form-group wow fadeInRight md-form md-bg form-lg">
        <label for="rule">Rule:</label>
        <input type="text" name = "rule" id = "rule" class="form-control form-control-lg" required>
        </div>
        <div class="form-group wow fadeInRight md-form md-bg form-lg">
        <label for="lastname">More Info:</label>
        <input type="text" name = "more_info" id = "more_info" class="form-control form-control-lg">
        </div>
        
        
        <button type = "submit" class = "btn btn-success">Submit</button>
    </form>

</div>
</div>


@endsection