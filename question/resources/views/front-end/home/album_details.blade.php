@extends('front-end.master')
@section('body')
    <!-- bradcam_area  -->
    <div class="bradcam_area breadcam_bg_2 black_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>{{$album_details->album_name}}</h3>
                        <p>by- {{$album_details->Photographers_name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / bradcam_area  -->

    <!-- gallery_area  -->
    <div class="gallery_area baby_gallery_wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="section_title text-center mb-50">
                        <h3>My world class photography</h3>
                        <p>Whether you’re about to create a website for the first time, or you’re looking
                            for a theme that provides advanced capabilities, we have got them in
                            Blacksilver theme.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row no-gutters grid align-center">
                <div class="col-md-1">

                </div>
                <div class="col-md-10">

                    @foreach(json_decode($album_details->all_images) as $img)
                        <div class="single_gallery grid-item mid_img ">
                            <a class="img-pop-up  thumb" href="{{asset($img)}}" >
                                <img src="{{asset($img)}}" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /gallery_area  -->

    <div class="next_prev_post">
        <div class="container">
            <div class="row align-items-center border_bottom">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="post_lisk text-left">

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="socical_button">
                        <ul>
                            <li>
                                <a href="#"> <i class="fa fa-facebook"></i> Facebook </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-twitter"></i> Twitter </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-pinterest"></i> pinterest </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="post_lisk text-right">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
