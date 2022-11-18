
<div class="container-scroller" style="background-color:White">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#092E20">

        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="admin/assets/images/faces/face27.jpg" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">Sgt Monir</h5>
                            <span>MT Nco</span>
                        </div>
                    </div>
                    <a href="" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" style="background-color:White" aria-labelledby="profile-dropdown">
                        <a href="" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Home</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-onepassword  text-info"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar-today text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Log Out</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
<br>


            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Home</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
                    <span class="menu-title">Vehicles</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{url('/jeeplist')}}">Jeep</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{url('/tonlist')}}">3ton</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{url('/pickuplist')}}">Pickup</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/addvehicle')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Add Vehicle</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/drivers')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Drivers</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/schedule-lists')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                    <span class="menu-title">Schedule</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/requestlist')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
                    <span class="menu-title">Request</span>
                </a>
            </li>

        </ul>


        <!-- partial -->

    </nav>
</div>
