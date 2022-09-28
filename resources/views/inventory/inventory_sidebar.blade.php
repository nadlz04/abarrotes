<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="{{route('admin.index')}}">
            <div class="logo-img">
               <img height="30" src="{{ asset('img/logo_white.png')}}" class="header-brand-img" title="RADMIN">
            </div>
        </a>
        <div class="sidebar-action"><i class="ik ik-arrow-left-circle"></i></div>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    @php
        $segment1 = request()->segment(1);
        $segment2 = request()->segment(2);
    @endphp

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-item {{ ($segment2 == 'inventory') ? 'active' : '' }}">
                    <a href="{{url('/inventory')}}"><i class="ik ik-bar-chart-2"></i><span>{{ __('Estadísticas')}}</span></a>
                </div>

                <!-- start inventory pages -->
                <div class="nav-item {{ ($segment1 == 'products') ? 'active open' : '' }} has-sub">
                    <a href="#"><i class="ik ik-headphones"></i><span>{{ __('Productos')}}</span></a>
                    <div class="submenu-content">
                        <a href="{{url('products/create')}}" class="menu-item {{ ($segment1 == 'products' && $segment2 == 'create') ? 'active' : '' }}">{{ __('Add Product')}}</a>
                        <a href="{{url('products')}}" class="menu-item {{ ($segment1 == 'products' && $segment2 == '') ? 'active' : '' }}">{{ __('List Producs')}}</a>
                    </div>
                </div>
                <div class="nav-item {{ ($segment1 == 'categories') ? 'active' : '' }}">
                    <a href="{{url('categories')}}"><i class="ik ik-list"></i><span>{{ __('Categorias')}}</span></a>
                </div>
                <div class="nav-item {{ ($segment1 == 'sales') ? 'active open' : '' }} has-sub">
                    <a href="#"><i class="ik ik-shopping-cart"></i><span>{{ __('Ventas')}}</span></a>
                    <div class="submenu-content">
                        <a href="{{url('sales/create')}}" class="menu-item {{ ($segment1 == 'sales' && $segment2 == 'create') ? 'active' : '' }}">{{ __('Realizar venta')}}</a>
                        <a href="{{url('sales')}}" class="menu-item {{ ($segment1 == 'sales' && $segment2 == '') ? 'active' : '' }}">{{ __('Listar Ventas')}}</a>
                    </div>
                </div>
                <div class="nav-item {{ ($segment1 == 'purchases') ? 'active open' : '' }} has-sub">
                    <a href="#"><i class="ik ik-truck"></i><span>{{ __('Compras')}}</span></a>
                    <div class="submenu-content">
                        <a href="{{url('purchases/create')}}" class="menu-item {{ ($segment1 == 'purchases' && $segment2 == 'create') ? 'active' : '' }}">{{ __('Agregar compras')}}</a>
                        <a href="{{url('purchases')}}" class="menu-item {{ ($segment1 == 'purchases' && $segment2 == '') ? 'active' : '' }}">{{ __('Listar compras')}}</a>
                    </div>
                </div>
                <div class="nav-item {{ ($segment1 == 'suppliers' || $segment1 == 'customers') ? 'active open' : '' }} has-sub">
                    <a href="#"><i class="ik ik-users"></i><span>{{ __('Personas')}}</span></a>
                    <div class="submenu-content">
                        <a href="{{url('suppliers')}}" class="menu-item {{ ($segment1 == 'suppliers') ? 'active' : '' }}">{{ __('Proovedores')}}</a>
                        <a href="{{url('customers')}}" class="menu-item {{ ($segment1 == 'customers') ? 'active' : '' }}">{{ __('Clientes')}}</a>
                    </div>
                </div>
                <div class="nav-item {{ ($segment1 == 'users' || $segment1 == 'roles'||$segment1 == 'permission' ||$segment1 == 'user') ? 'active open' : '' }} has-sub">
                    <a href="#"><i class="ik ik-user"></i><span>{{ __('Adminstrador')}}</span></a>
                    <div class="submenu-content">
                        <!-- only those have manage_user permission will get access -->
                        @can('manage_user')
                        <a href="{{url('users')}}" class="menu-item {{ ($segment1 == 'users') ? 'active' : '' }}">{{ __('Usuarios')}}</a>
                        <a href="{{url('user/create')}}" class="menu-item {{ ($segment1 == 'user' && $segment2 == 'create') ? 'active' : '' }}">{{ __('Agregar Usuario')}}</a>
                         @endcan
                         <!-- only those have manage_role permission will get access -->
                        @can('manage_roles')
                        <a href="{{url('roles')}}" class="menu-item {{ ($segment1 == 'roles') ? 'active' : '' }}">{{ __('Roles')}}</a>
                        @endcan
                        <!-- only those have manage_permission permission will get access -->
                        @can('manage_permission')
                        <a href="{{url('permission')}}" class="menu-item {{ ($segment1 == 'permission') ? 'active' : '' }}">{{ __('Permisos')}}</a>
                        @endcan
                    </div>
                </div>



                <!-- end inventory pages -->


        </div>
    </div>
</div>
