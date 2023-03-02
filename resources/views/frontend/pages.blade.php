@extends('layouts.app')
@section('contents')
<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ======================= Top Breadcrubms ======================== -->
			<div class="bg-title py-5" data-overlay="0">
				<div class="ht-30"></div>
				<div class="container">
					<div class="row">
						<div class="colxl-12 col-lg-12 col-md-12">
							<h1 class="ft-medium">Services</h1>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="text-light">Home</a></li>
									<li class="breadcrumb-item"><a href="#" class="text-light">Services</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="ht-30"></div>
			</div>
			<!-- ======================= Top Breadcrubms ======================== -->
			
			<!-- ======================= Browse Category Detail ======================== -->
			<section class="middle bg-light">
				<div class="container">
				
					<!-- Single Category -->
					<div class="row align-items-start mb-5">
                     
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="row">
                                @forelse ($pages as  $page)
								<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
									<div class="d-block full-width px-4 py-4 bg-white rounded mb-3">
										<div class="d-block full-width mb-1"><img src="{{asset('images/'.$page->image)}}" class="img-fluid" width="45" alt="" /></div>
										<h4 class="ft-medium mb-0 fs-md">{{$page->name}}</h4>
										<p class="mb-3 p-0 lh-1">{{$page->title}}</p>
										<a href="{{route('subpages', encrypt($page->id))}}" class="theme-cl ft-medium">Read More<i class="lni lni-arrow-right-circle ml-1"></i></a>
									</div>
								</div>
                                    
                        @empty
                            
                        @endforelse
								
							</div>
						</div>

                        
					</div>
					
				</div>
			</section>
			<!-- ======================= Browse Category End ======================== -->
			
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