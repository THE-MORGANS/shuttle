@extends('layouts.app')
@section('contents')

<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ======================= Searchbar Banner ======================== -->
            <div class="bg-title py-5" data-overlay="0">
                <div class="ht-30"></div>
                <div class="container">
                    <div class="row">
                        <div class="colxl-12 col-lg-12 col-md-12">
                            <h1 class="ft-medium">Job</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="text-light">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="text-light">Job Details</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="ht-30"></div>
            </div>
			
			<section class="bg-light py-5 position-relative">
				<div class="container">
					<div class="row">
						
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
						
							<div class="bg-white rounded px-3 py-4 mb-4">
								<div class="jbd-01 d-flex align-items-center justify-content-between">
									<div class="jbd-flex d-flex align-items-center justify-content-start">
										<div class="jbd-01-thumb">
											<img src="assets/img/c-1.png" class="img-fluid" width="90" alt="" />
										</div>
										<div class="jbd-01-caption pl-3">
											<div class="tbd-title"><h4 class="mb-0 ft-medium fs-md">{{$job->title}}</h4></div>
											<div class="jbl_location mb-3"><span><i class="lni lni-map-marker mr-1"></i>{{$job->location}}</span><span class="medium ft-medium text-warning ml-3">{{$job->job_type}}</span></div>
                                            <div class="jbl_location mb-3"><span><i class="lni mr-1"></i>Salary Range: ${{$job->salary_range }}</span><span class="medium ft-medium ml-3">
												{{-- Posted: {{$job->created_at->format('d/m/y')}}</span></div> --}}
										</div>
									</div>
									
								</div>
							</div>
							
							<div class="bg-white rounded mb-4">
								<div class="jbd-01 px-3 py-4">
									<div class="jbd-details mb-4">
										<h5 class="ft-medium fs-md">Job description</h5>
										<p>{!! $job->job_details !!}
									</div>
									
									
								</div>
								
								<div class="jbd-02 px-3 py-3 br-top">
									<div class="jbd-02-flex d-flex align-items-center justify-content-between">
										<div class="jbd-02-social">
											<ul class="jbd-social">
												<li><i class="ti-sharethis"></i></li>
												<li><a href="javascript:void(0);"><i class="ti-facebook"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-twitter"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-linkedin"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-instagram"></i></a></li>
											</ul>
										</div>
									
									</div>
								</div>
							</div>
							
						</div>
						

						<!-- Sidebar -->
                        
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                           @if(Session::has('message'))<div class="p-2">
                            <span class="alert alert-{{Session::get('alert')}}" style="font-size:12px"> {{Session::get('message')}}</span>
                        </div> 
                            @endif

							<div class="jb-apply-form bg-white rounded py-3 px-4 box-static">
								<h4 class="ft-medium fs-md mb-3">Intrested in this job?</h4>
								
                               
                              
                                    <form id="contrm" action="{{route('apply.job', $job->id.'-'.$job->title)}}" method="post" enctype="multipart/form-data">
                                      @csrf
								
									<div class="form-group">
										<label class="text-dark mb-1 ft-medium medium">First Name</label>
                                        <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Your Name*" required/>
									</div>
									
									<div class="form-group">
										<label class="text-dark mb-1 ft-medium medium">Phone Number</label>
										<input type="text" name="phone" class="form-control" value="{{old('phone')}}" placeholder="Your Phone"/>
									</div>
									
									<div class="form-group">
										<label class="text-dark mb-1 ft-medium medium">Email:</label>
                                        <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Your Email*"
                                        required/>
									</div>
									
									<div class="form-group">
										<label class="text-dark mb-1 ft-medium medium">Upload Resume:<font>pdf, doc, docx</font></label>
										<div class="custom-file">
                                            <input type="file" name="image"  class="custom-file-input" value="{{old('image')}}" id="image" placeholder="Your Email*"
                                            required/>
										  <label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>
									
									<div class="form-group">
										<div class="terms_con">
											<input id="aa3" class="checkbox-custom" name="Coffee" type="checkbox">
											<label for="aa3" class="checkbox-custom-label">I agree to pirvacy policy</label>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-md rounded theme-bg text-light ft-medium fs-sm full-width">Apply For This Job</button>
									</div>
									
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			
			
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