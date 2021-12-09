function getByAjax(brand_id) {
    $.ajax({
        url: "http://localhost/MobileStore/catalog/getByBrand&id=" + brand_id,
        type: "GET",
        success: function(data) {
            //alert("Success: " + response);
            console.log(data);
            $("#cards-container").html(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("Error");
        }
    });
}
var swiper = new Swiper('.swiper', {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        576: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 15
        },
        992: {
        slidesPerView: 4,
        spaceBetween: 20
        }
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    //   },
});