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
                    <li class="nav-item ">
                        <a class="nav-link {{isset($menu) && $menu == 'dashboard' ? 'active' : ''}}" href="{{route('admin_dashboard')}}" ><i class="fas fa-fw fa-chart-area"></i>Dashboard <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{isset($menu) && $menu == 'category' ? 'active' : ''}}" href="#" data-toggle="collapse" aria-expanded="{{isset($menu) && $menu == 'category' ? 'true' : 'false'}}" data-target="#categories" aria-controls="categories"><i class="fas fa-fw fa-file-code"></i>Category</a>
                        <div id="categories" class="collapse submenu {{isset($menu) && $menu == 'category' ? 'show' : ''}}" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{isset($sub_menu) && $sub_menu == 'all_categories' ? 'active' : ''}}" href="{{route('admin_all_categories')}}">All Categories</a>
                                    <a class="nav-link {{isset($sub_menu) && $sub_menu == 'add_category' ? 'active' : ''}}" href="{{route('admin_add_category')}}">Add Category</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-divider">
                        Settings
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
