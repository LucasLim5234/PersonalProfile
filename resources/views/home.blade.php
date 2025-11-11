<!-- Particle.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

<div id="particles-js"></div>

<style>
#particles-js {
    position: fixed;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #e0e0e0, #cfcfcf); /* soft grey gradient */
    z-index: -1; /* keeps it behind everything */
    top: 0;
    left: 0;
}
</style>

<script>
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 80,
      "density": { "enable": true, "value_area": 800 }
    },
    "color": { "value": "#999999" },
    "shape": {
      "type": "circle",
      "stroke": { "width": 0, "color": "#000000" }
    },
    "opacity": {
      "value": 0.5,
      "random": false
    },
    "size": {
      "value": 3,
      "random": true
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#b0b0b0",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 2,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "attract": { "enable": false }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": { "enable": true, "mode": "repulse" },
      "onclick": { "enable": true, "mode": "push" },
      "resize": true
    },
    "modes": {
      "repulse": { "distance": 100, "duration": 0.4 },
      "push": { "particles_nb": 4 }
    }
  },
  "retina_detect": true
});
</script>

@extends('master')

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-start">
            <div class="col-6">
                <div class="card mb-3" style="width: 500px; height: 200px;">
                    <div class="row g-0 h-100">
                        <div class="col-md-4 h-100">
                            <img src="kai photo short.png" class="img-fluid rounded-start" alt="photo of chong kai jun" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Chong Kai Jun</h5>
                                <p class="card-text">I’m a passionate web and mobile developer who loves turning ideas into engaging, user-friendly experiences.</p>
                                <a class="card-text" href="{{ route('about.chong-kai-jun') }}"><small class="text-body-secondary">go to about page</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-6">
                <div class="card mb-3" style="width: 500px; height: 200px;">
                    <div class="row g-0 h-100">
                        <div class="col-md-4 h-100">
                            <img src="lucasLim.jpg" class="img-fluid rounded-start" alt="photo of lim eng seng" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Lim Eng Seng (Lucas)</h5>
                                <p class="card-text">In case you dont know, water is wet 💦</p>
                                <a class="card-text" href="{{ route('about.lim-eng-seng') }}"><small class="text-body-secondary">go to about page</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col-6">
                <div class="card mb-3" style="width: 500px; height: 200px;">
                    <div class="row g-0 h-100">
                        <div class="col-md-4 h-100">
                            <img src="gan.jpg" class="rounded-start" alt="photo of gan" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Gan Jun Wei</h5>
                                <p class="card-text">Probably the most handsome amongst all 😏</p>
                                <a class="card-text" href="{{ route('about.gan-jun-wei') }}"><small class="text-body-secondary">go to about page</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-6">
                <div class="card mb-3" style="width: 500px; height: 200px;">
                    <div class="row g-0 h-100">
                        <div class="col-md-4 h-100">
                            <img src="harambe.jpg" class="img-fluid rounded-start" alt="photo of chong hong xiong" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Chong Hong Xiong</h5>
                                <p class="card-text">60 seconds in Africa is 1 minute in America ⌛</p>
                                <a class="card-text" href="{{ route('about.chong-hong-xiong') }}"><small class="text-body-secondary">go to about page</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection