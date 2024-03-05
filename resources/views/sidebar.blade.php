<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Tambahkan Bootstrap CSS -->    
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body style="background-color: #393E46">
    {{-- Navbar atas --}}
    <nav class="navbar navbar-expand navbar-light bg-faded" style="align-items: flex-start; background-color: #222831">
            <a class="navbar-brand" href="{{route('dash')}}">Navbar</a>
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page"
                        >Active
                        <span class="visually-hidden">(current)</span></a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="dropdownId"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Dropdown</a
                    >
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
    </nav>
    

    <div class="container-fluid" >
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-3 col-lg-2 d-md-block bg-dark sidebar" style="height:100%">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('nav')}}">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Sales
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                User
                            </a>
                        </li>
                        <li>fafds</li>
                        <li>fafds</li><li>fafds</li><li style="color: aliceblue">fafds</li><li>fafds</li><li>fafds</li><li>fafds</li><li>fafds</li>
                    </ul>
                </div>
            </aside>

            <!-- Konten -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Tambahkan Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
