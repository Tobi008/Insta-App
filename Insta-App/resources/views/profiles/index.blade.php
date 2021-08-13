@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2jc6Cp6pX8PeBwEdN85Yw851idArDbSujMw&usqp=CAU" class="rounded-circle w-100 " alt="">
        </div>
           <div class="col-9 pt-5">
               <div class="d-flex justify-content-between align-items-baseline">
                   <h1>{{$user->username}}</h1>
                   <a href="/p/create"> Add a Post </a>

                </div>
               <div class="d-flex">
               <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
               <div class="pr-5"><strong>23k</strong> Followers</div>
               <div class="pr-5"><strong>212</strong> Following</div>
                </div>

                <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
                <div>{{$user->profile->bio}}</div>
                <div><a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
           </div>
   </div>

   <div class="row pt-5">
      @foreach ( $user->posts as $post)
      <div class="col-4 pb-4">
         <a href="/p/{{$post->id}}">
            <img src= "/storage/{{$post->image}}" class="w-100">
         </a>
       </div>
      @endforeach
   </div>
</div>
@endsection
