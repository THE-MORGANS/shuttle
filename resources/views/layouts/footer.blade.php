
<footer class="light-footer skin-light-footer style-2">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="footer_widget">
                        <img src="{{asset('assets/'.$settings->logo)}}" class="img-footer small mb-2" alt="" />
                        
                        <div class="address mt-2">
                           {{$settings->address}}	
                        </div>
                        <div class="address mt-3">
                           {{$settings->site_phone}}<br>{{$settings->site_email}}
                        </div>
                        <div class="address mt-2">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-facebook-filled"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-twitter-filled"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-youtube"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-instagram-filled"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">Help Links</h4>
                        <ul class="footer-menu">
                            @forelse ($menus as $menu )
                            <li><a href="{{route('pages', encrypt($menu->id))}}">{{$menu->name}}</a></li>
                            @empty
                            @endforelse
                           
                            
                        </ul>
                    </div>
                </div>
                        
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">Industries</h4>
                        <ul class="footer-menu">
                            @forelse ($JobIndus as $ss)
                            <li><a href="#">{{$ss->name}}</a></li>
                            @empty
                                
                            @endforelse
                        </ul>
                    </div>
                </div>
        
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">Our Servies</h4>
                        <ul class="footer-menu">
                            @forelse ($Servicesx as $sc)
                            <li><a href="#">{{$sc->name}}</a></li>   
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>
              
                    
            </div>
        </div>
    </div>
    
    <div class="footer-bottom br-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 text-center">
                    <p class="mb-0">© 2022 {{$settings->site_copyright}}</a>.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
@include('layouts.js')