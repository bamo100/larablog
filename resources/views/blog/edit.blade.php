@extends('layouts.app')

@section('content')
   
   <div class="container">
        <h1 class="fs-1 fw-bold text-left my-4">
            Update Post
        </h1>
   </div>
  
   @if ($errors->any())
       <div class="m-auto mt-2">
           <ul class="list-unstyled fs-5">
               @foreach ($error->all() as $error)
                <li class="text-center mb-2 text-danger">
                    {{ $error }}
                </li>
               @endforeach
           </ul>
       </div>
   @endif
   
   <div class="container">
     <form action="/blog/{{ $post->slug }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input type="text" class="form-control fs-4" name="title" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <textarea class="form-control fs-4" name="description" rows="7">{{ $post->description }}
            </textarea>
        </div> 

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>  
@endsection