<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Baherindo Motor')</title>
</head>
<body>
    @include('layout.navbar')

    <div>
        @yield('content')
    </div>

    @include('layout.footer')
</body>
</html>