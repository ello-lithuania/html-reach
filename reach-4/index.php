<!doctype html>
<html lang="en">

<head>
    <title>Reach</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="./images/favicon.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;1,200;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
        <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link href="./css/styles.css" rel="stylesheet" />
</head>

<body>

<?php include('./navbar.php');?>

<div class="container border-t-sm-1">
<div class="row align-items-center main-carousel border-b-sm-1">
        <div class="col-lg-12">
            <div class="vertical-hero-slider">
                <div class="d-flex" style="max-height: 482px;">
                    <div class="col-lg-6 ps-6">
                        <span class="hero-section-title">Automobilinis laikiklis, bevielis įkroviklis Baseus Rock Solid 15W</span>
                        <div class="d-flex mt-4">
                            <span class="hero-section-old-price">26.99 €</span>
                            <span class="hero-section-new-price ms-4">24.99 €</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="./images/home_page_header_1.svg" class="mx-auto d-block" style="max-height: 482px;" />
                    </div>
                </div>
                <div class="d-flex" style="max-height: 482px;">
                    <div class="col-lg-6 ps-6">
                        <span class="hero-section-title">Automobilinis laikiklis, bevielis įkroviklis Baseus Rock Solid 15W</span>
                        <div class="d-flex mt-4">
                            <span class="hero-section-old-price">26.99 €</span>
                            <span class="hero-section-new-price ms-4">24.99 €</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="./images/home_page_header_1.svg" class="mx-auto d-block" style="max-height: 482px;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row hidden-sm" style="margin: 0;">
        <div class="col border-top border-bottom ps-5 pe-5">
            <div class="slick-carousel">
                <img src="./images/3mk.svg" />
                <img src="./images/baseus.svg" />
                <img src="./images/borofone.svg" />
                <img src="./images/hello.svg" />
                <img src="./images/hoco.svg" />
                <img src="./images/myscreen.svg" />
            </div>
        </div>
    </div>
</div>



