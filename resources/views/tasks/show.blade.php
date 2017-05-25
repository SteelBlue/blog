<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .subtitle {
                font-size: 36px;
            }

            .links, .tasks {
                color: #636b6f;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
            }

            .links > a, .tasks li > a {
                color: #636b6f;
                padding: 0 25px;
                text-decoration: none;
                text-transform: uppercase;
            }

            .tasks ul {
                padding: 0;
            }

            .tasks li {
                margin-bottom: 10px;
                list-style-type: none;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
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
                    Current Task:
                </div>

                <div class="tasks">
                    <span>{{ $task->body }}</span>
                </div>
            </div>
        </div>
    </body>
</html>
