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

/* Full width layout adjustments */
.main-content {
    width: 85vw;
    max-width: 100vw;
    margin: 0;
    padding: 0;
    background-color: var(--light-bg);
    min-height: 100vh;
}

/* Navbar adjustments */
.navbar {
    padding: 1rem 2rem;
    width: 100%;
    background: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    position: sticky;
    top: 0;
    z-index: 1000;
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

/* Card and table adjustments */
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

/* Dashboard widgets */
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

/* Search and filter section */
.search-filter-card {
    margin-bottom: 2rem;
    background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
}

.form-control, .form-select {
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    padding: 0.75rem 1rem;
    transition: all 0.3s;
}

.form-control:focus, .form-select:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.15);
}

/* Table styling */
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

/* Badges */
.badge {
    padding: 0.5em 0.75em;
    font-weight: 600;
    letter-spacing: 0.5px;
    border-radius: 6px;
}

/* Buttons */
.btn {
    border-radius: 8px;
    padding: 0.5rem 1rem;
    font-weight: 600;
    transition: all 0.3s;
}

.btn-outline-primary {
    border-color: var(--primary-color);
    color: var(--primary-color);
}

.btn-outline-primary:hover {
    background-color: var(--primary-color);
    color: white;
}

.btn-sm {
    padding: 0.4rem 0.8rem;
    font-size: 0.85rem;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .container-fluid {
        padding: 0 1rem;
    }
    
    .navbar {
        padding: 0.75rem 1rem;
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
    }
}

/* Animation */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.card, .table {
    animation: fadeIn 0.5s ease-out forwards;
}

/* Status colors */
.bg-success {
    background-color: var(--success-color) !important;
}

.bg-warning {
    background-color: var(--warning-color) !important;
}

.bg-danger {
    background-color: var(--danger-color) !important;
}

.bg-primary {
    background-color: var(--primary-color) !important;
}

.text-success {
    color: var(--success-color) !important;
}

.text-danger {
    color: var(--danger-color) !important;
}

.text-primary {
    color: var(--primary-color) !important;
}
</style>

@section('content')
<div class="main-content">
    <!-- Header -->
    <nav class="navbar bg-white border-bottom">
        <div class="">
            <button class="btn d-lg-none" onclick="toggleSidebar()">
                <i class="bi bi-list"></i>
            </button>
            <h5 class="mb-0 fw-semibold">Business Submissions</h5>
        </div>
    </nav>

    <!-- Dashboard Widgets -->
    <div class="container-fluid py-4">
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="card border-0 dashboard-widget">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Total Submissions</p>
                            <h4 class="fw-bold mb-0" id="totalSubmissions">0</h4>
                            <small class="">+2.5% from last month</small>
                        </div>
                        <div class="widget-icon bg-primary bg-opacity-10">
                            <i class="bi bi-file-earmark-text fs-4" style="color: white;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 dashboard-widget">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Paid</p>
                            <h4 class="fw-bold mb-0" id="paidCount">0</h4>
                            <small class="">+15% from last month</small>
                        </div>
                        <div class="widget-icon bg-success bg-opacity-10">
                            <i class="bi bi-currency-dollar fs-4" style="color: white;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 dashboard-widget">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Unpaid</p>
                            <h4 class="fw-bold mb-0" id="unpaidCount">0</h4>
                            <small class="">-5% from last month</small>
                        </div>
                        <div class="widget-icon bg-danger bg-opacity-10">
                            <i class="bi bi-currency-dollar fs-4" style="color: white;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search & Filter -->
        <div class="card border-0 mb-4 search-filter-card">
            <div class="card-body row g-3">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                        <input type="text" id="searchInput" class="form-control" 
                               placeholder="Search business name or DOS ID...">
                    </div>
                </div>
                <div class="col-md-3">
                    <select id="statusFilter" class="form-select">
                        <option value="All">All Status</option>
                        <option value="Pending">Pending</option>
                        <option value="Approved">Approved</option>
                        <option value="Under Review">Under Review</option>
                        <option value="Rejected">Rejected</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select id="paidFilter" class="form-select">
                        <option value="All">All Payments</option>
                        <option value="Paid">Paid</option>
                        <option value="Unpaid">Unpaid</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="card border-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Business Name</th>
                            <th>DOS ID</th>
                            <th>Status</th>
                            <th>Paid</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="dataTableBody">
                        <!-- Data will be populated here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
