<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Meta info -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Task Manager - Vue</title>

    <!-- Scripts -->
    <script src="{{ asset('js/vue.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<!-- Main app entry -->
<div id="app">
    <div class="container">

        <!-- Page title -->
        <div class="row justify-content-center pt-4">
            <div class="col-md-8">
                <h1 class="text-center">Task Manager (Vue)</h1>
                <hr>
            </div>
        </div>

        <!-- Task manager application -->
        <div class="row justify-content-center">
            <task-manager></task-manager>
        </div>

    </div>
</div>

</body>
</html>
