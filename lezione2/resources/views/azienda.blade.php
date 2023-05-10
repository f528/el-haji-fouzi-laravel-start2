<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Aircompany</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>

                    <a class="nav-link" href="distination">distinazioni</a>
                    <a class="nav-link" href="azienda">azienda</a>
                    <a class="nav-link" href="contact">contact</a>

                </div>
            </div>
        </div>
    </nav>
    <section class="client pt-3 pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="display-3 fw-bold text-white">Testimonials</h1>
                    <hr class="bg-white mb-4 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
                    <p class="p-text text-white">What our clients are saying</p>
                </div>
            </div>
            <div class="row align-items-md-center text-white">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row p-4">
                                    <div class="t-card">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="lh-lg">Review goes here...</p>
                                        <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 pt-3">
                                            <img src="https://source.unsplash.com/300x300/?girl" class="rounded-circle img-responsive img-fluid">
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="arrow-down d-none d-lg-block"></div>
                                            <h4><strong>Sunaina Samuel</strong></h4>
                                            <p class="testimonial_subtitle"><span>Associate Software Engineer</span><br>
                                                <span>CodeHim</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row p-4">
                                    <div class="t-card">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="lh-lg">Review goes here... </p>
                                        <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 pt-4">
                                            <img src="https://source.unsplash.com/300x300/?man" class="rounded-circle img-responsive img-fluid">
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="arrow-down d-none d-lg-block"></div>
                                            <h4><strong>Esther Zawadi</strong></h4>
                                            <p class="testimonial_subtitle"><span>
                                                    digital strategist</span><br>
                                                <span>Vaxa digital</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row p-4">
                                    <div class="t-card">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="lh-lg">Review goes here...</p>
                                        <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                                    </div>
                                    <div class="row text-lg-start">
                                        <div class="col-sm-2 pt-4 align-items-center">
                                            <img src="https://source.unsplash.com/300x300/?businessman" class="rounded-circle img-responsive img-fluid">
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="arrow-down d-none d-md-block"></div>
                                            <h4><strong>Patrick muriungi</strong></h4>
                                            <p class="testimonial_subtitle"><span>Web Technologist</span><br>
                                                <span>Vaxa digital</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="controls push-right">
                        <a class="left fa fa-chevron-left text-white btn btn btn-outline-light" href="#carouselExampleCaptions" data-bs-slide="prev"></a>
                        <a class="right fa fa-chevron-right text-white btn btn btn-outline-light" href="#carouselExampleCaptions" data-bs-slide="next"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
