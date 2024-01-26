
@extends('frontpage.layout')
@section('content')
<div id="fh5co-title-box" style="background-image: url( {{ asset('images/'.$post->image) }} )" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="page-title"> 
        <span>{{  date('jS F Y', strtotime($post->created_at)) }}</span>
        <h4 class="text-white">{{$post->caption}}</h4>
    </div>
</div>
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
@foreach ($post->category as $categorypost)
      <h4 class=>{{$categorypost->title}}</h4>  
        @endforeach
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
              <h2>{{ $post->title}}</h2>
                <p>
                 {{$post->subtitle}}
                </p>
                <p>
                 {{$post->description}}
                </p>
                <p>
                {{$post->author}}
                </p>
                
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <a href="#" class="fh5co_tagg">Business</a>
                    <a href="#" class="fh5co_tagg">Technology</a>
                    <a href="#" class="fh5co_tagg">Sport</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                    <a href="#" class="fh5co_tagg">Photography</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Education</a>
                    <a href="#" class="fh5co_tagg">Social</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                </div>
                <div class="row pb-3">
                @foreach ($news as $new)
                    <div class="col-5 align-self-center">
                        <img src="{{ asset('images/'.$new->image)}}" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font">  <a href="{{ route('view', $new->id)}}">{{$new->title}}</a></div>
                        <div class="most_fh5co_treding_font_123">{{  date('jS F Y', strtotime($new->created_at)) }} </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
            @endsection