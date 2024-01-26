@extends('frontpage.layout')
@section('content')

<div class="container-fluid contact_us_bg_img">
    <div class="container">
        <div class="row">
            <a href="#" class="fh5co_con_123"><i class="fa fa-home"></i></a>
            <a href="{{('contact')}}" class="fh5co_con pt-2"> Contact Us </a>
        </div>
    </div>
</div>
<div class="container-fluid  fh5co_fh5co_bg_contcat">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                        <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-phone"></i></span> </div>
                    </div>
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <span class="c_g d-block">Call Us</span>
                        <span class="d-block c_g fh5co_contact_us_no_text">+977 9803011001</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                        <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-envelope"></i></span> </div>
                    </div>
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <span class="c_g d-block">Have any questions?</span>
                        <span class="d-block c_g fh5co_contact_us_no_text">droidnews1@gmail.com</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                        <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-map-marker"></i></span> </div>
                    </div>
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <span class="c_g d-block">Address</span>
                        <span class="d-block c_g fh5co_contact_us_no_text">Maitighar</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="container-fluid mb-4">
    <div class="container">
        <div class="col-12 text-center contact_margin_svnit ">
            <div class="text-center fh5co_heading py-2">Contact Us</div>
        </div>
        @include('frontpage.message')
        <div class="row">
            <div class="col-12 col-md-6">
                <form method="POST"  action="{{ route('contact.store')}}" class="row" id="fh5co_contact_form">
                    @csrf
                    <div class="col-12 py-3">
                        <input type="text" class="form-control fh5co_contact_text_box" name="name" placeholder="Enter Your Name" />
                        @error('name')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
                    </div>
                    <div class="col-6 py-3">
                        <input type="text" name="email" class="form-control fh5co_contact_text_box" placeholder="E-mail" />
                        @error('email')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
                    </div>
                    <div class="col-6 py-3">
                        <input type="text" name="subject" class="form-control fh5co_contact_text_box" placeholder="Subject" />
                        @error('subject')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
                    </div>
                    <div class="col-12 py-3">
                        <textarea class="form-control fh5co_contacts_message" name="message" placeholder="Message"></textarea>
                        @error('message')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
                    </div>
                    <div class="col-12 py-3 text-center"><button class="register"type="submit">Send Message</button></div>
                </form>
            </div>
            <div class="col-12 col-md-6 align-self-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.8033371520205!2d85.31999047395684!3d27.69247257619108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b1ce7d8c61%3A0x58bb28c5ee006d86!2sMaitighar%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1696568257433!5m2!1sen!2snp" width="600" height="400" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>


@endsection

