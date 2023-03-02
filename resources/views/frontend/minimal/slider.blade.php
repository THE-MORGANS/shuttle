		<!-- ======================= Home Banner ======================== -->
          <div class="home-banner margin-bottom-0" style="background:#00ab46 url(assets/img/banner-2.jpg) no-repeat;" data-overlay="5">
               <div class="container">
                    <div class="row justify-content-center">
                         <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">
                         
                              <div class="banner_caption text-center mb-5">
                                   <h1 class="banner_title ft-bold mb-1"><span class="count">Welcome To Mimatt Recruitment Agency</h1>
                                   <p class="fs-md ft-medium">We pledge to deliver qualified, objective advice and importantly some great candidates to help you hire well.</p>
                              </div>
                              
                              <form class="bg-white rounded p-1" method="get" action="{{route('pages', encrypt(4))}}">
                                   @csrf
                                   <div class="row no-gutters">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                             <div class="form-group mb-0 position-relative">
                                                  <input type="text" class="form-control lg left-ico" placeholder="Job Title" />
                                                  <i class="bnc-ico lni lni-search-alt"></i>
                                             </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                             <div class="form-group mb-0 position-relative">
                                                  <input type="text" class="form-control lg left-ico" placeholder="Location " />
                                                  <i class="bnc-ico lni lni-target"></i>
                                             </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                             <div class="form-group mb-0 position-relative">
                                                  <select class="custom-select lg b-0">
                                                    <option value="1">Choose Industry</option>
                                                    @forelse ($JobIndustries as $inds )
                                                    <option value="{{$inds->id}}">{{$inds->name}}</option>    
                                                    @empty
                                                         
                                                    @endforelse
                                                  </select>
                                             </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                             <div class="form-group mb-0 position-relative">
                                                  <button class="btn full-width custom-height-lg theme-bg text-white fs-md" type="submit">Find Job</button>
                                             </div>
                                        </div>
                                        
                                   </div>
                              </form>
                              
                              {{-- <div class="text-center align-items-center justify-content-center mt-5">
                                   <a href="javascript:void(0);" class="btn bg-white hover-theme ft-regular mr-1"><i class="lni lni-user mr-1"></i>Learn More</a>
                              </div> --}}
                              
                         </div>
                    </div>
               </div>
          </div>
          <!-- ======================= Home Banner ======================== -->