@extends('layouts.main')
@include('includes.script')
@include('includes.head')

<style>
:root {
    --primary-color: #4361ee;
    --secondary-color: #3f37c9;
    --success-color: #4cc9f0;
    --danger-color: #7c7a7bff;
    --warning-color: #f8961e;
    --info-color: #4895ef;
    --light-bg: #f8f9fa;
    --dark-text: #2b2d42;
    --light-text: #8d99ae;
    --card-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    --card-hover-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

.main-content {
    width: 90vw;
    background-color: var(--light-bg);
    min-height: 100vh;
    padding-bottom: 2rem;
}

.navbar {
    padding: 1rem 2rem;
    width: 100%;
    background: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    position: sticky;
    top: 0;
    z-index: 10;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar h5 {
    color: var(--dark-text);
    font-weight: 700;
    margin: 0;
    font-size: 1.5rem;
}

.container-fluid {
    width: 100%;
    padding: 0 2rem;
    margin: 0 auto;
}

.card {
    width: 100%;
    margin-bottom: 1.5rem;
    border: none;
    border-radius: 12px;
    box-shadow: var(--card-shadow);
    transition: all 0.3s ease;
}

.card:hover {
    box-shadow: var(--card-hover-shadow);
    transform: translateY(-2px);
}

.table-responsive {
    width: 100%;
    overflow-x: auto;
    border-radius: 12px;
}

.table-responsive table {
    min-width: 600px;
}

.dashboard-widget {
    min-height: 120px;
    border-left: 4px solid var(--primary-color);
    transition: all 0.3s ease;
}

.dashboard-widget:hover {
    transform: translateY(-3px);
}

.widget-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
}

.search-filter-card {
    margin-bottom: 2rem;
    background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
}

.form-control,
.form-select {
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    padding: 0.75rem 1rem;
    transition: all 0.3s;
}

.form-control:focus,
.form-select:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.15);
}

.table {
    width: 100%;
    margin-bottom: 0;
    border-collapse: separate;
    border-spacing: 0;
}

.table thead th {
    background-color: var(--primary-color);
    color: white;
    padding: 1rem;
    border: none;
    font-weight: 600;
}

.table tbody td {
    padding: 1rem;
    vertical-align: middle;
    border-bottom: 1px solid #f0f0f0;
}

.table tbody tr:last-child td {
    border-bottom: none;
}

.table tbody tr:hover {
    background-color: rgba(67, 97, 238, 0.05);
}

.badge {
    padding: 0.5em 0.75em;
    font-weight: 600;
    letter-spacing: 0.5px;
    border-radius: 6px;
}

.btn {
    border-radius: 8px;
    padding: 0.5rem 1rem;
    font-weight: 600;
    transition: all 0.3s;
}

.btn-sm {
    padding: 0.4rem 0.8rem;
    font-size: 0.85rem;
}

/* Add this new style */
.action-form {
    display: inline-block;
}

.pagination {
    justify-content: center;
}

.badge.bg-success,
.badge.bg-paid {
    background-color: #28a745 !important;
}

.badge.bg-warning,
.badge.bg-pending {
    background-color: #ffc107 !important;
}

.badge.bg-primary,
.badge.bg-under-review {
    background-color: #007bff !important;
}

.badge.bg-danger,
.badge.bg-unpaid,
.badge.bg-rejected {
    background-color: #dc3545 !important;
}

/* Language dropdown styles */
.lang-dropdown {
    position: relative;
}

.lang-dropdown .dropdown-toggle {
    display: flex;
    align-items: center;
    gap: 5px;
    color: var(--dark-text);
    text-decoration: none;
    font-weight: 500;
    padding: 5px 10px;
    border-radius: 6px;
    transition: background-color 0.3s;
}

.lang-dropdown .dropdown-toggle:hover {
    background-color: rgba(0, 0, 0, 0.05);
}

.lang-dropdown .dropdown-menu {
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    border: 1px solid #eee;
    min-width: 150px;
}

.lang-dropdown .dropdown-item {
    font-weight: 500;
    padding: 8px 16px;
    transition: background-color 0.2s;
}

.lang-dropdown .dropdown-item.active {
    background-color: #e9ecef;
    color: #0d6efd;
}

