<!-- main menu -->
<nav class="main-menu">
    <div class="container">
        <label for="show-menu" class="show-menu"><i class="fa fa-bars"></i></label>
        <input type="checkbox" id="show-menu">
        <ul class="menu" id="main-mobile-menu">
        @if(session('user_id'))
            <li>
                <a href="/{{'home'}}"><i class="fa fa-home"></i> Home </a>
            </li>
            <li>
                <a href="/{{'news'}}"><i class="fa fa-newspaper-o"></i> News</a><span
                        class="sub_menu_toggle"></span>
                <ul class="sub-menu">
                    <li><a href="/{{'news'}}">All News</a></li>
                    <li><a href="/{{'create_news'}}">Create News</a></li>
                    <li><a href="/{{'newslist'}}">Manage News</a></li>
               </ul>
            </li>
            <li class="menu-item-has-children">
                <a href="/{{'nearme'}}"><i class="fa fa-location-arrow"></i> Near Me </a>
            </li>
            <li><a href="/{{'members'}}"><i class="fa fa-users"></i> GenBI </a></li>
            <li><a href="/{{'about'}}"><i class="fa fa-star"></i> About </a></li>
            <li><a href="/{{'contact'}}"><i class="fa fa-map-marker"></i> Contact</a></li>
        @else
            <li>
                <a href="/{{'home'}}"><i class="fa fa-home"></i> Home </a>
            </li>
            <li><a href="/{{'about'}}"><i class="fa fa-star"></i> About </a></li>
            <li><a href="/{{'contact'}}"><i class="fa fa-map-marker"></i> Contact</a></li>
        @endif    
        </ul>
    </div>
</nav>
<!-- end main menu -->