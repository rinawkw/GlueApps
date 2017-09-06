<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
<div class="boxed">
    <section class="ot-section-a">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="content ot-article">
                        <div class="wp-caption aligncenter">
                            <a href="images/demo/1200x800-9.jpg" class="hover-img lightbox-photo"
                               title="Ludus zril eu est, pro an elit ornatus facilisi, vis ex aeque accumsan recteque. Duis repudiare reprehendunt vim ex, nonumes intellegebat quo an.">
                                <img class="size-full"
                                     alt="Ludus zril eu est, pro an elit ornatus facilisi, vis ex aeque accumsan recteque. Duis repudiare reprehendunt vim ex, nonumes intellegebat quo an."
                                     src="images/gluetela.png"/>
                            </a>
                            {{--<div class="diff-spacer spacer-1" style="background-color:#E3EFF3;color:#E3EFF3;"><i class="fa fa-sign-in"></i></div>--}}
                            <!--== Post Reply ==-->
                            <h4 class="main-heading"><span>Silakan Login untuk Akses</span></h4>
                            <div class="comment-form-body">
                                <div class="row">
                                    <form class="comment-form" role="form" method="POST" action='do_login'>
                                        {!! csrf_field() !!}
                                        <div class="col-md-6">
                                            <label for="username">Username</label>
                                            <input id="username" type="text" placeholder="username" name="username">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="password">Password</label>
                                            <input id="password" type="password" placeholder="password" name="password">
                                        </div>
                                        <div class="col-md-12">
                                            @if (session('error_message'))
                                                <span class="error-msg comment-error" id="contact-mail-error"
                                                style="display:block; background-color: #B80000">
                                                <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ session('error_message') }}</span>
                                            @endif

                                            <p class="form-submit">
                                                <input name="submit" type="submit" id="submit" class="submit submit-button" value="Login" />
                                                <input type='hidden' name='comment_post_ID' value='2' id='comment_post_ID' />
                                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                            </p>
                                        </div>
                                    </form>
                                </div>
                                <p class="wp-caption-text">Belum punya Akun? <a href="{{'register'}}"><b>Register</b></a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- boxed -->
<!-- Bootstrap core and theme JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="js/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
{{--<script type="text/javascript" src="js/demo-settings.js"></script>--}}
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/theia-sticky-sidebar.js"></script>
<script type="text/javascript" src="js/themescripts.js"></script>
</body>
</html>