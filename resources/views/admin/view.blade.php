
@extends('dashboard.layout')

@section('content')



<div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{ $post->title}}</h4>
                  <p class="card-description">
                    {{$post->subtitle}}
                  </p>
                  <img class="w-50" src="{{ asset('images/'.$post->image) }}" alt="">
                  <p class="card-description">
                    {{$post->caption}}
                  </p>
                  <p>
                 {!! $post->description !!}
                  </p>
                  <p>{{ $post->author}}</p>
                </div>
              </div>


  @endsection

  