<div class="d-md-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="varela-round-font mt-30 mb-0 ms-4 ml-0">Naujos prekės</h4>
            </div>
        </div>
    </div>

    <div class="gx-4 gy-4 p-3">
        <!-- Swiper -->
        <div class="swiper mySwiper" style="width: 140%">
            <div class="swiper-wrapper">

            <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <div class="product-header-action">
                                <img src="images/favourite_active.svg" class="active" />
                                <div class="product-header-info">
                                    <span class="badge badge-discount">-10%</span>
                                    <span class="badge badge-new mt-2">Nauja</span>
                                    <span class="badge badge-delivery mt-2">
                                    <img src="./images/truck.svg" /> 4-7d.
                                    </span>
                                </div>
                            </div>
                            <img src="./images/product_image.svg" class="mx-auto d-block" />
                        </div>
                        <div class="product-body">
                            <figure class="text-center mt-2 mb-1">
                                <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                            </figure>
                            <figure class="text-center mb-0">
                                <span class="product-stock-info">&bull; Yra sandelyje</span>
                            </figure>
                            <figure class="text-center mb-2">
                                <span class="product-price">
                                    <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                    </div>
                                </span>
                            </figure>
                        </div>
                        <div class="row justify-center">
                            <div class="col-6 text-center">
                                <span class="amount-heading">KIEKIS</span>
                                <div class="hstack justify-center mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span class="amount-count" style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
                                </div>
                            </div>
                            <div class="col-6 align-self-end">
                                <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                <img src="./images/cart.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <div class="product-header-action">
                                <img src="images/favourite_not_active.svg" class="active" />
                                <div class="product-header-info">
                                    <span class="badge badge-discount">-10%</span>
                                    <span class="badge badge-new mt-2">Nauja</span>
                                    <span class="badge badge-delivery mt-2">
                                    <img src="./images/truck.svg" /> 4-7d.
                                    </span>
                                </div>
                            </div>
                            <img src="./images/product_image.svg" class="mx-auto d-block" />
                        </div>
                        <div class="product-body">
                            <figure class="text-center mt-2 mb-1">
                                <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                            </figure>
                            <figure class="text-center mb-0">
                                <span class="product-stock-info">&bull; Yra sandelyje</span>
                            </figure>
                            <figure class="text-center mb-2">
                                <span class="product-price">
                                    <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                    </div>
                                </span>
                            </figure>
                        </div>
                        <div class="row justify-center">
                            <div class="col-6 text-center">
                                <span class="amount-heading">KIEKIS</span>
                                <div class="hstack justify-center mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span class="amount-count" style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
                                </div>
                            </div>
                            <div class="col-6 align-self-end">
                                <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                <img src="./images/cart.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <div class="product-header-action">
                                <img src="images/favourite_not_active.svg" class="active" />
                                <div class="product-header-info">
                                    <span class="badge badge-discount">-10%</span>
                                    <span class="badge badge-new mt-2">Nauja</span>
                                    <span class="badge badge-delivery mt-2">
                                    <img src="./images/truck.svg" /> 4-7d.
                                    </span>
                                </div>
                            </div>
                            <img src="./images/product_image.svg" class="mx-auto d-block" />
                        </div>
                        <div class="product-body">
                            <figure class="text-center mt-2 mb-1">
                                <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                            </figure>
                            <figure class="text-center mb-0">
                                <span class="product-stock-info">&bull; Yra sandelyje</span>
                            </figure>
                            <figure class="text-center mb-2">
                                <span class="product-price">
                                    <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                    </div>
                                </span>
                            </figure>
                        </div>
                        <div class="row justify-center">
                            <div class="col-6 text-center">
                                <span class="amount-heading">KIEKIS</span>
                                <div class="hstack justify-center mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span class="amount-count" style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
                                </div>
                            </div>
                            <div class="col-6 align-self-end">
                                <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                <img src="./images/cart.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <div class="product-header-action">
                                <img src="images/favourite_not_active.svg" class="active" />
                                <div class="product-header-info">
                                    <span class="badge badge-discount">-10%</span>
                                    <span class="badge badge-new mt-2">Nauja</span>
                                    <span class="badge badge-delivery mt-2">
                                    <img src="./images/truck.svg" /> 4-7d.
                                    </span>
                                </div>
                            </div>
                            <img src="./images/product_image.svg" class="mx-auto d-block" />
                        </div>
                        <div class="product-body">
                            <figure class="text-center mt-2 mb-1">
                                <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                            </figure>
                            <figure class="text-center mb-0">
                                <span class="product-stock-info">&bull; Yra sandelyje</span>
                            </figure>
                            <figure class="text-center mb-2">
                                <span class="product-price">
                                    <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                    </div>
                                </span>
                            </figure>
                        </div>
                        <div class="row justify-center">
                            <div class="col-6 text-center">
                                <span class="amount-heading">KIEKIS</span>
                                <div class="hstack justify-center mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span class="amount-count" style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
                                </div>
                            </div>
                            <div class="col-6 align-self-end">
                                <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                <img src="./images/cart.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <div class="product-header-action">
                                <img src="images/favourite_not_active.svg" class="active" />
                                <div class="product-header-info">
                                    <span class="badge badge-discount">-10%</span>
                                    <span class="badge badge-new mt-2">Nauja</span>
                                    <span class="badge badge-delivery mt-2">
                                    <img src="./images/truck.svg" /> 4-7d.
                                    </span>
                                </div>
                            </div>
                            <img src="./images/product_image.svg" class="mx-auto d-block" />
                        </div>
                        <div class="product-body">
                            <figure class="text-center mt-2 mb-1">
                                <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                            </figure>
                            <figure class="text-center mb-0">
                                <span class="product-stock-info">&bull; Yra sandelyje</span>
                            </figure>
                            <figure class="text-center mb-2">
                                <span class="product-price">
                                    <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                    </div>
                                </span>
                            </figure>
                        </div>
                        <div class="row justify-center">
                            <div class="col-6 text-center">
                                <span class="amount-heading">KIEKIS</span>
                                <div class="hstack justify-center mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span class="amount-count" style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
                                </div>
                            </div>
                            <div class="col-6 align-self-end">
                                <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                <img src="./images/cart.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <div class="product-header-action">
                                <img src="images/favourite_not_active.svg" class="active" />
                                <div class="product-header-info">
                                    <span class="badge badge-discount">-10%</span>
                                    <span class="badge badge-new mt-2">Nauja</span>
                                    <span class="badge badge-delivery mt-2">
                                    <img src="./images/truck.svg" /> 4-7d.
                                    </span>
                                </div>
                            </div>
                            <img src="./images/product_image.svg" class="mx-auto d-block" />
                        </div>
                        <div class="product-body">
                            <figure class="text-center mt-2 mb-1">
                                <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                            </figure>
                            <figure class="text-center mb-0">
                                <span class="product-stock-info">&bull; Yra sandelyje</span>
                            </figure>
                            <figure class="text-center mb-2">
                                <span class="product-price">
                                    <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                    </div>
                                </span>
                            </figure>
                        </div>
                        <div class="row justify-center">
                            <div class="col-6 text-center">
                                <span class="amount-heading">KIEKIS</span>
                                <div class="hstack justify-center mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span class="amount-count" style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
                                </div>
                            </div>
                            <div class="col-6 align-self-end">
                                <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                <img src="./images/cart.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="d-md-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="varela-round-font mt-30 ms-4 ml-0 mb-0">Top prekės</h4>
            </div>
        </div>
    </div>

    <div class="gx-4 gy-4 p-3">
        <!-- Swiper -->
        <div class="swiper mySwiper" style="width: 140%">
            <div class="swiper-wrapper">

            <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <div class="product-header-action">
                                <img src="images/favourite_not_active.svg" class="active" />
                                <div class="product-header-info">
                                    <span class="badge badge-discount">-10%</span>
                                    <span class="badge badge-new mt-2">Nauja</span>
                                    <span class="badge badge-delivery mt-2">
                                    <img src="./images/truck.svg" /> 4-7d.
                                    </span>
                                </div>
                            </div>
                            <img src="./images/product_image.svg" class="mx-auto d-block" />
                        </div>
                        <div class="product-body">
                            <figure class="text-center mt-2 mb-1">
                                <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                            </figure>
                            <figure class="text-center mb-0">
                                <span class="product-stock-info">&bull; Yra sandelyje</span>
                            </figure>
                            <figure class="text-center mb-2">
                                <span class="product-price">
                                    <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                    </div>
                                </span>
                            </figure>
                        </div>
                        <div class="row justify-center">
                            <div class="col-6 text-center">
                                <span class="amount-heading">KIEKIS</span>
                                <div class="hstack justify-center mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span class="amount-count" style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
                                </div>
                            </div>
                            <div class="col-6 align-self-end">
                                <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                <img src="./images/cart.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <div class="product-header-action">
                                <img src="images/favourite_not_active.svg" class="active" />
                                <div class="product-header-info">
                                    <span class="badge badge-discount">-10%</span>
                                    <span class="badge badge-new mt-2">Nauja</span>
                                    <span class="badge badge-delivery mt-2">
                                    <img src="./images/truck.svg" /> 4-7d.
                                    </span>
                                </div>
                            </div>
                            <img src="./images/product_image.svg" class="mx-auto d-block" />
                        </div>
                        <div class="product-body">
                            <figure class="text-center mt-2 mb-1">
                                <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                            </figure>
                            <figure class="text-center mb-0">
                                <span class="product-stock-info">&bull; Yra sandelyje</span>
                            </figure>
                            <figure class="text-center mb-2">
                                <span class="product-price">
                                    <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                    </div>
                                </span>
                            </figure>
                        </div>
                        <div class="row justify-center">
                            <div class="col-6 text-center">
                                <span class="amount-heading">KIEKIS</span>
                                <div class="hstack justify-center mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span class="amount-count" style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
                                </div>
                            </div>
                            <div class="col-6 align-self-end">
                                <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                <img src="./images/cart.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <div class="product-header-action">
                                <img src="images/favourite_not_active.svg" class="active" />
                                <div class="product-header-info">
                                    <span class="badge badge-discount">-10%</span>
                                    <span class="badge badge-new mt-2">Nauja</span>
                                    <span class="badge badge-delivery mt-2">
                                    <img src="./images/truck.svg" /> 4-7d.
                                    </span>
                                </div>
                            </div>
                            <img src="./images/product_image.svg" class="mx-auto d-block" />
                        </div>
                        <div class="product-body">
                            <figure class="text-center mt-2 mb-1">
                                <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                            </figure>
                            <figure class="text-center mb-0">
                                <span class="product-stock-info">&bull; Yra sandelyje</span>
                            </figure>
                            <figure class="text-center mb-2">
                                <span class="product-price">
                                    <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                    </div>
                                </span>
                            </figure>
                        </div>
                        <div class="row justify-center">
                            <div class="col-6 text-center">
                                <span class="amount-heading">KIEKIS</span>
                                <div class="hstack justify-center mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span class="amount-count" style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
                                </div>
                            </div>
                            <div class="col-6 align-self-end">
                                <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                <img src="./images/cart.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <div class="product-header-action">
                                <img src="images/favourite_not_active.svg" class="active" />
                                <div class="product-header-info">
                                    <span class="badge badge-discount">-10%</span>
                                    <span class="badge badge-new mt-2">Nauja</span>
                                    <span class="badge badge-delivery mt-2">
                                    <img src="./images/truck.svg" /> 4-7d.
                                    </span>
                                </div>
                            </div>
                            <img src="./images/product_image.svg" class="mx-auto d-block" />
                        </div>
                        <div class="product-body">
                            <figure class="text-center mt-2 mb-1">
                                <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                            </figure>
                            <figure class="text-center mb-0">
                                <span class="product-stock-info">&bull; Yra sandelyje</span>
                            </figure>
                            <figure class="text-center mb-2">
                                <span class="product-price">
                                    <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                    </div>
                                </span>
                            </figure>
                        </div>
                        <div class="row justify-center">
                            <div class="col-6 text-center">
                                <span class="amount-heading">KIEKIS</span>
                                <div class="hstack justify-center mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span class="amount-count" style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
                                </div>
                            </div>
                            <div class="col-6 align-self-end">
                                <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                <img src="./images/cart.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <div class="product-header-action">
                                <img src="images/favourite_not_active.svg" class="active" />
                                <div class="product-header-info">
                                    <span class="badge badge-discount">-10%</span>
                                    <span class="badge badge-new mt-2">Nauja</span>
                                    <span class="badge badge-delivery mt-2">
                                    <img src="./images/truck.svg" /> 4-7d.
                                    </span>
                                </div>
                            </div>
                            <img src="./images/product_image.svg" class="mx-auto d-block" />
                        </div>
                        <div class="product-body">
                            <figure class="text-center mt-2 mb-1">
                                <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                            </figure>
                            <figure class="text-center mb-0">
                                <span class="product-stock-info">&bull; Yra sandelyje</span>
                            </figure>
                            <figure class="text-center mb-2">
                                <span class="product-price">
                                    <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                    </div>
                                </span>
                            </figure>
                        </div>
                        <div class="row justify-center">
                            <div class="col-6 text-center">
                                <span class="amount-heading">KIEKIS</span>
                                <div class="hstack justify-center mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span class="amount-count" style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
                                </div>
                            </div>
                            <div class="col-6 align-self-end">
                                <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                <img src="./images/cart.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <div class="product-header-action">
                                <img src="images/favourite_not_active.svg" class="active" />
                                <div class="product-header-info">
                                    <span class="badge badge-discount">-10%</span>
                                    <span class="badge badge-new mt-2">Nauja</span>
                                    <span class="badge badge-delivery mt-2">
                                    <img src="./images/truck.svg" /> 4-7d.
                                    </span>
                                </div>
                            </div>
                            <img src="./images/product_image.svg" class="mx-auto d-block" />
                        </div>
                        <div class="product-body">
                            <figure class="text-center mt-2 mb-1">
                                <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                            </figure>
                            <figure class="text-center mb-0">
                                <span class="product-stock-info">&bull; Yra sandelyje</span>
                            </figure>
                            <figure class="text-center mb-2">
                                <span class="product-price">
                                    <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                    </div>
                                </span>
                            </figure>
                        </div>
                        <div class="row justify-center">
                            <div class="col-6 text-center">
                                <span class="amount-heading">KIEKIS</span>
                                <div class="hstack justify-center mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span class="amount-count" style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
                                </div>
                            </div>
                            <div class="col-6 align-self-end">
                                <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                <img src="./images/cart.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <div class="product-header-action">
                                <img src="images/favourite_not_active.svg" class="active" />
                                <div class="product-header-info">
                                    <span class="badge badge-discount">-10%</span>
                                    <span class="badge badge-new mt-2">Nauja</span>
                                    <span class="badge badge-delivery mt-2">
                                    <img src="./images/truck.svg" /> 4-7d.
                                    </span>
                                </div>
                            </div>
                            <img src="./images/product_image.svg" class="mx-auto d-block" />
                        </div>
                        <div class="product-body">
                            <figure class="text-center mt-2 mb-1">
                                <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                            </figure>
                            <figure class="text-center mb-0">
                                <span class="product-stock-info">&bull; Yra sandelyje</span>
                            </figure>
                            <figure class="text-center mb-2">
                                <span class="product-price">
                                    <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                    </div>
                                </span>
                            </figure>
                        </div>
                        <div class="row justify-center">
                            <div class="col-6 text-center">
                                <span class="amount-heading">KIEKIS</span>
                                <div class="hstack justify-center mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span class="amount-count" style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
                                </div>
                            </div>
                            <div class="col-6 align-self-end">
                                <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                <img src="./images/cart.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="container d-sm-hidden">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="varela-round-font mt-60 ms-4">Naujos prekės</h4>
            <div class="container mt-4">
                <div class="row gx-4 gy-4">
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <img src="images/favourite_active.svg" class="active" />
                                    <div class="product-header-info">
                                        <span class="badge badge-discount">-10%</span>
                                        <span class="badge badge-new mt-2">Nauja</span>
                                        <span class="badge badge-delivery mt-2">
                                            <img src="./images/truck.svg" /> 4-7d.
                                        </span>
                                    </div>
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                                    <span class="product-price">
                                    <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                    </div>
                                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <div class="favourite-button inactive">
                                        <img src="images/favourite_active.svg" class="active" />
                                        <img src="images/favourite_not_active.svg" class="not-active"/>
                                    </div>
                                    <div class="product-header-info">
                                        <span class="badge badge-discount">-10%</span>
                                        <span class="badge badge-new mt-2">Nauja</span>
                                        <span class="badge badge-delivery mt-2">
                        <img src="./images/truck.svg" /> 4-7d.
                      </span>
                                    </div>
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                    <span class="product-price">
                      <div class="d-flex mt-1 justify-content-center">
                        <span class="old-price">26.99 €</span>
                        <span class="new-price ms-3">24.99 €</span>
                      </div>
                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <div class="favourite-button inactive">
                                        <img src="images/favourite_active.svg" class="active" />
                                        <img src="images/favourite_not_active.svg" class="not-active"/>
                                    </div>
                                    <div class="product-header-info">
                                        <span class="badge badge-discount">-10%</span>
                                        <span class="badge badge-new mt-2">Nauja</span>
                                        <span class="badge badge-delivery mt-2">
                        <img src="./images/truck.svg" /> 4-7d.
                      </span>
                                    </div>
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                    <span class="product-price">
                      <div class="d-flex mt-1 justify-content-center">
                        <span class="old-price">26.99 €</span>
                        <span class="new-price ms-3">24.99 €</span>
                      </div>
                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <div class="favourite-button inactive">
                                        <img src="images/favourite_active.svg" class="active" />
                                        <img src="images/favourite_not_active.svg" class="not-active"/>
                                    </div>
                                    <div class="product-header-info">
                                        <span class="badge badge-discount">-10%</span>
                                        <span class="badge badge-new mt-2">Nauja</span>
                                        <span class="badge badge-delivery mt-2">
                        <img src="./images/truck.svg" /> 4-7d.
                      </span>
                                    </div>
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                    <span class="product-price">
                      <div class="d-flex mt-1 justify-content-center">
                        <span class="old-price">26.99 €</span>
                        <span class="new-price ms-3">24.99 €</span>
                      </div>
                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <div class="favourite-button inactive">
                                        <img src="images/favourite_active.svg" class="active" />
                                        <img src="images/favourite_not_active.svg" class="not-active"/>
                                    </div>
                                    <div class="product-header-info">
                                        <span class="badge badge-discount">-10%</span>
                                        <span class="badge badge-new mt-2">Nauja</span>
                                        <span class="badge badge-delivery mt-2">
                        <img src="./images/truck.svg" /> 4-7d.
                      </span>
                                    </div>
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                    <span class="product-price">
                      <div class="d-flex mt-1 justify-content-center">
                        <span class="old-price">26.99 €</span>
                        <span class="new-price ms-3">24.99 €</span>
                      </div>
                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <div class="favourite-button inactive">
                                        <img src="images/favourite_active.svg" class="active" />
                                        <img src="images/favourite_not_active.svg" class="not-active"/>
                                    </div>
                                    <div class="product-header-info">
                                        <span class="badge badge-discount">-10%</span>
                                        <span class="badge badge-new mt-2">Nauja</span>
                                        <span class="badge badge-delivery mt-2">
                        <img src="./images/truck.svg" /> 4-7d.
                      </span>
                                    </div>
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                    <span class="product-price">
                      <div class="d-flex mt-1 justify-content-center">
                        <span class="old-price">26.99 €</span>
                        <span class="new-price ms-3">24.99 €</span>
                      </div>
                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <div class="favourite-button inactive">
                                        <img src="images/favourite_active.svg" class="active" />
                                        <img src="images/favourite_not_active.svg" class="not-active"/>
                                    </div>
                                    <div class="product-header-info">
                                        <span class="badge badge-discount">-10%</span>
                                        <span class="badge badge-new mt-2">Nauja</span>
                                        <span class="badge badge-delivery mt-2">
                        <img src="./images/truck.svg" /> 4-7d.
                      </span>
                                    </div>
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                    <span class="product-price">
                      <div class="d-flex mt-1 justify-content-center">
                        <span class="old-price">26.99 €</span>
                        <span class="new-price ms-3">24.99 €</span>
                      </div>
                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <div class="favourite-button inactive">
                                        <img src="images/favourite_active.svg" class="active" />
                                        <img src="images/favourite_not_active.svg" class="not-active"/>
                                    </div>
                                    <div class="product-header-info">
                                        <span class="badge badge-discount">-10%</span>
                                        <span class="badge badge-new mt-2">Nauja</span>
                                        <span class="badge badge-delivery mt-2">
                        <img src="./images/truck.svg" /> 4-7d.
                      </span>
                                    </div>
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                    <span class="product-price">
                      <div class="d-flex mt-1 justify-content-center">
                        <span class="old-price">26.99 €</span>
                        <span class="new-price ms-3">24.99 €</span>
                      </div>
                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row mt-100 ms-4">
                <div class="col-lg-6">
                    <h4 class="varela-round-font">Top prekės</h4>
                </div>
                <div class="col-lg-6">
                    <a href="#" class="float-right me-3"><img src="./images/to_top.svg" style="width: 50px;" /></a>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row gx-4 gy-4">
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <img src="./images/favourite_active.svg" />
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                    <span class="product-price">
                      <div class="d-flex mt-1 justify-content-center">
                        <span class="old-price">26.99 €</span>
                        <span class="new-price ms-3">24.99 €</span>
                      </div>
                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <div class="favourite-button inactive">
                                        <img src="images/favourite_active.svg" class="active" />
                                        <img src="images/favourite_not_active.svg" class="not-active"/>
                                    </div>
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                    <span class="product-price">
                      <div class="d-flex mt-1 justify-content-center">
                        <span class="old-price">26.99 €</span>
                        <span class="new-price ms-3">24.99 €</span>
                      </div>
                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <div class="favourite-button inactive">
                                        <img src="images/favourite_active.svg" class="active" />
                                        <img src="images/favourite_not_active.svg" class="not-active"/>
                                    </div>
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                                    <span class="product-price">
                                        <div class="d-flex mt-1 justify-content-center">
                                            <span class="old-price">26.99 €</span>
                                            <span class="new-price ms-3">24.99 €</span>
                                        </div>
                                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <div class="favourite-button inactive">
                                        <img src="images/favourite_active.svg" class="active" />
                                        <img src="images/favourite_not_active.svg" class="not-active"/>
                                    </div>
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                                    <span class="product-price">
                                       <div class="d-flex mt-1 justify-content-center">
                                          <span class="old-price">26.99 €</span>
                                          <span class="new-price ms-3">24.99 €</span>
                                       </div>
                                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <div class="favourite-button inactive">
                                        <img src="images/favourite_active.svg" class="active" />
                                        <img src="images/favourite_not_active.svg" class="not-active"/>
                                    </div>
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                                    <span class="product-price">
                                       <div class="d-flex mt-1 justify-content-center">
                                          <span class="old-price">26.99 €</span>
                                          <span class="new-price ms-3">24.99 €</span>
                                       </div>
                                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <div class="favourite-button inactive">
                                        <img src="images/favourite_active.svg" class="active" />
                                        <img src="images/favourite_not_active.svg" class="not-active"/>
                                    </div>
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                                    <span class="product-price">
                                      <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                      </div>
                                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <div class="favourite-button inactive">
                                        <img src="images/favourite_active.svg" class="active" />
                                        <img src="images/favourite_not_active.svg" class="not-active"/>
                                    </div>
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                                    <span class="product-price">
                                      <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                      </div>
                                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-card">
                            <div class="product-header">
                                <div class="product-header-action">
                                    <div class="favourite-button inactive">
                                        <img src="images/favourite_active.svg" class="active" />
                                        <img src="images/favourite_not_active.svg" class="not-active"/>
                                    </div>
                                </div>
                                <img src="./images/product_image.svg" class="mx-auto d-block" />
                            </div>
                            <div class="product-body">
                                <figure class="text-center mt-2 mb-1">
                                    <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                </figure>
                                <figure class="text-center mb-0">
                                    <span class="product-stock-info">&bull; Yra sandelyje</span>
                                </figure>
                                <figure class="text-center mb-2">
                                    <span class="product-price">
                                      <div class="d-flex mt-1 justify-content-center">
                                        <span class="old-price">26.99 €</span>
                                        <span class="new-price ms-3">24.99 €</span>
                                      </div>
                                    </span>
                                </figure>
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 text-center">
                                        <span>KIEKIS</span>
                                        <div class="hstack justify-content-between mt-1">
                                            <button class="btn btn-quantity">+</button>
                                            <span style="display: block; width: 20px;">0</span>
                                            <button class="btn btn-quantity">-</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 align-self-end">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart float-right">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hstack mt-4 mb-4 float-right">
                <a href="#" class="page-prev">Ankstesnis</a>
                <div class="d-flex m-3" style="height: 1.3rem;">
                    <div class="vr"></div>
                </div>
                <a href="#" class="page-next">Kitas</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-5" style="background-color: #231F20;">
    <div class="container">
        <div class="row gx-5">
            <div class="col">
                <span class="footer-section-title text-uppercase">Informacija</span>
                <a href="#" class="footer-section-link">Pristatymas</a>
                <a href="#" class="footer-section-link">Apmokėjimas</a>
                <a href="#" class="footer-section-link">Slapukų politika</a>
                <a href="#" class="footer-section-link">Privatumo politika</a>
                <a href="#" class="footer-section-link">Kontaktai</a>
            </div>
            <div class="col">
                <span class="footer-section-title text-uppercase">Aptarnavimas</span>
                <a href="#" class="footer-section-link">Prekių grąžinimas</a>
                <a href="#" class="footer-section-link">Garantijos</a>
                <a href="#" class="footer-section-link">Taisyklės ir sąlygos</a>
                <a href="#" class="footer-section-link">Prekių ženklai</a>
            </div>
            <div class="col">
                <span class="footer-section-title text-uppercase">Mano paskyra</span>
                <a href="#" class="footer-section-link">Mano paskyra</a>
                <a href="#" class="footer-section-link">Mano užsakymai</a>
                <a href="#" class="footer-section-link">Patikusios prekės</a>
            </div>
        </div>
        <div class="hstack">
            <a href="#" class="footer-section-link"><img src="./images/facebook_icon.svg" class="m-3 mr-2 ml-0" /></a>
            <a href="#" class="footer-section-link"><img src="./images/instagram_icon.svg" class="m-3 ml-2 mr-2" /></a>
            <a href="#" class="footer-section-link"><img src="./images/linkedin_icon.svg" class="m-3 ml-2 mr-2" /></a>
        </div>
        <div class="row bottom-bar mt-3 pt-3 pb-3">
            <div class="col align-self-start pl-0">
                <span>@2021 Reach</span>
            </div>
            <div class="col align-self-center text-center">
                <a href="#" class="footer-section-link">Privatumo politika</a>
            </div>
            <div class="col align-self-end text-end" style="padding-right: 0;">
                <a href="#" class="footer-section-link">Sąlygos</a>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 'auto',
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="./js/scripts.js"></script>
</body>

</html>