

<!--
      data-bs-theme="dark"

-->

      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" >
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="{{url('admin/')}}" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src= "{{asset('assets/admin/assets/img/admin/logo2.png')}}"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Eventre</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <a href="{{url('admin/')}}" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                      Dashboard
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                  <li class="nav-item">

                    <a href="{{url('admin/admins')}}" class="nav-link active">
                      <p>Admins</p>
                    </a>

                  <a href="{{url('admin/users')}}" class="nav-link active">
                      <p>Users</p>
                  </a>

                    <a href="{{url('admin/events')}}" class="nav-link active">
                      <p>Events</p>
                    </a>

                    <a href="{{url('admin/bookings')}}" class="nav-link active">
                      <p>Bookings</p>
                    </a>



                  </li>


                </ul>
              </li>


            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
