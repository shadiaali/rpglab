@extends('layouts.app')
@section('title','Create Employee')
@section('content')
<div class="jumbotron card card-image mt-4 rare-wind-gradient wow fadeInRight">
<div class="row mt-5">
    <div class="wow fadeInRight col-sm-8 offset-sm-2 "><h1 class="display-4 fadeInRight text-white">Create New Rule</h1>
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
    </form><br><hr>
    <div class="container justify-content-center text-center"><a onclick="goBack()" class="text-white btn spring-warmth-gradient btn-lg"> Go back</a><div>
</div>
<script>
function goBack() {
window.history.back();
}
</script>
    </div>
</div></div>
@endsection