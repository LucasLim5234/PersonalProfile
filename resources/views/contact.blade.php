@extends('master')

@section('content')
    <div class="py-4 text-center bg-primary text-white">
        <div class="container">
            <h1 class="fw-bold mb-4">Get in Touch</h1>
            <p class="lead mb-0">Whether you have a question, project idea or just want to say hello — feel free to reach out.</p>
            <p class="lead mb-0">I do love to hear from you!</p>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card shadow-lg">
                    <div class="card-header text-center bg-primary text-white">
                        <h4 class="mb-0">Contact Us</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-4">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" id="name" class="form-control" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" rows="4" class="form-control" placeholder="Enter your message" required></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection