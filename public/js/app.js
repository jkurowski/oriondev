const el = document.querySelector('.news-carousel');

window.jQuery(el).slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    arrows: true,
    prevArrow: $('.slick-prev-custom'),
    nextArrow: $('.slick-next-custom'),
    responsive: [
        {
            breakpoint: 992,
            settings: { slidesToShow: 2 }
        },
        {
            breakpoint: 576,
            settings: { slidesToShow: 1 }
        }
    ]
});

// SLICK
const prevArrow = '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="8.685" height="15.588" viewBox="0 0 8.685 15.588"><path id="arrow-left" d="M285.484-836.722l.891-.891-6.9-6.9,6.9-6.9-.891-.891-7.794,7.794Z" transform="translate(-277.69 852.31)" fill="#fff"/></svg></button>';
const nextArrow = '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="8.685" height="15.588" viewBox="0 0 8.685 15.588"><path id="arrow-next" d="M278.581-836.722l-.891-.891,6.9-6.9-6.9-6.9.891-.891,7.794,7.794Z" transform="translate(-277.69 852.31)" fill="#fff"/></svg></button>';

$('.apartament-slider__slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    infinite: true,
    prevArrow: prevArrow,
    nextArrow: nextArrow,
    asNavFor: '.apartament-slider__slider-nav'
});
$('.apartament-slider__slider-for-less').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    infinite: true,
    prevArrow: prevArrow,
    nextArrow: nextArrow
});
$('.apartament-slider__slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.apartament-slider__slider-for',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    arrows: false,
    infinite: true,
});

function setCarouselOffset() {
    const containerLeft = document.querySelector('.container').getBoundingClientRect().left;
    document.querySelector('.news-carousel-wrapper').style.paddingLeft = containerLeft + 'px';
}

setCarouselOffset();
$(window).on('resize', setCarouselOffset);

document.querySelectorAll('.dropdown').forEach(dropdown => {
    const button = dropdown.querySelector('button');
    const input = dropdown.nextElementSibling;

    dropdown.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', e => {
            e.preventDefault();
            dropdown.querySelectorAll('.dropdown-item')
                .forEach(i => i.classList.remove('active'));
            item.classList.add('active');
            button.textContent = item.textContent;
            input.value = item.dataset.value;
        });
    });
});