@media (max-width: 1020px) {
    .main-content {
        width: 100vw;
    }

    .navbar {
        display: none;
    }

    .container-fluid {
        margin: 2rem 0rem;
    }
}

@media (max-width: 768px) {
    .container-fluid {
        padding: 0 1rem;
    }

    .main-content {
        width: 100vw;
    }

    .navbar h5 {
        font-size: 1.2rem;
    }

    .dashboard-widget {
        margin-bottom: 1rem;
    }

    .search-filter-card .col-md-6,
    .search-filter-card .col-md-3 {
        margin-bottom: 1rem;
    }

    .table thead th,
    .table tbody td {
        padding: 0.75rem;
        font-size: 0.85rem;
    }

    .btn-sm {
        width: 100%;
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.card,
.table {
    animation: fadeIn 0.5s ease-out forwards;
}
</style>

@section('content')
<div class="main-content">
    <nav class="navbar bg-white border-bottom">
        <div>
            <h5 class="mb-0 fw-semibold">{{ __('Business Submissions') }}</h5>
        </div>
        <!-- Language Dropdown Added Here -->
        <div class="lang-dropdown nav-item dropdown">
            <a class="dropdown-toggle" href="#" id="navbarDropdownLangDesktop" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-translate"></i> {{ 'Disponible en españo' }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownLangDesktop">
                <li>
                    <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}"
                        href="{{ route('lang.switch', 'en') }}">
                        English
                    </a>
                </li>
                <li>
                    <a class="dropdown-item {{ app()->getLocale() == 'es' ? 'active' : '' }}"
                        href="{{ route('lang.switch', 'es') }}">
                        French
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid py-4">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
            <div class="col">
                <div class="card border-0 dashboard-widget">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">{{ __('Total Submissions') }}</p>
                            <h4 class="fw-bold mb-0">{{ $totalCount }}</h4>
                        </div>
                        <div class="widget-icon bg-primary bg-opacity-10 text-primary">
                            <i class="bi bi-file-earmark-text fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 dashboard-widget" style="border-color: #28a745 !important;">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">{{ __('Paid') }}</p>
                            <h4 class="fw-bold mb-0">{{ $paidCount }}</h4>
                        </div>
                        <div class="widget-icon bg-success bg-opacity-10 text-success">
                            <i class="bi bi-check-circle-fill fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 dashboard-widget" style="border-color: #dc3545 !important;">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">{{ __('Unpaid') }}</p>
                            <h4 class="fw-bold mb-0">{{ $unpaidCount }}</h4>
                        </div>
                        <div class="widget-icon bg-danger bg-opacity-10 text-danger">
                            <i class="bi bi-x-circle-fill fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-0 mb-4 search-filter-card">
            <form method="GET" action="{{ route('admin.dashboard') }}">
                <div class="card-body row g-3 align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                            <input type="text" name="search" class="form-control border-start-0"
                                placeholder={{ __('Search business name or DOS ID...') }} value="{{ request('search') }}">
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <select name="status" class="form-select">
                            <option value="All">{{ __('All Status') }}</option>
                            <option value="Pending" {{ request('status') == 'Pending' ? 'selected' : '' }}>{{ __('Pending') }}
                            </option>
                            <option value="Approved" {{ request('status') == 'Approved' ? 'selected' : '' }}>{{ __('Approved') }}
                            </option>
                            <option value="Under Review" {{ request('status') == 'Under Review' ? 'selected' : '' }}>
                                {{ __('Under Review') }}</option>
                            <option value="Rejected" {{ request('status') == 'Rejected' ? 'selected' : '' }}>{{ __('Rejected') }}
                            </option>
                        </select>
                    </div>
                    <div class="col-12 col-md-2">
                        <select name="paid" class="form-select">
                            <option value="All">{{ __('All Payments') }}</option>
                            <option value="Paid" {{ request('paid') == 'Paid' ? 'selected' : '' }}>{{ __('Paid') }}</option>
                            <option value="Unpaid" {{ request('paid') == 'Unpaid' ? 'selected' : '' }}>{{ __('Unpaid') }}</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-2">
                        <button type="submit" class="btn btn-primary w-100">{{ __('Filter') }}</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="d-flex justify-content-end mb-3">
            <form method="POST" action="{{ route('admin.submissions.bulk-mail') }}" id="bulkMailForm">
                @csrf
                <div id="bulkSubmissionIdsContainer"></div>
                <button type="submit" class="btn btn-info" id="bulkMailBtn" disabled>{{ __('Send Mail to Selected') }} (<span
                        id="selectedCount">0</span>)</button>
            </form>
        </div>
        <div class="card border-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th style="width: 1%;"><input type="checkbox" id="selectAllCheckbox"></th>
                            <th>{{ __('Business Name') }}</th>
                            <th>{{ __('DOS ID') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Paid') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($submissions as $submission)
                        <tr>
                            <td><input type="checkbox" name="submission_ids[]" value="{{ $submission->id }}"
                                    class="row-checkbox"></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-3"
                                        style="width: 40px; height: 40px; background-color: #e9ecef; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                                        {{ strtoupper(substr($submission->business_name, 0, 1)) }}
                                    </div>
                                    <div>
                                        <strong>{{ $submission->business_name }}</strong><br>
                                        <small class="text-muted">{{ $submission->email }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $submission->dos_id }}</td>
                            <td>
                                @php
                                $statusClass = str_replace(' ', '-', strtolower($submission->status));
                                @endphp
                                <span class="badge bg-{{ $statusClass }}">{{ $submission->status }}</span>
                            </td>
                            <td>
                                <span
                                    class="badge bg-{{ $submission->is_paid ? 'paid' : 'unpaid' }}">{{ $submission->is_paid ? 'Paid' : 'Unpaid' }}</span>
                            </td>
                            <td>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="{{ route('admin.submissions.show', $submission->id) }}"
                                        class="btn btn-sm btn-outline-primary" title="View"><i
                                            class="bi bi-eye"></i></a>
                                    <a href="{{ route('submission.pdf', $submission->id) }}"
                                        class="btn btn-sm btn-outline-success" title="Download PDF"><i
                                            class="bi bi-file-earmark-pdf"></i></a>
                                    <form class="action-form" method="POST"
                                        action="{{ route('admin.submission.send-mail', $submission->id) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-outline-warning"
                                            title="Send Email"><i class="bi bi-envelope"></i></button>
                                    </form>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" title="Update"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">{{ __('No submissions found matching your criteria.') }}</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if ($submissions->hasPages())
            <div class="card-footer bg-white">
                {{ $submissions->appends(request()->query())->links() }}
            </div>
            @endif
        </div>
    </div>
</div>

{{-- ✅ Add Bootstrap Bundle JS here to enable dropdown --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Language dropdown initialization
    const dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
    dropdownElementList.map(function(dropdownToggleEl) {
        return new bootstrap.Dropdown(dropdownToggleEl);
    });

    const selectAllCheckbox = document.getElementById('selectAllCheckbox');
    const rowCheckboxes = document.querySelectorAll('.row-checkbox');
    const bulkMailBtn = document.getElementById('bulkMailBtn');
    const selectedCountSpan = document.getElementById('selectedCount');
    const bulkMailForm = document.getElementById('bulkMailForm');
    const bulkSubmissionIdsContainer = document.getElementById('bulkSubmissionIdsContainer');

    function updateSelectionState() {
        const selectedCheckboxes = document.querySelectorAll('.row-checkbox:checked');
        const count = selectedCheckboxes.length;
        selectedCountSpan.textContent = count;
        bulkMailBtn.disabled = count === 0;

        bulkSubmissionIdsContainer.innerHTML = '';
        selectedCheckboxes.forEach(cb => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'submission_ids[]';
            input.value = cb.value;
            bulkSubmissionIdsContainer.appendChild(input);
        });

        if (rowCheckboxes.length > 0 && count === rowCheckboxes.length) {
            selectAllCheckbox.checked = true;
        } else {
            selectAllCheckbox.checked = false;
        }
    }

    selectAllCheckbox.addEventListener('change', function() {
        rowCheckboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
        updateSelectionState();
    });

    rowCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateSelectionState);
    });

    updateSelectionState();
});
</script>
@endsection
