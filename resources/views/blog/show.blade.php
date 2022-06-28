@extends('layouts.app')

@section('content')
   
   <div class="container">
        <h1 class="fs-1 fw-bold text-left my-4">
            {{ $post->title }}
        </h1>
   </div>

   
   <div class="container">
       <div class="m-auto w-75">
            <p class="py-2 fs-5">
                By <b class="fst-italic">{{ $post->user->name }}</b>,
                Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </p>

            <p class="fw-bold fs-6">
                {{ $post->description }}
            </p>
       </div>
   </div>
@endsection