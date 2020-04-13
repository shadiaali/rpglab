@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit</div>

                

                <div class="jumbotron card card-image mt-4 rare-wind-gradient wow fadeInRight"><div class="form-group wow fadeInRight md-form md-bg form-lg">
                    <div class="row ">
                        <div class="col-sm-8 offset-sm-2"><h1 class="text-white display-4">Edit Employee</h1><br>
                        <form action="{{route('user.update')}}" method = "post">
                            @csrf
                    
                            

                            <div class="form-group">
                    
                            <input type="text" name = "name" id = "name" class="form-control" required value = "{{$user->name}}">

                            

                          


                            <select name="character_id" required
                            id="character_id">
                            <option value="option_select" disabled selected>My characters</option>
                            @foreach(Auth::user()->characters as $character)
                            <option value="{{ $character->id }}"
                                {{Auth::user()->character_id == $character->id  ? 'selected' : ''}}>
                                {{ $character->character_name}}</option>
                            @endforeach
                        </select>


                        
                        
                   


                        

                            </div>
                            
                            <button type = "submit" class = "btn btn-success">Submit</button>
                        </form><br><hr>
                        <div class="container justify-content-center text-center"><a onclick="goBack()" class="text-white btn spring-warmth-gradient btn-lg"> Go back</a><div>
                    </div>
                    







            </div>
        </div>
    </div>
</div>
@endsection