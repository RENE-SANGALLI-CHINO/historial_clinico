<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title','Historial Clinico')</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>

</head>

<body>
    <div id="app">
        <header>
            @include('parciales.nav')
            @include('parciales.sesion-estado')
        </header>
        <main>
            @yield('content')
        </main>
       </div>
</body>
</html>