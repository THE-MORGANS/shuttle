
@extends('layouts.app')
@section('contents')
@include('frontend.minimal.slider')
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
                        <div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>${{$job->salary_range}}.</div>
                        <div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>{{$job->created_at->diffForHumans()}}</div>
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
