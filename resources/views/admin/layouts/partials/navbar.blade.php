
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand bg-body">

        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>

          </ul>
          <!--end::Start Navbar Links-->


          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">



            <!--begin::User Menu Dropdown-->
              <li class="user-footer">
                  <form action="{{ route('logout') }}" method="post">
                      @csrf
                      <button type="submit" class="btn btn-danger btn-flat float-end">Sign out</button>
                  </form>
              </li>            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->
