<div class="tm-header">
    <div class="container-fluid">
        <div class="tm-header-inner">
            <a href="#" class="navbar-brand tm-site-name">Classic</a>
            
            <!-- navbar -->
            <nav class="navbar tm-main-nav">

                {{-- <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                    &#9776;
                </button> --}}
                
                <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                    <ul class="nav navbar-nav">
                        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                            <a href="index.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item {{ request()->is('/about') ? 'active' : '' }}">
                            <a href="about.html" class="nav-link">About</a>
                        </li>
                        <li class="nav-item {{ request()->is('/post') ? 'active' : '' }}" >
                            <a href="/post" class="nav-link">Post</a>
                        </li>
                        <li class="nav-item {{ request()->is('/register') ? 'active' : '' }}">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                    </ul>                        
                </div>
                
            </nav>  

        </div>                                  
    </div>            
</div>
