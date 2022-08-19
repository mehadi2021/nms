<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <span class="mb-0 text-sm  font-weight-bold">EduCenter</span>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('admin')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('scholarship.create')}}">
                <i class="ni ni-circle-08 text-violet"></i>
                <span class="nav-link-text">Scholarship</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('allBook')}}">
                <i class="ni ni-circle-08 text-yellow"></i>
                <span class="nav-link-text">Books</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.Note.create')}}">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Notice</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.member.list')}}">
                <i class="ni ni-circle-08 text-blue"></i>
                <span class="nav-link-text">Member List</span>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.donar.list')}}">
                  <i class="ni ni-circle-08 text-red"></i>
                  <span class="nav-link-text">Donor Histery</span>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.scholarshippview')}}">
                    <i class="ni ni-circle-08 text-green"></i>
                  <span class="nav-link-text">Apply Scholarview</span>
                </a>
              </li>


            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Report</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.logout')}}">
                <i class="ni ni-send text-indigo"></i>
                <span class="nav-link-text">Sign Out</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->

          <!-- Navigation -->

        </div>
      </div>
    </div>
  </nav>
