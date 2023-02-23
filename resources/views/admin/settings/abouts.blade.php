@extends('admin.layouts.admin')
@section('content')

        <div class="container-fluid h-100">

            <div class="row app-block">
                <div class="col-md-3 app-sidebar">
                    <div class="card">
                        <div class="card-body">
                           Website Setup
                        </div>
                        <div class="app-sidebar-menu">
                            @include('admin.settings.sidebar')
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-9 app-content">
                    <div class="app-content-overlay"></div>
                    <form action="{{route('admin.settings.updateSettings')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card card-body app-content-body">
                        <div class="app-lists">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="flex-grow-1 min-width-0">
                                        <div class="mb-1 d-flex justify-content-between align-items-center">
                                            <div class="text-truncate app-list-title">Update Website Logo</div>
                                            <div class="pl-3 d-flex">
                                                <span class="text-nowrap text-muted"></span>
                                                
                                            </div>
                                        </div>
                                        <div class="text-muted d-flex justify-content-between">
                                            <div class="text-truncate small"></div>
                                            <div class="col-md-12">
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input  @error('image') is-invalid @enderror">
                                                        <label class="custom-file-label" for="customFile">Change Website Logo</label>
                                                    </div>
                                                    <small id="emailHelp" class="form-text text-muted"> Websit logo
                                                    </small>
                                                      @error('image')
                                                    <span class="invalid-feedback"> <small> *</small> </span>
                                                    @enderror
                                                </div>
                                            
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="flex-grow-1 min-width-0">
                                        <div class="mb-1 d-flex justify-content-between align-items-center">
                                            <div class="text-truncate app-list-title">Change Website Name</div>
                                            <div class="pl-3 d-flex">
                                                <span class="text-nowrap text-muted"></span>
                                                
                                            </div>
                                        </div>
                                        <div class="text-muted d-flex justify-content-between">
                                            <div class="text-truncate small"></div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="title"  value="{{$settings->site_name}}" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="Change Website Name">
                                                    <small id="emailHelp" class="form-text text-muted">Update website name
                                                    </small>
                                                    @error('title')
                                                    <span class="invalid-feedback"> <small> * </small> </span>
                                                    @enderror
                                                </div>
                                            </div>
                                                
                                            
                                        </div>
                                    </div>
                                </li>
                             
                                <li class="list-group-item">
                                    <div class="flex-grow-1 min-width-0">
                                        <div class="mb-1 d-flex justify-content-between align-items-center">
                                            <div class="text-truncate app-list-title">Change Website Phone Number</div>
                                            <div class="pl-3 d-flex">
                                                <span class="text-nowrap text-muted"></span>
                                                
                                            </div>
                                        </div>
                                        <div class="text-muted d-flex justify-content-between">
                                            <div class="text-truncate small"></div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="phone"  value="{{$settings->site_phone}}" class="form-control @error('phone') is-invalid @enderror" id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="Change Phone Number">
                                                    <small id="emailHelp" class="form-text text-muted">Change Phone Number
                                                    </small>
                                                    @error('phone')
                                                    <span class="invalid-feedback"> <small> * </small> </span>
                                                    @enderror
                                                </div>
                                            </div>
                                                
                                            
                                        </div>
                                    </div>
                                </li>
                             
                                <li class="list-group-item">
                                    <div class="flex-grow-1 min-width-0">
                                        <div class="mb-1 d-flex justify-content-between align-items-center">
                                            <div class="text-truncate app-list-title">Change Website Email</div>
                                            <div class="pl-3 d-flex">
                                                <span class="text-nowrap text-muted"></span>
                                                
                                            </div>
                                        </div>
                                        <div class="text-muted d-flex justify-content-between">
                                            <div class="text-truncate small"></div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" name="email"  value="{{$settings->site_email}}" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="Change Website Email">
                                                    <small id="emailHelp" class="form-text text-muted">Update website Email
                                                    </small>
                                                    @error('email')
                                                    <span class="invalid-feedback"> <small> * </small> </span>
                                                    @enderror
                                                </div>
                                            </div>
                                                
                                            
                                        </div>
                                    </div>
                                </li>
                             
                                <li class="list-group-item">
                                    <div class="flex-grow-1 min-width-0">
                                        <div class="mb-1 d-flex justify-content-between align-items-center">
                                            <div class="text-truncate app-list-title">Change Website Address</div>
                                            <div class="pl-3 d-flex">
                                                <span class="text-nowrap text-muted"></span>
                                                
                                            </div>
                                        </div>
                                        <div class="text-muted d-flex justify-content-between">
                                            <div class="text-truncate small"></div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="address"  value="{{$settings->adsress}}" class="form-control @error('address') is-invalid @enderror" id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="Change Website Address">
                                                    <small id="emailHelp" class="form-text text-muted">Update website Address
                                                    </small>
                                                    @error('address')
                                                    <span class="invalid-feedback"> <small> * </small> </span>
                                                    @enderror
                                                </div>
                                            </div>
                                                
                                            
                                        </div>
                                  
                                       
                                    </div>
                                </li>
                           
                               
                               
                            </ul>
                               
                             
                          
                        </div>
                       
                    </div>
                      <div style="float:right" class="pl-5 pt-3">

                                    <button type="submit" class="btn btn-primary w-20">Update Settings</button>
                                </div>
                    </form>
                </div>
                
            </div>

        </div>





@endsection