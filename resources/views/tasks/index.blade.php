@include('includes.header')

    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="links">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/tasks') }}">Tasks</a>
                </div>

                <div class="title m-b-md">
                    Laracasts
                </div>

                <div class="subtitle m-b-md">
                    Your Tasks:
                </div>

                <div class="tasks">
                    <ul>
                        @foreach ($tasks as $task)
                            <li>
                                <a href="/tasks/{{ $task->id }}">{{ $task->body }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
