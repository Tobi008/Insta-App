@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                 <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label">Title</label>
    
                                    <input id="title" 
                                    type="text" 
                                    class="form-control @error('title') is-invalid @enderror" 
                                    name="title"
                                    value="{{ old('title') ?? $user->profile->title}}" 
                                     autocomplete="title" autofocus>
    
                                    @if($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title')}}</strong>
                                        </span>
                                    @endif
                    </div>
                    <div class="form-group row">
                        <label for="bio" class="col-md-4 col-form-label">Bio</label>

                            <input id="bio" 
                            type="text" 
                            class="form-control @error('bio') is-invalid @enderror" 
                            name="bio"
                            value="{{ old('bio') ?? $user->profile->bio}}" 
                             autocomplete="bio" autofocus>

                            @if($errors->has('bio'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('bio')}}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label">Url</label>

                            <input id="url" 
                            type="text" 
                            class="form-control @error('url') is-invalid @enderror" 
                            name="url"
                            value="{{ old('url') ?? $user->profile->url}}" 
                             autocomplete="url" autofocus>

                            @if($errors->has('url'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('url')}}</strong>
                                </span>
                            @endif
            </div>
        
        
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label"> Profile Picture</label>

                        <input type="file" class="form-control-file" id="image" name="image">

                        @if($errors->has('image'))
                            <strong>{{ $errors->first('image')}}</strong>
                    @endif
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Save Profile </button>
                    </div>
            </div>
        </div>
    
    </form>


  </div>
@endsection
