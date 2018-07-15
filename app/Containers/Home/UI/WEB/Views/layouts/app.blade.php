<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boards Admin System</title>

    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
<div>
    @include('home::inc.Navbar')
    <div class="container">
        {{--@include('inc.messages')--}}
        @yield('content')
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>