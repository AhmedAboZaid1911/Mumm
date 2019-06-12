@extends('layouts.app')
@section('content')
  <!-- Product grid -->
    <div class="w3-row w3-grayscale" style="text-align: center;">
        <P style="text-align: center;"> <b> Random Categories</b></P>
        @foreach ($categories as $category)
        <div class="w3-col l3 s6">
            <div class="w3-container" style="text-align: center;">
                <p><b><a href="{{ url('/categories/')}}/{{$category->id}}">{{ $category->title }}</a></b>  </p>
                <p><b>{{ $category->desc }}</b></p>
                <a href="{{ url('/categories/')}}/{{$category->id}}" style="background: black;color: white;padding:10px;margin:10px">
                    Watch
                </a>
            </div>
        </div>
        @endforeach
        <a ></a>
    </div>
    <br>
    <hr>
    <div class="w3-row w3-grayscale" style="text-align: center;">
        <p style="text-align: center;"><b> Random Posts </b></p>
        @foreach ($posts as $post)
        <div class="w3-col l3 s6" style="padding:10px">
            <div class="w3-container" style="text-align: center;">
                <p><b><a href="{{ url('/categories/')}}/{{$post->category->id}}//{{$post->id}}">{{ $post->title }}</a></b>  </p>
                <p><b>{{ $post->desc }}</b></p>
                <a href="{{ url('/categories/')}}/{{$post->category->id}}/{{$post->id}}" style="background: black;color: white;padding:10px;margin:10px">
                    Watch
                </a>
            </div>
        </div>
        @endforeach
    </div>
  <!-- Footer -->
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.linkedin.com/in/ahmed-abo-zaid/" target="_blank"  class="w3-hover-opacity">Ahmed Abo Zaid</a></div>
  <!-- End page content -->
</div>
@endsection
