<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="container">

        <!-- Page title -->
        <div class="row justify-content-center pt-4">
            <h1>Task Manager</h1>
        </div>

        <hr/>

        <!-- Task manager application -->
        <div class="row">

            <div class="col-6 pl-5">
                <h4>Features</h4>
                <ul>
                    <li>Add tasks to a list</li>
                    <li>Remove tasks from a list</li>
                    <li>Ability to mark tasks as complete</li>
                </ul>
            </div>

        </div>

    </div>
</div>
</body>
</html>
