
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Tasks </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <meta name="theme-color" content="#563d7c">
    <style>
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
@include('layouts.nav')
    @yield('content')
@include('layouts.footer')

<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
<script src="{{asset('js/app.js')}}"> </script>

</body>
</html>
