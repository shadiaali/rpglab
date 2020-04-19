@extends('layouts.app')

@section('content')
<div class="container">
<br />
    <div class="panel panel-primary">
        <div class="panel-heading">

        add category
            
            <hr>
        </div>


        <div class="panel-body">
        <form method="post" action="{{ route('category.store') }}">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-md-4">parent ID</label>
                    <input type="text" class="form-control" name="parent_id" />
                </div>

                <div class="form-group">
                    <label class="col-md-4">order</label>
                    <input type="text" class="form-control" name="order" />
                </div>

                <div class="form-group">
                    <label class="col-md-4">name</label>
                    <input type="text" class="form-control" name="name" />
                </div>

                <div class="form-group">
                    <label class="col-md-4">colour</label>
                    <input type="text" class="form-control" name="color" />
                </div>

                <div class="form-group">
                    <label class="col-md-4">slug</label>
                    <input type="text" class="form-control" name="slug" />
                </div>

               
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection