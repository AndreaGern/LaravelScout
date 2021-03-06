<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Blog</title>
</head>
  <body>

    <x-nav/>
    <div class="min-vh-100">
        {{$slot}}
    </div>
    <x-footer/>
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
