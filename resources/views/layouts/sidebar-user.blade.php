
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="/img/profile_small1.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="/#">
                            <span class="clear"> 
                            

                              @if (Auth::guest())
                                      <span class="block m-t-xs"> <strong class="font-bold">Guest</strong></span>
                                         <span class="text-muted text-xs block">User <b class="caret"></b></span> 
                              @else
                                     <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->first_name }}</strong></span>
                                        <span class="text-muted text-xs block">User <b class="caret"></b></span> 
                             @endif    

                            </span>

                             </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="/">Profile</a></li>
                            <li class="divider"></li>



                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                          Logout
                                    </a>

                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="{{ url( '/home' ) }}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li>
                    <a href="{{ url( '/home' ) }}"><i class="fa fa-database"></i> <span class="nav-label">Data</span></a>
                </li>

                <li>
                    <a href="{{ url( '/home' ) }}"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url( '/home' ) }}">All Form</a></li>
                        <li><a href="{{ url( '/home' ) }}">Add New</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url( '/home' ) }}"><i class="fa fa-th-large"></i> <span class="nav-label">Layout Tags</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url( '/home' ) }}">All Content</a></li>
                        <li><a href="{{ url( '/home' ) }}">All Meta</a></li>
                    </ul>
                </li>
  
                <li>
                    <a href="{{ url( '/media' ) }}"><i class="fa fa-picture-o"></i> <span class="nav-label">Media</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url( '/media' ) }}">Library</a></li>
                        <li><a href="{{ url( '/media/create' ) }}">Add New Media</a></li>

                    </ul>
                </li>
     			
     			 <li>
                    <a href="{{ url( '/home' ) }}"><i class="fa fa-phone"></i> <span class="nav-label">Contact</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url( '/home' ) }}">All Contact</a></li>
                        <li><a href="{{ url( '/home' ) }}">Category</a></li>
                        <li><a href="{{ url( '/home' ) }}">Setting</a></li>

                    </ul>
                </li>         

                <li>
                    <a href="{{ url( '/slider' ) }}"><i class="fa fa-picture-o"></i> <span class="nav-label">Slider</span><span class="fa arrow"></span></a>    
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url( '/slider/slides' ) }}">All Slider</a></li>
                        <li><a href="{{ url( '/slider/slides/create' ) }}">Add new</a></li>
                        <li><a href="{{ url( '/slider/slides/create' ) }}/slider/slides/create">Slideshow</a></li>
                        <li><a href="{{ url( '/home' ) }}/">Setting</a></li>

                    </ul>
                </li>

            </ul>

        </div>
    </nav>