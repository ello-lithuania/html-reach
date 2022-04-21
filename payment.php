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
                <button class="col nav-link active" id="cart_info_tab" data-bs-toggle="pill" data-bs-target="#cart_info_content" type="button" role="tab" aria-controls="cart_info_content" aria-selected="true">Prekių krepšelis</button>
                <button class="col nav-link" id="login_tab" data-bs-toggle="pill" data-bs-target="#login_content" type="button" role="tab" aria-controls="login_content" aria-selected="false">Prisijungimas</button>
                <button class="col nav-link" id="delivery_tab" data-bs-toggle="pill" data-bs-target="#delivery_content" type="button" role="tab" aria-controls="delivery_content" aria-selected="false">Pristatymas</button>
                <button class="col nav-link" id="payment_tab" data-bs-toggle="pill" data-bs-target="#payment_content" type="button" role="tab" aria-controls="payment_content" aria-selected="false">Apmokėjimas</button>
                <button class="col nav-link" id="review_tab" data-bs-toggle="pill" data-bs-target="#review_content" type="button" role="tab" aria-controls="review_content" aria-selected="false">Peržiūra</button>
            </div>
        </nav>
    </div>
    <div class="d-flex payment-list">
        <div class="tab-content" style="width: 100%;">
            <div class="tab-pane mb-100 fade show active" id="cart_info_content" role="tabpanel" aria-labelledby="cart_info_tab">
                <div class="row mt-60 p-15 mt-sm-0">
                    <div class="col-lg-9">
                        <div class="d-flex pl-15 pr-15 hidden-sm">
                            <div class="col-lg-2 text-center header-title">PREKĖ</div>
                            <div class="col-lg-3 text-center"></div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-3 text-center header-title">VIENETO KAINA</div>
                                    <div class="col-lg-3 text-center header-title">KIEKIS</div>
                                    <div class="col-lg-3 text-center header-title">LIKUTIS</div>
                                    <div class="col-lg-3 text-center header-title">SUMA</div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="d-md-hidden">

                            <div class="d-flex align-items-center product-card mt-10">
                                <div class="col-lg-2 text-center">
                                    <img src="./images/product_1_image.svg"/>
                                </div>
                                <div class="col-lg-3">
                                    <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
                                    <span class="item-limit hidden-md">Likutis: >10</span>
                                </div>
                                        <div class="col-lg-2 text-center product-price-single">
                                            <div class="vstack">
                                                <span class="product-new-price">24,99 €</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 text-center amount-vertical">
                                            <div class="d-flex justify-content-between mt-10">
                                                <button class="btn btn-quantity">+</button>
                                                <span style="display: block;">0</span>
                                                <button class="btn btn-quantity">-</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 text-center full-price">
                                            <span class="d-block product-price mt-10">24,99 €</span>
                                        </div>
                                <div class="col-lg-2 text-center btn-delete-cart">
                                    <button><img src="./images/trashcan-icon.svg"/></button>
                                </div>
                            </div>

                            <div class="d-flex align-items-center product-card mt-10">
                                <div class="col-lg-2 text-center">
                                    <img src="./images/product_1_image.svg"/>
                                </div>
                                <div class="col-lg-3">
                                    <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
                                    <span class="item-limit hidden-md">Likutis: >10</span>
                                </div>
                                        <div class="col-lg-2 text-center product-price-single">
                                            <div class="vstack">
                                                <span class="product-new-price">24,99 €</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 text-center amount-vertical">
                                            <div class="d-flex justify-content-between mt-10">
                                                <button class="btn btn-quantity">+</button>
                                                <span style="display: block;">0</span>
                                                <button class="btn btn-quantity">-</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 text-center full-price">
                                            <span class="d-block product-price mt-10">24,99 €</span>
                                        </div>
                                <div class="col-lg-2 text-center btn-delete-cart">
                                    <button><img src="./images/trashcan-icon.svg"/></button>
                                </div>
                            </div>

                            <div class="d-flex align-items-center product-card mt-10">
                                <div class="col-lg-2 text-center">
                                    <img src="./images/product_1_image.svg"/>
                                </div>
                                <div class="col-lg-3">
                                    <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
                                    <span class="item-limit hidden-md">Likutis: >10</span>
                                </div>
                                        <div class="col-lg-2 text-center product-price-single">
                                            <div class="vstack">
                                                <span class="product-new-price">24,99 €</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 text-center amount-vertical">
                                            <div class="d-flex justify-content-between mt-10">
                                                <button class="btn btn-quantity">+</button>
                                                <span style="display: block;">0</span>
                                                <button class="btn btn-quantity">-</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 text-center full-price">
                                            <span class="d-block product-price mt-10">24,99 €</span>
                                        </div>
                                <div class="col-lg-2 text-center btn-delete-cart">
                                    <button><img src="./images/trashcan-icon.svg"/></button>
                                </div>
                            </div>

                            <div class="d-flex align-items-center product-card mt-10">
                                <div class="col-lg-2 text-center">
                                    <img src="./images/product_1_image.svg"/>
                                </div>
                                <div class="col-lg-3">
                                    <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
                                    <span class="item-limit hidden-md">Likutis: >10</span>
                                </div>
                                        <div class="col-lg-2 text-center product-price-single">
                                            <div class="vstack">
                                                <span class="product-new-price">24,99 €</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 text-center amount-vertical">
                                            <div class="d-flex justify-content-between mt-10">
                                                <button class="btn btn-quantity">+</button>
                                                <span style="display: block;">0</span>
                                                <button class="btn btn-quantity">-</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 text-center full-price">
                                            <span class="d-block product-price mt-10">24,99 €</span>
                                        </div>
                                <div class="col-lg-2 text-center btn-delete-cart">
                                    <button><img src="./images/trashcan-icon.svg"/></button>
                                </div>
                            </div>

                        </div>
                        <div class="d-sm-hidden">
                            <div class="d-flex align-items-center product-card mt-10">
                                <div class="col-lg-2 text-center">
                                    <img src="./images/product_1_image.svg"/>
                                </div>
                                <div class="col-lg-3">
                                    <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
                                    <span class="item-limit hidden-md">Likutis: >10</span>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-3 text-center">
                                            <div class="vstack">
                                                <span class="product-old-price">26,99 €</span>
                                                <span class="product-new-price">24,99 €</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <div class="d-flex justify-content-between mt-10">
                                                <button class="btn btn-quantity">-</button>
                                                <span style="display: block;">0</span>
                                                <button class="btn btn-quantity">+</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block mt-10">8 vnt.</span>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block product-price mt-10">24,99 €</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 text-center btn-delete-cart">
                                    <button><img class="hidden-md" src="./images/trashcan-icon.svg"/><img class="hidden-sm" src="./images/bin.svg" style="margin-top: -5px;"/></button>
                                </div>
                            </div>

                            <div class="d-flex align-items-center product-card mt-10">
                                <div class="col-lg-2 text-center">
                                    <img src="./images/product_1_image.svg"/>
                                </div>
                                <div class="col-lg-3">
                                    <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-3 text-center">
                                            <div class="vstack">
                                                <span class="product-old-price">26,99 €</span>
                                                <span class="product-new-price">24,99 €</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <div class="d-flex justify-content-between mt-10">
                                                <button class="btn btn-quantity">-</button>
                                                <span style="display: block;">0</span>
                                                <button class="btn btn-quantity">+</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block mt-10">8 vnt.</span>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block product-price mt-10">24,99 €</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 text-center btn-delete-cart">
                                    <button><img src="./images/bin.svg" style="margin-top: -5px;"/></button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center product-card mt-10">
                                <div class="col-lg-2 text-center">
                                    <img src="./images/product_1_image.svg"/>
                                </div>
                                <div class="col-lg-3">
                                    <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-3 text-center">
                                            <div class="vstack">
                                                <span class="product-old-price">26,99 €</span>
                                                <span class="product-new-price">24,99 €</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <div class="d-flex justify-content-between mt-10">
                                                <button class="btn btn-quantity">-</button>
                                                <span style="display: block;">0</span>
                                                <button class="btn btn-quantity">+</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block mt-10">8 vnt.</span>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block product-price mt-10">24,99 €</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 text-center btn-delete-cart">
                                    <button><img src="./images/bin.svg" style="margin-top: -5px;"/></button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center product-card mt-10">
                                <div class="col-lg-2 text-center">
                                    <img src="./images/product_1_image.svg"/>
                                </div>
                                <div class="col-lg-3">
                                    <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block product-price mt-10">24,99 €</span>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <div class="d-flex justify-content-between mt-10">
                                                <button class="btn btn-quantity">-</button>
                                                <span style="display: block;">0</span>
                                                <button class="btn btn-quantity">+</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block mt-10">8 vnt.</span>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block product-price mt-10">24,99 €</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 text-center btn-delete-cart">
                                    <button><img class="hidden-md" src="./images/trashcan-icon.svg" style="margin-top: -5px;"/><img class="hidden-sm" src="./images/bin.svg" style="margin-top: -5px;"/></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 bottom-container" style="padding-top: 30px;">
                        <div class="card p-20" style="height: 100%; border: none; background-color: rgba(167, 167, 167, 0.1);">
                            <span class="card-main-title">Suvestinė</span>
                            <div class="divider-div" style="width: 100%; height: 1px; background-color: #A7A7A7; margin-top: 20px; margin-bottom: 20px;"></div>
                            <div class="d-flex justify-content-between mb-20">
                                <span class="fs-14" style="color: #A7A7A7;">Viso prekių:</span>
                                <span class="fs-14 text-bolded" style="color: #A7A7A7;">35 vnt.</span>
                            </div>
                            <div class="d-flex justify-content-between mb-20">
                                <span class="fs-14" style="color: #A7A7A7;">Viso nuolaidų:</span>
                                <span class="fs-14" style="color: #EEB63F;">124,84 €</span>
                            </div>
                            <div class="d-flex justify-content-between mb-20">
                                <span class="fs-14" style="color: #A7A7A7;">Suma be PVM:</span>
                                <span class="fs-14 text-bolded">846,69 €</span>
                            </div>
                            <div class="d-flex justify-content-between mb-20">
                                <span class="fs-14" style="color: #A7A7A7;">PVM suma:</span>
                                <span class="fs-14 text-bolded">177,87 €</span>
                            </div>
                            <div class="mt-auto">
                                <div class="d-flex justify-content-between mb-20">
                                    <span class="fs-14">Prekių kaina:</span>
                                    <span class="fs-14 price-payment-mobile" style="color: #6E0EC0;"><b>1024,84 €</b></span>
                                </div>
                                <button class="btn btn-next">Pirkti</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="login_content" role="tabpanel" aria-labelledby="login_tab">
                <div class="row p-15">
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-center" id="login_container">
                            <div class="col-lg-6 col-12 mt-100">
                                <h5>Neturiu paskyros</h5>
                                <button class="btn btn-next mt-60 fs-14" style="border-radius: 8px; text-transform: uppercase; padding: 8px 10px;" onclick="enableRegistration();">Registruotis</button>
                                <button class="btn btn-reach mt-20 fs-14" style="border-radius: 8px; text-transform: uppercase; width: 100%; padding: 8px 10px;">Pirkti be registracijos</button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center d-none" id="registration_container">
                            <div class="col-lg-6 mt-100">
                                <h5>Registracija</h5>
                                <div class="d-flex justify-content-between mt-60">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="registrationType" id="registrationTypePerson" value="person" onchange="toggleRegistrationType();" checked>
                                        <label class="form-check-label" for="registrationTypePerson">Fizinis asmuo</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="registrationType" id="registrationTypeCompany" value="company" onchange="toggleRegistrationType();">
                                        <label class="form-check-label" for="registrationTypeCompany">Juridinis asmuo</label>
                                    </div>
                                </div>
                                <input type="text" class="form-control disable-focus mt-30 default-reach-input" placeholder="Vardas"/>
                                <input type="text" class="form-control disable-focus mt-15 default-reach-input" placeholder="Pavardė"/>
                                <input type="text" class="form-control disable-focus mt-15 default-reach-input" placeholder="Telefonas"/>
                                <input type="text" class="form-control disable-focus mt-15 default-reach-input" placeholder="El. paštas"/>
                                <div class="d-none" id="company_registration_info">
                                    <input type="text" class="form-control disable-focus mt-15 default-reach-input" placeholder="Įmonės pavadinimas"/>
                                    <input type="text" class="form-control disable-focus mt-15 default-reach-input" placeholder="Įmonės adresas"/>
                                    <input type="text" class="form-control disable-focus mt-15 default-reach-input" placeholder="Įmonės kodas"/>
                                    <input type="text" class="form-control disable-focus mt-15 default-reach-input" placeholder="Įmonės PVM kodas"/>
                                </div>
                                <div class="form-check mt-30">
                                    <input class="form-check-input" type="radio" name="newsletter" id="newsletterCheckbox" value="newsletter" checked>
                                    <label class="form-check-label fs-12" style="color: #6E0EC0;" for="newsletterCheckbox">Gauti naujienlaiškį</label>
                                </div>
                                <span class="d-block fs-12 mt-10" style="color: #A7A7A7;">Sutikus gauti naujienlaiškį sutinkante gauti naujienas apie prekes ir Jums skirtas pasiūlymus</span>
                                <div class="d-flex justify-content-between mt-30 mb-100 flex-column-mobile">
                                    <div class="col-lg-7 col-12">
                                        <button class="btn btn-next fs-14" style="border-radius: 8px; text-transform: uppercase; padding: 8px 10px;">Tęsti</button>
                                    </div>
                                    <div class="col-lg-5 col-12 text-end align-items-center">
                                        <a href="#" class="d-block simple-link fs-14" style="font-weight: bold; color: #000000; margin-top: 8px; text-transform: uppercase;" onclick="enableLogin();">Atgal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-center" style="border-radius: 10px; background-color: rgba(167, 167, 167, 0.1);">
                            <div class="col-lg-6 col-12 mt-100 login-form" id="login-disable-mobile" style="margin-bottom: 400px;">
                                <h5>Esu registruotas</h5>
                                <div class="input-group flex-nowrap mt-60">
                                    <span class="input-group-text" id="username-wrapping"><img src="./images/username.svg"/></span>
                                    <input type="text" class="form-control disable-focus" placeholder="Username" aria-label="Username" aria-describedby="username-wrapping">
                                </div>
                                <div class="input-group flex-nowrap mt-20">
                                    <span class="input-group-text" id="password-wrapping"><img src="./images/lock.svg" style="margin-left: 3px;"/></span>
                                    <input type="password" class="form-control disable-focus" placeholder="&bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull;" aria-label="Password" aria-describedby="password-wrapping" style="border-right: none;">
                                    <button class="input-group-text"><img src="./images/eye.svg" style="height: 16px;"/></button>
                                </div>
                                <a href="#" class="simple-link fs-12 float-right mt-10">Pamiršote slaptažodį?</a>
                                <button class="btn btn-next mt-40 fs-14" style="border-radius: 8px; text-transform: uppercase; padding: 8px 10px;">Prisijungti</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="delivery_content" role="tabpanel" aria-labelledby="delivery_tab">
                <div class="row gx-5 mb-100 mt-60">
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center delivery-checked" style="border-radius: 10px; border: 1px solid #6E0EC0; padding: 20px 20px 20px 0;">
                            <label class="col form-check-label d-flex align-items-center" for="flexRadioDefault1">
                                <div class="vstack text-center pl-15">
                                    <img src="./images/venipak.svg" style="height: 60px;"/><br/>
                                    <span class="fs-14" style="color: #A7A7A7;">VENIPAK paštomatas</span>
                                </div>
                                <span class="main-price" style="display: block; margin-right: 15px; margin-top: 4px;">1,60 €</span>
                            </label>
                            <input class="form-check-input" style="float: right;" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            
                            <div class="mobile-details">
                                <hr/>
                                <b>Atsiėmimo punktas:</b>
                                <p>
                                Reach salonas<br/>
                                Savanorių pr. 176 Vilnius, LT-03154<br/>
                                -V 9:00 - 18:00<br/>
                                VI-VII nedirbame<br/>
                                </p>
                                <b>Pirkėjas:</b>
                                <p>
                                Fizinis asmuo Miroslav Stankevič<br/>
                                + 3706000000000<br/>
                                </p>
                                <p class="small-detailsText">Norėdami pakeisti sąskaitos faktūros duomenis pakeiskite pirkėją</p>
                                <button class="changeName">Keisti pirkėją</button>
                                <br/>
                                <b>Užsakymą atsiims:</b>
                                <br/>
                                <div class="form-check first-radioBtn">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    <b>Miroslav Stankevič</b>
                                </label>
                                </div>

                                <div class="form-check second-radioBtn mb-sm-1 secondRadioBtn">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexCheckDefault">
                                    kitas asmuo
                                </label>
                                </div>

                                <div class="form-checked-other-person">
                                    <div class="row">
                                        <div class="col-6">
                                            <input class="form-control" placeholder="Vardas"/>
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" placeholder="Vardas"/>
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control" rows="6">Pastaba</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-next fs-14" style="border-radius: 8px; text-transform: uppercase; padding: 8px 10px;" type="submit">Tęsti</button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-20" style="border-radius: 10px; border: 1px solid #A7A7A7; padding: 20px 20px 20px 0;">
                            <label class="col form-check-label d-flex align-items-center" for="flexRadioDefault2">
                                <div class="vstack text-center pl-15">
                                    <img src="./images/omniva.png" style="max-width: 200px; max-height: 60px; margin-left: 40px;"/><br/>
                                    <span class="fs-14" style="color: #A7A7A7;">OMNIVA paštomatas</span>
                                </div>
                                <span class="main-price" style="display: block; margin-right: 15px; margin-top: 4px;">1,60 €</span>
                            </label>
                            <input class="form-check-input" style="float: right;" type="radio" name="flexRadioDefault" id="flexRadioDefault2">

                            <div class="mobile-details">
                                <hr/>
                                <b>Atsiėmimo punktas:</b>
                                <p>
                                Reach salonas<br/>
                                Savanorių pr. 176 Vilnius, LT-03154<br/>
                                -V 9:00 - 18:00<br/>
                                VI-VII nedirbame<br/>
                                </p>
                                <b>Pirkėjas:</b>
                                <p>
                                Fizinis asmuo Miroslav Stankevič<br/>
                                + 3706000000000<br/>
                                </p>
                                <p class="small-detailsText">Norėdami pakeisti sąskaitos faktūros duomenis pakeiskite pirkėją</p>
                                <button class="changeName">Keisti pirkėją</button>
                                <br/>
                                <b>Užsakymą atsiims:</b>
                                <br/>
                                <div class="form-check first-radioBtn">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    <b>Miroslav Stankevič</b>
                                </label>
                                </div>

                                <div class="form-check second-radioBtn mb-sm-1 secondRadioBtn">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexCheckDefault">
                                    kitas asmuo
                                </label>
                                </div>

                                <div class="form-checked-other-person">
                                    <div class="row">
                                        <div class="col-6">
                                            <input class="form-control" placeholder="Vardas"/>
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" placeholder="Vardas"/>
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control">Pastaba</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-next fs-14" style="border-radius: 8px; text-transform: uppercase; padding: 8px 10px;" type="submit">Tęsti</button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-20" style="border-radius: 10px; border: 1px solid #A7A7A7; padding: 20px 20px 20px 0;">
                            <label class="col form-check-label d-flex align-items-center" for="flexRadioDefault3">
                                <div class="vstack text-center pl-15">
                                    <img src="./images/lp_express.svg" style="max-width: 200px; max-height: 60px; margin-left: 40px;"/><br/>
                                    <span class="fs-14" style="color: #A7A7A7;">LP EXPRESS paštomatas</span>
                                </div>
                                <span class="main-price" style="display: block; margin-right: 15px; margin-top: 4px;">1,99 €</span>
                            </label>
                            <input class="form-check-input" style="float: right;" type="radio" name="flexRadioDefault" id="flexRadioDefault3">

                            <div class="mobile-details">
                                <hr/>
                                <b>Atsiėmimo punktas:</b>
                                <p>
                                Reach salonas<br/>
                                Savanorių pr. 176 Vilnius, LT-03154<br/>
                                -V 9:00 - 18:00<br/>
                                VI-VII nedirbame<br/>
                                </p>
                                <b>Pirkėjas:</b>
                                <p>
                                Fizinis asmuo Miroslav Stankevič<br/>
                                + 3706000000000<br/>
                                </p>
                                <p class="small-detailsText">Norėdami pakeisti sąskaitos faktūros duomenis pakeiskite pirkėją</p>
                                <button class="changeName">Keisti pirkėją</button>
                                <br/>
                                <b>Užsakymą atsiims:</b>
                                <br/>
                                <div class="form-check first-radioBtn">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    <b>Miroslav Stankevič</b>
                                </label>
                                </div>

                                <div class="form-check second-radioBtn mb-sm-1 secondRadioBtn">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexCheckDefault">
                                    kitas asmuo
                                </label>
                                </div>

                                <div class="form-checked-other-person">
                                    <div class="row">
                                        <div class="col-6">
                                            <input class="form-control" placeholder="Vardas"/>
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" placeholder="Vardas"/>
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control">Pastaba</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-next fs-14" style="border-radius: 8px; text-transform: uppercase; padding: 8px 10px;" type="submit">Tęsti</button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-20" style="border-radius: 10px; border: 1px solid #A7A7A7; padding: 20px 20px 20px 0;">
                            <label class="col form-check-label d-flex align-items-center" for="flexRadioDefault4">
                                <div class="vstack text-center pl-15">
                                    <img src="./images/dpd.png" style="height: auto; width: 134px; margin-left: 65px;"/><br/>
                                    <span class="fs-14" style="color: #A7A7A7;">Pristatymas į Estija</span>
                                </div>
                                <span class="main-price" style="display: block; margin-right: 15px; margin-top: 4px;">4,99 €</span>
                            </label>
                            <input class="form-check-input" style="float: right;" type="radio" name="flexRadioDefault" id="flexRadioDefault4">

                            <div class="mobile-details">
                                <hr/>
                                <b>Atsiėmimo punktas:</b>
                                <p>
                                Reach salonas<br/>
                                Savanorių pr. 176 Vilnius, LT-03154<br/>
                                -V 9:00 - 18:00<br/>
                                VI-VII nedirbame<br/>
                                </p>
                                <b>Pirkėjas:</b>
                                <p>
                                Fizinis asmuo Miroslav Stankevič<br/>
                                + 3706000000000<br/>
                                </p>
                                <p class="small-detailsText">Norėdami pakeisti sąskaitos faktūros duomenis pakeiskite pirkėją</p>
                                <button class="changeName">Keisti pirkėją</button>
                                <br/>
                                <b>Užsakymą atsiims:</b>
                                <br/>
                                <div class="form-check first-radioBtn">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Miroslav Stankevič
                                </label>
                                </div>

                                <div class="form-check second-radioBtn mb-sm-1">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexCheckDefault">
                                    kitas asmuo
                                </label>
                                </div>

                                <div class="form-checked-other-person">
                                    <div class="row">
                                        <div class="col-6">
                                            <input class="form-control" placeholder="Vardas"/>
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" placeholder="Vardas"/>
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control">Pastaba</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-next fs-14" style="border-radius: 8px; text-transform: uppercase; padding: 8px 10px;" type="submit">Tęsti</button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-20" style="border-radius: 10px; border: 1px solid #A7A7A7; padding: 20px 20px 20px 0;">
                            <label class="col form-check-label d-flex align-items-center" for="flexRadioDefault5">
                                <div class="vstack text-center pl-15">
                                    <img src="./images/reach.svg" style="max-width: 170px; max-height: 60px; margin-left: 50px;"/><br/>
                                    <span class="fs-14" style="color: #A7A7A7;">Atsiėmimas vietoje</span>
                                </div>
                                <span class="main-price" style="display: block; margin-right: 15px; margin-top: 4px;">0,00 €</span>
                            </label>
                            <input class="form-check-input" style="float: right;" type="radio" name="flexRadioDefault" id="flexRadioDefault5">

                            <div class="mobile-details">
                                <hr/>
                                <b>Atsiėmimo punktas:</b>
                                <p>
                                Reach salonas<br/>
                                Savanorių pr. 176 Vilnius, LT-03154<br/>
                                -V 9:00 - 18:00<br/>
                                VI-VII nedirbame<br/>
                                </p>
                                <b>Pirkėjas:</b>
                                <p>
                                Fizinis asmuo Miroslav Stankevič<br/>
                                + 3706000000000<br/>
                                </p>
                                <p class="small-detailsText">Norėdami pakeisti sąskaitos faktūros duomenis pakeiskite pirkėją</p>
                                <button class="changeName">Keisti pirkėją</button>
                                <br/>
                                <b>Užsakymą atsiims:</b>
                                <br/>
                                <div class="form-check first-radioBtn">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Miroslav Stankevič
                                </label>
                                </div>

                                <div class="form-check second-radioBtn mb-sm-1">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexCheckDefault">
                                    kitas asmuo
                                </label>
                                </div>

                                <div class="form-checked-other-person">
                                    <div class="row">
                                        <div class="col-6">
                                            <input class="form-control" placeholder="Vardas"/>
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" placeholder="Vardas"/>
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control">Pastaba</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-next fs-14" style="border-radius: 8px; text-transform: uppercase; padding: 8px 10px;" type="submit">Tęsti</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <span style="font-size: 20px;">Pristatymas į namus per kurjerių tarnybą</span>
                        <div style="width: 100%; height: 1px; background-color: #A7A7A7; margin-top: 15px;"></div>
                        <div class="row gx-3">
                            <div class="col-lg-6">
                                <span class="d-block mt-30 fs-16"><b>Prekių pristatymo laikas:</b></span>
                                <span class="fs-14">I-V 8:00 - 18:00</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="d-block mt-30 fs-16"><b>Atsiėmimo punktas:</b></span>
                                <span class="fs-14">Reach salonas</span><br/>
                                <span class="fs-14">Savanorių pr. 176 Vilnius,</span><br/>
                                <span class="fs-14">LT-03154</span><br/>
                            </div>
                        </div>
                        <div class="row gx-4 mt-20">
                            <div class="col-lg-6">
                                <span class="d-block fs-16"><b>Informacija apie pirkėją:</b></span>
                                <span class="fs-12" style="color: #A7A7A7;">Norėdami pakeisti sąskaitos faktūros duomenis pakeiskite pirkėją </span>
                                <span class="d-block mt-30 fs-16"><b>Fizinis asmuo Miroslav Sinkevic</b></span>
                                <span class="d-block mt-10 fs-16">+370000000000</span>
                                <button class="btn btn-reach mt-20" style="text-transform: uppercase; padding: 10px 30px; font-weight: bold; background: #D8D8D8;">Keisti pirkėją</button>
                                <span class="d-block mt-60 fs-16"><b>Užsakymą atsiims:</b></span>
                                <div class="form-check mt-10 fs-14">
                                    <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser1" checked>
                                    <label class="form-check-label" for="pickupUser1">
                                        Aš Miroslav Sinkevic
                                    </label>
                                </div>
                                <div class="form-check mt-10 fs-14">
                                    <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                    <label class="form-check-label" for="pickupUser2">
                                        kitas asmuo
                                    </label>
                                </div>
                                <div class="row gx-4 mt-10">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control disable-focus" placeholder="Vardas" style="border-radius: 10px; border-color: #A7A7A7; background-color: #F9F9F9;"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control disable-focus" placeholder="Pavardė" style="border-radius: 10px; border-color: #A7A7A7; background-color: #F9F9F9;"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <span class="fs-14">I-V 9:00 - 18:00</span><br/>
                                <span class="fs-14">IV-IIV nedirbame</span>
                                <span class="d-block fs-16 mt-20 mb-15"><b>Pristatymo kaina:</b></span>
                                <span style="border-radius: 10px; font-size: 18px; font-weight: bold; padding: 8px 20px; color: #6E0EC0; border: 1px solid #A7A7A7;">1,60 €</span>
                                <span class="d-block fs-14 mt-30">Pastabos</span>
                                <textarea class="mt-10" style="width: 100%; border-radius: 10px; border-color: #A7A7A7; background-color: #F9F9F9;" rows="8"></textarea>
                                <button class="btn btn-next mt-40 fs-14" style="border-radius: 8px; text-transform: uppercase; padding: 8px 10px;">Tęsti</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="payment_content" role="tabpanel" aria-labelledby="payment_tab">
                <div class="d-flex justify-content-center mt-100">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center default-card active mt-20">
                            <label class="col form-check-label d-flex align-items-center" for="paymentType1">
                                <div class="row">
                                    <div class="col-lg-3 text-center">
                                        <img src="./images/bank_payment.png" style="width: 60px;"/>
                                    </div>
                                    <div class="col">
                                        <div class="vstack" style="margin-top: 12px;">
                                            <span class="d-block fs-16"><b>Elektroninė bankininkystė</b></span>
                                            <span class="d-block fs-14 text-inactive">
                                                Pasirinkę šį mokėjimo būdą turėsite apmokėti už prekes mūsų salone atsiimant prekes.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            <input class="form-check-input payment-main-check" style="float: right;" type="radio" name="paymentType" id="paymentType1" checked>
                            <div class="paymentMobileDetails">
                                <hr/>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                            <img src="./images/swedbank.svg"/>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                            <img src="./images/seb.svg"/>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                            <img src="./images/luminor.svg"/>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                            <img src="./images/citadele.svg"/>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                            <img src="./images/siauliu.svg"/>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check mt-10 fs-14">
                                        <input class="form-check-input" type="radio" name="pickupUser" id="pickupUser2">
                                        <label class="form-check-label" for="pickupUser2">
                                            <img src="./images/paysera.svg"/>
                                        </label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-next fs-14" style="border-radius: 8px; text-transform: uppercase; padding: 8px 10px;" type="submit">Tęsti</button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center default-card mt-20">
                            <label class="col form-check-label d-flex align-items-center" for="paymentType2">
                                <div class="row">
                                    <div class="col-lg-3 text-center">
                                        <img src="./images/pay_after_pickup.svg"/>
                                    </div>
                                    <div class="col">
                                        <div class="vstack" style="margin-top: 5px;">
                                            <span class="d-block fs-16"><b>Mokėti atsiimant kurjeriui</b></span>
                                            <span class="d-block fs-14 text-inactive">
                                                Pasirinkę šį mokėjimo būdą turėsite apmokėti už prekes mūsų salone atsiimant prekes.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            <input class="form-check-input payment-main-check" style="float: right;" type="radio" name="paymentType" id="paymentType2">
                        </div>
                        <div class="d-flex align-items-center default-card mt-20">
                            <label class="col form-check-label d-flex align-items-center" for="paymentType3">
                                <div class="row">
                                    <div class="col-lg-3 text-center">
                                        <img src="./images/pay_locally.svg"/>
                                    </div>
                                    <div class="col">
                                        <div class="vstack">
                                            <span class="d-block fs-16"><b>Mokėti vietoje</b></span>
                                            <span class="d-block fs-14 text-inactive">
                                                Pasirinkę šį mokėjimo būdą turėsite apmokėti už prekes mūsų salone atsiimant prekes.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            <input class="form-check-input payment-main-check" style="float: right;" type="radio" name="paymentType" id="paymentType3">
                        </div>
                        <button class="btn btn-next mt-40 fs-14 float-right" style="width: 300px; margin-bottom: 80px; border-radius: 8px; text-transform: uppercase; padding: 8px 10px;">Tęsti</button>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="review_content" role="tabpanel" aria-labelledby="review_tab">
                <div class="row gx-3 mt-60 align-items-stretch">
                    <div class="col-lg-4 ">
                        <div class="default-card p-15 text-center">
                            <span class="d-block p-15 pt-0 border-bottom">Pirkėjas</span>
                            <div class="sm-d-flex">
                                <div class="textDetails">
                                    <span class="d-block fs-16 mt-20"><b>Miroslav Sinkevic</b></span>
                                    <span class="d-block secondSpan fs-12 mt-20 text-inactive ">Adresas: A. Kojelaviciaus 105-7</span>
                                    <span class="d-block fs-12 mb-20 text-inactive ">Telefonas: +3700000000</span>
                                </div>
                                <div class="buttonBlock">
                                    <button class="changeBtn">Keisti</button>
                                </div>                       
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="default-card p-15 text-center">
                            <span class="d-block p-15 pt-0 border-bottom">Pristatymas</span>
                            <div class="sm-d-flex">
                                <div class="textDetails">
                                <span class="d-block fs-16 mt-20"><b>Atsiėmimas OMINVA paštomate</b></span>
                                <span class="d-block secondSpan fs-12 mt-20 text-inactive">Rimi Mylia paštomatas</span>
                                <span class="d-block fs-12 mb-20 text-inactive">Kedrų g. 4, Vilnius</span>
                                </div>
                                <div class="buttonBlock">
                                    <button class="changeBtn">Keisti</button>
                                </div>                       
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="default-card p-15 text-center">
                            <span class="d-block p-15 pt-0 border-bottom">Apmokėjimas</span>
                            <div class="sm-d-flex">
                                <div class="textDetails">
                                    <span class="d-block fs-16 mt-20"><b>El. bankininkystė</b></span>
                                    <img src="./images/swedbank.svg" style="margin-bottom: 7px;"/>
                                </div>
                                <div class="buttonBlock">
                                    <button class="changeBtn">Keisti</button>
                                </div>                       
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-60 mb-100 p-15">



                    <div class="col-lg-9 heading-container">


                    <div class="d-md-hidden">
                    <h2>Prekių krepšelis</h2>
