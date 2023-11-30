<!doctype html>
<html lang="en">

<head>
    @include('partials.head')

</head>


{{-- <body style="background:#dcd7d72e;">

<div id="layout-wrapper">


    <header id="page-topbar">
        @include('partials.header')
    </header>
    <!-- Header done -->

    <!-- === Left Sidebar Start ========== -->
  
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->


    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="card mb-2">
                    <div class="card-body">
                        @include('partials.bredecrumb1')
                       
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        @if(session('message'))
                        <div class="alert alert-{{session('class')}}">
                            {!! session('message') !!}
                        </div>
                    @endif
                    
                        @yield('content')
                    </div>
                </div>
            </div>
            {{-- @include('partials.sidebar') --}}
            {{-- <!-- @include('partials.footer') --}}
<!-- Right bar overlay-->
{{-- <div class="rightbar-overlay"></div>

<!-- script -->
@include('partials.script')


</body> --}} 

{{-- </html> --}}





<body style="background:#dcd7d72e;">

    <div id="layout-wrapper">

        <!-- Header Section -->
         <!-- Header Section -->
         <header id="page-topbar">
            @include('partials.header')
        </header>

        {{-- <!-- Main Content Section -->
        <div class="card">
            <div class="card-body">
              
                <!-- Your additional content goes here -->
            </div>
        </div> --}}

        <div>

            <div class="main-content mt-5 ">
                <div class="container-fluid">
                    <!-- Breadcrumb Section -->
                   
                     
    
                    <!-- Alert Section -->
                    <div class="card mb-3">
                        {{-- <div class="card-body">
                            @if(session('message'))
                            <div class="alert alert-{{session('class')}}">
                                {!! session('message') !!}
                            </div>
                             @endif
                        </div> --}}
                   
                
    
                    <!-- Main Content Section -->
                    <div class="card m-2">
                        <div class="card-body">



                         

                            <div class="card-body mt-5">
                                @include('partials.breadcrumb1')
                                @if(session('message'))
                                <div class="alert alert-{{session('class')}}">
                                    {!! session('message') !!}
                                </div>
                                 @endif
                            </div>
                            <div class="card m-2">
                            <div class="card-body m-2">
                                @yield('content')
                            </div>
                            </div>

                         
                        </div>
                    </div>
                </div>
            </div>
    

        </div>
       

        <!-- Main Content Section -->

        <!-- Sidebar Section -->
     

    </div>

    <!-- Bootstrap JS and dependencies -->
    @include('partials.script')

</body>


</html>




