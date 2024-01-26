@extends('frontpage.layout')
@section('content')

<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
        @foreach ($singlepost as $sp)
            <div class="fh5co_suceefh5co_height"><img src="{{ asset('images/'.$sp->image) }}" alt="img"/>
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
            <h4>{{$sp->categoryall->title}}</h4>  
                    <div class="">
                    
                        <a href="{{ route('view', $sp->id)}}" class="color_fff"> {{ $sp->title }}
                    <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{  date('jS F Y', strtotime($sp->created_at)) }}
                    </a></div>
                    <div class=""><a href="{{ route('view', $sp->id)}}" class="fh5co_good_font">{{ $sp->title }} </a></div>
                </div>
            </div>
        @endforeach
        </div>
        <div class="col-md-6">
            <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="{{ asset('images/'.$post->image) }}" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"><p>{{$post->categoryall->title}}</p></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><br><a href="{{ route('view', $post->id)}}" class="color_fff">
             <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{  date('jS F Y', strtotime($post->created_at)) }} 
                    </a></div>
                            <div class=""><a href="{{ route('view', $post->id)}}" class="fh5co_good_font_2"> {{ $post->title }} </a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
         
</div>
</div>
</div>



<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"> Latest News</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
        @foreach ($news as $new)
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="{{ asset('images/'.$new->image) }}"  alt=""/></div>
                    <div>
                        <a href="{{ route('view', $new->id)}}" class="d-block fh5co_small_post_heading"><span class="">{{ $new->title }}</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{  date('jS F Y', strtotime($new->created_at)) }}</div>
                    </div>
                </div>
         </div>
            @endforeach
        </div>
      
    </div>
</div>


<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
        @foreach ($local as $trend)
        @if($loop->first)
      
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">{{ $trend->categoryall->title }}</div>
            @endif
            @endforeach
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
        @foreach ($local as $trend)
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="{{ asset('images/'.$trend->image) }}"  alt=""
                                                           class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="{{ route('view', $trend->id)}}" class="text-white"> {{ $trend->title }}</a>
                        <div class="fh5co_latest_trading_date_and_name_color"> {{  date('jS F Y', strtotime($trend->created_at)) }}</div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>

<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
         <div>
         @foreach ($sports as $sport)
         @if($loop->first)
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">{{$sport->categoryall->title}}</div>
            @endif
            @endforeach
        </div>
        <div class="owl-carousel owl-theme" id="slider3">
        @foreach ($sports as $sport)
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


