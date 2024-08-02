<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elseif-Home</title>
    <link rel="website icon" type="png" href="assets/images/B2B-Logo.png">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/index.css">
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
                        <img src="assets/images/B2B Logo-04.png" class="logo-header">
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
                                <a class="nav-link" href="#services">خدماتنا</a>
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
                                <a class="" href="{{route('cart')}}">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="row justify-content-end">
            <div class="col-xl-9">
                <div class="elementor-background-slideshow">
                </div>
            </div>

            <div class="banner-box shadow-lg p-5 rounded-1">
                <h1 class="mb-3">
                    برنامج تجھیز
                    <span class="sentence">أفضل</span>
                    الفنادق والمطاعم
                </h1>
                <p class="lh-base fw-semibold">
                    برنامج متكامل مصمم خصیصاً لإدارة كافة مستلزمات الفنادق والمطاعم بمختلف أنواعھا
                    وأحجامھا بطریقة مرنة وسھلة وسریعة ومنظمة وقویة في نفس الوقت.
                </p>

                <div class="d-flex justify-content-start">
                    <button type="button" class="btn rounded-1 ms-3 text-white fw-bolder p-3"
                        style="background-color: #b82c2c;">تحميل الكتالوج</button>
                    <button type="button" class="btn rounded-1 text-white fw-bolder p-3"
                        style="background-color: #242e40;">تواصل معنا</button>
                </div>
            </div>
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
                        <img src="assets/images/B2B Logo-04.png" class="logo-header">
                    </a>
                    <div class="offcanvas offcanvas-end text-bg-tertiary" tabindex="-1" id="offcanvasDarkNavbar"
                        aria-labelledby="offcanvasDarkNavbarLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                            aria-label="Close">
                        </button>   
                            <h5 class="offcanvas-title mt-3" id="offcanvasDarkNavbarLabel">
                                <img src="assets/images/B2B Logo-04.png" class="logo-header">
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
                                    <a class="nav-link" href="#services">خدماتنا</a>
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

    <section class="rtl numbers" style="background-color: rgb(246, 246, 246);">
        <div class="container text-center">
            <div class="counter-container d-flex justify-content-center">
                <div class="counter-item">
                    <span class="icon">
                        <i class="fa-solid fa-calendar"></i>
                    </span>
                    <br>
                    <span class="counter" data-stop="1957">1800</span>
                    <h3 class="label">منذ</h3>
                </div>
                <div class="counter-item">
                    <span class="icon">
                        <i class="fa-solid fa-users"></i>
                    </span>
                    <br>
                    <sup class="plus">+</sup>
                    <span class="counter" data-stop="2000">1800</span>
                    <h3 class="label">عميل</h3>
                </div>
                <div class="counter-item">
                    <span class="icon">
                        <i class="fa-solid fa-globe"></i>
                    </span>
                    <br>
                    <sup class="plus">+</sup>
                    <span class="counter" data-stop="11">0</span>
                    <h3 class="label">بلد</h3>
                </div>
                <div class="counter-item">
                    <span class="icon">
                        <i class="fa-solid fa-shop-lock"></i>
                    </span>
                    <br>
                    <span class="counter" data-stop="200">0</span>
                    <h3 class="label">علامة تجارية</h3>
                </div>
            </div>
        </div>
    </section>
   

    <section class="categories rtl mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container text-center">
            <div class="row justify-content-center mb-2">
                <div class="col-xl-6 col-lg-6 col-lg-8">
                    <h2>
                        أكتشف مجموعتنا
                    </h2>
                    <p class="mt-3">
                        العميل مهم جدًا، العميل سيتبعه العميل. كأرض الأرض الحداد ولا عريف الأرض وسادة الأسد.
                        العميل سيتبعه العميل. كأرض الأرض الحداد ولا عريف الأرض وسادة
                    </p>
                </div>
            </div>
            <div class="pc">
                <div class="gallery-category">
                    @foreach($categories as $category)
                        <div class="slide">
                            <div class="layer1">
                                <a href="{{ route('product', ['category_id' => $category->id]) }}">
                                    <img src="{{$category->photo}}" class="rounded-1" style="width: 100%;">
                                </a>
                                <div class="layer2 rounded-1">
                                    <h3>
                                        {{$category->name}} 
                                    </h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mob">
                <div class="gallery-category-mob">
                    <div class="slide mb-3">
                        <div class="layer1">
                            <a href="products.html">
                                <img src="assets/images/categories-banners1.jpg" class="rounded-1 scale-image"
                                    style="width: 100%;">
                            </a>
                            <div class="layer2 rounded-1">
                                <h3>
                                    أواني الضيافة
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="slide mb-3">
                        <div class="layer1">
                            <a href="products.html">
                                <img src="assets/images/categories-banners2.jpg" class="rounded-1 scale-image"
                                    style="width: 100%;">
                            </a>
                            <div class="layer2 rounded-1">
                                <h3>
                                    أدوات المائدة
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="slide mb-3">
                        <div class="layer1">
                            <a href="products.html">
                                <img src="assets/images/categories-banners3.jpg" class="rounded-1 scale-image"
                                    style="width: 100%;">
                            </a>
                            <div class="layer2 rounded-1">
                                <h3>
                                    السخانات
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="slide mb-3">
                        <div class="layer1">
                            <a href="products.html">
                                <img src="assets/images/categories-banners4.jpg" class="rounded-1 scale-image"
                                    style="width: 100%;">
                            </a>
                            <div class="layer2 rounded-1">
                                <h3>
                                    أدوات الطبخ
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="slide mb-3">
                        <div class="layer1">
                            <a href="products.html">
                                <img src="assets/images/categories-banners5.jpg" class="rounded-1 scale-image"
                                    style="width: 100%;">
                            </a>
                            <div class="layer2 rounded-1">
                                <h3>
                                    الكهربائيات
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="brands-logo" id="partners">
        <div class="container text-center">
            <div class="col-xl-12">
                <div class="text-center">
                    <h3 class="mb-5">
                        علامتنا التجارية
                    </h3>
                </div>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center">
                                <div style="width: 20%;">
                                    <img src="assets/images/Trademarks/brandlogo6.png" style="width: 100%">
                                </div>
                                <div style="width: 20%;">
                                    <img src="assets/images/Trademarks/brandlogo2.png" style="width: 100%;">
                                </div>
                                <div style="width: 20%;">
                                    <img src="assets/images/Trademarks/brandlogo4.png" style="width: 100%;">
                                </div>
                                <div style="width: 20%;">
                                    <img src="assets/images/Trademarks/brandlogo1.png" style="width: 100%;">
                                </div>
                                <div style="width: 20%;">
                                    <img src="assets/images/Trademarks/brandlogo5.png" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <div style="width: 20%;">
                                    <img src="assets/images/Trademarks/brandlogo6.png" style="width: 100%">
                                </div>
                                <div style="width: 20%;">
                                    <img src="assets/images/Trademarks/brandlogo7.png" style="width: 100%;">
                                </div>
                                <div style="width: 20%;">
                                    <img src="assets/images/Trademarks/brandlogo9.png" style="width: 100%;">
                                </div>
                                <div style="width: 20%;">
                                    <img src="assets/images/Trademarks/brandlogo12.png" style="width: 100%;">
                                </div>
                                <div style="width: 20%;">
                                    <img src="assets/images/Trademarks/brandlogo14.png" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <div style="width: 20%;">
                                    <img src="assets/images/Trademarks/brandlogo3.png" style="width: 100%">
                                </div>
                                <div style="width: 20%;">
                                    <img src="assets/images/Trademarks/brandlogo8.png" style="width: 100%;">
                                </div>
                                <div style="width: 20%;">
                                    <img src="assets/images/Trademarks/brandlogo10.png" style="width: 100%;">
                                </div>
                                <div style="width: 20%;">
                                    <img src="assets/images/Trademarks/brandlogo12.png" style="width: 100%;">
                                </div>
                                <div style="width: 20%;">
                                    <img src="assets/images/Trademarks/brandlogo15.png" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    

    <section class="rtl p-xl-5 p-lg-5 p-md-5 flags" style="background-color: rgb(246, 246, 246);">
        <div class="container text-center">
            <div class="row justify-content-center">
                <h3 class="mb-xl-5 mb-lg-5 mb-md-5">
                    توريدات من انحاء العالم
                </h3>
                <div class="col-xl-12">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center">
                                    <div style="width: 17%;">
                                        <img src="assets/images/flags/asbinya.png" style="width: 100%">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/flags/Brazil.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/flags/China.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/flags/Corya.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/flags/France.png" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center">
                                    <div style="width: 17%;">
                                        <img src="assets/images/flags/Germany.png" style="width: 100%">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/flags/Italy.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/flags/Poland.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/flags/Russia.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/flags/Thailand.png" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="services" class="quality rtl mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container">
            <div class="row justify-content-center box">
                <div class="col-xl-5">
                    <img src="assets/images/quality-banner.jpg" class="rounded-1" style="width: 100%;">
                </div>
                <div class="col-xl-6 my-auto mx-auto">
                    <h2 style="width: 80%; line-height: 55px!important;">
                        خدماتنا
                    </h2>
                    <p class="mt-4">
                        من المهم الاعتناء بالمريض، وأن يتبعه المريض، لكن ذلك سيحدث في وقت يكون فيه الكثير من العمل
                        والألم. فبالنسبة لأدق التفاصيل، لا يجوز لأحد أن يمارس أي عمل إلا إذا استفاد منه بعض الشيء. ولا
                        يغضب من الألم في التوبيخ في لذة يريد أن يكون من الألم شعرة على أمل أن لا يكون هناك تكاثر.
                    </p>
                    <div class="d-flex justify-content-center text-center mt-4 mb-4">
                        <div style="width:33.333%;">
                            <img src="assets/images/Preparing-restaurants-and-hotels.png"
                                class="image-services">
                            <h5>
                                تجهيز المطاعم والفنادق
                            </h5>
                            <button onclick="showSection('section1')" class="btn cart-button">
                                المزيد
                            </button>
                        </div>
                        <div style="width:33.333%;">
                            <img src="assets/images/Preparing wedding halls.png" class="image-services">
                            <h5>
                                تجهيز قاعات الافراح
                            </h5>
                            <button onclick="showSection('section2')" class="btn cart-button">
                                المزيد
                            </button>
                        </div>
                        <div style="width:33.333%;">
                            <img src="assets/images/Supplies to government agencies.png"
                                class="image-services">
                            <h5>توريدات للجهات الحكومية</h5>
                            <button onclick="showSection('section3')" class="btn cart-button">
                                المزيد
                            </button>
                        </div>
                    </div>

                    <div id="section1" class="section">
                        <h3>
                            تجهيز المطاعم والفنادق
                        </h3>
                        <p>
                            تخصصون في توفير كل مستلزمات ومعدات الطبخ والتقديمات والتجهيزات للمطاعم والفنادق واشهر
                            المطابخ العالمية
                        </p>
                    </div>

                    <div id="section2" class="section">
                        <h3>
                            تجهيز قاعات الأفراح
                        </h3>
                        <p>
                            نحرص على توفير كل ما يلزم لتجهيز الحفلات وقاعات الأفراح والمناسبات بالاحتياجات المناسبة
                            وبأعلى جودة
                        </p>
                    </div>

                    <div id="section3" class="section">
                        <h3>
                            توريدات للجهات الحكومية
                        </h3>
                        <p>
                            نورد للجهات الحكومية الاحتياجات التي تشمل عادةً في المناسبات الوطنية والفعاليات الرسمية .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="popular-product rtl mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container text-center">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-6 col-lg-6 col-lg-8">
                    <h2>
                        منتجاتنا
                    </h2>
                    <p class="mt-3">
                        العميل مهم جدًا، العميل سيتبعه العميل. كأرض الأرض الحداد ولا عريف الأرض وسادة الأسد.
                        العميل سيتبعه العميل. كأرض الأرض الحداد ولا عريف الأرض وسادة
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($products as $product)
                <div class="col-xl-3 mb-4">
                    <img src="{{$product->photo}}"
                        class="rounded-1 bg-secondary bg-opacity-10" style="width:280; height: 280px;">
                    <div class="d-flex justify-content-start">
                        <div>
                            <h5>
                                 {{$product->name}}
                            </h5>
                            <button class="btn cart-button">
                                اضافة الى السلة
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    
    <section class="rtl mt-xl-5 mt-lg-5 mt-md-5 sub-banner">
        <div class="row justify-content-center text-center">
            <div class="col-12 position-relative">
                <img src="assets/images/sub-banner.jpg" style="width: 100%;" class="sub-banner-img">
                <div class="position-absolute top-50 start-50 translate-middle mt-xl-4 mt-lg-4 mt-md-4">
                    <h2 class="text-white">
                        أدوات مطبخ رائعة لأي مطبخ
                    </h2>
                    <p class="text-white fw-light mt-3">
                        من المهم الاعتناء بالمريض، وأن يتبعه المريض، لكن ذلك سيحدث في وقت يكون فيه الكثير من العمل
                        والألم. فبالنسبة لأدق التفاصيل، لا يجوز لأحد أن يمارس أي عمل إلا إذا استفاد منه بعض الشيء. ولا
                    </p>
                    <button class="btn button-categ p-3">تسوق الان</button>
                </div>
            </div>
        </div>
    </section>


    
    <section class="blogs rtl mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container">
            <div class="row justify-content-center mb-3 text-center">
                <div class="col-xl-6 col-lg-6 col-lg-8">
                    <h2>
                        قصص نجاح
                    </h2>
                    <p class="mt-3">
                        العميل مهم جدًا، العميل سيتبعه العميل. كأرض الأرض الحداد ولا عريف الأرض وسادة الأسد.
                        العميل سيتبعه العميل. كأرض الأرض الحداد ولا عريف الأرض وسادة
                    </p>
                </div>
            </div>
            <div class="row justify-content-center text-end mb-5">
                <div class="col-xl-4">
                    <img src="assets/images/air-fryer-oven-in-the-kitchen-black-modern-electric-deep-domestic-household-small-kitchen-applia (1).jpg"
                        class="rounded-1" style="width:100%;">
                    <h5>
                        8 أدوات مطبخ رائعة تقلل وقت الطهي إلى النصف
                    </h5>
                    <small>
                        <i class="fa-solid fa-clock ms-3"></i>
                        <span>6 مايو 2022</span>
                    </small>
                    <p>
                        ولكن لكي ترى من أين يأتي كل هذا الخطأ الناتج عن أولئك الذين يتهمون اللذة ويمتدحون الألم، سأكشف
                        عن الأمر برمته، وتلك الأشياء ذاتها التي منها...
                    </p>
                </div>
                <div class="col-xl-4">
                    <img src="assets/images/close-up-of-caucasian-woman-washing-the-pans (1).jpg" class="rounded-1"
                        style="width:100%;">
                    <h5>
                        6 نصائح لتنظيف المطبخ تستغرق خمس دقائق أو أقل
                    </h5>
                    <small>
                        <i class="fa-solid fa-clock ms-3"></i>
                        <span>6 مايو 2022</span>
                    </small>
                    <p>
                        ولكن لكي ترى من أين يأتي كل هذا الخطأ الناتج عن أولئك الذين يتهمون اللذة ويمتدحون الألم، سأكشف
                        عن الأمر برمته، وتلك الأشياء ذاتها التي منها...
                    </p>
                </div>
                <div class="col-xl-4">
                    <img src="assets/images/kitchen-knives-set-on-the-kitchen-table- (1).jpg" class="rounded-1"
                        style="width:100%;">
                    <h5>
                        لماذا لا ينبغي عليك الاحتفاظ بسكاكين مطبخك في مكان خشبي
                    </h5>
                    <small>
                        <i class="fa-solid fa-clock ms-3"></i>
                        <span>6 مايو 2022</span>
                    </small>
                    <p>
                        ولكن لكي ترى من أين يأتي كل هذا الخطأ الناتج عن أولئك الذين يتهمون اللذة ويمتدحون الألم، سأكشف
                        عن الأمر برمته، وتلك الأشياء ذاتها التي منها...
                    </p>
                </div>
            </div>
        </div>
    </section>


    
    <section class="rtl mt-xl-5 mt-lg-5 mt-md-5 features">
        <div class="container text-center">
            <div class="d-flex justify-content-center">
                <div class="icons-features">
                    <div class="d-flex justify-content-center">
                        <div class="icons-features-details1">
                            <img src="assets/images/icon-features1.png" class="features-image">
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
                            <img src="assets/images/icon-features2.png" class="features-image">
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
                            <img src="assets/images/icon-features3.png" class="features-image">
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
                            <img src="assets/images/icon-features4.png" class="features-image">
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


    <section class="mt-xl-5 mt-lg-5 mt-md-5 rtl p-xl-5 p-lg-5 p-md-5 clients" style="background-color: #F6F6F6;">
        <div class="container text-center">
            <div class="row justify-content-center mb-5">
                <h3 class="mb-xl-5 mb-lg-5 mb-md-5">
                    عملائنا من القطاع الحكومة
                </h3>
                <div class="col-xl-12">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center">
                                    <div style="width: 17%;">
                                        <img src="assets/images/public sector/logos-4.png" style="width: 100%">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/public sector/logos-3.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/public sector/logos-2.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/public sector/logos-5.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/public sector/logos-6.png" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center">
                                    <div style="width: 17%;">
                                        <img src="assets/images/public sector/logos-7.png" style="width: 100%">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/public sector/logos-8.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/public sector/logos-9.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/public sector/logos-10.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/public sector/logos-11.png" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <h3 class="mb-xl-5 mb-lg-5 mb-md-5">
                    عملائنا من القطاع الخاص
                </h3>
                <div class="col-xl-12">
                    <div id="carouselExampleRide" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center">
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (19).png"
                                            style="width: 100%">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (2).png"
                                            style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (20).png"
                                            style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (21).png"
                                            style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (22).png"
                                            style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center">
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (14).png"
                                            style="width: 100%">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (15).png"
                                            style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (16).png"
                                            style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (17).png"
                                            style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (18).png"
                                            style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center">
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (1).png"
                                            style="width: 100%">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (10).png"
                                            style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (11).png"
                                            style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (12).png"
                                            style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (13).png"
                                            style="width: 100%;">
                                    </div>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center">
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (23).png"
                                            style="width: 100%">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (24).png"
                                            style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (25).png"
                                            style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (26).png"
                                            style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (27).png"
                                            style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center">
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (28).png"
                                            style="width: 100%">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (19).png"
                                            style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (30).png"
                                            style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/private sector/icon-private (31).png"
                                            style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--
    
        <section class="offers-banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <a href="#">
                        <img src="assets/images/offer-banner-1.jpg" class="rounded-1" style="width: 100%;">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <a href="#">
                        <img src="assets/images/offer-banner-2.jpg" class="rounded-1" style="width: 100%;">
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    
    -->






    <!-- شركاؤنااااااااا
    
       <section class="mt-5 rtl p-5" id="partners" style="background-color: rgb(246, 246, 246);">
        <div class="container text-center">
            <div class="row justify-content-center">
                <h3 class="mb-5">
                    شركاؤنا
                </h3>
                <div class="col-xl-12">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center">
                                    <div style="width: 17%;">
                                        <img src="assets/images/logos-4.png" style="width: 100%">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/logos-3.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/logos-2.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/logos-5.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/logos-6.png" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center">
                                    <div style="width: 17%;">
                                        <img src="assets/images/logos-7.png" style="width: 100%">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/logos-8.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/logos-9.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/logos-10.png" style="width: 100%;">
                                    </div>
                                    <div style="width: 17%;">
                                        <img src="assets/images/logos-11.png" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
    
    -->

    <footer class="rtl">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-3">
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
                <div class="col-xl-3 col-lg-3 col-md-3">
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
                <div class="col-xl-3 col-lg-3 col-md-3">
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
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <h6>طرق الدفع</h6>
                    <div class="d-flex justify-content-start mb-3">
                        <span style="width: 14%;" class="me-3">
                            <a href="#">
                                <img src="assets/images/mastercard.png" style="width: 100%;">
                            </a>
                        </span>
                        <span style="width: 14%;" class="me-3">
                            <a href="#">
                                <img src="assets/images/@.png" style="width: 100%;">
                            </a>
                        </span>
                        <span style="width: 14%;" class="me-3">
                            <a href="#">
                                <img src="assets/images/visa.png" style="width: 100%;">
                            </a>
                        </span>
                        <span style="width: 14%;" class="me-3">
                            <a href="#">
                                <img src="assets/images/mada.png" style="width: 100%;">
                            </a>
                        </span>
                    </div>
                    <div class="d-flex justify-content-start">
                        <span style="width: 14%;" class="me-3">
                            <a href="#">
                                <img src="assets/images/tabby.png" style="width: 100%;">
                            </a>
                        </span>
                        <span style="width: 14%;" class="me-3">
                            <a href="#">
                                <img src="assets/images/tamara.png" style="width: 100%;">
                            </a>
                        </span>
                        <span style="width: 14%;" class="me-3">
                            <a href="#">
                                <img src="assets/images/pay.png" style="width: 100%;">
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <hr>
            <div class="small-footer">
                <div class="col-xl-3 col-lg-3 col-md-5 my-auto" style="overflow-y: hidden !important;">
                    <small class="text-white">
                        Copyright 2024 - Elseif-Home by Arena
                    </small>
                </div>
                <div class="col-xl-2 col-xl-2 col-md-4">
                    <img src="assets/images/logo-header.png" class="logo-footer">
                </div>
            </div>
        </div>
    </footer>

    <!-- script tags -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/index.js"></script>

</body>

</html>