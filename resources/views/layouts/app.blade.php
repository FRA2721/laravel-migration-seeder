<!DOCTYPE html>
<html lang="en">

{{-- head section --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- title section --}}
    <title>@yield('title')</title>
    {{-- /title section --}}

    {{-- from welcome.blade.php file --}}
    @vite('resources/js/app.js')
    {{-- /from welcome.blade.php file --}}

</head>
{{-- /head section --}}

{{-- body section --}}
<body>

    {{-- main section --}}
    <main>
        @yield('content')
    </main>
    {{-- /main section --}}
    
</body>
{{-- /body section --}}

</html>