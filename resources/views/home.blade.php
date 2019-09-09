@extends('layouts.app')

@section('content')
<div class="container px-5">
   <div class="row">
       <div class="col-3 p-5">
           <img class="rounded-circle" src="https://instagram.fmnl17-2.fna.fbcdn.net/vp/a7b84bbe144513b69e8ab96de4980e2b/5DD00725/t51.2885-19/s150x150/17438003_816856481799198_7190218489833979904_a.jpg?_nc_ht=instagram.fmnl17-2.fna.fbcdn.net" alt="">
       </div>
       <div class="col-9">
           <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="">Add New post</a>
           </div>
           <div class="d-flex">
               <div class="pr-5"><strong>200</strong> posts</div>
               <div class="pr-5"><strong>100</strong> Followers</div>
               <div class="pr-5"><strong>50</strong> Following</div>
           </div>
           <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
           <div>{{ $user->profile->description }}</div>
           <div><a href="#">{{ $user->profile->url }}</a></div>
       </div>
   </div> 

   <div class="row pt-4">
       <div class="col-4">
           <img src="https://instagram.fmnl17-2.fna.fbcdn.net/vp/c7295ce9df5d156f1c039a163d7e1e76/5DCFD20B/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/17661807_102407083638819_7934732705315422208_n.jpg?_nc_ht=instagram.fmnl17-2.fna.fbcdn.net" alt="" class="w-100">
       </div>
       <div class="col-4">
           <img src="https://instagram.fmnl17-2.fna.fbcdn.net/vp/c7295ce9df5d156f1c039a163d7e1e76/5DCFD20B/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/17661807_102407083638819_7934732705315422208_n.jpg?_nc_ht=instagram.fmnl17-2.fna.fbcdn.net" alt="" class="w-100">
       </div>
       <div class="col-4">
           <img src="https://instagram.fmnl17-2.fna.fbcdn.net/vp/c7295ce9df5d156f1c039a163d7e1e76/5DCFD20B/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/17661807_102407083638819_7934732705315422208_n.jpg?_nc_ht=instagram.fmnl17-2.fna.fbcdn.net" alt="" class="w-100">
       </div>
   </div>
</div>
@endsection
