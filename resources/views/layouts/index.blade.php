<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
<div class="boxed active">
    @include('layouts.topbar')
{{--    @include('layouts.header')--}}
    @include('layouts.mainmenu')
    @yield('content')
    @include('layouts.footer')
</div>
<!-- boxed -->
<!-- Bootstrap core and theme JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="/js/jquery-latest.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
{{--<script type="text/javascript" src="js/demo-settings.js"></script>--}}
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/theia-sticky-sidebar.js"></script>
<script type="text/javascript" src="/js/themescripts.js"></script>
</body>
</html>