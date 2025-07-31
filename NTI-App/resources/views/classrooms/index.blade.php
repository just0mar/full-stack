@section('title', 'Classrooms - Student Management System')

@extends('layouts.layout')

@section('content')
<div class="container-fluid py-4">
    <!-- Header Section -->
    <div class="row mb-4" data-aos="fade-up">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h1 class="h2 fw-bold text-primary mb-2">
                                <i class="fas fa-chalkboard-teacher me-2"></i>
                                Classrooms Management
                            </h1>
                            <p class="text-muted mb-0">Manage and organize your educational classrooms efficiently</p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <a href="{{ route('classrooms.create') }}" class="btn btn-primary btn-lg">
                                <i class="fas fa-plus me-2"></i>
                                Create New Classroom
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stat-card">
                <div class="card-body text-center p-4">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-chalkboard fa-2x text-primary"></i>
                    </div>
                    <h3 class="stat-number fw-bold text-primary">{{ $classrooms->count() }}</h3>
                    <p class="stat-label text-muted">Total Classrooms</p>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stat-card">
                <div class="card-body text-center p-4">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-users fa-2x text-success"></i>
                    </div>
                    <h3 class="stat-number fw-bold text-success">{{ $classrooms->where('user_id', auth()->id())->count() }}</h3>
                    <p class="stat-label text-muted">My Classrooms</p>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stat-card">
                <div class="card-body text-center p-4">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-user-tie fa-2x text-warning"></i>
                    </div>
                    <h3 class="stat-number fw-bold text-warning">{{ $classrooms->unique('user_id')->count() }}</h3>
                    <p class="stat-label text-muted">Active Teachers</p>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stat-card">
                <div class="card-body text-center p-4">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-clock fa-2x text-info"></i>
                    </div>
                    <h3 class="stat-number fw-bold text-info">{{ $classrooms->where('created_at', '>=', now()->subDays(30))->count() }}</h3>
                    <p class="stat-label text-muted">This Month</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Classrooms Table -->
    <div class="row" data-aos="fade-up" data-aos-delay="200">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0 text-white">
                        <i class="fas fa-list me-2"></i>
                        All Classrooms
                    </h5>
                </div>
                <div class="card-body p-0">
                    @if($classrooms->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 60px;">#</th>
                                        <th>Classroom Name</th>
                                        <th>Role</th>
                                        <th>Created By</th>
                                        <th>Created Date</th>
                                        <th class="text-center" style="width: 200px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($classrooms as $key => $classroom)
                                    <tr data-aos="fade-up" data-aos-delay="{{ $key * 100 }}">
                                        <td class="text-center">
                                            <span class="badge bg-primary rounded-pill">{{ $key + 1 }}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="classroom-icon me-3">
                                                    <i class="fas fa-chalkboard text-primary"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 fw-bold">{{ $classroom->name }}</h6>
                                                    <small class="text-muted">Classroom ID: {{ $classroom->id }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-secondary rounded-pill">{{ $classroom->rool }}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="user-avatar me-2">
                                                    <i class="fas fa-user-circle text-primary"></i>
                                                </div>
                                                <span class="fw-medium">{{ $classroom->user->name ?? 'Unknown' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted">
                                                <i class="fas fa-calendar me-1"></i>
                                                {{ $classroom->created_at->format('M d, Y') }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('classrooms.show', $classroom->id) }}" 
                                                   class="btn btn-sm btn-outline-info" 
                                                   data-bs-toggle="tooltip" 
                                                   title="View Details">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('classrooms.edit', $classroom->id) }}" 
                                                   class="btn btn-sm btn-outline-primary" 
                                                   data-bs-toggle="tooltip" 
                                                   title="Edit Classroom">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('classrooms.destroy', $classroom->id) }}" 
                                                      method="POST" 
                                                      class="d-inline"
                                                      onsubmit="return confirm('Are you sure you want to delete this classroom?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                            class="btn btn-sm btn-outline-danger" 
                                                            data-bs-toggle="tooltip" 
                                                            title="Delete Classroom">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <div class="empty-state">
                                <i class="fas fa-chalkboard fa-4x text-muted mb-3"></i>
                                <h5 class="text-muted">No Classrooms Found</h5>
                                <p class="text-muted mb-4">Get started by creating your first classroom</p>
                                <a href="{{ route('classrooms.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus me-2"></i>
                                    Create First Classroom
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Statistics Cards */
    .stat-card {
        border: none;
        border-radius: 16px;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(248, 250, 252, 0.95));
        backdrop-filter: blur(10px);
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }
    
    .stat-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #f8fafc, #e2e8f0);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        transition: all 0.3s ease;
    }
    
    .stat-card:hover .stat-icon {
        transform: scale(1.1);
        background: linear-gradient(135deg, #6366f1, #4f46e5);
        color: white !important;
    }
    
    .stat-number {
        font-size: 2rem;
        margin-bottom: 0.5rem;
    }
    
    .stat-label {
        font-size: 0.9rem;
        font-weight: 500;
    }
    
    /* Table Enhancements */
    .table {
        margin-bottom: 0;
    }
    
    .table tbody tr {
        transition: all 0.3s ease;
    }
    
    .table tbody tr:hover {
        background: rgba(99, 102, 241, 0.05);
        transform: scale(1.01);
    }
    
    .classroom-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #f8fafc, #e2e8f0);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    
    .table tbody tr:hover .classroom-icon {
        background: linear-gradient(135deg, #6366f1, #4f46e5);
        color: white !important;
    }
    
    .user-avatar {
        width: 30px;
        height: 30px;
        background: linear-gradient(135deg, #f8fafc, #e2e8f0);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
    }
    
    /* Button Group */
    .btn-group .btn {
        border-radius: 8px;
        margin: 0 2px;
        transition: all 0.3s ease;
    }
    
    .btn-group .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
    
    /* Empty State */
    .empty-state {
        padding: 3rem 1rem;
    }
    
    .empty-state i {
        opacity: 0.5;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }
        
        .btn-group .btn {
            margin: 0;
        }
        
        .table-responsive {
            font-size: 0.9rem;
        }
    }
</style>

<script>
    // Initialize tooltips
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>
@endsection