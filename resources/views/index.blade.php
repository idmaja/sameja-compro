<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SAMEJA</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
            integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Karantina:wght@300;400&display=swap');

        html {
            scroll-behavior: smooth;

        }

        body {
            font-family: 'karantina';
            letter-spacing: 2px;
            background-image: url("/img-index/background.png");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .slider {
            max-width: 1100px;
            display: flex;
            margin-top: 5%;
        }

        .slider .card {
            letter-spacing: normal;
            font-weight: 300;
            font-family: Arial, Helvetica, sans-serif;
            flex: 1;
            margin: 0 10px;
            background: rgb(255, 245, 216);
            text-align: center;
            padding: 10%;
            border-radius: 10px;
        }

        .slider .card .img {
            height: 200px;
            width: 100%;
        }

        .slider .card .img img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .slider .card .content {
            padding: 10px 20px;
        }

        .card .content .title {
            font-size: 28px;
            font-weight: 500;
            letter-spacing: 2px;
            font-family: 'karantina';
        }

        .card .content p {
            text-align: center;
            margin: 10px 0;
        }

        .btn-book {
            transition: 0.3s;
            background-color: rgb(5, 67, 5);
            padding: 10px 15px;
            color: white;
            font-family: 'karantina';
            border: none;
            border-radius: 10px;
            letter-spacing: 2px;
            font-size: 28px;
        }

        .btn-book:hover {
            transition: 0.3s;
            background-color: rgb(6, 41, 6);
        }

        .item {
            margin: 5px;
            flex-basis: 32%;
            flex-grow: 1;
            border: 2px solid black;
        }

        .item img {
            width: 100%;
            height: 100%;
        }


        @media (max-width:400px) {
            .item {
                flex-basis: 100%;

            }

            .item:nth-of-type(2) {
                order: -1;
            }
        }

        .site-footer {
            background-color: rgb(255, 245, 216);
            padding: 45px 0 20px;
            font-size: 15px;
            line-height: 24px;
            color: #737373;
            font-family: Arial, Helvetica, sans-serif;
        }

        .site-footer hr {
            border-top-color: #bbb;
            opacity: 0.5
        }

        .site-footer hr.small {
            margin: 20px 0
        }

        .site-footer h6 {
            color: #000000;
            font-size: 16px;
            text-transform: uppercase;
            margin-top: 5px;
            letter-spacing: 2px
        }

        .site-footer a {
            color: #737373;
        }

        .site-footer a:hover {
            color: #3366cc;
            text-decoration: none;
        }

        .footer-links {
            padding-left: 0;
            list-style: none
        }

        .footer-links li {
            display: block
        }

        .footer-links a {
            color: #737373
        }

        .footer-links a:active,
        .footer-links a:focus,
        .footer-links a:hover {
            color: #3366cc;
            text-decoration: none;
        }

        .footer-links.inline li {
            display: inline-block
        }

        .site-footer .social-icons {
            text-align: right
        }

        .site-footer .social-icons a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin-left: 6px;
            margin-right: 0;
            border-radius: 100%;
            background-color: #33353d
        }

        .copyright-text {
            margin: 0
        }

        @media (max-width:991px) {
            .site-footer [class^=col-] {
                margin-bottom: 30px
            }
        }

        @media (max-width:767px) {
            .site-footer {
                padding-bottom: 0
            }

            .site-footer .copyright-text,
            .site-footer .social-icons {
                text-align: center
            }
        }

        .social-icons {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .social-icons li {
            display: inline-block;
            margin-bottom: 4px
        }

        .social-icons li.title {
            margin-right: 15px;
            text-transform: uppercase;
            color: #96a2b2;
            font-weight: 700;
            font-size: 13px
        }

        .social-icons a {
            background-color: #eceeef;
            color: #818a91;
            font-size: 16px;
            display: inline-block;
            line-height: 44px;
            width: 44px;
            height: 44px;
            text-align: center;
            margin-right: 8px;
            border-radius: 100%;
            -webkit-transition: all .2s linear;
            -o-transition: all .2s linear;
            transition: all .2s linear
        }

        .social-icons a:active,
        .social-icons a:focus,
        .social-icons a:hover {
            color: #fff;
            background-color: #29aafe
        }

        .social-icons.size-sm a {
            line-height: 34px;
            height: 34px;
            width: 34px;
            font-size: 14px
        }

        .social-icons a.facebook:hover {
            background-color: #3b5998
        }

        .social-icons a.twitter:hover {
            background-color: #00aced
        }

        .social-icons a.whatsapp:hover {
            background-color: #00b65b
        }

        .social-icons a.instagram:hover {
            background-color: #ea4c89
        }

        @media (max-width:767px) {
            .social-icons li.title {
                display: block;
                margin-right: 0;
                font-weight: 600
            }
        }
    </style>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul style="font-size: 32px;" class="navbar-nav mx-auto mt-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#promo">Promo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#venue">Venue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                    </ul>
                    </ul>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Section -->

        <div id="home" class="container mt-5 mb-5">
            <div class="row">
                <div style="padding: 10%;" class="col-md-6">
                    <img src="/img-index/1.png" alt="">
                </div>
                <div style="padding: 10%;padding-right: 1%;padding-top: 20%; color: white;" class="col-md-6 mt-5">
                    <h1 style="font-size: 80px;">Sameja</h1>
                    <h3 style="font-weight: 300;line-height: 150%;">Sameja merupakan restoran yang menjual masakan
                        indonesia yang beralamat Jl. H. Ilyas No.24b, Sraten Satu, Jombor, Kec. Tuntang, Kabupaten
                        Semarang, Jawa Tengah dengan konsep keluarga</h3>
                </div>
                <center>
                    <a style="color: rgba(255, 255, 255, 0.659);text-decoration: none;font-size: 24px;"
                        href="#promo"><i class="fa-regular fa-circle-down"></i>&ensp;Scroll Down</a>
                </center>
            </div>
        </div>
        <br><br><br><br><br>
        <!-- Promo -->
        <div id="promo" class="container mt-5 mb-5">
            <div class="row">
                <center>
                    <h2 style="font-size: 44px;color: rgb(247, 224, 161);">Promo Sameja</h2>
                    <div class="slider owl-carousel">
                        @foreach ($promo as $p)
                            <div class="card">
                                <div class="img">
                                    <img src="{{ asset('img-promo/' . $p->image) }}" alt="">
                                </div>
                                <div class="content">
                                    <div class="title">{{ $p->name }}</div>
                                    <p>{{ $p->description }}</p>
                                </div>
                                <a href="https://wa.link/7u067u">
                                    <button class="btn-book">Book Now</button>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </center>
            </div>
        </div>
        <br><br><br><br><br>
        <!-- Menu -->
        <div id="menu" class="container">
            <div class="row justify-content-center">
                <center>
                    <h2 style="font-size: 44px;color: rgb(247, 224, 161);">Katalog Menu</h2>
                </center>
                @foreach ($menu as $m)
                    <div style="padding: 5%;margin: 2%;" class="col-md-2">
                        <img width="100%" src="{{ asset('img-menu/' . $m->image) }}" alt="">
                        <h3 style="font-size: 32px;color: rgb(247, 224, 161);margin-top: 3%;text-align: center;">
                            {{ $m->name }}</h3>
                        <p style="color: white;text-align: center;">{{ $m->FormatRupiah('price') }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <br><br><br><br><br>
        <!-- Venue -->
        <div id="venue" class="container mb-5">
            <center>
                <h2 style="font-size: 44px;color: rgb(247, 224, 161);margin-bottom: 3%;">Venue</h2>
            </center>
            <div class="image" style=" display: flex;
        flex-wrap: wrap;">
                @foreach ($venue as $v)
                    <div class="item">
                        <img src="{{ asset('img-venue/' . $v->image) }}">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h6>About</h6>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime reprehenderit nobis,
                            deleniti
                            dignissimos perferendis placeat architecto? Eaque inventore eos suscipit, incidunt, quod
                            nostrum
                            maiores accusamus iure, animi optio architecto dolores.
                        </p>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Categories</h6>
                        <ul class="footer-links">
                            <li>Makanan</a></li>
                            <li>Minuman</a></li>
                            <li>Snack</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Quick Links</h6>
                        <ul class="footer-links">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#promo">Promo</a></li>
                            <li><a href="#menu">Menu</a></li>
                            <li><a href="#venue">Venue</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                            <a href="#">Scanfcode</a>.
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="instagram" href="https://www.instagram.com/sameja.id/"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li><a class="whatsapp" href="https://wa.link/7u067u"><i class="fab fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script>
            $(".slider").owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000, //2000ms = 2s;
                autoplayHoverPause: true,
            });
        </script>
    </body>

</html>
