@extends('layouts.app')

@section('content')
<div class="container">





    <br />
    <div class="panel panel-primary">
        <div class="panel-heading">




            
        </div>
        <div class="panel-body">
        <form method="post" action="{{ route('character.store') }}">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-md-4">first name</label>
                    <input type="text" class="form-control" name="character_name" />
                </div>
               
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection