<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <link rel="stylesheet" href="{{asset("css/style.css")}}">--}}
    @vite('resources/css/app.css')
    <title>Plateforme De Prise De rendez-vous </title>
</head>
<body class="bg-green-50 font-verdana text-gray-600">
@include("header")
<main>
    @yield("section")
</main>

<footer>

</footer>


</body>
</html>
