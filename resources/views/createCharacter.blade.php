<!doctype html>
<html>

<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <br />
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Employee Details
            </div>
            <div class="panel-body">
                <form method="post" action="{{ route('character.store') }}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-md-4">first name</label>
                        <input type="text" class="form-control" name="first_name" />
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">last name</label>
                        <input type="text" class="form-control" name="last_name" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>