<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Usaha Viral 2023 | es permencui</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .footer {
            position: fixed;
            bottom: 0;
            width: inherit;
            display: flex;
            justify-content: right;
            align-items: center;
        }
    </style>
</head>
<body>

<div class="" style="">
    <div class="row w-100 ms-0 justify-content-center">
        <div class="col-lg-5 col-md-6 col-xs-12 p-0 position-relative">
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
            {{--                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">--}}
            {{--                    <div class="carousel-inner">--}}
            {{--                        <div class="carousel-item active">--}}
            {{--                            <img src="{{ asset('/assets/page_2_landing_page.jpg') }}" class="d-block w-100" alt="...">--}}
            {{--                        </div>--}}
            {{--                        <div class="carousel-item">--}}
            {{--                            <img src="{{ asset('/assets/page_1_landing_page.jpg') }}" class="d-block w-100" alt="...">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="w-100 d-flex justify-content-end mb-0" style="top: auto; right: 0; position: sticky">--}}

            {{--                </div>--}}
            <div class="footer pt-3 pb-3">
                <div class="me-3" style="border-radius: 50%">
                    <a href="#" class="btn btn-success" style="border: none;">
                        <i class="fa-brands fa-whatsapp" style="font-size: 36px;"></i>
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
    })
</script>
</body>
</html>
