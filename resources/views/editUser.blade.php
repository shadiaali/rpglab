@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{$user->name}}'s Author Account</div>

                <div class="card-body">
                    

<div class="form-group wow fadeInRight md-form md-bg form-lg">
<div class="row ">
<div class="col-sm-8 offset-sm-2">
 <form action="{{route('user.update')}}" method = "post">
                                @csrf
                        
                                
<div class="form-group">
                        
<input type="text" name = "name" id = "name" class="form-control" required value = "{{$user->name}}">
    
                                

    </div>
                                
                                <button type = "submit" class = "btn btn-success">Submit</button>
                            </form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection