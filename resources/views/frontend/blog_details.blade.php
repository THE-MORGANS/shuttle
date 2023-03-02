
@extends('layouts.app')
@section('contents')
<section class="page-title gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
                <div class="breadcrumbs-wrap">
                    <h2 class="mb-0 ft-medium">{{$blogs->title}}</h1>
                    <nav class="transparent">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active theme-cl" aria-current="page">Blog Detail</li>
                        </ol>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ Blog Detail Start ================================== -->
<section>

    <div class="container">
    
        <!-- row Start -->
        <div class="row">
        
            <!-- Blog Detail -->
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="article_detail_wrapss single_article_wrap format-standard">
                    <div class="article_body_wrap">
                    
                        <div class="article_featured_image">
                            <img class="img-fluid" src="assets/img/b-6.jpg" alt="">
                        </div>
                        
                        <div class="article_top_info">
                            
                        </div>
                        <h2 class="post-title">{{$blogs->title}}.</h2>
                        <p>{!! $blogs->contents !!}</p>
                         
                      </div>
                </div>
            </div>
            
            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                
                <div class="single_widgets widget_thumb_post">
                    <h4 class="title">Recent Posts</h4>
                    <ul>
                        @forelse($popular as $post)
                        <li>
                            <span class="left">
                                <img src="{{asset('images/'.$post->image)}}" alt="" class="">
                            </span>
                            <span class="right">
                                <a class="feed-title" href="{{route('blog.details', encrypt($post->id))}}">{{$post->title}}</a> 
                                <span class="post-date"><i class="ti-calendar"></i>{{$post->created_at->format('d/m/y')}}</span>
                            </span>
                        </li>
                        @empty 

                        @endforelse
                    </ul>
                </div>
                
                
                
            </div>
            
        </div>
        <!-- /row -->					
        
    </div>
            
</section>
<!-- ============================ Blog Detail End ================================== -->

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
