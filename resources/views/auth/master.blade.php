<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
@yield('title')
<!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>

    <link id="pagestyle" href="{{mix('assets/css/auth/login/soft-ui-dashboard.css')}}" rel="stylesheet"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
</head>

<body class="">
<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">


                        @yield('content')

                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
<!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<!--   Core JS Files   -->
<script src="{{mix('assets/js/auth/login/popper.js')}}"></script>
<script src="{{mix('assets/js/auth/login/bootstrap.js')}}"></script>
<script src="{{mix('assets/js/auth/login/perfect-scrollbar.js')}}"></script>
<script src="{{mix('assets/js/auth/login/smooth-scrollbar.js')}}"></script>

@yield('js')


</body>

</html>