<div class="d-flex align-items-center product-card mt-10">
    <div class="col-lg-2 text-center">
        <img src="./images/product_1_image.svg"/>
    </div>
    <div class="col-lg-3">
        <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
        <span class="item-limit hidden-md">Likutis: >10</span>
    </div>
            <div class="col-lg-2 text-center product-price-single">
                <div class="vstack">
                    <span class="product-new-price">24,99 €</span>
                </div>
            </div>
            <div class="col-lg-1 text-center amount-vertical">
                <div class="d-flex justify-content-between mt-10">
                    <button class="btn btn-quantity">+</button>
                    <span style="display: block;">0</span>
                    <button class="btn btn-quantity">-</button>
                </div>
            </div>
            <div class="col-lg-2 text-center full-price">
                <span class="d-block product-price mt-10">24,99 €</span>
            </div>
    <div class="col-lg-2 text-center btn-delete-cart">
        <button><img src="./images/trashcan-icon.svg"/></button>
    </div>
</div>

<div class="d-flex align-items-center product-card mt-10">
    <div class="col-lg-2 text-center">
        <img src="./images/product_1_image.svg"/>
    </div>
    <div class="col-lg-3">
        <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
        <span class="item-limit hidden-md">Likutis: >10</span>
    </div>
            <div class="col-lg-2 text-center product-price-single">
                <div class="vstack">
                    <span class="product-new-price">24,99 €</span>
                </div>
            </div>
            <div class="col-lg-1 text-center amount-vertical">
                <div class="d-flex justify-content-between mt-10">
                    <button class="btn btn-quantity">+</button>
                    <span style="display: block;">0</span>
                    <button class="btn btn-quantity">-</button>
                </div>
            </div>
            <div class="col-lg-2 text-center full-price">
                <span class="d-block product-price mt-10">24,99 €</span>
            </div>
    <div class="col-lg-2 text-center btn-delete-cart">
        <button><img src="./images/trashcan-icon.svg"/></button>
    </div>
