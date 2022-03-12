<div class="navbar-header">
     <a class="navbar-brand" href="{{ route('home') }}">Sempiternal Club.</a>
 </div>

 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
 </button>

 <!-- Top Navigation: Right Menu -->
 <ul class="nav navbar-right navbar-top-links">
     <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#">
             <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <b class="caret"></b>
         </a>
         <ul class="dropdown-menu dropdown-user">
             {{-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
             </li> --}}
             {{-- <li class="divider"></li>
             <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
             </li> --}}
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();" role="button">
                     logout <i class="fas fa-sign-out-alt"></i>
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf
                 </form>

             </li>
         </ul>
     </li>
 </ul>
