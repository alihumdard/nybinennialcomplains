<aside class="w-64 h-screen bg-white shadow-lg flex flex-col justify-between">
    <div class="p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-8">Admin Panel</h2>
        <ul class="space-y-4">
            <li>
                <a href="{{ route('dashboard') }}"
                   class="block px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition-all {{ request()->routeIs('dashboard') ? 'bg-blue-100 text-blue-700 font-semibold' : '' }}">
                    Total Submissions
                </a>
            </li>
            <li>
                <a href="{{ route('acount') }}"
                   class="block px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition-all {{ request()->routeIs('profile') ? 'bg-blue-100 text-blue-700 font-semibold' : '' }}">
                   Paid / Unpaid count
                </a>
            </li>
            <li>
                <a href="{{ route('filter') }}"
                   class="block px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition-all {{ request()->routeIs('settings') ? 'bg-blue-100 text-blue-700 font-semibold' : '' }}">
                   Filter by Status
                </a>
            </li>
        </ul>
    </div>

    {{-- Footer or Logout button if needed --}}
    <div class="p-6 text-sm text-gray-500">
        &copy; {{ now()->year }} Your Company
    </div>
</aside>
