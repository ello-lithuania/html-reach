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

<div class="filter-main-container hidden">
    <div class="filter-main-container-inner">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-between filter-top-btns">
                    <button class="closeFilterContainer"><img src="./images/filters-back-icon.svg"/> Filtrai</button>
                    <button><img src="./images/filter-close-icon.svg"/> Išvalyti filtrus</button>
                </div>
                <div class="col-12">
                    <p class="filter-title">Kaina:</p>
                    <input/>
                </div>
                <div class="col-12">
                    <button class="filter-btns-select closeFilterContainer openFilterInnerContainer">
                    <p class="filter-title">Modelis:</p>
                    <p class="filter-title filter-title-bottom">Visi modeliai <img src="./images/filter-next-icon.svg"/></p>
                    </button>
                </div>
                <div class="col-12">
                    <button class="filter-btns-select closeFilterContainer openFilterInnerContainer">
                    <p class="filter-title">Rušiuoti:</p>
                    <p class="filter-title filter-title-bottom">Kaina nuo žemiausios iki aukščiausios <img src="./images/filter-next-icon.svg"/></p>
                    </button>
                </div>
                <div class="col-12">
                    <button class="filter-btns-select closeFilterContainer openFilterInnerContainer">
                    <p class="filter-title">Kategorija:</p>
                    <p class="filter-title filter-title-bottom">Visos <img src="./images/filter-next-icon.svg"/></p>
                    </button>
                </div>
                <div class="col-12">
                    <button class="filter-btns-select closeFilterContainer openFilterInnerContainer">
                    <p class="filter-title">Prekės ženklas:</p>
                    <p class="filter-title filter-title-bottom">Hoco, Borofone +5 <img src="./images/filter-next-icon.svg"/></p>
                    </button>
                </div>
                <div class="col-12">
                    <button class="filter-btns-select closeFilterContainer openFilterInnerContainer">
                    <p class="filter-title">Spalva:</p>
                    <p class="filter-title filter-title-bottom">Visos <img src="./images/filter-next-icon.svg"/></p>
                    </button>
                </div>
                <div class="col-12 text-center">
                    <button class="btn-filter-submit">Rodyti rezultatus <span>(345)</span></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="openFilterInnerContainerdiv hidden">
    <div class="openFilterInnerContainerInner">
        <div class="container">
            <div class="row">
                <div class="d-flex filter-top-btns">
                    <button class="closeFilterInnerContainerFilter"><img src="./images/filters-back-icon.svg"/> Filtrai</button>
                </div>
                <div class="col-6">
                                    <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                            Hoco
                                        </label>
                                    </div>
                 </div>
                 <div class="col-6">
                                    <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                            3MK
                                        </label>
                                    </div>
                 </div>

                 <div class="col-6">
                                    <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                        Borafone
                                        </label>
                                    </div>
                 </div>
                 <div class="col-6">
                                    <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                        Devia
                                        </label>
                                    </div>
                 </div>

                 <div class="col-6">
                                    <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                        Remax
                                        </label>
                                    </div>
                 </div>
                 <div class="col-6">
                                    <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                        Mercury
                                        </label>
                                    </div>
                 </div>

                 <div class="col-6">
                                    <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                        Dux Ducis
                                        </label>
                                    </div>
                 </div>
                 <div class="col-6">
                                    <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                        Goodram
                                        </label>
                                    </div>
                 </div>

                 <div class="col-6">
                                    <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                        3MK
                                        </label>
                                    </div>
                 </div>
                 <div class="col-6">
                                    <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                        MyScreen
                                        </label>
                                    </div>
                 </div>
                 <div class="col-12 text-center">
                    <button class="btn-filter-submit closeFilterInnerContainerFilterBtn">Rodyti rezultatus <span>(345)</span></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container p-0 products-main-page">
    <div class="d-flex">
        <div class="filter-column pt-15">
            <div class="hidden-sm">
                <div class="d-flex justify-content-between p-15">
                    <h5>Filtrai</h5>
                    <a href="#" class="clear-filter-link"><img src="images/clear.svg" style="margin-right: 10px;"/>Išvalyti filtrus</a>
                </div>
                <div class="filter-category-container">
                    <span class="filter-category-title">Kaina</span>
                    <div id="price_range_slider"></div>
                </div>
                <div class="filter-category-container">
                    <span class="filter-category-title">Modelis</span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioModel" id="flexRadioModel1" checked>
                        <label class="form-check-label" for="flexRadioModel1">Samsung A232 A35  5G</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioModel" id="flexRadioModel2">
                        <label class="form-check-label" for="flexRadioModel2">Samsung A232 A35  5G</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioModel" id="flexRadioModel3">
                        <label class="form-check-label" for="flexRadioModel3">Samsung A232 A35  5G</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioModel" id="flexRadioModel4">
                        <label class="form-check-label" for="flexRadioModel4">Samsung A232 A35  5G</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioModel" id="flexRadioModel5">
                        <label class="form-check-label" for="flexRadioModel5">Samsung A232 A35  5G</label>
                    </div>
                </div>
                <div class="filter-category-container">
                    <span class="filter-category-title">Kategorija</span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioCategory" id="flexRadioCategory1" checked>
                        <label class="form-check-label" for="flexRadioCategory1">Dėklai</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioCategory" id="flexRadioCategory2">
                        <label class="form-check-label" for="flexRadioCategory2">Ekrano apsaugos</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioCategory" id="flexRadioCategory3">
                        <label class="form-check-label" for="flexRadioCategory3">Įkrovikliai</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioCategory" id="flexRadioCategory4">
                        <label class="form-check-label" for="flexRadioCategory4">Kabeliai</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioCategory" id="flexRadioCategory5">
                        <label class="form-check-label" for="flexRadioCategory5">Akumuliatoriai</label>
                    </div>
                </div>
                <div class="filter-category-container">
                    <span class="filter-category-title">Prekės ženklas</span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioBrand" id="flexRadioBrand1" checked>
                        <label class="form-check-label" for="flexRadioBrand1">Haco</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioBrand" id="flexRadioBrand2">
                        <label class="form-check-label" for="flexRadioBrand2">Reach</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioBrand" id="flexRadioBrand3">
                        <label class="form-check-label" for="flexRadioBrand3">Borofone</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioBrand" id="flexRadioBrand4">
                        <label class="form-check-label" for="flexRadioBrand4">Devia</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioBrand" id="flexRadioBrand5">
                        <label class="form-check-label" for="flexRadioBrand5">3MK</label>
                    </div>
                </div>
                <div class="filter-category-container">
                    <span class="filter-category-title">Spalva</span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioColor" id="flexRadioColor1" checked>
                        <label class="form-check-label" for="flexRadioColor1">Auksinė</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioColor" id="flexRadioColor2">
                        <label class="form-check-label" for="flexRadioColor2">Juoda</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioColor" id="flexRadioColor3">
                        <label class="form-check-label" for="flexRadioColor3">Mėlyna</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioColor" id="flexRadioColor4">
                        <label class="form-check-label" for="flexRadioColor4">Raudona</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioColor" id="flexRadioColor5">
                        <label class="form-check-label" for="flexRadioColor5">Bordo</label>
                    </div>
                </div>
                <div class="filter-category-container">
                    <span class="filter-category-title">Su nuolaida</span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDiscount" id="flexRadioDiscount1" checked>
                        <label class="form-check-label" for="flexRadioDiscount1">Taip</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDiscount" id="flexRadioDiscount2">
                        <label class="form-check-label" for="flexRadioDiscount2">Ne</label>
                    </div>
                </div>
            </div>
            <div class="hidden-md filter-container-mobile">
                <div class="container">
                    <div class="row">


                        <div class="col-6 filters-column">
                            <button class="openFilterContainer"><img src="./images/settings-icon.svg" /></button>
                            <button class="main-filter-btn openFilterContainer" class="main-filter-btn">Paieškos: <span>AirPods</span></button>
                        </div>
                        
                        <div class="col-6">
                            <nav>
                            <div class="nav nav-tabs" id="listing_view_option_tabs" role="tablist">
                                <button class="nav-link active" style="padding-left: 5px;" id="listing_view_option_grid_3" data-bs-toggle="pill" data-bs-target="#listing_container_grid_3" type="button" role="tab" aria-controls="listing_container_grid_3" aria-selected="true"><img src="./images/square-icon.svg"></button>
                                <button class="nav-link" id="listing_view_option_grid_4" data-bs-toggle="pill" data-bs-target="#listing_container_grid_4" type="button" role="tab" aria-controls="listing_container_grid_4" aria-selected="false"><img src="./images/double-columns-icon.svg"></button>
                                <button class="nav-link pr-0" id="listing_view_option_image_list" data-bs-toggle="pill" data-bs-target="#listing_container_image_list" type="button" role="tab" aria-controls="listing_container_image_list" aria-selected="false"><img src="./images/image_list.svg"></button>
                            </div>
                            </nav>

                        </div>


                        </div>

                </div>
            </div>
        </div>


        <div class="col product-main-container-show" style="padding-left: 15px; padding-right: 15px;">
            <div class="hidden-sm">
                <div class="d-flex justify-content-between">
                    <nav>
                        <div class="nav nav-tabs" id="listing_view_option_tabs" role="tablist">
                            <button class="nav-link active" style="padding-left: 5px;" id="listing_view_option_grid_3" data-bs-toggle="pill" data-bs-target="#listing_container_grid_3" type="button" role="tab" aria-controls="listing_container_grid_3" aria-selected="true"><img src="./images/grid_3.svg" /></button>
                            <button class="nav-link" id="listing_view_option_grid_4" data-bs-toggle="pill" data-bs-target="#listing_container_grid_4" type="button" role="tab" aria-controls="listing_container_grid_4" aria-selected="false"><img src="./images/grid_4.svg" /></button>
                            <button class="nav-link" id="listing_view_option_image_list" data-bs-toggle="pill" data-bs-target="#listing_container_image_list" type="button" role="tab" aria-controls="listing_container_image_list" aria-selected="false"><img src="./images/image_list.svg" /></button>
                            <button class="nav-link" id="listing_view_option_list" data-bs-toggle="pill" data-bs-target="#listing_container_list" type="button" role="tab" aria-controls="listing_container_list" aria-selected="false"><img src="./images/list.svg" /></button>
                        </div>
                    </nav>
                    <div class="d-flex listing-order-container">
                        <span class="select-title">Pavadinimas: </span>
                        <select class="form-select">
                            <option value="a_z" selected>A - Z</option>
                            <option value="z_a">Z - A</option>
                        </select>
                        <span class="select-title">Rodyti:</span>
                        <select class="form-select">
                            <option value="25">25</option>
                            <option value="50" selected>50</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="listing_container_grid_3" role="tabpanel" aria-labelledby="listing_container_grid_3">
                    <div class="row gx-3 gy-3">
                        <div class="col-lg-4">
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
                                            <div class="hstack justify-content-between mt-1">
                                                <span style="font-size: 12px;">KIEKIS</span>
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
                        <div class="col-lg-4">
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
                                            <div class="hstack justify-content-between mt-1">
                                                <span style="font-size: 12px;">KIEKIS</span>
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
                        <div class="col-lg-4">
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
                                            <div class="hstack justify-content-between mt-1">
                                                <span style="font-size: 12px;">KIEKIS</span>
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
                        <div class="col-lg-4">
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
                                            <div class="hstack justify-content-between mt-1">
                                                <span style="font-size: 12px;">KIEKIS</span>
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
                        <div class="col-lg-4">
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
                                            <div class="hstack justify-content-between mt-1">
                                                <span style="font-size: 12px;">KIEKIS</span>
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
                        <div class="col-lg-4">
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
                                            <div class="hstack justify-content-between mt-1">
                                                <span style="font-size: 12px;">KIEKIS</span>
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
                        <div class="col-lg-4">
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
                                            <div class="hstack justify-content-between mt-1">
                                                <span style="font-size: 12px;">KIEKIS</span>
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
                        <div class="col-lg-4">
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
                                            <div class="hstack justify-content-between mt-1">
                                                <span style="font-size: 12px;">KIEKIS</span>
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
                <div class="tab-pane fade" id="listing_container_grid_4" role="tabpanel" aria-labelledby="listing_container_grid_4">
                    <div class="row gx-3 gy-3">
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
                <div class="tab-pane fade" id="listing_container_image_list" role="tabpanel" aria-labelledby="listing_container_image_list">
                    <div class="row gx-3 gy-3">
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-4">
                                    <div class="product-header mt-20">
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
                                </div>
                                <div class="col-lg-8">
                                    <div class="product-body p-15">
                                        <figure class="mb-1">
                                            <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="sku">SKU: 1234</span>
                                            <span class="ean">EAN: 4573832729048</span>
                                        </figure>
                                        <figure class="mb-2">
                                            <span class="product-price">
                                                <div class="d-flex mt-1">
                                                    <span class="old-price">26.99 €</span>
                                                    <span class="new-price ms-3">24.99 €</span>
                                                </div>
                                            </span>
                                        </figure>
                                        <div class="hstack quantity-container mt-10">
                                            <span style="font-size: 12px;">KIEKIS</span>
                                            <button class="btn btn-quantity">-</button>
                                            <span style="display: block;">0</span>
                                            <button class="btn btn-quantity">+</button>
                                            <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                                Į KREPŠELĮ <img src="./images/cart.svg" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-4">
                                    <div class="product-header mt-20">
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
                                </div>
                                <div class="col-lg-8">
                                    <div class="product-body p-15">
                                        <figure class="mb-1">
                                            <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="sku">SKU: 1234</span>
                                            <span class="ean">EAN: 4573832729048</span>
                                        </figure>
                                        <figure class="mb-2">
                                            <span class="product-price">
                                                <div class="d-flex mt-1">
                                                    <span class="old-price">26.99 €</span>
                                                    <span class="new-price ms-3">24.99 €</span>
                                                </div>
                                            </span>
                                        </figure>
                                        <div class="hstack quantity-container mt-10">
                                            <span style="font-size: 12px;">KIEKIS</span>
                                            <button class="btn btn-quantity">-</button>
                                            <span style="display: block;">0</span>
                                            <button class="btn btn-quantity">+</button>
                                            <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                                Į KREPŠELĮ <img src="./images/cart.svg" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-4">
                                    <div class="product-header mt-20">
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
                                </div>
                                <div class="col-lg-8">
                                    <div class="product-body p-15">
                                        <figure class="mb-1">
                                            <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="sku">SKU: 1234</span>
                                            <span class="ean">EAN: 4573832729048</span>
                                        </figure>
                                        <figure class="mb-2">
                                            <span class="product-price">
                                                <div class="d-flex mt-1">
                                                    <span class="old-price">26.99 €</span>
                                                    <span class="new-price ms-3">24.99 €</span>
                                                </div>
                                            </span>
                                        </figure>
                                        <div class="hstack quantity-container mt-10">
                                            <span style="font-size: 12px;">KIEKIS</span>
                                            <button class="btn btn-quantity">-</button>
                                            <span style="display: block;">0</span>
                                            <button class="btn btn-quantity">+</button>
                                            <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                                Į KREPŠELĮ <img src="./images/cart.svg" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-4">
                                    <div class="product-header mt-20">
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
                                </div>
                                <div class="col-lg-8">
                                    <div class="product-body p-15">
                                        <figure class="mb-1">
                                            <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="sku">SKU: 1234</span>
                                            <span class="ean">EAN: 4573832729048</span>
                                        </figure>
                                        <figure class="mb-2">
                                            <span class="product-price">
                                                <div class="d-flex mt-1">
                                                    <span class="old-price">26.99 €</span>
                                                    <span class="new-price ms-3">24.99 €</span>
                                                </div>
                                            </span>
                                        </figure>
                                        <div class="hstack quantity-container mt-10">
                                            <span style="font-size: 12px;">KIEKIS</span>
                                            <button class="btn btn-quantity">-</button>
                                            <span style="display: block;">0</span>
                                            <button class="btn btn-quantity">+</button>
                                            <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                                Į KREPŠELĮ <img src="./images/cart.svg" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-4">
                                    <div class="product-header mt-20">
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
                                </div>
                                <div class="col-lg-8">
                                    <div class="product-body p-15">
                                        <figure class="mb-1">
                                            <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="sku">SKU: 1234</span>
                                            <span class="ean">EAN: 4573832729048</span>
                                        </figure>
                                        <figure class="mb-2">
                                            <span class="product-price">
                                                <div class="d-flex mt-1">
                                                    <span class="old-price">26.99 €</span>
                                                    <span class="new-price ms-3">24.99 €</span>
                                                </div>
                                            </span>
                                        </figure>
                                        <div class="hstack quantity-container mt-10">
                                            <span style="font-size: 12px;">KIEKIS</span>
                                            <button class="btn btn-quantity">-</button>
                                            <span style="display: block;">0</span>
                                            <button class="btn btn-quantity">+</button>
                                            <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                                Į KREPŠELĮ <img src="./images/cart.svg" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-4">
                                    <div class="product-header mt-20">
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
                                </div>
                                <div class="col-lg-8">
                                    <div class="product-body p-15">
                                        <figure class="mb-1">
                                            <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="sku">SKU: 1234</span>
                                            <span class="ean">EAN: 4573832729048</span>
                                        </figure>
                                        <figure class="mb-2">
                                            <span class="product-price">
                                                <div class="d-flex mt-1">
                                                    <span class="old-price">26.99 €</span>
                                                    <span class="new-price ms-3">24.99 €</span>
                                                </div>
                                            </span>
                                        </figure>
                                        <div class="hstack quantity-container mt-10">
                                            <span style="font-size: 12px;">KIEKIS</span>
                                            <button class="btn btn-quantity">-</button>
                                            <span style="display: block;">0</span>
                                            <button class="btn btn-quantity">+</button>
                                            <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                                Į KREPŠELĮ <img src="./images/cart.svg" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-4">
                                    <div class="product-header mt-20">
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
                                </div>
                                <div class="col-lg-8">
                                    <div class="product-body p-15">
                                        <figure class="mb-1">
                                            <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="sku">SKU: 1234</span>
                                            <span class="ean">EAN: 4573832729048</span>
                                        </figure>
                                        <figure class="mb-2">
                                            <span class="product-price">
                                                <div class="d-flex mt-1">
                                                    <span class="old-price">26.99 €</span>
                                                    <span class="new-price ms-3">24.99 €</span>
                                                </div>
                                            </span>
                                        </figure>
                                        <div class="hstack quantity-container mt-10">
                                            <span style="font-size: 12px;">KIEKIS</span>
                                            <button class="btn btn-quantity">-</button>
                                            <span style="display: block;">0</span>
                                            <button class="btn btn-quantity">+</button>
                                            <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                                Į KREPŠELĮ <img src="./images/cart.svg" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-4">
                                    <div class="product-header mt-20">
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
                                </div>
                                <div class="col-lg-8">
                                    <div class="product-body p-15">
                                        <figure class="mb-1">
                                            <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="sku">SKU: 1234</span>
                                            <span class="ean">EAN: 4573832729048</span>
                                        </figure>
                                        <figure class="mb-2">
                                            <span class="product-price">
                                                <div class="d-flex mt-1">
                                                    <span class="old-price">26.99 €</span>
                                                    <span class="new-price ms-3">24.99 €</span>
                                                </div>
                                            </span>
                                        </figure>
                                        <div class="hstack quantity-container mt-10">
                                            <span style="font-size: 12px;">KIEKIS</span>
                                            <button class="btn btn-quantity">-</button>
                                            <span style="display: block;">0</span>
                                            <button class="btn btn-quantity">+</button>
                                            <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                                Į KREPŠELĮ <img src="./images/cart.svg" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-4">
                                    <div class="product-header mt-20">
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
                                </div>
                                <div class="col-lg-8">
                                    <div class="product-body p-15">
                                        <figure class="mb-1">
                                            <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="sku">SKU: 1234</span>
                                            <span class="ean">EAN: 4573832729048</span>
                                        </figure>
                                        <figure class="mb-2">
                                            <span class="product-price">
                                                <div class="d-flex mt-1">
                                                    <span class="old-price">26.99 €</span>
                                                    <span class="new-price ms-3">24.99 €</span>
                                                </div>
                                            </span>
                                        </figure>
                                        <div class="hstack quantity-container mt-10">
                                            <span style="font-size: 12px;">KIEKIS</span>
                                            <button class="btn btn-quantity">-</button>
                                            <span style="display: block;">0</span>
                                            <button class="btn btn-quantity">+</button>
                                            <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                                Į KREPŠELĮ <img src="./images/cart.svg" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-4">
                                    <div class="product-header mt-20">
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
                                </div>
                                <div class="col-lg-8">
                                    <div class="product-body p-15">
                                        <figure class="mb-1">
                                            <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="sku">SKU: 1234</span>
                                            <span class="ean">EAN: 4573832729048</span>
                                        </figure>
                                        <figure class="mb-2">
                                            <span class="product-price">
                                                <div class="d-flex mt-1">
                                                    <span class="old-price">26.99 €</span>
                                                    <span class="new-price ms-3">24.99 €</span>
                                                </div>
                                            </span>
                                        </figure>
                                        <div class="hstack quantity-container mt-10">
                                            <span style="font-size: 12px;">KIEKIS</span>
                                            <button class="btn btn-quantity">-</button>
                                            <span style="display: block;">0</span>
                                            <button class="btn btn-quantity">+</button>
                                            <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                                Į KREPŠELĮ <img src="./images/cart.svg" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-4">
                                    <div class="product-header mt-20">
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
                                </div>
                                <div class="col-lg-8">
                                    <div class="product-body p-15">
                                        <figure class="mb-1">
                                            <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="sku">SKU: 1234</span>
                                            <span class="ean">EAN: 4573832729048</span>
                                        </figure>
                                        <figure class="mb-2">
                                            <span class="product-price">
                                                <div class="d-flex mt-1">
                                                    <span class="old-price">26.99 €</span>
                                                    <span class="new-price ms-3">24.99 €</span>
                                                </div>
                                            </span>
                                        </figure>
                                        <div class="hstack quantity-container mt-10">
                                            <span style="font-size: 12px;">KIEKIS</span>
                                            <button class="btn btn-quantity">-</button>
                                            <span style="display: block;">0</span>
                                            <button class="btn btn-quantity">+</button>
                                            <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                                Į KREPŠELĮ <img src="./images/cart.svg" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-4">
                                    <div class="product-header mt-20">
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
                                </div>
                                <div class="col-lg-8">
                                    <div class="product-body p-15">
                                        <figure class="mb-1">
                                            <span class="product-title">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="sku">SKU: 1234</span>
                                            <span class="ean">EAN: 4573832729048</span>
                                        </figure>
                                        <figure class="mb-2">
                                            <span class="product-price">
                                                <div class="d-flex mt-1">
                                                    <span class="old-price">26.99 €</span>
                                                    <span class="new-price ms-3">24.99 €</span>
                                                </div>
                                            </span>
                                        </figure>
                                        <div class="hstack quantity-container mt-10">
                                            <span style="font-size: 12px;">KIEKIS</span>
                                            <button class="btn btn-quantity">-</button>
                                            <span style="display: block;">0</span>
                                            <button class="btn btn-quantity">+</button>
                                            <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                                Į KREPŠELĮ <img src="./images/cart.svg" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="listing_container_list" role="tabpanel" aria-labelledby="listing_container_list">
                    <div class="row gx-3 gy-3">
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-1">
                                    <img src="./images/product_image.svg" class="list-item-image" />
                                </div>
                                <div class="col">
                                    <div class="product-body">
                                        <figure class="mb-1">
                                            <span class="product-title pl-0">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between">
                                    <div class="hstack">
                                        <span class="product-price">24.99 €</span>
                                    </div>
                                    <div class="hstack quantity-container">
                                        <button class="btn btn-quantity">-</button>
                                        <span style="display: block;">0</span>
                                        <button class="btn btn-quantity">+</button>
                                    </div>
                                    <div class="hstack">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                    <div class="hstack">
                                        <div class="favourite-button">
                                            <img src="images/favourite_active.svg" class="active" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-1">
                                    <img src="./images/product_image.svg" class="list-item-image" />
                                </div>
                                <div class="col">
                                    <div class="product-body">
                                        <figure class="mb-1">
                                            <span class="product-title pl-0">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between">
                                    <div class="hstack">
                                        <span class="product-price">24.99 €</span>
                                    </div>
                                    <div class="hstack quantity-container">
                                        <button class="btn btn-quantity">-</button>
                                        <span style="display: block;">0</span>
                                        <button class="btn btn-quantity">+</button>
                                    </div>
                                    <div class="hstack">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                    <div class="hstack">
                                        <div class="favourite-button inactive">
                                            <img src="images/favourite_active.svg" class="active" />
                                            <img src="images/favourite_not_active.svg" class="not-active"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-1">
                                    <img src="./images/product_image.svg" class="list-item-image" />
                                </div>
                                <div class="col">
                                    <div class="product-body">
                                        <figure class="mb-1">
                                            <span class="product-title pl-0">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between">
                                    <div class="hstack">
                                        <span class="product-price">24.99 €</span>
                                    </div>
                                    <div class="hstack quantity-container">
                                        <button class="btn btn-quantity">-</button>
                                        <span style="display: block;">0</span>
                                        <button class="btn btn-quantity">+</button>
                                    </div>
                                    <div class="hstack">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                    <div class="hstack">
                                        <div class="favourite-button inactive">
                                            <img src="images/favourite_active.svg" class="active" />
                                            <img src="images/favourite_not_active.svg" class="not-active"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-1">
                                    <img src="./images/product_image.svg" class="list-item-image" />
                                </div>
                                <div class="col">
                                    <div class="product-body">
                                        <figure class="mb-1">
                                            <span class="product-title pl-0">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between">
                                    <div class="hstack">
                                        <span class="product-price">24.99 €</span>
                                    </div>
                                    <div class="hstack quantity-container">
                                        <button class="btn btn-quantity">-</button>
                                        <span style="display: block;">0</span>
                                        <button class="btn btn-quantity">+</button>
                                    </div>
                                    <div class="hstack">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                    <div class="hstack">
                                        <div class="favourite-button inactive">
                                            <img src="images/favourite_active.svg" class="active" />
                                            <img src="images/favourite_not_active.svg" class="not-active"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-1">
                                    <img src="./images/product_image.svg" class="list-item-image" />
                                </div>
                                <div class="col">
                                    <div class="product-body">
                                        <figure class="mb-1">
                                            <span class="product-title pl-0">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between">
                                    <div class="hstack">
                                        <span class="product-price">24.99 €</span>
                                    </div>
                                    <div class="hstack quantity-container">
                                        <button class="btn btn-quantity">-</button>
                                        <span style="display: block;">0</span>
                                        <button class="btn btn-quantity">+</button>
                                    </div>
                                    <div class="hstack">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                    <div class="hstack">
                                        <div class="favourite-button inactive">
                                            <img src="images/favourite_active.svg" class="active" />
                                            <img src="images/favourite_not_active.svg" class="not-active"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-1">
                                    <img src="./images/product_image.svg" class="list-item-image" />
                                </div>
                                <div class="col">
                                    <div class="product-body">
                                        <figure class="mb-1">
                                            <span class="product-title pl-0">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between">
                                    <div class="hstack">
                                        <span class="product-price">24.99 €</span>
                                    </div>
                                    <div class="hstack quantity-container">
                                        <button class="btn btn-quantity">-</button>
                                        <span style="display: block;">0</span>
                                        <button class="btn btn-quantity">+</button>
                                    </div>
                                    <div class="hstack">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                    <div class="hstack">
                                        <div class="favourite-button inactive">
                                            <img src="images/favourite_active.svg" class="active" />
                                            <img src="images/favourite_not_active.svg" class="not-active"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-1">
                                    <img src="./images/product_image.svg" class="list-item-image" />
                                </div>
                                <div class="col">
                                    <div class="product-body">
                                        <figure class="mb-1">
                                            <span class="product-title pl-0">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between">
                                    <div class="hstack">
                                        <span class="product-price">24.99 €</span>
                                    </div>
                                    <div class="hstack quantity-container">
                                        <button class="btn btn-quantity">-</button>
                                        <span style="display: block;">0</span>
                                        <button class="btn btn-quantity">+</button>
                                    </div>
                                    <div class="hstack">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                    <div class="hstack">
                                        <div class="favourite-button inactive">
                                            <img src="images/favourite_active.svg" class="active" />
                                            <img src="images/favourite_not_active.svg" class="not-active"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-1">
                                    <img src="./images/product_image.svg" class="list-item-image" />
                                </div>
                                <div class="col">
                                    <div class="product-body">
                                        <figure class="mb-1">
                                            <span class="product-title pl-0">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between">
                                    <div class="hstack">
                                        <span class="product-price">24.99 €</span>
                                    </div>
                                    <div class="hstack quantity-container">
                                        <button class="btn btn-quantity">-</button>
                                        <span style="display: block;">0</span>
                                        <button class="btn btn-quantity">+</button>
                                    </div>
                                    <div class="hstack">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                    <div class="hstack">
                                        <div class="favourite-button inactive">
                                            <img src="images/favourite_active.svg" class="active" />
                                            <img src="images/favourite_not_active.svg" class="not-active"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-1">
                                    <img src="./images/product_image.svg" class="list-item-image" />
                                </div>
                                <div class="col">
                                    <div class="product-body">
                                        <figure class="mb-1">
                                            <span class="product-title pl-0">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between">
                                    <div class="hstack">
                                        <span class="product-price">24.99 €</span>
                                    </div>
                                    <div class="hstack quantity-container">
                                        <button class="btn btn-quantity">-</button>
                                        <span style="display: block;">0</span>
                                        <button class="btn btn-quantity">+</button>
                                    </div>
                                    <div class="hstack">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                    <div class="hstack">
                                        <div class="favourite-button inactive">
                                            <img src="images/favourite_active.svg" class="active" />
                                            <img src="images/favourite_not_active.svg" class="not-active"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-15 pr-15">
                            <div class="row gx-3 product-card">
                                <div class="col-lg-1">
                                    <img src="./images/product_image.svg" class="list-item-image" />
                                </div>
                                <div class="col">
                                    <div class="product-body">
                                        <figure class="mb-1">
                                            <span class="product-title pl-0">Belaidė kolonėlė Mi Compact Bluetooth Speaker 2</span>
                                        </figure>
                                        <figure class="mb-1">
                                            <span class="product-stock-info">&bull; Likutis: >10</span>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between">
                                    <div class="hstack">
                                        <span class="product-price">24.99 €</span>
                                    </div>
                                    <div class="hstack quantity-container">
                                        <button class="btn btn-quantity">-</button>
                                        <span style="display: block;">0</span>
                                        <button class="btn btn-quantity">+</button>
                                    </div>
                                    <div class="hstack">
                                        <button class="btn btn-sm btn-primary btn-add-to-cart inactive">
                                            <img src="./images/cart.svg" />
                                        </button>
                                    </div>
                                    <div class="hstack">
                                        <div class="favourite-button inactive">
                                            <img src="images/favourite_active.svg" class="active" />
                                            <img src="images/favourite_not_active.svg" class="not-active"/>
                                        </div>
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
            <div class="clearfix"></div>
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
<script type="text/javascript" src="./js/scripts.js"></script>
</body>

</html>