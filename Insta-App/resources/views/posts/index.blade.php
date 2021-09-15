@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($post as $post)
    <div class=" col-6 offset-3 d-flex align-items-center">
        <div class=" pr-3 pt-2">
            <img src="{{$post->user->profile->DefaultImage()}}" class="rounded-circle w-100" style="max-width:50px;">
        </div>

        <div>
            <div class="font-weight-bold">
                <a href="/profile/{{$post->user->id}}">
                    <span class="text-dark"> {{$post->user->username}}</span>
                </a>
                <a href="#" class="pl-3"> Follow </a>
            </div>
        </div>
    </div>
    <hr>
    
    <div class="row">
        <div class="col-6 offset-3 pb-2">
            <a href="/profile/{{$post->user->id}}">
                <img src="/storage/{{$post->image}}" class="w-100">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <div>
                <p><span class="font-weight-bold"> 
                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-dark">{{$post->user->username}}</span>
                    </a></span> {{$post->caption}}</p>
            </div>
        </div>
    </div>
    

    @endforeach
    </div>
@endsection
