<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/select2.min.css') }}">
    <script type="text/javascript" src="{{ asset('assets/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/select2.min.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body>

@yield('content')

</body>
</html>