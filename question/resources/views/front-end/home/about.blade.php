@extends('front-end.master')
@section('body')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1 black_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>About Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / bradcam_area  -->
    <!-- wild_photography  -->
    <div class="wild_photography">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center ">
                <div class="col-lg-6">
                    <div class="wildlife_photo">
                        <img src="{{asset('/public/front')}}/img/photography/zebra.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3>Wildlife photography</h3>
                        <p>Whether you’re about to create a website for the first <br> time, or you’re looking for a theme that provides <br> advanced capabilities.</p>
                        <a href="{{route('albums')}}" class="black_btn">Explore Work</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /wild_photography  -->

    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="testimonial_active owl-carousel">
                        <div class="single_testmonial text-center">
                            <h3>Our Customers Say</h3>
                            <p>
                                Whether you’re about to create a website for the first time, or you’re looking
                                for a theme that provides advanced capabilities, we have got them in
                                Blacksilver theme.
                            </p>
                            <div class="author_name d-flex align-items-center justify-content-center">
                                <div class="thumb">
                                    <img src="{{asset('/public/front')}}/img/testmonial/author.png" alt="">
                                </div>
                                <span>- Robert Thomson</span>
                            </div>
                        </div>
                        <div class="single_testmonial text-center">
                            <h3>Our Customers Say</h3>
                            <p>
                                Whether you’re about to create a website for the first time, or you’re looking
                                for a theme that provides advanced capabilities, we have got them in
                                Blacksilver theme.
                            </p>
                            <div class="author_name d-flex align-items-center justify-content-center">
                                <div class="thumb">
                                    <img src="{{asset('/public/front')}}/img/testmonial/author.png" alt="">
                                </div>
                                <span>- Robert Thomson</span>
                            </div>
                        </div>
                        <div class="single_testmonial text-center">
                            <h3>Our Customers Say</h3>
                            <p>
                                Whether you’re about to create a website for the first time, or you’re looking
                                for a theme that provides advanced capabilities, we have got them in
                                Blacksilver theme.
                            </p>
                            <div class="author_name d-flex align-items-center justify-content-center">
                                <div class="thumb">
                                    <img src="{{asset('/public/front')}}/img/testmonial/author.png" alt="">
                                </div>
                                <span>- Robert Thomson</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <!-- team_area  -->
    <div class="team_area">
        <div class="container">
            <div class="border_bottom">
                <div class="row">
                    @foreach($photographer as $photo)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single_team">
                                <div class="team_thumb">
                                    <img src="{{asset($photo->main_image)}}" alt="" width="362px" height="400px">
                                </div>
                                <div class="team_info text-center">
                                    <h3>{{$photo->Photographers_name}}</h3>
                                    <p>Photographer</p>
                                    <div class="social_link">
                                        <ul>
                                            <li><a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li><a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li><a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /team_area  -->

    <div class="contact_info_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="cotact_info">
                        <div class="section_title">
                            <h3>Contact Us</h3>
                            <p>Whether you’re about to create a website for the first time or you’re looking.</p>
                        </div>
                        <div class="address_info">
                            <h4>Address</h4>
                            <ul class="Address" >
                                <li>
                                    Kabi Sufia Kamal Hall, Dhaka, Bangladesh
                                </li>
                                <li>
                                    01739258183
                                </li>
                                <li>
                                    <a href="#">alifhasan39@gmail.com</a>
                                </li>
                            </ul>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="d-sm-block">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.596328743939!2d90.40285431532936!3d23.72610528460137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8fa8e929cef%3A0x4251ebb65a26f644!2sKabi%20Sufia%20Kamal%20Hall!5e0!3m2!1sen!2sbd!4v1575990541388!5m2!1sen!2sbd" width="600" height="450" frameborder="1" style="border:1px solid black;" allowfullscreen=""></iframe>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
