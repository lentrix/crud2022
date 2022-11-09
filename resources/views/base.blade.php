<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <title>CRUD Project</title>
</head>
<body>

@include('_navbar')

<div class="container">
    @yield('content')
</div>

@yield('scripts')

</body>
</html>
