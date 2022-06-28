@extends('layouts.app')

@section('content')
    <div class="bag-image text-white d-flex aligns-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center flex-column">
            <h1 class="mb-3 fw-bolder">
                Do You Want to Become a Developer?
            </h1>
            <a class="btn btn-lg btn-primary" href="/blog" role="button">Read More</a>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <img src="../bg.jpeg" alt="blog image" width="450px" height="350px">
            </div>
            <div class="col-lg-6 m-auto">
               <h2 class="fw-bolder fs-3">Struggling to be a better Web Developer?</h2>

               <p class="py-2 fs-5">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente illum, error nam ratione doloribus magnam.
               </p>

               <p class="fw-bold fs-6">
                   Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam error incidunt corporis nostrum veritatis, facere odit tempore rerum nobis debitis nihil atque nisi cupiditate voluptatem nulla esse id.
               </p>

               <a class="btn btn-lg btn-primary" href="/blog" role="button">
                  Read More
               </a>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-center py-4 text-light d-flex flex-column">
        <h2>
            I am an Expert in.....
        </h2>
        <span class="fs-5 fw-bold">
            UX Design
        </span>
        <span class="fs-5 fw-bold">
            Project Management
        </span>
        <span class="fs-5 fw-bold">
            Backend Development
        </span>
    </div>
      
     <div class="text-center container-fluid py-5">
         <h5 class="fs-6">Blog</h5>
         <h3 class="fs-4">Recent Post</h3>
         <p class="fs-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis placeat maiores itaque cum officiis eum magnam incidunt sint hic pariatur!</p>
     </div>
@endsection