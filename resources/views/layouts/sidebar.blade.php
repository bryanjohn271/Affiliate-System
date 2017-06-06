    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="/img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="/#">
                            <span class="clear"> 
                            

                             
                                     <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</strong></span>
                                     <span class="text-muted text-xs block">{{ Auth::user()->account_id }}<b class="caret"></b></span> 
                                

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
                    <a href="{{ url( '/' ) }}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
                </li>

                <li>
                    <a href="{{ url( '/' ) }}"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url( '/' ) }}">All Form</a></li>
                        <li><a href="{{ url( '/' ) }}">Add New</a></li>
                    </ul>
                </li>


                <li>
                    <a href="{{ url( '/' ) }}"><i class="fa fa-database"></i> <span class="nav-label">Data</span></a>
                </li>



                <li>
                    <a href="{{ url( '/' ) }}"><i class="fa fa-th-large"></i> <span class="nav-label">Layouts</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url( '/' ) }}">Descriptions</a></li>
                        <li><a href="{{ url( '/' ) }}">Category</a></li>
                        <li><a href="{{ url( '/' ) }}">Meta Tags</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url( '/' ) }}"><i class="fa fa-phone"></i> <span class="nav-label">Contact</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url( '/' ) }}">All Contact</a></li>
                        <li><a href="{{ url( '/' ) }}">Category</a></li>
                        <li><a href="{{ url( '/' ) }}">Setting</a></li>

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
                    <a href="{{ url( '/slider' ) }}"><i class="fa fa-picture-o"></i> <span class="nav-label">Slider</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url( '/slider/slides' ) }}">Library</a></li>
                        <li><a href="{{ url( '/slider/slides/create' ) }}">Add new</a></li>
                        <li><a href="{{ url( '/slider/slideshow/' ) }}">Category</a></li>
                        <li><a href="{{ url( '/' ) }}/">Setting</a></li>

                    </ul>
                </li> 

                <li>
                    <a href="{{ url( '/user' ) }}"><i class="fa fa-user"></i> <span class="nav-label">User</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url( '/user' ) }}">All User</a></li>
                        <li><a href="{{ url( '/accounts' ) }}">Add new</a></li>
                        <li><a href="{{ url( '/user' ) }}">Permission</a></li>
                        <li><a href="{{ url( '/user' ) }}">Settings</a></li>

                    </ul>
                </li> 

                <li>
                    <a href="{{ url( '/country' ) }}"><i class="fa fa-gear"></i> <span class="nav-label">Setting</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url( '/country' ) }}">Country</a></li>
                        <li><a href="{{ url( '/status' ) }}">Status</a></li>

                    </ul>
                </li> 


            </ul>

        </div>
    </nav>