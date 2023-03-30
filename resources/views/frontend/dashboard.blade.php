
@extends('layouts.app')
@section('contents')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

        <div class="carousel-item active">
            <div class="home-banner margin-bottom-0"
                 style="background:#00ab46 url({{ asset('assets/img/banner-9.jpeg') }}) no-repeat;" data-overlay="2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="banner_caption text-left mb-5 typed-out">
                                <h1 class="banner_title ft-bold mb-1 uppercase"><span class="count"></span>Shuttle Recruitment Agency</h1>
                                <p class="fs-md ft-medium">.. We pledge to deliver qualified, objective advise</p>
                            </div>

                            <div class="text-left align-items-center justify-content-center mt-5">
                                <a href="" class="btn bg-white hover-theme ft-regular mr-1"><i
                                            class="lni lni-user mr-1"></i>Seeking for a new job?</a>
                                <a href=""
                                   class="btn bg-dark hover-theme text-light ft-regular ml-1"><i
                                            class="lni lni-briefcase mr-1"></i>Find Jobs</a>
                          </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item ">
            <div class="home-banner margin-bottom-0"
                 style="background:#00ab46 url({{ asset('assets/img/banner-1.webp') }}) no-repeat;" data-overlay="2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="banner_caption text-right mb-5 typed-out">
                                <h1 class="banner_title ft-bold mb-1 uppercase "><span class="count"></span> In need
                                    of a new staff?</h1>
                                <p class="fs-md ft-medium " >...Or seeking for a new job</p>
                            </div>

                            <div class="text-right align-items-center justify-content-center mt-5">
                                <a href="" class="btn bg-white hover-theme ft-regular mr-1"><i
                                            class="lni lni-user mr-1"></i>I'm looking for a Job</a>
                                <a href=""
                                   class="btn bg-dark hover-theme text-light ft-regular ml-1"><i
                                            class="lni lni-briefcase mr-1"></i>I'm Hiring</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- ======================= Home Banner ======================== -->


<!-- ======================= Job seeks and employers Banner ======================== -->
<section class="space py-0" style="background: #ff0000;">
    <!-- ======================= for job seekers Start ============================ -->
    <div class="text-white container-fluid">


        <div class="row">
            <div class="px-0 col-xl-6 col-lg-6 col-md-12 col-sm-12 jbs"
                 style=" background: url({{ asset('assets/img/applicant.jpeg') }}); z-index: 1" data-overlay="1">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="position-relative py-5 px-4">

                    <h2 class="ft-bold mb-3 text-white text-center">FOR JOB SEEKERS</h2>
                    <p class="mb-2" style="font-size: 18px !important;"> Our number one goal is to significantly
                        reduce the number of unemployed graduates in United Kingdom. To achieve our primary objective,
                        we dedicate a lot of time to training and re-training candidates to be employable and
                        fitted for the right job. We are a one-stop shop for the basic recruitment needs of both employers and
                        job seekers and have inculcated <span class="font-weight-bold">SKILLS ACQUISITION</span> as a fundamental aspect of GSRA to
                        help prepare our candidates to be successful in their next job.
                    </p>

                    <div class="col-lg-12 col-md-12 col-12 mt-3 ml-0 pl-0">
                        {{-- <a href="" class="btn gray ft-medium apply-btn fs-sm rounded">See
                            Details<i class="lni lni-arrow-right-circle ml-2"></i></a> --}}
                    </div>
                </div>

            </div>


        </div>


    </div>
    <!-- ======================= for job seekers Start ============================ -->
    <!-- ======================= for job Employers Start ============================ -->
    <div class="text-white container-fluid">


        <div class="row employer">

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">

                    <div class="position-relative py-5 px-2">

                        <h2 class="ft-bold mb-3 text-white text-center">FOR EMPLOYERS</h2>
                        <p class="mb-2" style="font-size: 18px !important;"> Shuttle Recruitment Agency
                            is a recruiting agency company. We dedicate a lot of time to training and re-training candidates to be employable and
                            fitted for the right job. We hire qualified employees to their respective employers.

                            At Shuttle Recruitment Agency, we are focused on making candidates
                            <span class="font-weight-bold">highly productive at the workplace</span>. To do that, <span class="font-weight-bold">we undertake a lot of training
                                on behalf of our clients and the candidates themselves</span> to ensure that they are equipped
                            with the requisite knowledge and skills to perform their responsibilities effectively.
                        </p>
                        <div class="col-lg-12 col-md-12 col-12 mt-3 ml-0 pl-0">
                            {{-- <a href=""
                               class="btn gray ft-medium apply-btn fs-sm rounded">See Details<i
                                        class="lni lni-arrow-right-circle ml-2"></i></a> --}}
                        </div>
                    </div>
            </div>
            <div class="px-0 col-xl-6 col-lg-6 col-md-12 col-sm-12 jbs"
                 style=" background: ; z-index: 1" data-overlay="1">

            </div>


        </div>


    </div>
    <!-- ======================= for job Employers Start ============================ -->
</section>

<!-- ======================= Job List ======================== -->
<section class="middle">
    <div class="container">
    
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <h6 class="text-muted mb-0">Latest Jobs</h6>
                    <h2 class="ft-bold">All Latest Jobs</h2>
                </div>
            </div>
        </div>
        
        <!-- row -->
        <div class="row align-items-center">
        
            <!-- Single -->
            @forelse ($pageJobs as $job )
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="job_grid border rounded ">
                    <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
                    <div class="position-absolute ab-right"><span class="medium theme-cl theme-bg-light px-2 py-1 rounded">{{$job->job_type}}</span></div>
                    <div class="job_grid_thumb mb-3 pt-5 px-3">
                        <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-1.png" class="img-fluid" width="70" alt="" /></a>
                    </div>
                    <div class="job_grid_caption text-center pb-5 px-3">
                        <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">{{$job->company}}</a></h6>
                        <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">{{$job->title}}</a></h4>
                        <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>{{$job->location}}</span></div>
                    </div>
                    <div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                        <div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>${{number_format($job->min_salary)}} - ${{number_format($job->max_salary)}}</div>
                        {{-- <div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>{{$job->created_at->diffForHumans()}}</div> --}}
                    </div>
                </div>
            </div>
            
            @empty
                
            @endforelse
          
            
           
            
        </div>
        <!-- row -->
        
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="position-relative text-center">
                    <a href="{{route('pages', encrypt(4))}}" class="btn btn-md theme-bg-light rounded theme-cl hover-theme">Explore More Jobs<i class="lni lni-arrow-right-circle ml-2"></i></a>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- ======================= Job List ======================== -->

<!-- ======================= All category ======================== -->
<section class="space gray">
    <div class="container">
    
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <h6 class="text-muted mb-0">Job Industries </h6>
                    <h2 class="ft-bold">All Job Industries</h2>
                </div>
            </div>
        </div>
        
        <!-- row -->
        <div class="row align-items-center">
            
            @forelse ($JobIndustry  as $indstr )
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="cats-wrap text-center">
                    <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                        <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-laptop-phone fs-lg theme-cl"></i></div>
                        <div class="cats-box-caption">
                            <h4 class="fs-md mb-0 ft-medium m-catrio">{{$indstr->name}}</h4>
                            <span class="text-muted"></span>
                        </div>
                    </a>
                </div>
            </div>
            @empty
                
            @endforelse
            
        </div>
        <!-- /row -->
       
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="position-relative text-center">
                    <a href="{{route('pages', encrypt(4))}}" class="btn btn-md bg-dark rounded text-light hover-theme">Browse All Categories<i class="lni lni-arrow-right-circle ml-2"></i></a>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- ======================= All category ======================== -->

