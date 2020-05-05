@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/messages">Messages @include('messenger.unread-count')</a></li>
                        <li><a href="/messages/create">Create New Message</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection