<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="{{url('index')}}" class="logo d-flex align-items-center">
    <span class="d-none d-lg-block">Admin</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div>

<!--
    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div> -->

<nav class="header-nav ms-auto">

<ul class="d-flex align-items-center">
  <li class="nav-item dropdown pe-3">
    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
      <img src="{{asset('img/IMG_0117.jpg')}}" alt="Profile" class="rounded-circle">&nbsp;
      {{-- <span class="d-none d-md-block dropdown-toggle ps-2">سبحان شیخ</span> --}}
      <span class="d-none d-md-block">سبحان شیخ</span>
    </a>

    {{-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

      <li class="dropdown-header">
        <h6>Kevin Anderson</h6>
        <span>Web Designer</span>
      </li>

      <li>
        <hr class="dropdown-divider">
      </li>

      <li>
        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>My Profile</span>
        </a>
      </li>

      <li>
        <hr class="dropdown-divider">
      </li>

      <li>
        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
          <i class="bi bi-gear"></i>
          <span>Account Settings</span>
        </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>Need Help?</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul> --}}
      <!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header>

<!-- ================== SIDEBAR ====================== -->

<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{url('index')}}">
      <i class="bi bi-pie-chart"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
    <i class="bi bi-grid"></i><span>MEMBERS</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('/members')}}">
            <i class="bi bi-list-columns-reverse" style="font-size: 15px;"></i>
              <span>List Of Members</span>
            </a>
          </li>
          <li>
            <a href="{{url('/add-member')}}">
              <i class="bi bi-plus-circle" style="font-size: 15px;"></i><span>Add Member</span>
            </a>
          </li>
          <li>
            <a href="{{url('/update-members')}}">
            <i class="bi bi-pencil-square" style="font-size: 15px;"></i><span>Update Member</span>
            </a>
          </li>
          <li>
            <a href="{{url('/delete-members')}}">
              <i class="bi bi-trash" style="font-size: 15px;"></i><span>Delete Member</span>
            </a>
          </li>

        </ul>
      </li>

          <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-left" style="font-size: 20px;"></i>
          <span>Login</span>
        </a>
  </aside>
