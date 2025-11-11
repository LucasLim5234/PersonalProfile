@extends('master')

@section('content')
<!-- Hero Section -->
<section class="py-5" style="background: linear-gradient(120deg, #737374ff, #f7f5f5ff);">
    <div class="container text-center">
        <h1 class="fw-bold mb-3">About Me</h1>
    </div>
</section>

<!-- Profile Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center justify-content-center g-5">
            <div class="col-md-4 text-center">
                <img src="/kai photo short.png" alt="Profile" class="rounded-circle shadow-lg img-fluid border border-4 border-secondary" style="width: 250px; height: 250px; object-fit: cover;">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold text-secondary mb-3">Hi, I’m Chong Kai Jun</h2>
                <p class="text-muted">
                    I’m a passionate web and mobile developer who enjoys transforming creative ideas into functional, user-friendly experiences.
                    I focus on writing clean, maintainable code and designing visually appealing interfaces that engage users.
                </p>
                <p class="text-muted">
                    Beyond coding, I’m always exploring new technologies and improving my skills to stay up to date in the ever-evolving world of development.
                </p>
                <div class="mt-4">
                    <a href="{{ route('contact') }}" class="btn btn-secondary me-2 px-4 rounded-pill shadow-sm">Contact Me</a>
                    <a href="{{ route('home') }}" class="btn btn-outline-secondary px-4 rounded-pill">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold text-secondary mb-4">My Skills</h2>
        <div class="row g-4">
            @php
                $skills = [
                    ['icon' => 'bi-code-slash', 'color' => 'primary', 'title' => 'Web Development', 'desc' => 'Crafting responsive, modern websites using HTML, CSS, JS & Laravel.'],
                    ['icon' => 'bi-phone', 'color' => 'success', 'title' => 'Mobile Apps', 'desc' => 'Building cross-platform mobile apps with Flutter & Dart.'],
                    ['icon' => 'bi-palette', 'color' => 'warning', 'title' => 'UI/UX Design', 'desc' => 'Designing elegant, user-friendly, and engaging interfaces.'],
                    ['icon' => 'bi-git', 'color' => 'danger', 'title' => 'Version Control', 'desc' => 'Collaborating with Git & GitHub to manage projects efficiently.'],
                    ['icon' => 'bi-cpu', 'color' => 'info', 'title' => 'Problem Solving', 'desc' => 'Tackling challenges using logic, data, and creativity.'],
                    ['icon' => 'bi-lightbulb', 'color' => 'secondary', 'title' => 'Continuous Learning', 'desc' => 'Exploring new technologies and improving development skills.'],
                ];
            @endphp

            @foreach ($skills as $skill)
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 h-100 skill-card rounded-4" style="transition: 0.3s;">
                        <i class="bi {{ $skill['icon'] }} text-{{ $skill['color'] }} display-4 mb-3"></i>
                        <h5 class="fw-bold text-dark">{{ $skill['title'] }}</h5>
                        <p class="text-muted">{{ $skill['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Experience & Education -->
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center text-secondary mb-5">Experience & Education</h2>
        <div class="timeline mx-auto" style="max-width: 800px;">
            <div class="card mb-4 border-0 shadow-sm rounded-4 p-4 hover-shadow">
                <h5 class="fw-bold text-dark">Web Developer Intern — U & Me Company</h5>
                <p class="text-muted mb-1"><small>2023 - Present</small></p>
                <p>Developed interactive web applications using Laravel and Bootstrap, improving UI performance and user engagement.</p>
            </div>

            <div class="card mb-4 border-0 shadow-sm rounded-4 p-4 hover-shadow">
                <h5 class="fw-bold text-dark">IT Support Intern — Netpro Company</h5>
                <p class="text-muted mb-1"><small>2022</small></p>
                <p>Provided technical support and network troubleshooting for 50+ users, ensuring smooth daily operations.</p>
            </div>

            <div class="card border-0 shadow-sm rounded-4 p-4 hover-shadow">
                <h5 class="fw-bold text-dark">Sijil Tinggi Persekolahan Malaysia (STPM)</h5>
                <p class="text-muted mb-1"><small>2019 - 2021</small></p>
                <p>Graduated with CGPA 3.50 — majoring in Computer Science and Mathematics.</p>
            </div>
        </div>
    </div>
</section>

<!-- Custom Style -->
<style>
    .skill-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .hover-shadow:hover {
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        transform: scale(1.02);
        transition: 0.3s ease;
    }
</style>
@endsection
