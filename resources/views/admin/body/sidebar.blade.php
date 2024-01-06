      <!-- ========== Left Sidebar Start ========== -->
      <div class="vertical-menu">
        <div data-simplebar class="h-100">
       

          <!--- Sidemenu -->
          <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title">Menu</li>

              <li>
              <a href="{{ route('dashboard') }}" class="waves-effect">

                  <i class="ri-dashboard-line"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="menu-title">Students Management</li>
              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="ri-user-add-fill"></i>
                  <span>Students</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href=" {{ route('students.create') }} ">Add New Student</a></li>
                  <li><a href="{{ route('students') }}">Students Data</a></li>
        
                </ul>
              </li>
          
          
          </div>
          <!-- Sidebar -->
        </div>
      </div>
      <!-- Left Sidebar End -->