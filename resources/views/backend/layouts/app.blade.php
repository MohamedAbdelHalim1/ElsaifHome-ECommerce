<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    @yield('styles')
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 200px;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
            text-align: center;
        }
        .sidebar li {
        padding: 10px 0;
        border-bottom: 1px solid #495057;
        }
        .sidebar .site-name {
            margin-bottom: 1rem;
            border-bottom: 1px solid #495057;
            padding-bottom: 1rem;
        }
        .sidebar .site-name .custom-site-name {
            font-size: 18px;
            margin-left:0px;
            font-weight: bold;
        }
        .main-content {
            margin-left: 200px;
            padding: 20px;
            flex: 1;
        }
        .navbar-custom {
            margin-left: 200px;
        }
        .footer {
            margin-left: 200px;
            padding: 10px;
            background-color: #f8f9fa;
            text-align: center;
            flex-shrink: 0;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="site-name d-flex align-items-center">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="height: 40px; width: 60px;">
            </a>
            <a class="nav-link text-white custom-site-name" href="{{ route('admin.dashboard') }}">ElsaifHome</a>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link text-white" href="{{route('categories.index')}}">Categories</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="{{route('products.index')}}">Products</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="{{route('orders.index')}}">Orders</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Stuff</a></li>
        </ul>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('admin.dashboard')}}"><img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="height: 40px; width: auto;"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('stuff.logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('stuff.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; {{ date('Y') }} ArenaHere. All rights reserved.
    </div>

    @yield('scripts')


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
