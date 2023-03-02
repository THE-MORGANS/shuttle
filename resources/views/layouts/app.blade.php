<!DOCTYPE html>
<html lang="zxx">
    <head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>{{config('app.name')}}</title>
		 
        <!-- Custom CSS -->
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
		
    </head>
   @include('layouts.header')
    @yield('contents')

<!--== Start Footer Area Wrapper ==-->
@include('layouts.footer')
<!-- End Off Canvas Menu Wrapper -->
