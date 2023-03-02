@extends('layouts.app')
@section('contents')
<div class="clearfix"></div>

<div class="bg-title py-5" data-overlay="0">
    <div class="ht-30"></div>
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <h1 class="ft-medium">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-light">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-light">Contact Us</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="ht-30"></div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->

<!-- ======================= Contact Page Detail ======================== -->
<section class="middle">
    <div class="container">
    
        <div class="row justify-content-center mb-5">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="off_title">Contact Us</h2>
                </div>
            </div>
        </div>
        
        <div class="row align-items-start justify-content-between">
        
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="card-wrap-body mb-4 gray rounded p-3">
                    <h4 class="ft-medium mb-3 theme-cl">Address</h4>
                    <p>{{$settings->address}}</p>
                </div>
                
                <div class="card-wrap-body mb-3 gray rounded p-3">
                    <h4 class="ft-medium mb-3 theme-cl">Phone Numbers</h4>
                    <h6 class="ft-medium mb-1">Customer Care:</h6>
                    <p class="mb-2">{{$settings->site_phone}}</p>
                  
                </div>
                
                <div class="card-wrap-body mb-3 gray rounded p-3">
                    <h4 class="ft-medium mb-3 theme-cl">Drop A Mail</h4>
                    <p class="lh-1 text-dark">{{$settings->site_email}}</p>
                </div>
            </div>
            
            <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
                <form id="contact-form" action="{{route('contact-email')}}" method="post" class="row">
                    @csrf
                        
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="small text-dark ft-medium">Your Name *</label>
                            <input type="text" value="{{old('email')}}"  name="name" class="form-control" value="Your Name" required>
                        </div>
                    </div>
                    <input type="hidden" name="key" value="{{$key}}"> 
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="small text-dark ft-medium">Your Email *</label>
                            <input type="text" value="{{old('email')}}" name="email" class="form-control" value="Your Email" required>
                        </div>
                    </div>
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="small text-dark ft-medium">Phone Number </label>
                            <input type="text" value="{{old('phone')}}" name="phone" class="form-control" value="Type Your Subject" required>
                        </div>
                    </div>
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="small text-dark ft-medium">Message</label>
                            <textarea name="message" class="form-control ht-80">{{old('message')}}</textarea>
                        </div>
                    </div>
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <button type="button" class="btn btn-dark">Send Message</button>
                        </div>
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>
</section>
<!-- ======================= Contact Page End ======================== -->

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