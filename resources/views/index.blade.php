@extends("_includes.template")

@section("content")

<!-- Carousel New Post -->

<div class="card col-md-8 offset-md-2" style=" margin-top: 5%; width: 50rem;">

   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('images/BlameFont.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/DBFont.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{('images/ToLoveRuFont.jpg')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

<!-- actu new post -->
<div class="container col-md-8" style="float: left;">
    <div class="post-list card text-center" style=" margin-top: 5%;">
        <div class="card-header post-list-header">
            <h3>
                Actualité
            </h3>
    </div>
            <img class="rounded mx-auto d-block card-image-top" src="{{('images/MangaFont.jpg')}}" alt="Card image cap" style="width: 18rem;">
            
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>

            <hr/>

    </div>
</div>



@endsection