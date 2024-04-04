<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    @livewireStyles
</head>

<body>
    <div class="vh-100 d-flex flex-column" id="beranda">
        <nav class="fixed-top">
            @livewire('navbar')
        </nav>
        <div class="d-flex flex-grow-1 align-items-center justify-content-center">
            @livewire('beranda-page')
        </div>
    </div>
    <div class="vh-100 d-flex flex-column justify-content-center align-items-cente pt-5" id="pengumuman"
        style="background-color: #9ADE7B">
        @livewire('pengumuman-page')
    </div>
    <div class="vh-100 d-flex flex-column justify-content-center align-items-cente pt-5" id="jurusan"
        style="background-color: white">
        @livewire('jurusan-page')
    </div>
    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
