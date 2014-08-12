<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <style>
        .flash { display: inline-block; position: absolute; bottom: 10px; right: 10px; z-index: 100;}
    </style>
</head>
<body>
    @include ('flash')

    @yield('content')

    <script src="/js/libs/jquery/jquery.js"></script>
    <script src="/js/libs/handlebars/handlebars.js"></script>
    <script src="/js/libs/pusher/pusher.js"></script>
    <script src="/js/app.js"></script>

</body>
</html>