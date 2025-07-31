@section('title', 'Classroom Details - Student Management System')

@extends('layouts.layout')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <!-- Header Card -->
            <div class="card mb-4" data-aos="fade-up">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0 text-white">
                            <i class="fas fa-chalkboard-teacher me-2"></i>
                            Classroom Details
                        </h4>
                        <div class="btn-group">
                            <a href="{{ route('classrooms.edit', $classroom->id) }}" class="btn btn-outline-light btn-sm">
                                <i class="fas fa-edit me-1"></i>
                                Edit
                            </a>
                            <a href="{{ route('classrooms.index') }}" class="btn btn-outline-light btn-sm">
                                <i class="fas fa-arrow-left me-1"></i>
                                Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="text-primary mb-3">{{ $classroom->name }}</h3>
                            <p class="text-muted mb-4">
                                <i class="fas fa-info-circle me-2"></i>
                                Detailed information about this classroom and its configuration.
                            </p>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <div class="classroom-status">
                                <span class="badge bg-success rounded-pill">
                                    <i class="fas fa-check-circle me-1"></i>
                                    Active
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Information -->
            <div class="row mb-4">
                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <h6 class="card-title text-primary mb-3">
                                <i class="fas fa-info-circle me-2"></i>
                                Basic Information
                            </h6>
                            <div class="info-list">
                                <div class="info-item">
                                    <div class="info-label">
                                        <i class="fas fa-chalkboard me-2"></i>
                                        Classroom Name
                                    </div>
                                    <div class="info-value">{{ $classroom->name }}</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">
                                        <i class="fas fa-user-tag me-2"></i>
                                        Role/Type
                                    </div>
                                    <div class="info-value">
                                        <span class="badge bg-secondary rounded-pill">{{ $classroom->rool }}</span>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">
                                        <i class="fas fa-hashtag me-2"></i>
                                        Classroom ID
                                    </div>
                                    <div class="info-value">{{ $classroom->id }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <h6 class="card-title text-primary mb-3">
                                <i class="fas fa-user me-2"></i>
                                Creator Information
                            </h6>
                            <div class="info-list">
                                <div class="info-item">
                                    <div class="info-label">
                                        <i class="fas fa-user-circle me-2"></i>
                                        Created By
                                    </div>
                                    <div class="info-value">{{ $classroom->user->name ?? 'Unknown' }}</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">
                                        <i class="fas fa-calendar-plus me-2"></i>
                                        Created Date
                                    </div>
                                    <div class="info-value">{{ $classroom->created_at->format('F d, Y \a\t g:i A') }}</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">
                                        <i class="fas fa-calendar-check me-2"></i>
                                        Last Updated
                                    </div>
                                    <div class="info-value">{{ $classroom->updated_at->format('F d, Y \a\t g:i A') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="row mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card stat-card">
                        <div class="card-body text-center p-3">
                            <div class="stat-icon mb-2">
                                <i class="fas fa-clock fa-2x text-primary"></i>
                            </div>
                            <h5 class="stat-number fw-bold text-primary">{{ $classroom->created_at->diffForHumans() }}</h5>
                            <p class="stat-label text-muted">Age</p>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card stat-card">
                        <div class="card-body text-center p-3">
                            <div class="stat-icon mb-2">
                                <i class="fas fa-calendar-day fa-2x text-success"></i>
                            </div>
                            <h5 class="stat-number fw-bold text-success">{{ $classroom->created_at->format('M d') }}</h5>
                            <p class="stat-label text-muted">Created</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card stat-card">
                        <div class="card-body text-center p-3">
                            <div class="stat-icon mb-2">
                                <i class="fas fa-user-tie fa-2x text-warning"></i>
                            </div>
                            <h5 class="stat-number fw-bold text-warning">{{ $classroom->user->id ?? 'N/A' }}</h5>
                            <p class="stat-label text-muted">User ID</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card stat-card">
                        <div class="card-body text-center p-3">
                            <div class="stat-icon mb-2">
                                <i class="fas fa-check-circle fa-2x text-info"></i>
                            </div>
                            <h5 class="stat-number fw-bold text-info">Active</h5>
                            <p class="stat-label text-muted">Status</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="row" data-aos="fade-up" data-aos-delay="400">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-4">
                            <h6 class="card-title text-primary mb-3">
                                <i class="fas fa-bolt me-2"></i>
                                Quick Actions
                            </h6>
                            <div class="d-flex gap-3 flex-wrap">
                                <a href="{{ route('classrooms.edit', $classroom->id) }}" class="btn btn-primary">
                                    <i class="fas fa-edit me-2"></i>
                                    Edit Classroom
                                </a>
                                <a href="{{ route('classrooms.index') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-list me-2"></i>
                                    All Classrooms
                                </a>
                                <a href="{{ route('classrooms.create') }}" class="btn btn-outline-success">
                                    <i class="fas fa-plus me-2"></i>
                                    Create New
                                </a>
                                <form action="{{ route('classrooms.destroy', $classroom->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" 
                                            onclick="return confirm('Are you sure you want to delete this classroom? This action cannot be undone.')">
                                        <i class="fas fa-trash me-2"></i>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>

<style>
    .card {
        border: none;
        border-radius: 16px;
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }
    
    .info-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    
    .info-item {
        padding: 1rem;
        background: rgba(99, 102, 241, 0.05);
        border-radius: 12px;
        border-left: 4px solid var(--primary-color);
        transition: all 0.3s ease;
    }
    
    .info-item:hover {
        background: rgba(99, 102, 241, 0.1);
        transform: translateX(5px);
    }
    
    .info-label {
        font-size: 0.875rem;
        color: var(--gray-color);
        font-weight: 500;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .info-value {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--dark-color);
    }
    
    .stat-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(248, 250, 252, 0.95));
        backdrop-filter: blur(10px);
    }
    
    .stat-icon {
        width: 50px;
        height: 50px;
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
        font-size: 1.25rem;
        margin-bottom: 0.25rem;
    }
    
    .stat-label {
        font-size: 0.8rem;
        font-weight: 500;
    }
    
    .btn {
        border-radius: 12px;
        font-weight: 500;
        padding: 0.75rem 1.5rem;
        transition: all 0.3s ease;
    }
    
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
    
    .classroom-status {
        margin-top: 1rem;
    }
    
    .badge {
        font-size: 0.875rem;
        padding: 0.5rem 1rem;
    }
    
    @media (max-width: 768px) {
        .d-flex.gap-3 {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
            margin-bottom: 0.5rem;
        }
        
        .btn-group {
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .btn-group .btn {
            width: 100%;
        }
    }
</style>

<script>
    // Add animation to info items
    document.addEventListener('DOMContentLoaded', function() {
        const infoItems = document.querySelectorAll('.info-item');
        infoItems.forEach((item, index) => {
            item.style.animationDelay = `${index * 0.1}s`;
        });
    });
</script>
        @endsection