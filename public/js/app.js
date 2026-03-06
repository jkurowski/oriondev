const el = document.querySelector('.news-carousel');

window.jQuery(el).slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
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