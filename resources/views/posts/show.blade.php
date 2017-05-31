@extends ('layouts.master')

@section ('content')
    <div class="col-sm-8 blog-main">
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>

            {{ $post->body }}
        </div><!-- /.blog-post -->

        <hr>

        <!-- Comments -->
        <div class="comments">
            <h3>Comments</h3>

            @if (count($post->comments))
                <ul class="list-group">
                    @foreach($post->comments as $comment)
                        <li class="list-group-item">
                            {{ $comment->body }}
                            <br>
                            <strong>{{ $comment->created_at->diffForHumans() }}</strong>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>Currently there are no comments. Be the first to comment!</p>
            @endif
        </div>
        <!-- END Comments -->

        <!-- Add a Comment -->
        <div class="card">
            <div class="card-block">
                @include ('layouts.partials.errors')
                
                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea class="form-control" name="body" placeholder="Your comment here..."></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Add a Comment -->

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>
    </div>

    @include ('layouts.sidebar')
@endsection