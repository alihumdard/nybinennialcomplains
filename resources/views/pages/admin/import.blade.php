@extends('layouts.main')
@include('includes.script')
@include('includes.head')

<style>
:root {
    --primary-color: #4361ee;
    --light-bg: #f8f9fa;
    --dark-text: #2b2d42;
    --card-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
}
.main-content {
    width: 85vw;
    background-color: var(--light-bg);
    min-height: 100vh;
}
.navbar {
    padding: 1rem 2rem;
    background: white;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}
.form-card {
    background: white;
    border-radius: 12px;
    box-shadow: var(--card-shadow);
    padding: 2rem;
}
.upload-box {
    border: 2px dashed #dce1e7;
    border-radius: 12px;
    padding: 2rem;
    text-align: center;
    background-color: #f8f9fa;
    cursor: pointer;
    transition: background-color 0.3s, border-color 0.3s;
}
.upload-box:hover {
    background-color: #f1f3f5;
    border-color: var(--primary-color);
}
.upload-box .icon {
    font-size: 3rem;
    color: var(--primary-color);
}
.upload-box p {
    margin-top: 1rem;
    color: var(--dark-text);
}
#file-upload-input {
    display: none;
}
.file-name {
    margin-top: 1rem;
    font-weight: 600;
}
</style>

@section('content')
<div class="main-content">
    <nav class="navbar bg-white border-bottom">
        <div>
            <h5 class="mb-0 fw-semibold">Import Business Submissions</h5>
        </div>
    </nav>

    <div class="container-fluid py-4">
        <div class="card form-card">
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            
            <form action="{{ route('admin.import.process') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="upload-box" id="upload-box">
                    <input type="file" name="csv_file" id="file-upload-input" accept=".csv">
                    <div class="icon"><i class="bi bi-cloud-arrow-up-fill"></i></div>
                    <p>Click to browse or drag and drop your CSV file here.</p>
                </div>
                <div id="file-name-display" class="file-name text-center"></div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-5">Import Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const uploadBox = document.getElementById('upload-box');
    const fileInput = document.getElementById('file-upload-input');
    const fileNameDisplay = document.getElementById('file-name-display');

    uploadBox.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', () => {
        if (fileInput.files.length > 0) {
            fileNameDisplay.textContent = `Selected file: ${fileInput.files[0].name}`;
        }
    });

    uploadBox.addEventListener('dragover', (e) => {
        e.preventDefault();
        uploadBox.style.backgroundColor = '#e9ecef';
    });

    uploadBox.addEventListener('dragleave', (e) => {
        e.preventDefault();
        uploadBox.style.backgroundColor = '#f8f9fa';
    });

    uploadBox.addEventListener('drop', (e) => {
        e.preventDefault();
        uploadBox.style.backgroundColor = '#f8f9fa';
        if (e.dataTransfer.files.length > 0) {
            fileInput.files = e.dataTransfer.files;
            fileNameDisplay.textContent = `Selected file: ${fileInput.files[0].name}`;
        }
    });
});
</script>
@endsection