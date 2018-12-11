@extends("_includes.template")
    @section("content")
    <div class="container">

            <div class="row">
      
              <!-- Blog Entries Column -->
              <div class="card col-lg-8">
      
                <!-- Title -->
                <h1 class="mt-4">{{ $post->title}}</h1>
      
                <!-- Author -->
                <p class="lead">
                  by
                  <a href="#">{{ $post->user->firstname }} {{ $post->user->lastname }}</a>
                </p>
      
                <hr>
      
                <!-- Date/Time -->
                <p>{{ Carbon\Carbon::parse($post->created_at)-> diffForHumans() }}</p>
      
                <hr>
      
                <!-- Preview Image -->
                <img class="card-img-top" src="{{asset('images/Aposimz.jpg')}}" alt="Card image cap">
      
                <hr>
      
                <!-- Post Content -->
                <div>
                    {!! $post->content !!}
                </div>     
                <hr>
            </div>
        </div>
    @endsection