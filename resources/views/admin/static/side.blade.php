<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="user-profile">
    <div class="user-image">
      <img src="{{url('Backend/images/faces/face29.jpg')}}">
    </div>
    <div class="user-name">
        Sifat Nowshin
    </div>
    <div class="user-designation">
        Developer
    </div>
  </div>
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('show.dashboard')}}">
        <!-- <i class="icon-box menu-icon"></i> -->
        <span class="menu-title">Dashboard</span>

        <i class="menu-arrow"></i>
      </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="pages/charts/chartjs.html">
        <!-- <i class="icon-disc menu-icon"></i> -->
        <span class="menu-title">Admin</span>
        <i class="menu-arrow"></i>
      </a>
       <!-- <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="">Sailor</a></li>
          <li class="nav-item"> <a class="nav-link" href="">exam</a></li>
          <li class="nav-item"> <a class="nav-link" href=""></a></li> 
        </ul>
      </div> -->

    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('show.candidate')}} ">
          <!-- <i class="icon-disc menu-icon"></i> -->
          <span class="menu-title">Candidate</span>
          <i class="menu-arrow"></i>
        </a>
    <li class="nav-item" >
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <!-- <i class="icon-disc menu-icon"></i> -->
        <span class="menu-title">Sailor</span>
        <i class="menu-arrow"></i>
      </a>
        <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('bring.sailor')}}">Sailor Profile</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('show.rank')}}">Sailor Rank</a></li>
          </ul>
      </div> 
    </li>

    <li class="nav-item" >
      <a class="nav-link" data-toggle="collapse" href="#ui-course" aria-expanded="false" aria-controls="ui-basic">
        <!-- <i class="icon-disc menu-icon"></i> -->
        <span class="menu-title">Courses</span>
        <i class="menu-arrow"></i>
      </a>
        <div class="collapse" id="ui-course">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('create.course')}}">Creat Course</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('show.basic')}}">Basic Course</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('show.special')}}">Specialized Course</a></li>
          {{-- <li class="nav-item"> <a class="nav-link" href="/ShowOther">Others Course</a></li> --}}
          </ul>
      </div> 
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('select.course')}}">
        <!-- <i class="icon-help menu-icon"></i> -->
        <span class="menu-title">Course_Eligiblity</span>
        <i class="menu-arrow"></i>
      </a>
    </li>
    <!-- courses --> 
    
    
    {{-- <li style="margin-left: 30px; margin-top: 20px;">
      <div href="#" data-toggle="collapse" data-target="#products" aria-expanded="true"style="color: grey;">
              
              <i class="fa fa-fw fa-tags" style="color: grey;"></i> Products
              <i class="fa fa-fw fa-caret-down"></i>
              
      </div>
      
      <ul id="products" class="collapse" style="margin-top: 20px; margin-left:20px;" >
          <li style="margin-bottom: 17px;">
              <a href="#" style="color: grey;"> Insert Product </a>
          </li>
          <li>
              <a href="#" style="color: grey;"> View Products </a>
          </li>
      </ul>
      
  </li> --}}




    <li class="nav-item">
      <a class="nav-link" href="{{route('fillform')}}">
        <!-- <i class="icon-command menu-icon"></i> -->
        <span class="menu-title">Admission</span>
        <i class="menu-arrow"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('show.ship')}}">
        <!-- <i class="icon-help menu-icon"></i> -->
        <span class="menu-title">Ship</span>
        <i class="menu-arrow"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('show.hazzcriteria')}}">
        <!-- <i class="icon-help menu-icon"></i> -->
        <span class="menu-title">Hazz pannel</span>
        <i class="menu-arrow"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('show.report')}}">
        <!-- <i class="icon-head menu-icon"></i> -->
        <span class="menu-title">Report</span>
        <i class="menu-arrow"></i>
      </a>
       <div class="collapse" id="auth">
        <!-- <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">  </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">  </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> </a></li> -->
        <!-- </ul> -->
      </div> 
    </li>
    
  </ul>
</nav>