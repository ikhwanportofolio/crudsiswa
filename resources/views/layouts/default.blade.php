<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DATA SISWA</title>
    <link
        href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Leckerli+One:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">


    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

</head>
<style>
    body {
        font-family: 'Josefin Sans', sans-serif;
        background-color: #grey;
    }

</style>

<body>
    <div class="container-fluid">
        <div class="row">
            @stack('before-content')
            @yield('content')
            @stack('after-content')
        </div>
    </div>
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

</body>

</html>
