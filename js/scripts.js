$(document).ready(function(){
    
    $('.main-navbar').on('click', '.back-btn', function() {
        $('.temporarely-mobile-navbar').empty().removeClass('important-items');
        let name = $(this).find('p').text().trim();
        let newName = $(`.mobile-main-navbar a:contains(${name})`).parent('li').parent('ul').parent('li').children('a:first').text().trim();
        if(!newName || newName == "Ieškoti pagal modelį" || newName=="Prekių katalogas") {
            newName="Meniu";
        }
        let selected;
        if($(`.mobile-main-navbar a:contains(${name})`).parent('li').parent('ul').parent('li').length) {
            selected = $(`.mobile-main-navbar a:contains(${name})`).parent('li').parent('ul').parent('li').attr('class').includes('important-list-item');
        } else {
            selected == undefined;
        }
        let clone = $(`.mobile-main-navbar a:contains(${name})`).parent( "li" ).parent('ul').clone().html();

        console.log(selected);

        if(name=="Meniu" || !name || name == undefined){
            $('.mobile-main-navbar').removeClass('hidden'); 
        } else {

            if(selected) {

                $( ".temporarely-mobile-navbar" ).prepend(`
                <a class="row row-dark back-btn back-important">
                    <div class="col-2 text-center">
                        <img src="./images/back-icon-dark.svg"/>
                    </div>
                    <div class="col-10">
                        <p>${newName}</p>
                    </div>
                </a>
                <ul>
                    ${clone}
                </ul>
                
                `).addClass('important-items');

                } else {

                    $( ".temporarely-mobile-navbar" ).prepend(`
                    <a class="row row-dark back-btn">
                        <div class="col-2 text-center">
                            <img src="./images/menu-back.svg"/>
                        </div>
                        <div class="col-10">
                            <p>${newName}</p>
                        </div>
                    </a>
                    <ul>
                        ${clone}
                    </ul>
                    
                    `);
            }
        }


    });
    $('.main-navbar').on('click', '.li-with-dropdown', function() {

        let name = $(this).children('a:first').text().trim();
        if(!name){ 
            name = 'Meniu';
        };
        if(name == "Prekių katalogas" || name == "Ieškoti pagal modelį") {
            name = 'Meniu';
        }
        
        $('.mobile-main-navbar').addClass('hidden');
        $('.temporarely-mobile-navbar').empty();


        if ($(this).hasClass("important-list-item")) {
            $( ".temporarely-mobile-navbar" ).append( `
            <a class="row row-dark back-btn back-important"">
                <div class="col-2 text-center">
                    <img src="./images/back-icon-dark.svg"/>
                </div>
                <div class="col-10">
                    <p>${name}</p>
                </div>
            </a>
            ` );
            $(this).children( "ul" ).clone().appendTo( ".temporarely-mobile-navbar" ).addClass('important-items');

        } else {
            $( ".temporarely-mobile-navbar" ).append( `
            <a class="row row-dark back-btn"">
                <div class="col-2 text-center">
                    <img src="./images/menu-back.svg"/>
                </div>
                <div class="col-10">
                    <p>${name}</p>
                </div>
            </a>
            ` );
            $(this).children( "ul" ).clone().appendTo( ".temporarely-mobile-navbar" );

        }


    });

    $('.openFilterContainer').click(function() {
        $('.filter-main-container').removeClass('hidden');
    });
    $('.closeFilterContainer').click(function() {
        $('.filter-main-container').addClass('hidden');
    });

    $('.openFilterInnerContainer').click(function() {
        $('.openFilterInnerContainerdiv').removeClass('hidden');
    });

    $('.closeFilterInnerContainerFilter').click(function() {
        $(this).closest('.openFilterInnerContainerdiv').addClass('hidden');
        $('.filter-main-container').removeClass('hidden');
    });
    $('.closeFilterInnerContainerFilterBtn').click(function() {
        $(this).closest('.openFilterInnerContainerdiv').addClass('hidden');
    });

    $('.mobile-menu-icon').click(function() {
        $('.mobile-navbar-container').removeClass('hidden');
    });

    $('.close-navbar-button').click(function() {
        $('.mobile-navbar-container').addClass('hidden');
    });

    $('.next-menu').click(function() {
        let positive = false;
        if($(this).closest('.second-menu').hasClass('second-menu')) {
            positive = true;
        }

        if(positive) {
            $(this).closest('.second-menu').addClass('hidden');
        }

        $('.main-navbar').addClass('hidden');
        let menu = $(this).attr("data-menu");
        $('.'+menu).removeClass('hidden');
    });



    $('.slick-carousel').slick({
        infinite: true,
        slidesToShow: 5,
        dots: false,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.vertical-hero-slider').slick({
        infinite: true,
        slidesToShow: 1,
        dots: true,
        arrows: false,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 5000,
        vertical: true,
        verticalSwiping: true
    });

    $('[data-type=menu]').mouseenter(function (event) {
        $(".submenu .nav-link.show").removeClass("show");
        $(".submenu .nav-link.active").removeClass("active");
        $(this).click();
    });

    $('.product-menu [data-bs-toggle=pill]').mouseenter(function (event) {
        $(".products-menu .tab-pane.show").removeClass("show");
        $(".products-menu .tab-pane.active").removeClass("active");
        $(this).click();
    });

    $('.menu-zone').mouseleave(function (event) {
        $('[data-type=menu]').removeClass("active");
        $(".submenu .nav-link.show").removeClass("show");
        $(".submenu .nav-link.active").removeClass("active");
        $(".products-menu .tab-pane.show").removeClass("show");
        $(".products-menu .tab-pane.active").removeClass("active");
        $(".tab-pane.show").removeClass("show");
        $(".tab-pane.active").removeClass("active");
    });

    $('#delivery_content input').change(function(){
        if($('.delivery-checked').length) {
            $('.delivery-checked').removeClass('delivery-checked');
        }
        $(this).closest('.d-flex').addClass('delivery-checked');
    });

    $('.second-radioBtn input').change(function(){
       $('.first-radioBtn').prop("checked", false);
       $('.form-checked-other-person').addClass('d-block');
    });
    $('#payment_content input').change(function(){
        if($('.paymentChecked').length) {
            $('.paymentChecked').removeClass('paymentChecked');
        }
        if($('#payment_content .active').length) {
            $('#payment_content .active').removeClass('active');
        }
        $(this).closest('.d-flex').addClass('paymentChecked').addClass('active');
     });
    
    document.querySelectorAll('.main-menu .dropdown').forEach(function(menuItem){
        menuItem.addEventListener('mouseover', function(e){
            let linkElem = this.querySelector('a[data-bs-toggle]');
            if(linkElem != null){
                let nextEl = linkElem.nextElementSibling;
                linkElem.classList.add('show');
                nextEl.classList.add('show');
            }

        });
        menuItem.addEventListener('mouseleave', function(e){
            let linkElem = this.querySelector('a[data-bs-toggle]');
            if(linkElem != null){
                let nextEl = linkElem.nextElementSibling;
                linkElem.classList.remove('show');
                nextEl.classList.remove('show');
            }


        })
    });

    $('[data-bs-toggle="popover"]').popover({
        container: 'body'
    });

    $('#price_range_slider').rangeSlider({
        direction: "horizontal",
        type: "interval",
        skin: "custom",
        settings: false,
        bar: true,
        tip: true,
        scale: false
    },
    {
        min: 1,
        max: 250,
        step: 1,
        values: [60, 160]
    });
});

function toggleRegistrationType() {
    let elem = document.getElementById("registrationTypeCompany");
    let companyContainer = document.getElementById("company_registration_info");
    if (elem.checked) {
        companyContainer.classList.remove('d-none');
    } else {
        companyContainer.classList.add('d-none');
    }
}

function enableLogin() {
    let loginContainer = document.getElementById("login_container");
    let registrationContainer = document.getElementById("registration_container");
    loginContainer.classList.remove('d-none');
    registrationContainer.classList.add('d-none');
    $('.login-form').removeClass('hidden');
}

function enableRegistration() {
    let loginContainer = document.getElementById("login_container");
    let registrationContainer = document.getElementById("registration_container");
    document.getElementById("login-disable-mobile").classList.add("hidden");
    loginContainer.classList.add('d-none');
    registrationContainer.classList.remove('d-none');
}