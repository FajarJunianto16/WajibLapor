<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('sbAdmin/css/sb-admin-2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('sbAdmin/vendor/fontawesome-free/css/all.min.css') }}">

    <title>Petugas</title>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('components.sidebar-petugas')


        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            @include('components.navbar-admin')



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
</body>

<script src="{{ asset('sbAdmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>


<script src="{{ asset('sbAdmin/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('sbAdmin/vendor/fontawesome-free/js/all.min.js') }}"></script>

{{-- boostrap javascript --}}
<script src="{{ asset('sbAdmin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('sbAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</html>
