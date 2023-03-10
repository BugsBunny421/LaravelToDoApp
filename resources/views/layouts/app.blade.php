@php use Illuminate\Support\Facades\Auth; @endphp
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title', "Default Title") </title>
    {{--<link rel="stylesheet" type="text/css" href="/css/app.css">--}}
    <link rel="stylesheet" href="https://classless.de/classless.css">

</head>

<body>

@if(Auth::check())
    @include('components.logged_in_navbar')
@endif

@yield('content')

</body>
</html>
