<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Category</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css')}}" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css')}}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png')}}" />
  </head>

  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
          <div
            class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100"
          >
          <a class="navbar-brand brand-logo" href="{{ asset('admin/index.html')}}">
            Dashboard
          </a>
            <a class="navbar-brand brand-logo-mini" href="{{ asset('admin/index.html')}}"
              ><img src="{{ asset('admin/images/logo-mini.svg')}}" alt="logo"
            /></a>
            <button
              class="navbar-toggler navbar-toggler align-self-center"
              type="button"
              data-toggle="minimize"
            >
              <span class="mdi mdi-sort-variant"></span>
            </button>
          </div>
        </div>
        <div
          class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
        >
          <ul class="navbar-nav mr-lg-4 w-100">
            <li class="nav-item nav-search d-none d-lg-block w-100">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="search">
                    <i class="mdi mdi-magnify"></i>
                  </span>
                </div>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search now"
                  aria-label="search"
                  aria-describedby="search"
                />
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown me-1">
              <a
                class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                id="messageDropdown"
                href="#"
                data-bs-toggle="dropdown"
              >
                <i class="mdi mdi-message-text mx-0"></i>
                <span class="count"></span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="messageDropdown"
              >
                <p class="mb-0 font-weight-normal float-left dropdown-header">
                  Messages
                </p>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <img
                      src="{{ asset('admin/images/faces/face4.jpg')}}"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">David Grey</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <img
                      src="{{ asset('admin/images/faces/face2.jpg')}}"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">Tim Cook</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <img
                      src="{{ asset('admin/images/faces/face3.jpg')}}"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">Johnson</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown me-4">
              <a
                class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
                id="notificationDropdown"
                href="#"
                data-bs-toggle="dropdown"
              >
                <i class="mdi mdi-bell mx-0"></i>
                <span class="count"></span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="notificationDropdown"
              >
                <p class="mb-0 font-weight-normal float-left dropdown-header">
                  Notifications
                </p>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
                id="profileDropdown"
              >
                <img src="{{ asset('admin/images/faces/face5.jpg')}}" alt="profile" />
                <span class="nav-profile-name">Louis Barnett</span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="profileDropdown"
              >
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('dashboard')}}">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('category')}}">
                    <i class="mdi mdi-apps menu-icon"></i>
                    <span class="menu-title">Category</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="collapse"
                    href="{{ asset('admin/#ui-basic')}}"
                    aria-expanded="false"
                    aria-controls="ui-basic"
                  >
                    <i class="mdi mdi-circle-outline menu-icon"></i>
                    <span class="menu-title">DropDown</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ asset('admin/pages/forms/basic_elements.html')}}"
                          >Main Category</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ asset('admin/pages/ui-features/typography.html')}}"
                          >Sub Category</a
                        >
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 mx-auto grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Main Category form</h4>
                    <form class="forms-sample" method="post" action="{{ url('category') }}">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">Category Name</label>
                        <input
                          type="text"
                          class="form-control"
                          name="catName"
                          id="exampleInputUsername1"
                          placeholder="Enter Product Category Name"
                        />
                      </div>
                      <button type="submit" class="btn btn-primary me-2">
                        Submit
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 mx-auto grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Show Category</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>SL</th>
                            <th>Category Name</th>
                            <th>Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $item)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->category_name }}</td>
                            <td class="d-flex">
                              <a href="{{ url('category/'.$item->id.'/edit') }}" class ="btn btn-primary btn-sm me-2">Edit</a> 
                              <form action="{{ url('category/'.$item->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type= "submit" class="btn btn-danger btn-sm">Delete</button>
                              </form>
                            </td>
                            
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            >
              <span
                class="text-muted text-center text-sm-left d-block d-sm-inline-block"
                >Copyright ©
                <a href="https://www.bootstrapdash.com/" target="_blank"
                  >bootstrapdash.com </a
                >2021</span
              >
              <span
                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
                >Only the best
                <a href="https://www.bootstrapdash.com/" target="_blank">
                  Bootstrap dashboard
                </a>
                templates</span
              >
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
        <!-- <div class="main-panel">
          <div class="content-wrapper">
            
          </div>
      </div> -->

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('admin/js/template.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('admin/js/file-upload.js')}}"></script>
    <!-- End custom js for this page-->
  </body>
</html>
