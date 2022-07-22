@extends('layouts.app-master')

@section('content')
     <div class="bg-light p-4 rounded">
       @auth
       
       <h1>Homepage</h1>
       <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, tempore!</p>
       @endauth
       
       @guest
        <h1>Halaman Awal</h1>
        <h5>Welcome Guest</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed rerum, necessitatibus quibusdam ab, et debitis aut in soluta unde error laudantium labore voluptatum tenetur architecto.</p>
       @endguest
     </div>
@endsection