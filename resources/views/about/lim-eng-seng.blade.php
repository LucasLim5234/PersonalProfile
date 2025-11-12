@extends('master')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row g-5 text-center">
                <div class="col-lg-6 d-flex flex-column align-items-center">
                    <img src="/lucasLim.jpg" class="rounded shadow-lg w-25 mb-3">
                    <a href="{{ route('contact') }}" class="btn btn-secondary px-4 rounded-pill shadow-sm">Contact Me</a>
                </div>
                <div class="col-lg-6">
                    <h2 class="mb-3">About Me</h2>
                    <p>I am a developer with expertise in web and mobile development. I enjoy turning ideas into real and
                        functional applications that users love. My focus is on writing clean and maintainable code while
                        continuously learning new technologies.</p>
                    <p>I am passionate about problem-solving, UI/UX design and creating projects that make a positive
                        impact.</p>
                    <div class="mt-4">
                        <span class="badge bg-primary me-2 mb-2">Web Development</span>
                        <span class="badge bg-success me-2 mb-2">Mobile Apps</span>
                        <span class="badge bg-warning text-dark me-2 mb-2">UI/UX Design</span>
                        <span class="badge bg-info text-dark me-2 mb-2">Badminton Enthusiast</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">My Skills</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-primary shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">HTML & CSS</h5>
                            <p class="card-text">Crafting responsive and modern web layouts with clean code.</p>
                            <span class="badge bg-primary">95%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-success shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bootstrap & JS</h5>
                            <p class="card-text">Building interactive web applications with Bootstrap and JavaScript.</p>
                            <span class="badge bg-success">85%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-warning shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Laravel & PHP</h5>
                            <p class="card-text">Developing robust backend systems with Laravel and PHP.</p>
                            <span class="badge bg-warning text-dark">80%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-info shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Flutter & Dart</h5>
                            <p class="card-text">Creating beautiful and responsive mobile apps for iOS and Android.</p>
                            <span class="badge bg-info text-dark">90%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-danger shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Python & ML</h5>
                            <p class="card-text">Analysing data and building machine learning models for insights.</p>
                            <span class="badge bg-danger">70%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-secondary shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Git & Version Control</h5>
                            <p class="card-text">Collaborating effectively and maintaining project history with Git.</p>
                            <span class="badge bg-secondary">75%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">My Hobbies</h2>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <ul class="list-unstyled">
                        <li class="mb-5">
                            <h5>Badminton</h5>
                            <p class="text-muted mb-1"><small>Indoor Sport</small></p>
                            <p>Playing badminton to improve agility, reflexes and teamwork</p>
                        </li>
                        <li class="mb-5">
                            <h5>Pickleball</h5>
                            <p class="text-muted mb-1"><small>Indoor Sport</small></p>
                            <p>Enjoying pickleball for fun, strategy and social interaction</p>
                        </li>
                        <li>
                            <h5>Kayaking</h5>
                            <p class="text-muted mb-1"><small>Outdoor Adventure</small></p>
                            <p>Exploring rivers and lakes through kayaking, embracing nature and fitness</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