const mockData = [{
        id: 1,
        businessName: "Tech Solutions Inc.",
        dosId: "DOS-2024-001",
        status: "Approved",
        isPaid: true,
        email: "contact@techsolutions.com",
        trend: "up"
    },
    {
        id: 2,
        businessName: "Green Energy LLC",
        dosId: "DOS-2024-002",
        status: "Under Review",
        isPaid: false,
        email: "info@greenenergy.com",
        trend: "down"
    },
    {
        id: 3,
        businessName: "Marketing Pro Agency",
        dosId: "DOS-2024-003",
        status: "Pending",
        isPaid: true,
        email: "hello@marketingpro.com",
        trend: "up"
    },
    {
        id: 4,
        businessName: "Food Delivery Express",
        dosId: "DOS-2024-004",
        status: "Rejected",
        isPaid: false,
        email: "support@fooddelivery.com",
        trend: "down"
    },
    {
        id: 5,
        businessName: "Construction Masters",
        dosId: "DOS-2024-005",
        status: "Approved",
        isPaid: true,
        email: "office@constructionmasters.com",
        trend: "up"
    },
];

const tableBody = document.getElementById("dataTableBody");
const totalSubmissions = document.getElementById("totalSubmissions");
const paidCount = document.getElementById("paidCount");
const unpaidCount = document.getElementById("unpaidCount");

function getStatusBadge(status) {
    const colors = {
        "Approved": "success",
        "Pending": "warning",
        "Under Review": "primary",
        "Rejected": "danger"
    };
    return `<span class="badge bg-${colors[status] || 'secondary'}">${status}</span>`;
}

function getTrendIcon(trend) {
    return trend === "up" 
        ? '<i class="bi bi-arrow-up-circle-fill text-success ms-2"></i>' 
        : '<i class="bi bi-arrow-down-circle-fill text-danger ms-2"></i>';
}

function populateTable() {
    const search = document.getElementById("searchInput").value.toLowerCase();
    const status = document.getElementById("statusFilter").value;
    const paid = document.getElementById("paidFilter").value;

    const filtered = mockData.filter(item => {
        const matchSearch = item.businessName.toLowerCase().includes(search) || item.dosId.toLowerCase()
            .includes(search);
        const matchStatus = status === "All" || item.status === status;
        const matchPaid = paid === "All" || (paid === "Paid" && item.isPaid) || (paid === "Unpaid" && !item
            .isPaid);
        return matchSearch && matchStatus && matchPaid;
    });

    tableBody.innerHTML = "";
    filtered.forEach(item => {
        tableBody.innerHTML += `
        <tr>
          <td>
            <div class="d-flex align-items-center">
              <div class="avatar me-3" style="width: 40px; height: 40px; background-color: #e9ecef; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                ${item.businessName.charAt(0)}
              </div>
              <div>
                <strong>${item.businessName}</strong>
                <br>
                <small class="text-muted">${item.email}</small>
              </div>
            </div>
          </td>
          <td>${item.dosId}</td>
          <td>${getStatusBadge(item.status)}</td>
          <td>
            <span class="badge bg-${item.isPaid ? 'success' : 'danger'}">
              ${item.isPaid ? 'Paid' : 'Unpaid'}
            </span>
          </td>
          <td>
            <div class="d-flex">
              <button class="btn btn-sm btn-outline-primary me-2" title="View">
                <i class="bi bi-eye"></i>
              </button>
              <button class="btn btn-sm btn-outline-success me-2" title="Download PDF">
                <i class="bi bi-file-earmark-pdf"></i>
              </button>
              <button class="btn btn-sm btn-outline-warning me-2" title="Send Email">
                <i class="bi bi-envelope"></i>
              </button>
              <button class="btn btn-sm btn-outline-secondary" title="Update">
                <i class="bi bi-pencil-square"></i>
              </button>
            </div>
          </td>
        </tr>
      `;
    });

    totalSubmissions.textContent = mockData.length;
    paidCount.textContent = mockData.filter(r => r.isPaid).length;
    unpaidCount.textContent = mockData.filter(r => !r.isPaid).length;
}

function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('open');
}

// Add event listeners
document.getElementById("searchInput").addEventListener("input", populateTable);
document.getElementById("statusFilter").addEventListener("change", populateTable);
document.getElementById("paidFilter").addEventListener("change", populateTable);

// Tooltip initialization
document.addEventListener('DOMContentLoaded', function() {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});

// Initial population
populateTable();
</script>
@endsection