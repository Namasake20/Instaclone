@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="https://image.shutterstock.com/image-photo/kazan-russia-october-27-2016-260nw-506008927.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user ->username}}</h1>
            <a href="/p/create">Add New Post</a>
        </div>
        <div class="d-flex">
        <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
        <div class="pr-5"><strong>50k</strong> followers</div>
        <div class="pr-5"><strong>300</strong> following</div>
        
        </div>
        <div class="pt-4">{{$user->profile}}</div>
        <div>{{$user->profile}}</div>
        <div><a href="#">{{$user->profile}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
    <div class="col-4">
    <img  src="https://images.unsplash.com/photo-1616349871090-7f3fe2d01c90?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDN8NnNNVmpUTFNrZVF8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-100">
    </div>
    <div class="col-4">
    <img src="https://images.unsplash.com/photo-1631778890260-2be2609eb9ec?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDF8NnNNVmpUTFNrZVF8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-100">
    </div>
    <div class="col-4">
    <img src="https://images.unsplash.com/photo-1563769874036-8f569cb59d30?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDZ8NnNNVmpUTFNrZVF8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-100">
    </div>
    </div>
</div>
@endsection
