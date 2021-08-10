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
                   <a href=""> Add a Post </a>

                </div>
               <div class="d-flex">
               <div class="pr-5"><strong>153</strong> posts</div>
               <div class="pr-5"><strong>23k</strong> Followers</div>
               <div class="pr-5"><strong>212</strong> Following</div>
                </div>

                <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
                <div>{{$user->profile->bio}}</div>
                <div><a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
           </div>
   </div>

   <div class="row pt-5">
       <div class="col-4">
        <img src="https://i.pinimg.com/originals/30/2b/f8/302bf8c7124220acc03e17fbaaf3c47b.jpg" class="w-100">
       </div>
       <div class="col-4">
        <img src="https://images.unsplash.com/photo-1537432376769-00f5c2f4c8d2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZ3JhbW1pbmd8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" class="w-100">
       </div>
       <div class="col-4">
        <img src="https://res.cloudinary.com/practicaldev/image/fetch/s--__El_3m5--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/i/64589gqyn00oxrai14gp.jpg" class="w-100">
       </div>
   </div>
</div>
@endsection
