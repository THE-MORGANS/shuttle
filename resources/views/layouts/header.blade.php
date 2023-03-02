	
    <body>
	
        <!-- ============================================================== -->
       <!-- Preloader - style you can find in spinners.css -->
       <!-- ============================================================== -->
      <div class="preloader"></div>
       
       <!-- ============================================================== -->
       <!-- Main wrapper - style you can find in pages.scss -->
       <!-- ============================================================== -->
       <div id="main-wrapper">
       
           <!-- ============================================================== -->
           <!-- Top header  -->
           <!-- ============================================================== -->
           <!-- Start Navigation -->
           <div class="header header-light dark-text">
               <div class="container">
                   <nav id="navigation" class="navigation navigation-landscape">
                       <div class="nav-header">
                           <a class="nav-brand" href="{{route('index')}}">
                               <img src="{{asset('assets/logo.png')}}" class="logo" alt="" />
                           </a>
                           <div class="nav-toggle"></div>
                           <div class="mobile_nav">
                               <ul>
                               <li>
                                   <a href="dashboard-post-job.html" class="crs_yuo12 w-auto text-white theme-bg">
                                       <span class="embos_45"><i class="fas fa-plus-circle mr-1 mr-1"></i>Post Job</span>
                                   </a>
                               </li>
                               </ul>
                           </div>
                       </div>
                       <div class="nav-menus-wrapper" style="transition-property: none;">
                        <ul class="nav-menu">
							
                            @forelse ($menus as $menu )
                            <li> @if($menu->name == 'Home') <a href="{{route('index')}}">{{$menu->name}}</a> @else <a href="{{route('pages', encrypt($menu->id))}}">{{$menu->name}}</a> @endif
                                @if(count($menu->subMenu) > 0)
                                <ul class=" @if($menu->has_child)  nav-dropdown @endif nav-submenu">
                                   
                                    @forelse ($menu->subMenu as $sub ) 
                                    <li><a href="{{route('subpages', encrypt($sub->id))}}">{{$sub->name}}</a></li>
                                    @empty
                                    @endforelse
                                </ul>
                                @endif
                               
                            </li>
                            @empty
                            @endforelse
                        </ul>
                        
                        <ul class="nav-menu nav-menu-social align-to-right">
                            
                            <li class="add-listing theme-bg">
                                <a href="{{route('pages', encrypt(4))}}" >
                                    <i class="lni lni-circle-plus mr-1"></i> Find Jobs
                                </a>
                            </li>
                        </ul>
                           
                          
                       </div>
                   </nav>
               </div>
           </div>
           <!-- End Navigation -->
           <div class="clearfix"></div>