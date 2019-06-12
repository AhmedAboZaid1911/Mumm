@extends('layouts.app')
@section('content')
  <!-- Product grid -->
    <div class="w3-row w3-grayscale">
        <P> <b>{{$category->title}}</b>
            <br>
            {{$category->title}}
        </P>
        @foreach ($posts as $post )
        <div class="w3-col l3 s6" style="padding:10px">
            <div class="w3-container" style="text-align: center;">
                <p><b><a href="{{ url('/products/')}}/{{$post->id}}">{{ $post->title }}</a></b>  </p>
                <p><b>{{ $post->desc }}</b></p>
                <a href="{{ url('/categories/')}}/{{$category->id}}/{{$post->id}}" style="background: black;color: white;padding:10px;margin:10px">Watch</a>
            </div>
            <hr>
        </div>
        @endforeach
        <a ></a>
    </div>
  <!-- Footer -->
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.linkedin.com/in/ahmed-abo-zaid/" target="_blank"  class="w3-hover-opacity">Ahmed Abo Zaid</a></div>
  <!-- End page content -->
</div>
@endsection
