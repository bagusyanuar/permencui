<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Usaha Viral 2023 | es permencui</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: inherit;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .header {
            top: 0;
            width: inherit;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fe9ff5;
            height: 60px;
            padding-left: 15px;
            padding-right: 15px;
        }


        .w-280 {
            /*width: 350px !important;*/
            left: 0 !important;
        }

        .sidebar-display {
            display: block !important;
        }

        .sidebar {
            width: 350px !important;
            height: 100vh;
            position: fixed;
            left: -350px;
            background-color: #fe9ff5;
            z-index: 9999;
        }

        .w-280, .sidebar {
            transition: all .5s;
            -moz-transition: all .5s;
            -webkit-transition: all .5s;
            -o-transition: all .5s;
        }

        .sidebar-menu {
            list-style-type: none;
            padding-left: 1rem;
            padding-right: 1rem;
            cursor: pointer;
        }

        .sidebar-item {
            height: 40px;
            border-radius: 10px;
            padding: 0 1rem;
            transition: all ease-in-out .3s;
        }

        .sidebar-item > a {
            text-decoration: none;
            color: #005b60;
            height: inherit;
            display: flex;
            align-items: center;
        }

        .sidebar-item:hover {
            background-color: #CB7FC4;
        }

        .social-panel {
            padding-left: 2rem;
            padding-right: 1rem;
            font-size: 18px;
            color: #005b60;
        }

        .social-panel > a {
            text-decoration: none;
            color: #005b60;
            transition: all ease-in-out .3s;
        }
        .social-panel > a:hover {
            color: #002e30;
        }
    </style>
</head>
<body class="position-relative">
<div class="sidebar d-flex flex-column justify-content-center" id="sidebar">
    <div class="w-100 text-center">
        <img src="{{ asset('/assets/logo-permencui.png') }}" height="150" alt="logo-permencui">
    </div>
    <div>
        <ul class="sidebar-menu">
            <li class="sidebar-item d-flex align-items-center">
                <a href="#page_2" class="w-100 link-item">
                    Tentang Permencui
                </a>
            </li>
            <li class="sidebar-item d-flex align-items-center">
                <a href="#page_3" class="w-100 link-item">
                    Menu Permencui
                </a>
            </li>
            <li class="sidebar-item d-flex align-items-center">
                <a href="#page_5" class="w-100 link-item">
                    Simulasi Penjualan
                </a>
            </li>
        </ul>
    </div>
    <div class="d-flex align-items-center social-panel">
        <a href="#" class="me-3">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="#" class="me-3">
            <i class="fa-brands fa-square-facebook"></i>
        </a>
        <a href="#">
            <i class="fa-brands fa-youtube"></i>
        </a>
    </div>
    <div class="reserved mt-2 social-panel" style="font-size: 6px;">
        All Rights Reserved © 2023 | Es Permencui | Guide | Terms and Condition | Privacy Policy
    </div>
</div>


<div class="" style="">
    <div class="row w-100 ms-0 justify-content-center">
        <div class="col-lg-5 col-md-6 col-xs-12 p-0 position-relative">
            <div class="header w-100 sticky-top">
                <a href="#" class="btn-whatsapp" style="border: none;">
                    <i class="fa-brands fa-whatsapp" style="font-size: 36px; color: white"></i>
                </a>
                <div>
                    <img src="{{ asset('/assets/logo-permencui.png') }}" height="80" alt="logo-permencui">
                </div>
                <a href="#" id="btn-menu">
                    <i class="fa-sharp fa-solid fa-bars" style="font-size: 36px; color: white"></i>
                </a>
            </div>
            <div id="page_1">
                <img src="{{ asset('/assets/page_1_landing_page.jpg') }}" alt="image 1" class="w-100">
            </div>
            <div id="page_2">
                <img src="{{ asset('/assets/page_2_landing_page.jpg') }}" alt="image 2" class="w-100">
            </div>
            <div id="page_3">
                <img src="{{ asset('/assets/page_3_landing_page.jpg') }}" alt="image 3" class="w-100">
            </div>
            <div id="page_4">
                <img src="{{ asset('/assets/page_4_landing_page.jpg') }}" alt="image 3" class="w-100">
            </div>
            <div id="page_5">
                <img src="{{ asset('/assets/page_5_landing_page.jpg') }}" alt="image 3" class="w-100">
            </div>
            <div id="page_6">
                <img src="{{ asset('/assets/page_6_landing_page.jpg') }}" alt="image 3" class="w-100">
            </div>
            <div id="page_7">
                <img src="{{ asset('/assets/testimoni_mitra.jpg') }}" alt="image 3" class="w-100">
            </div>
            <div id="page_8">
                <img src="{{ asset('/assets/page_8_landing_page.jpg') }}" alt="image 3" class="w-100">
            </div>
            <div id="page_9">
                <img src="{{ asset('/assets/page_9_landing_page.jpg') }}" alt="image 3" class="w-100">
            </div>
            <div id="page_10">
                <img src="{{ asset('/assets/page_10_landing_page.jpg') }}" alt="image 3" class="w-100">
            </div>
            <div id="page_11">
                <img src="{{ asset('/assets/page_11_landing_page.jpg') }}" alt="image 3" class="w-100">
            </div>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/assets/slide_show_1.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/assets/slide_show_2.JPG') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/assets/slide_show_3.JPG') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
            <div class="footer pt-3 pb-3">
                <div class="me-3">
                    <a href="#" class="btn btn-success d-flex align-items-center btn-whatsapp" id="btn-whatsapp" style="font-size: 14px">
                        <i class="fa-brands fa-whatsapp me-2"></i>
                        <span>Hubungi untuk kemitraan</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
<script>

    $(document).ready(function () {
        $('.carousel').carousel();
        $('#btn-menu').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $('#sidebar').toggleClass('w-280')
        });

        $('.link-item').on('click', function (e) {
            // e.stopPropagation();
        });

        $('.btn-whatsapp').on('click', function (e) {
            e.preventDefault();
            let whatsapp = '+6285728400663';
            let message = 'Halo kak, Saya berminat jadi mitra Es Permencui. Apakah masih ada harga promonya, Kak?';
            let urlWhatsapp = 'https://wa.me/' + whatsapp + '?text=' + message;
            var win = window.open(urlWhatsapp, '_blank');
            win.focus();
        });
        $(document).on('click', function () {
            if ($('#sidebar').hasClass('w-280')) {
                $('#sidebar').toggleClass('w-280');
            }
        })
    })
</script>
</body>
</html>
