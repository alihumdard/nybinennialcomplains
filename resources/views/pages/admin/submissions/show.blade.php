@extends('layouts.main')
@include('includes.script')
@include('includes.head')

<style>
.main-content {
    width: 90vw;
    background-color: #f8f9fa;
    min-height: 100vh;
}
.detail-card {
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
}
.card-header-title {
    font-weight: 600;
    color: #4361ee;
}
.detail-group {
    margin-bottom: 1rem;
}
.detail-label {
    font-weight: 600;
    color: #555;
}
.detail-value {
    color: #333;
}
</style>

@section('content')
<div class="main-content">
    <nav class="navbar bg-white border-bottom">
        <div>
            <h5 class="mb-0 fw-semibold">Submission Details</h5>
        </div>
    </nav>
    <div class="container-fluid py-4">
        <div class="card detail-card">
            <div class="card-header">
                <h5 class="card-header-title">{{ $submission->business_name }}</h5>
                <small class="text-muted">DOS ID: {{ $submission->dos_id }}</small>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-group">
                            <span class="detail-label">Status:</span>
                            <span class="detail-value">{{ $submission->status }}</span>
                        </div>
                        <div class="detail-group">
                            <span class="detail-label">Payment:</span>
                            <span class="detail-value">{{ $submission->is_paid ? 'Paid' : 'Unpaid' }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="detail-group">
                            <span class="detail-label">Email:</span>
                            <span class="detail-value">{{ $submission->email }}</span>
                        </div>
                         <div class="detail-group">
                            <span class="detail-label">Filing Date:</span>
                            <span class="detail-value">{{ $submission->initial_dos_filing_date }}</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <h6>DOS Process Info</h6>
                        <p class="mb-1"><span class="detail-label">Name:</span> {{ $submission->dos_process_name }}</p>
                        <p class="mb-1"><span class="detail-label">Address:</span> {{ $submission->dos_process_address_1 }}</p>
                        @if($submission->dos_process_address_2)<p class="mb-1">{{ $submission->dos_process_address_2 }}</p>@endif
                        <p class="mb-1">{{ $submission->dos_process_city }}, {{ $submission->dos_process_state }} {{ $submission->dos_process_zip }}</p>
                    </div>
                    <div class="col-md-4">
                        <h6>Registered Agent Info</h6>
                        <p class="mb-1"><span class="detail-label">Name:</span> {{ $submission->registered_agent_name ?? 'N/A' }}</p>
                        <p class="mb-1"><span class="detail-label">Address:</span> {{ $submission->registered_agent_address_1 ?? 'N/A' }}</p>
                        @if($submission->registered_agent_address_2)<p class="mb-1">{{ $submission->registered_agent_address_2 }}</p>@endif
                    </div>
                    <div class="col-md-4">
                        <h6>Location Info</h6>
                        <p class="mb-1"><span class="detail-label">Name:</span> {{ $submission->location_name ?? 'N/A' }}</p>
                        <p class="mb-1"><span class="detail-label">Address:</span> {{ $submission->location_address_1 ?? 'N/A' }}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
            </div>
        </div>
    </div>
</div>
@endsection