@extends("_includes.template")
    @section("content")
        <div class="row">
            <div class="col-9">
                <table class="table">
                    <tbody>
                        @foreach($posts as $post)
                        @if($post->user_id == Session::get("user")->id)
                            <div class="card mb-4 mt-3">
                                <img class="post-img img-fluid card-img-top thumbnail" src="{{('images/XmasMiku.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                  <h2 class="card-title">{{ $post->title }}</h2>
                                  <p class="card-text">{{ $post->content}}</p>
                                  <a href="{{ route("posts.show", [$post->id]) }}" class="btn btn-primary">En savoir plus... →</a>
                                </div>
                                <div class="card-footer text-muted">
                                        {{ Carbon\Carbon::parse($post->created_at)-> diffForHumans() }} by
                                  <a href="#">{{ $post->user->firstname }} {{ $post->user->lastname }}</a>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection