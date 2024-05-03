<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.jpg" type="image/gif" />
    <title>Brightmind</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}">
 <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>
@yield('content')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@include('includes.footer')
</body>
</html>