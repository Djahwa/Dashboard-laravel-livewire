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
    <div class="mb-5">
        <nav class="fixed-tops ">
            @livewire('navbar')
        </nav>
        <div class="container-fluid p-3   bg-info text-white text-center">
            <h3 class="pt-2">SMK NEGERI 4 PALEMBANG</h3>
            <P>Lrg. Musyawarah I No.1030a, Pipa Jaya, Kec. Kemuning, Kota Palembang, Sumatera Selatan</P>
        </div>
        <div class="mt-1 d-flex justify-content-center">
            <div class="container ">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3984.5537696783495!2d104.7488387!3d-2.9436725!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b753a834b31a1%3A0x263c4812c4111c29!2sSMK%20N%204%20Palembang!5e0!3m2!1sid!2sid!4v1712212496441!5m2!1sid!2sid"
                    width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="container mt-5">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-5 text-info">
                        <div class="d-flex flex-column align-items-start h-100">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle bg-info d-flex justify-content-center align-items-center"
                                    style="width: 60px; height: 60px">
                                    <i class="fa-solid fa-location-dot fa-2xl text-white"></i>
                                </div>
                                <div class="ml-3">
                                    <h3 class="mb-1">Alamat :</h3>
                                    <p class="mb-0">Lrg. Musyawarah I | Palembang</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-5">
                                <div class="rounded-circle bg-info d-flex justify-content-center align-items-center"
                                    style="width: 60px; height: 60px">
                                    <i class="fa-solid fa-envelope fa-2xl text-white"></i>
                                </div>
                                <div class="ml-3">
                                    <h3 class="mb-1">Email :</h3>
                                    <p class="mb-0">smkn4plbng@gmail.com</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-5">
                                <div class="rounded-circle bg-info d-flex justify-content-center align-items-center"
                                    style="width: 60px; height: 60px">
                                    <i class="fa-solid fa-phone fa-2xl text-white"></i>
                                </div>
                                <div class="ml-3">
                                    <h3 class="mb-1">Telepon :</h3>
                                    <p class="mb-0">0711-810364 / 08127302258</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4"
                                        placeholder="Your Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputAddress" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Message">
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim Email</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/7210a3c929.js" crossorigin="anonymous"></script>
</body>

</html>
