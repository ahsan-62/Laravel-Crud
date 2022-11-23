<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My_Test</title>
    @include('include.style')
</head>

<body>

    @include('include.navbar')

    @include('include.script')

    <div class="container">

        @yield('content')
    </div>

</body>

</html>
