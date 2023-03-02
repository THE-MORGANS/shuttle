@extends('layouts.app')
@section('contents')

<div class="clearfix"></div>
<div class="bg-title py-5" data-overlay="0">
    <div class="ht-30"></div>
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <h1 class="ft-medium">FAQ</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-light">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-light">FAQ</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="ht-30"></div>
</div>
<section class="middle">
    <div class="container">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div id="accordion" class="accordion">
                @forelse ($faqs as $faq)
                <div class="card">
                    <div class="card-header" id="h1">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#ord{{$faq->id}}" aria-expanded="true" aria-controls="ord{{$faq->id}}">
                            {{$faq->title}}
                        </button>
                      </h5>
                    </div>

                    <div id="ord{{$faq->id}}" class="collapse" aria-labelledby="h1" data-parent="#accordion">
                      <div class="card-body">
                        <p>{!! $faq->content !!} </p>
                      </div>
                    </div>
                </div>
                @empty
                @endforelse
              
                
            </div>
        </div>

    </div>
</section>
<!-- ======================= Docs End ======================== -->

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
</section>iv>

@endsection