<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Js Study</title>

    <style>
        .row {
            display: flex;
            flex-wrap: wrap;
            column-gap: 30px;
        }
    </style>
</head>
<body>
    <div class="row">
        <aside>
            <ul>
                @foreach ($all_routes as $route)
                    @continue($loop->iteration < 6)
                    @continue($route->uri() == '/')
                    <li>
                        <a href="{{ url($route->uri()) }}">{{ $route->uri() }}</a>
                    </li>
                @endforeach
            </ul>
        </aside>
        <div>
            @yield('conteudo')
            <pre>
                <code id="show"></code>
            </pre>
        </div>
    </div>

    <div id="code">
        @yield('scripts')
    </div>
    <script>
        document.getElementById('show').innerHTML = document.getElementById('code').children[0].innerHTML;
    </script>
</body>
</html>