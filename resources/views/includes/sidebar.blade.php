<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
    .sidebar-link.active {
        background-color: #E0E7FF;
        color: #4361ee;
        font-weight: 600;
    }

    .sidebar-link.active i {
        color: #4361ee;
    }

    .mobile-menu-button.hide {
        display: none !important;
    }

    .mobile-menu-button {
        display: none;
        position: absolute;
        top: 1rem;
        left: 1rem;
        z-index: 60;
        padding: 0.5rem;
        border-radius: 0.375rem;
        background-color: #4361ee;
        color: white;
        transition: all 0.3s ease;
    }

    .mobile-menu-button i {
        transition: transform 0.3s ease;
    }

    .sidebar-close-button {
        display: none;
        position: absolute;
        top: 1rem;
        right: 1rem;
        z-index: 70;
        padding: 0.5rem;
        border-radius: 0.375rem;
        background-color: #4361ee;
        color: white;
        transition: all 0.3s ease;
    }

    .sidebar-close-button:hover {
        background-color: #3547c9;
    }

    @media (max-width: 768px) {
        .mobile-menu-button {
            display: block;
        }

        aside {
            position: fixed;
            z-index: 50;
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
            height: 100vh;
            top: 0;
            left: 0;
        }

        aside.open {
            transform: translateX(0);
        }

        aside.open .sidebar-close-button {
            display: block;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 40;
        }

        .overlay.open {
            display: block;
        }
    }
    </style>
</head>

<body>

    <button class="mobile-menu-button md:hidden">
        <i class="fas fa-bars"></i>
    </button>

    <div class="overlay"></div>

    <aside class="w-64 bg-white border-r border-gray-200 fixed md:relative h-screen z-50">
        <button class="sidebar-close-button">
            <i class="fas fa-times"></i>
        </button>

        <div class="bg-[#4361ee] text-white p-4 md:p-6 rounded-b-2xl shadow-inner">
            <h2 class="text-xl md:text-2xl font-bold tracking-wide">Admin Panel</h2>
        </div>

        <nav class="mt-6 md:mt-8 px-2 md:px-4 space-y-1 md:space-y-2">
            <a href="{{ route('admin.dashboard') }}"
                class="sidebar-link flex items-center w-full px-3 py-2 md:px-4 md:py-3 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-[#4361ee] transition-all duration-200 group {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i
                    class="fas fa-tachometer-alt mr-2 md:mr-3 text-[#4361ee] group-hover:text-[#4361ee] text-sm md:text-base"></i>
                <span class="text-sm md:text-base">Dashboard</span>
            </a>

            <a href="{{ route('admin.import.form') }}"
                class="sidebar-link flex items-center w-full px-3 py-2 md:px-4 md:py-3 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-[#4361ee] transition-all duration-200 group">
                <i
                    class="fas fa-plus-circle mr-2 md:mr-3 text-[#4361ee] group-hover:text-[#4361ee] text-sm md:text-base"></i>
                <span class="text-sm md:text-base">Add Data</span>
            </a>

            <a href="#"
                class="sidebar-link flex items-center w-full px-3 py-2 md:px-4 md:py-3 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-[#4361ee] transition-all duration-200 group">
                <i class="fas fa-cog mr-2 md:mr-3 text-[#4361ee] group-hover:text-[#4361ee] text-sm md:text-base"></i>
                <span class="text-sm md:text-base">Settings</span>
            </a>
        </nav>
    </aside>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.querySelector('.mobile-menu-button');
        const sidebar = document.querySelector('aside');
        const overlay = document.querySelector('.overlay');
        const closeButton = document.querySelector('.sidebar-close-button');

        function toggleSidebar() {
            sidebar.classList.toggle('open');
            overlay.classList.toggle('open');
            menuButton.classList.toggle('hide');
            document.body.style.overflow = sidebar.classList.contains('open') ? 'hidden' : '';
        }

        menuButton.addEventListener('click', toggleSidebar);
        closeButton.addEventListener('click', toggleSidebar);
        overlay.addEventListener('click', toggleSidebar);

        document.querySelectorAll('.sidebar-link').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 768) toggleSidebar();
            });
        });
    });
    </script>
</body>
</html>