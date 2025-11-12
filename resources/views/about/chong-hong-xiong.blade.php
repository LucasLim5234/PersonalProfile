@extends('master')

@section('content')
<section class="container-fluid text-center mb-5">
    <h2 class="fw-bold text-dark" style="font-family:'Courier New', Courier, monospace;">Welcome To My Page</h2>
    <h5 class="text-dark" style="font-family:'Courier New', Courier, monospace">Explore to know more about me: Chong Hong Xiong (CD22052)</h5>
    <section id="slider" style="background: linear-gradient(indigo, #d30097ff)">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/pic1.png" class="d-block w-100" style="height: 330px; object-fit: contain" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="/pic2.png" class="d-block w-100" style="height: 330px; object-fit: contain" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="/pic3.png" class="d-block w-100" style="height: 330px; object-fit: contain" alt="Image 3">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <i class="bi bi-arrow-left-circle fs-3 text-light"></i>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <i class="bi bi-arrow-right-circle fs-3 text-light"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <div class="mt-4">
        <hr style="border: 2px solid #5b00d3ff; margin: 5px auto; width:80%;">
    </div>
</section>
<section class="container-fluid" style="background: linear-gradient(indigo, #d30097ff); height:500px;">
    <div class="row" style="padding:60px">
        <div class="col-4">
            <img src="/chxxhoh.jpeg" style="height: 400px; object-fit: contain" alt="my picture">
        </div>
        <div class="col-8">
            <div>
                <h1 class="text-center text-light" style="font-family:'Courier New', Courier, monospace;">About Me</h1>
                <hr style="border: 2px solid #dcedffff; width: 200px; margin: 5px auto;">
                <div class="text-light" style="margin-top:30px">
                    <p style="font-size: larger; font-family:'Courier New', Courier, monospace">Hello guys, my name is Chong Hong Xiong, and currently I am studying
                        Computer Science, major in Graphic and Multimedia. I am passionate in video editing, UI/UX graphic design and game development.
                    </p>
                    <p style="font-size: larger; font-family:'Courier New', Courier, monospace">
                        I am currently learning 2D indie game development by using the Unity 6, and also creating own 2D game assets, such as pixel arts for fun.
                        Other than that, I am more interested in creating digital arts.
                    </p>
                    <p style="font-size: larger; font-family:'Courier New', Courier, monospace; margin-bottom:20px">
                        Looking for people who are passionate in game development and designs too. If you are interested at my sector, feel free with contact me.
                    </p>

                    <h5 class="text-center">
                        <span class="badge text-bg-info" style="margin-right:10%">Unity engine</span>
                        <span class="badge text-bg-info" style="margin-right:10%">Game developer</span>
                        <span class="badge text-bg-info" style="margin-right:10%">UI/UX designer</span>
                        <span class="badge text-bg-info" style="margin-right:10%">Indie game</span>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="mt-4">
        <hr style="border: 2px solid #5b00d3ff; margin: 10px auto; width:80%">
        <div class="mt-5">
            <h2 class="fw-bold text-dark text-center" style="font-family:'Courier New', Courier, monospace; margin: 20px">
                My Skills
            </h2>
        </div>
    </div>
    <div class="container text-center my-4">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card h-100 shadow-sm">
                    <img src="/figmaicon.png" class="card-img-top mt-3"
                        style="width: 100px; height: 100px; object-fit: contain; margin: auto; display: block;"
                        alt="Web Front-End Design">
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="font-family:'Courier New', Courier, monospace;">Web Front-End Design</h5>
                        <p class="card-text" style="font-family:'Courier New', Courier, monospace">Build responsive websites with HTML, CSS, frameworks like Bootstrap and use Figma.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 shadow-sm">
                    <img src="/asicon.png" class="card-img-top mt-3"
                        style="width: 100px; height: 100px; object-fit: contain; margin: auto; display: block;"
                        alt="Mobile App Development">
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="font-family:'Courier New', Courier, monospace;">Mobile App Development</h5>
                        <p class="card-text" style="font-family:'Courier New', Courier, monospace">Create Android and iOS apps using Android Studio and Flutter.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 shadow-sm">
                    <img src="/unityicon.png" class="card-img-top mt-3"
                        style="width: 100px; height: 100px; object-fit: contain; margin: auto; display: block;"
                        alt="Game Development">
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="font-family:'Courier New', Courier, monospace;">Game Development</h5>
                        <p class="card-text" style="font-family:'Courier New', Courier, monospace">Design assets and develop interactive games using Unity.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 shadow-sm">
                    <img src="/canvaicon.png" class="card-img-top mt-3"
                        style="width: 100px; height: 100px; object-fit: contain; margin: auto; display: block;"
                        alt="Others">
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="font-family:'Courier New', Courier, monospace;">Others</h5>
                        <p class="card-text" style="font-family:'Courier New', Courier, monospace">Explore other tech-related services and skills including AI and software.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="border: 2px solid #5b00d3ff; margin: 10px auto; width:80%">
</section>
<section class="container-fluid">
    <div class="mt-5">
        <h2 class="fw-bold text-dark text-center" style="font-family:'Courier New', Courier, monospace; margin: 10px">
            My Hobbies
        </h2>
    </div>
    <div class="row justify-content-center text-center g-3 m-5 rounded-5"
        style="background: linear-gradient(indigo, #d30097ff); height: fit-content;">

        <div class="col-md-3 border border-light border-2 rounded-4" style="margin:30px">
            <p class="fw-bold text-light" style="font-family:'Courier New', Courier, monospace; margin-top:8px">Playing Games</p>
            <p class="text-light" style="font-family:'Courier New', Courier, monospace;">I enjoy playing mobile and computer games 🎮🎮</p>
            <p class="text-light" style="font-family:'Courier New', Courier, monospace; font-style:italic">#Chill&Relax</p>
        </div>

        <div class="col-md-3 border border-light border-2 rounded-4" style="margin:30px">
            <p class="fw-bold text-light" style="font-family:'Courier New', Courier, monospace; margin-top:8px">Watching Anime</p>
            <p class="text-light" style="font-family:'Courier New', Courier, monospace;">I enjoy watching 3D chinese animes such as 凡人修仙传 👁️👁️</p>
            <p class="text-light" style="font-family:'Courier New', Courier, monospace; font-style:italic">#ChineseAnime</p>
        </div>

        <div class="col-md-3 border border-light border-2 rounded-4" style="margin:30px">
            <p class="fw-bold text-light" style="font-family:'Courier New', Courier, monospace; margin-top:8px">Playing Sports</p>
            <p class="text-light" style="font-family:'Courier New', Courier, monospace;">I enjoy playing badminton and basketball 🏸🏀</p>
            <p class="text-light" style="font-family:'Courier New', Courier, monospace; font-style:italic">#SportsLife</p>
        </div>
    </div>
</section>
<section class="text-center">
    <div style="height:200px mt-5">
        <hr style="border: 2px solid #5b00d3ff; margin: 10px auto; width:80%">
    </div>
    <div class="mt-5">
        <h4 class="fw-bold text-dark text-center" style="font-family:'Courier New', Courier, monospace; margin: 10px">
            That's all from me, feel free to contact with me............
        </h4>
    </div>
</section>

@endsection