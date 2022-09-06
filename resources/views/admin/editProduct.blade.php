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

            <span class="page-title">Edit Product</span>

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
        <div class="container">
            <div class="col-md-10 mx-5 my-5 card card-default">
                <div class="card-header ">
                    @if (session()->has('messege'))
                        <div id="toaster-success" class="alert alert-success btn-pill container">

                            {{ session('messege') }}
                        </div>
                    @endif
                    <h2>Edit Products</h2>
                </div>
                <div class="card-body ">

                    <form action="{{ route('product') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlSelect12"> select category</label>
                            <select name="category_id" class="form-control rounded-pill">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}"
                                        @if ($item->id == $product->category_id) selected @endif>
                                        {{ $item->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{ $product->id }}" />
                            <label for="title">Title</label>
                            <input type="text" class="form-control rounded-pill" name="title" id="title"
                                value="{{ $product->title }}" placeholder="Product title">
                        </div>
                        <div class="form-group">
                            <label for="title">Price</label>
                            <input type="text" class="form-control rounded-pill" name="price" id="price"
                                value="{{ $product->price }}" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label for="product_description">Product discription</label>
                            <textarea class="form-control" value="{{ $product->discription }}" name="discription" id="discription" rows="3">{{ $product->discription }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Edit image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                            <div class="my-3 ml-1">
                                <img src="{{ url('uploads/images/' . $product->image_name) }}" style="height:40px;"
                                    alt="Product Image" />
                            </div>
                        </div>
                        <div class="form-footer mt-4">
                            <button type="submit" class="btn btn-primary btn-pill">Submit</button>
                        </div>
                    </form>
                </div>
