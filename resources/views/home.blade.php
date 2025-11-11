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
                                <p class="card-text">TIMI! 🎮</p>
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
                            <img src="gan-jun-wei.jpg" class="rounded-start" alt="photo of gan jun wei" style="width: 100%; height: 100%; object-fit: cover;">
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
                            <img src="chong-hong-xiong.jpg" class="img-fluid rounded-start" alt="photo of chong hong xiong" style="width: 100%; height: 100%; object-fit: cover;">
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