</div>

<div class="d-flex align-items-center product-card mt-10">
    <div class="col-lg-2 text-center">
        <img src="./images/product_1_image.svg"/>
    </div>
    <div class="col-lg-3">
        <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
        <span class="item-limit hidden-md">Likutis: >10</span>
    </div>
            <div class="col-lg-2 text-center product-price-single">
                <div class="vstack">
                    <span class="product-new-price">24,99 €</span>
                </div>
            </div>
            <div class="col-lg-1 text-center amount-vertical">
                <div class="d-flex justify-content-between mt-10">
                    <button class="btn btn-quantity">+</button>
                    <span style="display: block;">0</span>
                    <button class="btn btn-quantity">-</button>
                </div>
            </div>
            <div class="col-lg-2 text-center full-price">
                <span class="d-block product-price mt-10">24,99 €</span>
            </div>
    <div class="col-lg-2 text-center btn-delete-cart">
        <button><img src="./images/trashcan-icon.svg"/></button>
    </div>
</div>

<div class="d-flex align-items-center product-card mt-10">
    <div class="col-lg-2 text-center">
        <img src="./images/product_1_image.svg"/>
    </div>
    <div class="col-lg-3">
        <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
        <span class="item-limit hidden-md">Likutis: >10</span>
    </div>
            <div class="col-lg-2 text-center product-price-single">
                <div class="vstack">
                    <span class="product-new-price">24,99 €</span>
                </div>
            </div>
            <div class="col-lg-1 text-center amount-vertical">
                <div class="d-flex justify-content-between mt-10">
                    <button class="btn btn-quantity">+</button>
                    <span style="display: block;">0</span>
                    <button class="btn btn-quantity">-</button>
                </div>
            </div>
            <div class="col-lg-2 text-center full-price">
                <span class="d-block product-price mt-10">24,99 €</span>
            </div>
    <div class="col-lg-2 text-center btn-delete-cart">
        <button><img src="./images/trashcan-icon.svg"/></button>
    </div>
</div>

</div>

                        <div class="d-sm-hidden">
                            
                            <div class="d-flex pl-15 pr-15 products-heading">
                                <div class="col-lg-2 text-center header-title">PREKĖ</div>
                                <div class="col-lg-3 text-center"></div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-3 text-center header-title">VIENETO KAINA</div>
                                        <div class="col-lg-3 text-center header-title">KIEKIS</div>
                                        <div class="col-lg-3 text-center header-title">LIKUTIS</div>
                                        <div class="col-lg-3 text-center header-title">SUMA</div>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <h2>Prekių krepšelis</h2>
                            <div class="d-flex align-items-center product-card mt-10">
                                <div class="col-lg-2 text-center">
                                    <img src="./images/product_1_image.svg"/>
                                </div>
                                <div class="col-lg-3">
                                    <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-3 text-center">
                                            <div class="vstack">
                                                <span class="product-old-price">26,99 €</span>
                                                <span class="product-new-price">24,99 €</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <div class="d-flex justify-content-between mt-10">
                                                <button class="btn btn-quantity">-</button>
                                                <span style="display: block;">0</span>
                                                <button class="btn btn-quantity">+</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block mt-10">8 vnt.</span>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block product-price mt-10">24,99 €</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 text-center btn-delete-cart">
                                    <button><img class="hidden-md" src="./images/trashcan-icon.svg" style="margin-top: -5px;"/><img class="hidden-sm" src="./images/bin.svg" style="margin-top: -5px;"/></button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center product-card mt-10">
                                <div class="col-lg-2 text-center">
                                    <img src="./images/product_1_image.svg"/>
                                </div>
                                <div class="col-lg-3">
                                    <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-3 text-center">
                                            <div class="vstack">
                                                <span class="product-old-price">26,99 €</span>
                                                <span class="product-new-price">24,99 €</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <div class="d-flex justify-content-between mt-10">
                                                <button class="btn btn-quantity">-</button>
                                                <span style="display: block;">0</span>
                                                <button class="btn btn-quantity">+</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block mt-10">8 vnt.</span>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block product-price mt-10">24,99 €</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 text-center btn-delete-cart">
                                    <button><img src="./images/bin.svg" style="margin-top: -5px;"/></button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center product-card mt-10">
                                <div class="col-lg-2 text-center">
                                    <img src="./images/product_1_image.svg"/>
                                </div>
                                <div class="col-lg-3">
                                    <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-3 text-center">
                                            <div class="vstack">
                                                <span class="product-old-price">26,99 €</span>
                                                <span class="product-new-price">24,99 €</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <div class="d-flex justify-content-between mt-10">
                                                <button class="btn btn-quantity">-</button>
                                                <span style="display: block;">0</span>
                                                <button class="btn btn-quantity">+</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block mt-10">8 vnt.</span>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block product-price mt-10">24,99 €</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 text-center btn-delete-cart">
                                    <button><img src="./images/bin.svg" style="margin-top: -5px;"/></button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center product-card mt-10">
                                <div class="col-lg-2 text-center">
                                    <img src="./images/product_1_image.svg"/>
                                </div>
                                <div class="col-lg-3">
                                    <span class="fs-16">Dėklas Marble Silicone Apple Iphone 12</span>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block product-price mt-10">24,99 €</span>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <div class="d-flex justify-content-between mt-10">
                                                <button class="btn btn-quantity">-</button>
                                                <span style="display: block;">0</span>
                                                <button class="btn btn-quantity">+</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block mt-10">8 vnt.</span>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <span class="d-block product-price mt-10">24,99 €</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 text-center btn-delete-cart">
                                    <button><img src="./images/bin.svg" style="margin-top: -5px;"/></button>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 bottom-container" style="padding-top: 30px;">
                        <div class="card p-20" style="height: 100%; border: none; background-color: rgba(167, 167, 167, 0.1);">
                            <span class="card-main-title d-sm-hidden">Suvestinė</span>
                            <div class="divider-div d-sm-hidden" style="width: 100%; height: 1px; background-color: #A7A7A7; margin-top: 20px; margin-bottom: 20px;"></div>
                            <div class="d-flex justify-content-between mb-20">
                                <span class="fs-14" style="color: #A7A7A7;">Viso prekių:</span>
                                <span class="fs-14 text-bolded" style="color: #A7A7A7;">35 vnt.</span>
                            </div>
                            <div class="d-flex justify-content-between mb-20">
                                <span class="fs-14" style="color: #A7A7A7;">Viso nuolaidų:</span>
                                <span class="fs-14" style="color: #EEB63F;">124,84 €</span>
                            </div>
                            <div class="d-flex justify-content-between mb-20">
                                <span class="fs-14" style="color: #A7A7A7;">Suma be PVM:</span>
                                <span class="fs-14 text-bolded">846,69 €</span>
                            </div>
                            <div class="d-flex justify-content-between mb-20">
                                <span class="fs-14" style="color: #A7A7A7;">PVM suma:</span>
                                <span class="fs-14 text-bolded">177,87 €</span>
                            </div>
                            <div class="mt-auto">
                                <div class="d-flex justify-content-between mb-20">
                                    <span class="fs-14">Prekių kaina:</span>
                                    <span class="fs-14 price-payment-mobile" style="color: #6E0EC0;"><b>1024,84 €</b></span>
                                </div>
                                <button class="btn btn-next">Pirkti</button>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="./js/scripts.js"></script>
</body>

</html>