@extends('layouts.main')


@section('container')
<h1>Halaman About</h1>
<h1> {{ $name }} </h1>
<h3> {{ $email }}</h3>
<img src="img/{{ $image }}" alt="" width="200" class="img-thumbnail rounded-circle">


  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/{{ $image }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Adrian Athallah Madjid</h5>
          <p class="card-text">Email : drian.madjid@binus.ac.id</p>
        </div>
      </div>
    </div>
  </div>

<div class="row row-cols-1 row-cols-md-3  text-center">
    <div class="col">
        <div class="card">
          <div class="card-body">
            <img src="img/{{ $image }}" width="200" class=" img-thumbnail rounded-circle mb-4" alt="...">
            <h5 class="card-title">Muhammad Naufal Hidayat</h5>
            <h3 class="card-text">2502042776</h3>
            <p class="card-text">muhammad.hidayat018@binus.ac.id</p>
          </div>
        </div>
      </div>

    <div class="col">
        <div class="card">
          <div class="card-body">
            <img src="img/{{ $image }}" width="200" class=" img-thumbnail rounded-circle mb-4" alt="...">
            <h5 class="card-title">Muhammad Naufal Hidayat</h5>
            <h3 class="card-text">2502042776</h3>
            <p class="card-text">muhammad.hidayat018@binus.ac.id</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <div class="card-body">
            <img src="img/{{ $image }}" width="200" class=" img-thumbnail rounded-circle mb-4" alt="...">
            <h5 class="card-title">Muhammad Naufal Hidayat</h5>
            <h3 class="card-text">2502042776</h3>
            <p class="card-text">muhammad.hidayat018@binus.ac.id</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <div class="card-body">
            <img src="img/{{ $image }}" width="200" class=" img-thumbnail rounded-circle mb-4" alt="...">
            <h5 class="card-title">Muhammad Naufal Hidayat</h5>
            <h3 class="card-text">2502042776</h3>
            <p class="card-text">muhammad.hidayat018@binus.ac.id</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <img src="img/{{ $image }}" width="200" class=" img-thumbnail rounded-circle mb-4" alt="...">
            <h5 class="card-title">Muhammad Naufal Hidayat</h5>
            <h3 class="card-text">2502042776</h3>
            <p class="card-text">muhammad.hidayat018@binus.ac.id</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <img src="img/{{ $image }}" width="200" class=" img-thumbnail rounded-circle mb-4" alt="...">
            <h5 class="card-title">Muhammad Naufal Hidayat</h5>
            <h3 class="card-text">2502042776</h3>
            <p class="card-text">muhammad.hidayat018@binus.ac.id</p>
          </div>
        </div>
      </div>
</div>
  
    
@endsection

