@extends('layouts.app')
@section('contents')
<!-- End Navigation -->
<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->

<div class="bg-title py-5" data-overlay="0">
    <div class="ht-30"></div>
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <h1 class="ft-medium">Jobs</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-light">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-light">Jobs</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="ht-30"></div>
</div>


<!-- ======================= Filter Wrap Style 1 ======================== -->
<section class="py-2 br-bottom br-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                <h6 class="mb-0 ft-medium fs-sm"></h6>
            </div>
            
           
        </div>
        
    </div>
</section>
<!-- ============================= Filter Wrap ============================== -->

<!-- ============================ Main Section Start ================================== -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="bg-white rounded">							
                
                    <div class="sidebar_header d-flex align-items-center justify-content-between px-4 py-3 br-bottom">
                        <h4 class="ft-medium fs-lg mb-0">Job Industries</h4>
                        <div class="ssh-header">
                            <a href="#search_open" data-toggle="collapse" aria-expanded="false" role="button" class="collapsed _filter-ico ml-2"><i class="lni lni-text-align-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Find New Property -->
                    <div class="sidebar-widgets collapse miz_show" id="search_open" data-parent="#search_open">
                        
                        <div class="search-inner">
                            
                           
                            
                            <div class="filter_wraps">
                                
                                <!-- Job categories Search -->
                                <div class="single_search_boxed px-4 pt-0 br-bottom">
                                    <div class="widget-boxed-body collapse show" id="categories" data-parent="#categories">
                                        <div class="side-list no-border">
                                            <!-- Single Filter Card -->
                                            <div class="single_filter_card">
                                                <div class="card-body p-0">
                                                    <div class="inner_widget_link">
                                                        <ul class="no-ul-list filter-list">
                                                            @forelse ( $industries as $industry)
                                                            <li><a  class="checkbox-custom-label" href="{{route('industries-category',$industry->id.'-'.$industry->name)}}">{{$industry->name}}</a>
                                                        </li>
                                                            @empty
                                                                
                                                            @endforelse
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                            </div>
                        </div>							
                    </div>
                </div>
                <!-- Sidebar End -->
            
            </div>
            
            <!-- Item Wrap Start -->
            <div class="col-lg-8 col-md-12 col-sm-12">
            
                <!-- row -->
                <div class="row align-items-center">
                
                    <!-- Single -->
                    @forelse ($jobs as $job )
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                    <div class="text-center"><img src="assets/img/c-1.png" class="img-fluid" width="55" alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">{{$job->title}}</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>{{$job->location}}</span>

                                            <span class="muted medium ml-2 theme-cl"><i class="lni lni-briefcase mr-1"></i>{{$job->job_type}}</span>
                                            {{-- <span class="muted medium ml-2 theme-cl"><i class="lni lni-briefcase mr-1"></i>{{$job->created_at->diffForHumans()}}</span>   --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mlb-last"><a href="{{route('job-details', $job->id.'-'.$job->title)}}" class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                            </div>
                        </div>
                    </div> 
                    @empty
                        
                    @endforelse
                    
                   
                    
                    
                    
                </div>
                <!-- row -->
                
                {{-- <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span class="fas fa-arrow-circle-right"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">18</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span class="fas fa-arrow-circle-right"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                
            </div>
            
        </div>
    </div>
</section>
<!-- ============================ Main Section End ================================== -->

<!-- ======================= Newsletter Start ============================ -->
<section class="space bg-cover" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;">
    <div class="container py-5">
        
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <h6 class="text-light mb-0">Subscribr Now</h6>
                    <h2 class="ft-bold text-light">Get All New Job Notification</h2>
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
@endsection