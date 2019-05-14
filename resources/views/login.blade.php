<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.header')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="adminbody">

    <div id="app">

        <div class="content-page">

            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row justify-content-center">
                        <login-component></login-component>


                    </div>
                </div>

            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->

        @include('partials.footer')

    </div>
    <!-- END main -->

    @include('partials.scripts')
    
    <!-- App js -->


    <!-- BEGIN Java Script for this page -->