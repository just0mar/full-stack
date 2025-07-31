@extends('layouts.layout')

@section('title', 'Dashboard - Student Management System')
    
@section('content')
<!-- Dashboard Header -->
<div class="dashboard-header mb-4" data-aos="fade-down">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h2 fw-bold text-white mb-2">
                    <i class="fas fa-tachometer-alt me-2"></i>
                    Dashboard
                </h1>
                <p class="text-white-50 mb-0">Welcome back! Here's what's happening in your system today.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <div class="current-time">
                    <i class="fas fa-clock me-2"></i>
                    <span id="current-time">{{ now()->format('l, F d, Y g:i A') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Stats Cards -->
<div class="row mb-4" data-aos="fade-up">
    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card stat-card">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <div class="stat-icon me-3">
                        <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number fw-bold text-primary">{{ \App\Models\Student::count() }}</h3>
                        <p class="stat-label text-muted mb-0">Total Students</p>
                    </div>
                </div>
                <div class="stat-trend mt-3">
                    <span class="badge bg-success rounded-pill">
                        <i class="fas fa-arrow-up me-1"></i>
                        +12% this month
                    </span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card stat-card">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <div class="stat-icon me-3">
                        <i class="fas fa-chalkboard-teacher fa-2x text-success"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number fw-bold text-success">{{ \App\Models\Classroom::count() }}</h3>
                        <p class="stat-label text-muted mb-0">Active Classrooms</p>
                    </div>
                </div>
                <div class="stat-trend mt-3">
                    <span class="badge bg-info rounded-pill">
                        <i class="fas fa-arrow-up me-1"></i>
                        +5% this week
                    </span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card stat-card">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <div class="stat-icon me-3">
                        <i class="fas fa-user-tie fa-2x text-warning"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number fw-bold text-warning">{{ \App\Models\User::count() }}</h3>
                        <p class="stat-label text-muted mb-0">Registered Users</p>
                    </div>
                </div>
                <div class="stat-trend mt-3">
                    <span class="badge bg-warning rounded-pill">
                        <i class="fas fa-arrow-up me-1"></i>
                        +8% this month
                    </span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card stat-card">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <div class="stat-icon me-3">
                        <i class="fas fa-chart-line fa-2x text-info"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number fw-bold text-info">95%</h3>
                        <p class="stat-label text-muted mb-0">System Uptime</p>
                    </div>
                </div>
                <div class="stat-trend mt-3">
                    <span class="badge bg-success rounded-pill">
                        <i class="fas fa-check me-1"></i>
                        All systems operational
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Dashboard Content -->
<div class="row">
    <!-- Recent Activity -->
    <div class="col-lg-8 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card h-100">
            <div class="card-header">
                <h5 class="card-title mb-0 text-white">
                    <i class="fas fa-history me-2"></i>
                    Recent Activity
                </h5>
            </div>
            <div class="card-body p-0">
                <div class="activity-timeline">
                    <div class="activity-item">
                        <div class="activity-icon bg-primary">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="activity-content">
                            <h6 class="activity-title">New Student Registered</h6>
                            <p class="activity-text">John Doe has been added to the system</p>
                            <small class="activity-time">2 minutes ago</small>
                        </div>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-icon bg-success">
                            <i class="fas fa-chalkboard"></i>
                        </div>
                        <div class="activity-content">
                            <h6 class="activity-title">Classroom Created</h6>
                            <p class="activity-text">Mathematics 101 classroom has been created</p>
                            <small class="activity-time">15 minutes ago</small>
                        </div>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-icon bg-warning">
                            <i class="fas fa-edit"></i>
                        </div>
                        <div class="activity-content">
                            <h6 class="activity-title">Student Updated</h6>
                            <p class="activity-text">Jane Smith's information has been updated</p>
                            <small class="activity-time">1 hour ago</small>
                        </div>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-icon bg-info">
                            <i class="fas fa-sign-in-alt"></i>
                        </div>
                        <div class="activity-content">
                            <h6 class="activity-title">User Login</h6>
                            <p class="activity-text">Admin user logged into the system</p>
                            <small class="activity-time">2 hours ago</small>
                        </div>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-icon bg-secondary">
                            <i class="fas fa-trash"></i>
                        </div>
                        <div class="activity-content">
                            <h6 class="activity-title">Classroom Deleted</h6>
                            <p class="activity-text">Old classroom has been removed</p>
                            <small class="activity-time">3 hours ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Quick Actions & System Status -->
    <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
        <!-- Quick Actions -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0 text-white">
                    <i class="fas fa-bolt me-2"></i>
                    Quick Actions
                </h5>
            </div>
            <div class="card-body">
                <div class="quick-actions">
                    <a href="{{ route('student.create') }}" class="quick-action-item">
                        <div class="action-icon bg-primary">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="action-content">
                            <h6>Add Student</h6>
                            <p>Register a new student</p>
                        </div>
                    </a>
                    
                    <a href="{{ route('classrooms.create') }}" class="quick-action-item">
                        <div class="action-icon bg-success">
                            <i class="fas fa-chalkboard"></i>
                        </div>
                        <div class="action-content">
                            <h6>Create Classroom</h6>
                            <p>Set up a new classroom</p>
                        </div>
                    </a>
                    
                    <a href="{{ route('student.index') }}" class="quick-action-item">
                        <div class="action-icon bg-warning">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="action-content">
                            <h6>Manage Students</h6>
                            <p>View and edit students</p>
                        </div>
                    </a>
                    
                    <a href="{{ route('classrooms.index') }}" class="quick-action-item">
                        <div class="action-icon bg-info">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="action-content">
                            <h6>Classrooms</h6>
                            <p>Manage all classrooms</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- System Status -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0 text-white">
                    <i class="fas fa-server me-2"></i>
                    System Status
                </h5>
            </div>
            <div class="card-body">
                <div class="system-status">
                    <div class="status-item">
                        <div class="status-indicator online"></div>
                        <div class="status-content">
                            <h6>Database</h6>
                            <p>Connected</p>
                        </div>
                    </div>
                    
                    <div class="status-item">
                        <div class="status-indicator online"></div>
                        <div class="status-content">
                            <h6>Web Server</h6>
                            <p>Running</p>
                        </div>
                    </div>
                    
                    <div class="status-item">
                        <div class="status-indicator online"></div>
                        <div class="status-content">
                            <h6>Authentication</h6>
                            <p>Active</p>
                        </div>
                    </div>
                    
                    <div class="status-item">
                        <div class="status-indicator online"></div>
                        <div class="status-content">
                            <h6>File System</h6>
                            <p>Healthy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charts & Analytics -->
<div class="row mb-4" data-aos="fade-up" data-aos-delay="300">
    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0 text-white">
                    <i class="fas fa-chart-pie me-2"></i>
                    Student Distribution
                </h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="studentChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0 text-white">
                    <i class="fas fa-chart-bar me-2"></i>
                    Monthly Growth
                </h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="growthChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Students & Classrooms -->
<div class="row" data-aos="fade-up" data-aos-delay="400">
    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0 text-white">
                    <i class="fas fa-users me-2"></i>
                    Recent Students
                </h5>
            </div>
            <div class="card-body">
                <div class="recent-list">
                    @php
                        $recentStudents = \App\Models\Student::latest()->take(5)->get();
                    @endphp
                    
                    @forelse($recentStudents as $student)
                    <div class="recent-item">
                        <div class="recent-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="recent-content">
                            <h6>{{ $student->first_name }} {{ $student->last_name }}</h6>
                            <p>Student ID: {{ $student->id }}</p>
                        </div>
                        <div class="recent-time">
                            {{ $student->created_at->diffForHumans() }}
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-4">
                        <i class="fas fa-users fa-3x text-muted mb-3"></i>
                        <p class="text-muted">No students found</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0 text-white">
                    <i class="fas fa-chalkboard-teacher me-2"></i>
                    Recent Classrooms
                </h5>
            </div>
            <div class="card-body">
                <div class="recent-list">
                    @php
                        $recentClassrooms = \App\Models\Classroom::latest()->take(5)->get();
                    @endphp
                    
                    @forelse($recentClassrooms as $classroom)
                    <div class="recent-item">
                        <div class="recent-avatar bg-primary">
                            <i class="fas fa-chalkboard"></i>
                        </div>
                        <div class="recent-content">
                            <h6>{{ $classroom->name }}</h6>
                            <p>Role: {{ $classroom->rool }}</p>
                        </div>
                        <div class="recent-time">
                            {{ $classroom->created_at->diffForHumans() }}
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-4">
                        <i class="fas fa-chalkboard fa-3x text-muted mb-3"></i>
                        <p class="text-muted">No classrooms found</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Dashboard Header */
    .dashboard-header {
        background: linear-gradient(135deg, rgba(99, 102, 241, 0.9), rgba(79, 70, 229, 0.9));
        padding: 2rem 0;
        border-radius: 16px;
        margin-bottom: 2rem;
    }
    
    .current-time {
        background: rgba(255, 255, 255, 0.1);
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        backdrop-filter: blur(10px);
        color: white;
        font-weight: 500;
    }
    
    /* Stat Cards */
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
        transition: all 0.3s ease;
    }
    
    .stat-card:hover .stat-icon {
        transform: scale(1.1);
        background: linear-gradient(135deg, #6366f1, #4f46e5);
        color: white !important;
    }
    
    .stat-number {
        font-size: 2rem;
        margin-bottom: 0.25rem;
    }
    
    .stat-label {
        font-size: 0.9rem;
        font-weight: 500;
    }
    
    /* Activity Timeline */
    .activity-timeline {
        padding: 1.5rem;
    }
    
    .activity-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1.5rem;
        padding: 1rem;
        background: rgba(99, 102, 241, 0.05);
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .activity-item:hover {
        background: rgba(99, 102, 241, 0.1);
        transform: translateX(5px);
    }
    
    .activity-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        margin-right: 1rem;
        flex-shrink: 0;
    }
    
    .activity-content {
        flex: 1;
    }
    
    .activity-title {
        font-weight: 600;
        margin-bottom: 0.25rem;
        color: var(--dark-color);
    }
    
    .activity-text {
        color: var(--gray-color);
        margin-bottom: 0.25rem;
        font-size: 0.9rem;
    }
    
    .activity-time {
        color: var(--gray-color);
        font-size: 0.8rem;
    }
    
    /* Quick Actions */
    .quick-actions {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    
    .quick-action-item {
        display: flex;
        align-items: center;
        padding: 1rem;
        background: rgba(99, 102, 241, 0.05);
        border-radius: 12px;
        text-decoration: none;
        color: inherit;
        transition: all 0.3s ease;
    }
    
    .quick-action-item:hover {
        background: rgba(99, 102, 241, 0.1);
        transform: translateX(5px);
        text-decoration: none;
        color: inherit;
    }
    
    .action-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        margin-right: 1rem;
        flex-shrink: 0;
    }
    
    .action-content h6 {
        margin-bottom: 0.25rem;
        font-weight: 600;
        color: var(--dark-color);
    }
    
    .action-content p {
        margin-bottom: 0;
        color: var(--gray-color);
        font-size: 0.9rem;
    }
    
    /* System Status */
    .system-status {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    
    .status-item {
        display: flex;
        align-items: center;
        padding: 0.75rem;
        background: rgba(99, 102, 241, 0.05);
        border-radius: 8px;
    }
    
    .status-indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        margin-right: 1rem;
        flex-shrink: 0;
    }
    
    .status-indicator.online {
        background: var(--success-color);
        box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2);
    }
    
    .status-content h6 {
        margin-bottom: 0.25rem;
        font-weight: 600;
        color: var(--dark-color);
    }
    
    .status-content p {
        margin-bottom: 0;
        color: var(--gray-color);
        font-size: 0.9rem;
    }
    
    /* Charts */
    .chart-container {
        position: relative;
        height: 200px;
    }
    
    /* Recent Lists */
    .recent-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    
    .recent-item {
        display: flex;
        align-items: center;
        padding: 1rem;
        background: rgba(99, 102, 241, 0.05);
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .recent-item:hover {
        background: rgba(99, 102, 241, 0.1);
        transform: translateX(5px);
    }
    
    .recent-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--gray-color);
        color: white;
        margin-right: 1rem;
        flex-shrink: 0;
    }
    
    .recent-content {
        flex: 1;
    }
    
    .recent-content h6 {
        margin-bottom: 0.25rem;
        font-weight: 600;
        color: var(--dark-color);
    }
    
    .recent-content p {
        margin-bottom: 0;
        color: var(--gray-color);
        font-size: 0.9rem;
    }
    
    .recent-time {
        color: var(--gray-color);
        font-size: 0.8rem;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .dashboard-header {
            text-align: center;
        }
        
        .current-time {
            margin-top: 1rem;
        }
        
        .stat-card {
            margin-bottom: 1rem;
        }
        
        .activity-item {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .activity-icon {
            margin-bottom: 0.5rem;
        }
        
        .quick-action-item {
            flex-direction: column;
            text-align: center;
        }
        
        .action-icon {
            margin-bottom: 0.5rem;
            margin-right: 0;
        }
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Update current time
    function updateTime() {
        const now = new Date();
        const timeString = now.toLocaleDateString('en-US', {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric',
            hour12: true
        });
        document.getElementById('current-time').textContent = timeString;
    }
    
    // Update time every second
    setInterval(updateTime, 1000);
    updateTime();
    
    // Student Distribution Chart
    const studentCtx = document.getElementById('studentChart').getContext('2d');
    const studentChart = new Chart(studentCtx, {
        type: 'doughnut',
        data: {
            labels: ['Active Students', 'Inactive Students', 'New Students'],
            datasets: [{
                data: [65, 20, 15],
                backgroundColor: [
                    '#6366f1',
                    '#10b981',
                    '#f59e0b'
                ],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
    
    // Growth Chart
    const growthCtx = document.getElementById('growthChart').getContext('2d');
    const growthChart = new Chart(growthCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Students',
                data: [12, 19, 25, 32, 38, 45],
                borderColor: '#6366f1',
                backgroundColor: 'rgba(99, 102, 241, 0.1)',
                tension: 0.4,
                fill: true
            }, {
                label: 'Classrooms',
                data: [5, 8, 12, 15, 18, 22],
                borderColor: '#10b981',
                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    
    // Add animation to activity items
    document.addEventListener('DOMContentLoaded', function() {
        const activityItems = document.querySelectorAll('.activity-item');
        activityItems.forEach((item, index) => {
            item.style.animationDelay = `${index * 0.1}s`;
        });
        
        const recentItems = document.querySelectorAll('.recent-item');
        recentItems.forEach((item, index) => {
            item.style.animationDelay = `${index * 0.1}s`;
        });
    });
</script>
@endsection