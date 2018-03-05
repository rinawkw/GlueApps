<div class="top-bar">
    <div class="container">
        <!-- main menu -->
        <nav class="top-menu">
            <label for="show-top-menu" class="show-menu"><i class="fa fa-bars"></i></label>
            <input type="checkbox" id="show-top-menu">
            <ul class="menu" id="mobile-menu">
            @if(session('user_id'))
                <li>
                    <a href="index.html"> Chats </a>
                </li>

                <li>
                    <a href="#"></i> Notification </a>
                </li>
                <li><a href="/profile"></i> {{session('data.user_nama')}} </a></li>
                <li><a href="/logout"></i> Logout </a></li>
                @else
                <li><a href="/login"></i> Login </a></li>
                @endif
            </ul>
            
        </nav>
        <!-- end main menu -->
        <span class="top-bar-socials">
            <a href="{{'home'}}"><img style="width: 90px;" src="images/gluetela.png"></a>
					{{--<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>--}}
					{{--<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>--}}
					{{--<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>--}}
					{{--<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>--}}
					{{--<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>--}}
					</span>
    </div>
    <!-- end container -->
</div>
<!-- end topbar -->