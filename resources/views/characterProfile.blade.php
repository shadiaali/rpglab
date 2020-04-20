@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ $character->character_name }}'s Profile</div>

                <div class="card-body">
                    
                    <div class="card">
                        <div class="card-header">
                            Awards</div>
                            <div class="card-body">
                                @foreach ( $character->awards as $award )
<li><img src="{{URL::asset('/storage')}}/{{$award->filename}}" class="img-fluid rounded-circle"/></li>
@endforeach
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection