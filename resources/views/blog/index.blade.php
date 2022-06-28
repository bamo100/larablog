@extends('layouts.app')

@section('content')
   <h1 class="fs-1 fw-bold text-center mt-4">
       Blog Post
   </h1>

   @if (session()->has('message'))
       <div class="m-auto mt-3 w-25 p-3">
           <p class="text-white bg-primary text-center fs-5">
               {{ session()->get('message') }}
           </p>
       </div>
   @endif
    
   @if (Auth::check())
    <div class="container">
            <a class="btn btn-lg btn-primary" href="/blog/create" role="button">
                Create post
            </a>
    </div>
   @endif
   
   @foreach ($posts as $post)
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('images/' . $post->image_path) }}" alt="blog image" width="450px" height="350px">
                </div>
                <div class="col-lg-6 m-auto">
                    <h2 class="fw-bolder fs-2">{{ $post->title }}</h2>

                    <p class="py-2 fs-5">
                        By <b class="fst-italic">{{ $post->user->name }}</b>,
                        Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                    </p>

                    <p class="fw-bold fs-6">
                        {{ $post->description }}
                    </p>

                    <a class="btn btn-lg btn-primary" href="/blog/{{ $post->slug }}" role="button">
                        KEEP READING
                    </a>

                    @if (isset(Auth::user()->id)&& Auth::user()->id ==
                    $post->user_id)
                        
                        <span class="text-left">
                            <a href="/blog/{{ $post->slug }}/edit" class="text-dark fs-5">
                                Edit
                             </a>
                        </span>

                        <span class="text-left">
                            <form action="/blog/{{ $post->slug }}" method="POST">
                                @csrf
                                @method('delete')

                                <a class="btn btn-danger text-white" href="/blog/{{ $post->slug }}" role="button">
                                    Delete
                                </a>
                            </form>
                        </span>
                        
                    @endif
                </div>
            </div>
        </div>
   @endforeach
@endsection