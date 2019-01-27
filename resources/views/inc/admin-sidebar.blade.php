@section('sidebar')
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('admin/dashboard') || Request::is('for-sale/*')?'active':'' }}" href="/admin/dashboard">
            <span data-feather="dashboard"></span>
            Dashboard <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/listings') || Request::is('for-sale/*')?'active':'' }}" href="/admin/listings">
            <span data-feather="listings"></span>
            Listings
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/bookings') || Request::is('for-sale/*')?'active':'' }}" href="/admin/bookings">
            <span data-feather="bookings"></span>
            Bookings
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/messages') || Request::is('for-sale/*')?'active':'' }}" href="/admin/messages">
            <span data-feather="messages"></span>
            Messages
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/users') || Request::is('for-sale/*')?'active':'' }}" href="/admin/users">
            <span data-feather="users"></span>
            Users
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/pages') || Request::is('for-sale/*')?'active':'' }}" href="/admin/pages">
            <span data-feather="pages"></span>
            Pages
          </a>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Saved reports</span>
        <a class="d-flex align-items-center text-muted" href="#">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Current month
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Last quarter
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Social engagement
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Year-end sale
          </a>
        </li>
      </ul>
    </div>
  </nav>