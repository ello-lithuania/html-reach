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
    <link href="./css/styles.css" rel="stylesheet" />
</head>

<body>

<?php include('./navbar.php');?>

<div class="container p-0 product-details">
    <div class="p-20 breadrumbs-container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">...</a></li>
                <li class="breadcrumb-item"><a href="#">Masažuokliai</a></li>
                <li class="breadcrumb-item"><a href="#">Steperiai</a></li>
            </ol>
        </nav>
    </div>
    <div class="d-flex">
        <div class="row">
            <div class="col-lg-5 col-sm-12 p-40">
                <img src="./images/product_stepper_image.png" class="main-image"/>
            </div>
            <div class="col-lg-2 alternative-images col-sm-12">
                <ul>
                    <li>
                        <a href="#">
                            <img src="./images/product_stepper_image.png" class="active"/>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="./images/product_stepper_image.png"/>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="./images/product_stepper_image.png"/>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="./images/product_stepper_image.png"/>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-5 product-all-details">
            <figure>
                <h4>Steperis SS002 juodas geltonas</h4>
            </figure>
            <div class="hstack">
                <img src="./images/star_active.svg"/>
                <img src="./images/star_active.svg" class="ml-5"/>
                <img src="./images/star_active.svg" class="ml-5"/>
                <img src="./images/star_active.svg" class="ml-5"/>
                <img src="./images/star_inactive.svg" class="ml-5"/>
                <span class="d-sm-hidden d-block ml-20 fs-12">3 įvertinimai</span>
            </div>
            <span class="d-block fs-12 mt-20 d-sm-hidden" style="color: #A7A7A7;">KAINA</span>
            <div class="hstack d-sm-hidden">
                <div style="width: 130px;">
                    <span class="product-price">30,78 €</span><br/>
                </div>
                <span class="badge badge-discount" style="width: 55px; font-size: 11px;">-10%</span>
            </div>
            <div class="hstack mt-10 d-sm-hidden">
                <div style="width: 130px;">
                    <span class="d-block fs-12" style="color: #A7A7A7;">24,44 € be PVM</span>
                </div>
                <span class="d-block fs-14" style="text-decoration: line-through;padding-left: 6px;">34,99 €</span>
            </div>
            <figure class="mb-0 fs-13 mt-10">
                <b>Prekės kodas</b>: 000.000.00
            </figure>
            <figure class="mb-0 fs-13 mt-10">
                <b>Barkodas</b>: 400000000000000
            </figure>
            <figure class="mb-0 fs-12 mt-20">
                <span class="product-stock-info">&bull; Liko 8 vnt.</span>
            </figure>
            <figure class="mb-0 fs-12 mt-10">
                <img src="./images/truck.svg" style="margin-right: 10px;" /> Pristatysime per 1 d. - 3 d.d.,
            </figure>
            <div style="height: 1px; background-color: #A7A7A7; width: 60%; margin-top: 40px;"></div>
            <div class="d-flex mt-20">
                <figure class="mb-0 fs-13" style="width: 130px;">
                    <span class="fs-12" style="color: #A7A7A7;">PILNA KAINA</span><br/>
                    <span class="d-block product-price" style="color: #000000; margin-top: 5px;">30,78 €</span>
                </figure>
                <div>
                    <div class="hstack justify-content-between" style="width: 110px;">
                        <button class="btn btn-quantity">-</button>
                        <span style="display: block;">0</span>
                        <button class="btn btn-quantity">+</button>
                    </div>
                    <div class="hstack mt-10">
                        <button class="btn btn-sm btn-primary btn-add-to-cart float-right" style="padding: 6px 20px;">
                            <img src="./images/cart.svg" />
                        </button>
                        <div class="favourite-button details-favourite-button inactive ml-20">
                            <img src="images/favourite_active.svg" class="active" />
                            <img src="images/favourite_not_active.svg" class="not-active"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    </div>
    <div class="fs-13 p-40 mt-20" style="border-radius: 10px; background-color: rgba(167, 167, 167, 0.1); line-height: 1.5;">
        <h3 class="mb-40">Informacija apie prekę</h3>
        <p>POWERFUL HYDRAULIC RESISTANCE SYSTEM: With a Powerful Hydraulic Resistance System, OMMO steppers provide an even pedal resistance and a stable and safety workout environment. Please be attention that the hydraulic tube need to rest after 30-minutes exercises.</p>
        <p>DURABLE AND CAPABLE: The whole product is made of high quality iron material, strong and durable, safe and reliable for long service. This compact stepper can support weight up to 220 lbs. What's more, It only takes up little space, you can put it in any place in your house, and exercise at any time conveniently.</p>
        <p>ADJUSTABLE HEIGHT: You can adjust the height of this stair stepper through adjustable knob. The higher the stepper, the harder it is and lower for easier. It's base on the user's body condition and different exercise styles.</p>
        <p>RESISTANCE BANDS: OMMO exercise stepper is equipped with 2 detachable resistance bands that allow you to exercise your arms, chest, back and shoulders while exercising your legs, help to build a perfect figure!</p>
        <p>DIGITAL DISPLAY & NON-SLIP PEDALS: The LCD Display will insist you stay focused during your workout as it tracks Scan, Time, Count and Calories. Large textured foot plates provide steady, quiet and smooth workout. Any question of the product, please contact the seller for help.</p>
    </div>
    <div class="d-flex justify-content-between mt-100">
        <h4>Panašios prekės</h4>
        <div class="hstack">
            <a href="#"><img src="images/slider_arrow_left.svg" class="mr-15"/></a>
            <span class="fs-12">1 / 2</span>
            <a href="#"><img src="images/slider_arrow_right.svg" class="ml-15"/></a>
        </div>
    </div>
    <div class="d-flex mt-40">
        <div class="row gx-5">
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
                        <img src="./images/product_image.svg" class="mx-auto d-block main-image" />
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
                                <span style="font-size: 12px;">KIEKIS</span>
                                <div class="hstack justify-content-between mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
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
                        <img src="./images/product_image.svg" class="mx-auto d-block main-image" />
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
                                <span style="font-size: 12px;">KIEKIS</span>
                                <div class="hstack justify-content-between mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
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
                        <img src="./images/product_image.svg" class="mx-auto d-block main-image" />
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
                                <span style="font-size: 12px;">KIEKIS</span>
                                <div class="hstack justify-content-between mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
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
                        <img src="./images/product_image.svg" class="mx-auto d-block main-image" />
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
                                <span style="font-size: 12px;">KIEKIS</span>
                                <div class="hstack justify-content-between mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
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
        </div>
    </div>
    <div class="d-flex justify-content-between mt-100">
        <h4>Peržiūrėtos prekės</h4>
        <div class="hstack">
            <a href="#"><img src="images/slider_arrow_left.svg" class="mr-15"/></a>
            <span class="fs-12">1 / 2</span>
            <a href="#"><img src="images/slider_arrow_right.svg" class="ml-15"/></a>
        </div>
    </div>
    <div class="d-flex mt-40 mb-100">
        <div class="row gx-5">
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
                        <img src="./images/product_image.svg" class="mx-auto d-block main-image" />
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
                                <span style="font-size: 12px;">KIEKIS</span>
                                <div class="hstack justify-content-between mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
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
                        <img src="./images/product_image.svg" class="mx-auto d-block main-image" />
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
                                <span style="font-size: 12px;">KIEKIS</span>
                                <div class="hstack justify-content-between mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
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
                        <img src="./images/product_image.svg" class="mx-auto d-block main-image" />
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
                                <span style="font-size: 12px;">KIEKIS</span>
                                <div class="hstack justify-content-between mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
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
                        <img src="./images/product_image.svg" class="mx-auto d-block main-image" />
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
                                <span style="font-size: 12px;">KIEKIS</span>
                                <div class="hstack justify-content-between mt-1">
                                    <button class="btn btn-quantity">-</button>
                                    <span style="display: block; width: 20px;">0</span>
                                    <button class="btn btn-quantity">+</button>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="./js/rangeSlider.js"></script>
<script type="text/javascript" src="./js/fslightbox.js"></script>
<script type="text/javascript" src="./js/scripts.js"></script>
</body>

</html>