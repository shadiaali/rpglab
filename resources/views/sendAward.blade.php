@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">send award</div>

                <div class="card-body">
                    
                    <form method="post" action="{{ route('award.store') }}">
                        {{csrf_field()}}
                
                        <div class="form-group">
                
                <div class="form-group">
                <label class="col-md-4">file</label>
                <input type="text" class="form-control" name="filename" />
                </div>



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
                        
                        <button type = "submit" class = "btn btn-success">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection