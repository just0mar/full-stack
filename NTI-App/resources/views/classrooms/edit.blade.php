@section('title', 'Edit Classroom - Student Management System')

@extends('layouts.layout')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <!-- Header Card -->
            <div class="card mb-4" data-aos="fade-up">
                <div class="card-header">
                    <h4 class="card-title mb-0 text-white">
                        <i class="fas fa-edit me-2"></i>
                        Edit Classroom
                    </h4>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted mb-4">
                        Update the classroom information below. All changes will be saved immediately.
                    </p>
                    
                    <!-- Form -->
                    <form action="{{ route('classrooms.update', $classroom->id) }}" method="POST" data-aos="fade-up" data-aos-delay="100">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-12 mb-4">
                                <label for="name" class="form-label">
                                    <i class="fas fa-chalkboard me-2"></i>
                                    Classroom Name
                                </label>
                                <input 
                                    type="text" 
                                    class="form-control @error('name') is-invalid @enderror" 
                                    id="name" 
                                    name="name" 
                                    placeholder="Enter classroom name (e.g., Mathematics 101)"
                                    value="{{ old('name', $classroom->name) }}"
                                    required
                                >
                                @error('name')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-circle me-1"></i>
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-text">
                                    <i class="fas fa-info-circle me-1"></i>
                                    Choose a descriptive name for your classroom
                                </div>
                            </div>
                            
                            <div class="col-12 mb-4">
                                <label for="rool" class="form-label">
                                    <i class="fas fa-user-tag me-2"></i>
                                    Role/Type
                                </label>
                                <input 
                                    type="text" 
                                    class="form-control @error('rool') is-invalid @enderror" 
                                    id="rool" 
                                    name="rool" 
                                    placeholder="Enter role or type (e.g., Teacher, Student, Admin)"
                                    value="{{ old('rool', $classroom->rool) }}"
                                    required
                                >
                                @error('rool')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-circle me-1"></i>
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-text">
                                    <i class="fas fa-info-circle me-1"></i>
                                    Specify the role or type for this classroom
                                </div>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="d-flex gap-3">
                                    <button type="submit" class="btn btn-primary btn-lg flex-fill">
                                        <i class="fas fa-save me-2"></i>
                                        Update Classroom
                                    </button>
                                    <a href="{{ route('classrooms.index') }}" class="btn btn-outline-secondary btn-lg">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Classroom Info Card -->
            <div class="card mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card-body p-4">
                    <h6 class="card-title text-primary mb-3">
                        <i class="fas fa-info-circle me-2"></i>
                        Classroom Information
                    </h6>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="info-item">
                                <small class="text-muted">Classroom ID</small>
                                <p class="mb-0 fw-bold">{{ $classroom->id }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="info-item">
                                <small class="text-muted">Created By</small>
                                <p class="mb-0 fw-bold">{{ $classroom->user->name ?? 'Unknown' }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="info-item">
                                <small class="text-muted">Created Date</small>
                                <p class="mb-0 fw-bold">{{ $classroom->created_at->format('M d, Y') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="info-item">
                                <small class="text-muted">Last Updated</small>
                                <p class="mb-0 fw-bold">{{ $classroom->updated_at->format('M d, Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions Card -->
            <div class="card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-body p-4">
                    <h6 class="card-title text-primary mb-3">
                        <i class="fas fa-bolt me-2"></i>
                        Quick Actions
                    </h6>
                    <div class="d-flex gap-2 flex-wrap">
                        <a href="{{ route('classrooms.show', $classroom->id) }}" class="btn btn-outline-info btn-sm">
                            <i class="fas fa-eye me-1"></i>
                            View Details
                        </a>
                        <a href="{{ route('classrooms.index') }}" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-list me-1"></i>
                            All Classrooms
                        </a>
                        <form action="{{ route('classrooms.destroy', $classroom->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm" 
                                    onclick="return confirm('Are you sure you want to delete this classroom? This action cannot be undone.')">
                                <i class="fas fa-trash me-1"></i>
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .form-control {
        border-radius: 12px;
        border: 2px solid var(--border-color);
        padding: 0.75rem 1rem;
        transition: all 0.3s ease;
        font-size: 1rem;
    }
    
    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
        transform: translateY(-2px);
    }
    
    .form-label {
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 0.5rem;
    }
    
    .form-text {
        font-size: 0.875rem;
        color: var(--gray-color);
        margin-top: 0.25rem;
    }
    
    .invalid-feedback {
        font-size: 0.875rem;
        color: var(--danger-color);
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
    
    .btn-sm {
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
    }
    
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
    
    .info-item {
        padding: 0.75rem;
        background: rgba(99, 102, 241, 0.05);
        border-radius: 8px;
        border-left: 3px solid var(--primary-color);
    }
    
    .info-item small {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .info-item p {
        color: var(--dark-color);
        margin-top: 0.25rem;
    }
    
    @media (max-width: 768px) {
        .d-flex.gap-3 {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
            margin-bottom: 0.5rem;
        }
        
        .d-flex.gap-2 {
            flex-direction: column;
        }
        
        .btn-sm {
            width: 100%;
            margin-bottom: 0.5rem;
        }
    }
</style>

<script>
    // Add loading animation to submit button
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        const submitBtn = form.querySelector('button[type="submit"]');
        
        form.addEventListener('submit', function() {
            submitBtn.innerHTML = '<span class="loading"></span> Updating...';
            submitBtn.disabled = true;
        });
    });
    
    // Auto-resize text inputs
    const inputs = document.querySelectorAll('input[type="text"]');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
        });
    });
</script>
@endsection