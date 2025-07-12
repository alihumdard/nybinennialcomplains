<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Add this inside <head> tag -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-+3MELxykTj+2jqMfH5Ozq4plmA9MOpPi/87QlsItHAC8ZBi0zzrKZrj3iAv5XYD6vNHE1w0qFSTayKPYQ7Z0eA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @include('includes.script')
</head>
<body class="flex min-h-screen bg-gray-100">

    {{-- Sidebar --}}
    @include('includes.sidebar')

    {{-- Main content --}}
    <main class="flex overflow-auto">
        @yield('content')
    </main>

</body>
</html>
