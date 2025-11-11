@extends('master')

@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-4 d-flex justify-content-center ">
                <img src="/gan.jpg" alt="photo of gan" class="img-thumbnail rounded-start" style="width:50%; height:auto; object-fit:contain">
            </div>
            <div class="col-8 d-flex flex-column justify-content-center">
                <div class="mx-3">
                    <h3>About Me</h3>
                    <p>
                        I’m a student passionate about exploring how data and algorithms can be used to solve real-world problems through machine learning and artificial intelligence. 
                        My curiosity about how machines learn and make decisions has driven me to build a strong foundation in mathematics, programming, and data analysis, while continuously expanding my knowledge through projects, research, and online courses.
                        <br><br>
                        I enjoy working on hands-on projects that apply ML concepts such as predictive modeling, computer vision, and natural language processing. 
                        Whether it’s experimenting with neural networks, cleaning messy datasets, or fine-tuning models, I’m excited by the process of turning data into meaningful insights.
                        <br><br>
                        I’m currently looking for opportunities to learn from industry professionals, collaborate on innovative projects, and contribute to impactful AI solutions.
                        If you share an interest in AI, data science, or tech innovation — I’d love to connect and exchange ideas!
                    </p>
                </div>
                <div class="mx-3">
                    <button type="button" class="btn btn-outline-secondary"><a href="{{ route('contact') }}" class="text-body-secondary">Contact Me!</a></button>
                </div>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-6">
                <div class="row-cols">
                    <h3>Skills</h3>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card border-light mb-3 text-center" style="max-width: 18rem;">
                            <div class="card-header">Programming Language</div>
                            <div class="card-body">
                                <img src="/python.png" alt="python logo" class="img-fluid align-self-center" style="width:50%; height:auto;">
                                <h5 class="card-title">Python</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-light mb-3 text-center" style="max-width: 18rem;">
                            <div class="card-header">Machine Learning Library</div>
                            <div class="card-body">
                                <img src="/pytorch.png" alt="pytorch logo" class="img-fluid align-self-center" style="width:50%; height:auto;">
                                <h5 class="card-title">PyTorch</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card border-light mb-3 text-center" style="max-width: 18rem;">
                            <div class="card-header">Machine Learning Library</div>
                            <div class="card-body">
                                <img src="/scikit-learn.png" alt="scikit-learn logo" class="img-fluid align-self-center" style="width:50%; height:auto;">
                                <h5 class="card-title">Scikit-Learn</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-light mb-3 text-center" style="max-width: 18rem;">
                            <div class="card-header">Version Control</div>
                            <div class="card-body">
                                <img src="/github.png" alt="github logo" class="img-fluid align-self-center" style="width:50%; height:auto;">
                                <h5 class="card-title">GitHub</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row-cols">
                    <h3>Hobby</h3>
                    <ul>
                        <li>Music</li>
                        <li>Enjoy the attached music video ~</li>
                    </ul>
                    <iframe 
                        width="710" height="400" 
                        src="https://www.youtube.com/embed/6okxuiiHx2w" 
                        title="Breakbot - Baby I&#39;m Yours (feat. Irfane) [Official Video]" 
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
            </div>
            
        </div>
    </div>
@endsection