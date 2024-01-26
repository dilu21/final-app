<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5"><img src="{{asset ('droid/logodroid.png')}}" alt="img" class="footer_logo"/></div>
            <div class="clearfix"></div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="footer_main_title py-3"> About</div>
                <div class="footer_sub_about pb-3"> 
A news portal system, also known as a news website or online news platform, 
is a digital platform where users can access, read, and interact with
 news and information from various sources.
                </div>
                <div class="footer_mediya_icon">
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                    </a></div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="footer_main_title py-3"> Category</div>
                <ul class="footer_menu">
                @foreach ($cat as $post)
                    <li><a href="{{ route('bcat', $post->id)}}" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;
                        <option value="{{$post->id}}"> {{ $post->title}}</option>
                       </a></li>
                       @endforeach
                    </ul>
            </div>
            <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                <div class="footer_main_title py-3"> Most Viewed Posts</div>
                @if ($mostViewedPosts->count() > 0)
                @foreach ($mostViewedPosts as $post)
                <div class="footer_makes_sub_font">  {{  date('jS F Y', strtotime($post->created_at)) }} </div>
                <a href="{{ route('view', $post->id)}}" class="footer_post pb-4"> {{ $post->title }} </a>
                @endforeach
                @else
            <p>No most-viewed posts found.</p>
        @endif
                <div class="footer_position_absolute"><img src="{{asset('frontpage/images/footer_sub_tipik.png')}}" alt="img" class="width_footer_sub_img"/></div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="footer_main_title py-3"> Last Modified Posts</div>
                @foreach ($lastpost as $post)
                <a href="#" class="footer_img_post_6"><img src="{{ asset('images/'.$post->image) }}" alt="img"/></a>
                @endforeach
            </div>
        </div>
        <div class="row justify-content-center pt-2 pb-4">
            <div class="col-12 col-md-8 col-lg-7 ">
                <div class="input-group">
                    <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control fh5co_footer_text_box" placeholder="Enter your email..." aria-describedby="basic-addon1">
                    <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe</a>
                </div>
            </div>
        </div>
    </div>
</div>


