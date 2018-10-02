@extends ('layouts.master')

@section ('content')
    @include('posts.post')

    <hr>

    <div class="comments">
        <ul class="list-group">
        @foreach ($post->comments as $comment)
            <li class="list-group-item">
                <strong>
                    {{ $comment->created_at->diffForHumans() }}: &nbsp;
                </strong>

                {{ $comment->body }}
            </li>
        @endforeach
        </ul>
    </div>

    <hr>

    <div class="card">
        <div class="card-block">
            <form method="POST" action="/posts/{{ $post->id }}/comments">
                {{ csrf_field() }}

                <div class="form-group">
                    <textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add comment</button>
                </div>
            </form>

            @include('layouts.errors')
        </div>
    </div>

    <br>

@endsection