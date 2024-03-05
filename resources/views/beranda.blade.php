<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Sidebar</h2>
        <!-- Tambahkan menu-menu Anda di sini -->
        <nav>
            <ul>
                rand
            </ul>
            <ul></ul>
        </nav>
    </div>

    <!-- Konten utama -->
    <div class="content">
        @yield('content')
    </div>
</body>
</html>