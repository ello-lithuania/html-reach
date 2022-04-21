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

<div class="container p-0">
    <div class="d-flex">
        <nav class="payment-nav">
            <div class="nav nav-tabs d-flex" role="tablist">
                <button class="col nav-link active" id="user_info_tab" data-bs-toggle="pill" data-bs-target="#user_info_content" type="button" role="tab" aria-controls="user_info_content" aria-selected="true">Mano profilis</button>
                <button class="col nav-link" id="orders_tab" data-bs-toggle="pill" data-bs-target="#orders_content" type="button" role="tab" aria-controls="orders_content" aria-selected="false">Mano užsakymai</button>
                <button class="col nav-link" id="favourite_products_tab" data-bs-toggle="pill" data-bs-target="#favourite_products_content" type="button" role="tab" aria-controls="favourite_products_content" aria-selected="false">Patikusios prekės</button>
                <button class="col nav-link" id="settings_tab" data-bs-toggle="pill" data-bs-target="#settings_content" type="button" role="tab" aria-controls="settings_content" aria-selected="false">Nustatymai</button>
            </div>
        </nav>
    </div>
    <div class="d-flex">
        <div class="tab-content" style="width: 100%;">
            <div class="tab-pane mb-100 fade show active" id="user_info_content" role="tabpanel" aria-labelledby="user_info_tab">
                <div class="row mt-60 p-15">
                    <h4 class="m-0">Mano profilis</h4>
                    <div class="row gx-3 gy-4 mt-0">
                        <div class="col-lg-4">
                            <input type="text" class="form-control disable-focus default-reach-input default-reach-input-background" placeholder="Vardas"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control disable-focus default-reach-input default-reach-input-background" placeholder="Pavardė"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control disable-focus default-reach-input default-reach-input-background" placeholder="Telefonas"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control disable-focus default-reach-input default-reach-input-background" placeholder="Adresas"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="email" class="form-control disable-focus default-reach-input default-reach-input-background" placeholder="El. paštas"/>
                        </div>
                    </div>
                </div>
                <div class="row mt-20 p-15 mb-40">
                    <div class="col-lg-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="newsletter" id="newsletterCheckbox" value="newsletter" checked>
                            <label class="form-check-label fs-12" style="color: #6E0EC0;" for="newsletterCheckbox">Gauti naujienlaiškį</label>
                        </div>
                        <span class="d-block fs-12 mt-10" style="color: #A7A7A7;">Sutikus gauti naujienlaiškį sutinkante gauti naujienas apie prekes ir Jums skirtas pasiūlymus</span>
                        <div class="d-flex justify-content-between mt-30">
                            <button class="btn btn-next fs-14" style="border-radius: 8px; text-transform: uppercase; padding: 8px 10px;">Išsaugoti</button>
                        </div>
                    </div>
                </div>
                <h4 class="m-0 p-15">Rekomenduojamos Jums</h4>
                <div class="row gx-5 gy-4 p-15">
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
            <div class="tab-pane fade show" id="orders_content" role="tabpanel" aria-labelledby="orders_tab">
                <div class="row mt-60 p-15">
                    <h4 class="m-0 pl-0">Mano užsakymai</h4>
                    <div class="row mt-30">
                        <div class="col">
                            <span class="fs-14 text-inactive">UŽSAKYMAS</span>
                        </div>
                        <div class="col text-center">
                            <span class="fs-14 text-inactive">PATEIKIMO DATA</span>
                        </div>
                        <div class="col">
                            <span class="fs-14 text-inactive">STATUSAS</span>
                        </div>
                        <div class="col text-center">
                            <span class="fs-14 text-inactive">SUMA BE PVM</span>
                        </div>
                        <div class="col text-center">
                            <span class="fs-14 text-inactive">SUMA SU PVM</span>
                        </div>
                    </div>
                </div>
                <div class="row pl-15 pr-15">
                    <div class="col-lg-12 default-card mb-15">
                        <div class="row">
                            <div class="col">0000966634</div>
                            <div class="col text-center">2021-07-15</div>
                            <div class="col"><span class="text-in-progress">Vykdomas</span></div>
                            <div class="col text-center">20,52 €</div>
                            <div class="col text-center"><b>24,99 €</b></div>
                        </div>
                    </div>
                    <div class="col-lg-12 default-card mb-15">
                        <div class="row">
                            <div class="col">0000966634</div>
                            <div class="col text-center">2021-07-15</div>
                            <div class="col"><span class="text-in-progress">Vykdomas</span></div>
                            <div class="col text-center">20,52 €</div>
                            <div class="col text-center"><b>24,99 €</b></div>
                        </div>
                    </div>
                    <div class="col-lg-12 default-card mb-15">
                        <div class="row">
                            <div class="col">0000966634</div>
                            <div class="col text-center">2021-07-15</div>
                            <div class="col"><span class="text-completed">Įvykdytas</span></div>
                            <div class="col text-center">20,52 €</div>
                            <div class="col text-center"><b>24,99 €</b></div>
                        </div>
                    </div>
                    <div class="col-lg-12 default-card mb-15">
                        <div class="row">
                            <div class="col">0000966634</div>
                            <div class="col text-center">2021-07-15</div>
                            <div class="col"><span class="text-completed">Įvykdytas</span></div>
                            <div class="col text-center">20,52 €</div>
                            <div class="col text-center"><b>24,99 €</b></div>
                        </div>
                    </div>
                    <div class="col-lg-12 default-card mb-15">
                        <div class="row">
                            <div class="col">0000966634</div>
                            <div class="col text-center">2021-07-15</div>
                            <div class="col"><span class="text-completed">Įvykdytas</span></div>
                            <div class="col text-center">20,52 €</div>
                            <div class="col text-center"><b>24,99 €</b></div>
                        </div>
                    </div>
                </div>

                <div class="row mt-40">
                    <h4 class="m-0 p-15">Rekomenduojamos Jums</h4>
                    <div class="row gx-5 gy-4 p-15 mt-0 pt-0 mb-100">
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
            </div>
            <div class="tab-pane fade show" id="favourite_products_content" role="tabpanel" aria-labelledby="favourite_products_tab">
                <div class="row mt-60 p-15">
                    <h4 class="m-0 pl-0">Patikusios prekės</h4>
                    <div class="row mt-30">
                        <div class="col-lg-6">
                            <span class="fs-14 text-inactive">PREKĖ</span>
                        </div>
                        <div class="col text-center">
                            <span class="fs-14 text-inactive">VIENETO KAINA</span>
                        </div>
                        <div class="col text-center">
                            <span class="fs-14 text-inactive">KIEKIS</span>
                        </div>
                        <div class="col text-center">
                            <span class="fs-14 text-inactive">LIKUTIS</span>
                        </div>
                        <div class="col text-center">
                            <span class="fs-14 text-inactive">SUMA</span>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
                <div class="row pl-15 pr-15">
                    <div class="col-lg-12 default-card mb-15 pl-0 pr-0">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 text-center"><img src="./images/product_1_image.svg"/></div>
                                    <div class="col-lg-9">Dėklas Marble Silicone Apple Iphone 12</div>
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="vstack">
                                    <span class="product-old-price">26,99 €</span>
                                    <span class="product-new-price">24,99 €</span>
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="d-flex justify-content-between mt-10">
                                    <button class="btn btn-quantity">-</button>
                                    <span style="display: block;">0</span>
                                    <button class="btn btn-quantity">+</button>
                                </div>
                            </div>
                            <div class="col text-center">
                                <span class="d-block mt-10">8 vnt.</span>
                            </div>
                            <div class="col text-center">
                                <span class="d-block product-price mt-10">24,99 €</span>
                            </div>
                            <div class="col-lg-1"><img src="./images/bin.svg" /></div>
                        </div>
                    </div>
                    <div class="col-lg-12 default-card mb-15 pl-0 pr-0">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 text-center"><img src="./images/product_1_image.svg"/></div>
                                    <div class="col-lg-9">Dėklas Marble Silicone Apple Iphone 12</div>
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="vstack">
                                    <span class="product-old-price">26,99 €</span>
                                    <span class="product-new-price">24,99 €</span>
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="d-flex justify-content-between mt-10">
                                    <button class="btn btn-quantity">-</button>
                                    <span style="display: block;">0</span>
                                    <button class="btn btn-quantity">+</button>
                                </div>
                            </div>
                            <div class="col text-center">
                                <span class="d-block mt-10">8 vnt.</span>
                            </div>
                            <div class="col text-center">
                                <span class="d-block product-price mt-10">24,99 €</span>
                            </div>
                            <div class="col-lg-1"><img src="./images/bin.svg" /></div>
                        </div>
                    </div>
                </div>

                <div class="row mt-40">
                    <h4 class="m-0 p-15">Rekomenduojamos Jums</h4>
                    <div class="row gx-5 gy-4 p-15 mt-0 pt-0 mb-100">
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
            </div>
            <div class="tab-pane fade show" id="settings_content" role="tabpanel" aria-labelledby="settings_tab">
                <div class="row">

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="./js/scripts.js"></script>
</body>

</html>