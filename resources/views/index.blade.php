@extends("_includes.template")

@section("content")

<!-- Carousel New Post -->


<div class="container">
    <div class="card col-md-8 offset-md-2" style=" margin-top: 5%;">

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
</div>


<!-- actu new post -->
<div class="container col-md-9" style="float: left;">
    <div class="post-list card" style=" margin-top: 5%;">
        <div class="card-header post-list-header">
            <h3>
                Actualité
            </h3>
    </div>
        @foreach($posts as $post)
                      <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="{{('images/XmasMiku.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h2 class="card-title">{{ $post->title }}</h2>
                  <p class="card-text ">{!! str_limit($post->content, 255) !!}</p>
                  <a href="{{ route("posts.show", [$post->id]) }}" class="btn btn-primary">En savoir plus... →</a>
                </div>
                <div class="card-footer text-muted">
                        {{ Carbon\Carbon::parse($post->created_at)-> diffForHumans() }} by
                  <a href="#">{{ $post->user->firstname }} {{ $post->user->lastname }}</a>
                </div>
            </div>
            
        @endforeach
    </div>
</div>



@endsection