<html>
@include('admin.layouts.head')


<body class="fixed-navbar">
<div class="page-wrapper">
    <!-- START HEADER-->
@include('admin.layouts.header')
<!-- END SIDEBAR-->
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
    @yield('dashboardContent')
    <!-- END PAGE CONTENT-->
        <footer class="page-footer">
            <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
            <a class="px-4"
               href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589"
               target="_blank">BUY PREMIUM</a>
            <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
        </footer>
    </div>
</div>
<!-- BEGIN THEME CONFIG PANEL-->
@include('admin.layouts.theme')

<!-- END THEME CONFIG PANEL-->
<!-- BEGIN PAGA BACKDROPS-->
{{--<div class="sidenav-backdrop backdrop"></div>--}}
{{--<div class="preloader-backdrop">--}}
{{--    <div class="page-preloader">Loading</div>--}}
{{--</div>--}}
<!-- END PAGA BACKDROPS-->
<!-- CORE PLUGINS-->
@include('admin.layouts.script')

</body>
</html>
