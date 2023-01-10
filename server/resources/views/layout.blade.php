<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>

<body class="flex flex-col">
    <div class="flex justify-between p-10 bg-red-900">
        <span class="text-white"><a href="/">LOGO</a></span>
        <div class="flex flex-row">
            @auth
                <div class="p-3 h-12 bg-red-500 rounded text-white"> Utente: {{ Auth::user()->name }} </div>
                <a href="/logout" class="pl-5 m-auto text-white">logout</a>
            @endauth
        </div>
    </div>
    @yield('body')
</body>

</html>
