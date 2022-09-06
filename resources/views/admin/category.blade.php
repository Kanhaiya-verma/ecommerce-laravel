@include('admin.header')

@include('admin.left-navigation')

<div class="page-wrapper">

    <!-- Header -->
    <header class="main-header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
            <!-- Sidebar toggle button -->
            <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
            </button>

            <span class="page-title">dashboard</span>

            <div class="navbar-right ">

                <ul class="nav navbar-nav">
                    <!-- Offcanvas -->

                    <!-- User Account -->
                    <li class="dropdown user-menu">
                        <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <img src="source/images/user/user-xs-01.jpg" class="user-image rounded-circle"
                                alt="User Image" />
                            <span class="d-none d-lg-inline-block">John Doe</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a class="dropdown-link-item" href="user-profile.html">
                                    <i class="mdi mdi-account-outline"></i>
                                    <span class="nav-text">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-link-item" href="email-inbox.html">
                                    <i class="mdi mdi-email-outline"></i>
                                    <span class="nav-text">Message</span>
                                    <span class="badge badge-pill badge-primary">24</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-link-item" href="user-activities.html">
                                    <i class="mdi mdi-diamond-stone"></i>
                                    <span class="nav-text">Activitise</span></a>
                            </li>
                            <li>
                                <a class="dropdown-link-item" href="user-account-settings.html">
                                    <i class="mdi mdi-settings"></i>
                                    <span class="nav-text">Account Setting</span>
                                </a>
                            </li>

                            <li class="dropdown-footer">
                                <a class="dropdown-link-item" href="{{ route('logout') }}"> <i
                                        class="mdi mdi-logout"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="col-md-6 mx-5 my-5 card card-default">
            <div class="card-header ">
                @if (session()->has('messege'))
                    <div id="toaster-success" class="alert alert-success btn-pill container">

                        {{ session('messege') }}
                    </div>
                @endif

                <h2>Add Categories</h2>
            </div>
            <div class="card-body ">
                <form action="{{ route('category') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="fname">Enter product category</label>
                        <input type="text" name="category" class="form-control" placeholder="eg: clothe's">
                    </div>
                    <div class="form-footer mt-4">

                        <button type="submit" class="btn btn-primary btn-pill">Submit</button>
                    </div>
                </form>
                <table class="table table-bordered text-center mt-5">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cate as $item)
                            <tr>
                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->category_name }}</td>
                                <th class="text-center">
                                    <a href="{{ url('/delete', $item->id) }}">
                                        <i class="mdi mdi-close text-danger" id=del-icon name="del-icon"></i></i>
                                    </a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </header>

    <script src="{{ url('source/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('source/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('source/plugins/simplebar/simplebar.min.js') }}"></script>
    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

    <script src="{{ url('source/plugins/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ url('source/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>



    <script src="{{ url('source/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ url('source/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ url('source/plugins/jvectormap/jquery-jvectormap-us-aea.js') }}"></script>



    <script src="{{ url('source/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ url('source/plugins/daterangepicker/daterangepicker.js') }}"></script>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="{{ url('source/js/custom.js') }}"></script>
