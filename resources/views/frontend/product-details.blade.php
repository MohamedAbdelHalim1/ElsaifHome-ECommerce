<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Details</title>
    <link rel="website icon" type="png" href="assets/images/B2B-Logo.png">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/product-details.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://kit.fontawesome.com/cbcafb1e3c.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="rtl">
        <div class="big-nav pc">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('assets/images/B2B Logo-04.png')}}" class="logo-header">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('home')}}">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about')}}">من نحن</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('product')}}">المنتجات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}#services">خدماتنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">تواصل معنا</a>
                            </li>
                        </ul>

                        <ul class="end-nav ">
                            <li class="nav-item">
                                <a class="" aria-current="page" href="#">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="" href="#">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!--mobile view-->

        <div class="small-nav mob">
            <nav class="navbar navbar-dark fixed-top bg-body-tertiary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand mt-3" href="{{route('home')}}">
                        <img src="{{asset('assets/images/B2B Logo-04.png')}}" class="logo-header">
                    </a>
                    <div class="offcanvas offcanvas-end text-bg-tertiary" tabindex="-1" id="offcanvasDarkNavbar"
                        aria-labelledby="offcanvasDarkNavbarLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                                aria-label="Close">
                            </button>
                            <h5 class="offcanvas-title mt-3" id="offcanvasDarkNavbarLabel">
                                <img src="{{asset('assets/images/B2B Logo-04.png')}}" class="logo-header">
                            </h5>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{route('home')}}">الرئيسية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about')}}">من نحن</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('product')}}">المنتجات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('home')}}#services">خدماتنا</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">تواصل معنا</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

    </header>

    <section class="rtl products-details">
        <div class="container mt-5">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">الرئيسية</a></li>
                            <li class="breadcrumb-item"><a href="{{route('product')}}">المنتجات</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <img src="{{asset($product->photo)}}" style="width: 100%;">
                </div>
                <div class="col-xl-6 my-auto mx-auto">
                    <h5>
                        {{$product->name}}
                    </h5>
                    <div class="d-flex justify-content-start">
                        <div class="ms-4">
                            <input type="number" class="form-control" placeholder="الكمية" aria-label="Username" aria-describedby="basic-addon1" name="quantity">
                        </div>
                        <div>
                            <button  class="btn cart-button">
                                اضافة الى عرض السعر
                            </button>
                        </div>
                       
                    </div>          
                    <p class="text-secondary fs-6">
                        التصنيف : <span style="color: #b82c2c;">{{$product->category->name}}</span>
                    </p>  
                </div>
            </div>
        </div>
    </section>

    <section class="rtl mt-xl-5 mt-lg-5 mt-md-5 p-xl-5 p-lg-5 p-md-5 features"
        style="background-color: rgb(246, 246, 246);">
        <div class="container text-center">
            <div class="d-flex justify-content-center">
                <div class="icons-features">
                    <div class="d-flex justify-content-center">
                        <div class="icons-features-details1">
                            <img src="{{asset('assets/images/icon-features1.png')}}" class="features-image">
                        </div>
                        <div class="icons-features-details2">
                            <h5>صفقات كبيرة</h5>
                            <p>استرداد نقدي يزيد عن 40%</p>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="icons-features">
                    <div class="d-flex justify-content-center">
                        <div class="icons-features-details1">
                            <img src="{{asset('assets/images/icon-features2.png')}}" class="features-image">
                        </div>
                        <div class="icons-features-details2">
                            <h5> الاسترجاع والاستبدال</h5>
                            <p> آمن بنسبة 100% </p>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="icons-features">
                    <div class="d-flex justify-content-center">
                        <div class="icons-features-details1">
                            <img src="{{asset('assets/images/icon-features3.png')}}" class="features-image">
                        </div>
                        <div class="icons-features-details2">
                            <h5>شحن </h5>
                            <p>شحن لكل دول الخليج</p>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="icons-features">
                    <div class="d-flex justify-content-center">
                        <div class="icons-features-details1">
                            <img src="{{asset('assets/images/icon-features4.png')}}" class="features-image">
                        </div>
                        <div class="icons-features-details2">
                            <h5>سرعة توصيل</h5>
                            <p>توصيل خلال48 ساعة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="rtl">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3">
                    <h6>روابط سريعة</h6>
                    <ul>
                        <li>
                            <a href="#">
                                الرئيسة
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                من نحن
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                المنتجات
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                تواصل معنا
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <h6>معلومات الاتصال</h6>
                    <ul>
                        <li>
                            <i class="fa-solid fa-location-dot ms-2" style="color: #b82c2c;"></i>
                            3 ش النصر من اللاسلكى المعادى
                        </li>
                        <li>
                            <i class="fa-solid fa-phone ms-2" style="color: #b82c2c;"></i> +98888776654
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope ms-2" style="color: #b82c2c;"></i> contact@domain.com
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <h6>مواقع التواصل الاجتماعي</h6>
                    <div class="d-flex justify-content-start">
                        <span style="width: 13%;">
                            <a href="#">
                                <i class="fa-brands fa-snapchat text-white p-2 social-icon"></i>
                            </a>
                        </span>
                        <span style="width: 13%;">
                            <a href="#">
                                <i class="fa-brands fa-instagram text-white p-2 social-icon"></i>
                            </a>
                        </span>
                        <span style="width: 13%;">
                            <a href="#">
                                <i class="fa-brands fa-facebook text-white p-2 social-icon"></i>
                            </a>
                        </span>
                        <span style="width: 13%;">
                            <a href="#">
                                <i class="fa-brands fa-twitter text-white p-2 social-icon"></i>
                            </a>
                        </span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <h6>طرق الدفع</h6>
                    <div class="d-flex justify-content-start mb-3">
                        <span style="width: 14%;" class="me-3">
                            <a href="#">
                                <img src="{{asset('assets/images/mastercard.png')}}" style="width: 100%;">
                            </a>
                        </span>
                        <span style="width: 14%;" class="me-3">
                            <a href="#">
                                <img src="{{asset('assets/images/@.png')}}" style="width: 100%;">
                            </a>
                        </span>
                        <span style="width: 14%;" class="me-3">
                            <a href="#">
                                <img src="{{asset('assets/images/visa.png')}}" style="width: 100%;">
                            </a>
                        </span>
                        <span style="width: 14%;" class="me-3">
                            <a href="#">
                                <img src="{{asset('assets/images/mada.png')}}" style="width: 100%;">
                            </a>
                        </span>
                    </div>
                    <div class="d-flex justify-content-start">
                        <span style="width: 14%;" class="me-3">
                            <a href="#">
                                <img src="{{asset('assets/images/tabby.png')}}" style="width: 100%;">
                            </a>
                        </span>
                        <span style="width: 14%;" class="me-3">
                            <a href="#">
                                <img src="{{asset('assets/images/tamara.png')}}" style="width: 100%;">
                            </a>
                        </span>
                        <span style="width: 14%;" class="me-3">
                            <a href="#">
                                <img src="{{asset('assets/images/pay.png')}}" style="width: 100%;">
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row justify-content-between">
                <div class="col-xl-3 my-auto">
                    <small class="text-white">
                        Copyright 2024 - Elseif-Home by Arena
                    </small>
                </div>
                <div class="col-xl-2 ">
                    <img src="{{asset('assets/images/logo-header.png')}}" class="logo-footer">
                </div>
            </div>
        </div>
    </footer>

    <!-- script tags -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/index.js"></script>

</body>

</html>