

@extends('frontpage.layout')
@section('content')
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
         <div>
         @foreach ($allpost as $sport)
         @if($loop->first)
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">{{$sport->categoryall->title}}</div>
            @endif
            @endforeach
        </div>
        <div class="owl-carousel owl-theme" id="slider3">
        @foreach ($allpost as $sport)
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="{{asset('images/'.$sport->image)}}" alt=""/></div>
                    <div>
                        <a href="{{ route('view', $sport->id)}}" class="d-block fh5co_small_post_heading"><span class="">{{ $sport->title }}</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i>  {{  date('jS F Y', strtotime($sport->created_at)) }}</div>
                    </div>
                </div>
            </div>
            @endforeach
         </div>
    </div>
</div>
            @endsection