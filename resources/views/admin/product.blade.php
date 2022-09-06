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

            <span class="page-title">Add Product</span>

            <div class="navbar-right ">

                <ul class="nav navbar-nav">
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
        <div class="row">
            <div class="col-md-4 mx-5 my-5 card card-default">
                <div class="card-header ">
                    @if (session()->has('messege'))
                        <div id="toaster-success" class="alert alert-success btn-pill container">

                            {{ session('messege') }}
                        </div>
                    @endif
                    <h2>Add Products</h2>
                </div>
                <div class="card-body ">

                    <form action="{{ route('product') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label for="exampleFormControlSelect12"> select category</label>
                            <select name="category_id" class="form-control rounded-pill">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            {{-- <input type="hidden" name="id" value="{{ $data->id }}" /> --}}
                            <label for="title">Title</label>
                            <input type="text" class="form-control rounded-pill" name="title" id="title"
                                placeholder="Product title">
                        </div>
                        <div class="form-group">
                            <label for="title">Price</label>
                            <input type="text" class="form-control rounded-pill" name="price" id="price"
                                placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label for="product_description">Product description</label>
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Add image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                        <div class="form-footer mt-4">
                            <button type="submit" class="btn btn-primary btn-pill">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-7 pt-5 mt-5 ">
                <div class="card card-default my-5">

                    <table id="productsTable" class="table table-hover table-product py-2 px-2  m-auto"
                        style="width:100%">

                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Product ID</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $item)
                                <tr>
                                    <td>
                                        <img src="{{ url('uploads/images/' . $item->image_name) }}" alt="Product Image">
                                    </td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->discription }}</td>

                                    <td>
                                        <a class="btn btn-sm btn-outline-success"
                                            href="{{ url('/edit-product', $item->id) }}">Edit</a>
                                        <a class="btn btn-sm btn-outline-danger"
                                            href="{{ url('/delete-product', $item->id) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
                <div class="col-6">
                    {{ $product->links() }}
                </div>
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
