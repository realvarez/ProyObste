<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.header')

    @include('partials.scripts')

</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        @include('partials.topbar')
        <!-- End Navigation -->


        <!-- Left Sidebar -->
        @include('partials.leftsidebar')
        <!-- End Sidebar -->


        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="breadcrumb-holder">
                                    <h1 class="main-title float-left"> Categorías</h1>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item">Home</li>
                                    
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


<div class="row">
     @foreach ($categories as $category)
     

        <a href="category/{{$category->id}}" class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box noradius noborder bg-info" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                
                <h6 class="text-white text-uppercase m-b-20 text-center" style="text-shadow: 1px 1px 6px #185b6b;">
                <i class="fas fa-folder" style="font-size: 20px;"></i>&nbsp&nbsp{{ucfirst($category->category_name)}}</h6>
              
            </div>
        </a>
        @endforeach
        <a href="/new-category" class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box noradius noborder bg-warning" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                
                <h6 class="text-white text-uppercase m-b-20 text-center" style="text-shadow: 1px 1px 6px #a87e2a;">
                <i class="fas fa-folder-plus" style="font-size: 20px;"></i>&nbsp&nbsp Nueva Categoría</h6>
            </div>
        </a>
    </div>
                    



                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->

        @include('partials.footer')

    </div>
    <!-- END main -->

    <script src="{{asset('js/pikeadmin.js')}}"></script>
    <script src="{{asset('plugins/jquery.filer/js/jquery.filer.min.js')}}"></script>


</body>

</html>
