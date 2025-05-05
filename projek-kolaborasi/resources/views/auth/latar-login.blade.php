<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('judul_halaman')</title>
        <link href="{{asset('template-admin/dist/css/styles.css')}}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="Bootslander/assets/img/touris.png" />
        <style>
            .bg-login {
                background-image: linear-gradient(rgba(10, 20, 50, 0.7), rgba(10, 20, 50, 0.7)), url('Bootslander/assets/img/hero-bg-2.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
            }

            #footer2{
                background-color: #CBDCEB;
            }
        </style>
    </head>
    <body class="bg-login">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <!-- bagian konten -->
                                @yield('konten')
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
          crossorigin="anonymous"></script>
        <script src="{{asset('template-admin/dist/js/scripts.js')}}"></script>
    </body>
</html>
