<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
