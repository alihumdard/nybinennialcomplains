<aside id="sidebar"
    class="w-64 h-screen bg-white shadow-xl flex flex-col justify-between fixed lg:static z-50 transition-transform transform lg:translate-x-0 -translate-x-full">

    <!-- Sidebar Top -->
    <div class="p-6">
        <!-- Logo / Branding -->
        <div class="flex items-center gap-3 mb-8">
            <div class="w-10 h-10 bg-blue-600 text-white flex items-center justify-center rounded-full text-lg font-bold">
                A
            </div>
            <h2 class="text-xl font-bold text-gray-800 tracking-wide">Admin Panel</h2>
        </div>

        <!-- Navigation Links -->
        <nav>
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center gap-3 px-4 py-2 rounded-md transition-all
                        {{ request()->routeIs('dashboard') ? 'bg-blue-100 text-blue-700 font-semibold' : 'text-gray-700 hover:bg-gray-100 hover:text-blue-600' }}">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center gap-3 px-4 py-2 rounded-md transition-all
                        {{ request()->routeIs('profile') ? 'bg-blue-100 text-blue-700 font-semibold' : 'text-gray-700 hover:bg-gray-100 hover:text-blue-600' }}">
                        <i class="bi bi-plus-circle"></i>
                        <span>Add Data</span>
                    </a>
                </li>
                <li>
                    <a
                        class="flex items-center gap-3 px-4 py-2 rounded-md transition-all
                        {{ request()->routeIs('settings') ? 'bg-blue-100 text-blue-700 font-semibold' : 'text-gray-700 hover:bg-gray-100 hover:text-blue-600' }}">
                        <i class="bi bi-funnel"></i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Sidebar Footer -->
    <div class="p-6 text-sm text-gray-500 border-t">
        &copy; {{ now()->year }} Your Company
    </div>
</aside>