<!-- ======================= About Start ============================ -->
<section class="space">
    <div class="container">
        
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="m-spaced">
                    <div class="position-relative">
                        <div class="mb-1"><span class="theme-bg-light theme-cl px-2 py-1 rounded">About Us</span></div>
                       
                        <p class="mb-4">{{$settings->about}}</p>
                    </div>
                    <div class="position-relative row">
                        <div class="col-lg-4 col-md-4 col-4">
                            <h3 class="ft-bold theme-cl mb-0">0</h3>
                            <p class="ft-medium">Active Jobs</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4">
                            <h3 class="ft-bold theme-cl mb-0">0</h3>
                            <p class="ft-medium">Resumes</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4">
                            <h3 class="ft-bold theme-cl mb-0">0</h3>
                            <p class="ft-medium">Employers</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 mt-3">
                            {{-- <a href="javascript:void(0);" class="btn btn-md theme-bg-light rounded theme-cl hover-theme">See Details<i class="lni lni-arrow-right-circle ml-2"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <div class="position-relative">
                    <img src="assets/img/bn-5.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- ======================= About Start ============================ -->


<!-- ======================= Blog Start ============================ -->
<section class="space min gray">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-4">
                    <h6 class="text-muted mb-0">Latest Blogs</h6>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            
            <!-- Single Item -->
            @forelse ($blogs as $blog )
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="blg_grid_box">
                    <div class="blg_grid_thumb">
                        <a href="{{route('blog.details', encrypt($blog->id))}}"><img src="{{asset('images/'.$blog->image)}}" class="img-fluid" alt=""></a>
                    </div>
                    <div class="blg_grid_caption">
                        <div class="blg_title"><h4><a href="{{route('blog.details', encrypt($blog->id))}}">{{$blog->title}}</a></h4></div>
                        <div class="blg_desc"><p>{!!substr($blog->contents,0,200)!!}</p></div>
                    </div>
                    <div class="crs_grid_foot">
                        <div class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">
                            <div class="crs_fl_first">

                            </div>
                            <div class="crs_fl_last">
                                <div class="foot_list_info">
                                    <ul>
                                        <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">{{$blog->views}} Views</div></li>
                                        <li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">{{$blog->created_at->format('d/m/yy')}}</div></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty  
            @endforelse
          
        </div>
        
    </div>
</section>
<!-- ======================= Blog Start ============================ -->


<!-- ========================== Download App Section =============================== -->

<!-- ======================= Newsletter Start ============================ -->
<section class="space bg-cover" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;">
    <div class="container py-5">
        
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <h6 class="text-light mb-0">Subscribr Now</h6>
                    <h2 class="ft-bold text-light">Get All Job Notification</h2>
                </div>
            </div>
        </div>
        
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
                <form class="bg-white rounded p-1">
                    <div class="row no-gutters">
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                            <div class="form-group mb-0 position-relative">
                                <input type="text" class="form-control lg left-ico" placeholder="Enter Your Email Address">
                                <i class="bnc-ico lni lni-envelope"></i>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                            <div class="form-group mb-0 position-relative">
                                <button class="btn full-width custom-height-lg theme-bg text-light fs-md" type="button">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</section>
<!-- ======================= Newsletter Start ============================ -->


@endsection

@section('styles')

    <style>

        .slick-next:before, .slick-prev:before {
            color: #ff0000 ;
        }

        .jbs {
            display: flex;
            width: 100%;
            background-size: cover !important;
            background-position: center !important;
        }

        @media only screen and (max-width: 991px) {

            .jbs {
                height: 220px;
                /*width: 100%;*/
            }

            .employer {


                display: flex;
                flex-flow: column-reverse;

            }
        }

        .typed-out{
            overflow: hidden;
            /*border-right: .15em solid #0001a2;*/
            white-space: nowrap;
            animation: typing 5.0s  alternate;
            width: 100%;
        }
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
    </style>

@endsection
