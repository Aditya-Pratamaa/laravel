<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- remix icon link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="#" class="logo">
            <i class="ri-settings-2-line"></i>
        </a>

        <nav>
            <ul>
                <li>
                    <div class="nav-a">
                        <a href="/contact">Contact Me</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <section class="all">
        <div class="content">
            <div class="box">
                <div class="main-img">
                    <img src="{{ asset('images/main-img.png') }}" alt="">
                </div>

                <div class="main-text">
                    <h1>Hi, I'm Aditya Pratama</h1>
                    <h4>I'm Front End Developer</h4>
                    <h4>PPLG X-2</h4>
                    <div class="social">
                        <a href="https://github.com/Aditya-Pratamaa"><i class="ri-github-line"></i></a>
                        <a href="https://www.instagram.com/adlltyaa/?hl=en"><i class="ri-instagram-line"></i></a>
                        <a href="https://wa.me/+62895355321756"><i class="ri-whatsapp-line"></i></a>
                        <a href="https://open.spotify.com/user/31uihcqdkscyvsinzx3czd7xylfe?si=0207e37c4a8e4a22"><i class="ri-spotify-line"></i></a>
                    </div>
                </div>
            </div>

            <div class="center">
                <h3>Educational Background</h3>
            </div>

            <div class="row-wrap">
                <div class="row">
                    <div class="main-row">
                        <p>2012-2014 <br> RA Bustanul <br> Athfal</p>
                    </div>

                    <div class="main-row">
                        <p>2014-2020 <br> SDN <br> Muarasari 3</p>
                    </div>

                    <div class="main-row">
                        <p>2020-2023 <br> SMPN 9 <br> Bogor</p>
                    </div>

                    <div class="tengah">
                        <div class="main-row">
                            <p>2023-2026 <br> SMK Wikrama <br> Bogor</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portofolio">
                <div class="portofolio-content">
                    <img src="{{ asset('images/img-1.jpg') }}" alt="">
                    <div class="layer">
                        <h5>RA Bustanul Athfal</h5>
                        <a href="#"><i class="ri-external-link-line"></i></a>
                    </div>
                </div>

                <div class="portofolio-content">
                    <img src="{{ asset('images/img-sd.jpg') }}" alt="">
                    <div class="layer">
                        <h5>SDN Muarasari 3</h5>
                        <a href="#"><i class="ri-external-link-line"></i></a>
                    </div>
                </div>

                <div class="portofolio-content">
                    <img src="{{ asset('images/img-2.jpg') }}">
                    <div class="layer">
                        <h5>SMPN 9 Bogor</h5>
                        <a href="#"><i class="ri-external-link-line"></i></a>
                    </div>
                </div>

                <div class="portofolio-content">
                    <img src="{{ asset('images/img-3.jpg') }}" alt="">
                    <div class="layer">
                        <h5>SMK Wikrama</h5>
                        <a href="#"><i class="ri-external-link-line"></i></a>
                    </div>
                </div>
            </div>

            <div class="button">
                <div class="btn">
                    <a href="file:///C:/Users/aditya%20pratama/Downloads/CV%20INFORMATIKA.pdf" class="btn1">
                        Download CV
                        <i class="ri-download-line"></i>
                    </a>
                </div>

                <div class="btn">
                    <a href="https://wa.me/+62895355321756" class="btn2">
                        Contact Me
                    </a>
                </div>
            </div>

            <div class="center">
                <h3>My Hobby</h3>
            </div>

            <div class="portofolio">
                <div class="portofolio-content">
                    <img src="{{ asset('images/portofolio2.jpg') }}" alt="">
                    <div class="layer">
                        <h5>Drawing</h5>
                        <a href="#"><i class="ri-external-link-line"></i></a>
                    </div>
                </div>

                <div class="portofolio-content">
                    <img src="{{ asset('images/portofolio2.jpg') }}" alt="">
                    <div class="layer">
                        <h5>Drawing</h5>
                        <a href="#"><i class="ri-external-link-line"></i></a>
                    </div>
                </div>

                <div class="portofolio-content">
                    <img src="{{ asset('images/portofolio3.jpg') }}" alt="">
                    <div class="layer">
                        <h5>Play Volly</h5>
                        <a href="#"><i class="ri-external-link-line"></i></a>
                    </div>
                </div>

                <div class="portofolio-content">
                    <img src="{{ asset('images/portofolio4.jpg') }}" alt="">
                    <div class="layer">
                        <h5>Play Volly</h5>
                        <a href="#"><i class="ri-external-link-line"></i></a>
                    </div>
                </div>
            </div>

            <div class="text-location">
                <h3>Address</h3>
            </div>

            <div class="map-wrapper">
                <iframe class="location"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d915.1572195465698!2d106.83442071421024!3d-6.641992840949734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1700915699050!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="bottom-text">
                <p>© Aditya Pratama. 2023 All rights reserved</p>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- js file link -->
    <script src="{{ asset('js/port.js') }}"></script>
</body>

</html>
