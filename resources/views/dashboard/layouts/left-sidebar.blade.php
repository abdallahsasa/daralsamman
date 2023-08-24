<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
            <!-- menu item Dashboard-->
            <li>
                <a href="{{url('/backoffice')}}" data-bs-toggle="collapse" data-bs-target="#dashboard">
                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span></div>
                    <div class="pull-right"><i></i></div>
                    <div class="clearfix"></div>
                </a>
                <!-- menu title -->
            <li class="mt-10 mb-10 text-muted ps-4 font-medium menu-title">Components</li>
            <!-- menu item Elements-->
            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#categories-menu">
                    <div class="pull-left"><i class="fa fa-th-large"></i><span class="right-nav-text">Categories</span>
                    </div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="categories-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.categories.index')}}">Brows All Categories</a></li>
                    <li><a href="{{route('dashboard.categories.create')}}">Add New Category</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#products-menu">
                    <div class="pull-left"><i class="fa fa-cube"></i><span class="right-nav-text">Books</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="products-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.products.index')}}">Brows All Books</a></li>
                    <li><a href="{{route('dashboard.product.create')}}">Add New Book </a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#authors-menu">
                    <div class="pull-left"><i class="fa fa-user"></i><span class="right-nav-text">Authors</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="authors-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.author.index')}}">Brows All Authors</a></li>
                    <li><a href="{{route('dashboard.author.create')}}">Add New Author </a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#auditors-menu">
                    <div class="pull-left"><i class="fa fa-pencil"></i><span class="right-nav-text">Auditors</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="auditors-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.auditor.index')}}">Brows All Audsitors</a></li>
                    <li><a href="{{route('dashboard.auditor.create')}}">Add New Auditor </a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#supplier-menu">
                    <div class="pull-left"><i class="fa fa-truck"></i><span class="right-nav-text">Supplier</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="supplier-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.supplier.index')}}">Brows All Supplier</a></li>
                    <li><a href="{{route('dashboard.supplier.create')}}">Add New Supplier </a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('dashboard.country.create')}}"  >
                    <div class="pull-left"><i class="fa fa-flag"></i><span class="right-nav-text">Countries</span></div>
                    <div class="clearfix"></div>
                </a>

            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#news-menu">
                    <div class="pull-left"><i class="fa fa-newspaper-o"></i><span class="right-nav-text">News</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="news-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="#">Brows All News</a></li>
                    <li><a href="{{url('/backoffice/products/create')}}">Add New News </a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#contact-menu">
                    <div class="pull-left"><i class="fa fa-envelope"></i><span class="right-nav-text">Messages</span>
                    </div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="contact-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.contact-us.index')}}">Requested Messages</a></li>
                    <li><a href="{{route('dashboard.contact-us.create')}}"> Message's Subjects</a></li>

                </ul>

            </li>
            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#site-menu">
                    <div class="pull-left"><i class="fa fa-info"></i><span class="right-nav-text">Website Information</span>
                    </div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="site-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="#">Contact Information </a></li>
                    <li><a href="#">Terms & Conditions </a></li>
                    <li><a href="#"> Privacy Policy </a></li>
                </ul>

            </li>




        </ul>
    </div>
</div>
