<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ ('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ ('css/common.css') }}" />
    @yield('css')
    <title>Todo</title>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Todo
            </a>
        </div>
    <main>
    @yield('content')
    </main>
</body>
</html>