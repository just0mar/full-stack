@section('title', 'Create Classroom - Student Management System')

@extends('layouts.layout')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <!-- Header Card -->
            <div class="card mb-4" data-aos="fade-up">
                <div class="card-header">
                    <h4 class="card-title mb-0 text-white">
                        <i class="fas fa-plus-circle me-2"></i>
                        Create New Classroom
                    </h4>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted mb-4">
                        Fill in the details below to create a new classroom for your educational institution.
                    </p>
                    
                    <!-- Form -->
                    <form action="{{ route('classrooms.store') }}" method="POST" data-aos="fade-up" data-aos-delay="100">
                        @csrf
                        
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
                                    value="{{ old('name') }}"
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
                                    value="{{ old('rool') }}"
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
                                        Create Classroom
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
            
            <!-- Info Card -->
            <div class="card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-body p-4">
                    <h6 class="card-title text-primary mb-3">
                        <i class="fas fa-lightbulb me-2"></i>
                        Tips for Creating Classrooms
                    </h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Use descriptive names that clearly identify the classroom purpose
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Specify appropriate roles for better organization
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            You can edit classroom details anytime after creation
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Classrooms are automatically associated with your account
                        </li>
                    </ul>
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
    
    .list-unstyled li {
        padding: 0.5rem 0;
        border-bottom: 1px solid var(--border-color);
    }
    
    .list-unstyled li:last-child {
        border-bottom: none;
    }
    
    @media (max-width: 768px) {
        .d-flex.gap-3 {
            flex-direction: column;
        }
        
        .btn {
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
            submitBtn.innerHTML = '<span class="loading"></span> Creating...';
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


