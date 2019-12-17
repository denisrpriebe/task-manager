<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Meta info -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Task Manager - React</title>

    <!-- Scripts -->
    <script src="{{ asset('js/react.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<div>
    <div class="container">

        <!-- Page title -->
        <div class="row justify-content-center pt-4">
            <div class="col-md-8">
                <h1 class="text-center">Task Manager (React)</h1>
                <hr>
            </div>
        </div>

        <!-- Task manager application -->
        <div class="row justify-content-center" id="task-manager"></div>

    </div>
</div>

</body>
</html>
