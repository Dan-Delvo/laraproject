@extends('layouts.main-master')

@section ('content')

<div class="container">
    <div class="row" style='margin: 50px;'>
        <div class="col-lg-12">
                <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <center>
                                <img src="/images/carousel1.jpeg" class="img-thumbnail" alt="...">
                            </center>
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <center>
                                <img src="/images/carousel2.jpeg" class="img-thumbnail" alt="...">
                            </center>
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <center>
                                <img src="/images/carousel3.jpeg" class="img-thumbnail" alt="...">
                            </center>
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
        </div>
    </div>



    <div class="row" style='margin: 50px;'>
        <div class="col-lg-4">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Season 1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <p style="text-align: justify;">Haikyuu!! follows Shōyō Hinata, a short but determined high schooler who dreams of becoming a top volleyball player. After a crushing defeat against prodigy Tobio Kageyama in middle school, Hinata joins Karasuno High School's volleyball team, only to discover Kageyama is now his teammate. Though they initially clash, the two form a powerful duo, combining Hinata's agility with Kageyama's precision. Together, they aim to revive Karasuno’s former glory and compete in intense matches against rival teams, striving to make it to the Nationals.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Season 2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                        <p style="text-align: justify;">In Haikyuu!! Season 2, Karasuno aims to bounce back from their Inter-High loss and make it to Nationals. The team attends a training camp with top schools to improve their skills. Hinata and Kageyama work on refining their teamwork and individual abilities. As Karasuno enters the Spring High qualifiers, they face tough opponents, including a rematch against Seijoh and its star setter, Oikawa. The season focuses on Karasuno's growth and determination to prove they belong among the top teams.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Season 3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <p style="text-align: justify;">Haikyuu!! Season 3 focuses entirely on the intense, high-stakes match between Karasuno and Shiratorizawa in the Miyagi Prefecture finals. The winner earns a spot at Nationals. Shiratorizawa, led by the powerful ace Ushijima Wakatoshi, poses Karasuno's toughest challenge yet. With everything on the line, Karasuno's players push their limits, showcasing their growth and teamwork. Hinata and Kageyama, in particular, rise to the occasion. The season is a thrilling, action-packed showdown of skill, strategy, and determination, culminating in a dramatic conclusion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-8">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-lg-4">
                    <div class="card hover" style="width: auto; height:auto;">
                        <img src="{{$blog['Image']}}" class="card-img-top img-thumbnail rounded" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$blog['Title']}} </h5>
                            <p class="card-text">{{$blog['Body']}}</p>
                            <button type="button" class="btn btn-dark" style='width: 100%;'>Button</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>


@endsection


<style>
    .card:hover {
        transform: scale(1.1);
    }

    .card {
        transition: transform 0.3s;
    }
</style>
