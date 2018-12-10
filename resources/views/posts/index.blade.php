@extends("_includes.template")
    @section("content")
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Date</th>
                            <th>Tities</th>
                            <th>User</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                    <td>{{ Carbon\Carbon::parse($post->created_at)-> diffForHumans() }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->user->firstname }} {{ $post->user->lastname }}</td>
                                <td>
                                <a href="{{ route("posts.show", [$post->id]) }}"></a>
                                    <button class="btn btn-sm btn-primary">Read post</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection