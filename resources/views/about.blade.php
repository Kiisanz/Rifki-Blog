@extends('layouts.main')

@section('container')


<section class="jumbotron text-center">
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
   <h1 class="display-4">{{ $name }}</h1>
   <p>{{ $email }}</p>
   <p class="lead">Programmer | Video Editor</p>

   <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>About Me</h2>
      </div>
    </div>
    <div class="row justify-content-center fs-5 text-center">
      <div class="col-5-md-4">
        <p>Hello my name is Mochamad Rifki Maulana I am a beginner programmer I am 16 years old I live in Kuningan, West Java, Indonesia </p>
      </div>
      <div class="col-5-md-4">
        <p>My hobbies are reading and writing. I am also a founder of an editor group, namely kyystudio which has 5 members.</p>
      </div>
      </div>
    </div>
  </div>

  <div clss="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>My Projects</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 mb-3 ms-4 me-4">
        <div class="card">
          <img src="img/projects/1/2/73dMze.png" class="card-img-top" alt="Project Game" />
          <div class="card-body">
            <p class="card-text text-center">This is my first project, which is a project to make a game called Flappy Birdie Game.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3 ms-4 me-4">
        <div class="card">
          <img src="img/projects/Rekomendasi-Aplikasi-Edit-Video-Youtube-di-Laptop-2021.jpg" class="card-img-top" alt="Project Editor Video" />
          <div class="card-body">
            <p class="card-text text-center">This is my Video editor project because I am a video editor too.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- <h1>Halaman About</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p> --}}
{{-- <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle"> --}}
@endsection


