<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="{{ asset('assets/templates/img/profile_small.jpg') }}" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Admin FiMon</strong>
                         </span> <span class="text-muted text-xs block">Doscom UDINUS <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    FM
                </div>
            </li>
            <li <?php  echo(Request::segment(1) == 'dashboard'?'class="active"':''); ?> >
                <a href="{{ route('dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li <?php  echo(Request::segment(1) == 'user'?'class="active"':''); ?> >
                <a href="{{ route('user') }}"><i class="fa fa-user-circle-o"></i> <span class="nav-label">Pengguna</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-list"></i> <span class="nav-label">Konfigurasi</span></a>
                <ul class="nav nav-second-level collapse">
                    <li <?php  echo(Request::segment(1) == 'hobi'?'class="active"':''); ?> >
                        <a href="{{ route('hobi') }}"><i class="fa fa-user-circle-o"></i> <span class="nav-label">Hobi</span></a>
                    </li>
                    <li <?php  echo(Request::segment(1) == 'kategori'?'class="active"':''); ?> >
                        <a href="{{ route('kategori') }}"><i class="fa fa-user-circle-o"></i> <span class="nav-label">Kategori Item</span></a>
                    </li>
                    <li <?php  echo(Request::segment(1) == 'link'?'class="active"':''); ?> >
                        <a href="{{ route('link') }}"><i class="fa fa-user-circle-o"></i> <span class="nav-label">Link</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>