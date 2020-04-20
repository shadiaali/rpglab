@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Character Dashboard </div>
                <p class="text-right"><a class="text-white btn btn-lg btn-yellow" href="addcharacter" role="button">Create A Character</a>
                    
                    <a class="text-white btn btn-lg btn-light-blue" href="characters" role="button">Character Directory</a></p>
                <div class="card-body">
                    
                    
                    
            
            <section class="p-md-3 mx-md-5 text-center">
                    <h4>My Characters</h4>
                    <div class="row">

                        @foreach(Auth::user()->characters as $character)
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
<div class="p-4">
<div class="avatar w-100 white d-flex justify-content-center align-items-center">
    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="img-fluid rounded-circle z-depth-1"/>
        </div>
    <div class="text-center mt-3">
    <h6 class="font-weight-bold pt-2"><a href="character/{{ $character->id }}">{{ $character->character_name }}</a></h6><span><a class="text-white btn btn-block btn-primary" href="character/{{ $character->id }}/edit" role="button">Edit This Character</a></span>
    </div>
    </div>
    </div>
    @endforeach
            


                        </div>
                        </section>
                    






                </div>
            </div>
        </div>
    </div>
</div>
@endsection