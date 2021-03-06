@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">send award</div>

                <div class="card-body">
                    
                    <form method="post" enctype="multipart/form-data" action="{{ route('award.store') }}">
                        {{csrf_field()}}
                
                        <div class="form-group">
                
               



                        <select name="character_id" required
                        id="character_id">
                        <option value="option_select" disabled selected>characters</option>
                        @foreach($characters as $character)
                        <option value="{{ $character->id }}"
                            {{$character->id  ? 'selected' : ''}}>
                            {{ $character->character_name}}</option>
                        @endforeach
                    </select>

</div>
<div class="form-group">
    <input type="file" class="form-control" name="filename"/>

    </div>
    
                        <button type = "submit" class = "btn btn-success">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection