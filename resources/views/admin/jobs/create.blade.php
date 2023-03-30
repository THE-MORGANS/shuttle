@extends('admin.layouts.admin')
@section('css')
<link rel="stylesheet" href="{{asset('/backend/vendors/datepicker/daterangepicker.css')}}" type="text/css">
@endsection
@section('content')
 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action='{{route('admin.JobsStore')}}' method='post', enctype='multipart/form-data'>
                @csrf
              <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Post Jobs</h6>
                            <div class="row">

                                <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="title"  value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Job Title">
                                            <small id="emailHelp" class="form-text text-muted">Enter Job title
                                            </small>
                                            @error('title')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                        
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select type="text" name="industry_id"  value="{{old('industry_id')}}" class="form-control @error('industry_id') is-invalid @enderror" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Select Industries">
                                            <option> Select Job Industry </option>
                                            @forelse ($industries as $ind)
                                            <option value="{{$ind->id}}"> {{$ind->name}} </option>
                                            @empty
                                            @endforelse
                                                  @error('industry_id')
                                                  <span class="invalid-feedback"> <small> *</small> </span>
                                                  @enderror
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="location"  value="{{old('location')}}" class="form-control @error('location') is-invalid @enderror" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter job location">
                                               <small id="emailHelp" class="form-text text-muted">Enter job location </small>
                                                 @error('location')
                                                    <span class="invalid-feedback"> <small> * </small> </span>
                                                @enderror
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="daterangepicker" value="{{old('daterangepicker')}}" class="form-control @error('daterangepicker') is-invalid @enderror" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Enter job deadline">
                                                   <small id="emailHelp" class="form-text text-muted">Enter job deadline
                                                          </small>
                                                          @error('daterangepicker')
                                                          <span class="invalid-feedback"> <small> *</small> </span>
                                                          @enderror
                                                  </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="min_salary" value="{{old('min_salary')}}" class="form-control @error('min_salary') is-invalid @enderror" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Enter Minimum Salary Range">
                                                   <small id="emailHelp" class="form-text text-muted">Salary Range
                                                          </small>
                                                          @error('min_salary')
                                                          <span class="invalid-feedback"> <small> *</small> </span>
                                                          @enderror
                                                  </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="max_salary" value="{{old('max_salary')}}" class="form-control @error('max_salary') is-invalid @enderror" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Enter Maximum Salary Range">
                                                   <small id="emailHelp" class="form-text text-muted">Salary Range
                                                          </small>
                                                          @error('max_salary')
                                                          <span class="invalid-feedback"> <small> *</small> </span>
                                                          @enderror
                                                  </div>
                                            </div> 

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="company" value="{{old('company')}}" class="form-control @error('company') is-invalid @enderror" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Enter Company">
                                                   <small id="emailHelp" class="form-text text-muted">Enter job deadline
                                                          </small>
                                                          @error('company')
                                                          <span class="invalid-feedback"> <small> *</small> </span>
                                                          @enderror
                                                  </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="job_type" value="{{old('job_type')}}" class="form-control @error('job_type') is-invalid @enderror" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Enter Job Type">
                                                   <small id="emailHelp" class="form-text text-muted">Enter Job Type
                                                          </small>
                                                          @error('job_type')
                                                          <span class="invalid-feedback"> <small> *</small> </span>
                                                          @enderror
                                                  </div>
                                            </div> 
                                        
                                        
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                <textarea id="summernote" class="@error('contents') is-invalid @enderror" name="contents">{{old('contents')}}</textarea>
                                                <small id="emailHelp" class="form-text text-muted">News Contents
                                                        </small>
                                                        @error('contents')
                                                        <span class="invalid-feedback"> <small> *</small> </span>
                                                        @enderror
                                                </div>


                                         </div>

                                          <div class="col-md-6 pt-4">
                                              <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input  @error('image') is-invalid @enderror">
                                                <label class="custom-file-label" for="customFile">Choose company Logo</label>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted"> Choose company Logo 
                                            </small>
                                              @error('image')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                         </div>
                                        
                                            
                            </div> 
                        </div>
                         
                    </div>
                          
                         <div class="card">
                        <div class="card-body">
                        <div class="row">
                          <div class="col-md-4">
                          </div>
                          <div class="col-md-4">
                        <div class="p-5">
                             <button type="submit" class="btn btn-primary p-3">Post Job</button>
                           </div>
                           </div>
                           </div>
                        </div>
                        </div>
                    </form>

    </div>
                        </div>
                    </div>
                   

@endsection
@section('script')
<script src="{{asset('/backend/vendors/datepicker/daterangepicker.js')}}"></script>
<script>
$('input[name="daterangepicker"]').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true
});


$('.clockpicker-example').clockpicker({
    autoclose: true
});

$('input[name="date"]').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true
});

let message = {!! json_encode(Session::get('message')) !!};
let msg = {!! json_encode(Session::get('alert')) !!};
//alert(msg);
toastr.options = {
        timeOut: 8000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };
if(message != null && msg == 'success'){
toastr.success(message);
}else if(message != null && msg == 'error'){
    toastr.error(message);
}
</script>
@endsection