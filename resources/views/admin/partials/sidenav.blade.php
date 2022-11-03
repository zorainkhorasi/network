   <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu

                            </li>
                            {{-- dashboard --}}
                            <li class="nav-item ">
                                <a class="nav-link deactive" href="#" ><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>

                            </li>

                            <li class="nav-item ">
                                <a class="nav-link deactive" href="{{route('product.create')}}" ><i class="fa fa-fw fa-user-circle"></i>Add Product </a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link deactive" href="{{route('addtoCart')}}" ><i class="fa fa-fw fa-user-circle"></i>Product </a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link deactive" href="{{route('product.index')}}" ><i class="fa fa-fw fa-user-circle"></i>Product Details </a>

                            </li>

                            <li class="nav-item ">
                                <a class="nav-link deactive" href="#" ><i class="fa fa-fw fa-user-circle"></i>Order Details </a>

                            </li>




                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
